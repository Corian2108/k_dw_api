import React, { Component, useState } from 'react'
import { View, Text, StyleSheet, Image, ImageBackground, Pressable, Modal, TextInput, Alert } from 'react-native'
import Colors from '../../res/colors'
import Http from '../../libs/http'

const MenuItem = ({ item }) => {

    const bgImage = 'k_digital_waiter_movile/src/assets/platos/3.png'
    const tag = 'k_digital_waiter_movile/src/assets/img/path2.png'
    const btnImg = 'k_digital_waiter_movile/src/assets/img/order.png'

    const [modalVisible, setModalVisible] = useState(false)
    const [modalVisibleTable, setModalVisibleTable] = useState(false)

    let [platos, setPlatos] = React.useState("1")
    let [mesa, setMesa] = React.useState("1")

    return (
        <View>
            <ImageBackground
                source={require(bgImage)}
                style={styles.bgImg}>
                <View style={styles.header}>
                    <Text style={styles.title}>
                        {item.descripcion}
                    </Text>
                    <ImageBackground
                        source={require(tag)}
                        style={styles.tag}>
                        <Text style={styles.priceText}>
                            {item.precio}$
                        </Text>
                    </ImageBackground>
                </View>
                <Pressable
                    style={styles.orderBtn}
                    onPress={() => setModalVisible(true)}>
                    <Image
                        style={styles.orderImg}
                        source={require(btnImg)} />
                </Pressable>
            </ImageBackground>
            <Modal
                animationType="slide"
                transparent={true}
                visible={modalVisible}
                onRequestClose={() => { setModalVisible(!modalVisible) }}>
                <View style={styles.centeredView}>
                    <View style={styles.modalView}>
                        <Text style={styles.modalText} >Unidades</Text>
                        <View style={styles.inputView}>
                            <TextInput
                                value={platos}
                                style={styles.input}
                                onChangeText={setPlatos}
                                keyboardType="numeric"
                                placeholderTextColor='white'
                            />
                        </View>
                        <Pressable
                            style={styles.modalButton}
                            onPress={() => {
                                /*Calcula y guarda detalle */
                                detail.status.cantidad = platos
                                detail.status.total = item.precio * platos
                                detail.status.dish_id = item.id
                                setModalVisible(!modalVisible)
                                setModalVisibleTable(true) /*Cambiar al siguiente modal */
                            }}>
                            <Text style={styles.modalTextBtn}>OK</Text>
                        </Pressable>
                        <Pressable
                            style={styles.modalButton}
                            onPress={() => setModalVisible(!modalVisible) /*Cerrar ventanas modales */}>
                            <Text style={styles.modalTextBtn}>Cancelar</Text>
                        </Pressable>
                    </View>
                </View>
            </Modal>
            <Modal
                animationType="slide"
                transparent={true}
                visible={modalVisibleTable}
                onRequestClose={() => { setModalVisibleTable(!modalVisibleTable) }}>
                <View style={styles.centeredView}>
                    <View style={styles.modalView}>
                        <Text style={styles.modalText} >Mesa</Text>
                        <View style={styles.inputView}>
                            <TextInput
                                style={styles.input}
                                value={mesa}
                                onChangeText={setMesa}
                                keyboardType="numeric"
                                placeholderTextColor='white'
                            />
                        </View>
                        <Pressable
                            style={styles.modalButton}
                            onPress={() => {
                                /*Post al detalle y a la orden */
                                order.status.table_id = mesa
                                console.log(ordenar())
                                setModalVisibleTable(!modalVisibleTable)
                            }}>
                            <Text style={styles.modalTextBtn}>Ordenar</Text>
                        </Pressable>
                        <Pressable
                            style={styles.modalButton}
                            onPress={() => setModalVisibleTable(!modalVisibleTable) /*Cerrar ventanas modales */}>
                            <Text style={styles.modalTextBtn}>Cancelar</Text>
                        </Pressable>
                    </View>
                </View>
            </Modal>
        </View>
    )
}

let detail = {
    status: {
        cantidad: 1,
        total: 1,
        dish_id: 1
    }
}

let order = {
    status: {
        detail_id: 1,
        table_id: 1,
        state_id: 1
    }
}

const ordenar = async () => {
    try {

        console.log(detail.status)
        /*Primero hacer post a detail*/
        const resp = await Http.instance.post('http://192.168.100.61:8000/api/v1/details', detail.status)
        /*capturar el id del response*/
        console.log(resp)
        order.status.detail_id = resp.data.id
        /*hacer post a order */
        console.log(order.status)
        const orden = await Http.instance.post('http://192.168.100.61:8000/api/v1/orders', order.status)
        console.log(orden)
        Alert.alert(
            "Orden Eviada",
            "Por favor espera un momento"
        )

    } catch (error) {
        console.error(error)

    }
}

const styles = StyleSheet.create({
    centeredView: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center'
    },
    bgImg: {
        flex: 1,
        height: 600,
    },
    header: {
        height: 'auto',
        flexDirection: 'row',
        marginTop: 10
    },
    title: {
        flex: 1 / 2,
        fontFamily: "Open Sans, sans-serif",
        color: Colors.darkOrange,
        fontSize: 30,
        fontWeight: 'bold',
        marginLeft: 12,
        marginTop: 4,
        textShadowColor: Colors.blackPearl,
        textShadowOffset: {
            width: 1,
            height: 1
        },
        textShadowRadius: 1
    },
    tag: {
        height: 150,
        flex: 1 / 2,
        alignSelf: "flex-end"
    },
    priceText: {
        fontFamily: "Open Sans, sans-serif",
        color: Colors.blackPearl,
        fontSize: 40,
        alignSelf: 'center',
        fontWeight: 'bold',
        paddingLeft: 64,
        paddingTop: 4
    },
    orderBtn: {
        borderRadius: 16,
        paddingTop: 280,
        marginRight: 300
    },
    orderImg: {
        width: 80,
        height: 55,
    },
    modalView: {
        margin: 20,
        backgroundColor: Colors.backgroud,
        borderRadius: 20,
        padding: 14,
        alignItems: "center"
    },
    modalText: {
        fontFamily: "Open Sans, sans-serif",
        color: Colors.darkOrange,
        fontSize: 24,
        alignSelf: 'center',
        fontWeight: 'bold'
    },
    modalTextBtn: {
        fontFamily: "Open Sans, sans-serif",
        color: 'white',
        fontSize: 24,
        alignSelf: 'center',
        fontWeight: 'bold',
        padding: 8
    },
    modalButton: {
        marginTop: 8,
        backgroundColor: Colors.darkOrange,
        borderRadius: 12
    },
    inputView: {
        flexDirection: 'row',
        borderRadius: 12,
        borderColor: Colors.darkOrange,
        borderWidth: 2,
        marginTop: 6
    },
    input: {
        width: 60,
        alignContent: 'center',
        textAlign: 'center',
        color: 'white',
        borderColor: Colors.darkOrange,
        borderLeftWidth: 1,
        borderRightWidth: 1,
        fontWeight: 'bold',
        fontSize: 20
    },
    inpBtnTxt: {
        fontFamily: "Open Sans, sans-serif",
        color: 'white',
        fontSize: 24,
        alignSelf: 'center',
        fontWeight: 'bold',
        padding: 8
    }
})

export default MenuItem