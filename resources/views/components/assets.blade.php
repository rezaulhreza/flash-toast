<style>
    .alert {
    padding: 15px;
    margin-bottom: 22px;
    border: 1px solid transparent;
    border-radius: 4px;
  }

  .alert h4 {
    margin-top: 0;
    color: inherit;
  }

  .alert .alert-link {
    font-weight: bold;
  }

  .alert > p,
  .alert > ul {
    margin-bottom: 0;
  }

  .alert > p + p {
    margin-top: 5px;
  }

  .alert-dismissable,
  .alert-dismissible {
    padding-right: 35px;
  }
  
  .alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff;
    }
   .alert-error {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    }
   
   .alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe;
    }
    
    .alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca;
}
  .alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db;
    }
  .alert-dismissable .close,
  .alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }

  .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
  }

  .alert-success hr {
    border-top-color: #c9e2b3;
  }

  .alert-success .alert-link {
    color: #2b542c;
  }

  .alert-info {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1;
  }

  .alert-info hr {
    border-top-color: #a6e1ec;
  }

  .alert-info .alert-link {
    color: #245269;
  }

  .alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
  }

  .alert-warning hr {
    border-top-color: #f7e1b5;
  }

  .alert-warning .alert-link {
    color: #66512c;
  }

  .alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
  }

  .alert-danger hr {
    border-top-color: #e4b9c0;
  }

  .alert-danger .alert-link {
    color: #843534;
  }

  .btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.6;
    border-radius: 4px;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
  }

  .btn:focus,
  .btn.focus,
  .btn:active:focus,
  .btn:active.focus,
  .btn.active:focus,
  .btn.active.focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
  }

  .btn:hover,
  .btn:focus,
  .btn.focus {
    color: #636b6f;
    text-decoration: none;
  }

  .btn:active,
  .btn.active {
    background-image: none;
    outline: 0;
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
  }

  .btn.disabled,
  .btn[disabled],
  fieldset[disabled] .btn {
    cursor: not-allowed;
    filter: alpha(opacity=65);
    opacity: .65;
    box-shadow: none;
  }

  a.btn.disabled,
  .pagination > li > .btn.disabled.page-link,
  fieldset[disabled] a.btn,
  fieldset[disabled] .pagination > li > .btn.page-link {
    pointer-events: none;
  }

  .btn-default {
    color: #636b6f;
    background-color: #fff;
    border-color: #ccc;
  }

  .btn-default:focus,
  .btn-default.focus {
    color: #636b6f;
    background-color: #e6e6e6;
    border-color: #8c8c8c;
  }

  .btn-default:hover {
    color: #636b6f;
    background-color: #e6e6e6;
    border-color: #adadad;
  }

  .btn-default:active,
  .btn-default.active,
  .open > .btn-default.dropdown-toggle {
    color: #636b6f;
    background-color: #e6e6e6;
    background-image: none;
    border-color: #adadad;
  }

  .btn-default:active:hover,
  .btn-default:active:focus,
  .btn-default:active.focus,
  .btn-default.active:hover,
  .btn-default.active:focus,
  .btn-default.active.focus,
  .open > .btn-default.dropdown-toggle:hover,
  .open > .btn-default.dropdown-toggle:focus,
  .open > .btn-default.dropdown-toggle.focus {
    color: #636b6f;
    background-color: #d4d4d4;
    border-color: #8c8c8c;
  }

  .btn-default.disabled:hover,
  .btn-default.disabled:focus,
  .btn-default.disabled.focus,
  .btn-default[disabled]:hover,
  .btn-default[disabled]:focus,
  .btn-default[disabled].focus,
  fieldset[disabled] .btn-default:hover,
  fieldset[disabled] .btn-default:focus,
  fieldset[disabled] .btn-default.focus {
    background-color: #fff;
    border-color: #ccc;
  }

  .btn-default .badge {
    color: #fff;
    background-color: #636b6f;
  }

  .btn-primary {
    color: #fff;
    background-color: #3097d1;
    border-color: #2a88bd;
  }

  .btn-primary:focus,
  .btn-primary.focus {
    color: #fff;
    background-color: #2579a9;
    border-color: #133d55;
  }

  .btn-primary:hover {
    color: #fff;
    background-color: #2579a9;
    border-color: #1f648b;
  }

  .btn-primary:active,
  .btn-primary.active,
  .open > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #2579a9;
    background-image: none;
    border-color: #1f648b;
  }

  .btn-primary:active:hover,
  .btn-primary:active:focus,
  .btn-primary:active.focus,
  .btn-primary.active:hover,
  .btn-primary.active:focus,
  .btn-primary.active.focus,
  .open > .btn-primary.dropdown-toggle:hover,
  .open > .btn-primary.dropdown-toggle:focus,
  .open > .btn-primary.dropdown-toggle.focus {
    color: #fff;
    background-color: #1f648b;
    border-color: #133d55;
  }

  .btn-primary.disabled:hover,
  .btn-primary.disabled:focus,
  .btn-primary.disabled.focus,
  .btn-primary[disabled]:hover,
  .btn-primary[disabled]:focus,
  .btn-primary[disabled].focus,
  fieldset[disabled] .btn-primary:hover,
  fieldset[disabled] .btn-primary:focus,
  fieldset[disabled] .btn-primary.focus {
    background-color: #3097d1;
    border-color: #2a88bd;
  }

  .btn-primary .badge {
    color: #3097d1;
    background-color: #fff;
  }

  .btn-success,
  .hover\:btn-success:hover {
    color: #fff;
    background-color: #2ab27b;
    border-color: #259d6d;
  }

  .btn-success:focus,
  .hover\:btn-success:focus:hover,
  .btn-success.focus,
  .focus.hover\:btn-success:hover {
    color: #fff;
    background-color: #20895e;
    border-color: #0d3625;
  }

  .btn-success:hover,
  .hover\:btn-success:hover {
    color: #fff;
    background-color: #20895e;
    border-color: #196c4b;
  }

  .btn-success:active,
  .hover\:btn-success:active:hover,
  .btn-success.active,
  .active.hover\:btn-success:hover,
  .open > .btn-success.dropdown-toggle,
  .open > .dropdown-toggle.hover\:btn-success:hover {
    color: #fff;
    background-color: #20895e;
    background-image: none;
    border-color: #196c4b;
  }

  .btn-success:active:hover,
  .hover\:btn-success:active:hover,
  .btn-success:active:focus,
  .btn-success:active.focus,
  .btn-success.active:hover,
  .active.hover\:btn-success:hover,
  .btn-success.active:focus,
  .btn-success.active.focus,
  .open > .btn-success.dropdown-toggle:hover,
  .open > .dropdown-toggle.hover\:btn-success:hover,
  .open > .btn-success.dropdown-toggle:focus,
  .open > .btn-success.dropdown-toggle.focus {
    color: #fff;
    background-color: #196c4b;
    border-color: #0d3625;
  }

  .btn-success.disabled:hover,
  .disabled.hover\:btn-success:hover,
  .btn-success.disabled:focus,
  .btn-success.disabled.focus,
  .btn-success[disabled]:hover,
  [disabled].hover\:btn-success:hover,
  .btn-success[disabled]:focus,
  .btn-success[disabled].focus,
  fieldset[disabled] .btn-success:hover,
  fieldset[disabled] .hover\:btn-success:hover,
  fieldset[disabled] .btn-success:focus,
  fieldset[disabled] .btn-success.focus {
    background-color: #2ab27b;
    border-color: #259d6d;
  }

  .btn-success .badge,
  .hover\:btn-success:hover .badge {
    color: #2ab27b;
    background-color: #fff;
  }

  .btn-info {
    color: #fff;
    background-color: #8eb4cb;
    border-color: #7da8c3;
  }

  .btn-info:focus,
  .btn-info.focus {
    color: #fff;
    background-color: #6b9dbb;
    border-color: #3d6983;
  }

  .btn-info:hover {
    color: #fff;
    background-color: #6b9dbb;
    border-color: #538db0;
  }

  .btn-info:active,
  .btn-info.active,
  .open > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #6b9dbb;
    background-image: none;
    border-color: #538db0;
  }

  .btn-info:active:hover,
  .btn-info:active:focus,
  .btn-info:active.focus,
  .btn-info.active:hover,
  .btn-info.active:focus,
  .btn-info.active.focus,
  .open > .btn-info.dropdown-toggle:hover,
  .open > .btn-info.dropdown-toggle:focus,
  .open > .btn-info.dropdown-toggle.focus {
    color: #fff;
    background-color: #538db0;
    border-color: #3d6983;
  }

  .btn-info.disabled:hover,
  .btn-info.disabled:focus,
  .btn-info.disabled.focus,
  .btn-info[disabled]:hover,
  .btn-info[disabled]:focus,
  .btn-info[disabled].focus,
  fieldset[disabled] .btn-info:hover,
  fieldset[disabled] .btn-info:focus,
  fieldset[disabled] .btn-info.focus {
    background-color: #8eb4cb;
    border-color: #7da8c3;
  }

  .btn-info .badge {
    color: #8eb4cb;
    background-color: #fff;
  }

  .btn-warning {
    color: #fff;
    background-color: #cbb956;
    border-color: #c5b143;
  }

  .btn-warning:focus,
  .btn-warning.focus {
    color: #fff;
    background-color: #b6a338;
    border-color: #685d20;
  }

  .btn-warning:hover {
    color: #fff;
    background-color: #b6a338;
    border-color: #9b8a30;
  }

  .btn-warning:active,
  .btn-warning.active,
  .open > .btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #b6a338;
    background-image: none;
    border-color: #9b8a30;
  }

  .btn-warning:active:hover,
  .btn-warning:active:focus,
  .btn-warning:active.focus,
  .btn-warning.active:hover,
  .btn-warning.active:focus,
  .btn-warning.active.focus,
  .open > .btn-warning.dropdown-toggle:hover,
  .open > .btn-warning.dropdown-toggle:focus,
  .open > .btn-warning.dropdown-toggle.focus {
    color: #fff;
    background-color: #9b8a30;
    border-color: #685d20;
  }

  .btn-warning.disabled:hover,
  .btn-warning.disabled:focus,
  .btn-warning.disabled.focus,
  .btn-warning[disabled]:hover,
  .btn-warning[disabled]:focus,
  .btn-warning[disabled].focus,
  fieldset[disabled] .btn-warning:hover,
  fieldset[disabled] .btn-warning:focus,
  fieldset[disabled] .btn-warning.focus {
    background-color: #cbb956;
    border-color: #c5b143;
  }

  .btn-warning .badge {
    color: #cbb956;
    background-color: #fff;
  }

  .btn-danger,
  .hover\:btn-danger:hover {
    color: #fff;
    background-color: #bf5329;
    border-color: #aa4a24;
  }

  .btn-danger:focus,
  .hover\:btn-danger:focus:hover,
  .btn-danger.focus,
  .focus.hover\:btn-danger:hover {
    color: #fff;
    background-color: #954120;
    border-color: #411c0e;
  }

  .btn-danger:hover,
  .hover\:btn-danger:hover {
    color: #fff;
    background-color: #954120;
    border-color: #78341a;
  }

  .btn-danger:active,
  .hover\:btn-danger:active:hover,
  .btn-danger.active,
  .active.hover\:btn-danger:hover,
  .open > .btn-danger.dropdown-toggle,
  .open > .dropdown-toggle.hover\:btn-danger:hover {
    color: #fff;
    background-color: #954120;
    background-image: none;
    border-color: #78341a;
  }

  .btn-danger:active:hover,
  .hover\:btn-danger:active:hover,
  .btn-danger:active:focus,
  .btn-danger:active.focus,
  .btn-danger.active:hover,
  .active.hover\:btn-danger:hover,
  .btn-danger.active:focus,
  .btn-danger.active.focus,
  .open > .btn-danger.dropdown-toggle:hover,
  .open > .dropdown-toggle.hover\:btn-danger:hover,
  .open > .btn-danger.dropdown-toggle:focus,
  .open > .btn-danger.dropdown-toggle.focus {
    color: #fff;
    background-color: #78341a;
    border-color: #411c0e;
  }

  .btn-danger.disabled:hover,
  .disabled.hover\:btn-danger:hover,
  .btn-danger.disabled:focus,
  .btn-danger.disabled.focus,
  .btn-danger[disabled]:hover,
  [disabled].hover\:btn-danger:hover,
  .btn-danger[disabled]:focus,
  .btn-danger[disabled].focus,
  fieldset[disabled] .btn-danger:hover,
  fieldset[disabled] .hover\:btn-danger:hover,
  fieldset[disabled] .btn-danger:focus,
  fieldset[disabled] .btn-danger.focus {
    background-color: #bf5329;
    border-color: #aa4a24;
  }

  .btn-danger .badge,
  .hover\:btn-danger:hover .badge {
    color: #bf5329;
    background-color: #fff;
  }

  .btn-link {
    font-weight: 400;
    color: #3097d1;
    border-radius: 0;
  }

  .btn-link,
  .btn-link:active,
  .btn-link.active,
  .btn-link[disabled],
  fieldset[disabled] .btn-link {
    background-color: transparent;
    box-shadow: none;
  }

  .btn-link,
  .btn-link:hover,
  .btn-link:focus,
  .btn-link:active {
    border-color: transparent;
  }

  .btn-link:hover,
  .btn-link:focus {
    color: #216a94;
    text-decoration: underline;
    background-color: transparent;
  }

  .btn-link[disabled]:hover,
  .btn-link[disabled]:focus,
  fieldset[disabled] .btn-link:hover,
  fieldset[disabled] .btn-link:focus {
    color: #777;
    text-decoration: none;
  }

  .btn-lg,
  .btn-group-lg > .btn {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
  }

  .btn-sm,
  .btn-group-sm > .btn {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
  }

  .btn-xs,
  .btn-group-xs > .btn {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
  }

  .btn-block {
    display: block;
    width: 100%;
  }

  .btn-block + .btn-block {
    margin-top: 5px;
  }
</style>
