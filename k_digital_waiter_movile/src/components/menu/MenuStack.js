import React from 'react'
import { createStackNavigator } from '@react-navigation/stack'
import MenuScreen from './MenuScreen'
import Colors from '../../res/colors'

const Stack = createStackNavigator()

const MenuStack = () => {
    return (

        <Stack.Navigator
            screenOptions={{
                headerStyle: {
                    backgroundColor: Colors.blackPearl,
                    shadowColor: Colors.blackPearl
                },
                headerTintColor: Colors.white,
                headerTitleAlign: 'center',
                headerTitleStyle: {
                    fontSize: 38
                }
            }}>
            <Stack.Screen name='Menú' component={MenuScreen} />
        </Stack.Navigator>

    )
}

export default MenuStack