import { View, Text, StyleSheet, TextInput } from 'react-native';
import { useState } from 'react';
import DefaultButton from '../components/DefaultButton.jsx';
import DefaultLogo from '../components/DefaultLogo.jsx';

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
    //do something awesome that makes the world a better place
    console.log(response.json());
  }).catch(console.error());
}

export default function Register () {

  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [passwordConfirmation, setPasswordConfirmation] = useState('');
  const [feedbackMessage, setFeedbackMessage] = useState('');

  return (
      <View style={styles.container}>

        <DefaultLogo />

        <Text style={ styles.label }>Email</Text>
        
        {/* email */}
        <TextInput
        editable
        onChangeText={email => setEmail(email)}
        value={ email }
        style={ styles.input }
        />

        <View style={{ marginTop: '1rem' }}></View>

      <Text style={ styles.label }>Password</Text>
      {/* Password */}
      <TextInput
      secureTextEntry
      editable
      onChangeText={password => setPassword(password)}
      value={ password }
      style={ styles.input }
      />

      <Text style={ styles.feedback }>{ feedbackMessage }</Text>

      { /* Button component */ }
      <DefaultButton buttonText={'Register'} callBackRequest={ () => registerUser(email, password)} />
      
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