// Cookies Functions //
function setCookie(name,value,days){if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));var expires="; expires="+date.toGMTString()}else var expires="";document.cookie=name+"="+value+expires+"; path=/"}function getCookie(name){var nameEQ=name+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(nameEQ)==0)return c.substring(nameEQ.length,c.length)}return null}function deleteCookie(name){setCookie(name,"",-1)}

// jQuery Numberic //
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(z($){$.v.t=z(a,b){n(H a===\'16\'){a={C:a}}a=a||{};n(H a.F=="W")a.F=u;q c=(a.C===B)?"":a.C||".";q d=(a.F===u)?u:B;q b=H b=="z"?b:z(){};w s.y("t.C",c).y("t.F",d).y("t.O",b).J($.v.t.J).Q($.v.t.Q).K($.v.t.K)};$.v.t.J=z(e){q a=$.y(s,"t.C");q b=$.y(s,"t.F");q c=e.L?e.L:e.N?e.N:0;n(c==13&&s.18.1e()=="1b"){w u}E n(c==13){w B}q d=B;n((e.A&&c==1i)||(e.A&&c==1m))w u;n((e.A&&c==1p)||(e.A&&c==1t))w u;n((e.A&&c==1v)||(e.A&&c==1x))w u;n((e.A&&c==1z)||(e.A&&c==1a))w u;n((e.A&&c==1g)||(e.A&&c==1o)||(e.1d&&c==X))w u;n(c<1k||c>1r){n(s.x.I("-")!=0&&b&&c==X&&(s.x.G===0||($.v.R(s))===0))w u;n(a&&c==a.Z(0)&&s.x.I(a)!=-1){d=B}n(c!=8&&c!=9&&c!=13&&c!=17&&c!=1s&&c!=1l&&c!=1A&&c!=14){d=B}E{n(H e.L!="W"){n(e.N==e.M&&e.M!=0){d=u;n(e.M==14)d=B}E n(e.N!=0&&e.L===0&&e.M===0){d=u}}}n(a&&c==a.Z(0)){n(s.x.I(a)==-1){d=u}E{d=B}}}E{d=u}w d};$.v.t.Q=z(e){q a=s.x;n(a.G>0){q b=$.v.R(s);q c=$.y(s,"t.C");q d=$.y(s,"t.F");n(c!==""){q f=a.I(c);n(f===0){s.x="0"+a}n(f==1&&a.U(0)=="-"){s.x="-0"+a.D(1)}a=s.x}q g=[0,1,2,3,4,5,6,7,8,9,\'-\',c];q h=a.G;V(q i=h-1;i>=0;i--){q k=a.U(i);n(i!=0&&k=="-"){a=a.D(0,i)+a.D(i+1)}E n(i===0&&!d&&k=="-"){a=a.D(1)}q l=B;V(q j=0;j<g.G;j++){n(k==g[j]){l=u;1h}}n(!l||k==" "){a=a.D(0,i)+a.D(i+1)}}q m=a.I(c);n(m>0){V(q i=h-1;i>m;i--){q k=a.U(i);n(k==c){a=a.D(0,i)+a.D(i+1)}}}s.x=a;$.v.10(s,b)}};$.v.t.K=z(){q a=$.y(s,"t.C");q b=$.y(s,"t.O");q c=s.x;n(c!==""){q d=1w 19("^\\\\d+$|\\\\d*"+a+"\\\\d+");n(!d.1B(c)){b.1F(s)}}};$.v.1n=z(){w s.y("t.C",P).y("t.F",P).y("t.O",P).Y("J",$.v.t.J).Y("K",$.v.t.K)};$.v.R=z(o){n(o.T){q r=1f.1u.1H().1D();r.12(\'S\',o.x.G);n(r.11==\'\')w o.x.G;w o.x.1c(r.11)}E w o.1q};$.v.10=z(o,p){n(H p=="1C")p=[p,p];n(p&&p.1G==1j&&p.G==2){n(o.T){q r=o.T();r.1E(u);r.1J(\'S\',p[0]);r.12(\'S\',p[1]);r.1y()}E n(o.15){o.1I();o.15(p[0],p[1])}}}})(1K);',62,109,'|||||||||||||||||||||||if|||var||this|numeric|true|fn|return|value|data|function|ctrlKey|false|decimal|substring|else|negative|length|typeof|indexOf|keypress|blur|charCode|which|keyCode|callback|null|keyup|getSelectionStart|character|createTextRange|charAt|for|undefined|45|unbind|charCodeAt|setSelection|text|moveEnd||46|setSelectionRange|boolean|35|nodeName|RegExp|90|input|lastIndexOf|shiftKey|toLowerCase|document|118|break|97|Array|48|37|65|removeNumeric|86|120|selectionStart|57|36|88|selection|99|new|67|select|122|39|exec|number|duplicate|collapse|apply|constructor|createRange|focus|moveStart|jQuery'.split('|'),0,{}));

/*jslint regexp: true, confusion: true, undef: true, sloppy: true, eqeq: true, vars: true, white: true, plusplus: true, maxerr: 50, indent: 4 */
var gdUnitConv = {
    tmp: {
        data: {},
        nonce: null,
        cat: null,
        from: null,
        to: null
    },
    init: function() {
        gdUnitConv.tmp.cat = getCookie("wp-gd-unit-converter-cat");
        gdUnitConv.tmp.from = getCookie("wp-gd-unit-converter-from");
        gdUnitConv.tmp.to = getCookie("wp-gd-unit-converter-to");

        if (gdUnitConv.tmp.cat == null) {
            gdUnitConv.tmp.cat = "length";
            gdUnitConv.tmp.from = "mm";
            gdUnitConv.tmp.to = "mm";

            gdUnitConv.cookies();
        }

        jQuery("#gduc-value").numeric();

        jQuery("#gduc-type").change(function(){
            var output = [];

            gdUnitConv.tmp.cat = jQuery(this).val();

            jQuery.each(gdUnitConv.tmp.data[gdUnitConv.tmp.cat].list, function(key, value) {
                output.push('<option value="'+ key +'">'+ value +'</option>');
            });

            jQuery("#gduc-from, #gduc-to").html(output.join(""));
            jQuery("#gduc-from").val(gdUnitConv.tmp.from);
            jQuery("#gduc-to").val(gdUnitConv.tmp.to);

            gdUnitConv.tmp.from = jQuery("#gduc-from").val();
            gdUnitConv.tmp.to = jQuery("#gduc-to").val();

            gdUnitConv.cookies();
            gdUnitConv.convert(true);
        });

        jQuery("#gduc-convert").click(function(){
            gdUnitConv.convert(true);
        });

        jQuery("#gduc-value").change(function(){
            gdUnitConv.convert(false);
        });

        jQuery("#gduc-from, #gduc-to").change(function(){
            var id = jQuery(this).attr("id").substr(5);
            gdUnitConv.tmp[id] = jQuery(this).val();

            gdUnitConv.cookies();
            gdUnitConv.convert(false);
        });

        jQuery("#gduc-type").val(gdUnitConv.tmp.cat);
        jQuery("#gduc-type").trigger("change");
    },
    cookies: function() {
        setCookie("wp-gd-unit-converter-cat", gdUnitConv.tmp.cat, 365);
        setCookie("wp-gd-unit-converter-from", gdUnitConv.tmp.from, 365);
        setCookie("wp-gd-unit-converter-to", gdUnitConv.tmp.to, 365);
    },
    convert: function(cur) {
        if (gdUnitConv.tmp.cat === "currency") {
            if (cur) {
                if (gdUnitConv.tmp.from === gdUnitConv.tmp.to) {
                    jQuery("#gduc-result").val(jQuery("#gduc-value").val());
                } else {
                    jQuery("#gduc-result").val("...please wait...");
                    jQuery.ajax({
                        url: ajaxurl,
                        type: "POST",
                        dataType: 'json',
                        cache: false,
                        data: {'action': 'gduc_currency_convert',
                               '_ajax_nonce': gdUnitConv.tmp.nonce,
                               'from': gdUnitConv.tmp.from,
                               'to': gdUnitConv.tmp.to,
                               'val': jQuery("#gduc-value").val()
                        },
                        success: function(json) {
                            jQuery("#gduc-result").val(json.result);
                        }
                    });
                }
            }
        } else {
            var value = jQuery("#gduc-value").val(), convr = 0,
                from = gdUnitConv.tmp.data[gdUnitConv.tmp.cat].convert[gdUnitConv.tmp.from],
                to = gdUnitConv.tmp.data[gdUnitConv.tmp.cat].convert[gdUnitConv.tmp.to];

            if (gdUnitConv.tmp.cat === "temperature") {
                convr = (value - from.offset) / from.ratio;
                convr = convr * to.ratio + to.offset;
            } else {
                convr = value * from;
                convr = convr / to;
            }

            jQuery("#gduc-result").val(convr);
        }
    }
};

jQuery(document).ready(function() {
    gdUnitConv.init();
});
