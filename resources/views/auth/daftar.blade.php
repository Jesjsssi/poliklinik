<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Login</title>

</head>

<body class="h-full">
    <div class="flex h-screen items-center justify-center">
        <!-- Card Container -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-full max-w-4xl flex">
            <!-- Left Section: Image -->
            <div class="w-1/2 bg-blue-100 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 4680 3120" id="online-medical-consultation">
                    <defs>
                        <linearGradient id="f9ce33b1-7da9-4b9c-be56-d82c588d06e4" x1="1687.281" x2="1650.287"
                            y1="886.243" y2="1311.353" gradientUnits="userSpaceOnUse">
                            <stop offset=".158" stop-color="#999"></stop>
                            <stop offset=".327" stop-color="#a8a8a8"></stop>
                            <stop offset=".65" stop-color="#cecece"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                        </linearGradient>
                        <linearGradient id="a3c976d2-d548-4ce6-a0c0-59985713054d" x1="8477.464" x2="8515.288"
                            y1="695.681" y2="695.681" gradientTransform="scale(-1 1)rotate(3.704 -2185.19 -176182.175)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="gray"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#a3c976d2-d548-4ce6-a0c0-59985713054d"
                            id="a9d8c207-07ac-42a3-9d42-fa97c8040730" x1="3075.372" x2="2930.094" y1="1513.866"
                            y2="1513.866" gradientTransform="rotate(6.552 7888.012 2147.628)">
                        </linearGradient>
                        <linearGradient xlink:href="#a3c976d2-d548-4ce6-a0c0-59985713054d"
                            id="f1581ff4-2c61-41de-88a0-6dfec3e26b39" x1="2840.957" x2="2647.131" y1="1574.081"
                            y2="1574.081" gradientTransform="rotate(6.552 7888.012 2147.628)">
                        </linearGradient>
                        <linearGradient xlink:href="#a3c976d2-d548-4ce6-a0c0-59985713054d"
                            id="b86d4434-9b46-4c2e-9b24-0cc8b0c128b0" x1="2742.088" x2="2622.651" y1="1678.673"
                            y2="1678.673" gradientTransform="rotate(6.552 7888.012 2147.628)">
                        </linearGradient>
                        <linearGradient xlink:href="#a3c976d2-d548-4ce6-a0c0-59985713054d"
                            id="bfed6723-a17d-457b-a4c7-946ca31efe91" x1="-1679.031" x2="-1701.237" y1="973.517"
                            y2="1103.584" gradientTransform="scale(-1 1)rotate(-19.725 -2841.191 4463.234)">
                        </linearGradient>
                        <linearGradient xlink:href="#a3c976d2-d548-4ce6-a0c0-59985713054d"
                            id="a2894fa1-6a70-42e7-8b78-2c4b03220e37" x1="3151.331" x2="2884.988" y1="1575.663"
                            y2="1575.663" gradientTransform="rotate(6.552 7888.012 2147.628)">
                        </linearGradient>
                        <linearGradient id="be4b34ed-4e7e-4eb8-bb6f-074bfbe20511" x1="2340" x2="2340" y1="469.73"
                            y2="2363.673" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#dde2ff"></stop>
                            <stop offset=".416" stop-color="#b1cafb"></stop>
                            <stop offset="1" stop-color="#6da6f5"></stop>
                        </linearGradient>
                        <linearGradient id="bdf72872-af11-4797-a017-e4afd7fa9b83" x1="-2383.866" x2="-2854.206"
                            y1="3762.57" y2="4467.666"
                            gradientTransform="matrix(-.853 -.513 -.4253 .7072 3291.872 -2016.731)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#00b488"></stop>
                            <stop offset=".92" stop-color="#007bc0"></stop>
                        </linearGradient>
                        <linearGradient id="bc568ab1-f071-4694-a1ad-37fb6f881e49" x1="4227.856" x2="3491.105"
                            y1="1329.633" y2="2163.129" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#f88c6e"></stop>
                            <stop offset="1" stop-color="#ff5c60"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#bdf72872-af11-4797-a017-e4afd7fa9b83"
                            id="bcb223e2-656f-4c27-93a3-165161e23393" x1="-2705.841" x2="-2867.498" y1="3536.202"
                            y2="3778.546" gradientTransform="scale(-1 1)rotate(-31.023 -5407.318 4941.34)">
                        </linearGradient>
                        <linearGradient id="fa0e8d83-fe84-4a7f-8f10-daef7646a311" x1="2576.531" x2="3711.052"
                            y1="1671.148" y2="1671.148" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#649ce5"></stop>
                            <stop offset="1" stop-color="#4550db"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#bc568ab1-f071-4694-a1ad-37fb6f881e49"
                            id="be3455ce-9249-4d8d-973f-b9a1c98712fe" x1="-8135.752" x2="-8610.697" y1="4794.743"
                            y2="5506.741" gradientTransform="matrix(1.192 -.2533 .2081 .9793 9880.931 -5100.749)">
                        </linearGradient>
                        <linearGradient xlink:href="#bdf72872-af11-4797-a017-e4afd7fa9b83"
                            id="b51d9f3d-7262-4d1c-a0e6-f8415afd048f" x1="-12782.437" x2="-12944.095" y1="-2533.687"
                            y2="-2291.343" gradientTransform="rotate(-31.023 2881.45 -24924.63)"></linearGradient>
                        <linearGradient id="a23a426f-9904-4e70-aed2-9664b39d8c99" x1="2188.663" x2="1688.427"
                            y1="1077.626" y2="1385.792" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#f43e41"></stop>
                            <stop offset=".227" stop-color="#e93c40"></stop>
                            <stop offset=".626" stop-color="#cb373d"></stop>
                            <stop offset="1" stop-color="#aa323a"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="a988fd4c-de43-4b5a-b46f-a236922cfd79" x1="2143.14" x2="2092.104" y1="1248.187"
                            y2="1279.627"></linearGradient>
                        <linearGradient id="b23180c2-6cf6-4306-9a41-bacb81136303" x1="2067.503" x2="1597.509"
                            y1="2129.843" y2="2202.773" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#51d7ed"></stop>
                            <stop offset="1" stop-color="#399eed"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#b23180c2-6cf6-4306-9a41-bacb81136303"
                            id="b5f5d755-4bde-4e01-bd6c-9bf45a870b64" x1="2157.702" x2="1145.132" y1="2123.268"
                            y2="2173.896"></linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="a7414660-dd7e-4e96-acb4-dd39df6861a5" x1="1686.042" x2="1661.258" y1="890.642"
                            y2="995.464"></linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="aa41dd73-8926-4b3d-8d04-aba4eb038621" x1="1530.955" x2="1516.765" y1="861.386"
                            y2="921.401"></linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="bd3bc734-9b9a-4024-b598-059154f2efab" x1="1717.464" x2="1522.351" y1="959.408"
                            y2="1784.64"></linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="b70048c5-bcb6-407a-8b6b-4a5e1ef17551" x1="1593.685" x2="1545.374" y1="866.348"
                            y2="1070.678"></linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="a0e77c31-86a0-4bec-989c-84b80a21fceb" x1="1715.757" x2="1675.909" y1="4818.359"
                            y2="4842.907" gradientTransform="rotate(29.109 8224.627 3052.091)"></linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="b063879c-f66b-47f8-a51b-43c3e8d298c4" x1="1777.584" x2="1248.483" y1="1486.431"
                            y2="1248.134"></linearGradient>
                        <linearGradient id="e1b00549-c0ba-46ec-9b9f-d0f91bf2e3e2" x1="1687.281" x2="1650.287"
                            y1="886.243" y2="1311.353" gradientUnits="userSpaceOnUse">
                            <stop offset=".158" stop-color="#172652"></stop>
                            <stop offset=".371" stop-color="#132f61"></stop>
                            <stop offset=".777" stop-color="#074887"></stop>
                            <stop offset="1" stop-color="#00579f"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#bc568ab1-f071-4694-a1ad-37fb6f881e49"
                            id="ac9d4a66-8e99-4d44-b628-4b1172810c16" x1="1744.191" x2="1656.748" y1="1206.36"
                            y2="1206.36"></linearGradient>
                        <linearGradient xlink:href="#bc568ab1-f071-4694-a1ad-37fb6f881e49"
                            id="a11d26d4-c89d-40de-9621-c5f3d3242393" x1="3199.364" x2="3855.68" y1="748.439"
                            y2="748.439"></linearGradient>
                        <linearGradient id="e8596644-04de-4f74-8d03-fadb7c9bf0c0" x1="2840.957" x2="2647.131"
                            y1="1574.081" y2="1574.081" gradientTransform="rotate(6.552 7888.012 2147.628)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fff"></stop>
                            <stop offset="1"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#e8596644-04de-4f74-8d03-fadb7c9bf0c0"
                            id="bc07d1c1-c26d-4fcf-a0cd-404535e25f97" x1="2742.088" x2="2622.651" y1="1678.673"
                            y2="1678.673"></linearGradient>
                        <linearGradient id="bc34e709-642b-43e2-869a-df59cbb1125f" x1="13068.228" x2="13301.181"
                            y1="1343.191" y2="1343.191" gradientTransform="matrix(-1 0 0 1 16106 0)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#f45b5b"></stop>
                            <stop offset=".249" stop-color="#f45657"></stop>
                            <stop offset=".554" stop-color="#f4474c"></stop>
                            <stop offset=".885" stop-color="#f42e3a"></stop>
                            <stop offset="1" stop-color="#f42432"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#bc34e709-642b-43e2-869a-df59cbb1125f"
                            id="ec902f62-c192-4964-b2f0-2e39558bc632" x2="13215.88" y1="1060.753" y2="1060.753">
                        </linearGradient>
                        <linearGradient xlink:href="#e8596644-04de-4f74-8d03-fadb7c9bf0c0"
                            id="a9d8dbb0-9668-4a88-858e-3d90758cf2ec" x1="-1679.031" x2="-1701.237" y1="973.517"
                            y2="1103.584" gradientTransform="scale(-1 1)rotate(-19.725 -2841.191 4463.234)">
                        </linearGradient>
                        <linearGradient xlink:href="#e8596644-04de-4f74-8d03-fadb7c9bf0c0"
                            id="bd16f8e2-beef-47c7-8b1e-b0a80c24f41d" x1="3151.331" x2="2884.988" y1="1575.663"
                            y2="1575.663"></linearGradient>
                        <linearGradient xlink:href="#e8596644-04de-4f74-8d03-fadb7c9bf0c0"
                            id="abbf9e69-1e1b-4520-ac04-542866ef2d6e" x1="8477.464" x2="8515.288" y1="695.681"
                            y2="695.681" gradientTransform="scale(-1 1)rotate(3.704 -2185.19 -176182.175)">
                        </linearGradient>
                        <linearGradient xlink:href="#e8596644-04de-4f74-8d03-fadb7c9bf0c0"
                            id="bd02966d-4750-410b-a29c-0c156b1fdae8" x1="3075.372" x2="2930.094" y1="1513.866"
                            y2="1513.866"></linearGradient>
                        <linearGradient xlink:href="#a23a426f-9904-4e70-aed2-9664b39d8c99"
                            id="ea4f010f-8d32-4de1-a25e-217998abb47d" x1="2292.914" x2="2292.914" y1="1162.893"
                            y2="1421.463"></linearGradient>
                        <linearGradient xlink:href="#fa0e8d83-fe84-4a7f-8f10-daef7646a311"
                            id="a37a74ea-5cf7-4ee7-aa73-74da24f57da4" x1="948.592" x2="948.592" y1="912.246"
                            y2="343.609"></linearGradient>
                        <linearGradient id="a71c7626-c51a-4177-81c1-b0aa7a22c3d1" x1="13582.535" x2="13824.023"
                            y1="611.821" y2="611.821" gradientTransform="matrix(-1 0 0 1 14789.011 0)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#d5e4ff"></stop>
                            <stop offset="1" stop-color="#edfffe"></stop>
                        </linearGradient>
                        <linearGradient xlink:href="#a71c7626-c51a-4177-81c1-b0aa7a22c3d1"
                            id="b5eaa17a-1ff1-4be4-a562-0c871d109f5f" x1="4266.906" x2="4508.4" y1="778.285"
                            y2="778.285" gradientTransform="scale(1 -1)rotate(-24.753 -564.343 8215.481)">
                        </linearGradient>
                        <linearGradient id="b48d87fe-79af-4741-a188-cef3bff779f2" x1="663.793" x2="663.793" y1="962.203"
                            y2="1468.109" gradientTransform="rotate(45 663.793 1273.173)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#b0defe"></stop>
                            <stop offset="1" stop-color="#008ee2"></stop>
                        </linearGradient>
                        <filter id="b37865e3-ae59-415a-92eb-6ccc92b11c1c" width="467.066" height="32766" x="1444.757"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b3551594-59d8-49a6-abde-7dac5bcf55dc" width="43.83" height="32766" x="2932.022"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="a8bf0391-8ded-4b39-bb5b-0abbac7072a8" width="129.232" height="32766" x="3038.22"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b1dd902a-5b50-4484-9f81-b98e61ad0c95" width="260.119" height="32766" x="2162.864"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b999ef5c-3a34-41fc-a6f1-626fa52a0828" width="209.673" height="32766" x="2188.087"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="af1540a5-24b2-415d-8bbc-d1b1877e7705" width="178.295" height="32766" x="2748.695"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="f8fd6f81-7a2b-4dd0-b5ae-378c81adcdba" width="110.793" height="32766" x="2713.59"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="fae96ae7-4ebb-4d2d-ac05-840576547701" width="127.39" height="32766" x="2848.731"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b17b4690-bcf3-4af1-8ac1-6ee8d273542c" width="246.662" height="32766" x="2988.497"
                            y="-9752" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="e60838f8-daf9-42f9-acfb-7334230f43bb" width="467.066" height="449.642" x="1444.757"
                            y="935.06" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="aacbd332-fdd7-4ae3-85f9-141767af4b52" width="178.295" height="295.039" x="2748.695"
                            y="839.375" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b1160e83-d6a3-403c-9c46-c45f8aa7eedb" width="110.793" height="138.797" x="2713.59"
                            y="1018.639" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="ebe5d8c3-bc9b-4c03-96d9-dd7a063c75e9" width="127.39" height="152.982" x="2848.731"
                            y="769.869" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b5a1ee94-7519-4780-b09d-5aa8cd97b761" width="246.662" height="333.77" x="2988.497"
                            y="853.023" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="a598f5ee-f5d4-483c-b02c-06572b486ed6" width="43.83" height="225.743" x="2932.022"
                            y="903.552" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="fa5a5c97-dedd-4979-817a-56a91f634d88" width="129.232" height="218.703" x="3038.22"
                            y="852.528" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b6c4681b-8fc1-4d16-9527-8f0ec0c9712c" width="260.119" height="260.119" x="2162.864"
                            y="1133.957" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <filter id="b9c07f8b-632d-4cb5-b62b-d6888f58deb4" width="209.673" height="209.673" x="2188.087"
                            y="1159.18" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-color="#fff" result="bg"></feFlood>
                            <feBlend in="SourceGraphic" in2="bg"></feBlend>
                        </filter>
                        <mask id="bccb6c47-d69e-4498-88ce-3672375b31d5" width="467.066" height="32766" x="1444.757"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="e38602ec-20e5-46d9-8dc6-ada36579d624" width="43.83" height="32766" x="2932.022"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="ea80b51f-8ee8-49bb-b23e-0024b6cae5f3" width="129.232" height="32766" x="3038.22"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="beba62ec-308c-4ed1-a187-d1c9bff81cfd" width="260.119" height="32766" x="2162.864"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="a2943c04-b41c-4a50-9ac7-3a83501f7ca4" width="209.673" height="32766" x="2188.087"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="b47d807d-b6a3-435a-85d5-a3ebadcfaf82" width="178.295" height="32766" x="2748.695"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="b6b485f0-9e18-4f98-bbd1-1f37fda333dc" width="110.793" height="32766" x="2713.59"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="a9d4dac7-24cc-416e-b2df-be630731f517" width="127.39" height="32766" x="2848.731"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="be416277-b8f0-4175-b78c-0ca24e80a578" width="246.662" height="32766" x="2988.497"
                            y="-9752" maskUnits="userSpaceOnUse"></mask>
                        <mask id="be7ba3ba-6720-4507-a265-0877eeb5e845" width="467.066" height="449.642" x="1444.757"
                            y="935.06" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#bccb6c47-d69e-4498-88ce-3672375b31d5);filter:url(#e60838f8-daf9-42f9-acfb-7334230f43bb)">
                                <path
                                    d="M1911.8234,975.8874l-7.1122,18.0958-166.3789,378.3516c.306,5.8426-13.8014,11.3164-31.5011,12.2347-17.6993.9183-32.3021-3.0609-32.5993-8.9039l-229.4745-372.433s180.2296-122.6372,438.6081-38.9408C1894.1584,967.7879,1903.352,972.3671,1911.8234,975.8874Z"
                                    style="mix-blend-mode:multiply;fill:url(#f9ce33b1-7da9-4b9c-be56-d82c588d06e4)">
                                </path>
                            </g>
                        </mask>
                        <mask id="a8bcaf18-ace7-470b-8f4b-bb8b6ee518e7" width="178.295" height="295.039" x="2748.695"
                            y="839.375" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#b47d807d-b6a3-435a-85d5-a3ebadcfaf82);filter:url(#aacbd332-fdd7-4ae3-85f9-141767af4b52)">
                                <path
                                    d="M2836.2055,1134.4136s9.2822-58.9636-55.2926-98.9572c-27.668-17.1299-33.8511-46.4457-31.8812-74.3573,25.0283-55.6661,30.0131-121.7245,30.0131-121.7245l118.4638,144.726,29.4818,126.3024Z"
                                    style="mix-blend-mode:multiply;fill:url(#f1581ff4-2c61-41de-88a0-6dfec3e26b39)">
                                </path>
                            </g>
                        </mask>
                        <mask id="eb0fdee6-5378-441c-85ad-bbb3e8df8d51" width="110.793" height="138.797" x="2713.59"
                            y="1018.639" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#b6b485f0-9e18-4f98-bbd1-1f37fda333dc);filter:url(#b1160e83-d6a3-403c-9c46-c45f8aa7eedb)">
                                <path
                                    d="M2725.9142,1018.6391s-25.0026,38.3278,22.163,62.4728,94.6784,32.7725,69.1692,76.3239c0,0,24.3002-34.1846-50.9816-49.8893C2679.6973,1089.4874,2725.9142,1018.6391,2725.9142,1018.6391Z"
                                    style="mix-blend-mode:multiply;fill:url(#b86d4434-9b46-4c2e-9b24-0cc8b0c128b0)">
                                </path>
                            </g>
                        </mask>
                        <mask id="beedba19-4308-476c-93ee-de88dd0ab63b" width="127.39" height="152.982" x="2848.731"
                            y="769.869" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#a9d4dac7-24cc-416e-b2df-be630731f517);filter:url(#ebe5d8c3-bc9b-4c03-96d9-dd7a063c75e9)">
                                <path
                                    d="M2848.7309,792.179a68.315,68.315,0,0,0,11.6348.8902s25.5124-7.7305,29.6696,6.6888,1.707,93.1923,82.0795,121.345l.02,1.7477c6.8702-.3899,5.7712-2.9046-10.5367-9.1353-58.0028-22.1689-52.0718-105.2783-65.5414-130.3671s-38.2847-7.4657-38.2847-7.4657Z"
                                    style="mix-blend-mode:multiply;fill:url(#bfed6723-a17d-457b-a4c7-946ca31efe91)">
                                </path>
                            </g>
                        </mask>
                        <mask id="bf8ba7c8-8862-4124-91a6-72a37cf8f251" width="246.662" height="333.77" x="2988.497"
                            y="853.023" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#be416277-b8f0-4175-b78c-0ca24e80a578);filter:url(#b5a1ee94-7519-4780-b09d-5aa8cd97b761)">
                                <path
                                    d="M3233.9089,1153.2899c-13.9203,18.0645-43.2892,23.3243-54.0156,16.5206-13.8851-8.8142-30.7848,10.2472-51.3061,16.9819-12.5711-.7701-21.0572-1.9694-21.0572-1.9694l-32.2268-22.6819c-17.3437-29.6523,3.3477-59.552-41.9474-84.1373-53.2296-28.8775-44.2943-122.1517-44.2943-122.1517h.0001a119.17357,119.17357,0,0,0,35.9822-56.9732l13.0216-45.8562s-48.3537,162.3816,57.9557,215.0812C3193.1439,1116.2466,3243.946,1124.3577,3233.9089,1153.2899Z"
                                    style="mix-blend-mode:multiply;fill:url(#a2894fa1-6a70-42e7-8b78-2c4b03220e37)">
                                </path>
                            </g>
                        </mask>
                        <mask id="a389795f-a1e5-4e9a-806b-1efa64e30c0d" width="43.83" height="225.743" x="2932.022"
                            y="903.552" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#e38602ec-20e5-46d9-8dc6-ada36579d624);filter:url(#a598f5ee-f5d4-483c-b02c-06572b486ed6)">
                                <path
                                    d="M2948.9022,1129.2951c48.8625-25.7769,19.4957-74.7254,3.31-107.6561-16.2934-33.1359-1.3366-115.6907-1.3366-115.6907l-.6854-2.3962c-10.6916,27.5262-34.6416,102.2926-.4772,148.1364C2988.4738,1103.6955,2955.0551,1125.8196,2948.9022,1129.2951Z"
                                    style="mix-blend-mode:multiply;fill:url(#a3c976d2-d548-4ce6-a0c0-59985713054d)">
                                </path>
                            </g>
                        </mask>
                        <mask id="b31da88f-4fb4-4e1f-8a19-aa06def74fc3" width="129.232" height="218.703" x="3038.22"
                            y="852.528" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#ea80b51f-8ee8-49bb-b23e-0024b6cae5f3);filter:url(#fa5a5c97-dedd-4979-817a-56a91f634d88)">
                                <path
                                    d="M3067.7269,852.5284s-29.693,88.3523,7.4309,121.9559,64.3968,36.2527,92.2946,96.7469c0,0-11.6523-44.814-93.2664-88.2879C2997.2203,941.9454,3067.7269,852.5284,3067.7269,852.5284Z"
                                    style="mix-blend-mode:multiply;fill:url(#a9d8c207-07ac-42a3-9d42-fa97c8040730)">
                                </path>
                            </g>
                        </mask>
                        <mask id="b318834e-60fa-4468-9af6-39bc6bbc995a" width="260.119" height="260.119" x="2162.864"
                            y="1133.957" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#beba62ec-308c-4ed1-a187-d1c9bff81cfd);filter:url(#b6c4681b-8fc1-4d16-9527-8f0ec0c9712c)">
                                <circle cx="2292.924" cy="1264.017" r="130.06"
                                    style="mix-blend-mode:multiply;fill:url(#bba20f9f-ea7f-4308-95c7-0a1410a020f3)">
                                </circle>
                            </g>
                        </mask>
                        <mask id="abf91a7a-6ba7-46f0-b639-b7c08c2a2624" width="209.673" height="209.673" x="2188.087"
                            y="1159.18" maskUnits="userSpaceOnUse">
                            <g
                                style="mask:url(#a2943c04-b41c-4a50-9ac7-3a83501f7ca4);filter:url(#b9c07f8b-632d-4cb5-b62b-d6888f58deb4)">
                                <circle cx="2292.924" cy="1264.017" r="104.836"
                                    style="mix-blend-mode:multiply;fill:url(#a74044fb-ede2-47ee-b592-84040fbf0d45)">
                                </circle>
                            </g>
                        </mask>
                        <radialGradient xlink:href="#f9ce33b1-7da9-4b9c-be56-d82c588d06e4"
                            id="bba20f9f-ea7f-4308-95c7-0a1410a020f3" cx="2292.924" cy="1264.017" r="130.06">
                        </radialGradient>
                        <radialGradient xlink:href="#f9ce33b1-7da9-4b9c-be56-d82c588d06e4"
                            id="a74044fb-ede2-47ee-b592-84040fbf0d45" cx="2292.924" cy="1264.017" r="104.836">
                        </radialGradient>
                        <radialGradient xlink:href="#e1b00549-c0ba-46ec-9b9f-d0f91bf2e3e2"
                            id="e7bcf8f1-c847-472c-883d-7357c5d1fadc" cx="2292.924" cy="1264.017" r="130.06">
                        </radialGradient>
                        <radialGradient xlink:href="#e1b00549-c0ba-46ec-9b9f-d0f91bf2e3e2"
                            id="ad0f6765-6c3c-403c-9777-b2185fa8ead8" cx="2292.924" cy="1264.017" r="104.836">
                        </radialGradient>
                        <clipPath id="fbb11107-8816-4207-a645-fddf306bd4cc">
                            <rect width="1579.264" height="2035.133" x="2143.346" y="579.14" style="fill:none"></rect>
                        </clipPath>
                    </defs>
                    <g style="isolation:isolate">
                        <g id="ea775ea0-3ae9-4bf6-b837-db63179cac94">
                            <path
                                d="M3839.2589,2616.6982l-2950.5454,1.9804s-433.6221-.0541-433.6221-373.3567c0-168.9022,95.4662-301.9279,150.2037-461.1164,6.9319-20.1663,13.5763-40.7379,19.7882-61.8137,30.0962-102.0741,50.11-216.1758,44.2757-355.6478-4.6905-112.0765,10.8847-218.2832,44.5733-315.3156,154.6598-445.6496,691.0488-697.495,1398.483-432.7575,0,0,274.0015,118.7654,576.4789,41.4311,302.4686-77.3255,674.6727-243.4459,969.2274,36.5244a696.04942,696.04942,0,0,1,51.1095,53.9449,649.406,649.406,0,0,1,58.6715,80.2967c142.6053,231.7511,45.9057,435.053,306.1326,806.0329C4377.9531,2070.1806,4183.3115,2616.6982,3839.2589,2616.6982Z"
                                style="fill:url(#be4b34ed-4e7e-4eb8-bb6f-074bfbe20511)"></path>
                            <path
                                d="M3839.2589,2604.0943l-2950.5454,1.9803s-433.6221,12.5499-433.6221-360.7527c0-168.9022,95.4662-301.9279,150.2037-461.1164,6.9319-20.1663,13.5763-40.7379,19.7882-61.8137,145.2697,268.1677,552.5132,219.5796,949.6194,30.9789,621.9881-295.4013,1445.0639,129.7491,1942.1015-70.6723,338.0567-136.3121,306.115-581.1873,251.0984-851.8304,142.6053,231.7511,45.9057,435.053,306.1326,806.0329C4377.9531,2070.1806,4183.3115,2604.0943,3839.2589,2604.0943Z"
                                style="mix-blend-mode:multiply;fill:#c5e9ff;opacity:.68"></path>
                            <path
                                d="M3438.8687,2592.9441s928.3783-462.1988,753.625-676.036-852.9557,604.509-852.9557,604.509Z"
                                style="fill:url(#bdf72872-af11-4797-a017-e4afd7fa9b83)"></path>
                            <g style="opacity:.61">
                                <path
                                    d="M4082.8233,2011.258c-13.8378,8.7702-27.4932,17.8369-41.1211,26.928q-53.864,35.93235-106.5571,73.5834-75.00045,53.4594-147.7231,110.0221c-56.4122,43.9264-111.6954,89.3357-165.2591,136.7013-54.9184,48.5636-108.1362,99.1801-158.0037,152.9451q-8.8317,9.52185-17.5124,19.182c-4.7549,5.2886,3.0544,13.1478,7.833,7.833,48.6504-54.1101,100.8516-104.963,154.8664-153.686,53.4049-48.173,108.6663-94.2733,165.1111-138.8365q73.9227-58.36185,150.4801-113.2829,55.7292-40.0887,112.6929-78.4276c16.5987-11.1501,33.5773-21.7605,50.1248-32.9776.2152-.1459.4395-.28.6592-.4193,6.0053-3.8061.4541-13.3964-5.591-9.565Z"
                                    style="fill:#65e0a8"></path>
                                <path
                                    d="M3988.7382 1957.6818c-26.6685 36.622-48.5527 77.723-66.5363 119.1791a560.92916 560.92916 0 0 0-22.9338 62.209c-2.0501 6.8437 8.6379 9.7679 10.6818 2.9448 17.8001-59.4205 46.2899-116.0403 80.668-167.5865 2.5043-3.7549 5.0279-7.5061 7.6853-11.1553 4.2018-5.7701-5.405-11.3037-9.565-5.5911ZM4033.3129 2145.6602c-10.9705 6.8883-23.0408 12.3774-35.0027 17.2579-28.865 11.777-59.53 19.7347-90.6228 22.4002a262.72489 262.72489 0 0 1-65.947-2.463c-6.9732-1.172-9.9707 9.5009-2.9448 10.6818 63.6659 10.7002 130.2932-2.0672 187.5266-31.3485 4.2587-2.1788 8.527-4.4173 12.5818-6.9633 6.0232-3.7819.4699-13.3707-5.5911-9.5651ZM3774.67 2117.8833a268.63094 268.63094 0 0 0-17.8535 29.6134 413.07218 413.07218 0 0 0-32.0563 77.606 368.4995 368.4995 0 0 0-12.3425 59.1943c-.882 7.0559 10.2035 6.9918 11.0775 0 6.6621-53.2943 26.081-105.7566 54.4884-151.3044 2.0065-3.2172 4.0416-6.4351 6.2515-9.5183 4.16-5.8039-5.4438-11.3409-9.5651-5.591ZM3786.1468 2321.181c-.5908.2819-1.1889.5488-1.7862.8165-2.3754 1.0642-2.4797 1.0919-4.3918 1.8739-6.674 2.7298-13.4584 5.1912-20.2999 7.4666a419.73722 419.73722 0 0 1-72.2043 16.9703 412.8702 412.8702 0 0 1-56.3611 4.1416c-7.1254.0492-7.1414 11.1268 0 11.0775 50.8936-.3515 102.8579-9.3222 150.2177-28.3293 3.4995-1.4044 7.0113-2.8275 10.4166-4.452 6.4312-3.068.8174-12.6222-5.591-9.5651Z"
                                    style="fill:#65e0a8"></path>
                            </g>
                            <path
                                d="M3482.381,2568.0192s741.2719-986.674,430.6575-1132.8266S3334.271,2540.1254,3334.271,2540.1254Z"
                                style="fill:url(#bc568ab1-f071-4694-a1ad-37fb6f881e49)"></path>
                            <g style="opacity:.54">
                                <path
                                    d="M3847.9909,1596.0341c-9.993,16.8044-19.6153,33.8364-29.193,50.8794q-37.7523,67.17825-73.2445,135.5969-50.97465,97.97565-97.6249,198.1259c-35.9768,77.4154-69.8683,155.8335-100.7859,235.4112-31.7449,81.7068-60.4421,164.7109-83.7128,249.2487q-4.1871,15.2109-8.1244,30.4885c-2.1712,8.4178,10.8461,12.0088,13.0179,3.5889,21.8181-84.5871,49.3956-167.6275,80.2014-249.341,30.3427-80.4849,63.9176-159.73,99.6979-237.941q46.8216-102.34545,98.4498-202.4021,37.36785-72.6129,77.0811-143.9904c11.5869-20.7795,24.0676-41.1265,35.4093-62.0325.151-.2781.3232-.5466.4851-.8188,4.451-7.485-7.2154-14.2829-11.657-6.8137Z"
                                    style="fill:#ffccd7"></path>
                                <path
                                    d="M3716.1014 1583.6492c-2.4403 16.4581-3.8021 33.1132-4.8686 49.7068a848.4231 848.4231 0 0 0 .4327 117.6747 690.78052 690.78052 0 0 0 10.6701 80.5134c1.6597 8.5192 14.6741 4.9126 13.0179-3.5889-14.4071-73.9525-15.8598-151.0372-8.0002-225.8909q.6249-5.9517 1.37-11.8902c.0798-.6271.1632-1.2536.2438-1.8805.1304-1.0153-.2653 1.9222-.019.1505.0559-.4022.1116-.8044.1712-1.206.5388-3.6338-.9089-7.2106-4.7145-8.3034-3.1744-.9115-7.7696 1.114-8.3034 4.7145ZM3870.8733 1769.7307c-8.2697 13.7797-17.5696 24.9984-28.1089 36.9526-24.6118 27.9163-53.3166 52.2858-85.4171 71.1823a303.38044 303.38044 0 0 1-72.7873 30.9894c-8.3596 2.3214-4.8092 15.35 3.5888 13.0179 74.3839-20.6562 139.6396-69.5171 184.9804-131.5222 3.2795-4.4848 6.5395-9.0381 9.4011-13.8062 4.4818-7.468-7.1861-14.2634-11.657-6.8138ZM3575.673 1870.3187a332.50712 332.50712 0 0 0-2.7018 42.7392 506.64179 506.64179 0 0 0 9.375 102.1495 451.38666 451.38666 0 0 0 19.8602 70.7826c2.9998 8.0728 16.0533 4.5799 13.0178-3.5888a469.15065 469.15065 0 0 1-27.6918-195.8809c.2511-3.4662.5469-6.93.9199-10.3854.115-1.0652.7527-5.8864.2386-2.2273.5111-3.6378-.89-7.2052-4.7145-8.3034-3.153-.9054-7.7969 1.1089-8.3034 4.7145ZM3704.4141 2088.9321c-7.1138 9.1338-15.3172 17.5312-23.5311 25.6596a467.20989 467.20989 0 0 1-68.7041 55.9807 484.9577 484.9577 0 0 1-58.9019 33.6948c-7.8208 3.7779-.9826 15.423 6.8138 11.6569 54.5174-26.3351 105.6638-63.0602 146.122-108.3391 2.6521-2.9681 5.3002-5.9648 7.7473-9.1068 2.2565-2.8973 2.7723-6.7124 0-9.5461-2.3075-2.3586-7.3098-2.8713-9.546 0Z"
                                    style="fill:#ffccd7"></path>
                            </g>
                            <path
                                d="M3460.589,2468.6922s263.9172-32.8082,372.4339-81.4891,348.1887-91.5366,357.1524-2.3585-219.9894,318.8193-610.4802,237.437l-128.3059-136.7862Z"
                                style="fill:url(#bcb223e2-656f-4c27-93a3-165161e23393)"></path>
                            <g style="opacity:.6">
                                <path
                                    d="M4068.3843,2415.8105c-10.6341,4.7479-20.3241,8.6389-32.1985,13.3498q-42.67875,16.9317-86.3051,31.3447c-85.8179,28.4942-174.4093,51.0499-264.4041,61.0932-53.9809,6.0242-108.8102,7.5179-162.7575.3536-6.615-.8785-6.5505,9.5324,0,10.4023,48.0596,6.3824,96.8357,5.8624,145.0451,1.4475,48.6603-4.4562,96.9373-12.8265,144.5506-23.7252,43.0523-9.8546,85.6206-21.8038,127.6426-35.384q46.4928-15.02505,92.0538-32.7693,13.83615-5.406,27.5517-11.1153c4.3972-1.8375,9.3702-3.3787,13.5188-5.7703a6.02308,6.02308,0,0,1,.5528-.2449c6.1015-2.7242.8166-11.6908-5.2502-8.9821Z"
                                    style="fill:#65e0a8"></path>
                                <path
                                    d="M4046.9208 2505.2238c-13.8006 1.4843-27.7451 2.0345-41.6132 2.3211-30.4002.6282-61.0562-.6338-91.1067-5.4722a280.3544 280.3544 0 0 1-54.1437-13.8529c-6.274-2.3571-8.9844 7.6943-2.7653 10.0308 31.1659 11.709 64.7053 16.5394 97.7911 18.6732a599.0324 599.0324 0 0 0 76.9076-.0963c4.9801-.3201 9.9674-.6676 14.9302-1.2014 6.5862-.7083 6.6586-11.1184 0-10.4023ZM3873.8017 2405.1134a275.06933 275.06933 0 0 0-32.8678 16.7488 383.09869 383.09869 0 0 0-68.0906 50.2021 322.33275 322.33275 0 0 0-40.1432 44.9376c-3.9765 5.3927 5.0471 10.5866 8.982 5.2503 32.1188-43.5573 76.6128-78.4893 124.9846-102.4546 2.6354-1.3057 5.2886-2.5771 7.9692-3.7875.7407-.3345 1.4878-.6546 2.2289-.9881 1.297-.5836-.3988.1638-.2978.1221 6.0997-2.5216 3.4261-12.5902-2.7653-10.0307ZM3805.0275 2574.5686c-11.7004.4035-23.5651-.6994-35.1792-1.9322-31.7725-3.3727-63.2014-10.2241-93.8306-19.2301a653.78275 653.78275 0 0 1-72.1948-25.988c-6.0886-2.599-11.3949 6.3592-5.2503 8.9821 61.1955 26.122 127.5911 45.638 194.4744 48.3968 3.9835.1643 7.993.3112 11.9805.1737 6.6755-.2302 6.7065-10.6336 0-10.4023Z"
                                    style="fill:#65e0a8"></path>
                            </g>
                            <path
                                d="M672.5179,2605.9802H4031.2061a51.7598,51.7598,0,0,1,51.7598,51.7598v.0001A51.7599,51.7599,0,0,1,4031.206,2709.5H672.5178a51.7598,51.7598,0,0,1-51.7598-51.7598v-.0001a51.7599,51.7599,0,0,1,51.7599-51.7599Z"
                                style="fill:#06378e"></path>
                            <path
                                d="M2664.2398,1940.7891l-62.4539-43.6639H2211.6686l-62.4522,43.6639a37.28966,37.28966,0,0,0-15.9257,30.5643v604.6783a37.294,37.294,0,0,0,37.2943,37.2944h472.2863a37.29444,37.29444,0,0,0,37.2947-37.2944V1971.3534A37.29457,37.29457,0,0,0,2664.2398,1940.7891Z"
                                style="fill:#2a6ac7"></path>
                            <polygon
                                points="2601.786 1838.893 2419.387 1838.893 2394.07 1838.893 2211.669 1838.893 2211.669 1897.125 2601.786 1897.125 2601.786 1838.893"
                                style="fill:#1a56b9"></polygon>
                            <path
                                d="M2175.0694,1685.6353h463.3171a27.6709,27.6709,0,0,1,27.6709,27.6709v121.47a27.6707,27.6707,0,0,1-27.6707,27.6707H2175.0692a27.6704,27.6704,0,0,1-27.6704-27.6704V1713.3059A27.6706,27.6706,0,0,1,2175.0694,1685.6353Z"
                                style="fill:#2a6ac7"></path>
                            <path
                                d="M2680.172,1971.357v604.6846a37.29532,37.29532,0,0,1-37.3035,37.2798h-96.6609a37.29034,37.29034,0,0,0,37.2802-37.2798V1971.357a37.26256,37.26256,0,0,0-15.927-30.5674l-62.4446-43.6646v-34.6836h39.3608a24.91328,24.91328,0,0,0,24.908-24.9078V1710.5394a24.91328,24.91328,0,0,0-24.908-24.9078h96.6608a24.91824,24.91824,0,0,1,24.9309,24.9078v126.9942a24.91824,24.91824,0,0,1-24.9309,24.9078h-39.3614v34.6836l62.4686,43.6646A37.32509,37.32509,0,0,1,2680.172,1971.357Z"
                                style="mix-blend-mode:multiply;fill:#1350a8;opacity:.52"></path>
                            <circle cx="2413.744" cy="2255.227" r="224.066" style="fill:#c1e0fd"
                                transform="rotate(-45 2413.744 2255.227)"></circle>
                            <path
                                d="M2199.0851,1834.8486h0a16.47147,16.47147,0,0,1-16.4232-16.4231v-88.7689a16.47147,16.47147,0,0,1,16.4232-16.4231h0a16.47139,16.47139,0,0,1,16.4231,16.4231v88.7689A16.47139,16.47139,0,0,1,2199.0851,1834.8486Z"
                                style="fill:#1350a8"></path>
                            <rect width="32.846" height="121.615" x="2243.47" y="1713.234" rx="16.423"
                                style="fill:#1350a8"></rect>
                            <path
                                d="M2317.8028,1834.8486h0a16.47141,16.47141,0,0,1-16.4232-16.4231v-88.7689a16.47141,16.47141,0,0,1,16.4232-16.4231h0a16.47139,16.47139,0,0,1,16.4231,16.4231v88.7689A16.47139,16.47139,0,0,1,2317.8028,1834.8486Z"
                                style="fill:#1350a8"></path>
                            <rect width="32.846" height="121.615" x="2362.187" y="1713.234" rx="16.423"
                                style="fill:#1350a8"></rect>
                            <rect width="32.846" height="121.615" x="2421.994" y="1713.234" rx="16.423"
                                style="fill:#1350a8"></rect>
                            <path
                                d="M2499.225,1834.8486h0a16.47139,16.47139,0,0,1-16.4231-16.4231v-88.7689a16.47139,16.47139,0,0,1,16.4231-16.4231h0a16.47141,16.47141,0,0,1,16.4232,16.4231v88.7689A16.47141,16.47141,0,0,1,2499.225,1834.8486Z"
                                style="fill:#1350a8"></path>
                            <rect width="32.846" height="121.615" x="2540.712" y="1713.234" rx="16.423"
                                style="fill:#1350a8"></rect>
                            <path
                                d="M2617.9427,1834.8486h0a16.47139,16.47139,0,0,1-16.4231-16.4231v-88.7689a16.47139,16.47139,0,0,1,16.4231-16.4231h0a16.47147,16.47147,0,0,1,16.4232,16.4231v88.7689A16.47147,16.47147,0,0,1,2617.9427,1834.8486Z"
                                style="fill:#1350a8"></path>
                            <path
                                d="M2518.4387,2556.6116,2661.7732,777.0091c2.7736-34.4387,35.5777-60.634,75.9311-60.634h910.0695c46.5998,0,84.3096,34.5579,81.1064,74.3285L3585.5457,2570.3057c-2.7737,34.4391-35.5777,60.6339-75.9311,60.6339H2599.5455C2552.9457,2630.9396,2515.2359,2596.3822,2518.4387,2556.6116Z"
                                style="mix-blend-mode:multiply;fill:#98bdf9;opacity:.62"></path>
                            <path
                                d="M3491.5967,2653.4524H2657.8281c-46.5999,0-84.3098-35.4609-81.1066-76.2712L2720.0558,751.0614c2.7738-35.339,35.5778-62.2187,75.931-62.2187h833.7687c46.5999,0,84.3097,35.461,81.1066,76.2712L3567.5277,2591.2337C3564.754,2626.5728,3531.9499,2653.4524,3491.5967,2653.4524Z"
                                style="fill:url(#fa0e8d83-fe84-4a7f-8f10-daef7646a311)"></path>
                            <path
                                d="M3415.2959,2653.4524H2581.5273c-46.5999,0-84.3097-35.4609-81.1066-76.2712L2643.7551,751.0614c2.7737-35.339,35.5778-62.2187,75.931-62.2187h833.7686c46.5999,0,84.3097,35.461,81.1067,76.2712L3491.2269,2591.2337C3488.4533,2626.5728,3455.6491,2653.4524,3415.2959,2653.4524Z"
                                style="fill:#6485e2"></path>
                            <path
                                d="M3590.1598,761.1579,3446.7977,2587.2382c-1.2059,15.3918-15.3949,27.0345-32.9443,27.0345H2581.3069c-9.0486,0-18.138-2.6536-24.9199-8.1235-8.1547-6.5766-12.2594-15.6263-11.5648-25.0126L2688.1851,755.0569c1.2031-15.4477,15.3941-27.0344,32.9435-27.0344h155.0442c13.494,0,24.4163,10.2658,23.4952,22.0844h0a14.90746,14.90746,0,0,0,2.8149,10.1604,18.82073,18.82073,0,0,0,15.2659,7.3829h428.4285c9.0283,0,16.3099-5.933,16.967-13.8805l.6077-7.7269c.8053-10.2355,10.3075-18.0203,21.9949-18.0203h167.9282c9.0487,0,18.1373,2.6529,24.92,8.1228C3586.7497,742.7219,3590.8552,751.7716,3590.1598,761.1579Z"
                                style="fill:#caebff"></path>
                            <path
                                d="M2668.2748,1446.8005l-42.0813,494.3723a17.79527,17.79527,0,0,0,17.7311,19.3046h796.2197a17.79542,17.79542,0,0,0,17.7493-16.5171l35.6176-494.5837a17.79537,17.79537,0,0,0-17.7541-19.0735l-789.7559.2114A17.79536,17.79536,0,0,0,2668.2748,1446.8005Z"
                                style="fill:#338ef2;opacity:.81"></path>
                            <path
                                d="M2701.6661,1396.5354h766.8752a29.51364,29.51364,0,0,0,29.3787-26.6947l.1075-1.1213a29.51343,29.51343,0,0,0-29.4217-32.3323l-766.9828,1.1212a29.51344,29.51344,0,0,0-29.3528,26.8813v.0001A29.51356,29.51356,0,0,0,2701.6661,1396.5354Z"
                                style="fill:#338ef2"></path>
                            <path
                                d="M1203.1052,2605.3772S344.8055,1718.6241,634.8166,1534.9521s711.7758,1024.316,711.7758,1024.316Z"
                                style="fill:url(#be3455ce-9249-4d8d-973f-b9a1c98712fe)"></path>
                            <g style="opacity:.61">
                                <path
                                    d="M709.2429,1695.3268q.30705.39465.6128.7904c.9209,1.1866-1.2719-1.6546-.2768-.3583q.57135.7443,1.1451,1.4867,3.45915,4.49715,6.8892,9.0168,13.05705,17.1834,25.8721,34.5491,45.81915,61.9578,89.5501,125.4276,62.34645,90.25545,120.7283,183.1696c45.1691,72.0202,88.3987,145.2859,128.8311,220.075,41.5336,76.826,80.2958,155.3085,113.7865,235.9956q6.04815,14.57115,11.8555,29.2404c3.1625,7.9825,16.2238,4.5034,13.0179-3.5888-32.2913-81.5073-70.0476-160.7777-110.9087-238.3136-40.2626-76.4003-83.5988-151.1677-128.9911-224.6273q-59.3994-96.12765-123.3247-189.3612-46.2795-67.6575-94.7487-133.7863-14.66415-19.9674-29.5819-39.7474c-4.6858-6.202-9.1168-12.9774-14.3276-18.7623-.2104-.2336-.3897-.5035-.5831-.7521-2.2565-2.8999-7.1697-2.3249-9.546,0-2.8716,2.8094-2.2266,6.6847,0,9.5461Z"
                                    style="fill:#fafffd"></path>
                                <path
                                    d="M835.954 1662.1309c4.3238 15.5027 7.5735 31.3574 10.5909 47.1547a835.41247 835.41247 0 0 1 13.8734 113.5736 676.5885 676.5885 0 0 1-.4876 80.6599c-.5878 8.6722 12.9148 8.6359 13.5002 0 5.1816-76.4368-3.0233-154.4462-20.4551-228.9752-1.2516-5.3512-2.5272-10.7071-4.0039-16.0019-2.3307-8.3565-15.3595-4.8069-13.0179 3.5889ZM708.1546 1870.5208c10.0479 12.8054 22.1807 24.2617 34.3667 34.9731 28.8953 25.3988 61.5586 46.7044 96.9636 61.8473a315.71354 315.71354 0 0 0 78.2159 22.3477c3.6344.535 7.2099-.9063 8.3034-4.7145.9107-3.1715-1.1133-7.7733-4.7145-8.3034-73.6613-10.8432-142.1184-49.5151-192.9025-103.5493-3.6856-3.9214-7.3614-7.9093-10.6865-12.1469-2.2683-2.8908-7.1622-2.3323-9.5461 0-2.8631 2.8011-2.238 6.6937 0 9.546ZM1010.9664 1929.0957c3.515 12.9856 5.6583 26.4601 7.462 39.7685a492.93821 492.93821 0 0 1 3.3184 98.5888 440.41549 440.41549 0 0 1-10.7141 71.7896c-1.9874 8.4498 11.0264 12.0561 13.0179 3.5889 15.5858-66.2631 16.4439-136.788 3.0465-203.5489-.9252-4.6101-1.8836-9.2348-3.1128-13.7758-2.2675-8.3768-15.2945-4.8218-13.0179 3.5889ZM914.2614 2167.7492c8.738 8.7193 18.5814 16.4469 28.3623 23.9363a478.38308 478.38308 0 0 0 77.1757 48.0269 497.81268 497.81268 0 0 0 63.2429 26.2796c8.251 2.7822 11.7914-10.2521 3.5889-13.0179-55.7723-18.806-109.6049-47.9773-154.0989-86.7823-2.968-2.5885-5.9356-5.2053-8.7248-7.9886-6.1575-6.1443-15.7068 3.3985-9.5461 9.546Z"
                                    style="fill:#fafffd"></path>
                            </g>
                            <path
                                d="M1353.3471,2460.2757s-263.9172-32.8081-372.4339-81.4891-348.1887-91.5366-357.1524-2.3585,219.9894,318.8194,610.4802,237.4371l128.3059-136.7863Z"
                                style="fill:url(#b51d9f3d-7262-4d1c-a0e6-f8415afd048f)"></path>
                            <g style="opacity:.6">
                                <path
                                    d="M740.3015,2416.3761c11.0159,4.9184,22.2212,9.4409,33.4285,13.8999q42.7602,17.0127,86.4794,31.4841c40.8975,13.6101,82.3222,25.6828,124.2129,35.8446,47.1942,11.4483,95.0257,20.4699,143.2998,25.8965,48.3761,5.438,97.4147,7.2574,145.9267,2.4764q8.8017-.86745,17.5682-2.0399c6.5397-.8685,6.626-11.2823,0-10.4023-95.996,12.7484-194.4754-.6621-288.2168-22.2243a1565.258,1565.258,0,0,1-217.2719-67.43c-14.2961-5.5732-27.419-10.7911-40.1765-16.487-6.061-2.7061-11.3584,6.2549-5.2503,8.982Z"
                                    style="fill:#65e0a8"></path>
                                <path
                                    d="M767.0153 2507.2097a516.06026 516.06026 0 0 0 134.748-3.4057c18.6724-2.9653 37.1624-7.3131 54.8809-13.9699 6.209-2.3327 3.5194-12.3919-2.7654-10.0307-30.7705 11.5604-63.7666 16.3789-96.4404 18.3908a601.32772 601.32772 0 0 1-75.8598-.209c-4.8578-.3155-9.7222-.6571-14.5633-1.1778-6.6475-.715-6.5971 9.6928 0 10.4023ZM937.369 2406.7276c-1.8232-.7537.1685.0776 1.185.5306 2.1215.9455 4.2236 1.9349 6.3143 2.9466 7.6376 3.6961 15.1169 7.7213 22.4572 11.9758a371.28969 371.28969 0 0 1 65.8579 48.3109 308.63818 308.63818 0 0 1 39.0705 43.3442c3.9307 5.3306 12.9626.1479 8.9821-5.2502-33.2447-45.0842-78.8431-81.5458-128.9971-106.3256-3.9806-1.9667-8.0003-3.8664-12.1045-5.563-6.1808-2.555-8.875 7.5051-2.7654 10.0307ZM1008.9085 2576.5544c12.1524.4191 24.4825-.7603 36.5399-2.0791a551.35349 551.35349 0 0 0 96.8054-19.9187 677.59036 677.59036 0 0 0 73.1097-26.5727c6.1379-2.62.8441-11.5835-5.2503-8.982-59.5701 25.4281-124.6494 44.4373-189.7624 46.9983-3.8052.1497-7.6338.2833-11.4423.1519-6.6953-.2309-6.6865 10.1717 0 10.4023Z"
                                    style="fill:#65e0a8"></path>
                            </g>
                            <path
                                d="M2066.8251,2556.6115,1923.4906,777.0089c-2.7737-34.4387-35.5778-60.634-75.9311-60.634H937.4899c-46.5997,0-84.3096,34.5579-81.1063,74.3285L999.7181,2570.3056c2.7736,34.4392,35.5777,60.634,75.931,60.634h910.0692C2032.318,2630.9396,2070.0279,2596.3821,2066.8251,2556.6115Z"
                                style="mix-blend-mode:multiply;fill:#98bdf9;opacity:.62"></path>
                            <path
                                d="M1104.7943,2653.4524h833.7686c46.5999,0,84.3097-35.4609,81.1066-76.2712L1876.3351,751.0614c-2.7737-35.339-35.5778-62.2187-75.931-62.2187H966.6354c-46.5998,0-84.3096,35.461-81.1066,76.2712l143.3345,1826.1198C1031.637,2626.5728,1064.4411,2653.4524,1104.7943,2653.4524Z"
                                style="fill:#3e3ed6"></path>
                            <path
                                d="M1181.095,2653.4524h833.7686c46.5999,0,84.3098-35.4609,81.1067-76.2712L1952.6358,751.0614c-2.7736-35.339-35.5777-62.2187-75.931-62.2187H1042.9362c-46.5999,0-84.3097,35.461-81.1066,76.2712L1105.164,2591.2337C1107.9377,2626.5728,1140.7418,2653.4524,1181.095,2653.4524Z"
                                style="fill:#6485e2"></path>
                            <path
                                d="M1006.2311,761.1579l143.3622,1826.0803c1.2059,15.3918,15.3948,27.0345,32.9442,27.0345H2015.084c9.0487,0,18.1381-2.6536,24.92-8.1235,8.1546-6.5766,12.2594-15.6263,11.5647-25.0126L1908.2058,755.0569c-1.203-15.4477-15.3941-27.0344-32.9435-27.0344H1720.2181c-13.4939,0-24.4163,10.2658-23.4951,22.0844h0a14.907,14.907,0,0,1-2.815,10.1604,18.82059,18.82059,0,0,1-15.2659,7.3829H1250.2137c-9.0284,0-16.3099-5.933-16.967-13.8805l-.6078-7.7269c-.8052-10.2355-10.3075-18.0203-21.9949-18.0203H1042.7158c-9.0486,0-18.1373,2.6529-24.9199,8.1228C1009.6413,742.7219,1005.5357,751.7716,1006.2311,761.1579Z"
                                style="fill:#caebff"></path>
                            <path
                                d="m1080.6457 1050.3043 55.371 701.3285a15.32228 15.32228 0 0 0 15.7604 14.1087l777.0895-24.6435a15.32239 15.32239 0 0 0 14.7621-16.8249l-67.6428-682.9343a15.32243 15.32243 0 0 0-15.373-13.8116l-764.8176 6.2493A15.32237 15.32237 0 0 0 1080.6457 1050.3043ZM1776.519 840.7123H1170.6582a19.63277 19.63277 0 0 1-19.6327-19.6328h0a19.63277 19.63277 0 0 1 19.6327-19.6328H1776.519a19.63277 19.63277 0 0 1 19.6327 19.6328h0A19.63277 19.63277 0 0 1 1776.519 840.7123ZM1169.8742 1798.3313l755.7256-12.6555a20.17045 20.17045 0 0 1 20.3521 17.6642l5.0386 40.2858a20.17011 20.17011 0 0 1-19.5208 22.6674l-756.9253 18.525a20.17034 20.17034 0 0 1-20.5943-18.4924l-3.839-46.1551A20.17037 20.17037 0 0 1 1169.8742 1798.3313Z"
                                style="fill:#e3fcff"></path>
                            <path
                                d="M2353.7648,1058.1225l13.4356-21.9805c-2.4898-13.7359-13.0545-11.4953-13.0545-11.4953l-4.4922,5.421,8.3355-13.6365c-2.4898-13.736-13.0545-11.4954-13.0545-11.4954l-28.33,34.1849,14.8275-24.2571c-2.4894-13.736-13.0541-11.4954-13.0541-11.4954l-37.1029,44.7711-32.55,28.2258-38.1961,20.0133-.6058-5.101,13.644-30.7877a11.59231,11.59231,0,0,0-1.0809-11.2861,9.12672,9.12672,0,0,0-15.2437.0497l-35.8378,50.9939-17.068,68.841-11.9235,21.2178-37.6049,29.0979a15.37572,15.37572,0,0,0-17.7318-.5684l-5.1344,3.4196a10.91037,10.91037,0,0,0-7.1627.5622c-27.34,12.0277-71.177,36.043-84.9006,46.5541a2.87994,2.87994,0,0,1-4.2218-.8695l-4.9933-8.5518a5.5034,5.5034,0,0,0-2.6754-2.3453l-.0026-.0008.0013-.0036a5.5743,5.5743,0,0,0-3.6693-.2343,5.517,5.517,0,0,0-1.6273.7306l-5.7253,3.8073a2.815,2.815,0,0,1-3.7515-.6207c-.0967-.1239-.1938-.2488-.2892-.3859l-.0013.0013c-55.6453-74.0334-137.2876-253.9276-137.2876-253.9276l-.0009.0036-.0004-.008-105.2748-50.83-7.324-31.6158a14.593,14.593,0,0,0-6.2906-8.9383l-45.179-29.2311-.6194-3.8389c21.3826.451,41.115-4.7911,55.6875-14.7153a57.34287,57.34287,0,0,0,18.7973-20.3013c8.2951-15.4947,8.984-42.1872,6.1855-70.8437-.9095-9.4024-2.1803-18.9974-3.6877-28.4869-1.7184-10.7361-3.6948-21.3263-5.7494-31.2879-.1833-.8858-.368-1.7628-.5526-2.6384,16.6394-18.8682,16.7819-46.1842,15.6029-59.7709a42.17471,42.17471,0,0,0,7.306-10.3146s6.4743-18.0101-1.3821-31.235c.0717.5719,1.0744,8.5538-6.4545,10.4283,0,0,9.6688-28.5871-15.0398-37.0495-10.5444-3.6123-19.4435-6.4783-26.2023-9.1653a37.15634,37.15634,0,0,0,1.1513-9.0822c0-29.0337-33.9277-52.5613-75.761-52.5613a105.19375,105.19375,0,0,0-28.5027,3.8442c-18.3745-13.5902-49.9165-14.2445-79.414.3139-30.5134,15.0514-49.4444,41.7377-48.5441,65.1831-11.6848,6.6695-25.0761,19.8533-20.2379,44.3553,0,0-32.2406,11.2803-21.2846,61.0281,2.1359,9.6991,6.2831,19.5011,11.5674,28.9994-5.2975,18.0215.5086,43.8563,16.8034,66.9964,17.5102,24.8664,42.0294,39.3703,61.5433,38.4124a44.36255,44.36255,0,0,0,16.0275,7.3544v45.1109l-8.9312,4.8069-23.679,71.0719c-26.1571,14.0696-92.7733,51.1936-124.8191,80.9407l.1271,1.4801-27.1474,60.6242a101.22364,101.22364,0,0,0-7.2973,18.2492L1268.283,1385.432c-14.6349,62.8172-4.6487,85.3146,19.8075,120.3927l17.3393,24.8567c27.6195,18.5746,60.9832,27.8047,96.0969,30.9715l-12.2861,187.5602s2.3861.4466,6.855,1.2216l-5.3098,48.301c2.1157,1.5127,4.3915,2.9941,6.7956,4.4434l-10.2438,449.2633a89.76434,89.76434,0,0,1-1.4348,13.9728l-30.7055,167.0708-41.8777,180.7817h310.1126l44.8665-216.6691,10.1951,216.674h248.8247V2205.0051l-37.3921-417.4992c10.1541-16.7436,3.0042-50.4414-2.6696-70.4459a59.48448,59.48448,0,0,0,4.0785-4.5484l-18.0817-197.6172c28.3084,7.7874,96.3167,18.3442,166.4756-31.1262,50.2787-35.4495,92.5292-99.9777,112.1988-136.5724a2.26128,2.26128,0,0,0,.1521-.276l.0136-.0132c3.1303-5.8215,5.683-10.9388,7.6001-15.0912a13.54067,13.54067,0,0,0,.5736-9.8838l7.314-6.0492a13.70141,13.70141,0,0,0,2.2744-19.0251l-3.5106-4.2104c23.1094-31.0721,39.3593-54.9912,39.3593-54.9912l90.0772-55.4756,40.2745-49.4541,28.5858-62.9869C2362.8678,1059.9499,2356.9944,1058.2768,2353.7648,1058.1225Z"
                                style="mix-blend-mode:multiply;fill:#98bdf9;opacity:.37"></path>
                            <path
                                d="M1870.332,1405.3331l17.3481,31.4447,153.0328,10.0817c26.1094-19.1391,34.8932-60.3966,73.0865-107.8192,40.262-49.9912,75.1763-101.3845,75.1763-101.3845l-52.7896-55.4758-82.3897,63.7521-82.6552,65.4686c-34.5823-6.4845-51.6095,24.7116-70.2072,45.6097A187.76192,187.76192,0,0,0,1870.332,1405.3331Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M2125.0416,1191.4501l12.5664-22.3617,17.0681-68.8413,35.8377-50.9939a9.12677,9.12677,0,0,1,15.2438-.0496h0a11.59285,11.59285,0,0,1,1.0811,11.2861l-13.6443,30.7878,8.9967,75.7624-61.4541,53.29Z"
                                style="fill:#fbbd9d"></path>
                            <polygon
                                points="2177.406 1104.969 2253.241 1065.234 2279.053 1182.18 2188.976 1237.656 2142.716 1200.446 2177.406 1104.969"
                                style="fill:#fbbd9d"></polygon>
                            <path
                                d="M2221.4379,1095.7388l8.3971-17.4996,34.7114-30.1,37.1028-44.7711s10.5648-2.2406,13.0543,11.4954l-34.309,56.1282-52.806,45.7908Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M2247.9946,1097.3064l8.3971-17.4996,34.7113-30.0999,37.1029-44.7711s10.5648-2.2407,13.0542,11.4953l-34.3089,56.1282-52.806,45.7908Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M2257.2059,1117.0173l8.3971-17.4996,34.7113-30.0999,37.1029-44.7711s10.5648-2.2406,13.0542,11.4954l-34.3089,56.1281-52.806,45.7908Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M2272.9024,1161.1363l-28.1254-49.1929,52.9793-8.9285,37.1028-44.7711s10.5648-2.2406,13.0543,11.4954l-28.5862,62.9867-40.2743,49.4541Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M2191.9388 1106.0257s9.8228 40.0841-16.981 75.8717C2174.9578 1181.8974 2192.4077 1131.2469 2191.9388 1106.0257ZM2244.777 1086.6605s14.6346 25.3211 34.705 38.7305C2279.482 1125.391 2253.6654 1094.4595 2244.777 1086.6605Z"
                                style="fill:#f9af8f"></path>
                            <path
                                d="M1906.6126,1355.9338l13.1158,30.1385,115.6822,18.6057a86.14594,86.14594,0,0,1-33.8033-15.9757c-21.2865-16.3682-32.8145-44.3972-24.0171-69.7673,2.4079-6.9441,10.2767-22.8718,23.9892-22.3868,0,0-7.3895-8.8988-40.6118,13.7767-8.8241,6.0212-14.7053,6.8447-20.8151,4.4402A209.68145,209.68145,0,0,0,1906.6126,1355.9338Z"
                                style="fill:#f7ad8d"></path>
                            <path
                                d="M2142.9648,1331.8154c-1.9169,4.1522-4.4695,9.2697-7.6001,15.091l-.0134.0134a2.24105,2.24105,0,0,1-.1523.2762c-19.6696,36.5947-61.9199,101.1225-112.1986,136.5722-91.9632,64.845-180.2435,26.553-180.2435,26.553s-8.7734-28.5669-19.4218-74.4724c-23.3121-100.4745-45.8779-279.9045-14.4283-428.8776,0,0,81.6448,179.8994,137.2901,253.9306.0957.1381.1927.262.2897.386a2.815,2.815,0,0,0,3.7515.621l5.725-3.8075a5.51676,5.51676,0,0,1,1.6272-.7307,5.57632,5.57632,0,0,1,3.6694.2343,5.50067,5.50067,0,0,1,2.6752,2.3453l4.9935,8.5517a2.87965,2.87965,0,0,0,4.2217.8695c13.7238-10.511,57.5609-34.5262,84.9006-46.5541a10.97849,10.97849,0,0,1,13.4207,3.7933l70.2932,91.7423A13.57378,13.57378,0,0,1,2142.9648,1331.8154Z"
                                style="fill:url(#a23a426f-9904-4e70-aed2-9664b39d8c99)"></path>
                            <path
                                d="M1961.2583 1257.6004c-7.5044 18.9112-35.216 84.5423-64.2382 100.6395-31.4227 17.408 38.2913-82.0044 49.1754-97.3426.0957.1374.1927.262.2897.3859a2.8149 2.8149 0 0 0 3.7515.621l5.725-3.8074a5.5145 5.5145 0 0 1 1.6272-.7308A5.57633 5.57633 0 0 1 1961.2583 1257.6004ZM1961.2583 1296.8575s-27.2293 65.8135-10.6768 66.3567S1961.2583 1296.8575 1961.2583 1296.8575Z"
                                style="mix-blend-mode:multiply;fill:#cecece;opacity:.58"></path>
                            <path
                                d="M2064.8342,1222.5073l5.5137-3.6719a15.27932,15.27932,0,0,1,20.4551,3.2729l62.3241,74.7492a13.70125,13.70125,0,0,1-2.2745,19.025l-8.3361,6.8944Z"
                                style="fill:url(#a988fd4c-de43-4b5a-b46f-a236922cfd79)"></path>
                            <polygon
                                points="1910.592 2205.007 1910.592 2614.276 1661.763 2614.276 1644.784 2253.281 1573.751 1768.424 1767.159 1723.796 1865.461 1701.109 1910.592 2205.007"
                                style="fill:url(#b23180c2-6cf6-4306-9a41-bacb81136303)"></polygon>
                            <path
                                d="M1763.5799,1764.0586l-90.3212,528.7992-66.5551,321.4099H1296.5908l41.8778-180.7818,30.7054-167.0707a89.752,89.752,0,0,0,1.4346-13.973l10.3453-453.7065,1.8071-79.1763.165-7.0484c145.7873-54.7752,323.2439,23.2703,369.3023,45.7815h.0134C1759.5805,1761.8791,1763.5799,1764.0586,1763.5799,1764.0586Z"
                                style="fill:url(#b5f5d755-4bde-4e01-bd6c-9bf45a870b64)"></path>
                            <path
                                d="M1752.2283 1758.2925c-1.4077.6069-197.0589 83.8116-290.6224 70.9971-34.5667-4.7316-67.7136-16.3734-87.5489-30.5539l8.704-79.1763ZM1722.8115 1775.4759s119.7797 36.3176 144.8981 18.1061-2.2496-92.4696-2.2496-92.4696Z"
                                style="fill:#e3fcff"></path>
                            <path
                                d="M2135.199,1347.196c-19.6696,36.5947-61.9199,101.1225-112.1986,136.5722-91.9632,64.845-180.2435,26.553-180.2435,26.553s-8.7734-28.5669-19.4218-74.4724c28.1399,29.2977,67.9062,50.7333,121.9095,39.4639C2073.2508,1448.5805,2131.6684,1353.1412,2135.199,1347.196Z"
                                style="mix-blend-mode:multiply;fill:#cecece;opacity:.58"></path>
                            <path
                                d="M1715.742,1008.346s-15.2971-10.7589-34.3054-25.3805c-13.876-10.676-29.7537-23.4084-43.0639-35.519l-6.8147-69.6864,58.458,37.8225a14.59132,14.59132,0,0,1,6.2907,8.9384l7.3239,31.616Z"
                                style="fill:url(#a7414660-dd7e-4e96-acb4-dd39df6861a5)"></path>
                            <polygon points="1513.146 881.894 1531.94 871.778 1531.94 912.038 1513.146 881.894"
                                style="fill:url(#aa41dd73-8926-4b3d-8d04-aba4eb038621)"></polygon>
                            <path
                                d="M1619.4062,985.9587c-47.9611,9.8766-97.3292-36.6775-97.3292-36.6775V801.1634l114.2536,32.4431,12.6488,78.4314h.0148l5.5453,38.9399s.9756,7.124,1.2749,10.6444C1656.4976,969.6558,1652.7535,979.0919,1619.4062,985.9587Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M1648.9794,912.0379c-79.6862-5.5586-119.73-60.9965-126.9024-71.9487V801.1634l114.2536,32.4431Z"
                                style="fill:#f4ad8e"></path>
                            <path
                                d="M1610.3523,666.5982l-37.3519-42.3185-55.6093,32.7842-8.4475,54.1377,24.4734,60.0104,3.7446,7.7036S1622.8728,711.3055,1610.3523,666.5982Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M1646.6662,606.2536l28.6206-20.5879s5.371-6.9799-.4284-17.5182-25.7361-33.7042-54.87-23.7265c0,0-27.1647-26.8179-59.0616-21.3255-43.8337,7.5478-89.1128,26.6103-88.0661,55.6549,0,0-43.5913,9.1543-35.4406,50.4347,0,0-32.2403,11.2804-21.2845,61.028s74.6714,102.2308,74.6714,102.2308,15.7542-156.5313,53.794-171.2324S1646.6662,606.2536,1646.6662,606.2536Z"
                                style="fill:#4c3116"></path>
                            <path
                                d="M1699.9458,611.3928s-26.9834-66.5722-104.8795-63.8918c-102.9891,3.5438-90.7485,53.1475-90.7485,53.1475s-54.538,8.6723-56.7617,73.2028c-2.9855,86.6341,75.9636,136.5383,75.9636,136.5383l14.1754-121.9366,37.151-46.5841,46.4208,10.1916,56.4613-9.5067Z"
                                style="fill:#4c3116"></path>
                            <path
                                d="M1619.1452,702.8749c14.2443,28.87,48.3764,41.1246,76.2517,27.3711a54.47787,54.47787,0,0,0,18.5383-14.9402c24.1405-25.9122,15.4848-69.1633,15.4848-69.1633l-9.528,6.6245c-14.3262-28.6384-48.322-40.7566-76.0746-27.057C1615.9419,639.4634,1604.9009,674.0042,1619.1452,702.8749Z"
                                style="fill:#4c3116"></path>
                            <path
                                d="M1699.9694,654.1343s8.2059,27.651,15.4816,62.743c2.0545,9.9618,4.0309,20.552,5.7495,31.2881,1.5073,9.4894,2.7781,19.0846,3.6877,28.487,2.7985,28.6564,2.1094,55.3487-6.1855,70.8435a57.33952,57.33952,0,0,1-18.7977,20.3012c-18.5427,12.6285-45.4385,17.681-73.4604,13.0607-.4962-.0844-.9616-.178-1.4576-.2624a133.1896,133.1896,0,0,1-46.8028-17.8645,140.98264,140.98264,0,0,1-35.6584-31.5032,48.32926,48.32926,0,0,1-32.5022-10.1809l-.0094-.0308c-6.6256-5.2111-12.947-13.0688-17.447-24.7739-13.8584-36.1825,10.7751-43.37,25.15-33.8946a20.84735,20.84735,0,0,1,3.0982,2.4524s-.0252-.9671-.0408-2.6762c1.5274-.0611,3.1443-.0488,4.8414.0065,51.7742,2.2713,65.4674-86.2137,75.9992-130.3836,5.0919-21.2759,11.836-29.7118,17.4607-32.7664a90.61487,90.61487,0,0,1,10.7999-.2927C1664.6513,599.8763,1683.5607,622.8274,1699.9694,654.1343Z"
                                style="fill:#ffceb8"></path>
                            <path
                                d="M1489.0284,796.1603c4.4874,11.7174,10.8005,19.5472,17.4267,24.774.0148.0004.0145.0152.029.0304a48.279,48.279,0,0,0,32.4793,10.1905,141.27019,141.27019,0,0,0,35.6753,31.4883c54.0246,33.2513,120.4113,22.313,140.5083-15.2151,8.2962-15.4976,8.9786-42.1924,6.1772-70.8668a573.29359,573.29359,0,0,0-9.432-59.7518c-7.2785-35.1118-15.487-62.7704-15.487-62.7704-16.3997-31.2906-35.3221-54.2457-70.0734-55.4275l-.0146-.0003a87.61618,87.61618,0,0,0-10.7891.297c-5.6323,3.0275-12.3848,11.4719-17.4642,32.7545-10.5373,44.1582-24.2447,132.6465-75.9968,130.3856-1.6892-.069-3.3055-.0771-4.8344-.0238.0041,1.7354.0262,2.685.0262,2.685a22.33958,22.33958,0,0,0-3.1014-2.4601C1499.7995,752.7788,1475.1452,759.9897,1489.0284,796.1603Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M1711.5453,759.3855a44.98524,44.98524,0,0,0,9.1943,13.5716c-1.8301-17.2211-4.8358-35.0398-8.1282-51.4582A43.5833,43.5833,0,0,0,1711.5453,759.3855Z"
                                style="fill:#fc9e8b"></path>
                            <path
                                d="M1711.2023,758.2512a44.66055,44.66055,0,0,0,13.3301,17.2593c-.1174-1.1916-.235-2.3957-.3526-3.5994-1.8301-17.2211-4.8358-35.0398-8.1283-51.4583-.3151-1.5723-.6422-3.1447-.9579-4.6928C1706.7546,727.3937,1704.7511,743.5669,1711.2023,758.2512Z"
                                style="fill:#fc9e8b"></path>
                            <ellipse cx="1586.944" cy="772.444" rx="40.259" ry="42.747" style="fill:#fc9e8b"
                                transform="rotate(-23.698 1586.944 772.444)"></ellipse>
                            <path
                                d="M1713.1661 714.5622c.9557 6.1079-1.9827 11.7034-6.5598 12.5096-4.5685.8022-9.0522-3.4832-10.0072-9.5924-.9552-6.108 1.9806-11.7121 6.5492-12.5168C1707.725 704.157 1712.2106 708.453 1713.1661 714.5622ZM1645.1393 732.59c.8968 5.8918-2.2613 11.3247-7.0497 12.1456-4.78.8194-9.389-3.2799-10.2864-9.1728-.8968-5.8923 2.2604-11.332 7.0416-12.1527C1639.6327 722.5887 1644.243 726.6983 1645.1393 732.59Z"
                                style="fill:#263238"></path>
                            <path
                                d="M1644.7752 702.1094c-.961 2.5658-10.4073 1.2479-21.5338 2.4737-11.1533 1.0016-20.1491 4.163-21.5995 1.8384-.6462-1.1124.9406-3.5189 4.5907-5.9761a37.678 37.678 0 0 1 32.8601-3.2852C1643.1561 698.846 1645.1893 700.891 1644.7752 702.1094ZM1715.9662 683.655c-.5933 2.6558-7.4485 3.4113-14.5959 6.6567-7.2597 2.9916-12.5001 7.4736-14.8422 6.0877-1.0717-.7036-1.0423-3.099.7199-6.1782a23.22581 23.22581 0 0 1 23.719-10.2685C1714.4174 680.774 1716.185 682.3924 1715.9662 683.655Z"
                                style="fill:#4c3116"></path>
                            <path
                                d="M1698.5511 780.5681c-.2235.0825-.4528.1598-.6846.2302l-9.054 2.7429a1.82078 1.82078 0 0 1-1.0586-3.4843l9.054-2.7429a9.4139 9.4139 0 0 0 5.9194-5.7487 15.20477 15.20477 0 0 0 .2917-10.1287l-.3118-1.0298c-.8273-2.7241-3.1563-4.4424-5.1927-3.8274a10.66877 10.66877 0 0 1-9.1664-1.5985 15.24489 15.24489 0 0 1-5.9174-8.2762l-4.3744-14.7266a1.89172 1.89172 0 0 1 1.2266-2.2651 1.82223 1.82223 0 0 1 2.265 1.2263l4.3704 14.7168a11.59318 11.59318 0 0 0 4.4695 6.3046 7.08266 7.08266 0 0 0 6.0715 1.1331c3.96-1.1961 8.3249 1.6098 9.7322 6.2544l.3118 1.0298a18.86481 18.86481 0 0 1-.4042 12.5661A13.14967 13.14967 0 0 1 1698.5511 780.5681ZM1704.4426 800.2215s-26.4533 0-52.9066 11.5909C1651.536 811.8124 1693.7248 874.7002 1704.4426 800.2215Z"
                                style="fill:#ff806d"></path>
                            <path
                                d="M1506.3521,631.516l4.0757,125.3646s8.0421,19.301,26.5122,15.2803c12.2816-2.6716-.3271-42.5017-.9814-74.0301,27.5073-10.6731,33.2459-29.4291,33.3823-42.8697a72.3755,72.3755,0,0,1,41.2884,5.3026c67.4598-6.7476,57.6863-55.7646,57.6863-55.7646l-55.2192-41.8741Z"
                                style="fill:#4c3116"></path>
                            <path
                                d="M1604.824,659.0414s.3121.1527.9003.409c5.715,2.5719,37.9569,15.7229,72.2759,3.3247,0,0,42.3286,15.5459,59.807-18.6215,0,0,6.4744-18.01-1.3822-31.2349.072.5718,1.0746,8.5537-6.4543,10.4281,0,0,9.6687-28.5871-15.0399-37.0493-19.5699-6.7044-33.4859-10.8387-38.5326-16.0275a7.58229,7.58229,0,0,1-1.5398-2.1225c1.3383,6.0849,3.8653,23.0918-8.1487,29.4717,0,0,3.1731-6.0039-1.1546-15.507,0,0-16.5409,50.1424-49.6379,67.8951a36.101,36.101,0,0,0-10.6436,8.4985Z"
                                style="fill:#4c3116"></path>
                            <path
                                d="M1605.2736,658.5058l.4507.9446c5.715,2.5719,37.9569,15.7229,72.2759,3.3247,0,0,42.3286,15.5459,59.807-18.6215,0,0,6.4744-18.01-1.3822-31.2349.072.5718,1.0746,8.5537-6.4543,10.4281,0,0,9.6687-28.5871-15.0399-37.0493-19.5699-6.7044-33.4859-10.8387-38.5326-16.0275a32.03946,32.03946,0,0,0,15.6362,13.0668c16.0059,6.0632,19.8294,15.3362,19.8294,15.3362,11.5181,25.7575-25.5882,44.278-25.5882,44.278,4.16-9.305-1.4732-20.0517-1.4732-20.0517C1675.676,657.8682,1605.2736,658.5058,1605.2736,658.5058Z"
                                style="fill:#35200d"></path>
                            <ellipse cx="1480.771" cy="760.672" rx="44.355" ry="71.77" style="fill:#4c3116"
                                transform="rotate(-35.153 1480.771 760.672)"></ellipse>
                            <path
                                d="M1520.9535,767.87s-4.2052-18.4356-28.2703-9.1579c-29.8282,11.4995,2.0682,86.493,49.8426,72.5156s-3.4356-23.0519-3.4356-23.0519Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M1461.5196,600.3011c12.8405,26.0354,53.6654,32.1281,91.1914,13.6171a106.92729,106.92729,0,0,0,11.3138-6.4475c13.3446,8.1653,30.8879,13.1272,50.0939,13.1272,41.8337,0,75.7611-23.5275,75.7611-52.5479,0-29.0338-33.9274-52.5612-75.7611-52.5612a105.19769,105.19769,0,0,0-28.5024,3.844c-18.3746-13.5901-49.9167-14.2443-79.4143.3138C1468.6759,538.1573,1448.6657,574.2658,1461.5196,600.3011Z"
                                style="fill:#4c3116"></path>
                            <path
                                d="M1541.8356,585.8856s-66.0043,31.6396-60.2976,72.3c2.2978,16.3716,6.3856,24.8149,8.6365,35.2778,5.8003,26.9616,9.0795,42.4924,9.9186,57.2785,0,0,.9237-28.8595-13.1006-87.4788C1477.3584,622.9944,1541.8356,585.8856,1541.8356,585.8856Z"
                                style="fill:#35200d"></path>
                            <path
                                d="M1524.0203,585.8856s-70.0391,14.1446-71.0451,48.8065c-.405,13.9564,2.24,21.6826,2.7503,30.7445,1.3152,23.3511,2.0119,36.7909.4308,49.1706,0,0,5.6042-23.6962,1.3551-74.7232C1454.5926,604.8309,1524.0203,585.8856,1524.0203,585.8856Z"
                                style="fill:#35200d"></path>
                            <path
                                d="M1519.9394,811.4547a2.51172,2.51172,0,0,0,1.0482-1.5886l3.0811-14.7913-21.8472-6.4002a2.49576,2.49576,0,0,0-3.2057,1.8962,3.00553,3.00553,0,0,0,2.0759,3.4421l16.5796,4.8571-1.9681,9.4657a3.00066,3.00066,0,0,0,2.0846,3.4363A2.53912,2.53912,0,0,0,1519.9394,811.4547Z"
                                style="fill:#ff806d"></path>
                            <path
                                d="M1636.7724,934.0804l20.5259,29.688,58.4489,44.5719s-3.1,35.7419-81.0394,39.3647l-10.5824-87.6825Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M1874.6065,1712.5118c-22.8781,28.5456-77.2284,38.5955-111.0245,51.5404-27.7353,10.6235-84.9096,13.0153-114.6026,12.3581-148.866-3.2951-276.4675-27.1971-276.4675-27.1971l23.2012-354.1898-31.0653-361.1171c40.3887-37.4918,135.704-86.7084,135.704-86.7084l167.4567,83.4391c8.5794-16.401,10.7724-34.733,13.6281-49.0509,19.0083,14.6216,34.3054,26.7599,34.3054,26.7599l-12.1114-52.209,105.2748,50.8296,19.7283,207.0088q1.65165,11.8686,2.5368,23.8249Z"
                                style="fill:url(#bd3bc734-9b9a-4024-b598-059154f2efab)"></path>
                            <path
                                d="M1513.146,881.8938l105.3843,69.1093a12.58986,12.58986,0,0,1,5.5951,9.0194l10.5824,87.6825s-92.6108-21.3152-145.8048-93.0465Z"
                                style="fill:url(#b70048c5-bcb6-407a-8b6b-4a5e1ef17551)"></path>
                            <path
                                d="M1926.4573,1422.9239l-36.6089,44.6365a7.15812,7.15812,0,0,1-8.5659,1.9728l-16.0137-7.3933a7.19193,7.19193,0,0,1-3.8081-8.7868l2.1108-6.3177-45.5613,16.401a19.1861,19.1861,0,0,1-12.3996.1927l-48.8354-23.5008a17.092,17.092,0,0,0-13.5529-.549l-141.1674,54.3551,15.642-110.3505,123.4546-11.7247,135.8555-56.6099a17.00146,17.00146,0,0,1,22.291,9.8625l29.9732,80.9699A17.15483,17.15483,0,0,1,1926.4573,1422.9239Z"
                                style="fill:#fbbd9d"></path>
                            <path
                                d="M1634.3448,1369.4444l7.4272-.7524a16.45607,16.45607,0,0,1,17.9934,14.377l7.3534,88.3135a16.4562,16.4562,0,0,1-12.9726,18.1043l-11.989,2.5022Z"
                                style="fill:url(#a0e77c31-86a0-4bec-989c-84b80a21fceb)"></path>
                            <path
                                d="M1613.09,1524.5427c-69.6729,24.3736-230.329,69.3968-324.3889,6.1385l-17.3393-24.8564c-24.4563-35.0779-34.4427-57.5757-19.8077-120.3928l78.7763-271.1722a101.20049,101.20049,0,0,1,7.297-18.2492l27.8085-62.0997s13.7109,28.5945,34.4151,52.0851l.0418.0552a485.19415,485.19415,0,0,1,44.7881,58.8722c10.3454,16.2488,19.6427,33.6157,26.3881,51.3409a87.9121,87.9121,0,0,1,5.4899,38.1808l-6.0833,76.4175,65.8243,15.9323c.5099.1239.8547.2068,1.0063.2344l.097.0276,65.2579,15.7935a47.22187,47.22187,0,0,1,36.0161,42.8026l5.9998,91.1906A47.25456,47.25456,0,0,1,1613.09,1524.5427Z"
                                style="fill:url(#b063879c-f66b-47f8-a51b-43c3e8d298c4)"></path>
                            <path
                                d="M1536.2999,1326.7949c-5.8623-1.3659-33.7813-7.6418-51.3684-7.559-19.739.0963-21.8357,26.415-37.4642,41.0366-15.4352,14.4693,4.6621-36.3192,5.1174-37.4777-55.5335,69.0654-69.6587,52.2784-69.6587,52.2784,12.704-39.5332,64.5413-61.0517,64.5413-61.0517s18.3872-42.8571,9.1869-97.7293c-8.9795-53.5884-54.596-126.7784-56.7203-130.1716l44.747,58.8028c10.3454,16.2488,19.6427,33.6157,26.3881,51.3409a87.9121,87.9121,0,0,1,5.4899,38.1808l-6.0833,76.4175Z"
                                style="mix-blend-mode:multiply;fill:#cecece;opacity:.58"></path>
                            <ellipse cx="1706.558" cy="1383.243" rx="36.42" ry="12.44" style="fill:#315fc4"
                                transform="rotate(-2.974 1706.556 1383.241)"></ellipse>
                            <polygon
                                points="1673.239 1382.139 1670.242 1385.132 1669.895 1375.622 1672.892 1375.466 1673.239 1382.139"
                                style="fill:#315fc4"></polygon>
                            <polygon
                                points="1742.984 1381.354 1739.988 1378.671 1739.641 1371.999 1742.638 1371.843 1742.984 1381.354"
                                style="fill:#315fc4"></polygon>
                            <path
                                d="M1742.6724,1372.5077c.3564,6.861-15.6387,13.2688-35.726,14.3123s-36.6602-3.6727-37.0166-10.5338,15.6387-13.2689,35.726-14.3123S1742.316,1365.6466,1742.6724,1372.5077Z"
                                style="fill:#6485e2"></path>
                            <path
                                d="M1738.3323,1372.3348c.306,5.8426-13.8014,11.3164-31.5011,12.2347-17.6993.9183-32.3021-3.0609-32.5993-8.9039-.3059-5.8339,13.8014-11.3077,31.5012-12.226C1723.4323,1362.5125,1738.0259,1366.5009,1738.3323,1372.3348Z"
                                style="fill:#dee8ff"></path>
                            <g style="mask:url(#be7ba3ba-6720-4507-a265-0877eeb5e845)">
                                <path
                                    d="M1911.8234,975.8874l-7.1122,18.0958-166.3789,378.3516c.306,5.8426-13.8014,11.3164-31.5011,12.2347-17.6993.9183-32.3021-3.0609-32.5993-8.9039l-229.4745-372.433s180.2296-122.6372,438.6081-38.9408C1894.1584,967.7879,1903.352,972.3671,1911.8234,975.8874Z"
                                    style="opacity:.6;mix-blend-mode:screen;fill:url(#e1b00549-c0ba-46ec-9b9f-d0f91bf2e3e2)">
                                </path>
                            </g>
                            <path
                                d="M1700.9944,1392.465s16.8847.1825,29.1092-4.2013c0,0,9.0028,30.7597,5.4017,55.9676l-28.9473,11.2536A186.84763,186.84763,0,0,0,1700.9944,1392.465Z"
                                style="fill:#1c458c"></path>
                            <path
                                d="M1769.3272,1156.386v88.8983a12.42091,12.42091,0,0,1-12.4245,12.4244h-46.0343l-9.8303,26.1007-11.2259-26.1007h-46.8233a12.42083,12.42083,0,0,1-12.4244-12.4244V1156.386a12.42556,12.42556,0,0,1,12.4244-12.4244h113.9138A12.42565,12.42565,0,0,1,1769.3272,1156.386Z"
                                style="fill:#e3fcff"></path>
                            <path
                                d="M1744.1914,1189.5174v.2193a31.71826,31.71826,0,0,1-10.711,23.7663l-32.9637,28.4708-.0471.0391-.0548-.0391-32.9637-28.4708a31.73745,31.73745,0,0,1-10.703-23.7663v-.2193s.3136-18.8109,20.1907-18.8109c19.8767,0,23.5308,18.8109,23.5308,18.8109s3.646-18.8109,23.5231-18.8109C1743.8778,1170.7065,1744.1914,1189.5174,1744.1914,1189.5174Z"
                                style="fill:url(#ac9d4a66-8e99-4d44-b628-4b1172810c16)"></path>
                            <path
                                d="M3245.6465,584.124h579.9578a38.1785,38.1785,0,0,1,38.1785,38.1785V892.5802a38.1785,38.1785,0,0,1-38.1785,38.1785H3245.6479a38.1811,38.1811,0,0,1-38.1811-38.1811V622.3037a38.1797,38.1797,0,0,1,38.1797-38.1797Z"
                                style="mix-blend-mode:multiply;fill:#98bdf9;opacity:.37"></path>
                            <path
                                d="M3237.5439,575.1212h579.9566a38.1797,38.1797,0,0,1,38.1797,38.1797V883.5773a38.1786,38.1786,0,0,1-38.1786,38.1786H3237.5453a38.1811,38.1811,0,0,1-38.1811-38.1811V613.3009a38.1797,38.1797,0,0,1,38.1797-38.1797Z"
                                style="fill:url(#a11d26d4-c89d-40de-9621-c5f3d3242393)"></path>
                            <path
                                d="M3459.9937,664.8754c-45.9097-7.8138-70.6273,40.047-70.6273,40.047s-24.7201-47.8608-70.6299-40.047c-45.9071,7.8138-59.1517,53.7232-46.7904,85.9566,12.3588,32.2345,117.4203,117.2156,117.4203,117.2156s105.0589-84.9811,117.4177-117.2156C3519.1454,718.5986,3505.9008,672.6892,3459.9937,664.8754Z"
                                style="fill:#fff"></path>
                            <polygon
                                points="3413.613 790.731 3417.892 754.775 3380.324 754.775 3380.324 734.696 3360.744 790.532 3360.744 751.36 3340.854 751.36 3328.106 788.547 3318.53 731.767 3304.067 760.565 3302.123 759.588 3319.567 724.849 3328.825 779.739 3339.3 749.184 3362.919 749.184 3362.919 777.754 3382.497 721.919 3382.497 752.6 3420.34 752.6 3417.37 777.555 3442.682 723.413 3442.682 751.693 3465.344 751.693 3465.344 767.061 3474.676 745.283 3476.677 746.139 3463.168 777.658 3463.168 753.869 3440.508 753.869 3440.508 733.202 3413.613 790.731"
                                style="fill:#e22d2d"></polygon>
                            <path
                                d="M3777.0093 696.8268H3564.4587a10.5014 10.5014 0 0 1-10.47-10.4714h0a10.50087 10.50087 0 0 1 10.47-10.4698h212.5506a10.50089 10.50089 0 0 1 10.4701 10.4698h0A10.50142 10.50142 0 0 1 3777.0093 696.8268ZM3777.0093 740.1811H3564.4587a10.50009 10.50009 0 0 1-10.47-10.4698h0a10.50224 10.50224 0 0 1 10.47-10.4714h212.5506a10.50226 10.50226 0 0 1 10.4701 10.4714h0A10.50011 10.50011 0 0 1 3777.0093 740.1811ZM3777.0093 788.374H3564.4587a10.5014 10.5014 0 0 1-10.47-10.4714h0a10.50009 10.50009 0 0 1 10.47-10.4698h212.5506a10.50011 10.50011 0 0 1 10.4701 10.4698h0A10.50142 10.50142 0 0 1 3777.0093 788.374ZM3777.0093 836.5654H3564.4587a10.501 10.501 0 0 1-10.47-10.4701h0a10.50114 10.50114 0 0 1 10.47-10.4711h212.5506a10.50116 10.50116 0 0 1 10.4701 10.4711h0A10.501 10.501 0 0 1 3777.0093 836.5654Z"
                                style="fill:#fff"></path>
                            <g style="clip-path:url(#fbb11107-8816-4207-a645-fddf306bd4cc)">
                                <g style="mix-blend-mode:multiply;opacity:.62">
                                    <path
                                        d="M2744.0966 812.0931q-.6237 1.5066-1.1785 3.0943C2743.141 814.5649 2743.5326 813.5081 2744.0966 812.0931ZM2742.9181 815.1874c-.1534.4286-.2312.6602-.2312.6602C2742.7616 815.6247 2742.8416 815.4076 2742.9181 815.1874Z"
                                        style="fill:#98bdf9"></path>
                                    <path
                                        d="M3538.4153,1093.2547c1.9175-3.0517,55.6734-70.1589,50.2356-76.4248-3.6917-4.2407-11.4874-1.8366-16.4029.324a1.47443,1.47443,0,0,1-1.8463-2.107l7.1847-12.1987a1.41107,1.41107,0,0,0,.189-.4861,3.62,3.62,0,0,0-3.5738-4.2944c-10.9301.5042-30.1508,17.8347-40.2614,27.729a1.46811,1.46811,0,0,1-2.3316-1.7197l8.6793-17.1775a1.29144,1.29144,0,0,0-1.135-1.8546c-26.2428-1.2515-99.0576,83.1773-113.9668,100.7689a1.469,1.469,0,0,1-2.5655-.6752c-3.3945-17.9428-13.6396-65.2257-28.0442-64.0283-17.2399,1.4586-25.6756,147.3134-26.1355,155.5421a1.38939,1.38939,0,0,1-.2154.6752l-28.6385,46.8688a1.468,1.468,0,0,1-1.5306.6753c-10.5327-1.9716-16.97-2.5119-16.97-2.5119l-38.9013,64.5233a1.46462,1.46462,0,0,1-2.6199-.2338q-1.36365-3.48435-2.7097-6.9592c-8.0217-20.6169-15.8455-40.5581-22.8763-59.3739a206.27913,206.27913,0,0,0-39.9005-65.8197,1.45272,1.45272,0,0,1,.1978-2.1337,43.52507,43.52507,0,0,0,8.4987-8.2736c14.7201-19.1042,12.1538-52.5317-48.0391-101.165-117.0909-94.6019-80.5661-115.3713-96.8794-198.0893-16.2772-82.5743-60.9762-153.9758-131.2885-143.3342a1.36,1.36,0,0,1-.6572-.0541c-35.282-11.5058-63.3799-8.7957-83.4384-2.5118v-.036c-80.1433,2.4129-114.0838,75.6599-121.079,93.1974a67.02726,67.02726,0,0,1,10.8575-17.5556,1.46644,1.46644,0,0,1,2.4845,1.4674c-18.0056,50.299-.0989,73.2109,3.3673,77.0191a1.44829,1.44829,0,0,0,1.3144.4594q.60735-.10815,1.215-.2163a1.4537,1.4537,0,0,1,1.7289,1.4498c-.0272,4.3933.0449,8.8947.2792,13.3152a1.38861,1.38861,0,0,1-.018.3328c-4.3217,23.7045-11.8932,54.9806-24.7222,83.5374-7.0942,15.7642-14.9444,31.4919-26.4503,43.0699-67.5481,67.9442-66.999,153.9485,14.0626,149.2849a253.24217,253.24217,0,0,1,48.7955,1.4674,1.46174,1.46174,0,0,1,1.1614,1.9808c-11.9828,30.9516-52.1356,136.375-81.8722,234.8299a1.45694,1.45694,0,0,1-.9992.9812l-16.4302,4.7089a22.48483,22.48483,0,0,0-16.2952,21.6156v12.9011a1.45823,1.45823,0,0,1-1.4761,1.4674c-10.4074-.1442-73.4901-1.2516-125.5989-6.95l-33.4274-4.6997c-2.3857-.4413-4.7085-.8914-6.9412-1.3596,0,0-.0989.1174-.2703.3424l-83.1409-11.7037a1.44217,1.44217,0,0,1-1.0264-.6484l-32.8784-50.677a1.4948,1.4948,0,0,0-.4229-.4321l-54.4224-35.7863a1.4683,1.4683,0,0,0-2.2058.7741l-5.0325,15.4403a1.4688,1.4688,0,0,0,.342,1.4761l23.9569,24.6769a1.56613,1.56613,0,0,1,.3868.7561l.4322,2.3321a1.46984,1.46984,0,0,1-1.5575,1.7284l-37.9829-2.7729a1.21864,1.21864,0,0,1-.3513-.0721l-36.9116-12.0277a1.01928,1.01928,0,0,1-.2431-.1081l-45.2573-24.3525a1.42268,1.42268,0,0,0-1.1161-.1169c-2.1338.6659-9.0569,3.6547-8.1118,14.026a1.47716,1.47716,0,0,0,.5763,1.0265l4.9515,3.7901a1.46656,1.46656,0,0,1-1.5847,2.4578l-18.3024-9.8579a1.484,1.484,0,0,0-1.1253-.1081c-2.1246.666-9.0569,3.6552-8.1118,14.0172a1.49294,1.49294,0,0,0,.5763,1.0265l10.7854,8.2555-5.0417-2.7188a1.46279,1.46279,0,0,0-1.1161-.1082c-2.1338.6664-9.0569,3.6552-8.1118,14.0177a1.45929,1.45929,0,0,0,.5763,1.026l15.9528,12.2079a1.46685,1.46685,0,0,1-.0717,2.3769c-2.62,1.8366-5.5366,5.4738-4.8975,12.4237a1.45942,1.45942,0,0,0,.5759,1.0265l45.7703,35.0122a1.60886,1.60886,0,0,0,.4413.2338l60.0399,19.5724a1.27842,1.27842,0,0,0,.1802.0448l89.191,17.3037.4594-.6572,68.2506,21.7686a1.45883,1.45883,0,0,1,.9719,1.7465c-6.6708,26.9817-10.8663,60.7516-8.2195,101.1202a1.46882,1.46882,0,0,0,2.7101.6932c4.7801-7.5895,15.8539-26.9725,25.2616-56.8348a247.73931,247.73931,0,0,1-8.6604,25.9908c-4.8707,12.1631-10.7493,23.4167-17.8167,32.9145a1.46962,1.46962,0,0,0,.648,2.2599c20.5536,7.7333,208.1098,76.9202,273.5153,49.5337q8.3862-3.51135,15.6381-7.2023a1.46612,1.46612,0,0,1,2.1337,1.233c.8463,16.8087,1.4314,27.4227,1.4854,28.3502v.1442l-27.0538,587.6331a1.43314,1.43314,0,0,0,.5763,1.2335c4.1775,3.1422,29.5476,21.0758,73.8053,28.5299a1.45365,1.45365,0,0,1,1.2247,1.3957q.17535,5.496.3868,11.0193c1.3056,33.6077,14.5576,168.5874,27.9,299.0112h123.6269c3.3673-62.1196,6.3288-118.4502,7.7065-148.997,3.1329-68.8177-23.5964-127.8944-38.1271-154.5965a46.98786,46.98786,0,0,1-4.3753-33.7879c1.7645-7.0313,3.7721-15.0437,5.5367-22.1379a1.45558,1.45558,0,0,1,1.4225-1.1073h20.5355a1.47019,1.47019,0,0,1,1.4493,1.2515l13.1891,87.8586a55.03161,55.03161,0,0,0,4.1867,14.2964l115.29,257.2201h133.5664c-8.0577-69.5918-24.8031-151.5176-59.5181-202.9868-27.8995-41.359-46.5624-71.4556-58.9233-92.6932a83.23642,83.23642,0,0,1-8.4986-20.5175,1.47831,1.47831,0,0,1,1.2062-1.8278c76.4969-11.5327,141.3085-31.411,173.1877-49.7675,11.0558-6.3561,18.1499-10.8575,20.391-12.3068a1.45627,1.45627,0,0,0,.6576-1.4045c-16.1603-136.4111-33.5892-298.9484-46.275-420.3605-6.1754-59.2117-11.2351-108.6465-14.4762-140.4984a1.4638,1.4638,0,0,1,1.1434-1.5667c236.1355-53.3146,254.0691-362.7063,254.0691-362.7063h.0088a200.461,200.461,0,0,0-41.3225-32.5092,1.482,1.482,0,0,1-.6304-1.7465l13.5403-38.3521a1.41322,1.41322,0,0,1,.2787-.4774l12.262-13.8463a1.50115,1.50115,0,0,1,.5407-.3781,443.95658,443.95658,0,0,0,48.5608-23.6777c4.1058-2.3676,9.8135-7.9944,16.4575-15.8266,31.7526-37.4611,65.1712-114.4895,69.1504-123.7891a1.46151,1.46151,0,0,0-.3868-1.6836C3574.9216,1048.5465,3539.8378,1091.5174,3538.4153,1093.2547Z"
                                        style="mix-blend-mode:multiply;fill:#98bdf9;opacity:.37"></path>
                                </g>
                                <path
                                    d="M3217.5089 2617.7775H3087.868l-113.6248-253.5196a177.319 177.319 0 0 1-13.5496-46.2209l-26.5315-176.7076 180.3539 53.9722.8106.2339-17.7806 31.1319a83.99486 83.99486 0 0 0 .2427 83.8165c12.3613 21.2376 31.0242 51.3342 58.9149 92.6932C3193.381 2457.5449 3209.9914 2545.8809 3217.5089 2617.7775ZM2963.5567 2457.1669c-1.4674 32.4375-4.7085 93.9535-8.3369 160.6106H2833.4116c-13.7293-133.9261-27.7466-276.018-29.0882-310.6248-2.4846-63.7131-.324-126.9493-.324-126.9493l83.114 31.2493 44.0691 16.5651c-.9455 3.988-6.1402 24.902-10.1282 40.7647a47.03008 47.03008 0 0 0 4.366 33.7879C2939.9603 2329.2725 2966.6897 2388.3492 2963.5567 2457.1669Z"
                                    style="fill:#fbbd9d"></path>
                                <path
                                    d="M2963.5567,2457.1669c-1.4674,32.4375-4.7085,93.9535-8.3369,160.6106h-40.8996c-2.1338-121.8083-11.956-238.548-30.8347-271.9034-42.0342-74.1657-12.3789-121.1603-12.3789-121.1603l16.0068-13.2611,44.0691,16.5651c-.9455,3.988-6.1402,24.902-10.1282,40.7647a47.03008,47.03008,0,0,0,4.366,33.7879C2939.9603,2329.2725,2966.6897,2388.3492,2963.5567,2457.1669Z"
                                    style="fill:#f9b393"></path>
                                <path
                                    d="M2503.5685,1420.3963s-52.0936,63.2564-42.7912,184.1878C2460.7773,1604.5841,2509.1499,1537.6067,2503.5685,1420.3963Z"
                                    style="fill:#9ad8d8"></path>
                                <polygon
                                    points="2578.589 1431.337 2418.73 1408.841 2397.197 1474.9 2601.711 1540.133 2628.374 1490.553 2578.589 1431.337"
                                    style="fill:#fbbd9d"></polygon>
                                <polygon
                                    points="2437.985 1425.032 2420.465 1410.454 2386.084 1357.453 2329.792 1320.437 2323.888 1338.548 2348.77 1364.185 2361.474 1432.952 2431.731 1455.854 2437.985 1425.032"
                                    style="fill:#fbbd9d"></polygon>
                                <polygon
                                    points="2366.82 1370.069 2287.282 1364.269 2309.724 1458.958 2399.006 1476.285 2424.471 1439.436 2366.82 1370.069"
                                    style="fill:#fbbd9d"></polygon>
                                <path
                                    d="M2324.4458,1378.647l-12.4112-11.948-39.6836-12.9357-45.8835-24.6991s-10.1742,2.0358-8.6474,14.826l46.4804,35.5505,60.3704,19.6789Z"
                                    style="fill:#fbbd9d"></path>
                                <path
                                    d="M2300.8517,1389.978l-12.4111-11.948-39.6837-12.9356-45.8835-24.6991s-10.1742,2.0357-8.6474,14.826l46.4805,35.5504,60.3704,19.679Z"
                                    style="fill:#fbbd9d"></path>
                                <path
                                    d="M2297.9412,1410.4505l-12.4111-11.948-39.6837-12.9357-45.8835-24.699s-10.1742,2.0357-8.6474,14.8259l46.4805,35.5505,60.3703,19.6789Z"
                                    style="fill:#fbbd9d"></path>
                                <path
                                    d="M2309.4985,1438.4853l-1.709-37.0838-50.3857,12.2001-45.8835-24.699s-10.1742,2.0357-8.6474,14.8259l46.4804,35.5505,60.3704,19.679Z"
                                    style="fill:#fbbd9d"></path>
                                <path
                                    d="M2815.441,1586.1187s-10.0741,39.712-79.3122,68.6985-275.3515-50.2331-275.3515-50.2331c7.6-9.8234,13.8605-21.6372,19.005-34.4748,25.0698-62.605,23.7862-149.713,23.7862-149.713,56.0933,11.8606,167.4434,13.0325,167.4434,13.0325v-14.3906a22.47672,22.47672,0,0,1,16.2883-21.6095l17.2004-4.9306c35.3492-117.2104,85.6195-244.6162,85.6195-244.6162l4.3069,45.6658Z"
                                    style="fill:#cbf1f4"></path>
                                <path
                                    d="M2815.441,1586.1187s-10.0741,39.712-79.3122,68.6985-275.3515-50.2331-275.3515-50.2331c7.6-9.8234,13.8605-21.6372,19.005-34.4748,70.3818,4.4559,209.5088,4.7721,248.5044-57.6191,52.8939-84.6056,52.838-335.0173,52.838-335.0173l13.3023,16.0748Z"
                                    style="fill:#b5e7e8"></path>
                                <path
                                    d="M2909.2858,1178.2871c-63.6741,18.2765-66.7507-30.9144-172.6402-24.8281-81.0621,4.6588-81.6097-81.3434-14.0599-149.2912,11.5058-11.5736,19.354-27.3004,26.446-43.0687,25.0283-55.6661,30.0131-121.7245,30.0131-121.7245l118.4638,144.726,19.0581,23.2852S2995.7255,1153.4683,2909.2858,1178.2871Z"
                                    style="fill:#1d3151"></path>
                                <g style="mask:url(#a8bcaf18-ace7-470b-8f4b-bb8b6ee518e7)">
                                    <path
                                        d="M2836.2055,1134.4136s9.2822-58.9636-55.2926-98.9572c-27.668-17.1299-33.8511-46.4457-31.8812-74.3573,25.0283-55.6661,30.0131-121.7245,30.0131-121.7245l118.4638,144.726,29.4818,126.3024Z"
                                        style="mix-blend-mode:multiply;opacity:.6;fill:url(#e8596644-04de-4f74-8d03-fadb7c9bf0c0)">
                                    </path>
                                </g>
                                <g style="mask:url(#eb0fdee6-5378-441c-85ad-bbb3e8df8d51)">
                                    <path
                                        d="M2725.9142,1018.6391s-25.0026,38.3278,22.163,62.4728,94.6784,32.7725,69.1692,76.3239c0,0,24.3002-34.1846-50.9816-49.8893C2679.6973,1089.4874,2725.9142,1018.6391,2725.9142,1018.6391Z"
                                        style="mix-blend-mode:multiply;opacity:.6;fill:url(#bc07d1c1-c26d-4fcf-a0cd-404535e25f97)">
                                    </path>
                                </g>
                                <path
                                    d="M2875.1081,1001.8663s31.9625,62.1601,40.5904,111.5744c0,0,77.1609,1.8097,102.4378-72.7039l-42.2657-108.4627Z"
                                    style="fill:#ffba94"></path>
                                <rect width="145.926" height="781.331" x="2764.545" y="1390.71" style="fill:#b8f1f2">
                                </rect>
                                <polygon
                                    points="2845.868 1642.619 2809.839 2245.535 3030.598 2245.535 2963.651 1642.619 2845.868 1642.619 2845.868 1642.619"
                                    style="fill:#06378e"></polygon>
                                <path
                                    d="M3006.7415,1043.7643l31.0306,3.5296s-60.0159,184.7153-63.539,269.4256-10.5824,325.8991-10.5824,325.8991H2845.8675s-41.0485-321.193-41.0485-344.7236,100.4532-217.574,100.4532-217.574Z"
                                    style="fill:url(#bc34e709-642b-43e2-869a-df59cbb1125f)"></path>
                                <path
                                    d="M2728.2895,2265.7373s40.0021,32.2488,114.1236,32.2488c0,0-23.1779-509.4186-21.2597-789.4799.494-71.2507,2.6-125.6417,7.1413-149.9842,22.3541-120.0062,76.9806-284.7205,76.9806-284.7205s-7.9301,3.8942-19.754,10.0121v.0118c-18.5068,9.5536-46.5321,24.5779-68.6271,38.6845a79.52674,79.52674,0,0,0-35.7665,54.9675c-8.2121,53.2851-26.0135,160.2435-32.1196,192.4804-8.2357,43.5317,6.374,307.3082,6.374,307.3082Z"
                                    style="fill:#e3fcff"></path>
                                <path
                                    d="M2894.9369,1072.9977c-7.7978,1.5346-15.4321,6.5814-21.6694,11.2081-19.2991,14.3157-33.6453,34.6484-44.8812,55.6282-10.9471,20.4408-19.199,42.2492-25.9418,64.4005-1.0146,3.3329,4.1976,4.7577,5.2087,1.436,10.1902-33.4764,23.8539-67.3805,46.0653-94.8467,9.8486-12.1785,21.7274-23.6959,36.1292-30.3075a30.367,30.367,0,0,1,6.5252-2.3099c3.4077-.6707,1.9651-5.8781-1.436-5.2087Z"
                                    style="fill:#3870e0"></path>
                                <path
                                    d="M2733.7131,1337.5162a411.78653,411.78653,0,0,1,10.0427-43.0838c6.7943-23.9033,15.0955-49.9732,31.0334-69.5264,5.8225-7.1432,13.5847-14.1452,23.1757-15.0631,8.0634-.7718,13.6766,3.9981,16.9621,11.0024,4.1792,8.9098,5.0911,19.3746,5.4824,29.0724a259.40408,259.40408,0,0,1-1.4486,36.3331,428.52145,428.52145,0,0,1-7.8453,49.8294c-.751,3.3871,4.4554,4.8337,5.2088,1.436a445.68531,445.68531,0,0,0,7.3352-44.7944,294.12283,294.12283,0,0,0,2.2787-37.9921c-.1472-10.8978-.8927-22.39-4.7112-32.7014-2.8245-7.6274-7.8241-15.0346-16.1781-17.0758-9.3745-2.2907-18.932,2.0305-26.0421,7.9127-9.2112,7.6203-15.7985,18.3206-21.1793,28.8466a256.07655,256.07655,0,0,0-15.368,38.3343,409.49132,409.49132,0,0,0-13.9551,56.0341c-.5809,3.4001,4.6236,4.861,5.2087,1.436Z"
                                    style="fill:#3870e0"></path>
                                <circle cx="2731.109" cy="1336.798" r="10.398" style="fill:#06378e"></circle>
                                <circle cx="2813.72" cy="1336.798" r="10.398" style="fill:#06378e"></circle>
                                <path
                                    d="M2821.1534,1508.5062c.494-71.2507,2.6-125.6417,7.1413-149.9842,22.3541-120.0062,76.9806-284.7205,76.9806-284.7205s-7.9301,3.8942-19.754,10.0121v.0118c-.953,1.3884-68.4858,100.4406-68.7334,107.4527-.2585,7.0592,5.8947,114.6058,5.8947,114.6058s-31.0603,61.3798-36.8487,86.9222C2781.3392,1412.6658,2808.7406,1479.6694,2821.1534,1508.5062Z"
                                    style="fill:#b8f1f2"></path>
                                <path
                                    d="M3006.7415,995.5265s-50.225,37.1747-116.6212,48.2378l16.2646,61.1816a24.62622,24.62622,0,0,0,26.1024,20.9685c33.8615-2.4405,94.3823-15.7214,105.2848-78.6205Z"
                                    style="fill:url(#ec902f62-c192-4964-b2f0-2e39558bc632)"></path>
                                <path
                                    d="M3354.2561,1551.1697s-40.0657,35.0512-134.1873,73.8797c0,0,1.1437,11.4791,3.2086,31.7959q.2793,2.6925.5678,5.5905c3.2277,31.7958,8.344,81.7963,14.614,141.8618,12.7073,121.685,30.1866,284.6726,46.3822,421.2691,0,0-7.6,5.005-21.163,12.8003-47.9819,27.6375-170.5785,58.7074-295.324,59.6191,0,0-1.4698,0-3.6469-52.4469-5.3857-129.592-15.1164-385.7432-17.7581-602.9174-.586-47.9914-.8276-94.0847-.5951-136.4852.5673-102.6055,3.8695-183.5833,11.6744-217.6579a1400.13272,1400.13272,0,0,1,63.4236-202.6718q1.8423-4.646,3.5351-8.7628c7.7118-18.8374,12.6605-29.4979,12.7813-29.7491v-.0091l29.1541,16.0467,103.9822,57.2284c.7913.437,1.5907.8835,2.3719,1.33a203.86851,203.86851,0,0,1,20.5589,13.34,206.84923,206.84923,0,0,1,71.2752,94.2796c7.0323,18.8187,14.8557,38.7631,22.8836,59.3774C3321.4279,1374.8794,3358.1815,1472.741,3354.2561,1551.1697Z"
                                    style="fill:#e3fcff"></path>
                                <path
                                    d="M2946.3555 1506.1359c34.5433-25.8014 53.9205-92.6284 53.9205-92.6284l-24.8715-95.6166s108.2524-114.3 111.5234-120.1827c2.5881-4.6708-13.3072-96.558-20.001-134.3716l-29.1548-16.048s-48.2377 103.5349-79.7456 241.189C2950.2263 1322.5499 2946.9207 1403.5305 2946.3555 1506.1359ZM3203.8487 1181.369s-84.5453 78.1364-100.8749 152.0869 0 203.3187 0 203.3187S3074.0865 1316.7124 3203.8487 1181.369Z"
                                    style="fill:#b8f1f2"></path>
                                <path
                                    d="M3035.8022,1045.0963c-.6197-.4735.2944.231.8292.6964,1.1712,1.0195,2.323,2.0566,3.4426,3.133a112.566,112.566,0,0,1,10.9815,12.3074,129.26585,129.26585,0,0,1,23.2687,49.2836c6.7678,28.6894,3.0907,57.8818-4.2342,86.0873a346.07814,346.07814,0,0,1-33.1546,81.7804c-5.1694,9.239-10.7306,18.2696-16.7616,26.9724-1.6668,2.4054-3.369,4.7873-5.1273,7.1267q-.756,1.00575-1.5273,1.9996a2.15268,2.15268,0,0,1-.2232.282c-2.1653,2.6758,1.5886,6.566,3.7724,3.8674,7.7122-9.5303,14.341-20.0467,20.5511-30.5901a356.331,356.331,0,0,0,34.9215-80.048c8.6056-29.2646,13.9221-59.9773,8.732-90.3605a135.4203,135.4203,0,0,0-22.7212-55.2813c-5.6479-7.9741-12.1624-15.9224-19.9815-21.8965-2.7615-2.1098-5.4997,2.5531-2.7681,4.6402Z"
                                    style="fill:#3870e0"></path>
                                <circle cx="3017.965" cy="1321.078" r="26.019" style="fill:#bac7db"
                                    transform="rotate(-29.595 3017.966 1321.078)"></circle>
                                <circle cx="3014.257" cy="1320.056" r="26.019" style="fill:#d3deef"
                                    transform="rotate(-68.231 3014.257 1320.056)"></circle>
                                <circle cx="3014.257" cy="1320.056" r="16.67" style="fill:#bac7db"
                                    transform="rotate(-45 3014.257 1320.056)"></circle>
                                <path
                                    d="M2775.6907,828.948s-7.2771,58.534,4.6365,78.4773,11.9367-73.4551,11.9367-73.4551Z"
                                    style="fill:#352d29"></path>
                                <path
                                    d="M2784.1666,825.6389s-25.0866,150.9738,24.6691,192.4766a71.84458,71.84458,0,0,0,18.3091,11.0244c34.8685,14.5099,78.8075-1.5245,112.4948-47.1886,40.1789-54.4462,39.2596-145.5107,39.2596-145.5107l-85.7445-68.9239-3.6454.8712-62.665,14.7915Z"
                                    style="fill:#f9a880"></path>
                                <path
                                    d="M2784.1666,825.6389a505.99257,505.99257,0,0,0-7.842,57.1617,385.58519,385.58519,0,0,0-1.1755,45.0706c1.2395,34.0089,13.6617,73.5446,33.6866,90.2443a71.84458,71.84458,0,0,0,18.3091,11.0244c34.0579,9.8185,77.159-12.1206,108.2231-54.2406,40.1789-54.4461,68.9986-131.39,68.9986-131.39l-114.8572-75.1214-62.665,14.7915Z"
                                    style="fill:#ffba94"></path>
                                <path
                                    d="M2804.687,963.7303l35.2992,6.2843s-2.0824,15.4461-16.0391,21.7318S2804.687,963.7303,2804.687,963.7303Z"
                                    style="fill:#ff806d"></path>
                                <path
                                    d="M2837.6719,727.7414s50.354-49.5747,139.6855-9.1815c64.975,29.3798,68.4844,84.0314,68.4844,84.0314l-114.6472-57.7601Z"
                                    style="fill:#1d3151"></path>
                                <path
                                    d="M2848.7309,792.179a68.315,68.315,0,0,0,11.6348.8902s25.5124-7.7305,29.6696,6.6888,1.707,93.1923,82.0795,121.345l.02,1.7477.4665,48.4236s87.318-26.8231,82.8642-122.8294-84.15-105.4032-84.15-105.4032-39.6004-62.0201-109.6298-5.0667C2811.2873,778.9708,2832.7492,789.4885,2848.7309,792.179Z"
                                    style="fill:#1d3151"></path>
                                <path
                                    d="M2880.2586 859.4432c-2.9272-.2723-6.4326-1.4709-9.8675-2.5451-3.4456-1.1144-6.9241-2.1959-9.9665-3.0885-3.0489-.8954-6.568-1.8692-10.0768-2.7968-3.4778-.9556-7.1039-1.8522-9.6311-3.1811-2.4469-1.2663-3.0287-3.0058.6628-3.8513 3.4869-.8542 11.7231-.4779 21.8148 2.4732 10.0718 2.9698 16.9262 7.0247 19.1432 9.5537C2884.7157 858.6357 2883.0756 859.7224 2880.2586 859.4432ZM2804.298 840.7632a25.11325 25.11325 0 0 1-6.2519-.0735c-2.2152-.2009-4.4453-.3698-6.3883-.4761-1.9473-.1074-4.1863-.1849-6.4127-.2285a24.85726 24.85726 0 0 1-6.2013-.6127c-1.6407-.5112-2.2355-1.7492-.1525-3.117 1.9596-1.3351 6.9291-2.6305 13.3726-2.2852 6.4343.3637 11.1026 2.1898 12.7858 3.7254C2806.8434 839.2773 2806.0191 840.4369 2804.298 840.7632Z"
                                    style="fill:#352d29"></path>
                                <path
                                    d="M2803.748,901.0177l-10.4425,13.0092s-3.9846-7.5491,1.6923-11.9075C2798.7248,899.2581,2803.748,901.0177,2803.748,901.0177Z"
                                    style="fill:#ffba94"></path>
                                <path
                                    d="M2799.7433,938.7017c.1456.0311.2947.0576.4449.0787l5.8689.8177a1.33551,1.33551,0,0,0,1.373-1.1986c.1335-.7491-.2817-1.4831-.8855-1.5157l-5.8688-.8178a5.38383,5.38383,0,0,1-4.0436-3.4557,12.76961,12.76961,0,0,1-.7133-7.441l.1434-.8021c.381-2.1221,1.7641-3.7017,3.084-3.5192a6.67617,6.67617,0,0,0,5.7133-2.4033,13.569,13.569,0,0,0,3.31-6.9014l1.9974-11.459a1.2591,1.2591,0,0,0-.894-1.5091,1.34123,1.34123,0,0,0-1.3683,1.2078l-1.9954,11.4512a10.32526,10.32526,0,0,1-2.4973,5.2522,4.45465,4.45465,0,0,1-3.7804,1.6467c-2.5667-.355-5.1805,2.2994-5.828,5.9171l-.1434.8022a15.82681,15.82681,0,0,0,.9117,9.226A7.57233,7.57233,0,0,0,2799.7433,938.7017Z"
                                    style="fill:#ff806d"></path>
                                <ellipse cx="2895.95" cy="927.784" rx="39.507" ry="36.203" style="fill:#fca286"
                                    transform="rotate(-52.339 2895.95 927.784)"></ellipse>
                                <path
                                    d="M2844.7754,887.9136c-1.2253,5.4206,1.3355,10.58,5.7211,11.5236s8.935-2.6874,10.1607-8.1087-1.3352-10.5814-5.7207-11.5238C2850.5509,878.8612,2846.0015,882.4909,2844.7754,887.9136Z"
                                    style="fill:#352d29"></path>
                                <path
                                    d="M2858.3309 886.4656a14.62559 14.62559 0 0 0 7.4232-3.4383s-2.6876 4.3925-4.7999 6.0177S2858.3309 886.4656 2858.3309 886.4656ZM2797.262 879.7953c.0439 5.7291-2.7125 10.5626-6.1575 10.7953s-6.2736-4.2249-6.3177-9.9549 2.7124-10.5641 6.1571-10.7955C2794.3889 869.6075 2797.2179 874.0638 2797.262 879.7953Z"
                                    style="fill:#352d29"></path>
                                <path
                                    d="M2787.3191,876.0655a10.80279,10.80279,0,0,1-5.0174-4.7389s1.3079,4.9243,2.6311,6.9321S2787.3191,876.0655,2787.3191,876.0655Z"
                                    style="fill:#352d29"></path>
                                <path
                                    d="M3233.9089,1153.2899c-13.9203,18.0645-43.2892,23.3243-54.0156,16.5206-13.8851-8.8142-30.7848,10.2472-51.3061,16.9819-12.0842,3.9585-25.4285,3.6427-40.1483-9.1532a61.96673,61.96673,0,0,1-13.1357-15.4981c-17.3437-29.6523,3.3477-59.552-41.9474-84.1373-53.2296-28.8775-44.2943-122.1517-44.2943-122.1517l-8.062-62.3609-23.6354-182.7391c70.5083-10.9274,115.3213,60.5705,131.6266,143.2794,16.3133,82.719-20.2118,103.4868,96.8838,198.0917C3246.0678,1100.7522,3248.6319,1134.1846,3233.9089,1153.2899Z"
                                    style="fill:#1d3151"></path>
                                <path
                                    d="M2966.3091 893.486s53.9874-47.8518 45.2715-101.8852C3011.5806 791.6008 3009.7558 851.9759 2966.3091 893.486ZM2929.3781 860.8769s65.7548-30.5974 73.326-84.8269C3002.7041 776.05 2983.1785 833.3782 2929.3781 860.8769Z"
                                    style="fill:#2a4368"></path>
                                <g style="mask:url(#beedba19-4308-476c-93ee-de88dd0ab63b)">
                                    <path
                                        d="M2848.7309,792.179a68.315,68.315,0,0,0,11.6348.8902s25.5124-7.7305,29.6696,6.6888,1.707,93.1923,82.0795,121.345l.02,1.7477c6.8702-.3899,5.7712-2.9046-10.5367-9.1353-58.0028-22.1689-52.0718-105.2783-65.5414-130.3671s-38.2847-7.4657-38.2847-7.4657Z"
                                        style="mix-blend-mode:multiply;opacity:.6;fill:url(#a9d8dbb0-9668-4a88-858e-3d90758cf2ec)">
                                    </path>
                                </g>
                                <g style="mask:url(#bf8ba7c8-8862-4124-91a6-72a37cf8f251)">
                                    <path
                                        d="M3233.9089,1153.2899c-13.9203,18.0645-43.2892,23.3243-54.0156,16.5206-13.8851-8.8142-30.7848,10.2472-51.3061,16.9819-12.5711-.7701-21.0572-1.9694-21.0572-1.9694l-32.2268-22.6819c-17.3437-29.6523,3.3477-59.552-41.9474-84.1373-53.2296-28.8775-44.2943-122.1517-44.2943-122.1517h.0001a119.17357,119.17357,0,0,0,35.9822-56.9732l13.0216-45.8562s-48.3537,162.3816,57.9557,215.0812C3193.1439,1116.2466,3243.946,1124.3577,3233.9089,1153.2899Z"
                                        style="mix-blend-mode:multiply;opacity:.6;fill:url(#bd16f8e2-beef-47c7-8b1e-b0a80c24f41d)">
                                    </path>
                                </g>
                                <path
                                    d="M2974.3224,903.5298s20.1364-22.5213,41.0125-4.1272,3.0947,58.1798-23.6507,69.5292-37.8283-16.9004-37.8283-16.9004Z"
                                    style="fill:#ffba94"></path>
                                <path
                                    d="M2984.6543,949.9148a3.25748,3.25748,0,0,1-1.7841-1.7084l-8.0438-17.7316,26.2543-14.0085a3.30081,3.30081,0,0,1,4.6366,1.5048,3.83,3.83,0,0,1-1.7107,4.8898l-19.924,10.631,5.1429,11.3484a3.824,3.824,0,0,1-1.7235,4.8847A3.39577,3.39577,0,0,1,2984.6543,949.9148Z"
                                    style="fill:#ff806d"></path>
                                <path
                                    d="M2882.437,773.1202s-18.9327-34.2124-25.4139,5.2607-15.6002,73.0619-52.5478,82.177c0,0,11.6867-7.3933,11.9568-15.805,0,0-26.2062,14.8936-46.6383,18.0505,0,0-25.6817-23.9632-1.3621-84.3255a66.22762,66.22762,0,0,0-17.3106,26.5664s31.4268-94.2082,122.4848-96.9487Z"
                                    style="fill:#1d3151"></path>
                                <path
                                    d="M2861.6857 737.975s-54.0151 16.9684-76.4406 102.0101C2785.2451 839.9851 2822.6867 752.4188 2861.6857 737.975ZM2848.1378 729.0366s-48.3832 12.9483-65.7442 70.9568C2782.3936 799.9934 2809.1389 743.4804 2848.1378 729.0366Z"
                                    style="fill:#2a4368"></path>
                                <path
                                    d="M2948.2069,1129.6702q-.11955.06075-.2397.1217s79.8809-5.2193,42.063-97.6562-19.1012-120.3882-19.1012-120.3882l-16.3087-18.7984s-1.822,3.9025-4.4301,10.603c-10.6916,27.5262-34.6416,102.2926-.4772,148.1364,38.7608,52.007,5.3421,74.1311-.8108,77.6066-.1365.0795-.2623.1467-.3989.2145C2948.3896,1129.576,2948.2871,1129.6297,2948.2069,1129.6702Z"
                                    style="fill:#1d3151"></path>
                                <g style="mask:url(#a389795f-a1e5-4e9a-806b-1efa64e30c0d)">
                                    <path
                                        d="M2948.9022,1129.2951c48.8625-25.7769,19.4957-74.7254,3.31-107.6561-16.2934-33.1359-1.3366-115.6907-1.3366-115.6907l-.6854-2.3962c-10.6916,27.5262-34.6416,102.2926-.4772,148.1364C2988.4738,1103.6955,2955.0551,1125.8196,2948.9022,1129.2951Z"
                                        style="mix-blend-mode:multiply;opacity:.6;fill:url(#abbf9e69-1e1b-4520-ac04-542866ef2d6e)">
                                    </path>
                                </g>
                                <g style="mask:url(#b31da88f-4fb4-4e1f-8a19-aa06def74fc3)">
                                    <path
                                        d="M3067.7269,852.5284s-29.693,88.3523,7.4309,121.9559,64.3968,36.2527,92.2946,96.7469c0,0-11.6523-44.814-93.2664-88.2879C2997.2203,941.9454,3067.7269,852.5284,3067.7269,852.5284Z"
                                        style="mix-blend-mode:multiply;opacity:.6;fill:url(#bd02966d-4750-410b-a29c-0c156b1fdae8)">
                                    </path>
                                </g>
                                <path
                                    d="M3332.2216,1231.5573s88.565,7.4419,146.9782,67.9687C3479.1998,1299.526,3389.8966,1324.5814,3332.2216,1231.5573Z"
                                    style="fill:#b8f1f2"></path>
                                <path
                                    d="M3528.8925,1172.7102c-6.6477,7.8348-12.356,13.4633-16.4632,15.8295a440.10963,440.10963,0,0,1-48.8698,23.8013l-12.6783,14.3125-92.2977,261.5607-65.389-160.6823,86.3626-141.3231s8.4128-154.4019,26.1575-155.8996c15.3156-1.2747,25.9293,52.2824,28.6075,67.0683.3591,2.3463.6015,3.7379.6015,3.7379s53.4068,18.7245,52.4269,70.6335C3487.3505,1171.7489,3514.704,1163.8285,3528.8925,1172.7102Z"
                                    style="fill:#ffba94"></path>
                                <path
                                    d="M3598.4288,1047.9979s-35.7142,84.8107-69.5363,124.7123c-6.6477,7.8348-12.356,13.4633-16.4632,15.8295a440.10963,440.10963,0,0,1-48.8698,23.8013l-12.6783,14.3125-48.8787-146.3137,31.656,17.8619s.2439-.2886.6636-.8242c8.2613-9.8224,88.1958-104.4582,115.9696-103.1324a1.28641,1.28641,0,0,1,1.129,1.8539l-12.8884,25.5194c1.961-2.077,31.9869-33.6729,46.8062-34.3577a3.63186,3.63186,0,0,1,3.5167,4.5548l-9.8416,16.7175s15.1487-8.9632,20.7693-2.5036c5.4827,6.3102-49.1223,74.3799-50.2676,76.478C3549.5153,1082.5074,3587.5048,1035.4455,3598.4288,1047.9979Z"
                                    style="fill:#ffba94"></path>
                                <path
                                    d="M3440.1992 1108.2754s15.6049 42.0132 6.0019 70.8223C3446.2011 1179.0977 3447.2932 1125.583 3440.1992 1108.2754ZM3479.8117 1066.5942s43.8138 30.6096 57.018 54.017Z"
                                    style="fill:#f9a880"></path>
                                <path
                                    d="M3479.1965,1299.5299s-18.1488,313.1566-258.3746,363.6594l-4.6884-239.072,116.0848-192.56s7.1258,10.9767,21.4701,24.1213c19.0236,17.4511,50.7445,38.7259,95.4151,43.3398A176.46772,176.46772,0,0,0,3479.1965,1299.5299Z"
                                    style="fill:#e3fcff"></path>
                                <path
                                    d="M3220.8219,1663.1893s-47.6696,9.3227-76.9707-11.6067C3143.8512,1651.5826,3179.1928,1692.9349,3220.8219,1663.1893Z"
                                    style="fill:#b8f1f2"></path>
                                <g style="mask:url(#b318834e-60fa-4468-9af6-39bc6bbc995a)">
                                    <circle cx="2292.924" cy="1264.017" r="130.06"
                                        style="mix-blend-mode:screen;fill:url(#e7bcf8f1-c847-472c-883d-7357c5d1fadc)">
                                    </circle>
                                </g>
                                <g style="mask:url(#abf91a7a-6ba7-46f0-b639-b7c08c2a2624)">
                                    <circle cx="2292.924" cy="1264.017" r="104.836"
                                        style="mix-blend-mode:screen;fill:url(#ad0f6765-6c3c-403c-9777-b2185fa8ead8)">
                                    </circle>
                                </g>
                                <path
                                    d="M2233.8565,1205.4325s69.3816-11.2274,119.2777,2.127c0,0,11.651,112.4116-61.9316,142.1932C2291.2026,1349.7527,2219.8704,1322.0316,2233.8565,1205.4325Z"
                                    style="fill:#fff"></path>
                                <path
                                    d="M2241.6947,1212.7233s63.5765-7.084,102.1794,1.7016c0,0,11.418,91.3306-51.7728,123.9715C2292.1013,1338.3964,2235.0036,1321.1823,2241.6947,1212.7233Z"
                                    style="fill:url(#ea4f010f-8d32-4de1-a25e-217998abb47d)"></path>
                            </g>
                            <path
                                d="M663.7552,421.4914h586.2601a49.1521,49.1521,0,0,1,49.1521,49.1521V940.977a49.1516,49.1516,0,0,1-49.1516,49.1516H663.755a49.1516,49.1516,0,0,1-49.1516-49.1516V470.6432a49.1518,49.1518,0,0,1,49.1518-49.1518Z"
                                style="mix-blend-mode:multiply;fill:#98bdf9;opacity:.62"></path>
                            <rect width="684.564" height="568.638" x="606.31" y="410.5" rx="54.596"
                                style="fill:url(#a37a74ea-5cf7-4ee7-aa73-74da24f57da4)"></rect>
                            <rect width="646.921" height="528.411" x="625.708" y="429.713" rx="39.815"
                                style="fill:#80aaff"></rect>
                            <path
                                d="M976.6181,663.4516a120.73325,120.73325,0,0,0,229.4696-61.3613,119.72191,119.72191,0,0,0-8.0231-34.4699c-.9732-2.489-2.0578-4.978-3.212-7.4252a120.70583,120.70583,0,0,0-160.7523-57.4962,117.94235,117.94235,0,0,0-13.6545,7.5784h-.0139a118.91322,118.91322,0,0,0-17.4923,13.6542A120.74277,120.74277,0,0,0,976.6181,663.4516Zm41.0885,8.1066a90.60947,90.60947,0,0,1,5.9512-125.6432,90.54311,90.54311,0,0,1,143.886,27.1977c.862,1.8355,1.6685,3.6986,2.4055,5.5619a89.62355,89.62355,0,0,1,6.0209,25.8629,90.54083,90.54083,0,0,1-158.2636,67.0207Z"
                                style="fill:url(#a71c7626-c51a-4177-81c1-b0aa7a22c3d1)"></path>
                            <path
                                d="M1002.9396,523.9316l20.7182,21.9834a90.62335,90.62335,0,0,1,104.0909-14.2523l14.0297-26.7666a120.55068,120.55068,0,0,0-107.6781-2.1971,117.94235,117.94235,0,0,0-13.6545,7.5784h-.0139A118.91322,118.91322,0,0,0,1002.9396,523.9316Z"
                                style="fill:#b8f1f2"></path>
                            <path
                                d="M1169.9534,578.6812l28.117-11.064c-.9831-2.4905-2.0586-4.9712-3.2202-7.4222a120.173,120.173,0,0,0-53.0749-55.3012l-14.0255,26.7626a90.09644,90.09644,0,0,1,39.7913,41.4547Q1168.84565,575.8732,1169.9534,578.6812Z"
                                style="fill:#2273b5"></path>
                            <path
                                d="M939.33,610.6249a120.73327,120.73327,0,0,0-234.0774-40.3645,119.72222,119.72222,0,0,0-7.1479,34.6619c-.1585,2.6678-.2157,5.3822-.1924,8.0879A120.70587,120.70587,0,0,0,819.817,732.5357a117.93625,117.93625,0,0,0,15.5731-1.1643l.0127.0058a118.92123,118.92123,0,0,0,21.6023-5.0748A120.7429,120.7429,0,0,0,939.33,610.6249ZM905.4117,586.058A90.60922,90.60922,0,0,1,847.396,697.6636a90.54321,90.54321,0,0,1-119.2754-84.9488c-.0141-2.0277.0336-4.0573.1446-6.058a89.62245,89.62245,0,0,1,5.3621-26.0075,90.54081,90.54081,0,0,1,171.7844,5.4087Z"
                                style="fill:url(#b5eaa17a-1ff1-4be4-a562-0c871d109f5f)"></path>
                            <path
                                d="M857.0051,726.3024l-9.6091-28.6388a90.62334,90.62334,0,0,1-100.4937-30.644l-23.9486,18.4322a120.55061,120.55061,0,0,0,96.8633,47.0839,117.93625,117.93625,0,0,0,15.5731-1.1643l.0127.0058A118.92123,118.92123,0,0,0,857.0051,726.3024Z"
                                style="fill:#b8f1f2"></path>
                            <path
                                d="M728.2642,606.6491l-30.1661-1.7263c-.1502,2.6733-.2122,5.3764-.1837,8.0886a120.17294,120.17294,0,0,0,25.0411,72.4438l23.9432-18.4303a90.09645,90.09645,0,0,1-18.7762-54.3074Q728.0943,609.6629,728.2642,606.6491Z"
                                style="fill:#2273b5"></path>
                            <path
                                d="M713.0896 887.2791H682.1124q-6.70725 0-9.5769-3.0077-2.86965-3.0081-2.8697-9.5769v-76.198q0-6.70605 2.9391-9.6455 2.93835-2.93835 9.5075-2.9391h32.8437a76.68793 76.68793 0 0 1 12.5846.8994 26.84648 26.84648 0 0 1 9.5427 3.4569 25.05777 25.05777 0 0 1 6.3609 5.4281 23.93728 23.93728 0 0 1 4.2174 7.2603 24.279 24.279 0 0 1 1.4524 8.4006q0 15.2133-15.2116 22.2653 19.9821 6.3618 19.983 24.7543a27.81221 27.81221 0 0 1-4.3564 15.3154 26.13641 26.13641 0 0 1-11.7547 10.0605 41.79687 41.79687 0 0 1-10.6487 2.7316A108.507 108.507 0 0 1 713.0896 887.2791Zm-22.8869-85.9472v26.2058h18.8075q7.6752 0 11.8584-1.4524a11.3237 11.3237 0 0 0 6.3961-5.531 12.472 12.472 0 0 0 1.7284-6.4998q0-7.6752-5.4623-10.1994-5.46375-2.52285-16.6641-2.5232Zm21.3659 40.9339H690.2027V871.86h22.0578q20.81025 0 20.812-15.0051 0-7.6752-5.3929-11.1322Q722.2859 842.26625 711.5686 842.2658ZM810.999 847.7976H792.1915v28.6948q0 6.15465-2.904 9.3343a10.23236 10.23236 0 0 1-14.7966.0351q-2.83665-3.1452-2.8354-9.2314V798.4965q0-6.77595 3.1114-9.6798 3.11235-2.90535 9.8873-2.9048H810.999q11.6856 0 17.9784 1.7979a26.78913 26.78913 0 0 1 10.7515 5.7393 25.88439 25.88439 0 0 1 6.8797 9.8187 34.57273 34.57273 0 0 1 2.3509 13.0682q0 15.49035-9.5418 23.4751Q829.87635 847.79755 810.999 847.7976Zm-4.9788-46.4657H792.1915V832.309h13.8287a41.28839 41.28839 0 0 0 12.1353-1.5219 14.132 14.132 0 0 0 7.4335-4.9779 14.86115 14.86115 0 0 0 2.5585-9.0582 15.35819 15.35819 0 0 0-3.9414-10.9248Q819.7802 801.3319 806.0202 801.3319ZM900.3355 871.998l-16.2491-64.5813v69.9742q0 5.8092-2.5936 8.7127a9.51866 9.51866 0 0 1-13.6564.0343q-2.6283-2.8683-2.6278-8.747V797.183q0-6.6387 3.4578-8.9545 3.45645-2.3157 9.3343-2.3166h6.3618q5.7393 0 8.332 1.0374a6.99744 6.99744 0 0 1 3.8376 3.7339 57.97628 57.97628 0 0 1 2.8345 8.7813l14.7281 55.5239 14.7281-55.5239a57.97628 57.97628 0 0 1 2.8345-8.7813 6.99585 6.99585 0 0 1 3.8385-3.7339q2.5926-1.0365 8.3311-1.0374h6.3618q5.8764 0 9.3352 2.3166 3.4551 2.317 3.4569 8.9545v80.2079q0 5.8092-2.5936 8.7127a8.85263 8.85263 0 0 1-6.9491 2.904 8.6405 8.6405 0 0 1-6.7064-2.904q-2.62965-2.90385-2.6278-8.7127V807.4167L927.8548 871.998q-1.5918 6.29325-2.5927 9.2305a12.743 12.743 0 0 1-3.6996 5.3595 10.78655 10.78655 0 0 1-7.4678 2.4196 10.92306 10.92306 0 0 1-9.9568-5.5319 22.62293 22.62293 0 0 1-2.1777-5.3586Q901.1637 875.1789 900.3355 871.998Z"
                                style="fill:#fff"></path>
                            <rect width="167.707" height="13.504" x="995.203" y="782.445" style="fill:#2273b5"></rect>
                            <rect width="202.867" height="13.504" x="995.203" y="807.077" style="fill:#2273b5"></rect>
                            <rect width="250.969" height="13.504" x="995.203" y="856.342" style="fill:#2273b5"></rect>
                            <rect width="167.707" height="13.504" x="995.203" y="831.71" style="fill:#2273b5"></rect>
                            <rect width="167.707" height="13.504" x="995.203" y="880.974" style="fill:#2273b5"></rect>
                            <circle cx="673.865" cy="1274.903" r="207.541"
                                style="mix-blend-mode:multiply;fill:#98bdf9;opacity:.62"
                                transform="rotate(-45 673.865 1274.903)"></circle>
                            <circle cx="663.793" cy="1273.173" r="207.541"
                                style="fill:url(#b48d87fe-79af-4741-a188-cef3bff779f2)"
                                transform="rotate(-45 663.793 1273.173)"></circle>
                            <g style="mix-blend-mode:color-burn">
                                <path
                                    d="M664.3522 1191.945c-3.6488-1.746-27.128-3.0543-56.7593-3.0543-32.1249 0-58.1905 1.5886-58.4464 3.5507a.06376.06376 0 0 0-.0049.0298v9.9736c0 .7414 3.67 1.429 9.959 1.9968v167.4702h.0099a.15791.15791 0 0 0-.0099.0393c0 1.6578 21.8856 2.9951 48.8762 2.9951 15.9542 0 29.7736-.4819 38.4048-1.2197 5.9758-.5113 9.4722-1.1406 9.4722-1.8147v-77.525h.2798v-20.5035h-.2798v-36.0179l.0574-.0027-.0574-1.1569V1204.353c2.3463-.236 4.274-.4869 5.7397-.7473 2.0263-.3639 3.1574-.7577 3.246-1.1609h.01V1192.422C664.8495 1192.2597 664.6822 1192.1023 664.3522 1191.945ZM797.4157 1191.945c-3.6492-1.746-27.128-3.0543-56.7592-3.0543-32.1249 0-58.191 1.5886-58.4464 3.5507a.06262.06262 0 0 0-.005.0298v9.9736c0 .7414 3.6701 1.429 9.9591 1.9968v167.4702h.0099a.15359.15359 0 0 0-.0099.0393c0 1.6578 21.8851 2.9951 48.8757 2.9951 15.9542 0 29.774-.4819 38.4053-1.2197 5.9753-.5113 9.4722-1.1406 9.4722-1.8147v-77.525h.2798v-20.5035h-.2798v-36.0179l.0574-.0027-.0574-1.1569V1204.353c2.3458-.236 4.274-.4869 5.7392-.7473 2.0267-.3639 3.1574-.7577 3.246-1.1609h.01V1192.422C797.9126 1192.2597 797.7453 1192.1023 797.4157 1191.945Z"
                                    style="fill:#3bf;opacity:.5"></path>
                            </g>
                            <path
                                d="M645.5954,1204.3384V1371.912c0,.6738-3.4968,1.3033-9.4723,1.8147-8.6312.7378-22.451,1.2198-38.4052,1.2198-26.9904,0-48.8758-1.3378-48.8758-2.9952a.15548.15548,0,0,1,.0097-.0393h-.0097V1204.3384Z"
                                style="fill:#ffab31"></path>
                            <path
                                d="M654.5906,1192.4219v10.023h-.0099c-.0886.4033-1.2196.7967-3.246,1.1607-1.4655.2607-3.3934.5115-5.7393.7476-10.0624.9934-27.6741,1.6672-48.2611,1.6672-6.4919,0-12.7329-.064-18.5658-.1819-11.705-.2411-21.7575-.7034-28.8395-1.2984a.05271.05271,0,0,1-.0246-.005c-6.9394-.5852-11.0214-1.3082-11.0214-2.0902v-9.9738a.06433.06433,0,0,1,.0048-.0296c.2558-1.9623,26.3216-3.5508,58.4465-3.5508,29.6313,0,53.1102,1.3083,56.7594,3.0542C654.4233,1192.1022,654.5906,1192.2596,654.5906,1192.4219Z"
                                style="fill:#d5eceb"></path>
                            <path
                                d="M654.0937,1191.9449v.0245h-.0097c-.0886.4033-1.2198.7968-3.246,1.1607-1.4655.2606-3.3934.5115-5.7393.7476-10.0625.9934-27.6741,1.6672-48.2612,1.6672-6.4918,0-12.7328-.064-18.5657-.182-11.705-.241-21.7576-.7033-28.8395-1.2984a.05343.05343,0,0,1-.0246-.0049c-5.5231-.4672-9.2363-1.018-10.5199-1.6181.2558-1.9623,26.3216-3.5508,58.4465-3.5508C626.9656,1188.8907,650.4445,1190.199,654.0937,1191.9449Z"
                                style="fill:#e9fffd"></path>
                            <path
                                d="M645.5954,1226.9763v77.7056c-2.7296.0245-5.5279.0344-8.3804.0344-32.2774,0-58.4465-1.6033-58.4465-3.5755v-72.6793c5.8329.1181,12.0739.182,18.5658.182C617.9213,1228.6435,635.533,1227.9697,645.5954,1226.9763Z"
                                style="fill:#ffee4a"></path>
                            <path
                                d="M598.7358,1238.9384c-7.1971,0-11.648-.0753-11.759-.0769l.039-2.2174c.282.006,28.4925.4813,58.5273-.9965l.1094,2.2151C627.3984,1238.7603,609.815,1238.9384,598.7358,1238.9384Z"
                                style="fill:#ffab31"></path>
                            <rect width="35.66" height="20.947" x="587.744" y="1246.48" style="fill:#ffcd4e"></rect>
                            <rect width="14.962" height="2.494" x="629.638" y="1246.723" style="fill:#ffcd4e"></rect>
                            <rect width="14.962" height="2.494" x="629.638" y="1251.468" style="fill:#ffcd4e"></rect>
                            <rect width="14.962" height="2.494" x="629.638" y="1256.213" style="fill:#ffcd4e"></rect>
                            <path
                                d="M645.875,1294.3866H587.9658v-20.5034H645.875Zm-57.3548-.5544h56.8004v-19.3947H588.5202Z"
                                style="fill:#ffcd4e"></path>
                            <path
                                d="M597.3343,1206.0204c-6.4919,0-12.7329-.064-18.5658-.1819-11.705-.2411-21.7575-.7034-28.8395-1.2984,5.7171,1.0201,34.05,5.5008,87.6136,5.1199l-1.4195.1621v163.9046c5.9755-.5114,9.4723-1.1409,9.4723-1.8147V1204.3532C635.533,1205.3466,617.9213,1206.0204,597.3343,1206.0204Z"
                                style="opacity:.5;fill:#c97326"></path>
                            <path
                                d="M778.6588,1204.3384V1371.912c0,.6738-3.4968,1.3033-9.4722,1.8147-8.6313.7378-22.4511,1.2198-38.4053,1.2198-26.9904,0-48.8758-1.3378-48.8758-2.9952a.15206.15206,0,0,1,.0098-.0393h-.0098V1204.3384Z"
                                style="fill:#ffab31"></path>
                            <path
                                d="M787.654,1192.4219v10.023h-.0098c-.0886.4033-1.2197.7967-3.246,1.1607-1.4656.2607-3.3934.5115-5.7394.7476-10.0623.9934-27.674,1.6672-48.2611,1.6672-6.4918,0-12.7329-.064-18.5658-.1819-11.7049-.2411-21.7575-.7034-28.8395-1.2984a.05271.05271,0,0,1-.0246-.005c-6.9394-.5852-11.0214-1.3082-11.0214-2.0902v-9.9738a.06315.06315,0,0,1,.0049-.0296c.2557-1.9623,26.3216-3.5508,58.4464-3.5508,29.6314,0,53.1103,1.3083,56.7594,3.0542C787.4867,1192.1022,787.654,1192.2596,787.654,1192.4219Z"
                                style="fill:#d5eceb"></path>
                            <path
                                d="M787.1571,1191.9449v.0245h-.0097c-.0886.4033-1.2197.7968-3.2459,1.1607-1.4656.2606-3.3935.5115-5.7394.7476-10.0625.9934-27.674,1.6672-48.2611,1.6672-6.4919,0-12.7329-.064-18.5658-.182-11.705-.241-21.7575-.7033-28.8395-1.2984a.05364.05364,0,0,1-.0246-.0049c-5.523-.4672-9.2362-1.018-10.5198-1.6181.2557-1.9623,26.3216-3.5508,58.4464-3.5508C760.0291,1188.8907,783.508,1190.199,787.1571,1191.9449Z"
                                style="fill:#e9fffd"></path>
                            <path
                                d="M778.6588,1226.9763v77.7056c-2.7296.0245-5.5279.0344-8.3804.0344-32.2774,0-58.4465-1.6033-58.4465-3.5755v-72.6793c5.8329.1181,12.074.182,18.5658.182C750.9848,1228.6435,768.5965,1227.9697,778.6588,1226.9763Z"
                                style="fill:#ffee4a"></path>
                            <path
                                d="M731.7993,1238.9384c-7.1972,0-11.6481-.0753-11.7591-.0769l.039-2.2174c.282.006,28.4926.4813,58.5274-.9965l.1093,2.2151C760.4618,1238.7603,742.8785,1238.9384,731.7993,1238.9384Z"
                                style="fill:#ffab31"></path>
                            <rect width="35.66" height="20.947" x="720.808" y="1246.48" style="fill:#ffcd4e"></rect>
                            <rect width="14.962" height="2.494" x="762.702" y="1246.723" style="fill:#ffcd4e"></rect>
                            <rect width="14.962" height="2.494" x="762.702" y="1251.468" style="fill:#ffcd4e"></rect>
                            <rect width="14.962" height="2.494" x="762.702" y="1256.213" style="fill:#ffcd4e"></rect>
                            <path
                                d="M778.9384,1294.3866H721.0292v-20.5034h57.9092Zm-57.3548-.5544h56.8005v-19.3947H721.5836Z"
                                style="fill:#ffcd4e"></path>
                            <path
                                d="M730.3977,1206.0204c-6.4918,0-12.7329-.064-18.5658-.1819-11.7049-.2411-21.7575-.7034-28.8395-1.2984,5.7171,1.0201,34.05,5.5008,87.6137,5.1199l-1.4195.1621v163.9046c5.9754-.5114,9.4722-1.1409,9.4722-1.8147V1204.3532C768.5965,1205.3466,750.9848,1206.0204,730.3977,1206.0204Z"
                                style="opacity:.5;fill:#c97326"></path>
                            <path
                                d="M2293.8727,596.5065h253.1007a34.38427,34.38427,0,0,1,34.3905,34.3904V754.8578a34.38431,34.38431,0,0,1-34.3905,34.3906h-46.8961l5.7608,63.5447-97.5872-63.5447H2293.8727a34.38467,34.38467,0,0,1-34.391-34.3906V630.8969A34.38463,34.38463,0,0,1,2293.8727,596.5065Z"
                                style="mix-blend-mode:multiply;opacity:.61;fill:#c4c4c4"></path>
                            <path
                                d="M2264.6029,624.595V748.5559a34.38433,34.38433,0,0,0,34.3906,34.3906h114.378l97.5874,63.5449-15.4416-63.5449h51.7365a34.38433,34.38433,0,0,0,34.3906-34.3906V624.595a34.38416,34.38416,0,0,0-34.3906-34.3904H2298.9935A34.38416,34.38416,0,0,0,2264.6029,624.595Z"
                                style="fill:#ffac27"></path>
                            <path
                                d="M2279.1239,624.595V748.5559a34.38433,34.38433,0,0,0,34.3906,34.3906h114.3779l83.0665,63.5449-5.7609-63.5449h46.8961a34.38433,34.38433,0,0,0,34.3906-34.3906V624.595a34.38416,34.38416,0,0,0-34.3906-34.3904H2313.5145A34.38416,34.38416,0,0,0,2279.1239,624.595Z"
                                style="fill:#fabf44"></path>
                            <circle cx="2359.514" cy="687.446" r="12.852" style="fill:#fff"></circle>
                            <circle cx="2430.535" cy="687.446" r="12.852" style="fill:#fff"></circle>
                            <circle cx="2502.59" cy="687.446" r="12.852" style="fill:#fff"></circle>
                        </g>
                    </g>
                </svg>
            </div>



            <!-- Right Section: Login Form -->
            <div class="w-1/2 bg-white flex items-center justify-center p-8">
                <div class="w-full max-w-md space-y-6">
                    <h1 class="text-3xl font-bold text-center text-gray-700">Create an Account</h1>
                    <p class="text-center text-gray-500">Sign up to get started</p>

                    <!-- Display errors if there are any -->
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('auth.register') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" id="nama" name="nama" required
                                class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        </div>
                        <div>
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <input type="text" id="alamat" name="alamat" required
                                class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        </div>
                        <div>
                            <label for="no_ktp" class="block text-sm font-medium text-gray-700">No KTP</label>
                            <input type="text" id="no_ktp" name="no_ktp" required
                                class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        </div>
                        <div>
                            <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP</label>
                            <input type="text" id="no_hp" name="no_hp" required
                                class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-md">Sign
                                Up</button>
                        </div>
                    </form>
                    <p class="text-center text-sm text-gray-600">
                        Already have an account? <a href="{{ route('auth.pasien') }}" class="text-blue-600 hover:underline">Log in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
