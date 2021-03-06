
<style>
        /**{*/
            /*margin: 0;*/
            /*padding: 0;*/
            /*box-sizing: border-box;*/
        /*}*/

        .add-cartttt {
            /*height: 100vh;*/
            /*background: #eee;*/
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .add-cart-animation {
            width: 390px;
            height: 50px;
            border: 1px solid #333;
            font-family: 'Cinzel', serif;
            font-size: 20px;
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 0;
            transition: 1s;
        }

        .add-cart-animation::before, .btn::after {
            position: absolute;
            background: #eee;
            z-index: -1;
            transition: 1s;
            content: '';
        }

        .add-cart-animation::before {
            height: 50px;
            width: 390px;
        }

        .add-cart-animation::after {
            width: 390px;
            height: 30px;
        }

        .add-cart-animation {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .add-cart-animation:hover::before {
            width: 0px;
            background: rosybrown;
        }

        .add-cart-animation:hover::after {
            height: 0px;
            background: rosybrown;
        }

        .add-cart-animation:hover {
            background: rosybrown;
        }

    </style>
<div class="add-cartttt">
    <button type="submit" class="btn btn-info add-cart-animation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>

        <b>{{$cart->text}}</b>
    </button>
</div>
