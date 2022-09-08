<?php
$transaction = [
    [
        ["identifier"=>"61e96c8f70ab5","timestamp"=>"1642002067","price"=>"545","product_name"=>"Milk","quantity"=>"22"],
        ["identifier"=>"61e96c8f70ac2", "timestamp"=>"1642000926", "price"=>"153", "product_name"=>"Porridge","quantity"=>"62"],
        ["identifier"=>"61e96c8f70ac1","timestamp"=>"1642001767","price"=>"919","product_name"=>"Panda", "quantity"=>"76"],
        ["identifier"=>"61e96c8f70ac3","timestamp"=>"1642001378","price"=>"370", "product_name"=> "Milk","quantity"=>"85"],
    ],
    [
        ["identifier"=>"61e96c8f70ac0","timestamp"=>"1642001668","price"=>"880", "product_name"=>"Nuts","quantity"=>"10"],
        ["identifier"=>"61e96c8f70abe","timestamp"=>"1642001965","price"=>"153","product_name"=>"Coca-cola","quantity"=>"70"]
    ],
    [
        ["identifier"=>"61e96c8f70ac5","timestamp"=>"1642001472","price"=>"763","product_name"=>"Water","quantity"=>"11"]
    ],
    [
        ["identifier"=>"61e96c8f70ac4","timestamp"=>"1642001603","price"=>" 451","product_name"=>"Coca-cola","quantity"=>"18"],
        ["identifier"=>"61e96c8f70ac3","timestamp"=>"1642001378","price"=>"370","product_name"=>"Milk","quantity"=>"85"],
        ["identifier"=>"61e96c8f70ac1","timestamp"=>"1642001767","price"=>"919","product_name"=>"Panda","quantity"=>"76"],
        ["identifier"=>"61e96c8f70ac0","timestamp"=>"1642001668","price"=>"880","product_name"=>"Nuts","quantity"=>"10"],
        ["identifier"=>"61e96c8f70ac2","timestamp"=>"1642001602","price"=>"150","product_name"=>"Porridge","quantity"=>"62"]
    ],
    [
        ["identifier"=>"61e96c8f70ac0","timestamp"=>"642001602","price"=>"880","product_name"=>"Nuts","quantity"=>"10"],
        ["identifier"=>"61e96c8f70ab5","timestamp"=>"1642002067","price"=>"55","product_name"=>"Milk","quantity"=>"22"]
    ],
    [
        ["identifier"=>"61e96c8f70ac9","timestamp"=>"1642001378","price"=>"99999","product_name"=>"capybara","quantity"=>"99"]
    ],
    [
        ["identifier"=>"61e96c8f70ac1","timestamp"=>"1642001767","price"=>"919","product_name"=>"Panda","quantity"=>"76"],
        ["identifier"=>"61e96c8f70ac2","timestamp"=>"1642000926","price"=>"153","product_name"=>"Porridge","quantity"=>"62"],
        ["identifier"=>"61e96c8f70ac4","timestamp"=>"1642001603","price"=>"451","product_name"=>"Coca-cola","quantity"=>"18"],
        ["identifier"=>"61e96c8f70ac5","timestamp"=>"1642001472","price"=>"763","product_name"=>"Water","quantity"=>"11"]
    ],
    [
        ["identifier"=>"61e96c8f70ab5","timestamp"=>"1642002067","price"=>"Milk","product_name"=>"545","quantity"=>"22"],
        ["identifier"=>"61e96c8f70abe","timestamp"=>"1642001965","price"=>"333","product_name"=>"Coca-cola","quantity"=>"70"]
    ],
    [
        ["identifier"=>"61e96c8f70ac0","timestamp"=>"1642001668","price"=>"880","product_name"=>"Nuts","quantity"=>"10"],
        ["identifier"=>"61e96c8f70ac1","timestamp"=>"1642001767","price"=>"919","product_name"=>"Panda","quantity"=>"76"],
        ["identifier"=>"61e96c8f70ac2","timestamp"=>"1642000926","price"=>"656","product_name"=>"Porridge","quantity"=>"62"]
    ],
    [
        ["identifier"=>"61e96c8f70ac3","timestamp"=>"1642001378","price"=>"Milk","product_name"=>"370","quantity"=>"85"],
        ["identifier"=>"61e96c8f70ac4","timestamp"=>"1642001603","price"=>"451","product_name"=>"Coca-cola","quantity"=>"18"]
    ],
    [
        ["identifier"=>"61e96c8f70ac5","timestamp"=>"1642001472","price"=>"763","product_name"=>"Water","quantity"=>"11"],
        ["identifier"=>"61e96c8f70ac9","timestamp"=>"1642001378","price"=>"99999","product_name"=>"capybara","quantity"=>"99"],
        ["identifier"=>"61e96c8f70ac4","timestamp"=>"1642001603","price"=>"434","product_name"=>"Coca-cola","quantity"=>"87"],
        ["identifier"=>"61e96c8f70ac0","timestamp"=>"1642001668","price"=>"880","product_name"=>"Nuts","quantity"=>"11"]
    ],
    [
        ["identifier"=>"61e96c8f70ac2","timestamp"=>"1642000926","price"=>"656","product_name"=>"Porridge","quantity"=>"76"],
        ["identifier"=>"61e96c8f70ac1","timestamp"=>"1642001767","price"=>"919","product_name"=>"Panda","quantity"=>"76"]
    ]
];



$list=$_POST['transaction'];
echo json_encode($transaction[$list-1]);

//echo '<pre>';
//print_r($transaction[$list-1]);
