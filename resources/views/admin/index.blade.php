<x-layouts.admin>
    <x-slot:title>
        Admin | Beranda
        </x-slot>

        <div id="welcome">
            <div class="waviy">
                <span style="--i:1">W</span>
                <span style="--i:2">E</span>
                <span style="--i:3">L</span>
                <span style="--i:4">C</span>
                <span style="--i:5">O</span>
                <span style="--i:6">M</span>
                <span style="--i:7">E</span>
                <span style="--i:8">.</span>
            </div>
        </div>

        <style>
            #welcome {
                height: 70%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .waviy {
                position: relative;
            }

            .waviy span {
                position: relative;
                display: inline-block;
                font-size: 40px;
                color: rgb(55 65 81);
                text-transform: uppercase;
                animation: flip 2s infinite;
                animation-delay: calc(.2s * var(--i))
            }

            @keyframes flip {

                0%,
                80% {
                    transform: rotateY(360deg)
                }
            }
        </style>

        <script>
            document.getElementById('nav-home').classList.add('active');
        </script>
</x-layouts.admin>
