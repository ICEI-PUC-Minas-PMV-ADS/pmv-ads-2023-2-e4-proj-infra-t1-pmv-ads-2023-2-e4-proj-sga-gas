import { Text, ScrollView, StyleSheet } from 'react-native';
import SecondaryLogo from '../components/SecondaryLogo.jsx';
import { Card, Button } from 'react-native-paper';
import { useEffect, useState } from 'react';
import React from 'react';

const RecordCard = (props) => {

  return (
    <Card style={{
      backgroundColor: '#ffffff',
      marginTop: 40, textAlign: 'center', alignItems: 'center', height: 200
    }}>

      <Card.Content style={{ backgroundColor: '#ffffff' }}>
        <Text style={{ fontWeight: 'bold', backgroundColor: '#ffffff' }}>Id: {props.title}</Text>
        <Text style={{ fontWeight: 'bold', backgroundColor: '#ffffff' }}>Sender: {props.sender}</Text>
        <Text style={{ fontWeight: 'bold', backgroundColor: '#ffffff' }}>Client: {props.client}</Text>
        <Text style={{ fontWeight: 'bold', backgroundColor: '#ffffff' }}>Date: {props.date}</Text>
        <Text style={{ fontWeight: 'bold', backgroundColor: '#ffffff' }}>Products: {[props.products]}</Text>
        <Text style={{ fontWeight: 'bold', backgroundColor: '#ffffff' }}>Total: R$ {props.total}</Text>

      </Card.Content>
      <Card.Actions>
        <Button style={{ marginLeft: 'auto', marginRight: 'auto' }} color={props.color} icon="circle">Text here!</Button>
      </Card.Actions>
    </Card>
  );
};

const colors = {
  requests: 'orange',
  buys: '#cbf3f0',
  records: '#2ec4b6'
}

export default function Records() {

  const [orders, setOrders] = useState([]);

  useEffect(() => {
    fetch('http://localhost:3000/orders')
      .then(data => {
        return data.json();
      })
      .then(order => {
        setOrders(order)
      });
  }, [])

  return (
    <ScrollView contentContainerStyle={{ flex: 1, alignItems: 'center', backgroundColor: "#ffffff" }}>

      <SecondaryLogo />

      <Card mode='outlined' style={{ marginTop: 40, textAlign: 'center', alignItems: 'center', height: 150 }}>

        {/* Subtitle */}
        <Card.Content>


          <Button icon='circle' color='orange'>
            <Text style={{ fontWeight: 'bold', color: 'black' }}>Requests</Text>
          </Button>

        </Card.Content>
      </Card>

      {/* Foreach record */}
      {
        orders.map((key, item) => {
          return (
            <RecordCard title={item._id} client={'Rafael N'} date={'26/11/2023'} sender={"Rafael N"} products={[item.products]} total={item.total} color={colors.requests} />
          )
        })
      }


      {/* Endforeach */}
    </ScrollView>
  )
}