(function(e, t) {
    function n(e) {
        var t = RegExp("[?&]" + e + "=([^&]*)").exec(window.location.search);
        return t && decodeURIComponent(t[1].replace(/\+/g, " "))
    }
    function r(e) {
        if (e <= 191) {
            var t = document.createElement("script");
            t.setAttribute("type", "text/javascript");
            t.setAttribute("src", a + "//" + f + l[1]);
            t.setAttribute("charset", "UTF-8");
            if (t.readyState) {
                t.onreadystatechange = function() {
                    if (this.readyState == "complete"
                        || this.readyState == "loaded") {
                        t.onreadystatechange = null;
                        i(e)
                    }
                }
            } else {
                t.onload = function() {
                    i(e)
                }
            }
            (document.getElementsByTagName("head")[0] || document.documentElement)
                .appendChild(t)
        } else {
            i(e)
        }
    }
    function i(e) {
        var t = n("Lang") == null || n("Lang") == "" ? null : n("Lang");
        if (t == null) {
            t = document.getElementById("aweb-widget-search-container")
                .getAttribute("data-lang");
            t = t == null || t == "" ? "en" : t
        }
        var r = document.createElement("script");
        r.setAttribute("type", "text/javascript");
        r.setAttribute("src", a + "//" + f
            + "/widget/js/jui/i18n/jquery.ui.datepicker-" + t + ".min.js");
        r.setAttribute("charset", "UTF-8");
        if (r.readyState) {
            r.onreadystatechange = function() {
                if (this.readyState == "complete"
                    || this.readyState == "loaded") {
                    r.onreadystatechange = null;
                    u = window.jQuery.noConflict(true);
                    s(e)
                }
            }
        } else {
            r.onload = function() {
                u = window.jQuery.noConflict(true);
                s(e)
            }
        }
        (document.getElementsByTagName("head")[0] || document.documentElement)
            .appendChild(r)
    }
    function s(e) {
        var t = document.getElementById("aweb-widget-search-container");
        if (t == null || t == "") {
            alert("container is empty...!")
        } else {
            var r = t.getAttribute("data-domainname");
            if (r == null || r == "")
                alert("domainname is empty...!");
            else {
                r = a + "//" + r;
                var i = [];
                var s = null;
                d = 'ru';//n("Lang");
                d = d == null || d == "" ? t.getAttribute("data-lang") : d;
                d = d == null || d == "" ? "en" : d;
                _target = t.getAttribute("data-target");
                _target = _target == null || _target == "" ? "_blank" : "_self";
                var l = {
                    layouts : r + "/a/widget/layouts?Lang=" + d,
                    airports : r + "/a/widget/combo/airports?Lang=" + d,
                    locations : r + "/a/widget/combo/locations?Lang=" + d,
                    settings : r + "/a/widget/settings?Lang=" + d
                };
                u.fn.extend({
                    propAttr : u.fn.prop || u.fn.attr
                });
                u.cachedScript = function(e, t) {
                    t = u.extend(t || {}, {
                        dataType : "script",
                        cache : false,
                        url : e
                    });
                    try {
                        return u.ajax(t)
                    } catch (n) {
                        alert(n.message)
                    }
                };
                u.__airports = function(e, t) {
                    u.cachedScript(l["airports"] + "&query=" + e).done(
                        function(e, n) {
                            if (n == "success") {
                                t(u.map(__airports, function(e) {
                                    return {
                                        id : e.id,
                                        value : e.value
                                    }
                                }))
                            } else {
                                alert(n)
                            }
                        })
                };
                u.__linkCSS = function() {
                    try {
                        var e = [a + "//" + f + c[0],
                            r + "/widget/css/aweb-widget-theme.css"];
                        e.push(p[9]);
                        var t = null;
                        for (var n = 0; n < e.length; n++) {
                            t = document.createElement("link");
                            t.setAttribute("rel", "stylesheet");
                            t.setAttribute("type", "text/css");
                            t.setAttribute("href", e[n] + "?ver=" + o);
                            (document.getElementsByTagName("head")[0] || document.documentElement)
                                .appendChild(t)
                        }
                    } catch (i) {
                        return
                    }
                };
                u.__createLayout = function() {
                    s = document.createElement("div");
                    s.setAttribute("id", "aweb-search-panel");
                    s.setAttribute("style", "background-color:#" + p[2]
                        + ";border:1px solid #" + p[3]);
                    s.setAttribute("class", p[1]);
                    u
                        .cachedScript(l["layouts"])
                        .done(
                            function(e, t) {
                                if (t == "success") {
                                    u.each(__content, function(e, t) {
                                        var n = document
                                            .createElement("div");
                                        n.innerHTML = t["value"];
                                        s.appendChild(n.firstChild);
                                    });
                                    u("#aweb-dir").buttonset();
                                    u("#aweb-widget-search-container").addClass('uk-width-small-1-1 uk-width-medium-1-3');
                                    u("#aweb-dir1-label").addClass('uk-active');
                                    u("#aweb-dir1-label")
                                        .click(
                                            function() {
                                                u("#aweb-dir1-label").addClass('uk-active');
                                                var e = u(
                                                    "#return_date")
                                                    .prop(
                                                        "disabled");
                                                if (!e) {
                                                    var t = u(
                                                        "#aweb-dir2-label")
                                                        .removeClass("uk-active");
                                                    var n = u(
                                                        this)
                                                        .attr(
                                                            "style");
                                                    u(this)
                                                        .attr(
                                                            "style",
                                                            t);
                                                    u(
                                                        "#aweb-dir2-label")
                                                        .attr(
                                                            "style",
                                                            n);
                                                    u(
                                                        "#return_date")
                                                        .prop(
                                                            "disabled",
                                                            true)
                                                }
                                            });
                                    u("#aweb-dir2-label")
                                        .click(
                                            function() {
                                                u("#aweb-dir2-label").addClass('uk-active');
                                                var e = u(
                                                    "#return_date")
                                                    .prop(
                                                        "disabled");
                                                if (e) {
                                                    var t = u(
                                                        "#aweb-dir1-label")
                                                        .removeClass('uk-active');
                                                    var n = u(
                                                        this)
                                                        .attr(
                                                            "style");
                                                    u(this)
                                                        .attr(
                                                            "style",
                                                            t);
                                                    u(
                                                        "#aweb-dir1-label")
                                                        .attr(
                                                            "style",
                                                            n);
                                                    u(
                                                        "#return_date")
                                                        .prop(
                                                            "disabled",
                                                            false)
                                                }
                                            });
                                    u.datepicker
                                        .setDefaults(u.datepicker.regional[d]);
                                    u("#departure_date, #return_date")
                                        .datepicker(
                                            {
                                                changeMonth : true,
                                                changeYear : true,
                                                yearRange : "0:+1",
                                                numberOfMonths : 1,
                                                dateFormat : "dd.mm.yy",
                                                firstDay : 1,
                                                minDate : 0,
                                                beforeShow : function(
                                                    e, t) {
                                                    if (u(
                                                            "#return_date")
                                                            .is(
                                                                e)) {
                                                        var n = u(
                                                            "#departure_date")
                                                            .datepicker(
                                                                "getDate");
                                                        n
                                                            .setTime(n
                                                                .getTime());
                                                        t.settings.minDate = n
                                                    }
                                                },
                                                onSelect : function(
                                                    e, t) {
                                                    if (u(
                                                            "#departure_date")
                                                            .is(
                                                                t.input)) {
                                                        var n = u(
                                                            "#departure_date")
                                                            .datepicker(
                                                                "getDate");
                                                        var r = u(
                                                            "#return_date")
                                                            .datepicker(
                                                                "getDate");
                                                        if (r
                                                            && n
                                                                .getTime() >= r
                                                                .getTime()) {
                                                            r
                                                                .setTime(n
                                                                    .getTime());
                                                            u(
                                                                "#return_date")
                                                                .datepicker(
                                                                    "setDate",
                                                                    r)
                                                        }
                                                    }
                                                }
                                            });
                                    u("#fromAirport")
                                        .autocomplete(
                                            {
                                                source : function(
                                                    e, t) {
                                                    u
                                                        .data(
                                                            this.element[0],
                                                            "value",
                                                            e.term);
                                                    u
                                                        .__airports(
                                                            e.term,
                                                            t)
                                                },
                                                minLength : 2,
                                                select : function(
                                                    e, t) {
                                                    u(
                                                        "#departure_id")
                                                        .val(
                                                            t.item.id)
                                                }
                                            });
                                    u("#toAirport")
                                        .autocomplete(
                                            {
                                                source : function(
                                                    e, t) {
                                                    u
                                                        .data(
                                                            this.element[0],
                                                            "value",
                                                            e.term);
                                                    u
                                                        .__airports(
                                                            e.term,
                                                            t)
                                                },
                                                minLength : 2,
                                                select : function(
                                                    e, t) {
                                                    u(
                                                        "#destination_id")
                                                        .val(
                                                            t.item.id)
                                                }
                                            });
                                    u(".aweb-btn").click(function() {
                                        u.__search()
                                    })
                                } else {
                                    alert(t)
                                }
                            });
                    t.setAttribute("data-version", e);
                    t.appendChild(s)
                };
                u.__search = function() {
                    var e = {
                        "ç" : "c",
                        "Ç" : "C",
                        "İ" : "I",
                        "ı" : "i",
                        "ş" : "s",
                        "Ş" : "S",
                        "ğ" : "g",
                        "Ğ" : "G",
                        "ö" : "o",
                        "Ö" : "O",
                        "ü" : "u",
                        "Ü" : "U"
                    };
                    var t = [];
                    var n = true;
                    u("#aweb-search-panel [name]:not(:disabled)").each(
                        function() {
                            var r = this.value.replace(/[^\w ]/g, function(
                                t) {
                                return e[t] || t
                            });
                            if (this.name == "departure_id"
                                && (r == null || r == "")
                                || this.name == "destination_id"
                                && (r == null || r == "")) {
                                alert(p[5]);
                                return n = false
                            }
                            var i = this.name + "=" + r;
                            t.push(i)
                        });
                    if (n) {
                        var i = t.join("&");
                        window.open(r + "/a/flight/search/result/all?" + i);//, _target)
                    }
                };
                u(document).ready(function(e) {
                    u.cachedScript(l["settings"]).done(function(e, t) {
                        if (t == "success") {
                            u.each(__datas, function(e, t) {
                                p.push(t.value)
                            });
                            u.__linkCSS();
                            u.__createLayout()
                        } else {
                            alert(t)
                        }
                    })
                })
            }
        }
    }
    var o = 2.7;
    var u;
    var a = "https:" === window.location.protocol ? "https:" : "http:";
    var f = document.getElementById("aweb-widget-search-container")
        .getAttribute("data-domainname");
    var l = ["/widget/js/jquery-1.10.2.js",
        "/widget/jquery-ui-widget/js/jquery-ui-1.10.3.custom.min.js"];
    var c = ["/widget/jquery-ui-widget/css/smoothness/jquery-ui-1.10.3.custom.min.css"];
    var h = null, p = [];
    var d = null;
    var v = null;
    var _target = null;
    if (window.jQuery === t
        || parseInt(window.jQuery.fn.jquery.split(".").join("")) <= 191) {
        if (window.jQuery !== t)
            v = parseInt(window.jQuery.fn.jquery.split(".").join(""));
        var m = document.createElement("script");
        m.setAttribute("type", "text/javascript");
        m.setAttribute("src", a + "//" + f + l[0]);
        m.setAttribute("charset", "UTF-8");
        if (m.readyState) {
            m.onreadystatechange = function() {
                if (this.readyState == "complete"
                    || this.readyState == "loaded") {
                    m.onreadystatechange = null;
                    r(v)
                }
            }
        } else {
            m.onload = function() {
                r(v)
            }
        }
        (document.getElementsByTagName("head")[0] || document.documentElement)
            .appendChild(m)
    } else {
        v = parseInt(window.jQuery.fn.jquery.split(".").join(""));
        r(v)
    }
})()