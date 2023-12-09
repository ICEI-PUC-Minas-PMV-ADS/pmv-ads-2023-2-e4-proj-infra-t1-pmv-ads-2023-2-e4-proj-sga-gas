import { View, Text, StyleSheet, TextInput } from 'react-native';
import React, { useState } from 'react';
import { Button } from 'react-native-paper';
import DefaultLogo from '../components/DefaultLogo.jsx';
import FeedBack from '../components/FeedBack.jsx';

export default function Register() {

  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [msg, setMsg] = useState('');
  const [passwordConfirmation, setPasswordConfirmation] = useState('');


  const registerUser = (email, password) => {
    fetch('http://localhost:3000/users/register', {
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
    }).then((response) => {
      if (response.status != 200) {
        console.log(response.body);
        setMsg("Erro, verifique seus dados!");
        // alert(response.status);
      } else if (password === '' || password === ' ' || password === null || email === '' || email === ' ' || email === ' ') {
        console.log("Sua senha ou email está incorreta(o)!");
        setMsg("Sua senha ou email está incorreta(o)!");
      } else if (password.length <= 8) {
        setMsg("Sua senha é muito curta!");
      }
      else {
        console.log("Registered with success!");
        setMsg("Registrado com sucesso!");
        setTimeout(() => navigation.navigate("Login"), 3000)
      }
    })
      .catch(setMsg("Tente novamente mais tarde!"));
  }

  return (
    <View style={styles.container}>

      <DefaultLogo />

      <Text style={styles.label}>Email</Text>

      {/* email */}
      <TextInput
        editable
        onChangeText={email => setEmail(email)}
        value={email}
        style={styles.input}
      />

      <View style={{ marginTop: 10 }}></View>

      <Text style={styles.label}>Password</Text>
      {/* Password */}
      <TextInput
        secureTextEntry
        editable
        onChangeText={password => setPassword(password)}
        value={password}
        style={styles.input}
      />

      <FeedBack>{msg}</FeedBack>

      { /* Button component */}
      <Button mode='contained' style={styles.button} onPress={() => registerUser(email, password)}>Register</Button>

    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    backgroundColor: '#ffffff',
    flex: 1,
    justifyContent: 'center',
  },
  label: {
    fontWeight: 'bold',
  },
  input: {
    borderRadius: 20,
    color: 'grey',
    padding: 5
  },
  feedback: {
    color: '#ff9f1c',
  },
  button: {
    backgroundColor: 'orange',
    color: "#ffffff",
    width: 200,

    marginLeft: 'auto',
    marginRight: 'auto',
    marginVertical: 20
  }
});