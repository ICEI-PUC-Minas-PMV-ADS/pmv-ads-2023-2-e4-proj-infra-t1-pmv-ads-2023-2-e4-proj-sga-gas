import { NavigationContainer } from '@react-navigation/native';
import Register from './pages/Register.jsx';
import { Text, StyleSheet, View, Pressable, TextInput } from 'react-native';
import DefaultButton from './components/DefaultButton.jsx';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import StorageCheck from './pages/StorageCheck.jsx';
import Records from './pages/Records.jsx';
import CreateProduct from './pages/CreateProduct.jsx';
import DefaultLogo from './components/DefaultLogo.jsx';
import { useState, useEffect } from 'react';
import Router from './components/router.jsx';

const Tab = createMaterialBottomTabNavigator();

const LoginScreen = ({navigation}) => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [feedbackMessage, setFeedbackMessage] = useState();

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
        //do something awesome that makes the world a better place
        if (response.status != 200) {
          console.log();
          // alert(response.status);
        } else {
          isLogged = true;
          
        }
      })
      .catch(console.error());
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

      <View style={{ marginTop: '1rem' }}></View>

      <Text style={styles.label}>Password</Text>
      {/* Password */}
      <TextInput
        secureTextEntry
        editable
        onChangeText={(password) => setPassword(password)}
        value={password}
        style={styles.input}
      />

      <Text style={styles.feedback}>{feedbackMessage}</Text>

      {/* Button component */}
      <DefaultButton
        buttonText={'Login'}
        callBackRequest={() => loginUser(email, password)}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    backgroundColor: '#ffffff',
    flex: 1,
    justifyContent: 'center',
  },
  label: {
    fontWeight: 'bold',
    margin: '5% 10%',
  },
  input: {
    borderRadius: 20,
    color: 'grey',
    padding: 5,
  },
  feedback: {
    color: '#ff9f1c',
    margin: '5% 10%',
  },
});

const HomeScreen = ({ navigation }) => {
  const styles = StyleSheet.create({
    container: {
      flex: 1,
      justifyContent: 'center',
      backgroundColor: '#ffffff',
    },
    text: {
      color: '#ff9f1c',
      fontSize: '50%',
      fontWeight: 'bold',
      textAlign: 'center',
    },
    header: {
      color: '#ff9f1c',
      fontSize: '100%',
      fontWeight: 'bolder',
      textAlign: 'center',
    },
    textSp: {
      color: '#2ec4b6',
      textAlign: 'center',
      fontWeight: 'bold',
      textDecoration: 'underline',
    },
  });

  return (
    <View style={styles.container}>
      <Text style={styles.header}>SGA</Text>
      <Text style={styles.text}>Distribuidora</Text>
      <Text
        style={{
          textAlign: 'left',
          fontWeight: 'bold',
          marginLeft: '15%',
        }}>
        Sistema de Gestão de Acesso
      </Text>

      <DefaultButton
        buttonText={'Login'}
        callBackRequest={() => navigation.navigate('Login')}
      />
      <Pressable onPress={() => navigation.navigate('Register')}>
        <Text style={styles.textSp}>Register</Text>
      </Pressable>
    </View>
  );
};

export default function App() {
  return <Router isLogged={true} />

/*
  if (isLogged) {
    return (
      <NavigationContainer>
        <Tab.Navigator
          barStyle={{ backgroundColor: '#ff9f1c' }}
          activeColor="#2ec4b6"
          inactiveColor="#ffffff">
          <Tab.Screen
            name="Storage"
            component={StorageCheck}
            options={{
              tabBarLabel: 'Storage',
              tabBarIcon: ({ color }) => (
                <MaterialCommunityIcons name="inbox" color={color} size={26} />
              ),
            }}
          />

          <Tab.Screen
            name="Records"
            component={Records}
            options={{
              tabBarLabel: 'Records',
              tabBarIcon: ({ color }) => (
                <MaterialCommunityIcons name="record" color={color} size={26} />
              ),
            }}
          />

          <Tab.Screen
            name="CreateProduct"
            component={CreateProduct}
            options={{
              tabBarLabel: 'New',
              tabBarIcon: ({ color }) => (
                <MaterialCommunityIcons name="plus" color={color} size={26} />
              ),
            }}
          />
        </Tab.Navigator>
      </NavigationContainer>
    );
  } else {
    return (
      <NavigationContainer>
        <Tab.Navigator
          barStyle={{ backgroundColor: '#ff9f1c' }}
          activeColor="#2ec4b6"
          inactiveColor="#ffffff">
          <Tab.Screen
            name="Home"
            component={LoginScreen}
            options={{
              tabBarLabel: 'Login',
              tabBarIcon: ({ color }) => (
                <MaterialCommunityIcons name="login" color={color} size={26} />
              ),
            }}
          />
          <Tab.Screen
            name="Register"
            component={Register}
            options={{
              tabBarLabel: 'Register',
              tabBarIcon: ({ color }) => (
                <MaterialCommunityIcons name="plus" color={color} size={26} />
              ),
            }}
          />
        </Tab.Navigator>
      </NavigationContainer>
    );
  }*/
}
