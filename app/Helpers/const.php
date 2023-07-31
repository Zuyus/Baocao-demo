<?php
//Activity
const ACTIVE = 1;
const INACTIVE = 0;

#orders

const ORDER_PENDING = 1;
const ORDER_PROCESSING = 2;
const ORDER_SHIPPED = 3;
const ORDER_DELIVERED = 4;
const ORDER_CANCELLED = 5;
const ORDER_RETURN = 6;
const ORDER_NOT_PAYMENT_YET = 7;
const ORDER_DELIVERED_FAILED = 8;


#Payment status

const PAYMENT_SUCCESS = 1;
const PAYMENT_CANCELLED = 2;
const PAYMENT_FAILED = 3;
const PAYMENT_ERROR = 4;
const PAYMENT_PENDING = 5;

#Payment method
const COD = 'COD';
const STRIPE = 'STRIPE';
const SSLCOMMERZ = 'SSLCOMMERZ';
const PAYPAL = 'PAYPAL';
const RAZORPAY = 'RAZORPAY';
const BANK_TRANSFER = 'BANK_TRANSFER';

#Files
const IMG_PATH = 'uploaded_files/';
const IMG_LOGO_PATH = 'uploaded_files/logo/';
const IMG_FAVICON_PATH = 'uploaded_files/favicon/';
const IMG_PRELOADER_PATH = 'uploaded_files/preloader/';
const IMG_PRODUCT_PATH = 'uploaded_files/product_image/';
const IMG_FOOTER_PATH = 'uploaded_files/footer/';
const IMG_ADVERTISE_PATH = 'uploaded_files/advertise/';
const IMG_PROFILE_PIC_PATH = 'uploaded_files/admin_profile/';
const PRODUCT_DIGITAL_PRODUCT = 'uploaded_files/product_image/digital_items/';
const IMG_PAYMENT_GATEWAY = 'uploaded_files/payment-gateway/';
const IMG_LANGUAGE = 'uploaded_files/language/';
const IMG_TESTIMONIAL = 'uploaded_files/testimonial/';

#Product Types
const PRODUCT_PHYSICAL = 1;
const PRODUCT_DIGITAL = 2;
const PRODUCT_LICENSE = 3;
const PRODUCT_AFFILIATE = 4;
