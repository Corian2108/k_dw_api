import React, { Component } from 'react'
import { View, FlatList, StyleSheet } from 'react-native'
import Http from '../../libs/http'
import Colors from '../../res/colors'
import MenuItem from './MenuItem'


class MenuScreen extends Component {

    state = {
        dishes: []
    }

    componentDidMount = async () => {
        const menu = await Http.instance.get('http://192.168.100.61:8000/api/v1/dishes')

        this.setState({ dishes: menu.data })
    }

    render() {

        const { dishes } = this.state

        return (
            <View style={styles.container}>
                <FlatList
                    data={dishes}
                    renderItem={({ item }) =>
                        <MenuItem item={item} />
                    } />
            </View>
        )
    }

}


const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: Colors.backgroud,
    }
})

export default MenuScreen