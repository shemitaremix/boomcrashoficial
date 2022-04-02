# Api tacos :taco:

##  Aqui se encuentra el link del end point de la api :alien:
https://app.swaggerhub.com/apis/shemitaremix/taqueria/1.0.0


## Copiar repositorio :space_invader:

Hey puedes copiar el codigo del proyecto con el siguiente comando en tu terminal:
```
git clone
```

### Como podemos hacer mejor esta api :robot:
Esta api puede ser mucho mejor, nos pueden ayudar a mantenerla viva usandola y mejorandola con metodos   :clinking_glasses: `gitbash` como lo son:

```
git status
git add .
git commit -m "mesaje"
git push
```
## Como consultar la api :world_map:

### Consultas principales

- [x] Menu de tacos  :dumpling:
- [x] Menu de bebidas :cup_with_straw:
- [x] Crear una orden	:fork_and_knife:
- [x] Ver todas las  ordenes :ticket:
- [x] Ver una orden en lo especifico :black_joker:
- [x] Modificar una orden  :bookmark_tabs:
- [x] Eliminar una orden :x:

## Menu de tacos :dumpling:
![Tacos](https://www.pequerecetas.com/wp-content/uploads/2020/10/tacos-mexicanos-768x554.jpg "Laravel")

Esta es la lista de todos los tacos que se encuentran en nuestra api:

```
{
    "estatus": "taquito-feli",
    "taco": [
        {
            "id": 1,
            "nombre": "tripa",
            "tortilla": "maiz",
            "carne": "res",
            "precio": 10,
            "imagen": "https://img.chilango.com/2014/05/taquito-de-tripa.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 2,
            "nombre": "suadero",
            "tortilla": "maiz",
            "carne": "puerco",
            "precio": 15,
            "imagen": "https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2017/07/tacosdesuadero2.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 3,
            "nombre": "longaniza",
            "tortilla": "maiz",
            "carne": "puerco",
            "precio": 15,
            "imagen": "http://www.comidamexicana.com/libraries/forms/2/imagesfiles/20140211093804_470x340.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 4,
            "nombre": "cabeza",
            "tortilla": "maiz",
            "carne": "borrego",
            "precio": 20,
            "imagen": "https://www.cocinavital.mx/wp-content/uploads/2018/12/taco-cabeza.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 5,
            "nombre": "pastor",
            "tortilla": "maiz",
            "carne": "puerco",
            "precio": 15,
            "imagen": "https://www.gastrolabweb.com/u/fotografias/m/2020/5/9/f800x450-59_51505_5050.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 6,
            "nombre": "campechano",
            "tortilla": "harina",
            "carne": "puerco",
            "precio": 10,
            "imagen": "https://img.chilango.com/2014/10/super-campechano.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 7,
            "nombre": "chuleta",
            "tortilla": "maiz",
            "carne": "puerco",
            "precio": 15,
            "imagen": "https://img.chilango.com/2014/10/super-campechano.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 8,
            "nombre": "bisteck",
            "tortilla": "harina",
            "carne": "res",
            "precio": 15,
            "imagen": "https://cheforopeza.com.mx/wp-content/uploads/2020/11/tacos-de-bistec-a-la-cerveza-940x450.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        }
    ]
}
```
Para poder consultarlos es con la siguiente ruta, una vez levantado su servidor local claro
```
/api/tacos
```
## Menu de bebidas :cup_with_straw:
![Bebidas](https://www.bell-italia.com/blog/wp-content/uploads/2018/05/Soft-Drinks-Italiani-cop.jpg)
Esta es la lista de todos los tacos que se encuentran en nuestra api:
```
{
    "estatus": "refresco-feli",
    "refresco": [
        {
            "id": 1,
            "nombre": "lulu",
            "sabor": "manzana",
            "distribuidora": "pascual",
            "tamaño": 500,
            "precio": 12,
            "imagen": "https://kiwikmercadofacil.com/wp-content/uploads/2021/11/Lulu3ltsManzana.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 2,
            "nombre": "lulu",
            "sabor": "fresa",
            "distribuidora": "pascual",
            "tamaño": 500,
            "precio": 20,
            "imagen": "https://mx.all.biz/img/mx/catalog/24810.png",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 3,
            "nombre": "lulu",
            "sabor": "uva",
            "distribuidora": "pascual",
            "tamaño": 600,
            "precio": 15,
            "imagen": "https://animalgourmet.com/wp-content/uploads/2017/04/1491866629543-7-Firma-Lulu-botella-e1492291395218.jpeg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 4,
            "nombre": "boing",
            "sabor": "mango",
            "distribuidora": "pascual",
            "tamaño": 500,
            "precio": 15,
            "imagen": "https://alchef.novadistex.com/wp-content/uploads/2020/10/00000007500310L.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 5,
            "nombre": "boing",
            "sabor": "guayaba",
            "distribuidora": "pascual",
            "tamaño": 500,
            "precio": 20,
            "imagen": "https://cdn.shopify.com/s/files/1/0706/6309/products/00019836100761_A1R1_720x.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 6,
            "nombre": "boing",
            "sabor": "fresa",
            "distribuidora": "pascual",
            "tamaño": 600,
            "precio": 15,
            "imagen": "https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00000007500316L.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 7,
            "nombre": "jarrito",
            "sabor": "tutifruti",
            "distribuidora": "jarrito",
            "tamaño": 1000,
            "precio": 12,
            "imagen": "https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00074488640505L.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 8,
            "nombre": "jarrito",
            "sabor": "piña",
            "distribuidora": "jarrito",
            "tamaño": 600,
            "precio": 12,
            "imagen": "https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750144160412L.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 9,
            "nombre": "jarrito",
            "sabor": "mandarina",
            "distribuidora": "jarrito",
            "tamaño": 1000,
            "precio": 15,
            "imagen": "https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750144160411L.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 10,
            "nombre": "pepsi",
            "sabor": "aguanegra",
            "distribuidora": "pepsi",
            "tamaño": 1000,
            "precio": 12,
            "imagen": "https://cdn.shopify.com/s/files/1/0706/6309/products/0750103131001L2_720x.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 11,
            "nombre": "mirinda",
            "sabor": "mandarina",
            "distribuidora": "pepsi",
            "tamaño": 600,
            "precio": 12,
            "imagen": "https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750103134505L.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 12,
            "nombre": "coca-cola",
            "sabor": "aguanegra",
            "distribuidora": "coca-cola",
            "tamaño": 1000,
            "precio": 15,
            "imagen": "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/15-09-26-RalfR-WLC-0098.jpg/238px-15-09-26-RalfR-WLC-0098.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        },
        {
            "id": 13,
            "nombre": "fresca",
            "sabor": "toronja",
            "distribuidora": "coca-cola",
            "tamaño": 1000,
            "precio": 15,
            "imagen": "https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750105532015L.jpg",
            "created_at": "2022-02-28T03:52:05.000000Z",
            "updated_at": "2022-02-28T03:52:05.000000Z"
        }
    ]
}
```
Para poder consultarlos es con la siguiente ruta, una vez levantado su servidor local claro
```
/api/refrescos
```

## Crear una orden :fork_and_knife:

![Orden](https://encadena.mx/wp-content/uploads/2021/09/TACO.jpg)

En este caso para que se pueda crear una orden se es necesario que se instale `Postman` y dentro de ella crear los registros asi  es como se podran almacenar en la base de datos, para crear nuestros registros es con la siguiente ruta: 

```
/api/crearorden
```


## Ver todas las ordenes de tacos que tenemos :ticket:
![Ordenes](https://adminpanel.yavoyfood.com//public/images/162680375809391626803757962ordentaco.jpg)

Para poder visualizar todas las ordenes de tacos que se han creado se necesitara la siguiente ruta:

```
/consultarorden/{orden}
```

## Modificar una Orden ya hecha :bookmark_tabs:
Para poder modificar una orden ya realizada es con la siguiente ruta:

```
/actualizarorden/{orden}
```
## Eliminar una Orden
Para poder eliminar una Orden de tacos, esta se eliminaria con la siguiente ruta:

```
'/eliminarorden/{orden}'
```

## Muchas gracias por haber sido parte de esta api, espero juntos la podamos mejorar :octocat:
Esta api fue realizada por:
- :trollface: Shemita Rodriguez

- :telephone_receiver:  5586162285 

- :shipit: Muchas gracias 
- :mage: Espero le puedas dar un super Uso :33



