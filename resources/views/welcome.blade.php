<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="https://unpkg.com/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.3"></script>
    <title>Welcome Page</title>
    <style>
        :root {
            --anime-time: 8s;
            --box-size: 200px;
            --clip-distance: .05;
            --clip-size: calc(var(--box-size) * (1 + var(--clip-distance) * 2));
            --path-width: 3px;
            --main-color: #1a5798;
        }

        body {
            background-color: rgba(38, 34, 38, 0.933);
        }

        .full-fill {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .bb {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: var(--box-size);
            height: var(--box-size);
            margin: auto;
            text-align: center color: var(--main-color);
            box-shadow: inset 0 0 0 1px rgba(var(--main-color), .5);
        }

        .bb::before,
        .bb::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            margin: calc(-1 * var(--clip-distance) * 100%);
            box-shadow: inset 0 0 0 var(--path-width);
            animation: clipMe var(--anime-time) linear infinite;
        }

        .bb::before {
            animation-delay: calc(var(--anime-time) * -0.5);
        }

        /* for debug */
        .bb:hover::after,
        .bb:hover::before {
            background-color: rgba(255, 0, 0, .3);
        }

        @keyframes clipMe {

            0%,
            100% {
                clip: rect(0px, var(--clip-size), var(--path-width), 0px);
            }

            25% {
                clip: rect(0px, var(--path-width), var(--clip-size), 0px);
            }

            50% {
                clip: rect(calc(var(--clip-size) - var(--path-width)), var(--clip-size), var(--clip-size), 0px);
            }

            75% {
                clip: rect(0px, var(--clip-size), var(--clip-size), calc(var(--clip-size) - var(--path-width)));
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
        </div>
        <div class="row justify-center items-center h-[100vh]">
            <div class="col-lg-6">
                <div class="gradient-border-card text-center">
                    <i aria-hidden="true"></i>
                    <h1 class="text-white text-1xl font-bold border-bottom border-light py-1">UTS SEMESTER 4 (Pemograman
                        web framework)</h1>
                    <div class="text-start mx-8 my-1">
                        <p>Nama : Fahmi Idris Anjounghan</p>
                        <p>Kelas : IF22E</p>
                        <p>Nim : 22416255201247</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gradient-background__wrapper">
            <div class="gradient-background">
                <div class="gradient-background__shape gradient-background__shape--1"></div>
                <div class="gradient-background__shape gradient-background__shape--2"></div>
            </div>
            <div class="gradient-background__noise"></div>
        </div>
    </div>
    <div class="full-fill h-[100vh] overflow-hidden">
        <div class="sf-rings relative pt-[100%] media-fit z-2">
            <div class="sf-ring__wrap --1 absolute inset-0 z-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2828.43 2720.74" class="sf-ring --1">
                    <path fill="none" stroke="#f203ff" stroke-width="2"
                        d="M578.43 43.87c208.56-130.32 533 78.36 764.29 75.45 235.3-3 511.78-147.66 720.83-31.07 200 111.49 358 337.06 489.06 546.74s261.74 450.84 274.27 679.47c13.12 239-197.48 443.12-303.29 653.36-104 206.65-122.25 529.71-330.8 660s-507.56-50-738.86-47.08c-235.31 3-545.63 221.33-754.69 104.75-199.99-111.47-171.6-493.4-302.6-703.08S14.8 1625.09 2.25 1396.48c-13.11-239.05 78.79-484.87 184.61-695.1 104-206.66 182.96-527.18 391.57-657.51Z">
                    </path>
                </svg>
            </div>
            <div class="sf-ring__wrap --2 absolute inset-0 z-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2758.36 2922.53" class="sf-ring --2">
                    <path fill="none" stroke="#f945a2" stroke-width="2"
                        d="M314.52 474.72c162.24-180.3 571.22-10.93 786.48-80.62 222.06-71.89 434.12-344.59 662.52-296.16 221.38 46.95 435.48 232.82 615.73 395.28s384.25 357.06 454.05 572.47c72 222.23-121.6 471.77-169.85 700.27-46.78 221.48 67.3 559.25-94.94 739.55s-531.15 36.39-746.38 106.09c-222.07 71.9-447.35 445.25-675.75 396.83-221.39-46.94-266.76-485.84-447.06-648.3s-496.24-202.2-566-417.6c-72-222.23-35.42-484.38 12.83-712.88 46.75-221.49 6.13-574.65 168.37-754.93Z"
                        opacity=".25" transform="translate(-91.81 -91.22)"></path>
                </svg>
            </div>
            <div class="sf-ring__wrap --3 absolute inset-0 z-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2723.79 2841.29" class="sf-ring --3">
                    <path fill="none" stroke="#a64eff" stroke-width="2"
                        d="M2688.5 580.86c128.59 205.78-146.74 552.37-139 778.62 8 233.4 211.6 512.62 102.2 718.91-106 200-343.54 354.54-549.25 483.08s-448.83 271-675 278.64c-233.34 7.92-419.81-247.17-626.07-356.64-199.88-106.12-555.88-89.65-684.43-295.44s111.23-520.87 103.55-747.1c-8-233.46-304.71-553.13-195.32-759.46 106-200 540.21-122.45 745.93-251s330.86-421.43 557-429.09c233.39-7.91 475.17 99.68 681.39 209.15 200 106.11 550.43 164.54 679 370.33Z">
                    </path>
                </svg>
            </div>
            <div class="sf-ring__wrap --4 absolute inset-0 z-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2700.65 3034.3" class="sf-ring --4">
                    <path fill="none" stroke="#ff00fe" stroke-width="2"
                        d="M1274.29 1.13c242.4-8.42 404.87 403.5 604.59 510 206 109.89 549.5 73.17 673.42 271.17 120.12 191.92 135.26 475 143.77 717.55s10.33 524.43-96.05 724.21c-109.74 206.11-423.73 240-621.57 364-191.75 120.1-355.33 436.71-597.73 445.13s-395.34-357-595.05-463.49c-206-109.89-631.07-12.81-755-210.79C-89.46 2167 194.59 1829.6 186.08 1587.05s-199.52-497.5-93.14-697.28C202.68 683.66 416.61 528 614.44 404.08 806.19 284 1031.88 9.55 1274.29 1.13Z">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <style>
        body {
            background: #000;
            color: #fff;
            font-family: "Inter", sans-serif;
            position: relative;
        }

        h2 {
            font-size: 1.8rem !important;
        }

        @font-face {
            font-family: 'Inter';
            src: url('https://res.cloudinary.com/du6mfjbbd/raw/upload/v1696975586/wegxkv6mdriebvpvokwf.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        :root {
            --text-color: #a1a1a1;
            --accent-color: #111;
            --geist-foreground-rgb: 255, 255, 255;
            --border-radius: 12px;
        }

        .logo {
            max-width: 5rem;
        }

        /******************************/
        .gradient-text-animation {
            --colorA: #D6009A;
            --colorB: #9750dd;
            cursor: default;
            position: relative;
            background-image: linear-gradient(120deg, var(--colorA) 0%, var(--colorB) 50%, var(--colorA) 100%);
            background-origin: padding-box;
            background-size: 200%;
            -webkit-box-decoration-break: clone;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: unset;
            animation-timeline: auto;
            animation-range-start: normal;
            animation-range-end: normal;
            overflow: visible;
            animation: 3s linear 0s infinite normal forwards running nextui-k-dAFEPd;
        }

        @keyframes nextui-k-dAFEPd {
            100% {
                background-position: -200% center
            }
        }

        /******************************/

        .gradient-border-card {
            position: relative;
            padding: 40px;
            border-radius: var(--border-radius);
            flex: 1 1;
            transition: background .2s ease-in-out, box-shadow .2s ease-in-out;
            box-shadow: 0 0 0 1px transparent, 0 2px 4px transparent, 0 12px 24px transparent;
            backdrop-filter: blur(20px);

            height: 100%;
            z-index: 1;

            @keyframes shimmer {
                0% {
                    opacity: 0
                }

                5% {
                    opacity: 0;
                    background-position: -50%
                }

                10% {
                    opacity: .7
                }

                15% {
                    opacity: 0;
                    background-position: 150%
                }

                20% {
                    opacity: 0
                }

                to {
                    opacity: 0
                }
            }

            .shimmer {
                /* background: linear-gradient(112deg,transparent 30%,rgba(var(--geist-foreground-rgb),.1) 40%,rgba(var(--geist-foreground-rgb),.3) 50%,rgba(var(--geist-foreground-rgb),.1) 60%,transparent 80%); */
                /* backgroun glass */
                position: absolute;
                inset: 0;
                z-index: 20;
                pointer-events: none;
                border-radius: inherit;
                background-size: 200% auto;
                background-position: 0;
                animation: shimmer 18s cubic-bezier(.8, 0, .05, 1) infinite;
                animation-delay: var(--delay);
            }

            i {
                content: "";
                position: absolute;
                inset: -1px;
                padding: var(--border-size);

                --border-size: 1px;
                --padding: 1px;
                --border-bg: conic-gradient(from 180deg at 50% 50%, #e92a67 0deg, #a853ba 112.5deg, #2a8af6 228.75deg, rgba(42, 138, 246, 0) 360deg);
                overflow: hidden;
                padding: calc(var(--padding) + var(--border-size));
                border-radius: var(--border-radius);
                display: inline-block;
                z-index: 0;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                perspective: 1000;
                transform: translateZ(0);

                -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                -webkit-mask-composite: xor;
                mask-composite: exclude;
                z-index: -1;
                border-radius: calc(var(--border-radius) + var(--border-size));

                &:before {
                    content: "";
                    display: block;
                    background: var(--border-bg);
                    box-shadow: 0 0 40px 20px --var(--border-bg);
                    width: calc(100% * 1.41421356237);
                    padding-bottom: calc(100% * 1.41421356237);
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    border-radius: 100%;
                    z-index: -2;
                    animation: landing_spin__XlUIM 5s linear infinite;
                }
            }

            @keyframes landing_spin__XlUIM {
                0% {
                    transform: translate(-50%, -50%) rotate(1turn)
                }

                to {
                    transform: translate(-50%, -50%) rotate(0)
                }
            }

            .icon {
                position: relative;
                display: inline-flex;
                padding: 0.75rem;
                border-radius: inherit;
            }

            p {
                color: var(--text-color);
            }

            &:before,
            .icon:before {
                content: "";
                position: absolute;
                inset: -1px;
                border-radius: inherit;
                padding: 1px;
                background: radial-gradient(75% 75% at 25% 15%, #fff 0, hsla(0, 0%, 100%, .3) 100%);
                -webkit-mask: linear-gradient(#000, #000) content-box, linear-gradient(#000, #000);
                mask: linear-gradient(#000, #000) content-box, linear-gradient(#000, #000);
                -webkit-mask-composite: xor;
                mask-composite: exclude;
                opacity: .5;
                pointer-events: none;
            }

            &:hover {
                /* background: var(--accent-color); */
                box-shadow: 0 0 0 1px rgba(0, 0, 0, .03), 0 2px 4px rgba(0, 0, 0, .05), 0 12px 24px rgba(0, 0, 0, .05);
            }
        }


        /* Favorite Button
    /*************************/

        .favorite-item {
            // width: calc(100% + 16px);
            margin: 0 -8px;
            padding: 0 8px;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .favorite-container .sparkle-container {
            position: absolute;
            height: 6px;
            width: 6px;
            color: var(--color);
        }

        .favorite-container {
            margin-left: 6px;
        }

        .favorite-container>svg {
            vertical-align: top;
        }

        .favorite-container .sparkle-container svg {
            display: block;
            transition: transform var(--duration, 0.2s) ease-out var(--delay);
            transform: translate(var(--starting-position-x), var(--starting-position-y)) scale(var(--starting-scale));
        }

        .gradient-border-card:hover .favorite-container svg {
            transform: translate(var(--ending-position-x), var(--ending-position-y)) scale(var(--ending-scale)) !important;
            transition: transform 0.1s ease-out 0;
        }

        .favorite-container {
            position: relative;
        }

        .favorite-container .sparkles-container {
            height: 24px;
            width: 24px;
            display: block;
            position: absolute;
            top: -2px;
            left: -3px;
        }


        /* Gradient Animation Button
    /******************************/
        button {
            border: 0;
            position: relative;
            border-radius: 12px;
            color: #fff;
            background: #000;
            padding: 0 16px;
            box-shadow: 0 0 0 1px 0 0 0 1px rgba(255, 255, 255, 0.14);
            max-width: 100%;
            justify-content: center;
            align-items: center;
            transition-property: border-color, background, color, transform, box-shadow;
            transition-duration: .15s;
            transition-timing-function: ease;
            font-size: 16px;
            line-height: 50px;
            height: 50px;
            width: 100%;
            max-width: 250px;
            transition: 0.25s;
        }

        .highlight-bg {
            position: absolute;
            top: 1px;
            right: 1px;
            bottom: 1px;
            left: 1px;
            background: inherit;
            border-radius: 12px;
            background: linear-gradient(-90deg, #007cf0, #00dfd8, #ff0080, #007cf0);
            background-size: 400% 100%;
            border: none;
            padding: 0;
            margin: 0;
            animation: background-anim 8s ease-in-out infinite;
        }

        .button-text {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            // background: #000;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .highlight-bg:after {
            content: "";
            position: absolute;
            background-size: inherit;
            background-image: inherit;
            animation: inherit;
            left: 0;
            right: 0;
            top: 2px;
            height: 100%;
            filter: blur(.5rem);
            transition: 0.25s;
        }

        @keyframes background-anim {
            50% {
                background-position: 140% 50%;
                transform: skew(-2deg);
            }
        }

        /*****************/

        .gradient-background__wrapper {
            background: #141414;
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
            top: 0;
            left: 0;
            z-index: -1;
        }

        @media (max-width: 568px) {
            .gradient-background__wrapper {
                background: #FFFFFF
            }
        }

        .gradient-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-filter: blur(250px);
            filter: blur(250px);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        @media (max-width: 568px) {
            .gradient-background {
                display: none
            }
        }

        .gradient-background__shape {
            mix-blend-mode: lighten;
            -webkit-animation-duration: 20s;
            animation-duration: 20s;
            position: absolute;
            border-radius: 100%;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(0.1, 0, 0.9, 1);
            animation-timing-function: cubic-bezier(0.1, 0, 0.9, 1)
        }

        .gradient-background__shape--1 {
            bottom: 0;
            left: 0;
            width: 700px;
            height: 700px;
            background: #4f4f4f;
            mix-blend-mode: lighten;
            -webkit-transform: translate(-30%, 40%);
            transform: translate(-30%, 40%);
            -webkit-animation-name: gradientShapeAnimation1;
            animation-name: gradientShapeAnimation1
        }

        .gradient-background__shape--2 {
            top: 0;
            right: 0;
            width: 600px;
            height: 600px;
            background: #010030;
            -webkit-transform: translate(20%, -40%);
            transform: translate(20%, -40%);
            -webkit-animation-name: gradientShapeAnimation2;
            animation-name: gradientShapeAnimation2
        }


        @keyframes gradientShapeAnimation1 {
            0% {
                -webkit-transform: translate(-30%, 40%) rotate(-20deg);
                transform: translate(-30%, 40%) rotate(-20deg)
            }

            25% {
                -webkit-transform: translate(0%, 20%) skew(-15deg, -15deg) rotate(80deg);
                transform: translate(0%, 20%) skew(-15deg, -15deg) rotate(80deg)
            }

            50% {
                -webkit-transform: translate(30%, -10%) rotate(180deg);
                transform: translate(30%, -10%) rotate(180deg)
            }

            75% {
                -webkit-transform: translate(-30%, 40%) skew(15deg, 15deg) rotate(240deg);
                transform: translate(-30%, 40%) skew(15deg, 15deg) rotate(240deg)
            }

            100% {
                -webkit-transform: translate(-30%, 40%) rotate(-20deg);
                transform: translate(-30%, 40%) rotate(-20deg)
            }
        }

        @keyframes gradientShapeAnimation2 {
            0% {
                -webkit-transform: translate(20%, -40%) rotate(-20deg);
                transform: translate(20%, -40%) rotate(-20deg)
            }

            20% {
                -webkit-transform: translate(0%, 0%) skew(-15deg, -15deg) rotate(80deg);
                transform: translate(0%, 0%) skew(-15deg, -15deg) rotate(80deg)
            }

            40% {
                -webkit-transform: translate(-40%, 50%) rotate(180deg);
                transform: translate(-40%, 50%) rotate(180deg)
            }

            60% {
                -webkit-transform: translate(-20%, -20%) skew(15deg, 15deg) rotate(80deg);
                transform: translate(-20%, -20%) skew(15deg, 15deg) rotate(80deg)
            }

            80% {
                -webkit-transform: translate(10%, -30%) rotate(180deg);
                transform: translate(10%, -30%) rotate(180deg)
            }

            100% {
                -webkit-transform: translate(20%, -40%) rotate(340deg);
                transform: translate(20%, -40%) rotate(340deg)
            }
        }

        .gradient-background__noise {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("https://res.cloudinary.com/du6mfjbbd/image/upload/v1701127786/qzt2rn0jkkdln3y1e3mp.png");
            background-size: 100px
        }

        @media (max-width: 568px) {
            .gradient-background__noise {
                display: none
            }
        }

        @media (prefers-reduced-motion) {
            .gradient-background__shape--1 {
                -webkit-animation-name: none;
                animation-name: none
            }

            .gradient-background__shape--2 {
                -webkit-animation-name: none;
                animation-name: none
            }
        }

        @-moz-document url-prefix() {
            .gradient-background__wrapper {
                background-image: url("https://res.cloudinary.com/du6mfjbbd/image/upload/v1701127843/gradient-background-c1d8cb3f0925910cfff2493c4442d4e2c1cb6b8a267903342574faee6f70c26c_zuhomc.png");
                background-size: cover
            }

            @media (max-width: 568px) {
                .gradient-background__wrapper {
                    background: #FFFFFF
                }
            }

            .gradient-background,
            .gradient-background__noise {
                display: none
            }
        }

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .gradient-background__wrapper {
                background-image: url("https://res.cloudinary.com/du6mfjbbd/image/upload/v1701127843/gradient-background-c1d8cb3f0925910cfff2493c4442d4e2c1cb6b8a267903342574faee6f70c26c_zuhomc.png");
                background-size: cover
            }
        }

        @media all and (-ms-high-contrast: none) and (max-width: 568px),
        (-ms-high-contrast: active) and (max-width: 568px) {
            .gradient-background__wrapper {
                background: #FFFFFF
            }
        }

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {

            .gradient-background,
            .gradient-background__noise {
                display: none
            }
        }


        /*****************************/


        .glowing-wrapper-button {
            z-index: 1;
            color: #fff;
            letter-spacing: -.01em;
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 62.5rem;
            padding: .7rem 1.5rem;
            font-size: .88rem;
            line-height: 1.42;
            text-decoration: none;
            position: relative;
            max-width: 100%;
            display: inline-block;
        }

        .glowing-wrapper {
            border-radius: 62.5rem;
            display: inline-block;
            position: relative;
            overflow: hidden
        }

        .glowing-wrapper.glowing-wrapper-active {
            background-color: #000
        }

        .glowing-wrapper-borders-masker {
            width: 100%;
            opacity: 0;
            border-radius: 62.5rem;
            padding: .11rem;
            line-height: 100%;
            transition: opacity 1s;
            position: absolute;
            top: 0;
            left: 0
        }

        .glowing-wrapper .button-text {
            z-index: 2;
            // color: transparent;
            // -webkit-text-fill-color: transparent;
            // background-image: linear-gradient(rgba(255, 255, 255, .8), #fff);
            // -webkit-background-clip: text;
            // background-clip: text;
            // font-weight: 400;
            color: #fff;
            position: relative
        }

        .glowing-wrapper-animations {
            width: 100%;
            opacity: 0;
            transition: opacity 1s;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .glowing-wrapper-mask {
            opacity: 1
        }

        .glowing-wrapper-glow {
            opacity: .12;
            filter: blur(8px)
        }

        .glowing-wrapper-borders {
            width: 100%;
            opacity: 1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .glowing-wrapper-mask-wrapper {
            opacity: 1
        }

        .glowing-wrapper-button:after {
            background: radial-gradient(85% 120% at 50% 120%, rgba(255, 255, 255, .24) 0%, rgba(255, 255, 255, 0) 100%);
            border-radius: 999px;
            content: "";
            height: calc(100% + 4px);
            left: -2px;
            opacity: 0;
            position: absolute;
            top: -2px;
            transition: 1s all;
            width: calc(100% + 4px)
        }

        .glowing-wrapper-button:hover:after {
            opacity: .7
        }


        .glowing-wrapper-active .glowing-wrapper-animations,
        .glowing-wrapper-active .glowing-wrapper-borders-masker {
            opacity: 1
        }

        .glowing-wrapper-animations:before,
        .glowing-wrapper-borders:before {
            content: "";
            float: left;
            padding-top: 100%
        }

        .glowing-wrapper-animations:after,
        .glowing-wrapper-borders:after {
            clear: both;
            content: "";
            display: block
        }

        .glowing-wrapper-animations {
            pointer-events: none;
        }

        .glowing-wrapper-animations * {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .glowing-wrapper-borders,
        .glowing-wrapper-glow,
        .glowing-wrapper-mask {
            animation: borderTurn 2.5s infinite linear;
            background-image: conic-gradient(from 0 at 50% 50%, rgba(255, 255, 255, .5) 0deg, rgba(255, 255, 255, 0) 60deg, rgba(255, 255, 255, 0) 310deg, rgba(255, 255, 255, .5) 360deg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover
        }

        .glowing-wrapper-mask-wrapper {
            -webkit-mask: url("data:image/svg+xml,url('data:image/svg+xml,%253Csvg width='28' height='24' viewBox='0 0 28 24' fill='none' xmlns='http://www.w3.org/2000/svg'%253E%253Crect width='28' height='24' fill='black'/%253E%253C/svg%253E%250A');");
            mask: url("data:image/svg+xml,url('data:image/svg+xml,%253Csvg width='28' height='24' viewBox='0 0 28 24' fill='none' xmlns='http://www.w3.org/2000/svg'%253E%253Crect width='28' height='24' fill='black'/%253E%253C/svg%253E%250A');");
            mask-repeat: repeat;
            -webkit-mask-size: auto;
            mask-size: auto
        }

        .glowing-wrapper-borders {
            animation-name: borderTurnWithTranslate
        }

        .glowing-wrapper-borders-masker {
            content: "";
            inset: 0;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: xor;
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        @keyframes borderTurn {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
            }
        }

        @keyframes borderTurnWithTranslate {
            0% {
                transform: translate(-50%, -50%) rotate(0)
            }

            to {
                transform: translate(-50%, -50%) rotate(360deg)
            }
        }

        .close-button {
            background: transparent;
            border-radius: 50%;
            animation: animate 3s linear infinite;
        }

        @keyframes animate {
            0% {
                box-shadow: 0 0 0 0 rgba(48, 0, 117, .7), 0 0 0 0 rgba(48, 0, 117, .7);
            }

            40% {
                box-shadow: 0 0 0 20px rgba(48, 0, 117, 0), 0 0 0 0 rgba(48, 0, 117, .7);
            }

            80% {
                box-shadow: 0 0 0 20px rgba(48, 0, 117, 0), 0 0 0 30px rgba(48, 0, 117, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(48, 0, 117, 0), 0 0 0 30px rgba(48, 0, 117, 0);
            }
        }

        /****************/

        @keyframes hueRotate {
            0% {
                filter: hue-rotate(0) blur(30px)
            }

            100% {
                filter: hue-rotate(360deg) blur(30px)
            }
        }

        .gradient-line:before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: -75px;
            height: 75px;
            filter: blur(30px);
            -webkit-filter: blur(30px);
            background-image: conic-gradient(from 180deg at 50% 100%, transparent 0, transparent 27%, #ff3998 27%, #d764ff 36.04%, #00b5ff 58.23%, #0fd 63%, #54fa43 73%, transparent 73%, transparent 100%);
            animation: hueRotate 2.5s linear infinite;
        }

        /**************************/

        .sf__mask {
            on: center;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }

        .sf-social-item:before {
            background-color: hsla(0, 0%, 100%, .075);
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform .5s cubic-bezier(.19, 1, .22, 1);
            width: 100%
        }

        .sf-social-item:hover:before {
            transform: scaleY(1)
        }

        .sf-social-item:hover .sf-social-item__icon {
            animation: socialicon .75s cubic-bezier(.19, 1, .22, 1) forwards
        }

        .sf-purple-mark {
            animation: shape 20s linear infinite;
            height: 5.3rem;
            width: 5.3rem
        }

        .sf-purple-mark.--2 {
            animation-direction: reverse
        }

        .sf-ring {
            border: 0;
            outline: 0
        }

        // .sf-rings:before {
        // 	--theme: #ff00fe;
        // 	background: radial-gradient(circle at center,#ff00fe 30%,rgba(107,0,255,.5) 50%,transparent 70%);
        // 	background: radial-gradient(circle at center,var(--theme) 30%,rgba(107,0,255,.5) 50%,transparent 70%);
        // 	content: "";
        // 	height: 200%;
        // 	left: -50%;
        // 	position: absolute;
        // 	top: -10rem;
        // 	width: 200%;
        // 	z-index: -1
        // }

        .sf-ring.--1,
        .sf-ring.--2 {
            animation: shape 100s linear infinite
        }

        .sf-ring.--2 {
            animation-direction: reverse
        }

        .sf-ring.--3,
        .sf-ring.--4 {
            animation: shape 100s linear infinite
        }

        .sf-ring.--4 {
            animation-direction: reverse
        }

        @keyframes socialicon {
            0% {
                opacity: 1;
                transform: translate(0)
            }

            25% {
                opacity: 0;
                transform: translate(0)
            }

            50% {
                opacity: 0;
                transform: translate(-100%, 100%)
            }

            to {
                opacity: 1;
                transform: translate(0)
            }
        }

        .nl input[data-v-5a04fd2e] {
            border: 1px solid #ff00fe
        }

        @media (min-width: 650px) {
            .nl input[data-v-5a04fd2e] {
                border-right: 0
            }
        }

        @keyframes shape {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(1turn)
            }
        }

        /****************/

        .spacer {
            padding-top: 300px;
        }

        .tds-layout.dx-fixed-background__layout {
            -webkit-padding-end: 10px;
            -webkit-padding-start: 10px;
            grid-template-areas: "main main";
            grid-template-columns: repeat(2, 1fr);
            padding-inline-end: 10px;
            padding-inline-start: 10px;
        }

        .dx-fixed-background {
            --dx-fixed-bg-section-height: 200vh;
        }

        .dx-fixed-background__container {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: var(--dx-fixed-bg-section-height);
            justify-content: center;
            overflow: clip;
            position: relative;
        }

        .dx-fixed-background__media {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 100vh;
            margin-top: -100vh;
            overflow: hidden;
            position: sticky;
            top: 0;
        }

        .dx-fixed-background__media-asset {
            height: 100vh;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
        }

        .tds-theme--replicant-v2 [class*=tds-clip-] {
            --clip-size: 20px;
            --top-left-normal: 0 0;
            --top-left-clip: 0 var(--clip-size), var(--clip-size) 0;
            --top-right-normal: 100% 0;
            --top-right-clip: calc(100% - var(--clip-size)) 0, 100% var(--clip-size);
            --bottom-right-normal: 100% 100%;
            --bottom-right-clip: 100% calc(100% - var(--clip-size)), calc(100% - var(--clip-size)) 100%;
            --bottom-left-normal: 0 100%;
            --bottom-left-clip: var(--clip-size) 100%, 0 calc(100% - var(--clip-size));
            --clip: polygon(var(--top-left, var(--top-left-normal)), var(--top-right, var(--top-right-normal)), var(--bottom-right, var(--bottom-right-normal)), var(--bottom-left, var(--bottom-left-normal)));
            -webkit-clip-path: var(--clip);
            clip-path: var(--clip);
        }

        .tds-theme--replicant-opaque-bg {
            -webkit-backdrop-filter: blur(var(--tds-blur--small));
            backdrop-filter: blur(var(--tds-blur--small));
            background: none;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .dx-fixed-background {
            --dx-fixed-bg-section-height: 200vh;
        }

        .dx-fixed-background__media-wrapper {
            height: var(--dx-fixed-bg-section-height);
            inset-inline-start: 0;
            position: absolute;
            top: 0;
            width: 100%;
            transform: scale(1);
            border-radius: 0;
        }

        .dx-fixed-background .dx-fixed-wrapper {
            padding: 24px;
            background: #fff;
            position: relative;
        }

        /****************************/
    </style>
</body>



</html>
