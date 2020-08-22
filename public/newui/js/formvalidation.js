$(document).ready(function() {
    $('.register-form-confirm').bootstrapValidator({
        message: 'فرم کامل نیست',
        fields: {
            input1: {
                validators: {
                    notEmpty: {
                        message: " "
                    },
                }
            },
            input2: {
                validators: {
                    notEmpty: {
                        message: " "
                    },
                }
            },
            input3: {
                validators: {
                    notEmpty: {
                        message: " "
                    },
                }
            },
            input4: {
                validators: {
                    notEmpty: {
                        message: " "
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: " "
                    },
                }
            },
            passwordd: {
                validators: {
                    notEmpty: {
                        message: " "
                    },
                }
            },
        }
    });
});