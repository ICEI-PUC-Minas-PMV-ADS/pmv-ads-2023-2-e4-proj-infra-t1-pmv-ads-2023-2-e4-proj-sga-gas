import { NavigationContainer } from '@react-navigation/native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import Records from './Records.jsx';
import StorageCheck from './StorageCheck.jsx';
import CreateProduct from './CreateProduct.jsx';
import React from 'react';

const Tab = createMaterialBottomTabNavigator();

export default function Router(props) {

    return (
        <NavigationContainer independent={true}>
            <Tab.Navigator
                barStyle={{ backgroundColor: '#ff9f1c', display: props.isLogged ? 'none' : 'flex' }}
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
}