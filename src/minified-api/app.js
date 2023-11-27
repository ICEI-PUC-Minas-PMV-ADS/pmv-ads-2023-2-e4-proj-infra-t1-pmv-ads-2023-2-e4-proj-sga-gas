const express = require('express');
var cors = require('cors');

const app = new express();

app.use(cors())
app.use(express.json())

// === DataBase ===
const mongoose = require("mongoose");

mongoose.set("strictQuery", false);

// Define the database URL to connect to.
mongoose.connect('mongodb://127.0.0.1:27017/sga')
    .then(() => console.log("Connected with the database!"));

// Schemas
const Schema = mongoose.Schema;
const ObjectId = Schema.ObjectId;

const User = new Schema({
    id: ObjectId,
    email: String,
    password: String,
});

const Product = new Schema({
    id: ObjectId,
    qnty: Number,
    price: Number
});

const Order = new Schema({
    id: ObjectId,
    client: Object,
    date: Date,
    products: Array,
    total: Number
});



// Models
const userModel = mongoose.model('User', User);
const productModel = mongoose.model('Product', Product);
const orderModel = mongoose.model('Order', Order);
// ===

// === ROUTES ===
app.get('/', (req, res) => {
    return res.status(200).send('=== SUPERQUICK MINIFIED API BY Rafael N ===');
});

app.post('/users/register', (req, res) => {
    if (req.method === 'POST') {

        const MyModel = mongoose.model('User', User);
        const user = new MyModel();

        user.email = req.body['email'];
        user.password = req.body['password'];
        user.save();

        return res.status(200).send("User", user.email, 'created with success!');
    }
});

app.post('/users/login', (req, res) => {
    if (req.method === 'POST') {

        userModel.find({ email: req.body.email, password: req.body.password }).then(user => {
            if (user[0] === undefined) {
                // console.log(user)
                console.log('Error: email or password incorrect!');
                return res.status(401).send('Error: email or password incorrect!');
            } else {
                // console.log(user)

                console.log('Logged with success!')
                return res.status(200).send('Logged with success!');
            }
        })

    }
});

app.post('/products/create', (req, res) => {
    if (req.method === 'POST') {
        const product = new productModel();
        product.qnty = req.body.qnty;
        product.price = req.body.price;

        product.save();

        console.log('Product created with success!');
        res.status(200).send('Product created with success!');
    }
});

app.get('/products', (req, res) => {
    products = productModel.find({}).then((products) => res.status(200).send(products));
    products = productModel.find({}).then((products) => console.log(products));
})


app.delete('/products/delete', function (req, res) {
    if (req.method === 'DELETE') {
        let id = req.body.id;
        const MyModel = mongoose.model('Product', Product);

        MyModel.findByIdAndDelete(id);

        console.log(req.body.id, "deleted with success!");
        return res.status(200).send('Product deleted with success!');
    }
});

app.post('/products/buy', function (req, res) {
    if (req.method === 'POST') {
        let id = req.body.id;
        productModel.findById(id).then(prod => {

            prod.qnty += 1;
            prod.save();

            console.log("Product bought with success!");
            return res.status(200).send('Product bought with success!');
        })
    }
});

app.post('/products/sell', function (req, res) {
    if (req.method === 'POST') {
        let id = req.body.id;

        productModel.findById(id).then(prod => {

            prod.qnty -= 1;
            prod.save();
            /*
            id: ObjectId,
            client: Object,
            date: Date,
            products: Array,
            total: Number
            */

            order = new orderModel();
            order.products = [id];
            order.total = req.body.total;
            order.save();

            console.log("Product sold with success! New order created!");
            return res.status(200).send('Product sold with success! New order created!');
        })
    }
});

app.get('/orders/', (req, res) => {
    orders = orderModel.find({}).then((orders) => res.status(200).send(orders));
    orders = orderModel.find({}).then((orders) => console.log(orders));
});

// ===

// === SERVER ===
app.listen(3000, () => {
    console.log('Connected with the web server in localhost:3000!');
});
// ===