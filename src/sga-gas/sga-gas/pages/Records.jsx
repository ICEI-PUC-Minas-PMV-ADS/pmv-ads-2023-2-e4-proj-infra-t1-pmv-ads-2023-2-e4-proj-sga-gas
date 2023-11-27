import { View, Text, ScrollView } from 'react-native';
import SecondaryLogo from '../components/SecondaryLogo.jsx';
import { Card, Button } from 'react-native-paper';
import {useEffect, useState} from 'react';

const RecordCard = (props) => {
 

  return (
    <Card style={{ marginTop: 40, textAlign: 'center', alignItems: 'center', height: 200 }}>
        
        <Card.Content>
          <Text style={{ fontWeight: 'bold' }} variant="titleLarge">Id: {props.title}</Text>
          <Text style={{ fontWeight: 'bold' }} variant="bodyMedium">Sender: {props.sender}</Text>
          <Text style={{ fontWeight: 'bold' }} variant="bodyMedium">Client: {props.client}</Text>
          <Text style={{ fontWeight: 'bold' }} variant="bodyMedium">Date: {props.date}</Text>
          <Text style={{ fontWeight: 'bold' }} variant="bodyMedium">Products: {[props.products]}</Text>
          <Text style={{ fontWeight: 'bold' }} variant="bodyMedium">Total: R$ {props.total}</Text>

        </Card.Content>
        <Card.Actions>
          <Button style={{ marginLeft: 'auto', marginRight: 'auto'}} color={props.color} icon="circle"></Button>
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

  useEffect(() =>{
    fetch('http://localhost:3000/orders')
.then(data => {
return data.json();
})
.then(order => {
  setOrders(order)
});
  }, [])

  return (
    <ScrollView style={{ flex: 1, alignItems: 'center', backgroundColor: "#ffffff" }}>
      
      <SecondaryLogo />

      <Card mode='outlined' style={{ marginTop: 40, textAlign: 'center', alignItems: 'center', height: 150 }}>
        
        {/* Subtitle */}
        <Card.Content>

          
          <Button icon='circle' color='orange'>
            <Text style={{ fontWeight: 'bold', color: 'black' }}>Requests</Text>
          </Button>
          {/*

          <Button icon='circle' color="#cbf3f0">
            <Text style={{ fontWeight: 'bold', color: 'black' }}>Buys</Text>
          </Button>
          <Button icon='circle' color="#2ec4b6">
            <Text style={{ fontWeight: 'bold', color: 'black' }}>Records</Text>
          </Button>
           */}

        </Card.Content>
      </Card>

      {/* Foreach record */}
      {
        orders.map((item) => {
          return (
            <RecordCard title={item._id} client={'Rafael N'} date={'26/11/2023'} sender={"Rafael N"} products={[item.products]} total={item.total} color={colors.requests} /> 
          )
        })
      }
         

      {/* Endforeach */}
    </ScrollView>
  )
}