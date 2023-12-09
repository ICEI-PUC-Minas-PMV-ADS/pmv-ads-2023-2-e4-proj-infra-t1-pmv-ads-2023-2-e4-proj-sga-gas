import { View, Text } from 'react-native';

export default function DefaultLogo () {
  return (
    <View style={{ paddingBottom: "8%" }}>
      <Text
      style={{
        color: "orange",
        fontSize: 40,
        fontWeight: "bold",
        textAlign: "center"
      }}
      >SGA</Text>

      <Text
      style={{
        color: "orange",
        fontSize: 20,
        fontWeight: "bold",
        textAlign: "center"
      }}
      >Distribuidora</Text>
    </View>
  );
};