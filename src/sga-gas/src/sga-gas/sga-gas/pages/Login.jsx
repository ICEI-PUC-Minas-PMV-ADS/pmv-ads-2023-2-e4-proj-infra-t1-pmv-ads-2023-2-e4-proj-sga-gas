import { Text, StyleSheet, View, TextInput } from 'react-native';
import DefaultLogo from '../components/DefaultLogo.jsx';
import { useState } from 'react';
import { Button } from 'react-native-paper';
import React from 'react';
import FeedBack from '../components/FeedBack.jsx';

const Login = ({ navigation }) => {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [msg, setMsg] = useState('');

    const loginUser = (email, password) => {
        fetch('http://localhost:3000/users/login', {
            method: 'post',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            },

            //make sure to serialize your JSON body
            body: JSON.stringify({
                email: email,
                password: password,
            }),
        })
            .then((response) => {
                if (response.status != 200) {
                    console.log(response.body);
                    setMsg("Erro, verifique seus dados!");
                    // alert(response.status);
                } else if (password === '' || password === ' ' || password === null || email === '' || email === ' ' || email === ' ') {
                    console.log("Sua senha ou email está incorreta(o)!");
                    setMsg("Sua senha ou email está incorreta(o)!");
                }
                else {
                    console.log("Logged in!");
                    navigation.navigate("Router")
                }
            })
            .catch(setMsg("Tente novamente mais tarde!"));
    };

    return (
        <View style={styles.container}>
            <DefaultLogo />

            <Text style={styles.label}>Email</Text>

            {/* email */}
            <TextInput
                editable
                onChangeText={(email) => setEmail(email)}
                value={email}
                style={styles.input}
            />

            <View style={{ marginTop: 10 }}></View>

            <Text style={styles.label}>Password</Text>

            {/* Password */}
            <TextInput
                secureTextEntry
                editable
                onChangeText={(password) => setPassword(password)}
                value={password}
                style={styles.input}
            />

            {/* Button component loginUser(email, password) */}
            <Button mode='contained' style={styles.button} onPress={() => loginUser(email, password)}>Login</Button>

            <Button onPress={() => navigation.navigate('Register')} mode="text" labelStyle={{ color: '#2ec4b6', fontWeight: 'bold', textAlignVertical: 'center' }}>Register a new account</Button>

            <FeedBack>{msg}</FeedBack>
        </View>
    );
};

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#ffffff',
        flex: 1,
        justifyContent: 'center'
    },
    label: {
        fontWeight: 'bold',
    },
    input: {
        borderRadius: 20,
        color: 'grey',
        padding: 5
    },
    button: {
        backgroundColor: 'orange',
        width: 200,

        marginLeft: 'auto',
        marginRight: 'auto',
        marginVertical: 20
    }
});

export default Login;