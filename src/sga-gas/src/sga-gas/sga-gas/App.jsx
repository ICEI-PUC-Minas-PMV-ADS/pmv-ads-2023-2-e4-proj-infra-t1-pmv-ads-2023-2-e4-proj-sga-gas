import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Register from './pages/Register';
import Login from './pages/Login';
import Router from './pages/Router';

const Stack = createNativeStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName='Login'>
        <Stack.Screen name="Login" component={Login} />
        <Stack.Screen name="Register" component={Register} />

        {/* Se o usuário logar, envie-o para cá e renderize um novo router */}
        <Stack.Screen name="Router" component={Router} />
      </Stack.Navigator>
    </NavigationContainer>
  )
}
