<?php
if (is_array($list_flOne)) {
    extract($list_flOne);
}
// $images =  $image_path . $Image;
// $date = date("d/m/Y");
$formattedDate = date("d/m/Y", strtotime($Flight_date));
$Departure_Times = date("H:i", strtotime($Departure_Time));
$Arrival_Times = date("H:i", strtotime($Arrival_Time));
?>
<style>
    .dtc-search {
        width: 100%;
        position: relative;
        font-family: Arial !important;
        font-size: 14px;
        background-color: #fff;
        color: #000 !important;
    }

    .dtc-result {
        width: 100%;
        position: relative;
        margin: auto;
        display: inline;
        font-size: 14px;
        font-family: Arial !important;
        color: #000 !important;
    }

    .dtc-color-theme {
        background-color: #28a745 !important;
    }

    .dtc-color-border {
        border-color: #28a745 !important;
    }

    .dtc-color-focus {
        color: #fc7700 !important;
    }

    .dtc-color-focus:hover {
        color: #28a745 !important;
    }

    .dtc-color-text {
        color: #28a745;
    }

    .dtc-color-button {
        background-color: #00A94F !important;
    }

    .dtc-color-button:hover {
        background-color: #fc7700 !important;
    }

    .dtc-flight-info .dtc-radio-mark::after {
        background: #28a745;
    }

    .dtc-checkbox .dtc-checkbox-mark::after {
        border: solid #28a745;
    }

    .dtc-checkbox .dtc-radio-mark::after {
        border: 2px solid #28a745;
    }

    /* end -------------------------------------------------*/

    /* step */
    ul.dtc-step {
        width: 100%;
        height: 30px;
        flex: 1 !important;
        display: flex !important;
        font-size: 13px !important;
        margin-bottom: 10px !important
    }

    ul.dtc-step li:first-child {
        text-align: center;
        width: 33.33%;
        cursor: pointer;
        color: #333;
        background-image: none;
        padding-left: 8px !important;
    }

    ul.dtc-step li {
        text-align: center;
        width: 33.33%;
        cursor: pointer;
        color: #333;
        background: #ddd url(https://plugin.datacom.vn/Resources/images/Icon/right-arrow.png) no-repeat left center;
        background-position: -8px;
        background-size: 30px;
        line-height: 30px;
        align-items: center;
        display: flex;
        margin: 0px !important;
        padding: 0px !important;
    }

    ul.dtc-step li.dtc-active {
        color: #FFF;
    }

    ul.dtc-step li span {
        padding-left: 10px;
        color: #FFF;
        font-size: 16px;
    }

    ul.dtc-step .dtc-arrow {
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #DDD;
        margin-left: -1px;
    }

    ul.dtc-step .dtc-arrow-active {
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #28a745;
        margin-left: -1px;
    }

    ul.dtc-step .dtc-circle-first {
        width: 22px;
        height: 22px;
        line-height: 18px;
        border-radius: 50%;
        text-align: center;
        font-size: 14px;
        border: 2px solid #FFF;
        color: #FFF;
    }

    ul.dtc-step .dtc-circle {
        width: 22px;
        height: 22px;
        line-height: 18px;
        border-radius: 50%;
        text-align: center;
        font-size: 14px;
        border: 2px solid #FFF;
        color: #FFF;
        margin-left: 15px;
    }

    /*---right box--- */
    .dtc-container {
        width: 320px;
        margin-left: 20px;
    }

    #dtc-box-wraper {
        width: 320px;
    }

    .dtc-box-temp {
        width: 100%;
        position: relative;
        background-color: #FFF;
        margin-bottom: 20px;
        -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
    }

    .dtc-box-temp ul {
        padding: 12px 0px !important;
    }

    .dtc-box-temp ul li {
        margin: 0px;
        padding: 8px 10px;
        border-top: 1px dotted #eee;
        display: flex;
        float: unset !important;
    }

    .dtc-box-temp ul li:first-child {
        border-top: none;
    }

    .dtc-base-header {
        padding: 8px 10px;
        color: #FFF;
        font-size: 18px !important;
    }

    .dtc-base-header span {
        font-size: 16px !important;
        font-weight: 400;
        padding-left: 3px;
    }

    .dtc-base-label {
        background: #f7f7f7;
        padding: 10px;
        display: flex;
        align-items: center;
    }

    .dtc-base-label span {
        font-size: 16px !important;
        flex: 1;
        color: #000;
        text-align: left;
    }

    .dtc-base-label i {
        font-size: 20px;
    }

    .dtc-base-content {
        padding: 0px;
        margin: 0px;
        background-color: #FFF;
        margin-bottom: 10px;
        border-top: none;
        border-radius: 0px 0px 3px 3px;
    }

    .dtc-base-content label {
        width: 100% !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 22px !important;
        display: flex !important;
    }

    #dtc-base-cart {
        margin-bottom: 0px;
    }

    #dtc-base-cart span {
        font-size: 14px;
        min-width: 60px;
    }

    #dtc-base-cart .dtc-cart-time {
        flex: 1;
        padding-left: 30px;
    }

    #dtc-base-cart img {
        max-width: 60px !important;
        max-height: 20px !important;
    }

    ul.dtc-cart-sumary {
        padding: 0px !important;
        margin: 0px !important;
        list-style: none;
    }

    ul.dtc-cart-sumary li {
        margin: 0px;
        padding: 8px 10px;
        display: flex;
    }

    ul.dtc-cart-sumary li:first-child span {
        flex: 1;
        font-weight: 600 !important;
        font-size: 16px !important;
    }

    ul.dtc-cart-sumary li:last-child {
        align-items: center;
        background-color: #f6f6f6;
        padding: 6px 10px;
        border-bottom: none;
    }

    ul.dtc-cart-sumary li b {
        font-size: 16px !important;
    }

    /* main */
    #dtc-result-form {
        position: relative;
        margin: auto;
        width: 100%;
    }

    .dtc-wraper-body {
        display: flex;
    }

    .dtc-content {
        flex: 1;
        background-color: transparent;
    }

    .dtc-flight {
        width: 100%;
        position: relative;
    }

    .dtc-flight-list {
        margin-bottom: 50px;
    }

    .dtc-flight-header {
        height: auto;
        width: 100%;
        display: flex;
        color: White;
        padding: 10px;
    }

    .dtc-flight-header .dtc-icon {
        width: 46px;
        height: 46px;
        border: 1px solid #FFF;
        border-radius: 50%;
        align-items: center;
        text-align: center;
        justify-content: center;
        padding-top: 8px;
    }

    .dtc-flight-header .dtc-icon i {
        font-size: 30px;
    }

    .dtc-flight-title {
        flex: 1;
        padding-left: 16px;
        text-align: left;
    }

    .dtc-flight-title p {
        color: #FFF !important;
    }

    .dtc-flight-title-mobile {
        flex: 1;
        display: none;
    }

    .dtc-flight-title span,
    .dtc-flight-title-mobile span {
        font-weight: 300 !important;
        margin: 0px !important;
        font-size: 12px !important;
        font-style: italic;
    }

    #dtc-focus-return i,
    #dtc-focus-departure i {
        font-size: 30px !important;
    }

    #dtc-flight-return {
        padding-top: 20px;
    }

    ul.dtc-flight-date {
        min-height: 50px;
        position: relative;
        width: 100%;
        margin: 0px;
        padding: 0px;
        list-style-type: none !important;
        display: flex !important;
        background: #FFF none repeat scroll 0 0;
        border-bottom: 0.5px solid #eee;
    }

    ul.dtc-flight-date li {
        width: 100%;
        text-align: center;
        border-left: 0.5px solid #ccc;
        display: grid;
        margin: 0px;
        padding: 5px 0px 0px 0px;
        cursor: pointer;
    }

    ul.dtc-flight-date li:first-child {
        border-left: 0.5px solid #eee;
    }

    ul.dtc-flight-date li:last-child {
        border-right: 0.5px solid #eee;
    }

    ul.dtc-flight-date li span {
        font-size: 12px;
    }

    ul.dtc-flight-date li.dtc-date-active {
        background-color: #eee;
    }

    span.dtc-date-day {
        font-size: 14px !important;
        font-weight: 600 !important;
    }

    span.dtc-date-price {
        height: 28px;
        line-height: 28px;
        background: none;
        font-size: 13px !important;
        font-weight: 300 !important;
    }

    span.dtc-align-right {
        text-align: right;
    }

    span.dtc-cart-people {
        flex: 1;
        text-align: left;
        font-size: 14px;
    }

    span.dtc-cart-quanlity {
        flex: 1;
        font-size: 14px;
    }

    span.dtc-cart-summary-title {
        flex: 1;
        font-size: 16px !important;
        font-weight: 500;
        padding-left: 5px;
        margin-top: 3px;
    }

    span.dtc-cart-price {
        font-size: 14px;
        color: #fc7700;
        text-align: right;
    }

    span.dtc-cart-total {
        font-weight: 500;
        color: #fc7700;
        text-align: right;
        font-size: 18px !important;
    }

    .dtc-flight-item {
        position: relative;
        padding: 0px !important;
        margin: 8px 0px;
        align-items: center;
        background-color: #FFF;
        border: 0.5px solid #eee;
    }

    .dtc-flight-item.select {
        margin-top: 10px !important;
    }

    .dtc-flight-wraper {
        display: flex;
        width: 100%;
        align-items: center;
    }

    .dtc-flight-item:hover,
    .dtc-flight-fare:hover {
        background-color: #f7f7f7;
    }

    .dtc-flight-info img {
        max-height: 30px;
        max-width: 80px;
        margin: 0px 10px;
    }

    .dtc-flight-info.select {
        margin-top: 10px;
        border: 1px solid #f5f5f5;
        -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
    }

    .dtc-flight-city {
        margin: 0px !important;
        font-weight: 500 !important;
        font-size: 14px !important;
        color: #333;
    }

    .dtc-flight-city span {
        padding-left: 6px;
        color: #B1B1B1 !important;
        font-weight: 500 !important;
    }

    .dtc-flight-time {
        font-size: 24px !important;
        font-weight: 500 !important;
        margin: 0px !important;
        padding: 0px !important;
    }

    .dtc-flight-price {
        margin: 0px !important;
        font-size: 20px;
        color: #fb7604 !important;
        padding: 0px 10px !important;
        font-weight: 500 !important;
        display: inline-block;
        line-height: 20px;
        min-width: 140px;
        text-align: center;
    }

    .dtc-flight-price span {
        margin: 0px !important;
        font-size: 12px !important;
        color: #777 !important;
        font-weight: 300 !important;
    }

    .dtc-flight-info button {
        position: relative;
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/next.png);
        background-repeat: no-repeat;
        background-position: 55px center;
        background-size: 12px;
        padding: 7px 30px 7px 15px;
        margin: 0px;
        border-radius: 3px;
        display: inline-block;
        white-space: nowrap;
        border: 0px;
        font-size: 14px;
        color: #FFF !important;
        font-weight: 300;
        line-height: 20px;
        text-transform: none;
    }

    .dtc-flight-info button:hover {
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/next.png);
        background-repeat: no-repeat;
        background-position: 60px center;
        background-size: 14px;
    }

    .dtc-flight-numb {
        font-size: 14px;
        font-weight: 600 !important;
    }

    .dtc-flight-line {
        position: relative;
        margin: 5px 0px;
    }

    .dtc-flight-detail {
        cursor: pointer;
        text-decoration: none;
        font-size: 13px !important;
        text-align: center;
        width: 100%;
    }

    ul.dtc-flight-info li:last-child a.dtc-flight-detail {
        font-size: 16px !important;
    }

    .dtc-flight-detail:hover {
        text-decoration: none;
    }

    a.dtc-flight-detail::after {
        content: '\f107';
        font-family: FontAwesome;
        font-weight: 100;
        padding-right: 5px;
        line-height: 17px;
        padding-left: 6px;
    }

    a.dtc-flight-active::after {
        content: "";
        font-family: FontAwesome;
        font-weight: 100;
        padding-right: 5px;
        line-height: 17px;
        padding-left: 6px;
    }

    .dtc-flight-fly {
        width: 0px;
        position: relative;
        -webkit-transition: width 1s;
        transition: width 1s;
        height: 1px;
        background: #eaa15f;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dtc-line {
        width: 100%;
    }

    .dtc-flight-fly::before {
        content: "\f111";
        font-family: FontAwesome;
        font-size: 7px;
        position: absolute;
        left: 0px;
        color: #fc7700;
    }

    .dtc-flight-fly::after {
        content: "\f0fb";
        font-family: FontAwesome;
        font-size: 16px;
        position: absolute;
        right: 0px;
        color: #fc7700;
    }

    .dtc-flight-box-detail {
        background-color: #eee;
        overflow: hidden;
        transition: height 1s;
        display: none;
        margin: 0px !important;
        padding: 6px 6px 0px 6px !important;
    }

    .dtc-box-item {
        background: #FFF;
        padding: 10px;
        margin-bottom: 6px !important;
    }

    .dtc-box-item img {
        max-height: 30px;
        max-width: 80px;
        margin: 0px 10px;
    }

    .dtc-box-item p {
        font-size: 16px !important;
        padding: 10px 0px 3px 0px !important;
        margin-bottom: 10px !important;
        border-bottom: 1px solid #eee;
        color: #000;
    }

    /* international */
    .dtc-fare-item {
        position: relative;
        padding: 0px !important;
        border-radius: 1px;
        background: #FFF;
        margin-top: 10px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        border: 2px solid;
        border-bottom: 0px !important;
    }

    .dtc-flight-selected .dtc-fare-item {
        border: 0px !important;
        margin: 0px !important;
    }

    .dtc-fare-wraper {
        position: relative;
        padding: 0px !important;
        padding-bottom: 1px !important;
        background-color: #FFF;
        border-radius: 0px 0px 3px 3px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
    }

    .dtc-fare-wraper .dtc-fare-item {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .dtc-box-option p {
        font-size: 16px !important;
        margin: 0px !important;
        padding: 10px 0px 3px 0px;
        font-weight: 300 !important;
        margin-bottom: 10px !important;
        border-bottom: 1px solid #eee;
    }

    .dtc-box-option {
        background-color: #FFF;
        min-height: 20px;
        padding: 8px 10px;
    }

    .dtc-box-option-header {
        padding: 10px 0px;
        font-size: 16px;
        font-weight: 600;
        border-bottom: 1px solid #eee;
    }

    .dtc-box-option ul {
        margin: 6px 0px !important;
    }

    .dtc-box-option ul li {
        font-size: 14px;
        padding: 3px;
    }

    .dtc-fare-box-rule ul li {
        margin-left: 20px;
        list-style: disc;
    }

    .dtc-rule-content {
        background-color: #FFF;
        max-height: 250px;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
    }

    .dtc-fare-header {
        height: 40px;
        padding: 0px 10px;
        background: #f5f5f5;
        font-size: 16px;
        color: #333;
        display: flex;
        align-items: center;
        border: 0;
    }


    .dtc-fare-header.main {
        background-color: #28a745;
    }

    .dtc-fare-header label {
        flex: 1;
        margin: 0px !important;
        color: #333;
        font-size: 16px !important;
        font-weight: 600 !important;
    }

    .dtc-fare-header span {
        font-size: 14px;
        font-style: italic;
    }

    .dtc-price {
        display: flex;
        background-color: #FFF;
        padding: 0px 10px 10px 10px;
        font-size: 18px !important;
        font-weight: 600;
        margin: 0px;
        align-items: center;
    }

    .dtc-price span {
        padding-left: 10px;
        font-size: 20px !important;
        font-weight: 600 !important;
        flex: 1;
        text-align: right;
    }

    .dtc-fare-header span.dtc-fare-close {
        color: #ED3229;
        font-size: 22px !important;
        cursor: pointer;
    }

    .dtc-flight-fare {
        position: relative;
        padding: 5px;
        align-items: center;
        background-color: #FFF;
    }

    .dtc-flight-fare .dtc-flight-info {
        border: 0.5px solid #eee;
        border-radius: 3px;
    }

    .dtc-flight-segment {
        font-size: 13px;
        font-weight: 400;
        color: #28a745;
    }

    .dtc-fare-footer {
        display: flex;
        flex: 1;
        color: #FFF;
        border-radius: 0px;
    }

    .dtc-fare-footer:hover {
        background-color: #28a745 !important;
    }

    .dtc-fare-footer ul {
        width: 100%;
        list-style: none;
        margin: 0px;
        padding: 0px;
        display: flex;
        align-items: center;
    }

    .dtc-fare-footer ul li {
        border-left: 0.5px solid #eee;
        height: 46px;
        align-items: center;
        display: flex;
        padding: 0px 20px;
    }

    .dtc-footer {
        padding: 6px 10px;
        background-color: #FFF;
        align-items: center;
        display: flex;
        flex: 1;
        color: #FFF;
        border-radius: 0px 0px 3px 3px;
    }

    .dtc-fare-footer a {
        color: #FFF;
        text-decoration: none;
        cursor: pointer;
        font-size: 14px !important;
        margin: 0px;
        padding: 0px;
        display: inline;
    }

    .dtc-fare-footer ul li a:hover {
        color: #FFFF00;
    }

    .dtc-fare-footer ul li:first-child {
        border-left: none !important;
    }

    .dtc-fare-footer ul li:last-child {
        flex: 1;
        border-left: none !important;
        padding: 0px 12px !important;
    }

    .dtc-fare-footer ul li div {
        width: 100%;
        text-align: right;
    }

    .dtc-fare-back {
        flex: 1;
    }

    .dtc-fare-rule {
        display: grid;
        width: 100%;
        align-items: center;
    }

    .dtc-rule-active,
    .dtc-detail-active {
        color: #FFFF00;
    }

    .dtc-fare-rule ul {
        margin: 0px;
        padding: 5px 20px !important;
        list-style: disc !important;
    }

    .dtc-fare-rule ul li {
        font-size: 14px !important;
        line-height: 1.5;
        list-style: disc !important;
    }

    .dtc-fare-price {
        font-size: 14px;
        font-weight: 500;
        color: #f6f6f6;
        padding: 3px 0px;
    }

    .dtc-fare-price span {
        font-weight: 500 !important;
        font-size: 24px !important;
        color: #FFFF00;
        padding-left: 10px;
    }

    #dtc-flight-selected .dtc-fare-footer {
        padding: 6px 10px;
        background-color: #FFF;
        align-items: center;
    }

    #dtc-flight-selected button {
        position: relative;
        border-radius: 3px;
        display: inline-block;
        white-space: nowrap;
        border: 0px;
        color: #FFF !important;
        line-height: unset;
    }

    #dtc-flight-selected .dtc-fare-footer a {
        color: #fc7700 !important;
        font-size: 16px !important;
        display: block !important;
    }

    #dtc-flight-selected .dtc-fare-footer a:hover {
        color: #333 !important;
    }

    #dtc-flight-selected .dtc-fare-price span {
        color: #fc7700;
    }

    #dtc-flight-selected button:hover {
        background: #fc7700;
    }

    #dtc-flight-selected {
        background-color: transparent !important;
        padding: 0px;
        margin: 0px;
    }

    #dtc-flight-selected .dtc-title {
        font-size: 16px !important;
        padding: 8px 10px;
        margin: 0px;
        font-weight: 500;
        background: #eee;
        border-left: 5px solid;
        text-align: left;
    }

    #dtc-flight-selected ul.dtc-flight-info {
        webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-radius: 3px;
    }

    #dtc-flight-selected ul.dtc-flight-info li {
        text-align: center;
        margin: auto;
        padding: 0px 3px !important;
    }

    #dtc-flight-selected .dtc-flight-city {
        margin: 0px;
        font-weight: 600;
        font-size: 12px;
        color: #333;
        padding: 0px;
        margin: 0px;
    }

    #dtc-flight-selected .dtc-flight-time {
        font-size: 22px !important;
        font-weight: 500 !important;
        margin: 0px !important;
        padding: 0px !important;
    }

    #dtc-flight-selected .dtc-flight-date {
        font-size: 14px !important;
        color: #333;
        padding: 0px !important;
        margin: 0px !important;
    }

    .dtc-book-status {
        padding: 10px;
        text-align: center;
        font-size: 16px;
        color: #28a745;
    }

    .dtc-book-status span {
        font-size: 20px !important;
        font-family: "Arial, Helvetica, sans-serif" !important;
    }

    .dtc-book-alert {
        padding: 10px !important;
        border-top: 0.5px solid #ddd;
        font-size: 12px !important;
        color: red !important;
    }

    button.dtc-btn-return {
        padding: 7px 26px 7px 10px !important;
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/return.png) !important;
        background-position: 60px center !important;
        background-repeat: no-repeat !important;
        background-size: 12px !important;
        font-size: 12px !important;
        border-radius: 3px;
    }

    button.dtc-btn-return:hover {
        border-radius: 3px;
    }

    button.dtc-btn-booking,
    button.dtc-btn-payment,
    button.dtc-btn-back {
        padding: 7px 20px;
        border-radius: 3px;
        margin: 0px !important;
        line-height: unset;
    }

    button.dtc-fare-button {
        position: relative;
        background: #FFF url(https://plugin.datacom.vn/Resources/images/Icon/next1.png) no-repeat 65px center;
        background-size: 12px;
        padding: 7px 30px 7px 20px;
        margin: 0px;
        border-radius: 3px;
        display: inline-block;
        white-space: nowrap;
        font-size: 16px;
        color: #28a745 !important;
        border: none !important;
    }

    button.dtc-fare-button:hover {
        background: #fc7700 url(https://plugin.datacom.vn/Resources/images/Icon/next.png) no-repeat 68px center;
        background-size: 14px;
        color: #FFF !important;
    }

    ul.dtc-box-sort {
        margin: 0px !important;
        padding: 0px !important;
        background: #eee;
        list-style: none !important;
        display: flex;
    }

    ul.dtc-box-sort li {
        flex: 1;
        padding: 5px;
        margin: 0px;
        text-align: center;
        cursor: pointer;
    }

    ul.dtc-box-sort li:last-child {
        background: url(https://plugin.datacom.vn/Resources/images/Icon/chart.png) no-repeat right center;
        background-size: 20px;
        margin-right: 8px;
        max-width: 80px;
    }

    ul.dtc-box-sort span {
        color: #080808;
        font-size: 12px !important;
        font-weight: 400 !important;
    }

    ul.dtc-box-sort span:hover {
        color: #fc7700;
    }

    ul.dtc-box-sort .dtc-asc {
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/sort.png);
        background-position: right -20px;
        background-repeat: no-repeat;
        padding-right: 14px;
        font-weight: 600 !important;
    }

    ul.dtc-box-sort .dtc-desc {
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/sort.png);
        background-position: right 1px;
        background-repeat: no-repeat;
        padding-right: 14px;
        font-weight: 600 !important;
    }

    ul.dtc-box-item-flight {
        flex: 1;
        margin-top: 10px !important;
        padding: 3px 0px !important;
        display: flex;
        border: 1px solid #eee;
    }

    ul.dtc-box-item-fare {
        margin: 0px;
        padding: 3px 0px;
        list-style: none;
        display: flex;
        flex: 1;
        border-bottom: 1px dotted #eee;
    }

    ul.dtc-box-item-flight li {
        flex: 1;
        margin: 0px;
        padding: 10px 0px;
        display: grid;
    }

    ul.dtc-box-item-flight li:first-child {
        display: block;
        height: 60px;
        margin-top: 20px;
        text-align: center;
    }

    ul.dtc-box-item-flight li:first-child p {
        font-size: 12px !important;
        margin: 0px !important;
        text-decoration: none !important;
        border: none !important;
        padding: 0px !important;
    }

    ul.dtc-box-item-flight li span {
        display: inline-block !important;
        max-width: 100%;
        font-weight: 300 !important;
        font-size: 14px !important;
        margin: 0px !important;
        padding: 0px !important;
    }

    #dtc-result b {
        color: #333 !important;
    }

    ul.dtc-box-item-fare li {
        flex: 1;
        padding: 3px 0px !important;
        margin: 0px !important;
        display: grid;
        text-align: center;
    }

    ul.dtc-box-item-fare li:first-child {
        text-align: left;
    }

    ul.dtc-box-item-fare li:last-child {
        text-align: right;
    }

    ul.dtc-box-item-fare.dtc-total {
        font-size: 18px;
        padding: 6px 0px !important;
        color: #fc7700;
        border-bottom: none;
    }

    ul.dtc-flight-info {
        padding: 8px 0px !important;
        display: flex;
        flex: 1;
        box-shadow: none;
        -moz-box-shadow: none;
        webkit-box-shadow: none;
    }

    .dtc-flight-main ul.dtc-flight-info {
        box-shadow: none;
    }

    ul.dtc-flight-info-mobile {
        display: none;
    }

    ul.dtc-flight-info li {
        flex: 1;
        text-align: center;
        margin: auto;
        padding: 0px 5px;
        line-height: unset;
    }

    ul.dtc-flight-info li:nth-child(3n+3) {
        max-width: 110px;
    }

    ul.dtc-flight-info li:last-child {
        text-align: right !important;
    }

    ul.dtc-flight-info li:first-child,
    ul.dtc-flight-info li:last-child {
        flex: none;
        text-align: center;
        margin: auto;
        padding: 0px 5px;
        min-width: 120px;
    }

    ul.dtc-flight-info p {
        border-bottom: none !important;
        color: #000;
    }

    ul.dtc-flight-info li:first-child p {
        font-size: 12px !important;
        margin: 0px !important;
        font-weight: 300 !important;
    }

    ul.dtc-flight-info li label {
        display: inline !important;
    }

    /* pax infor */
    ul.dtc-pax-info {
        padding: 0px !important;
        margin: 0px !important;
        list-style-type: none;
    }

    ul.dtc-pax-info li {
        width: 100%;
        padding: 0px;
        align-items: center;
        margin: 10px 0px;
        border: 0.5px solid #ccc;
        border-radius: 3px;
    }

    ul.dtc-pax-info li:first-child {
        font-weight: 600;
        font-size: 16px;
        border: none;
        display: flex;
        align-items: center;
        background: #FFF;
        color: #000;
    }

    .dtc-pax-row {
        display: flex;
        background: #f9f9f9;
        padding: 6px 3px;
        align-items: center;
        font-size: 16px !important;
        border-radius: 3px 3px 0px 0px;
    }

    .dtc-pax-baggage {
        padding: 6px 10px;
        align-items: center;
        background-color: #FFF;
        display: flex;
        border-top: 0.5px solid #eee;
        border-radius: 0px 0px 3px 3px;
    }

    .dtc-pax-baggage img {
        padding-right: 10px;
        width: 80px;
    }

    ul.dtc-pax-info .dtc-pax-select {
        flex: 1;
        display: flex;
        height: 35px;
        background: #fff;
        color: #4d4d4d;
        border: 1px solid #d9d9d9;
        padding: 0;
        border-radius: 1px;
        width: 100%;
    }

    ul.dtc-pax-info li .dtc-pax-cus {
        width: 20%;
        padding: 0px 5px;
        text-align: center;
        color: #000;
    }

    ul.dtc-pax-info li .dtc-pax-sex {
        width: 14%;
        padding: 0px 5px;
        text-align: center;
    }

    ul.dtc-pax-info li .dtc-pax-firstname {
        width: 18%;
        padding: 0px 5px;
        text-align: center;
    }

    ul.dtc-pax-info li .dtc-pax-lastname {
        width: 28%;
        padding: 0px 5px;
        text-align: center;
    }

    ul.dtc-pax-info li .dtc-pax-bir {
        width: 20%;
        padding: 0px 5px;
        text-align: center;
    }

    ul.dtc-pax-info li .dtc-pax-cus.adt {
        background: url(https://plugin.datacom.vn/Resources/Images/Icon/adt.png) no-repeat left center;
        background-size: 26px;
        padding-left: 26px;
        text-align: left;
    }

    ul.dtc-pax-info li .dtc-pax-cus.chd {
        background: url(https://plugin.datacom.vn/Resources/Images/Icon/chd.png) no-repeat left center;
        background-size: 24px;
        padding-left: 26px;
        text-align: left;
    }

    ul.dtc-pax-info li .dtc-pax-cus.inf {
        background: url(https://plugin.datacom.vn/Resources/Images/Icon/inf.png) no-repeat -5px center;
        background-size: 30px;
        padding-left: 26px;
        text-align: left;
    }

    ul.dtc-pax-info .dtc-pax-service {
        background: #eee;
    }

    .dtc-pax-note {
        border-top: 1px solid #eee;
        padding: 12px 0px;
    }

    .dtc-pax-note ul {
        min-height: 80px;
    }

    .dtc-pax-note span {
        font-weight: 500;
        font-size: 14px;
        font-style: italic;
        color: #ED3229;
    }

    .dtc-pax-note span i {
        color: red;
    }

    .dtc-pax-note ul li {
        font-size: 13px;
        margin-left: 10px;
    }

    .dtc-pax-deposit {
        flex: 1;
        padding: 0px 5px;
        display: flex;
    }

    .dtc-pax-deposit p {
        font-weight: 500 !important;
        font-size: 14px !important;
        color: #333 !important;
        padding-top: 8px !important;
        width: 60%;
        margin: 0px;
        border: 0px !important;
    }

    .dtc-pax-deposit .dtc-input-group {
        width: 40% !important;
    }

    /* payment method */
    .dtc-invoice-title {
        display: flex;
        align-items: center;
        font-size: 16px;
        font-weight: 500;
    }

    ul.dtc-payment {
        margin: 0px !important;
        padding: 10px 0px !important;
        list-style: none;
        font-size: 16px;
    }

    ul.dtc-payment li {
        padding: 5px;
        margin-bottom: 10px;
        background: #f6f6f6;
        float: unset !important;
    }

    ul.dtc-payment li label {
        font-size: 14px !important;
        font-weight: 500 !important;
    }

    .dtc-payment-content {
        padding: 20px;
        background-color: #FFF;
    }

    .dtc-payment-content p {
        color: #333 !important;
        border: none !important;
    }

    .dtc-payment-content span {
        font-size: 14px !important;
    }

    .dtc-required {
        color: #c60606;
    }

    .dtc-boder-top {
        border-top: 1px solid #eee;
    }

    /* contact & invoice */
    ul.dtc-contact,
    ul.dtc-invoice {
        padding: 0px !important;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
    }

    ul.dtc-contact li,
    ul.dtc-invoice li {
        width: 33.33%;
        padding: 3px;
        padding-bottom: 6px;
    }

    ul.dtc-contact li p,
    ul.dtc-invoice li p {
        margin: 0px !important;
        margin-bottom: 3px !important;
        font-size: 14px !important;
        color: #000;
        border: none !important;
    }

    /* booking confirm */
    .dtc-confirm-title {
        font-size: 16px;
        border-top: 0.5px solid #ccc;
        padding: 10px;
        margin-top: 10px;
    }

    .dtc-confirm-total {
        margin: 0 10px;
        padding: 10px 0px;
        text-align: right;
        border-top: 0.5px solid #eee;
        font-size: 16px;
        font-weight: 600;
    }

    .dtc-confirm-total span {
        font-size: 18px;
        color: #fc7700;
    }

    .dtc-confirm-flight-title {
        color: #343434;
        padding: 10px 10px;
        font-size: 18px;
        background-color: #f9f9f9;
        display: flex;
        font-weight: 600;
        align-items: center;
    }


    .dtc-confirm-flight-title span {
        font-size: 14px;
    }

    .dtc-confirm-flight-title span:first-child {
        flex: 1;
        font-weight: 600;
    }

    .dtc-confirm-flight-title span:last-child {
        padding-left: 6px;
        font-size: 18px;
        font-weight: 600;
    }

    .dtc-confirm-pax {
        width: 100%;
    }

    .dtc-confirm-pax tr {
        border-bottom: 0.5px solid #eee;
    }

    .dtc-confirm-pax tr:last-child {
        border-bottom: none;
    }

    .dtc-confirm-pax th {
        font-size: 14px;
        font-weight: 600;
        padding: 8px 3px;
        text-align: center;
    }

    .dtc-confirm-pax td {
        font-size: 14px;
        font-weight: 500;
        padding: 8px 3px;
        text-align: center;
    }

    .dtc-confirm-pax tr td:first-child,
    .dtc-confirm-pax tr th:first-child {
        text-align: left;
    }

    .dtc-confirm-pax tr td:last-child,
    .dtc-confirm-pax tr th:last-child {
        text-align: right;
    }

    .dtc-confirm-pax span {
        font-size: 16px;
        font-weight: 600;
    }

    .dtc-confirm-infor {
        width: 100%;
    }

    .dtc-confirm-infor::after {
        clear: both;
    }

    .dtc-confirm-infor li {
        width: 50%;
        float: left;
        display: flex;
        padding: 3px 10px;
    }

    .dtc-confirm-infor li span {
        flex: 1;
        font-size: 14px;
        font-weight: 600;
        text-align: left;
    }

    .dtc-confirm-payment {
        text-align: center;
    }

    .dtc-confirm-payment img {
        max-height: none;
        max-width: none;
        padding: 10px 0px;
    }

    .dtc-confirm-footer {
        padding: 10px;
        background-color: #FFF;
        align-items: center;
        text-align: right;
        border-top: 0.5px solid #ddd;
    }

    .dtc-search-pax-minu,
    .dtc-search-pax-plus,
    .dtc-search-pax-select {
        padding: 0px !important;
        margin: 0px !important;
    }


    /* view base -----------------------------------------------------------------------------------------------------------------------------------------*/
    .dtc-flight-base {
        margin: 0px !important;
        border: none;
    }

    .dtc-flight-base .dtc-flight-info {
        padding: 5px 0px !important;
        box-shadow: none !important;
        border-bottom: 0.5px solid #eee !important;
        border-left: 0.5px solid #eee !important;
        border-right: 0.5px solid #eee !important;
    }

    .dtc-flight-base ul.dtc-flight-info li:first-child p {
        display: none !important;
    }

    .dtc-flight-base .dtc-flight-time {
        font-size: 20px !important;
    }

    .dtc-flight-base .dtc-flight-city {
        display: none !important
    }

    .dtc-flight-base .dtc-flight-info img {
        max-height: 20px !important;
    }

    .dtc-flight-base .dtc-flight-info button {
        font-size: 12px !important;
        padding: 5px 30px 5px 15px !important
    }

    .dtc-flight-base ul.dtc-flight-info li:nth-child(3n+3) {
        max-width: 170px !important;
    }

    .dtc-flight-base .dtc-flight-numb {
        padding-right: 0px;
        display: flex;
        align-items: center;
    }

    .dtc-flight-base .dtc-flight-numb i {
        padding-right: 5px;
    }

    .dtc-flight-base .dtc-flight-detail {
        padding-left: 3px !important;
    }

    .dtc-flight-base .dtc-flight-price {
        font-size: 18px !important;
    }

    .dtc-flight-base a.dtc-flight-detail::after {
        display: none !important;
    }

    @media (max-width:990px) {
        .dtc-test {
            display: none;
        }

        /* search */
        #dtc-search {
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }

        /* result */
        .dtc-flex {
            display: block;
        }

        .dtc-content {
            width: 100%;
            margin-bottom: 30px;
        }

        ul.dtc-step .dtc-circle-first {
            width: 20px;
            height: 20px;
            line-height: 16px;
            border-radius: 50%;
            text-align: center;
            font-size: 13px;
            border: 2px solid #FFF;
            color: #FFF;
        }

        ul.dtc-step .dtc-circle {
            width: 20px;
            height: 20px;
            line-height: 16px;
            border-radius: 50%;
            text-align: center;
            font-size: 13px;
            border: 2px solid #FFF;
            color: #FFF;
            margin-left: 10px;
        }

        ul.dtc-step li span {
            padding-left: 5px;
            color: #FFF;
            font-size: 12px;
        }

        /* flight */
        ul.dtc-flight-date {
            overflow: scroll;
            -webkit-overflow-scrolling: touch;
        }

        ul.dtc-flight-date li {
            min-width: 100px;
        }

        .dtc-flight-title {
            display: none;
        }

        .dtc-flight-title-mobile {
            display: block;
            padding-left: 10px;
        }

        .dtc-flight-title-mobile p {
            font-size: 14px !important;
            color: #FFF !important;
        }

        .dtc-flight-item {
            padding: 0px !important;
            -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
            box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        }

        #dtc-flight-selected .dtc-flight-item {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border: 0.5px solid #ccc;
        }

        #dtc-flight-selected .ul.dtc-flight-info {
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            border: 0.5px solid #ddd !important;
        }

        .dtc-flight-item ul.dtc-flight-info li:first-child {
            position: relative !important;
            display: none !important;
        }

        .dtc-flight-item ul.dtc-flight-info li:last-child {
            position: relative !important;
            display: none !important;
        }

        .dtc-flight-item ul.dtc-flight-info li {
            margin-top: 0px !important;
        }

        .dtc-flight-city span {
            display: none;
        }

        ul.dtc-flight-info-mobile {
            background-color: #eee;
            display: inline-block;
            margin: 0px;
            padding: 10px 0px !important;
            list-style-type: none;
            display: flex;
            flex: 1;
        }

        ul.dtc-flight-info-mobile li:first-child img {
            max-width: 60px;
        }

        ul.dtc-flight-info-mobile li {
            flex: none !important;
            text-align: center;
            margin: auto;
            padding: 0px 5px;
        }

        ul.dtc-flight-info-mobile li:first-child {
            text-align: left;
        }

        ul.dtc-flight-info-mobile li:last-child {
            text-align: right;
        }

        ul.dtc-flight-info-mobile button {
            position: relative;
            background: #28a745 url(https://plugin.datacom.vn/Resources/images/Icon/next.png) no-repeat 60px center;
            background-size: 12px;
            padding: 6px 30px 6px 15px !important;
            margin: 0px;
            border-radius: 3px;
            display: inline-block;
            white-space: nowrap;
            border: 0px;
            font-size: 14px;
            color: #FFF !important;
            line-height: 18px !important;
            font-weight: 300 !important;
            text-transform: unset;
        }

        ul.dtc-flight-info li:nth-child(3n+3) {
            max-width: 100px;
        }

        ul.dtc-flight-info li {
            margin-top: 40px;
            line-height: 25px;
        }

        ul.dtc-flight-info li img {
            max-width: 60px !important;
        }

        ul.dtc-flight-info li:first-child {
            position: absolute;
            display: flex;
            align-items: center;
            height: 34px;
            width: 100%;
            padding-bottom: 10px !important;
            border-bottom: 0.5px solid #f0f0f0;
            margin-top: 0px !important;
        }

        ul.dtc-flight-info li:last-child {
            position: absolute;
            display: inline-block;
            width: 100%;
            margin-top: 0px !important;
        }

        ul.dtc-flight-info li:last-child a.dtc-flight-detail {
            font-size: 14px !important;
        }

        #dtc-flight-selected ul.dtc-flight-info {
            box-shadow: none !important;
        }

        #dtc-flight-selected ul.dtc-flight-info li {
            margin-top: 40px;
        }

        .dtc-box-item {
            background: #FFF;
            padding: 0px 5px;
            margin-bottom: 5px !important;
        }

        ul.dtc-box-sort li:last-child {
            display: none;
        }

        ul.dtc-contact li,
        ul.dtc-invoice li {
            width: 100%;
            padding: 0px;
            padding-bottom: 5px;
        }

        .dtc-payment-content img {
            width: 100% !important;
        }

        .dtc-fare-footer>ul {
            display: block;
            width: 100%;
        }

        .dtc-fare-footer>ul>li {
            display: block;
            width: 50%;
            float: left;
            height: auto;
            padding: 8px 5px;
            text-align: center;
        }

        .dtc-fare-footer>ul>li:first-child {
            border-bottom: 0.5px solid #f9f9f9;
        }

        .dtc-fare-footer>ul>li:nth-child(2) {
            border-bottom: 0.5px solid #f9f9f9;
        }

        .dtc-fare-footer>ul>li:nth-child(3) {
            height: 50px;
        }

        .dtc-fare-footer>ul>li:nth-child(3) div {
            align-items: center;
        }

        .dtc-fare-footer ul li:last-child {
            display: flex;
            align-items: center;
            height: 50px;
            border-left: 0.5px solid #eee !important;
        }

        .dtc-fare-footer ul li:last-child div {
            text-align: center;
        }

        .dtc-fare-footer a {
            width: 100%;
            text-align: center;
        }

        .dtc-fare-price {
            text-align: center !important;
        }

        .dtc-fare-price span {
            font-size: 22px !important;
            color: #FFFF00;
            padding-left: 10px;
        }

        .dtc-fare-price span:last-child {
            font-size: 16px !important;
            font-weight: 500 !important;
            color: #f6f6f6;
            padding: 3px 0px;
            padding-left: 10px;
        }

        button.dtc-fare-button {
            background: #FFF;
            background-size: 12px;
            padding: 7px 0px;
            width: 100%;
            border-radius: 3px;
        }

        ul.dtc-box-item-fare li {
            font-size: 12px;
        }

        .dtc-flight-fare {
            padding: 0px;
            margin: 5px;
        }

        .dtc-fare-content {}

        .dtc-fare-header label {
            font-size: 14px !important;
        }

        .dtc-fare-header span {
            font-size: 12px;
        }

        .dtc-fare-index {
            padding-bottom: 5px;
            margin-top: 0.5px;
        }

        .dtc-fare-footer ul li {
            border-left: 0px !important;
        }

        ul.dtc-flight-info {
            border: none;
        }

        ul.dtc-box-item-flight {
            display: inline-block;
            width: 100%;
            padding: 5px !important;
            margin-top: 0px;
        }

        ul.dtc-box-item-flight li {
            float: left;
            width: 50%;
        }

        ul.dtc-box-item-flight li:first-child {
            position: absolute;
            margin-top: 30%;
            margin-left: 45%;
            border-bottom: none;
        }

        ul.dtc-box-item-flight li:last-child {
            border-bottom: none;
        }

        ul.dtc-box-item-flight li:nth-child(3) {
            text-align: right;
            border-bottom: none;
        }

        ul.dtc-box-item-flight li span {
            font-size: 13px !important;
        }

        button.dtc-fare-button:hover {
            background: none;
        }

        .dtc-flight-price {
            padding: 0px !important;
        }

        .dtc-box-item img {
            margin: 0px !important;
        }

        /* month calendar */
        .dtc-flight-calendar .dtc-tooltip-box {
            display: none;
        }

        .dtc-flight-calendar tr th {
            font-size: 12px;
        }

        .dtc-flight-calendar tr td {
            padding: 1px;
            height: 65px;
        }

        .dtc-flight-calendar,
        .dtc-flight-calendar th,
        .dtc-flight-calendar td {
            border: 1px solid #eee;
        }

        .dtc-calendar-box {
            webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .dtc-calendar-box p:nth-child(1) {
            font-size: 16px !important;
        }

        .dtc-calendar-box p:nth-child(2) {
            display: none;
        }

        .dtc-calendar-box p:nth-child(3) {
            font-size: 10px !important;
            display: grid;
            text-align: center;
        }

        .dtc-calendar-disable {
            height: 40px !important;
        }

        .dtc-tooltip>p>img {
            width: 30px;
            margin: auto !important;
            padding-bottom: 5px;
        }


        /* pax info */
        ul.dtc-pax-info .dtc-pax-row {
            display: block !important;
            background-color: transparent !important;
        }

        ul.dtc-pax-info li:first-child {
            display: none;
        }

        ul.dtc-pax-info li {
            width: 100% !important;
            float: unset;
        }

        ul.dtc-pax-info .dtc-pax-customer {
            width: 100% !important;
            padding-top: 10px !important;
        }

        ul.dtc-pax-info .dtc-pax-baggage {
            padding: 6px 0px;
        }

        .dtc-pax-deposit {
            display: block;
        }

        .dtc-pax-deposit p {
            width: 100%;
        }

        .dtc-pax-deposit .dtc-input-group {
            width: 100% !important;
        }

        .dtc-search-pax i.dtc-match-plus,
        .dtc-search-pax i.dtc-match-minu,
        .dtc-search-pax i.dtc-match-disable {
            font-size: 36px !important;
        }

        .dtc-search-pax-number {
            font-size: 22px !important;
        }

        .dtc-search-pax-row {
            padding: 16px 10px !important;
        }

        .dtc-search-pax-select {
            font-size: 20px !important;
        }

        /* utilities */
        .dtc-container {
            display: none;
            width: 100%;
            margin-left: 0px;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }

        #dtc-box-wraper {
            width: 100%;
            margin: 0px;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }

        #dtc-filter-mobile {
            display: block;
            width: 100%;
            background-color: #f5f5f5;
            margin: 0px;
            padding: 0px;
            margin-bottom: 10px;
            height: 40px;
            line-height: 39px;
            margin-bottom: 10px;
            border-top: 0.5px solid #28a745;
            border-bottom: 0.5px solid #28a745;
        }

        #dtc-filter-mobile i {
            color: #28a745;
        }

        #dtc-filter-mobile li {
            float: left;
            width: 50%;
            text-align: center;
            font-size: 16px;
            color: #555;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 0px;
            margin: 0px;
        }

        #dtc-filter-mobile li span {
            flex: 1;
        }

        #dtc-filter-mobile .left-arrow {
            width: 0;
            height: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            border-left: 20px solid #28a745;
        }

        #dtc-filter-mobile .right-arrow {
            width: 0;
            height: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            border-right: 20px solid #28a745;
        }

        #dtc-filter-mobile li:first-child {
            border-right: 0.5px solid #28a745;
        }

        #dtc-result .dtc-search {
            background-color: #FFF;
            margin: unset;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
            display: none;
        }

        #dtc-result .dtc-search-body {
            border: none;
        }

        .dtc-box-temp {
            margin-bottom: 0px;
        }

        .dtc-modal-close {
            width: 10%;
            display: flex;
            background-color: transparent;
            font-size: 30px;
            color: red;
            text-align: center;
            border: none;
            flex-flow: column;
            align-items: center;
            padding-top: 10px;
        }

        .dtc-box-temp ul li {
            padding: 10px;
        }

        #dtc-base-cart {
            display: none;
        }

        #dtc-modal-cart {
            position: fixed;
            bottom: 10px;
            left: 10px;
            background: #fc7700;
            border: 1px solid #fff;
            color: #fff;
            z-index: 1040;
            height: 46px;
            border-radius: 30px;
            padding: 5px 15px 5px 5px;
            box-shadow: 0 1px 10px rgba(0, 0, 0, .3);
            cursor: pointer;
            display: flex;
        }

        #dtc-modal-cart .dtc-cart-icon {
            font-size: 20px;
            font-weight: 200;
            border: 1px solid #fff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #dtc-modal-cart .dtc-cart-basket {
            padding-left: 10px;
            text-align: center;
        }

        #dtc-modal-cart p,
        #dtc-modal-cart span {
            font-size: 12px !important;
            color: #FFF !important;
        }

        #dtc-payment-method {
            padding-bottom: 50px !important;
        }

        /* result base -------------------------------------------------------------------------------------------------------------------------------------*/
        .dtc-flight-base {
            box-shadow: none !important;
            border-bottom: 0.5px solid #eee !important;
        }

        .dtc-flight-base ul.dtc-flight-info {
            display: none !important;
        }

        .dtc-flight-base ul.dtc-flight-info-mobile {
            padding: 6px 0px !important;
            background-color: #FFF !important;
        }

        .dtc-flight-base .dtc-flight-numb {
            display: none !important;
        }

        .dtc-flight-base .dtc-flight-price {
            font-size: 16px !important;
            min-width: 100px !important;
            padding: 0px 5px !important;
        }

        .dtc-flight-base ul.dtc-flight-info-mobile button {
            background-image: none !important;
            padding: 6px 8px !important;
        }

        .dtc-flight-base .dtc-flight-time {
            font-size: 14px !important;
        }

        .dtc-flight-base ul.dtc-flight-info-mobile li:first-child img {
            max-width: 54px !important;
        }

        /* search form --------------------------------------------------------------------------------------------------------------------------------------*/
        .dtc-city-box {
            width: 100% !important;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }

        .dtc-is-mobile {
            display: block !important;
        }

        .dtc-is-desktop {
            display: none !important;
        }

        .dtc-search-geocode {
            max-height: 300px;
            z-index: 9999;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
            max-width: 100%;
        }

        .dtc-search-option {
            display: inline-block !important;
            padding: 0px !important;
            background-color: #f0f0f0;
            width: 100%;
        }

        .dtc-search-option li {
            float: left;
            padding: 16px 10px !important;
            margin: 0px;
        }

        .dtc-search-option li:last-child {
            width: 100%;
            display: flex;
            align-items: center;
        }

        .dtc-pax-customer .dtc-input-icon {
            background-color: transparent !important;
            padding-left: 5px;
        }

        .dtc-input-icon {
            width: 28px !important;
            background-color: #FFF;
            padding-top: 0px;
            border-radius: 0px 3px 3px 0px;
        }

        .dtc-input-icon i {
            font-size: 20px !important;
            color: #333;
            margin-top: 8px;
        }

        .dtc-width-date i {
            font-size: 14px !important;
        }

        .dtc-width-users i {
            font-size: 14px !important;
        }

        .dtc-search-multi button>span {
            display: none;
        }

        .dtc-search-multi .dtc-button-mobile {
            display: inline-block !important;
        }

        .dtc-search .dtc-checkbox {
            font-size: 14px !important;
        }

        .dtc-search .dtc-location {
            /*pointer-events: none;*/
        }

        /* horizontal main */
        .dtc-hor ul.dtc-search-list {
            width: 100%;
            display: inline-block !important;
        }

        .dtc-hor ul.dtc-search-list>li {
            width: 50%;
            padding: 0px !important;
            float: left;
            margin-top: 12px;
        }

        .dtc-hor ul.dtc-search-list>li.dtc-search-action {
            width: 50% !important;
        }

        .dtc-hor ul.dtc-search-list>li:nth-child(2n + 1) {
            padding-right: 6px !important;
        }

        .dtc-hor ul.dtc-search-list>li:nth-child(2n) {
            padding-left: 6px !important;
        }

        .dtc-hor ul.dtc-search-list>li:nth-child(5) {
            width: 100% !important;
            padding-right: 0px !important;
            padding-top: 10px !important;
        }

        .dtc-hor .dtc-width-users {
            width: 49%;
            float: left;
        }

        .dtc-hor .dtc-search-submit {
            width: 49%;
            float: right;
            margin-left: 6px;
        }

        .dtc-hor .dtc-is-mobile .dtc-search-submit {
            margin-left: 0px !important;
        }

        .dtc-hor .dtc-width-date {
            width: 100%;
        }

        .dtc-hor ul.dtc-is-mobile {}

        .dtc-hor ul.dtc-is-mobile>li,
        .dtc-hor ul.dtc-is-mobile>li:last-child {
            width: 50% !important;
            float: left !important;
        }

        .dtc-hor ul.dtc-is-mobile .dtc-width-users {
            width: 100% !important;
        }

        .dtc-hor ul.dtc-is-mobile .dtc-search-submit {
            width: 100%;
        }

        /* geo code */
        .dtc-city-box-header {
            padding: 10px;
            margin: 0px;
        }

        .dtc-tabs-container {
            overflow-x: scroll;
            -webkit-overflow-scrolling: touch;
        }

        .dtc-list-cities {
            margin-top: -1px;
        }

        .dtc-list-cities ul {
            margin: 0px;
            padding: 0px 0px;
            list-style: none;
            -moz-column-count: 3;
            -moz-column-gap: 20px;
            -webkit-column-count: 3;
            -webkit-column-gap: 20px;
            column-count: 1 !important;
            column-gap: 20px;
        }

        .dtc-list-cities ul li {
            border-bottom: 1px dotted #eee !important;
        }

        .dtc-list-cities ul li:last-child {
            border-bottom: none !important;
        }

        .dtc-city-search-mobile {
            display: block !important;
            background-color: #FFF;
            position: relative;
            padding: 3px 10px;
        }

        .dtc-city-search-mobile input {
            border: none;
        }

        ul.dtc-tabs-container {
            margin: 0px 3px !important;
        }

        /* search pax*/
        .dtc-search-code,
        .dtc-search-pax {
            position: fixed !important;
            top: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            border-radius: 0px !important;
            z-index: 9999 !important;
            margin: 0px !important;
            padding: 0px !important;
            width: 100% !important;
        }

        .dtc-search-pax-header {
            display: block !important;
            padding: 10px;
            font-size: 16px;
            border-bottom: 1px solid #eee;
            color: #fc7700;
            text-align: center;
        }

        .dtc-search-pax-header span {
            font-size: 20px !important;
        }

        .dtc-search-pax-footer {
            padding: 10px !important;
        }


        /*booking confirm */
        .dtc-confirm-infor li {
            width: 100%;
        }

        .dtc-confirm-payment img {
            max-height: none;
            max-width: 300px !important;
            padding: 10px 0px;
        }
    }

    @media (max-width: 360px) {

        /* result search */
        .dtc-search-option li {
            float: left;
            padding: 12px 6px !important;
            margin: 0px;
        }

        .dtc-flight-price {
            min-width: 130px !important;
            font-size: 18px !important;
        }
    }


    /* search form */
    .dtc-ver {
        max-width: 600px !important;
    }

    #dtc-search {
        margin: auto;
        width: 100%;
        font-size: 14px;
        margin-bottom: 10px;
        background-color: #fff;
        -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        border-radius: 3px;
    }

    #dtc-search input:focus,
    #dtc-search textarea:focus,
    #dtc-search button:focus,
    #dtc-search select {
        background-image: none !important;
        outline: none !important;
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        border-color: none;
        outline: 0;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
    }

    .dtc-search .flex {
        flex: 1;
    }

    .dtc-search .last {
        padding-right: 0px !important;
    }

    .dtc-search-header {
        background-image: url(https://plugin.datacom.vn/Resources/Images/Icon/plan.png);
        background-position: 10px center;
        background-repeat: no-repeat;
        background-size: 22px;
        border-radius: 3px 3px 0px 0px;
        padding: 10px;
        text-align: left;
    }

    .dtc-search-header span {
        color: #FFF;
        font-size: 16px;
        padding-left: 30px;
        text-align: left;
    }

    .dtc-search-body {
        border-radius: 0px 0px 3px 3px;
    }

    .dtc-search-list {
        position: relative;
        display: flex;
        padding: 10px 0px;
        margin: 0px;
        list-style: none;
    }

    .dtc-search-main {
        padding: 10px;
    }

    .dtc-search-option {
        padding: 10px;
        padding-top: 10px;
        display: flex;
        list-style: none;
        margin: 0px;
    }

    .dtc-result .dtc-hor .dtc-search-option {
        padding: 10px !important;
        padding-top: 20px !important;
    }

    .dtc-result .dtc-hor .dtc-search-header {
        display: none !important;
    }

    .dtc-result .dtc-hor .dtc-search-body {
        background-color: #FFF !important;
        border-radius: 0 !important;
        border: none !important;
    }

    .dtc-result .dtc-ver ul.dtc-search-option {
        width: 100%;
        display: inline-block !important;
        padding: 0px !important;
        margin: 0px !important;
    }

    .dtc-result .dtc-ver ul.dtc-search-option li {
        float: left !important;
        padding: 15px 6px;
        margin: 0px;
    }

    .dtc-result .dtc-ver .dtc-search-option li:last-child {
        width: 100% !important;
        padding: 10px 6px;
        display: flex !important;
        align-items: center !important;
        background-color: #FFF !important;
        border-bottom: 1px solid #f6f6f6 !important;
        padding-right: 0px !important;
    }

    .dtc-result .dtc-ver .dtc-search .dtc-checkbox {
        font-size: 14px !important;
        padding-right: 10px;
    }

    .dtc-result .dtc-ver .dtc-search-header {
        left: auto;
        border-radius: 0px !important;
    }

    .dtc-result .dtc-ver .dtc-modal {
        left: auto;
        right: 0 !important;
    }

    .dtc-search-option li {
        margin: 0px;
        padding: 0px 25px 0px 0px;
        text-align: left;
        border: 0px !important;
    }

    .dtc-search-option li:nth-child(3) {
        flex: 1;
    }

    .dtc-search-option li:last-child {
        padding-right: 0px;
    }

    .dtc-is-mobile {
        display: none;
    }

    .dtc-is-desktop {
        display: block;
    }

    ul.dtc-search-list {
        padding: 5px 0px !important;
    }

    ul.dtc-search-list>li {
        margin: 0px;
        padding: 0px 6px 0px 0px;
        position: relative;
    }

    ul.dtc-search-list>li:first-child,
    ul.dtc-search-list>li:nth-child(2) {
        flex: 1;
    }

    ul.dtc-search-list>li:last-child {
        display: flex;
        width: 240px !important;
        padding: 0px;
    }

    .dtc-search-multi {
        width: 100%;
        display: flex;
        background: #FFF;
        border: 0.5px solid #eee;
        border-radius: 3px;
    }

    .dtc-search-multi .dtc-button-mobile {
        display: none;
    }

    .dtc-search-multi .dtc-button-remove {
        width: 50%;
        border: none;
        background: transparent;
        border-right: 0.5px solid #eee;
        color: #333;
        font-size: 13px;
        padding: 0px;
        margin: 0px;
    }

    .dtc-search-multi .dtc-button-add {
        width: 50%;
        border: none;
        background: transparent;
        color: #333;
        font-size: 13px;
        padding: 0px;
        margin: 0px;
    }

    .dtc-search-multi .dtc-button-remove i {
        color: #ED3229 !important;
    }

    .dtc-search-multi .dtc-button-add i {
        color: #28a745 !important;
    }

    .dtc-hor .dtc-width-date {
        width: 140px !important;
    }

    .dtc-ver .dtc-width-date {
        width: 100% !important;
    }

    .dtc-width-users {
        margin-right: 6px;
    }

    .dtc-input-icon i {
        padding: 0px 3px;
        font-size: 20px;
    }

    .dtc-fa-departure {
        font-size: 25px !important;
        transform: rotate(30deg);
    }

    .dtc-fa-arrived {
        font-size: 25px !important;
        transform: rotate(60deg);
    }

    .dtc-search-item {
        display: flex;
    }

    .dtc-search-submit {
        height: 38px;
        display: inline-block;
        margin-bottom: 0;
        font-size: 16px;
        font-weight: normal;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 3px !important;
        width: 100%;
        color: #fff;
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .dtc-search-submit span {
        padding-left: 6px;
        font-size: 16px;
    }

    .dtc-search-submit i {
        font-size: 22px;
        transform: rotate(100deg);
    }

    ul.dtc-search-list>li>p {
        margin: 0px !important;
        font-size: 15px !important;
        margin-bottom: 3px !important;
        color: #333;
        text-align: left !important;
    }

    ul.dtc-search-list>li>p i {
        font-size: 18px !important;
        color: #777;
    }

    ul.dtc-search-list>li>p>span {
        padding-left: 10px;
        color: #333;
    }

    /* horizontal main */
    .dtc-hor .dtc-checkbox {
        font-size: 16px;
        padding-left: 24px;
        color: #333;
    }

    .dtc-hor .dtc-search-main {
        padding-bottom: 5px;
        padding-top: 0px;
    }

    .dtc-hor .dtc-search-action {
        padding-left: 0px !important;
    }

    /* vertical main */
    .dtc-ver .dtc-input {
        font-size: 14px !important;
    }

    .dtc-ver .dtc-checkbox {
        font-size: 14px !important;
        padding-left: 24px !important;
        color: #333 !important;
        font-weight: 300 !important;
        line-height: 20px !important;
    }

    .dtc-ver .dtc-search-main {
        padding-bottom: 5px;
        padding-top: 16px;
    }

    .dtc-ver .dtc-input-icon {
        border-radius: 0px 3px 3px 0px;
        background-color: transparent;
        width: 32px;
    }

    .dtc-ver .dtc-input-icon i {
        font-size: 22px;
        color: #888;
    }

    .dtc-ver .dtc-search-option {
        padding: 12px 10px;
        display: flex;
        background-color: #f9f9f9;
        margin: 0px;
    }

    .dtc-ver ul.dtc-search-list {
        display: inline-block;
        margin: 0px;
    }

    .dtc-ver ul.dtc-search-list>li {
        width: 50% !important;
        float: left;
        margin: 0px;
        margin-top: 12px;
        list-style: none !important;
        position: relative;
    }

    .dtc-ver ul.dtc-search-list>li:nth-child(2n + 1) {
        padding-right: 6px;
    }

    .dtc-ver ul.dtc-search-list>li:nth-child(2n) {
        padding-left: 6px;
    }

    .dtc-ver .dtc-search-pax {
        width: 98%;
        min-width: 250px;
    }

    .dtc-ver .dtc-width-date {
        width: 100%;
    }

    .dtc-ver .dtc-width-date i {
        font-size: 18px;
    }

    .dtc-ver .dtc-width-users {
        padding-right: 0px;
        margin-top: 10px;
    }

    .dtc-ver .dtc-width-users i {
        font-size: 16px;
    }

    .dtc-ver .dtc-search-submit {
        margin-top: 10px;
        height: 38px;
    }

    .dtc-ver .dtc-search-multi button i {
        font-size: 13px;
    }

    .dtc-ver .dtc-ver-footer {
        width: 100%;
    }

    /* verticel mutil */
    .dtc-search-action {
        width: 50% !important;
        float: left !important;
        padding-left: 6px !important;
    }

    .dtc-search-action .dtc-search-multi {
        height: 38px !important;
    }

    dtc-search-action button.dtc-button-remove {
        font-size: 12px !important;
    }

    /* pax */
    .dtc-search-pax {
        width: 100%;
    }

    .dtc-search-pax span {
        font-size: 16px;
        text-align: left;
    }

    .dtc-search-pax label {
        font-weight: 600 !important;
        margin-bottom: 0px !important;
        padding-left: 8px;
    }

    .dtc-search-pax a {
        font-size: 10px !important;
        padding: 0px !important;
        margin: 0px !important;
        font-weight: 500;
        color: #28a745;
        cursor: pointer;
        text-align: left;
    }

    .dtc-search-pax a:hover {
        text-decoration: none;
    }

    .dtc-search-pax-header {
        display: none;
    }

    .dtc-search-pax-footer {
        padding: 10px;
    }

    .dtc-search-pax-row {
        display: flex;
        padding: 12px 10px;
        white-space: nowrap;
        border-bottom: 1px dotted #eee;
        align-items: center;
    }

    .dtc-search-pax-item {
        flex: 1;
        display: flex;
        align-items: center;
    }

    .dtc-search-pax-adt {
        background: url(https://plugin.datacom.vn/Resources/Images/Icon/adt.png) no-repeat -5px center;
        padding-left: 20px;
        background-size: 25px;
        display: grid !important;
    }

    .dtc-search-pax-chd {
        background: url(https://plugin.datacom.vn/Resources/Images/Icon/chd.png) no-repeat -5px center;
        padding-left: 20px;
        background-size: 25px;
        display: grid !important;
    }

    .dtc-search-pax-inf {
        background: url(https://plugin.datacom.vn/Resources/Images/Icon/inf.png) no-repeat -8px center;
        padding-left: 20px;
        background-size: 30px;
        display: grid !important;
    }

    .dtc-search-pax-select {
        border: none;
        width: 100%;
        height: 40px;
        background-color: #28a745;
        color: #FFF;
        font-size: 16px;
    }

    .dtc-search-pax-minu,
    .dtc-search-pax-plus {
        background-color: #FFF;
        border: none;
        display: flex;
        cursor: pointer;
        box-shadow: none !important;
    }

    .dtc-search-pax-number {
        flex: 1;
        text-align: center !important;
        font-size: 18px;
        padding: 0px 10px;
    }

    .dtc-search-pax i.dtc-match-plus {
        color: #28a745;
        font-size: 26px;
    }

    .dtc-search-pax i.dtc-match-minu {
        color: #ED3229;
        font-size: 26px;
    }

    .dtc-search-pax i.dtc-match-disable {
        color: #ddd;
        font-size: 26px;
    }

    /* auto complete */
    .dtc-search-geocode {
        max-height: 300px;
        z-index: 9999;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
        width: 500px;
    }

    .dtc-search-geocode::-webkit-scrollbar {
        -webkit-box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }

    .dtc-search-geocode::-webkit-scrollbar-thumb {
        background-color: #999;
        background-image: -webkit-linear-gradient(90deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent)
    }

    .dtc-search-auto {
        position: relative;
        display: flex;
        padding: 8px 10px;
        border-bottom: 1px dotted #717171;
        cursor: pointer;
    }

    .dtc-search-auto label {
        flex: 1;
        margin: 0px;
        cursor: pointer;
        font-size: 16px !important;
        font-weight: 500 !important;
        padding-left: 0px !important;
        text-align: left;
        color: #333;
    }

    .dtc-search-auto b {
        padding-right: 8px;
        color: #888;
    }

    .dtc-search-auto-name {
        flex: none;
        color: #9199ac !important;
    }

    .dtc-search-auto i {
        font-size: 18px;
    }

    /* city code air form */
    .dtc-search-code {
        position: absolute;
        padding: 20px;
    }

    ul.dtc-tabs-container {
        display: flex;
        white-space: nowrap;
        margin: 0;
        padding: .2em .2em 0;
        list-style: none;
    }

    ul.dtc-tabs-container li {
        list-style: none;
        float: left;
        position: relative;
        top: 0;
        margin: 1px .2em 0 0;
        border-bottom-width: 0;
        padding: 0;
        white-space: nowrap;
        background: #f6f6f6;
        border: 0.5px solid #cacaca;
        border-radius: 5px 5px 0px 0px;
        border-bottom: 0px;
        cursor: pointer;
    }

    ul.dtc-tabs-container li.dtc-active {
        border: 0.5px solid #cacaca !important;
        background: #fff !important;
        border-bottom: 0px !important;
        margin-bottom: -1px;
        padding-bottom: 1px;
    }

    ul.dtc-tabs-container li a {
        float: left;
        padding: 8px 12px;
        text-decoration: none;
        font-size: 14px;
        color: #333 !important;
    }

    .dtc-region-title {
        font-size: 16px;
        font-weight: 600;
        margin-top: 12px;
    }

    .dtc-region-title.alone {
        display: none
    }

    .dtc-city-box {
        width: 650px;
        margin: auto;
        background-color: #FFF;
        display: none;
        z-index: 9999;
        position: absolute;
        color: #333;
        margin-top: 1px;
        border-radius: 3px;
        box-shadow: 0 2px 30px -2px rgba(0, 0, 0, 0.4), 0 0 3px -1px rgba(0, 0, 0, 0.6);
        padding: 20px;
    }

    .dtc-city-search-mobile {
        display: block;
    }

    .dtc-city-box.visible {
        display: block;
    }

    .dtc-city-box-header {
        border-bottom: 1px solid #ddd;
        display: flex;
        padding-bottom: 6px;
        margin-bottom: 10px;
        align-items: center;
    }

    .dtc-city-box-header p {
        flex: 1;
        white-space: nowrap;
        font-size: 20px !important;
        font-weight: 400 !important;
        padding: 0px;
        margin: 0px;
        text-align: left;
    }

    .dtc-city-box-header .dtc-city-close {
        font-size: 24px;
        cursor: pointer;
        color: #ed3229;
    }

    .dtc-city-box .dtc-tabs-city {
        width: auto;
        margin: auto;
        font-size: 13px;
    }

    .dtc-list-cities {
        display: none;
        border-width: 0;
        padding: 10px;
        background: none;
        border: 0.5px solid #cacaca !important;
    }

    .dtc-list-cities ul {
        margin: 0px;
        padding: 0px 0px;
        list-style: none;
        -moz-column-count: 3;
        -moz-column-gap: 20px;
        -webkit-column-count: 3;
        -webkit-column-gap: 20px;
        column-count: 3;
        column-gap: 20px;
    }

    .dtc-list-cities ul li {
        margin: 0px;
        cursor: pointer;
        padding: 0px 10px;
        border: none;
        text-align: left;
        line-height: 20px;
    }

    .dtc-list-cities label {
        font-weight: 500 !important;
        font-size: 14px !important;
        margin: 0px;
        padding: 0px;
        cursor: pointer;
        line-height: 35px;
        color: #333;
    }

    .dtc-list-cities label:hover {
        color: #fc7700;
    }

    .dtc-highlight {
        font-weight: 600 !important;
    }
</style>
<section style="padding:30px;">

    <div class="row">
        <div class="dtc-content">
            <div class="dtc-flight">
                <ul class="dtc-step">
                    <li class="dtc-active dtc-color-theme">
                        <div class="dtc-circle-first">1</div> <span>Chọn chuyến</span>
                    </li>
                    <li class="dtc-active dtc-color-theme">
                        <div class="dtc-arrow-active"></div>
                        <div class="dtc-circle">2</div> <span>Đặt chỗ</span>
                    </li>
                    <li>
                        <div class="dtc-arrow-active"></div>
                        <div class="dtc-circle">3</div> <span>Hoàn tất</span>
                    </li>
                </ul>
                <div id="dtc-flight-selected">
                    <div class="dtc-fare-wraper">
                        <div class="dtc-title dtc-color-border"><i class="fa fa-plane"></i> Chuyến bay bạn đã lựa chọn</div>
                        <div class="dtc-box-item">
                            <div class="dtc-flight-item select" flight-type="domestic" leg="0">
                                <ul class="dtc-flight-info">
                                    <li><img src="https://plugin.datacom.vn//Resources/Images/Airline/VJ.gif">
                                        <p>Vietjet Air</p>
                                    </li>
                                    <li>
                                        <div class="dtc-flight-city"><?= $Start_City ?></div>
                                        <div class="dtc-flight-time"><?= $Departure_Times ?></div>
                                        <div class="dtc-flight-date"><?= $formattedDate ?></div>
                                    </li>
                                    <li>
                                        <div class="dtc-flight-numb dtc-color-text"> <i class="fa fa-plane"></i><?= $Flight_Number ?></div>
                                        <div class="dtc-flight-line">
                                            <div class="dtc-flight-fly dtc-line"></div>
                                        </div> <a class="dtc-flight-detail dtc-color-focus">Chi tiết</a>
                                    </li>
                                    <li>
                                        <div class="dtc-flight-city"><?= $Arrival_City ?></div>
                                        <div class="dtc-flight-time"><?= $Arrival_Times ?></div>
                                        <div class="dtc-flight-date"><?= $formattedDate ?></div>
                                    </li>
                                    <li>
                                        <a href="index.php?action=search_flight">
                                            <button type="button" class="dtc-btn-return dtc-color-button">Chọn lại</button>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="dtc-flight-info-mobile">
                                    <li><img src="https://plugin.datacom.vn//Resources/Images/Airline/VJ.gif"></li>
                                    <li>
                                        <div class="dtc-flight-price">2,485,200 <span>VND</span></div>
                                    </li>
                                    <li>
                                        <a href="index.php?action=search_flight">
                                            <button type="button" class="dtc-btn-return dtc-color-button">Chọn lại</button>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dtc-flight-box-detail"></div>
                            </div>
                        </div>
                    </div>
                    <div class="dtc-fare-wraper" id="dtc-pax-info">
                        <div class="dtc-title dtc-color-border"><i class="fa fa-users" aria-hidden="true"></i> Thông tin khách hàng</div>
                        <div class="dtc-box-option">
                            <ul class="dtc-pax-info">
                                <li>
                                    <div class="dtc-pax-customer dtc-pax-cus">Khách hàng</div>
                                    <div class="dtc-pax-customer dtc-pax-sex">Giới tính <span class="dtc-required">*</span></div>
                                    <div class="dtc-pax-customer dtc-pax-firstname">Họ <span class="dtc-required">*</span></div>
                                    <div class="dtc-pax-customer dtc-pax-lastname">Đệm &amp; tên <span class="dtc-required">*</span></div>
                                    <div class="dtc-pax-customer dtc-pax-bir">Ngày sinh <span class="dtc-required">*</span></div>
                                </li>
                                <li type="adt" value="1">
                                    <div class="dtc-pax-row">
                                        <div class="dtc-pax-customer dtc-pax-cus adt">Người lớn 1</div>
                                        <div class="dtc-pax-customer dtc-pax-sex">
                                            <div class="dtc-input-group">
                                                <select class="dtc-input dtc-input-gender">
                                                    <option value="true">Nam</option>
                                                    <option value="false">Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="dtc-pax-customer dtc-pax-firstname">
                                            <div class="dtc-input-group"> <input class="dtc-input dtc-req dtc-input-firstname" name="first_name" type="text" maxlength="160" placeholder="Nhập họ"> </div>
                                        </div>
                                        <div class="dtc-pax-customer dtc-pax-lastname">
                                            <div class="dtc-input-group"> <input class="dtc-input dtc-req dtc-input-lastname" name="last_name" type="text" maxlength="160" placeholder="Nhập đệm &amp; tên"> </div>
                                        </div>
                                        <div class="dtc-pax-customer dtc-pax-bir">
                                            <div class="dtc-input-group"> <input name="dtc-pax-birthday" class="dtc-input dtc-picker-adt" placeholder="dd-MM-yyyy" type="date" autocomplete="off"> </div>
                                        </div>
                                    </div>

                                </li>
                                <!-- <li type="chd" value="1">
                                    <div class="dtc-pax-row">
                                        <div class="dtc-pax-customer dtc-pax-cus chd">Trẻ em 1</div>
                                        <div class="dtc-pax-customer dtc-pax-sex">
                                            <div class="dtc-input-group">
                                                <select class="dtc-input dtc-input-gender">
                                                    <option value="true">Nam</option>
                                                    <option value="false">Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="dtc-pax-customer dtc-pax-firstname">
                                            <div class="dtc-input-group"> <input class="dtc-input dtc-req dtc-input-firstname" name="first_name" type="text" maxlength="160" placeholder="Nhập họ"> </div>
                                        </div>
                                        <div class="dtc-pax-customer dtc-pax-lastname">
                                            <div class="dtc-input-group"> <input class="dtc-input dtc-req dtc-input-lastname" name="last_name" type="text" maxlength="160" placeholder="Nhập đệm &amp; tên"> </div>
                                        </div>
                                        <div class="dtc-pax-customer dtc-pax-bir">
                                            <div class="dtc-input-group"> <input name="dtc-pax-birthday" class="dtc-input dtc-req dtc-picker-chd" placeholder="dd-MM-yyyy" type="date" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                            <div class="dtc-pax-note"> <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Lưu ý về độ tuổi người lớn, trẻ em, trẻ sơ sinh</span>
                                <ul>
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Người lớn từ 12 tuổi trở lên</li>
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Trẻ em có độ tuổi từ <b>2-12</b>, ngày sinh nằm trong khoảng thời gian từ<b> 27-11-2011</b> đến <b>26-11-2021</b></li>
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Nếu trẻ em và em bé của bạn không sinh vào khoảng thời gian trên, vui lòng chọn ngày bay khác</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dtc-fare-wraper" id="dtc-contact">
                        <div class="dtc-title dtc-color-border"><i class="fa fa-inbox" aria-hidden="true"></i> Thông tin liên hệ</div>
                        <div class="dtc-box-option">
                            <ul class="dtc-contact">
                                <li>
                                    <p>Quý danh</p>
                                    <div class="dtc-input-group">
                                        <select class="dtc-input" name="dtc-contact">
                                            <option value="1">Quý ông</option>
                                            <option value="2">Quý bà</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <p>Họ tên<span class="dtc-required"> *</span></p>
                                    <div class="dtc-input-group"> <input class="dtc-input dtc-req" type="text" placeholder="Họ tên" name="dtc-contact" maxlength="100"> </div>
                                </li>
                                <li>
                                    <p>Điện thoại<span class="dtc-required"> *</span></p>
                                    <div class="dtc-input-group"> <input class="dtc-input dtc-req" type="tel" placeholder="Điện thoại" name="dtc-contact" maxlength="15"> </div>
                                </li>
                                <li>
                                    <p>Email<span class="dtc-required"> *</span></p>
                                    <div class="dtc-input-group"> <input class="dtc-input dtc-req" type="email" placeholder="Email" name="dtc-contact" maxlength="100"> </div>
                                </li>
                                <li>
                                    <p>Địa chỉ</p>
                                    <div class="dtc-input-group"> <input class="dtc-input" type="text" placeholder="Địa chỉ" name="dtc-contact" maxlength="250"> </div>
                                </li>
                                <li>
                                    <p>Ghi chú</p>
                                    <div class="dtc-input-group"> <textarea class="dtc-input" type="text" placeholder="Yêu cầu đặc biệt" name="dtc-contact" maxlength="250"></textarea> </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="dtc-container dtc-mob">
            <div id="dtc-box-wraper">
                <div id="dtc-base-cart" class="dtc-box-temp dtc-mob" style="display: block;">
                    <div class="dtc-base-header dtc-color-theme"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Chuyến bay của bạn</span></div>
                    <div class="dtc-base-content">
                        <ul>
                            <li> <span><?= $Start_City ?> <i class="fa fa-long-arrow-right"></i> <?= $Arrival_City ?></span> <span class="dtc-cart-time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $Departure_Times ?>-<?= $formattedDate ?></span></li>
                        </ul>
                        <ul class="dtc-cart-sumary">
                            <li><span>Tóm tắt giá vé</span><span class="dtc-align-right">Tổng</span></li>
                            <li> <span class="dtc-cart-people">Người lớn</span> <span class="dtc-cart-quanlity">1 x 2,485,200</span> <span class="dtc-cart-price">2,485,200</span></li>
                            <li> <span class="dtc-cart-people">Trẻ em</span> <span class="dtc-cart-quanlity">1 x 2,425,200</span> <span class="dtc-cart-price">2,425,200</span></li>
                            <li>∑ <span class="dtc-cart-summary-title"> Tổng giá (VND):</span><span class="dtc-cart-total">4,910,400</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>