import { View, Text, StyleSheet, ScrollView } from 'react-native';

export default function SecondaryLogo () 
{
  return (
    <View style={{ marginTop: 50, height: 50}}>
        <Text style={{
          fontSize: 30,
          fontWeight: 'bold' 
        }}>
          Storage Check
        </Text>

        <Text
        style={{
          color: 'orange',
          fontWeight: 'bold'
        }}
        >
          SGA distributor
        </Text>
      </View>
  )
}