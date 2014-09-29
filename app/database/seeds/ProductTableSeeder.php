<?php

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        for ($x=0; $x<=10; $x++){
        Product::create(array(
            'name' => 'CML-305_'.$x,
            'is_discount' => 1,
            'category' => 'IPL',
            'mainphoto' => 'girl.jpg',
            'introduction' => '<h1>Máquina IPL 70% DTO!</h1>
                <p>Máquina IPL Promoción de verano, € 1400! Venta de la fábrica, 120% calidad!</p>
                <p>
                    <small>Somos una fabrica profesional de máquina estética en China, Ahora, hay una gran promoción en
                        IPL (máquina de depilación), sólo en julio y agosto!!!! El precio local de IPL es € 4-5000,
                        ahora con precio de descuento, está sólo € 1400. Es ventas locas!!! Póngase en contacto con
                        nosotros ahora mismo y no te pierdas el descuento increíble!
                    </small>
                </p>
                <div class="btn-group btn-group-lg">
                    <button type="button" class="btn btn-success"> € 1400.00</button>
                    <button type="button" class="btn btn-success"> Contáctenos</button>
                </div>
                <p>
                    <small>Promo Only en septiembre y octubre.</small>
                </p>',
            'appphoto' => 'girl.jpg',
            'app' => '<h2>Aplicaciones</h2>

            <p><em>El tratamiento de depilación láser puede hacer que un amplio espectro de luz pulsada intensa a través
                    de
                    una pequeña pieza de mano, suave.</em></p>
            <ol>
                <li><p>Quitar las manchas: eliminar las pecas, quemaduras del sol ,placas seniles ,melasmas y otras
                        variedades de lesiones pigmentadas;</p>
                </li>
                <li><p>Depilación:miembros,axilas,línea de pelo ,Bikini y los vellos no deseados ,ect..</p></li>
                <li><p>Eliminar de arrugas:pata de gallo,patrón de cuello, estría,etc..</p></li>
                <li><p>Terapia vascular,rosácea,eritema,ect..</p></li>
                <li><p>Reducir los poros dilatos efectivamente ,eliminar o aliviar las cicatrices de acné;</p></li>
                <li><p>Aumentar el colá geno de la piel,recuperar y aumentar la elasticidad de la piel;</p></li>
                <li><p>Rejuvenecer la piel:blanquear la piel de cualquier parte del cuerpo.</p></li>
            </ol>',
            'advantage' => '<h2>Advantage</h2>
            <p><em>¿Por qué comprar IPL de nosotros.</em></p>
            <ol>
                <li>
                    <p>Seguridad en las clínicas: Onda de oro puro - el filtro patentado para eliminar la luz dañina, no
                        hay efectos secundarios;</p>
                </li>
                <li>
                    <p>Efficacy: puede terminar con éxito muchos de los problemas de los distintos tipos de piel;</p>
                </li>
                <li>
                    <p>proceso Cómodo: sistema de refrigeración eficaz, ajustable de 0 C ~ - 7C, hace que el tratamiento
                        sea más cómodo;</p>
                </li>
                <li>
                    <p>Fácil manejo: Excelente diseño, control del microordenador, fácil de operar;</p>
                </li>
                <li>
                    <p>Altamente rentable, Promoción de verano, € 1400! Promo Only en septiembre y octubre.</p>
                </li>
            </ol>',
            'adphoto_1' => 'girl.jpg',
            'adphoto_2' => 'girl.jpg',
            'adphoto_3' => 'girl.jpg',
            'adphoto_4' => 'girl.jpg',
            'tocustomer' => '<h2>Palabras del Camellia</h2>
            <p>hola, soy administrador de clientes, Elena.</p>
            <p>Queremos hacer más socios de negocios de todo el mundo, así que estábamos locos promociones.</p>
            <p>Promo Only en septiembre y octubre~.</p>
            <p>No te pierdas esta oportunidad, queremos ser tu amigo.</p>
            <p>Por favor, póngase en contacto con nosotros tan pronto como sea posible.</p>
            <p>Esperamos su mensaje!</p>',
            'footerphoto' => 'girl.jpg',
            'indexphoto' => 'girl.jpg',
            'mrg' => '<li>4,820 SqFt</li><li style="list-style: none">|</li><li>5 Beds</li><li style="list-style: none">|</li><li>5 Baths</li>',
            'miniintro' => 'this is a mini introduction, this is a mini introduction, this is a mini introduction, this is a mini introduction, this is a mini introduction, this is a mini introduction, this is a mini introduction, this is a mini introduction',
            'fnt' => 'Suitable for clinics, beauty salons',
            'style' => 'Vertical'
        ));
        }
    }

}