import React from "react";
import { Text } from 'react-native';

const FeedBack = (props) => {
    return (
        <Text style={{ color: 'red', textAlign: 'center' }}>{props.children}</Text>
    )
}

export default FeedBack;