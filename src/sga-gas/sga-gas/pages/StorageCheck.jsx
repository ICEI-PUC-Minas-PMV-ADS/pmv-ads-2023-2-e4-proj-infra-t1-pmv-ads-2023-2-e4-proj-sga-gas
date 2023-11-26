import { View, Text, StyleSheet, ScrollView } from 'react-native';
import { List, Button } from 'react-native-paper';
import SecondaryLogo from '../components/SecondaryLogo.jsx';
import {useEffect, useState} from 'react';

const deleteProduct = (id) => {
  fetch('http://localhost:3000/products/delete', {
    method: 'delete',
    headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json',
    },

    //make sure to serialize your JSON body
    body: JSON.stringify({
      id: id
    }),
  }).then((response) => {
    //do something awesome that makes the world a better place
    console.log(response.json());
  }).catch(console.error());
}

const buyProduct = (id) => {
  fetch('http://localhost:3000/products/buy', {
    method: 'post',
    headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json',
    },

    //make sure to serialize your JSON body
    body: JSON.stringify({
      id: id
    }),
  }).then((response) => {
    //do something awesome that makes the world a better place
    console.log(response.json());
  }).catch(console.error());
}

const sellProduct = (id, total) => {
  fetch('http://localhost:3000/products/sell', {
    method: 'post',
    headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json',
    },

    //make sure to serialize your JSON body
    body: JSON.stringify({
      id: id,
      total: total
    }),
  }).then((response) => {
    //do something awesome that makes the world a better place
    console.log(response.json());
  }).catch(console.error());
}

export default function StorageCheck ({ navigation }) {

  const [products, setProducts] = useState([]);

  useEffect(() =>{
    fetch('http://localhost:3000/products/')
.then(data => {
return data.json();
})
.then(product => {
  setProducts(product)
});
  }, [])

  return (
      <ScrollView  style={{ backgroundColor: "#ffffff", flex: 1, alignItems: 'center' }}>

      <SecondaryLogo />

      <View style={{ flex: 1, flexDirection: 'row', marginVertical: 30, backgroundColor: '#F8F8F8', borderRadius: 50 }}>
        {/* Set an un user as admin */}
        {/* Redirects to the web 
        <Button labelStyle={{ fontWeight: 'bold', fontSize: 20 }} color="#2ec4b6">A</Button>
        */}
        
        
        {/* Delete users */}
        {/* Redirects to the web 
        <Button labelStyle={{ fontWeight: 'bold', fontSize: 20}} color="orange">-</Button>
        */}
        

        {/* Add product */}
        <Button labelStyle={{ fontWeight: 'bold', fontSize: 20}} color="#2ec4b6" onPress={() => navigation.navigate('CreateProduct')}>+</Button>

      </View>


        {/* Foreach item returned from the API */}
        <View>
          { products?.map( (item) => {
            return(
              <>
<List.Item
          titleStyle={{
            color: "#ffffff", 
            backgroundColor: "#2ec4b6",
            fontWeight: "light",
            fontSize: 12,
            
            textAlign: 'center',
          }}
          descriptionStyle={{
            textAlign: 'center',
          }}
          title={item._id}
          description={`Available amount: ${item.qnty}\n Price: R\$ ${item.price}`}
        >
        </List.Item>

        {/* Buy button */}
        <Button
        style={styles.button}
        color="#cbf3f0"
        mode="contained"
        labelStyle={{
          fontWeight: 'bold'
        }}

        onPress={() => buyProduct(item._id)}
        >Buy</Button>

        {/* Sell button */}
        <Button
        style={styles.button}
        color="#ffbf69"
        mode="contained"
        labelStyle={{ 
          fontWeight: 'bold'
        }}
        
                onPress={() => sellProduct(item._id, item.price)}

        >Sell</Button>

        {/* Delete button 
        
        
        */}
        

                <View style={{ marginVertical: 24 }}></View>

              </>
            )
            
          }) }
        </View>

        {/* Endforeach */}


      </ScrollView>
  )
}

const styles = StyleSheet.create({
  button : {
    borderRadius: 7,
    width: 200,
    marginTop: 10,
    textAlign: 'center'
  }
});