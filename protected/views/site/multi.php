<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Multiselect</title>
        <link type="text/css" href="<?php Yii::app()->request->baseUrl; ?>"css/common.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/multiselect.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.uix.multiselect..css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/jquery.uix.multiselect.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_de.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_es.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_et.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_fr.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_nl.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_pt.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_ru.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/locales/jquery.uix.multiselect_sv.js"></script>
        <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>js/jquery.themeswitcher.min.js"></script>
        <script type="text/javascript">
            $(function() {
                //navigator.userLanguage = 'fr';

                if ($.fn.themeswitcher) {
                    $('#switcher')
                        .css('padding-bottom', '8px')
                        .before('<h4>Use the themeroller to dynamically change look and feel</h4>')
                        .themeswitcher({imgpath: "images/"});
                }


                var defaultOptions = {
                    //availableListPosition: 'bottom',
                    moveEffect: 'blind',
                    moveEffectOptions: {direction:'vertical'},
                    moveEffectSpeed: 'fast'
                };

                var widgets = {
                    'simple': $.extend($.extend({}, defaultOptions), {
                        sortMethod: 'standard',
                        sortable: true
                    }),
                    'disabled': $.extend({}, defaultOptions),
                    'groups': $.extend($.extend({}, defaultOptions), {
                        sortMethod: 'standard',
                        showEmptyGroups: true,
                        sortable: true
                    }),
                    'dynamic': $.extend({}, defaultOptions)
                };

                $.each(widgets, function(k, i) {
                    $('#multiselect_'+k).multiselect(i).on('multiselectChange', function(evt, ui) {
                        var values = $.map(ui.optionElements, function(opt) { return $(opt).attr('value'); }).join(', ');
                        $('#debug_'+k).prepend( $('<div></div>').text('Multiselect change event! ' + (ui.optionElements.length == $('#multiselect_'+k).find('option').size() ? 'all ' : '') + (ui.optionElements.length + ' value' + (ui.optionElements.length > 1 ? 's were' : ' was')) + ' ' + (ui.selected ? 'selected' : 'deselected') + ' (' + values + ')') );
                    }).on('multiselectSearch', function(evt, ui) {
                        $('#debug_'+k).prepend( $('<div></div>').text('Multiselect beforesearch event! searching for "' + ui.term + '"') );
                    }).closest('form').submit(function(evt) {
                        evt.preventDefault(); evt.stopPropagation();

                        $('#debug_'+k).prepend( $('<div></div>').text("Submit query = " + $(this).serialize() ) );

                        return false;
                    });

                    $('#btnToggleOriginal_'+k).click(function() {
                        var _m = $('#multiselect_'+k);
                        if (_m.is(':visible')) {
                            _m.next().toggle().end().toggleClass('uix-multiselect-original').multiselect('refresh');
                        } else {
                            _m.toggleClass('uix-multiselect-original').next().toggle();
                        }
                        return false;
                    });
                    $('#btnSearch_'+k).click(function() {
                        $('#multiselect_'+k).multiselect('search', $('#txtSearch_'+k).val());
                    });

                });

                $('#btnGenerate_dynamic').click(function() {
                    var start = new Date().getTime();
                    var temp = $('<select></select>');
                    var count = parseInt($('#txtGenerate_dynamic').val());
                    for (var i=0; i<count; i++) {
                        temp.append($('<option></option>').val('item'+(i+1)).text("Item " + (i+1)));
                    }
                    $('#multiselect_dynamic').empty().html(temp.html()).multiselect('refresh', function() {
                        var diff = new Date().getTime() - start;
                        if (diff > 1000) {
                            diff /= 1000;
                            if (diff > 60) {
                                diff = (diff / 60) + " min";
                            } else {
                                diff += " sec";
                            }
                        } else {
                            diff += " ms";
                        }
                        $('#debug_dynamic').prepend($('<div></div>').text("Generated " + count + " options in " + diff));
                    });
                });



                $('#selectLocale').change(function() {
                    $('.multiselect').multiselect('locale', $(this).val() );
                });

                // build locale options
                for (var locale in $.uix.multiselect.i18n) {
                    $('#selectLocale').append($('<option></option>').attr('value', locale).text(locale.length == 0 ? '(default)' : locale));
                }
                $('#selectLocale').val($('#multiselect').multiselect('locale'));

            });
        </script>
        <style type="text/css">
            .example-container {
                overflow:visible;
                padding: 20px;
                width:70%;
                float: right;
            }
        </style>
    </head>
    <body>

    <div id="content">

        

        <h1>Invitar amics</h1>

        <div id="switcher"></div>
       

        <div id="usage_simple" style="position:relative;">
            <form action="" method="get">
           
            <div class="example-container ui-helper-clearfix">
            <select id="multiselect_simple" name="multiselect" class="multiselect" multiple="multiple" style="width:50%">
                <option value="amic"><?php echo Yii::app()->user->id;?></option>
            </div>

            <div class="debug_uiControls">
                <button id="btnToggleOriginal_simple"></button>
                <div style="margin-left: 500px;"><input type="submit" value="Invitar" /></div>
            </div>
            </form>
        </div>
    </div>

    </body>
</html>
