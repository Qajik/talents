var main;


var talents = {
    
    relatedSelectsClass : 'relatedSelectsClass',
    checkboxIsCheckedHiddenArea : 'isCheckedHiddenToggle',
    content : 'contentId',
    viewType : {
        optionView: 1,
        listView: 2
    },
    optionsUrls : function () {

        return [

            {
                url: window.YiiCreateUrl('resume-skills', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-left'
            },
            {
                url: window.YiiCreateUrl('resume-educations', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-left'
            },
            {
                url: window.YiiCreateUrl('resume-qualification', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-left'
            },
            {
                url: window.YiiCreateUrl('resume-awards', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-left'
            },
            {
                url: window.YiiCreateUrl('resume-interests', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-left'
            },
            {
                url: window.YiiCreateUrl('resume-experiences', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-right'
            },
            {
                url: window.YiiCreateUrl('resume-language', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-right'
            },
            {
                url: window.YiiCreateUrl('resume-volunteer', 'view'),
                params: {viewType: this.viewType.optionView},
                contentSelector: '.profile-details-right'
            }

        ];

    },

    init: function () {

        main = this;
        this.loadOptions();
        this.clickAddButton();
        this.formSubmit();
        this.deleteItem();
        this.closeEditMode();
        this.autocomplate();
        this.editForm();
        this.relatedSelects();
        this.checkboxIsCheckedHiddenAreaFunction();
        this.commonActions();
        this.tabOnClickLoad();
    },
    initAferFormLoad : function(){
        this.checkboxIsCheckedHiddenAreaFunctionScan();
    },
    
    commonActions : function(){
        $(document).on('click','input[type=checkbox]', function(){
            $(this).prop('checked', $(this).is(':checked'));
            if($(this).is(':checked'))
                $(this).val(1);
            else
                 $(this).val(0);
        });
    },
    
    loadOptions: function (contentSelector) {

        var options = this.optionsUrls();
        for (var k in options) {
            this.putOption(options, k);
        }

    },

    putOption: function (options, k) {

        this.requestGet(options[k].url, options[k].params, function (data) {
            $(options[k].contentSelector).append(data);
        });

    },

    requestGet: function (url, params, callback) {

        $.get(url, params).done(function (data) {
            callback(data);
        });
    },

    requestPost: function (url, params, callback) {

        $.post(url, params).done(function (data) {
            callback(data);
        });

    },

    clickAddButton: function () {

        $(document).on('click', '.addOptionButton', function () {
            var optName = $(this).parents('.dataTagGlobal').attr('data_action');
            main.loadForm(optName, 'create', 0);
        });

    },

    loadForm: function (optName, action, id) {

        var url = window.YiiCreateUrl(optName, action, id);

        this.requestGet(url, {}, function (data) {
            $('#' + optName + '-body').html(data);
            main.initAferFormLoad();
        });
    },
    
    editForm : function(){
        $(document).on('click','.optionsListedItemsRow .dataPreserver, .optionsItemEditAction',function(){
            var optName     = $(this).parents('.dataTagGlobal').attr('data_action');
            var currenntID  = $(this).attr('data_id');
            
            main.loadForm(optName,'update',currenntID);
        })
    },

    formSubmit: function () {

        $(document).on('submit', '.optionAjaxSubmitForm', function () {

            event.preventDefault();

            var data = $(this).serializeArray();
            var actionName = $(this).parents('.dataTagGlobal').attr('data_action');
            var url = $(this).attr('action')//window.YiiCreateUrl(actionName, 'create');
            var currentFormElement = $(this);

            main.requestPost(url, data, function (data) {

                $('#' + actionName + '-body').html(data);
                currentFormElement.find('input').each(function () {

                    var formName = $(this).attr('name');

                    if (formName != '_csrf-frontend')
                        $('#' + $(this).attr('id')).val('');

                });
                main.initAferFormLoad();

            });

        });

    },

    deleteItem: function () {

        $(document).on('click', '.deleteItemFromOptions', function () {

            var id = $(this).parents('.dataPreserver').attr('data_id');
            var actionName = $(this).parents('.dataTagGlobal').attr('data_action');
            var url = window.YiiCreateUrl(actionName, 'delete', id);

            main.requestPost(url, {}, function (data) {
                $('#' + actionName + '-body').html(data);
            });

        });

    },

    closeEditMode: function () {

        $(document).on('click', '.closeEditingMode , .toClose', function () {
            var actionName = $(this).parents('.dataTagGlobal').attr('data_action');
            var url = window.YiiCreateUrl(actionName, 'view');

            main.requestGet(url, {viewType: main.viewType.listView}, function (data) {
                $('#' + actionName + '-body').html(data);
            });
        });
    },

    autocomplate: function () {

        $(document).on('keyup focus', '.tlFormAutocomplate', function () {

            var actionName = $(this).parents('.dataTagGlobal').attr('data_action');
            var url = window.YiiCreateUrl(actionName, 'autocomplate');
            var value = $(this).val();
            var currentModelName = $(this).attr('data_model');
            var searchBy = $(this).attr('data_search_by');
            var currentField = $(this);
            var idRelatedTo = $(this).attr('data_related_to');

            $('#' + actionName + '-autocomplateList').remove();

            if (value == '') {
                return;
            }

            $(this).blur(function () {
                setTimeout(function () {
                    $('#' + actionName + '-autocomplateList').remove();
                }, 250)
            });

            main.requestGet(url, {
                value: value,
                currentModelName: currentModelName,
                searchBy: searchBy
            }, function (data) {
                if (data.length > 0) {
                    var htmlContent = main.autocomplateSelectList(data, {tagId: actionName});
                    currentField.parent('div').append(htmlContent);
                }
            });

            $(document).on('click', '.m_autocomplateItem', function () {
                var value = $(this).attr('data_name');
                var id = $(this).attr('data_id');

                currentField.val(value);
                $('#' + idRelatedTo).val(id);
            });

        });
    },

    autocomplateSelectList: function (data, propertis) {

        var view = '<div id="' + propertis.tagId + '-autocomplateList" class="autocomplateFoundDataList">';
        view += '<ul>';

        for (var k in data) {
            view += this.autocomplateSelectItem(data[k].id, data[k].value);
        }
        view += '</ul>';
        view += '</div>';
        return view;
    },

    autocomplateSelectItem: function (dataId, dataName) {
        return '<li class="m_autocomplateItem" data_id="' + dataId + '" data_name="' + dataName + '">' + dataName + '</li>';
    },
    
    relatedSelects : function(){
        $(document).on('change','.'+this.relatedSelectsClass, function(e){
            var actionName      = $(this).parents('.dataTagGlobal').attr('data_action');
            var methodName      = $(this).attr('data_method');
            var selectedId      = $(this).val();
            var url             = window.YiiCreateUrl(actionName,methodName,selectedId);
            var $relatedSelectId= $(this).attr('data_related_id');
            var $relatedSelect  = $('#'+$relatedSelectId); 
            
            $relatedSelect.html('<option value="">Select Segment ...</option>');
            
            main.requestGet(url,{}, function(data){
                
                for(var k in data)
                {
                    $relatedSelect.append('<option value=' + k + '>' + data[k] + '</option>');
                }
                
            });
        });
    },
    
    checkboxIsCheckedHiddenAreaFunction : function(){
        
        $(document).on('change', '.'+this.checkboxIsCheckedHiddenArea,function(e){
            var isChecked = $(this).is(':checked');
            var affectArea = $(this).attr('data_area');
            if(isChecked){
                $(affectArea).attr('style','display:none;');
            }else{
                $(affectArea).attr('style','');
            }
        });
    },
    
    checkboxIsCheckedHiddenAreaFunctionScan : function(){
        $('.'+this.checkboxIsCheckedHiddenArea).each(function(index, currentElement){
            var currentElement = $(this);
            var isChecked = currentElement.is(':checked');
            var affectArea = $(this).attr('data_area');
            if(isChecked){
                $(affectArea).attr('style','display:none;');
            }
        });
    },
    
    tabOnClickLoad : function(){
        $(document).on('click', '.talentsProfileTabNavigation', function(){
            var current = $(this);
            var controllerName = current.attr('data-controller');
            if(controllerName == 'default'){return;}
            var url = window.YiiCreateUrl(controllerName,'list');
            var htmlContentId = current.attr('href');
            
            main.requestGet(url,[],function(data){
               // console.log(data)
                $(htmlContentId).html(data);
                current.attr('data-controller','default');
            });
        });
    }
    
}

talents.init();


$(document).on('click','.experienceViewMore', function(){
    $('.experienceOptionalForShowing').slideUp('lsow');
    $(this)
            .parent('.experienceEditViewMore')
            .siblings('.experienceItemDescription')
            .children('.experienceOptionalForShowing')
            .slideDown('slow');
    
});