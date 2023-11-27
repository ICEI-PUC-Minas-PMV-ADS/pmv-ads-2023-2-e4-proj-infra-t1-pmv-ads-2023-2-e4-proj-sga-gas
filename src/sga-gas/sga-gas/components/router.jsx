import { NavigationContainer } from '@react-navigation/native';
import Register from '../pages/Register.jsx';
import { Text, StyleSheet, View, Pressable, TextInput } from 'react-native';
import DefaultButton from './DefaultButton.jsx';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import StorageCheck from '../pages/StorageCheck.jsx';
import Records from '../pages/Records.jsx';
import CreateProduct from '../pages/CreateProduct.jsx';
import DefaultLogo from './DefaultLogo.jsx';
import { useState, useEffect } from 'react';

const Tab = createMaterialBottomTabNavigator();

export default function Router(props) {

  if (props.isLogged) {
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
  }
}
