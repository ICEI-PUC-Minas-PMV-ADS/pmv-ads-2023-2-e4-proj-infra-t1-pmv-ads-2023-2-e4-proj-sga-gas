import { StyleSheet } from 'react-native';
import { Button } from 'react-native-paper';

type ButtonProps = {
  buttonText: String,
  callBackRequest: String | Object
}

export default function DefaultButton (props: ButtonProps) {
  return (
    <Button
      mode="contained"
      onPress={() => props.callBackRequest()}
      style={ styles.button }>
      {props.buttonText}
    </Button>
  );
}

const styles = StyleSheet.create({
  button : {
    backgroundColor: 'orange',
    color: "#ffffff",
    width: 200,
    
    marginLeft: 'auto',
    marginRight: 'auto',
    marginVertical: 20
  }
});