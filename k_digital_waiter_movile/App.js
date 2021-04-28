import React from 'react';
import { NavigationContainer } from '@react-navigation/native'
import MenuStack from './src/components/menu/MenuStack'

const App = () => {
  return (
    <NavigationContainer>
      <MenuStack />
    </NavigationContainer>
  )
};

export default App;
