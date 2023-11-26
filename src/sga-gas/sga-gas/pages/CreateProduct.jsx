import { View, Text, StyleSheet, TextInput } from 'react-native';
import { useState } from 'react';
import DefaultButton from '../components/DefaultButton.jsx';
import DefaultLogo from '../components/DefaultLogo.jsx';

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
    
    console.log(response.json());
  }).catch(console.error());
}

export default function CreateProduct ({ navigation }) {

  const [quantidade, setQuantidade] = useState();
  const [preco, setPreco] = useState();

  const [feedbackMessage, setFeedbackMessage] = useState('');

  return (
      <View style={styles.container}>

        <DefaultLogo />

        <Text style={ styles.label }>Quantidade</Text>
        
        {/* quantidade */}
        <TextInput
        editable
        onChangeText={quantidade => setQuantidade(quantidade)}
        value={ quantidade }
        style={ styles.input }
        placeholder={14}
        />

        <View style={{ marginTop: '1rem' }}></View>

      <Text style={ styles.label }>Preço</Text>
      {/* Password */}
      <TextInput
      editable
      onChangeText={preco => setPreco(preco)}
      value={ preco }
      style={ styles.input }
      placeholder="29.90"
      />

      <Text style={ styles.feedback }>{ feedbackMessage }</Text>

      { /* Button component */ }
      <DefaultButton buttonText={'Create'} callBackRequest={ () => create(quantidade, preco) } />
      
    </View>
  );
}

const styles = StyleSheet.create({
  container : {
    backgroundColor: '#ffffff',
    flex: 1,
    justifyContent: 'center',
  },
  label : {
    fontWeight: 'bold',
    margin: '5% 10%'
  },
  input : {
    borderRadius: 20,
    color: 'grey',
    padding: 5
  },
  feedback : {
    color: '#ff9f1c',
    margin: '5% 10%'
  },
});