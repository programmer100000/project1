$(document).ready(function() {
    $('.admin-register-form').bootstrapValidator({
        message: 'فرم کامل نیست',
        fields: {
            username: {
                message: 'نام کاربری فقط باید شامل حروف انگلیسی و اعداد باشد ',
                validators: {
                    notEmpty: {
                        message: 'نام کاربری نباید بدون مقدار باشد'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'نام کاربری باید بین ۴ تا ۳۰ کاراکتر باشد '
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'نام کاربری فقط باید شامل حروف انگلیسی و اعداد باشد '
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    },
                    emailAddress: {
                        message: 'آدرس ایمیل معتبر نیست'
                    }
                }
            },
            fname: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            lname: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    },
                    regexp: {
                        regexp: /(\+98|0)?9\d{9}/,
                        message: 'فرمت شماره وارد شده صحیح نمیباشد'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            title: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            tel: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
            image: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    }
                }
            },
        }
    });
    $('.admin-login-form').bootstrapValidator({
        message: 'فرم کامل نیست',
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'نام کاربری نباید بدون مقدار باشد'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'نام کاربری باید بین ۴ تا ۳۰ کاراکتر باشد '
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'نام کاربری فقط باید شامل حروف انگلیسی و اعداد باشد '
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'این فیلد نمیتواند خالی باشد'
                    }
                }
            }
        }
    });
    $('.confirm-form').bootstrapValidator({
        message: 'فرم کامل نیست',
        fields: {
            confirm_form: {
                validators: {
                    notEmpty: {
                        message: 'نام کاربری نباید بدون مقدار باشد'
                    },
                    stringLength: {
                        min: 4,
                        max: 4,
                        message: 'کد باید شامل ۴ کاراکتر باشد  '
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'این فیلد نمیتواند خالی باشد'
                    }
                }
            },
            passwordd: {
                validators: {
                    notEmpty: {
                        message: 'این فیلد نمیتواند خالی باشد'
                    }
                }
            }
        }
    });
    $('.user-forget-pass-form').bootstrapValidator({
        message: 'فرم کامل نیست',
        fields: {
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    },
                    regexp: {
                        regexp: /(\+98|0)?9\d{9}/,
                        message: 'فرمت شماره وارد شده صحیح نمیباشد'
                    }
                }
            }
        }
    });
    $('.user-register-form').bootstrapValidator({
        message: 'فرم کامل نیست',
        fields: {
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'این قسمت نمیتواند خالی باشد '
                    },
                    regexp: {
                        regexp: /(\+98|0)?9\d{9}/,
                        message: 'فرمت شماره وارد شده صحیح نمیباشد'
                    }
                }
            }
        }
    });
});