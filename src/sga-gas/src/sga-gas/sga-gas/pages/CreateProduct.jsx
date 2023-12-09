import { View, Text, StyleSheet, TextInput } from 'react-native';
import { Button } from 'react-native-paper';
import { useState } from 'react';
import DefaultLogo from '../components/DefaultLogo.jsx';
import React from 'react';
import FeedBack from '../components/FeedBack.jsx';

export default function CreateProduct({ navigation }) {

  const [quantidade, setQuantidade] = useState(0);
  const [preco, setPreco] = useState(0);

  const [msg, setMsg] = useState('');


  const create = (quantidade, preco) => {
    fetch('http://localhost:3000/products/create', {
      method: 'post',
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
      },


      body: JSON.stringify({
        qnty: quantidade,
        price: preco,
      }),
    }).then((response) => {
      if (response.status != 200) {
        console.log(response.body);
        setMsg("Erro, verifique seus dados!");
        // alert(response.status);

      } else if (preco === " " || preco === 0 || preco === " " || typeof(preco) === String || quantidade === " " || quantidade === 0 || quantidade === " " || typeof(quantidade) === String) {
        console.log("Dados inseridos inválidos! Por favor, verificar!");
        setMsg("Dados inseridos inválidos! Por favor, verificar!");
      } else {
        console.log("Registered with success!");
        console.log(preco, quantidade)
        setMsg("Registrado com sucesso!");
      }
    })
      .catch(setMsg("Tente novamente mais tarde!"));
  }


  return (
    <View style={styles.container}>

      <DefaultLogo />

      <Text style={styles.label}>Quantidade</Text>

      {/* quantidade */}
      <TextInput
        editable
        onChangeText={quantidade => setQuantidade(quantidade)}
        value={quantidade}
        style={styles.input}
        placeholder={'14'}
      />

      <View style={{ marginTop: '1rem' }}></View>

      <Text style={styles.label}>Preço</Text>
      {/* Password */}
      <TextInput
        editable
        onChangeText={preco => setPreco(preco)}
        value={preco}
        style={styles.input}
        placeholder="29.90"
      />

      { /* Button component */}
      <Button style={styles.button} labelStyle={{ color: "#ffffff" }} onPress={() => create(quantidade, preco)}>Create</Button>

      <FeedBack>{msg}</FeedBack>
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
    width: 200,

    marginLeft: 'auto',
    marginRight: 'auto',
    marginVertical: 20
  }
});