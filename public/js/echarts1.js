function doechar(){
!
function(t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.echarts = e() : t.echarts = e()
} (this,
function() {
    return function(t) {
        function e(n) {
            if (i[n]) return i[n].exports;
            var r = i[n] = {
                exports: {},
                id: n,
                loaded: !1
            };
            return t[n].call(r.exports, r, r.exports, e),
            r.loaded = !0,
            r.exports
        }
        var i = {};
        return e.m = t,
        e.c = i,
        e.p = "",
        e(0)
    } ([function(t, e, i) {
        t.exports = i(2),
        i(85),
        i(79),
        i(90),
        i(165),
        i(198),
        i(178),
        i(36),
        i(189),
        i(184),
        i(183),
        i(168),
        i(190),
        i(206)
    },
    function(t, e, i) {
        function n(t) {
            if ("object" == typeof t && null !== t) {
                var e = t;
                if (t instanceof Array) {
                    e = [];
                    for (var i = 0,
                    r = t.length; r > i; i++) e[i] = n(t[i])
                } else if (!A(t) && !T(t)) {
                    e = {};
                    for (var o in t) t.hasOwnProperty(o) && (e[o] = n(t[o]))
                }
                return e
            }
            return t
        }
        function r(t, e, i) {
            if (!S(e) || !S(t)) return i ? n(e) : t;
            for (var o in e) if (e.hasOwnProperty(o)) {
                var a = t[o],
                s = e[o]; ! S(s) || !S(a) || b(s) || b(a) || T(s) || T(a) || A(s) || A(a) ? !i && o in t || (t[o] = n(e[o], !0)) : r(a, s, i)
            }
            return t
        }
        function o(t, e) {
            for (var i = t[0], n = 1, o = t.length; o > n; n++) i = r(i, t[n], e);
            return i
        }
        function a(t, e) {
            for (var i in e) e.hasOwnProperty(i) && (t[i] = e[i]);
            return t
        }
        function s(t, e, i) {
            for (var n in e) e.hasOwnProperty(n) && (i ? null != e[n] : null == t[n]) && (t[n] = e[n]);
            return t
        }
        function l() {
            return document.createElement("canvas")
        }
        function h() {
            return L || (L = F.createCanvas().getContext("2d")),
            L
        }
        function c(t, e) {
            if (t) {
                if (t.indexOf) return t.indexOf(e);
                for (var i = 0,
                n = t.length; n > i; i++) if (t[i] === e) return i
            }
            return - 1
        }
        function u(t, e) {
            function i() {}
            var n = t.prototype;
            i.prototype = e.prototype,
            t.prototype = new i;
            for (var r in n) t.prototype[r] = n[r];
            t.prototype.constructor = t,
            t.superClass = e
        }
        function d(t, e, i) {
            t = "prototype" in t ? t.prototype: t,
            e = "prototype" in e ? e.prototype: e,
            s(t, e, i)
        }
        function f(t) {
            return t ? "string" == typeof t ? !1 : "number" == typeof t.length: void 0
        }
        function p(t, e, i) {
            if (t && e) if (t.forEach && t.forEach === E) t.forEach(e, i);
            else if (t.length === +t.length) for (var n = 0,
            r = t.length; r > n; n++) e.call(i, t[n], n, t);
            else for (var o in t) t.hasOwnProperty(o) && e.call(i, t[o], o, t)
        }
        function g(t, e, i) {
            if (t && e) {
                if (t.map && t.map === N) return t.map(e, i);
                for (var n = [], r = 0, o = t.length; o > r; r++) n.push(e.call(i, t[r], r, t));
                return n
            }
        }
        function m(t, e, i, n) {
            if (t && e) {
                if (t.reduce && t.reduce === V) return t.reduce(e, i, n);
                for (var r = 0,
                o = t.length; o > r; r++) i = e.call(n, i, t[r], r, t);
                return i
            }
        }
        function v(t, e, i) {
            if (t && e) {
                if (t.filter && t.filter === R) return t.filter(e, i);
                for (var n = [], r = 0, o = t.length; o > r; r++) e.call(i, t[r], r, t) && n.push(t[r]);
                return n
            }
        }
        function y(t, e, i) {
            if (t && e) for (var n = 0,
            r = t.length; r > n; n++) if (e.call(i, t[n], n, t)) return t[n]
        }
        function x(t, e) {
            var i = B.call(arguments, 2);
            return function() {
                return t.apply(e, i.concat(B.call(arguments)))
            }
        }
        function _(t) {
            var e = B.call(arguments, 1);
            return function() {
                return t.apply(this, e.concat(B.call(arguments)))
            }
        }
        function b(t) {
            return "[object Array]" === O.call(t)
        }
        function w(t) {
            return "function" == typeof t
        }
        function M(t) {
            return "[object String]" === O.call(t)
        }
        function S(t) {
            var e = typeof t;
            return "function" === e || !!t && "object" == e
        }
        function A(t) {
            return !! P[O.call(t)] || t instanceof D
        }
        function T(t) {
            return t && 1 === t.nodeType && "string" == typeof t.nodeName
        }
        function C(t) {
            for (var e = 0,
            i = arguments.length; i > e; e++) if (null != arguments[e]) return arguments[e]
        }
        function I() {
            return Function.call.apply(B, arguments)
        }
        function k(t, e) {
            if (!t) throw new Error(e)
        }
        var L, D = i(17),
        P = {
            "[object Function]": 1,
            "[object RegExp]": 1,
            "[object Date]": 1,
            "[object Error]": 1,
            "[object CanvasGradient]": 1
        },
        O = Object.prototype.toString,
        z = Array.prototype,
        E = z.forEach,
        R = z.filter,
        B = z.slice,
        N = z.map,
        V = z.reduce,
        F = {
            inherits: u,
            mixin: d,
            clone: n,
            merge: r,
            mergeAll: o,
            extend: a,
            defaults: s,
            getContext: h,
            createCanvas: l,
            indexOf: c,
            slice: I,
            find: y,
            isArrayLike: f,
            each: p,
            map: g,
            reduce: m,
            filter: v,
            bind: x,
            curry: _,
            isArray: b,
            isString: M,
            isObject: S,
            isFunction: w,
            isBuildInObject: A,
            isDom: T,
            retrieve: C,
            assert: k,
            noop: function() {}
        };
        t.exports = F
    },
    function(t, e, i) {
        function n(t) {
            return function(e, i, n) {
                e = e && e.toLowerCase(),
                k.prototype[t].call(this, e, i, n)
            }
        }
        function r() {
            k.call(this)
        }
        function o(t, e, i) {
            i = i || {},
            "string" == typeof e && (e = Z[e]),
            e && L(G,
            function(t) {
                t(e)
            }),
            this.id,
            this.group,
            this._dom = t,
            this._zr = A.init(t, {
                renderer: i.renderer || "canvas",
                devicePixelRatio: i.devicePixelRatio
            }),
            this._theme = T.clone(e),
            this._chartsViews = [],
            this._chartsMap = {},
            this._componentsViews = [],
            this._componentsMap = {},
            this._api = new v(this),
            this._coordSysMgr = new y,
            k.call(this),
            this._messageCenter = new r,
            this._initEvents(),
            this.resize = T.bind(this.resize, this)
        }
        function a(t, e) {
            var i = this._model;
            i && i.eachComponent({
                mainType: "series",
                query: e
            },
            function(n, r) {
                var o = this._chartsMap[n.__viewId];
                o && o.__alive && o[t](n, i, this._api, e)
            },
            this)
        }
        function s(t, e, i) {
            var n = this._api;
            L(this._componentsViews,
            function(r) {
                var o = r.__model;
                r[t](o, e, n, i),
                p(o, r)
            },
            this),
            e.eachSeries(function(r, o) {
                var a = this._chartsMap[r.__viewId];
                a[t](r, e, n, i),
                p(r, a)
            },
            this)
        }
        function l(t, e) {
            for (var i = "component" === t,
            n = i ? this._componentsViews: this._chartsViews, r = i ? this._componentsMap: this._chartsMap, o = this._zr, a = 0; a < n.length; a++) n[a].__alive = !1;
            e[i ? "eachComponent": "eachSeries"](function(t, a) {
                if (i) {
                    if ("series" === t) return
                } else a = t;
                var s = a.id + "_" + a.type,
                l = r[s];
                if (!l) {
                    var h = _.parseClassType(a.type),
                    c = i ? w.getClass(h.main, h.sub) : M.getClass(h.sub);
                    if (!c) return;
                    l = new c,
                    l.init(e, this._api),
                    r[s] = l,
                    n.push(l),
                    o.add(l.group)
                }
                a.__viewId = s,
                l.__alive = !0,
                l.__id = s,
                l.__model = a
            },
            this);
            for (var a = 0; a < n.length;) {
                var s = n[a];
                s.__alive ? a++:(o.remove(s.group), s.dispose(e, this._api), n.splice(a, 1), delete r[s.__id])
            }
        }
        function h(t, e) {
            L(P,
            function(i) {
                L(F[i] || [],
                function(i) {
                    i(t, e)
                })
            })
        }
        function c(t) {
            var e = {};
            t.eachSeries(function(t) {
                var i = t.get("stack"),
                n = t.getData();
                if (i && "list" === n.type) {
                    var r = e[i];
                    r && (n.stackedOn = r),
                    e[i] = n
                }
            })
        }
        function u(t, e) {
            var i = this._api;
            L(V,
            function(n) {
                n(t, i, e)
            })
        }
        function d(t, e) {
            L(D,
            function(i) {
                L(H[i] || [],
                function(i) {
                    i(t, e)
                })
            })
        }
        function f(t, e) {
            var i = this._api;
            L(this._componentsViews,
            function(n) {
                var r = n.__model;
                n.render(r, t, i, e),
                p(r, n)
            },
            this),
            L(this._chartsViews,
            function(t) {
                t.__alive = !1
            },
            this),
            t.eachSeries(function(n, r) {
                var o = this._chartsMap[n.__viewId];
                o.__alive = !0,
                o.render(n, t, i, e),
                o.group.silent = !!n.get("silent"),
                p(n, o)
            },
            this),
            L(this._chartsViews,
            function(e) {
                e.__alive || e.remove(t, i)
            },
            this)
        }
        function p(t, e) {
            var i = t.get("z"),
            n = t.get("zlevel");
            e.group.traverse(function(t) {
                null != i && (t.z = i),
                null != n && (t.zlevel = n)
            })
        }
        function g(t) {
            function e(t, e) {
                for (var i = 0; i < t.length; i++) {
                    var n = t[i];
                    n[o] = e
                }
            }
            var i = 0,
            n = 1,
            r = 2,
            o = "__connectUpdateStatus";
            T.each(N,
            function(a, s) {
                t._messageCenter.on(s,
                function(a) {
                    if (q[t.group] && t[o] !== i) {
                        var s = t.makeActionFromEvent(a),
                        l = [];
                        for (var h in W) {
                            var c = W[h];
                            c !== t && c.group === t.group && l.push(c)
                        }
                        e(l, i),
                        L(l,
                        function(t) {
                            t[o] !== n && t.dispatchAction(s)
                        }),
                        e(l, r)
                    }
                })
            })
        }
        /*!
	 * ECharts, a javascript interactive chart library.
	 *
	 * Copyright (c) 2015, Baidu Inc.
	 * All rights reserved.
	 *
	 * LICENSE
	 * https://github.com/ecomfe/echarts/blob/master/LICENSE.txt
	 */
        var m = i(111),
        v = i(78),
        y = i(23),
        x = i(112),
        _ = i(10),
        b = i(13),
        w = i(54),
        M = i(26),
        S = i(3),
        A = i(68),
        T = i(1),
        C = i(22),
        I = i(14),
        k = i(21),
        L = T.each,
        D = ["echarts", "chart", "component"],
        P = ["transform", "filter", "statistic"];
        r.prototype.on = n("on"),
        r.prototype.off = n("off"),
        r.prototype.one = n("one"),
        T.mixin(r, k);
        var O = o.prototype;
        O.getDom = function() {
            return this._dom
        },
        O.getZr = function() {
            return this._zr
        },
        O.setOption = function(t, e, i) {
            this._model && !e || (this._model = new m(null, null, this._theme, new x(this._api))),
            this._model.setOption(t, G),
            z.prepareAndUpdate.call(this),
            !i && this._zr.refreshImmediately()
        },
        O.setTheme = function() {
            console.log("ECharts#setTheme() is DEPRECATED in ECharts 3.0")
        },
        O.getModel = function() {
            return this._model
        },
        O.getOption = function() {
            return this._model.getOption()
        },
        O.getWidth = function() {
            return this._zr.getWidth()
        },
        O.getHeight = function() {
            return this._zr.getHeight()
        },
        O.getRenderedCanvas = function(t) {
            if (I.canvasSupported) {
                t = t || {},
                t.pixelRatio = t.pixelRatio || 1,
                t.backgroundColor = t.backgroundColor || this._model.get("backgroundColor");
                var e = this._zr,
                i = e.storage.getDisplayList();
                return T.each(i,
                function(t) {
                    t.stopAnimation(!0)
                }),
                e.painter.getRenderedCanvas(t)
            }
        },
        O.getDataURL = function(t) {
            t = t || {};
            var e = t.excludeComponents,
            i = this._model,
            n = [],
            r = this;
            L(e,
            function(t) {
                i.eachComponent({
                    mainType: t
                },
                function(t) {
                    var e = r._componentsMap[t.__viewId];
                    e.group.ignore || (n.push(e), e.group.ignore = !0)
                })
            });
            var o = this.getRenderedCanvas(t).toDataURL("image/" + (t && t.type || "png"));
            return L(n,
            function(t) {
                t.group.ignore = !1
            }),
            o
        },
        O.getConnectedDataURL = function(t) {
            if (I.canvasSupported) {
                var e = this.group,
                i = Math.min,
                n = Math.max,
                r = 1 / 0;
                if (q[e]) {
                    var o = r,
                    a = r,
                    s = -r,
                    l = -r,
                    h = [],
                    c = t && t.pixelRatio || 1;
                    for (var u in W) {
                        var d = W[u];
                        if (d.group === e) {
                            var f = d.getRenderedCanvas(T.clone(t)),
                            p = d.getDom().getBoundingClientRect();
                            o = i(p.left, o),
                            a = i(p.top, a),
                            s = n(p.right, s),
                            l = n(p.bottom, l),
                            h.push({
                                dom: f,
                                left: p.left,
                                top: p.top
                            })
                        }
                    }
                    o *= c,
                    a *= c,
                    s *= c,
                    l *= c;
                    var g = s - o,
                    m = l - a,
                    v = T.createCanvas();
                    v.width = g,
                    v.height = m;
                    var y = A.init(v);
                    return L(h,
                    function(t) {
                        var e = new S.Image({
                            style: {
                                x: t.left * c - o,
                                y: t.top * c - a,
                                image: t.dom
                            }
                        });
                        y.add(e)
                    }),
                    y.refreshImmediately(),
                    v.toDataURL("image/" + (t && t.type || "png"))
                }
                return this.getDataURL(t)
            }
        };
        var z = {
            update: function(t) {
                var e = this._model,
                i = this._api,
                n = this._coordSysMgr;
                if (e) {
                    e.restoreData(),
                    n.create(this._model, this._api),
                    h.call(this, e, i),
                    c.call(this, e),
                    n.update(e, i),
                    u.call(this, e, t),
                    d.call(this, e, t),
                    f.call(this, e, t);
                    var r = e.get("backgroundColor") || "transparent",
                    o = this._zr.painter;
                    if (o.isSingleCanvas && o.isSingleCanvas()) this._zr.configLayer(0, {
                        clearColor: r
                    });
                    else {
                        if (!I.canvasSupported) {
                            var a = C.parse(r);
                            r = C.stringify(a, "rgb"),
                            0 === a[3] && (r = "transparent")
                        }
                        r = r,
                        this._dom.style.backgroundColor = r
                    }
                }
            },
            updateView: function(t) {
                var e = this._model;
                e && (u.call(this, e, t), d.call(this, e, t), s.call(this, "updateView", e, t))
            },
            updateVisual: function(t) {
                var e = this._model;
                e && (d.call(this, e, t), s.call(this, "updateVisual", e, t))
            },
            updateLayout: function(t) {
                var e = this._model;
                e && (u.call(this, e, t), s.call(this, "updateLayout", e, t))
            },
            highlight: function(t) {
                a.call(this, "highlight", t)
            },
            downplay: function(t) {
                a.call(this, "downplay", t)
            },
            prepareAndUpdate: function(t) {
                var e = this._model;
                l.call(this, "component", e),
                l.call(this, "chart", e),
                z.update.call(this, t)
            }
        };
        O.resize = function() {
            this._zr.resize();
            var t = this._model && this._model.resetOption("media");
            z[t ? "prepareAndUpdate": "update"].call(this),
            this._loadingFX && this._loadingFX.resize()
        };
        var E = i(110);
        O.showLoading = function(t, e) {
            T.isObject(t) && (e = t, t = "default"),
            this.hideLoading();
            var i = E(this._api, e),
            n = this._zr;
            this._loadingFX = i,
            n.add(i)
        },
        O.hideLoading = function() {
            this._loadingFX && this._zr.remove(this._loadingFX),
            this._loadingFX = null
        },
        O.makeActionFromEvent = function(t) {
            var e = T.extend({},
            t);
            return e.type = N[t.type],
            e
        },
        O.dispatchAction = function(t, e) {
            var i = B[t.type];
            if (i) {
                var n = i.actionInfo,
                r = n.update || "update",
                o = [t],
                a = !1;
                t.batch && (a = !0, o = T.map(t.batch,
                function(e) {
                    return e = T.defaults(T.extend({},
                    e), t),
                    e.batch = null,
                    e
                }));
                for (var s, l = [], h = "highlight" === t.type || "downplay" === t.type, c = 0; c < o.length; c++) {
                    var u = o[c];
                    s = i.action(u, this._model),
                    s = s || T.extend({},
                    u),
                    s.type = n.event || s.type,
                    l.push(s),
                    h && z[r].call(this, u)
                }
                "none" !== r && !h && z[r].call(this, t),
                e || (s = a ? {
                    type: n.event || t.type,
                    batch: l
                }: l[0], this._messageCenter.trigger(s.type, s))
            }
        },
        O.on = n("on"),
        O.off = n("off"),
        O.one = n("one");
        var R = ["click", "dblclick", "mouseover", "mouseout", "mousedown", "mouseup", "globalout"];
        O._initEvents = function() {
            L(R,
            function(t) {
                this._zr.on(t,
                function(e) {
                    var i = this.getModel(),
                    n = e.target;
                    if (n && null != n.dataIndex) {
                        var r = n.dataModel || i.getSeriesByIndex(n.seriesIndex),
                        o = r && r.getDataParams(n.dataIndex, n.dataType) || {};
                        o.event = e,
                        o.type = t,
                        this.trigger(t, o)
                    } else n && n.eventData && this.trigger(t, n.eventData)
                },
                this)
            },
            this),
            L(N,
            function(t, e) {
                this._messageCenter.on(e,
                function(t) {
                    this.trigger(e, t)
                },
                this)
            },
            this)
        },
        O.isDisposed = function() {
            return this._disposed
        },
        O.clear = function() {
            this.setOption({},
            !0)
        },
        O.dispose = function() {
            this._disposed = !0;
            var t = this._api,
            e = this._model;
            L(this._componentsViews,
            function(i) {
                i.dispose(e, t)
            }),
            L(this._chartsViews,
            function(i) {
                i.dispose(e, t)
            }),
            this._zr.dispose(),
            delete W[this.id]
        },
        T.mixin(o, k);
        var B = [],
        N = {},
        V = [],
        F = {},
        G = [],
        H = {},
        Z = {},
        W = {},
        q = {},
        j = new Date - 0,
        X = new Date - 0,
        U = "_echarts_instance_",
        Y = {
            version: "3.1.10",
            dependencies: {
                zrender: "3.1.0"
            }
        };
        Y.init = function(t, e, i) {
            if (A.version.replace(".", "") - 0 < Y.dependencies.zrender.replace(".", "") - 0) throw new Error("ZRender " + A.version + " is too old for ECharts " + Y.version + ". Current version need ZRender " + Y.dependencies.zrender + "+");
            if (!t) throw new Error("Initialize failed: invalid dom.");
            var n = new o(t, e, i);
            return n.id = "ec_" + j++,
            W[n.id] = n,
            t.setAttribute && t.setAttribute(U, n.id),
            g(n),
            n
        },
        Y.connect = function(t) {
            if (T.isArray(t)) {
                var e = t;
                t = null,
                T.each(e,
                function(e) {
                    null != e.group && (t = e.group)
                }),
                t = t || "g_" + X++,
                T.each(e,
                function(e) {
                    e.group = t
                })
            }
            return q[t] = !0,
            t
        },
        Y.disConnect = function(t) {
            q[t] = !1
        },
        Y.dispose = function(t) {
            T.isDom(t) ? t = Y.getInstanceByDom(t) : "string" == typeof t && (t = W[t]),
            t instanceof o && !t.isDisposed() && t.dispose()
        },
        Y.getInstanceByDom = function(t) {
            var e = t.getAttribute(U);
            return W[e]
        },
        Y.getInstanceById = function(t) {
            return W[t]
        },
        Y.registerTheme = function(t, e) {
            Z[t] = e
        },
        Y.registerPreprocessor = function(t) {
            G.push(t)
        },
        Y.registerProcessor = function(t, e) {
            if (T.indexOf(P, t) < 0) throw new Error("stage should be one of " + P);
            var i = F[t] || (F[t] = []);
            i.push(e)
        },
        Y.registerAction = function(t, e, i) {
            "function" == typeof e && (i = e, e = "");
            var n = T.isObject(t) ? t.type: [t, t = {
                event: e
            }][0];
            t.event = (t.event || n).toLowerCase(),
            e = t.event,
            B[n] || (B[n] = {
                action: i,
                actionInfo: t
            }),
            N[e] = n
        },
        Y.registerCoordinateSystem = function(t, e) {
            y.register(t, e)
        },
        Y.registerLayout = function(t) {
            T.indexOf(V, t) < 0 && V.push(t)
        },
        Y.registerVisualCoding = function(t, e) {
            if (T.indexOf(D, t) < 0) throw new Error("stage should be one of " + D);
            var i = H[t] || (H[t] = []);
            i.push(e)
        },
        Y.extendChartView = function(t) {
            return M.extend(t)
        },
        Y.extendComponentModel = function(t) {
            return _.extend(t)
        },
        Y.extendSeriesModel = function(t) {
            return b.extend(t)
        },
        Y.extendComponentView = function(t) {
            return w.extend(t)
        },
        Y.setCanvasCreator = function(t) {
            T.createCanvas = t
        },
        Y.registerVisualCoding("echarts", T.curry(i(74), "", "itemStyle")),
        Y.registerPreprocessor(i(119)),
        Y.registerAction({
            type: "highlight",
            event: "highlight",
            update: "highlight"
        },
        T.noop),
        Y.registerAction({
            type: "downplay",
            event: "downplay",
            update: "downplay"
        },
        T.noop),
        Y.graphic = i(3),
        Y.number = i(4),
        Y.format = i(9),
        Y.matrix = i(19),
        Y.vector = i(5),
        Y.util = {},
        L(["map", "each", "filter", "indexOf", "inherits", "reduce", "filter", "bind", "curry", "isArray", "isString", "isObject", "isFunction", "extend"],
        function(t) {
            Y.util[t] = T[t]
        }),
        t.exports = Y
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            return null != t && "none" != t
        }
        function r(t) {
            return t instanceof M ? t: _.lift(t, -.1)
        }
        function o(t) {
            if (t.__hoverStlDirty) {
                var e = t.style.stroke,
                i = t.style.fill,
                o = t.__hoverStl;
                o.fill = o.fill || (n(i) ? r(i) : null),
                o.stroke = o.stroke || (n(e) ? r(e) : null);
                var a = {};
                for (var s in o) o.hasOwnProperty(s) && (a[s] = t.style[s]);
                t.__normalStl = a,
                t.__hoverStlDirty = !1
            }
        }
        function a(t) {
            t.__isHover || (o(t), t.setStyle(t.__hoverStl), t.z2 += 1, t.__isHover = !0)
        }
        function s(t) {
            if (t.__isHover) {
                var e = t.__normalStl;
                e && t.setStyle(e),
                t.z2 -= 1,
                t.__isHover = !1
            }
        }
        function l(t) {
            "group" === t.type ? t.traverse(function(t) {
                "group" !== t.type && a(t)
            }) : a(t)
        }
        function h(t) {
            "group" === t.type ? t.traverse(function(t) {
                "group" !== t.type && s(t)
            }) : s(t)
        }
        function c(t, e) {
            t.__hoverStl = t.hoverStyle || e || {},
            t.__hoverStlDirty = !0,
            t.__isHover && o(t)
        }
        function u() { ! this.__isEmphasis && l(this)
        }
        function d() { ! this.__isEmphasis && h(this)
        }
        function f() {
            this.__isEmphasis = !0,
            l(this)
        }
        function p() {
            this.__isEmphasis = !1,
            h(this)
        }
        function g(t, e, i, n, r, o) {
            "function" == typeof r && (o = r, r = null);
            var a = t ? "Update": "",
            s = n && n.getShallow("animationDuration" + a),
            l = n && n.getShallow("animationEasing" + a),
            h = n && n.getShallow("animationDelay" + a);
            "function" == typeof h && (h = h(r)),
            n && n.getShallow("animation") ? e.animateTo(i, s, h || 0, l, o) : (e.attr(i), o && o())
        }
        var m = i(1),
        v = i(156),
        y = Math.round,
        x = i(6),
        _ = i(22),
        b = i(19),
        w = i(5),
        M = i(17),
        S = {};
        S.Group = i(27),
        S.Image = i(46),
        S.Text = i(66),
        S.Circle = i(147),
        S.Sector = i(153),
        S.Ring = i(152),
        S.Polygon = i(149),
        S.Polyline = i(150),
        S.Rect = i(151),
        S.Line = i(148),
        S.BezierCurve = i(146),
        S.Arc = i(145),
        S.CompoundPath = i(140),
        S.LinearGradient = i(76),
        S.RadialGradient = i(141),
        S.BoundingRect = i(8),
        S.extendShape = function(t) {
            return x.extend(t)
        },
        S.extendPath = function(t, e) {
            return v.extendFromString(t, e)
        },
        S.makePath = function(t, e, i, n) {
            var r = v.createFromString(t, e),
            o = r.getBoundingRect();
            if (i) {
                var a = o.width / o.height;
                if ("center" === n) {
                    var s, l = i.height * a;
                    l <= i.width ? s = i.height: (l = i.width, s = l / a);
                    var h = i.x + i.width / 2,
                    c = i.y + i.height / 2;
                    i.x = h - l / 2,
                    i.y = c - s / 2,
                    i.width = l,
                    i.height = s
                }
                this.resizePath(r, i)
            }
            return r
        },
        S.mergePath = v.mergePath,
        S.resizePath = function(t, e) {
            if (t.applyTransform) {
                var i = t.getBoundingRect(),
                n = i.calculateTransform(e);
                t.applyTransform(n)
            }
        },
        S.subPixelOptimizeLine = function(t) {
            var e = S.subPixelOptimize,
            i = t.shape,
            n = t.style.lineWidth;
            return y(2 * i.x1) === y(2 * i.x2) && (i.x1 = i.x2 = e(i.x1, n, !0)),
            y(2 * i.y1) === y(2 * i.y2) && (i.y1 = i.y2 = e(i.y1, n, !0)),
            t
        },
        S.subPixelOptimizeRect = function(t) {
            var e = S.subPixelOptimize,
            i = t.shape,
            n = t.style.lineWidth,
            r = i.x,
            o = i.y,
            a = i.width,
            s = i.height;
            return i.x = e(i.x, n, !0),
            i.y = e(i.y, n, !0),
            i.width = Math.max(e(r + a, n, !1) - i.x, 0 === a ? 0 : 1),
            i.height = Math.max(e(o + s, n, !1) - i.y, 0 === s ? 0 : 1),
            t
        },
        S.subPixelOptimize = function(t, e, i) {
            var n = y(2 * t);
            return (n + y(e)) % 2 === 0 ? n / 2 : (n + (i ? 1 : -1)) / 2
        },
        S.setHoverStyle = function(t, e) {
            "group" === t.type ? t.traverse(function(t) {
                "group" !== t.type && c(t, e)
            }) : c(t, e),
            t.on("mouseover", u).on("mouseout", d),
            t.on("emphasis", f).on("normal", p)
        },
        S.setText = function(t, e, i) {
            var n = e.getShallow("position") || "inside",
            r = n.indexOf("inside") >= 0 ? "white": i,
            o = e.getModel("textStyle");
            m.extend(t, {
                textDistance: e.getShallow("distance") || 5,
                textFont: o.getFont(),
                textPosition: n,
                textFill: o.getTextColor() || r
            })
        },
        S.updateProps = m.curry(g, !0),
        S.initProps = m.curry(g, !1),
        S.getTransform = function(t, e) {
            for (var i = b.identity([]); t && t !== e;) b.mul(i, t.getLocalTransform(), i),
            t = t.parent;
            return i
        },
        S.applyTransform = function(t, e, i) {
            return i && (e = b.invert([], e)),
            w.applyTransform([], t, e)
        },
        S.transformDirection = function(t, e, i) {
            var n = 0 === e[4] || 0 === e[5] || 0 === e[0] ? 1 : Math.abs(2 * e[4] / e[0]),
            r = 0 === e[4] || 0 === e[5] || 0 === e[2] ? 1 : Math.abs(2 * e[4] / e[2]),
            o = ["left" === t ? -n: "right" === t ? n: 0, "top" === t ? -r: "bottom" === t ? r: 0];
            return o = S.applyTransform(o, e, i),
            Math.abs(o[0]) > Math.abs(o[1]) ? o[0] > 0 ? "right": "left": o[1] > 0 ? "bottom": "top"
        },
        t.exports = S
    },
    function(t, e) {
        function i(t) {
            return t.replace(/^\s+/, "").replace(/\s+$/, "")
        }
        var n = {},
        r = 1e-4;
        n.linearMap = function(t, e, i, n) {
            var r = e[1] - e[0],
            o = i[1] - i[0];
            if (0 === r) return 0 === o ? i[0] : (i[0] + i[1]) / 2;
            if (n) if (r > 0) {
                if (t <= e[0]) return i[0];
                if (t >= e[1]) return i[1]
            } else {
                if (t >= e[0]) return i[0];
                if (t <= e[1]) return i[1]
            } else {
                if (t === e[0]) return i[0];
                if (t === e[1]) return i[1]
            }
            return (t - e[0]) / r * o + i[0]
        },
        n.parsePercent = function(t, e) {
            switch (t) {
            case "center":
            case "middle":
                t = "50%";
                break;
            case "left":
            case "top":
                t = "0%";
                break;
            case "right":
            case "bottom":
                t = "100%"
            }
            return "string" == typeof t ? i(t).match(/%$/) ? parseFloat(t) / 100 * e: parseFloat(t) : null == t ? NaN: +t
        },
        n.round = function(t) {
            return + ( + t).toFixed(10)
        },
        n.asc = function(t) {
            return t.sort(function(t, e) {
                return t - e
            }),
            t
        },
        n.getPrecision = function(t) {
            if (isNaN(t)) return 0;
            for (var e = 1,
            i = 0; Math.round(t * e) / e !== t;) e *= 10,
            i++;
            return i
        },
        n.getPixelPrecision = function(t, e) {
            var i = Math.log,
            n = Math.LN10,
            r = Math.floor(i(t[1] - t[0]) / n),
            o = Math.round(i(Math.abs(e[1] - e[0])) / n);
            return Math.max( - r + o, 0)
        },
        n.MAX_SAFE_INTEGER = 9007199254740991,
        n.remRadian = function(t) {
            var e = 2 * Math.PI;
            return (t % e + e) % e
        },
        n.isRadianAroundZero = function(t) {
            return t > -r && r > t
        },
        n.parseDate = function(t) {
            return t instanceof Date ? t: new Date("string" == typeof t ? t.replace(/-/g, "/") : Math.round(t))
        },
        n.quantity = function(t) {
            return Math.pow(10, Math.floor(Math.log(t) / Math.LN10))
        },
        n.nice = function(t, e) {
            var i, r = n.quantity(t),
            o = t / r;
            return i = e ? 1.5 > o ? 1 : 2.5 > o ? 2 : 4 > o ? 3 : 7 > o ? 5 : 10 : 1 > o ? 1 : 2 > o ? 2 : 3 > o ? 3 : 5 > o ? 5 : 10,
            i * r
        },
        t.exports = n
    },
    function(t, e) {
        var i = "undefined" == typeof Float32Array ? Array: Float32Array,
        n = {
            create: function(t, e) {
                var n = new i(2);
                return n[0] = t || 0,
                n[1] = e || 0,
                n
            },
            copy: function(t, e) {
                return t[0] = e[0],
                t[1] = e[1],
                t
            },
            clone: function(t) {
                var e = new i(2);
                return e[0] = t[0],
                e[1] = t[1],
                e
            },
            set: function(t, e, i) {
                return t[0] = e,
                t[1] = i,
                t
            },
            add: function(t, e, i) {
                return t[0] = e[0] + i[0],
                t[1] = e[1] + i[1],
                t
            },
            scaleAndAdd: function(t, e, i, n) {
                return t[0] = e[0] + i[0] * n,
                t[1] = e[1] + i[1] * n,
                t
            },
            sub: function(t, e, i) {
                return t[0] = e[0] - i[0],
                t[1] = e[1] - i[1],
                t
            },
            len: function(t) {
                return Math.sqrt(this.lenSquare(t))
            },
            lenSquare: function(t) {
                return t[0] * t[0] + t[1] * t[1]
            },
            mul: function(t, e, i) {
                return t[0] = e[0] * i[0],
                t[1] = e[1] * i[1],
                t
            },
            div: function(t, e, i) {
                return t[0] = e[0] / i[0],
                t[1] = e[1] / i[1],
                t
            },
            dot: function(t, e) {
                return t[0] * e[0] + t[1] * e[1]
            },
            scale: function(t, e, i) {
                return t[0] = e[0] * i,
                t[1] = e[1] * i,
                t
            },
            normalize: function(t, e) {
                var i = n.len(e);
                return 0 === i ? (t[0] = 0, t[1] = 0) : (t[0] = e[0] / i, t[1] = e[1] / i),
                t
            },
            distance: function(t, e) {
                return Math.sqrt((t[0] - e[0]) * (t[0] - e[0]) + (t[1] - e[1]) * (t[1] - e[1]))
            },
            distanceSquare: function(t, e) {
                return (t[0] - e[0]) * (t[0] - e[0]) + (t[1] - e[1]) * (t[1] - e[1])
            },
            negate: function(t, e) {
                return t[0] = -e[0],
                t[1] = -e[1],
                t
            },
            lerp: function(t, e, i, n) {
                return t[0] = e[0] + n * (i[0] - e[0]),
                t[1] = e[1] + n * (i[1] - e[1]),
                t
            },
            applyTransform: function(t, e, i) {
                var n = e[0],
                r = e[1];
                return t[0] = i[0] * n + i[2] * r + i[4],
                t[1] = i[1] * n + i[3] * r + i[5],
                t
            },
            min: function(t, e, i) {
                return t[0] = Math.min(e[0], i[0]),
                t[1] = Math.min(e[1], i[1]),
                t
            },
            max: function(t, e, i) {
                return t[0] = Math.max(e[0], i[0]),
                t[1] = Math.max(e[1], i[1]),
                t
            }
        };
        n.length = n.len,
        n.lengthSquare = n.lenSquare,
        n.dist = n.distance,
        n.distSquare = n.distanceSquare,
        t.exports = n
    },
    function(t, e, i) {
        function n(t) {
            var e = t.fill;
            return null != e && "none" !== e
        }
        function r(t) {
            var e = t.stroke;
            return null != e && "none" !== e && t.lineWidth > 0
        }
        function o(t) {
            a.call(this, t),
            this.path = new l
        }
        var a = i(37),
        s = i(1),
        l = i(28),
        h = i(136),
        c = (i(17), Math.abs);
        o.prototype = {
            constructor: o,
            type: "path",
            __dirtyPath: !0,
            strokeContainThreshold: 5,
            brush: function(t) {
                t.save();
                var e = this.style,
                i = this.path,
                o = r(e),
                a = n(e),
                s = a && !!e.fill.colorStops,
                l = o && !!e.stroke.colorStops;
                if (e.bind(t, this), this.setTransform(t), this.__dirtyPath) {
                    var h = this.getBoundingRect();
                    s && (this._fillGradient = e.getGradient(t, e.fill, h)),
                    l && (this._strokeGradient = e.getGradient(t, e.stroke, h))
                }
                s && (t.fillStyle = this._fillGradient),
                l && (t.strokeStyle = this._strokeGradient);
                var c = e.lineDash,
                u = e.lineDashOffset,
                d = !!t.setLineDash,
                f = this.getGlobalScale();
                i.setScale(f[0], f[1]),
                this.__dirtyPath || c && !d && o ? (i = this.path.beginPath(t), c && !d && (i.setLineDash(c), i.setLineDashOffset(u)), this.buildPath(i, this.shape), this.__dirtyPath = !1) : (t.beginPath(), this.path.rebuildPath(t)),
                a && i.fill(t),
                c && d && (t.setLineDash(c), t.lineDashOffset = u),
                o && i.stroke(t),
                null != e.text && this.drawRectText(t, this.getBoundingRect()),
                t.restore()
            },
            buildPath: function(t, e) {},
            getBoundingRect: function() {
                var t = this._rect,
                e = this.style,
                i = !t;
                if (i) {
                    var o = this.path;
                    this.__dirtyPath && (o.beginPath(), this.buildPath(o, this.shape)),
                    t = o.getBoundingRect()
                }
                if (this._rect = t, r(e)) {
                    var a = this._rectWithStroke || (this._rectWithStroke = t.clone());
                    if (this.__dirty || i) {
                        a.copy(t);
                        var s = e.lineWidth,
                        l = e.strokeNoScale ? this.getLineScale() : 1;
                        n(e) || (s = Math.max(s, this.strokeContainThreshold)),
                        l > 1e-10 && (a.width += s / l, a.height += s / l, a.x -= s / l / 2, a.y -= s / l / 2)
                    }
                    return a
                }
                return t
            },
            contain: function(t, e) {
                var i = this.transformCoordToLocal(t, e),
                o = this.getBoundingRect(),
                a = this.style;
                if (t = i[0], e = i[1], o.contain(t, e)) {
                    var s = this.path.data;
                    if (r(a)) {
                        var l = a.lineWidth,
                        c = a.strokeNoScale ? this.getLineScale() : 1;
                        if (c > 1e-10 && (n(a) || (l = Math.max(l, this.strokeContainThreshold)), h.containStroke(s, l / c, t, e))) return ! 0
                    }
                    if (n(a)) return h.contain(s, t, e)
                }
                return ! 1
            },
            dirty: function(t) {
                0 === arguments.length && (t = !0),
                t && (this.__dirtyPath = t, this._rect = null),
                this.__dirty = !0,
                this.__zr && this.__zr.refresh(),
                this.__clipTarget && this.__clipTarget.dirty()
            },
            animateShape: function(t) {
                return this.animate("shape", t)
            },
            attrKV: function(t, e) {
                "shape" === t ? this.setShape(e) : a.prototype.attrKV.call(this, t, e)
            },
            setShape: function(t, e) {
                var i = this.shape;
                if (i) {
                    if (s.isObject(t)) for (var n in t) i[n] = t[n];
                    else i[t] = e;
                    this.dirty(!0)
                }
                return this
            },
            getLineScale: function() {
                var t = this.transform;
                return t && c(t[0] - 1) > 1e-10 && c(t[3] - 1) > 1e-10 ? Math.sqrt(c(t[0] * t[3] - t[2] * t[1])) : 1
            }
        },
        o.extend = function(t) {
            var e = function(e) {
                o.call(this, e),
                t.style && this.style.extendFrom(t.style, !1);
                var i = t.shape;
                if (i) {
                    this.shape = this.shape || {};
                    var n = this.shape;
                    for (var r in i) ! n.hasOwnProperty(r) && i.hasOwnProperty(r) && (n[r] = i[r])
                }
                t.init && t.init.call(this, e)
            };
            s.inherits(e, o);
            for (var i in t)"style" !== i && "shape" !== i && (e.prototype[i] = t[i]);
            return e
        },
        s.inherits(o, a),
        t.exports = o
    },
    function(t, e, i) {
        var n = i(9),
        r = i(4),
        o = i(1),
        a = ["x", "y", "z", "radius", "angle"],
        s = {};
        s.createNameEach = function(t, e) {
            t = t.slice();
            var i = o.map(t, s.capitalFirst);
            e = (e || []).slice();
            var n = o.map(e, s.capitalFirst);
            return function(r, a) {
                o.each(t,
                function(t, o) {
                    for (var s = {
                        name: t,
                        capital: i[o]
                    },
                    l = 0; l < e.length; l++) s[e[l]] = t + n[l];
                    r.call(a, s)
                })
            }
        },
        s.capitalFirst = function(t) {
            return t ? t.charAt(0).toUpperCase() + t.substr(1) : t
        },
        s.eachAxisDim = s.createNameEach(a, ["axisIndex", "axis", "index"]),
        s.normalizeToArray = function(t) {
            return o.isArray(t) ? t: null == t ? [] : [t]
        },
        s.createLinkedNodesFinder = function(t, e, i) {
            function n(t, e) {
                return o.indexOf(e.nodes, t) >= 0
            }
            function r(t, n) {
                var r = !1;
                return e(function(e) {
                    o.each(i(t, e) || [],
                    function(t) {
                        n.records[e.name][t] && (r = !0)
                    })
                }),
                r
            }
            function a(t, n) {
                n.nodes.push(t),
                e(function(e) {
                    o.each(i(t, e) || [],
                    function(t) {
                        n.records[e.name][t] = !0
                    })
                })
            }
            return function(i) {
                function o(t) { ! n(t, s) && r(t, s) && (a(t, s), l = !0)
                }
                var s = {
                    nodes: [],
                    records: {}
                };
                if (e(function(t) {
                    s.records[t.name] = {}
                }), !i) return s;
                a(i, s);
                var l;
                do l = !1,
                t(o);
                while (l);
                return s
            }
        },
        s.defaultEmphasis = function(t, e) {
            if (t) {
                var i = t.emphasis = t.emphasis || {},
                n = t.normal = t.normal || {};
                o.each(e,
                function(t) {
                    var e = o.retrieve(i[t], n[t]);
                    null != e && (i[t] = e)
                })
            }
        },
        s.LABEL_OPTIONS = ["position", "show", "textStyle", "distance", "formatter"],
        s.getDataItemValue = function(t) {
            return t && (null == t.value ? t: t.value)
        },
        s.converDataValue = function(t, e) {
            var i = e && e.type;
            return "ordinal" === i ? t: ("time" !== i || isFinite(t) || null == t || "-" === t || (t = +r.parseDate(t)), null == t || "" === t ? NaN: +t)
        },
        s.dataFormatMixin = {
            getDataParams: function(t, e) {
                var i = this.getData(e),
                n = this.seriesIndex,
                r = this.name,
                o = this.getRawValue(t, e),
                a = i.getRawIndex(t),
                s = i.getName(t, !0),
                l = i.getRawDataItem(t);
                return {
                    componentType: this.mainType,
                    componentSubType: this.subType,
                    seriesType: "series" === this.mainType ? this.subType: null,
                    seriesIndex: n,
                    seriesName: r,
                    name: s,
                    dataIndex: a,
                    data: l,
                    dataType: e,
                    value: o,
                    color: i.getItemVisual(t, "color"),
                    $vars: ["seriesName", "name", "value"]
                }
            },
            getFormattedLabel: function(t, e, i, r) {
                e = e || "normal";
                var a = this.getData(i),
                s = a.getItemModel(t),
                l = this.getDataParams(t, i);
                null != r && o.isArray(l.value) && (l.value = l.value[r]);
                var h = s.get(["label", e, "formatter"]);
                return "function" == typeof h ? (l.status = e, h(l)) : "string" == typeof h ? n.formatTpl(h, l) : void 0
            },
            getRawValue: function(t, e) {
                var i = this.getData(e),
                n = i.getRawDataItem(t);
                return null != n ? o.isObject(n) && !o.isArray(n) ? n.value: n: void 0
            },
            formatTooltip: o.noop
        },
        s.mappingToExists = function(t, e) {
            e = (e || []).slice();
            var i = o.map(t || [],
            function(t, e) {
                return {
                    exist: t
                }
            });
            return o.each(e,
            function(t, n) {
                if (o.isObject(t)) for (var r = 0; r < i.length; r++) {
                    var a = i[r].exist;
                    if (!i[r].option && (null != t.id && a.id === t.id + "" || null != t.name && !s.isIdInner(t) && !s.isIdInner(a) && a.name === t.name + "")) {
                        i[r].option = t,
                        e[n] = null;
                        break
                    }
                }
            }),
            o.each(e,
            function(t, e) {
                if (o.isObject(t)) {
                    for (var n = 0; n < i.length; n++) {
                        var r = i[n].exist;
                        if (!i[n].option && !s.isIdInner(r) && null == t.id) {
                            i[n].option = t;
                            break
                        }
                    }
                    n >= i.length && i.push({
                        option: t
                    })
                }
            }),
            i
        },
        s.isIdInner = function(t) {
            return o.isObject(t) && t.id && 0 === (t.id + "").indexOf("\x00_ec_\x00")
        },
        t.exports = s
    },
    function(t, e, i) {
        "use strict";
        function n(t, e, i, n) {
            this.x = t,
            this.y = e,
            this.width = i,
            this.height = n
        }
        var r = i(5),
        o = i(19),
        a = r.applyTransform,
        s = Math.min,
        l = Math.abs,
        h = Math.max;
        n.prototype = {
            constructor: n,
            union: function(t) {
                var e = s(t.x, this.x),
                i = s(t.y, this.y);
                this.width = h(t.x + t.width, this.x + this.width) - e,
                this.height = h(t.y + t.height, this.y + this.height) - i,
                this.x = e,
                this.y = i
            },
            applyTransform: function() {
                var t = [],
                e = [];
                return function(i) {
                    i && (t[0] = this.x, t[1] = this.y, e[0] = this.x + this.width, e[1] = this.y + this.height, a(t, t, i), a(e, e, i), this.x = s(t[0], e[0]), this.y = s(t[1], e[1]), this.width = l(e[0] - t[0]), this.height = l(e[1] - t[1]))
                }
            } (),
            calculateTransform: function(t) {
                var e = this,
                i = t.width / e.width,
                n = t.height / e.height,
                r = o.create();
                return o.translate(r, r, [ - e.x, -e.y]),
                o.scale(r, r, [i, n]),
                o.translate(r, r, [t.x, t.y]),
                r
            },
            intersect: function(t) {
                var e = this,
                i = e.x,
                n = e.x + e.width,
                r = e.y,
                o = e.y + e.height,
                a = t.x,
                s = t.x + t.width,
                l = t.y,
                h = t.y + t.height;
                return ! (a > n || i > s || l > o || r > h)
            },
            contain: function(t, e) {
                var i = this;
                return t >= i.x && t <= i.x + i.width && e >= i.y && e <= i.y + i.height
            },
            clone: function() {
                return new n(this.x, this.y, this.width, this.height)
            },
            copy: function(t) {
                this.x = t.x,
                this.y = t.y,
                this.width = t.width,
                this.height = t.height
            }
        },
        t.exports = n
    },
    function(t, e, i) {
        function n(t) {
            return isNaN(t) ? "-": (t = (t + "").split("."), t[0].replace(/(\d{1,3})(?=(?:\d{3})+(?!\d))/g, "$1,") + (t.length > 1 ? "." + t[1] : ""))
        }
        function r(t) {
            return t.toLowerCase().replace(/-(.)/g,
            function(t, e) {
                return e.toUpperCase()
            })
        }
        function o(t) {
            var e = t.length;
            return "number" == typeof t ? [t, t, t, t] : 2 === e ? [t[0], t[1], t[0], t[1]] : 3 === e ? [t[0], t[1], t[2], t[1]] : t
        }
        function a(t) {
            return String(t).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#39;")
        }
        function s(t, e) {
            return "{" + t + (null == e ? "": e) + "}"
        }
        function l(t, e) {
            u.isArray(e) || (e = [e]);
            var i = e.length;
            if (!i) return "";
            for (var n = e[0].$vars, r = 0; r < n.length; r++) {
                var o = f[r];
                t = t.replace(s(o), s(o, 0))
            }
            for (var a = 0; i > a; a++) for (var l = 0; l < n.length; l++) t = t.replace(s(f[l], a), e[a][n[l]]);
            return t
        }
        function h(t, e) {
            "week" !== t && "month" !== t && "quarter" !== t && "half-year" !== t && "year" !== t || (t = "MM-dd\nyyyy");
            var i = d.parseDate(e),
            n = i.getFullYear(),
            r = i.getMonth() + 1,
            o = i.getDate(),
            a = i.getHours(),
            s = i.getMinutes(),
            l = i.getSeconds();
            return t = t.replace("MM", c(r)).toLowerCase().replace("yyyy", n).replace("yy", n % 100).replace("dd", c(o)).replace("d", o).replace("hh", c(a)).replace("h", a).replace("mm", c(s)).replace("m", s).replace("ss", c(l)).replace("s", l)
        }
        function c(t) {
            return 10 > t ? "0" + t: t
        }
        var u = i(1),
        d = i(4),
        f = ["a", "b", "c", "d", "e", "f", "g"];
        t.exports = {
            normalizeCssArray: o,
            addCommas: n,
            toCamelCase: r,
            encodeHTML: a,
            formatTpl: l,
            formatTime: h
        }
    },
    function(t, e, i) {
        function n(t) {
            var e = [];
            return o.each(c.getClassesByMainType(t),
            function(t) {
                a.apply(e, t.prototype.dependencies || [])
            }),
            o.map(e,
            function(t) {
                return l.parseClassType(t).main
            })
        }
        var r = i(12),
        o = i(1),
        a = Array.prototype.push,
        s = i(42),
        l = i(20),
        h = i(11),
        c = r.extend({
            type: "component",
            id: "",
            name: "",
            mainType: "",
            subType: "",
            componentIndex: 0,
            defaultOption: null,
            ecModel: null,
            dependentModels: [],
            uid: null,
            layoutMode: null,
            init: function(t, e, i, n) {
                this.mergeDefaultAndTheme(this.option, this.ecModel)
            },
            mergeDefaultAndTheme: function(t, e) {
                var i = this.layoutMode,
                n = i ? h.getLayoutParams(t) : {},
                r = e.getTheme();
                o.merge(t, r.get(this.mainType)),
                o.merge(t, this.getDefaultOption()),
                i && h.mergeLayoutParam(t, n, i)
            },
            mergeOption: function(t) {
                o.merge(this.option, t, !0);
                var e = this.layoutMode;
                e && h.mergeLayoutParam(this.option, t, e)
            },
            optionUpdated: function(t) {},
            getDefaultOption: function() {
                if (!this.hasOwnProperty("__defaultOption")) {
                    for (var t = [], e = this.constructor; e;) {
                        var i = e.prototype.defaultOption;
                        i && t.push(i),
                        e = e.superClass
                    }
                    for (var n = {},
                    r = t.length - 1; r >= 0; r--) n = o.merge(n, t[r], !0);
                    this.__defaultOption = n
                }
                return this.__defaultOption
            }
        });
        l.enableClassExtend(c,
        function(t, e, i, n) {
            o.extend(this, n),
            this.uid = s.getUID("componentModel")
        }),
        l.enableClassManagement(c, {
            registerWhenExtend: !0
        }),
        s.enableSubTypeDefaulter(c),
        s.enableTopologicalTravel(c, n),
        o.mixin(c, i(115)),
        t.exports = c
    },
    function(t, e, i) {
        "use strict";
        function n(t, e, i, n, r) {
            var o = 0,
            a = 0;
            null == n && (n = 1 / 0),
            null == r && (r = 1 / 0);
            var s = 0;
            e.eachChild(function(l, h) {
                var c, u, d = l.position,
                f = l.getBoundingRect(),
                p = e.childAt(h + 1),
                g = p && p.getBoundingRect();
                if ("horizontal" === t) {
                    var m = f.width + (g ? -g.x + f.x: 0);
                    c = o + m,
                    c > n || l.newline ? (o = 0, c = m, a += s + i, s = f.height) : s = Math.max(s, f.height)
                } else {
                    var v = f.height + (g ? -g.y + f.y: 0);
                    u = a + v,
                    u > r || l.newline ? (o += s + i, a = 0, u = v, s = f.width) : s = Math.max(s, f.width)
                }
                l.newline || (d[0] = o, d[1] = a, "horizontal" === t ? o = c + i: a = u + i)
            })
        }
        var r = i(1),
        o = i(8),
        a = i(4),
        s = i(9),
        l = a.parsePercent,
        h = r.each,
        c = {},
        u = ["left", "right", "top", "bottom", "width", "height"];
        c.box = n,
        c.vbox = r.curry(n, "vertical"),
        c.hbox = r.curry(n, "horizontal"),
        c.getAvailableSize = function(t, e, i) {
            var n = e.width,
            r = e.height,
            o = l(t.x, n),
            a = l(t.y, r),
            h = l(t.x2, n),
            c = l(t.y2, r);
            return (isNaN(o) || isNaN(parseFloat(t.x))) && (o = 0),
            (isNaN(h) || isNaN(parseFloat(t.x2))) && (h = n),
            (isNaN(a) || isNaN(parseFloat(t.y))) && (a = 0),
            (isNaN(c) || isNaN(parseFloat(t.y2))) && (c = r),
            i = s.normalizeCssArray(i || 0),
            {
                width: Math.max(h - o - i[1] - i[3], 0),
                height: Math.max(c - a - i[0] - i[2], 0)
            }
        },
        c.getLayoutRect = function(t, e, i) {
            i = s.normalizeCssArray(i || 0);
            var n = e.width,
            r = e.height,
            a = l(t.left, n),
            h = l(t.top, r),
            c = l(t.right, n),
            u = l(t.bottom, r),
            d = l(t.width, n),
            f = l(t.height, r),
            p = i[2] + i[0],
            g = i[1] + i[3],
            m = t.aspect;
            switch (isNaN(d) && (d = n - c - g - a), isNaN(f) && (f = r - u - p - h), isNaN(d) && isNaN(f) && (m > n / r ? d = .8 * n: f = .8 * r), null != m && (isNaN(d) && (d = m * f), isNaN(f) && (f = d / m)), isNaN(a) && (a = n - c - d - g), isNaN(h) && (h = r - u - f - p), t.left || t.right) {
            case "center":
                a = n / 2 - d / 2 - i[3];
                break;
            case "right":
                a = n - d - g
            }
            switch (t.top || t.bottom) {
            case "middle":
            case "center":
                h = r / 2 - f / 2 - i[0];
                break;
            case "bottom":
                h = r - f - p
            }
            a = a || 0,
            h = h || 0,
            isNaN(d) && (d = n - a - (c || 0)),
            isNaN(f) && (f = r - h - (u || 0));
            var v = new o(a + i[3], h + i[0], d, f);
            return v.margin = i,
            v
        },
        c.positionGroup = function(t, e, i, n) {
            var o = t.getBoundingRect();
            e = r.extend(r.clone(e), {
                width: o.width,
                height: o.height
            }),
            e = c.getLayoutRect(e, i, n),
            t.position = [e.x - o.x, e.y - o.y]
        },
        c.mergeLayoutParam = function(t, e, i) {
            function n(n) {
                var r = {},
                s = 0,
                l = {},
                c = 0,
                u = i.ignoreSize ? 1 : 2;
                if (h(n,
                function(e) {
                    l[e] = t[e]
                }), h(n,
                function(t) {
                    o(e, t) && (r[t] = l[t] = e[t]),
                    a(r, t) && s++,
                    a(l, t) && c++
                }), c !== u && s) {
                    if (s >= u) return r;
                    for (var d = 0; d < n.length; d++) {
                        var f = n[d];
                        if (!o(r, f) && o(t, f)) {
                            r[f] = t[f];
                            break
                        }
                    }
                    return r
                }
                return l
            }
            function o(t, e) {
                return t.hasOwnProperty(e)
            }
            function a(t, e) {
                return null != t[e] && "auto" !== t[e]
            }
            function s(t, e, i) {
                h(t,
                function(t) {
                    e[t] = i[t]
                })
            } ! r.isObject(i) && (i = {});
            var l = ["width", "left", "right"],
            c = ["height", "top", "bottom"],
            u = n(l),
            d = n(c);
            s(l, t, u),
            s(c, t, d)
        },
        c.getLayoutParams = function(t) {
            return c.copyLayoutParams({},
            t)
        },
        c.copyLayoutParams = function(t, e) {
            return e && t && h(u,
            function(i) {
                e.hasOwnProperty(i) && (t[i] = e[i])
            }),
            t
        },
        t.exports = c
    },
    function(t, e, i) {
        function n(t, e, i, n) {
            this.parentModel = e,
            this.ecModel = i,
            this.option = t,
            this.init && (arguments.length <= 4 ? this.init(t, e, i, n) : this.init.apply(this, arguments))
        }
        var r = i(1),
        o = i(20);
        n.prototype = {
            constructor: n,
            init: null,
            mergeOption: function(t) {
                r.merge(this.option, t, !0)
            },
            get: function(t, e) {
                if (!t) return this.option;
                "string" == typeof t && (t = t.split("."));
                for (var i = this.option,
                n = this.parentModel,
                r = 0; r < t.length && (!t[r] || (i = i && "object" == typeof i ? i[t[r]] : null, null != i)); r++);
                return null == i && n && !e && (i = n.get(t)),
                i
            },
            getShallow: function(t, e) {
                var i = this.option,
                n = i && i[t],
                r = this.parentModel;
                return null == n && r && !e && (n = r.getShallow(t)),
                n
            },
            getModel: function(t, e) {
                var i = this.get(t, !0),
                r = this.parentModel,
                o = new n(i, e || r && r.getModel(t), this.ecModel);
                return o
            },
            isEmpty: function() {
                return null == this.option
            },
            restoreData: function() {},
            clone: function() {
                var t = this.constructor;
                return new t(r.clone(this.option))
            },
            setReadOnly: function(t) {
                o.setReadOnly(this, t)
            }
        },
        o.enableClassExtend(n);
        var a = r.mixin;
        a(n, i(117)),
        a(n, i(114)),
        a(n, i(118)),
        a(n, i(116)),
        t.exports = n
    },
    function(t, e, i) {
        "use strict";
        var n = i(1),
        r = i(9),
        o = i(7),
        a = i(10),
        s = r.encodeHTML,
        l = r.addCommas,
        h = a.extend({
            type: "series.__base__",
            seriesIndex: 0,
            coordinateSystem: null,
            defaultOption: null,
            legendDataProvider: null,
            init: function(t, e, i, n) {
                this.seriesIndex = this.componentIndex,
                this.mergeDefaultAndTheme(t, i),
                this._dataBeforeProcessed = this.getInitialData(t, i),
                this._data = this._dataBeforeProcessed.cloneShallow()
            },
            mergeDefaultAndTheme: function(t, e) {
                n.merge(t, e.getTheme().get(this.subType)),
                n.merge(t, this.getDefaultOption()),
                o.defaultEmphasis(t.label, o.LABEL_OPTIONS),
                this.fillDataTextStyle(t.data)
            },
            mergeOption: function(t, e) {
                t = n.merge(this.option, t, !0),
                this.fillDataTextStyle(t.data);
                var i = this.getInitialData(t, e);
                i && (this._data = i, this._dataBeforeProcessed = i.cloneShallow())
            },
            fillDataTextStyle: function(t) {
                if (t) for (var e = 0; e < t.length; e++) t[e] && t[e].label && o.defaultEmphasis(t[e].label, o.LABEL_OPTIONS)
            },
            getInitialData: function() {},
            getData: function(t) {
                return null == t ? this._data: this._data.getLinkedData(t)
            },
            setData: function(t) {
                this._data = t
            },
            getRawData: function() {
                return this._dataBeforeProcessed
            },
            coordDimToDataDim: function(t) {
                return [t]
            },
            dataDimToCoordDim: function(t) {
                return t
            },
            getBaseAxis: function() {
                var t = this.coordinateSystem;
                return t && t.getBaseAxis && t.getBaseAxis()
            },
            formatTooltip: function(t, e, i) {
                var r = this._data,
                o = this.getRawValue(t),
                a = n.isArray(o) ? n.map(o, l).join(", ") : l(o),
                h = r.getName(t),
                c = r.getItemVisual(t, "color"),
                u = '<span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:' + c + '"></span>',
                d = this.name;
                return "\x00-" === d && (d = ""),
                e ? u + s(this.name) + " : " + a: (d && s(d) + "<br />") + u + (h ? s(h) + " : " + a: a)
            },
            restoreData: function() {
                this._data = this._dataBeforeProcessed.cloneShallow()
            },
            getAxisTooltipDataIndex: null
        });
        n.mixin(h, o.dataFormatMixin),
        t.exports = h
    },
    function(t, e) {
        function i(t) {
            var e = {},
            i = {},
            n = t.match(/Web[kK]it[\/]{0,1}([\d.]+)/),
            r = t.match(/(Android);?[\s\/]+([\d.]+)?/),
            o = t.match(/(iPad).*OS\s([\d_]+)/),
            a = t.match(/(iPod)(.*OS\s([\d_]+))?/),
            s = !o && t.match(/(iPhone\sOS)\s([\d_]+)/),
            l = t.match(/(webOS|hpwOS)[\s\/]([\d.]+)/),
            h = l && t.match(/TouchPad/),
            c = t.match(/Kindle\/([\d.]+)/),
            u = t.match(/Silk\/([\d._]+)/),
            d = t.match(/(BlackBerry).*Version\/([\d.]+)/),
            f = t.match(/(BB10).*Version\/([\d.]+)/),
            p = t.match(/(RIM\sTablet\sOS)\s([\d.]+)/),
            g = t.match(/PlayBook/),
            m = t.match(/Chrome\/([\d.]+)/) || t.match(/CriOS\/([\d.]+)/),
            v = t.match(/Firefox\/([\d.]+)/),
            y = n && t.match(/Mobile\//) && !m,
            x = t.match(/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/) && !m,
            _ = t.match(/MSIE\s([\d.]+)/) || t.match(/Trident\/.+?rv:(([\d.]+))/),
            b = t.match(/Edge\/([\d.]+)/);
            return (i.webkit = !!n) && (i.version = n[1]),
            r && (e.android = !0, e.version = r[2]),
            s && !a && (e.ios = e.iphone = !0, e.version = s[2].replace(/_/g, ".")),
            o && (e.ios = e.ipad = !0, e.version = o[2].replace(/_/g, ".")),
            a && (e.ios = e.ipod = !0, e.version = a[3] ? a[3].replace(/_/g, ".") : null),
            l && (e.webos = !0, e.version = l[2]),
            h && (e.touchpad = !0),
            d && (e.blackberry = !0, e.version = d[2]),
            f && (e.bb10 = !0, e.version = f[2]),
            p && (e.rimtabletos = !0, e.version = p[2]),
            g && (i.playbook = !0),
            c && (e.kindle = !0, e.version = c[1]),
            u && (i.silk = !0, i.version = u[1]),
            !u && e.android && t.match(/Kindle Fire/) && (i.silk = !0),
            m && (i.chrome = !0, i.version = m[1]),
            v && (i.firefox = !0, i.version = v[1]),
            _ && (i.ie = !0, i.version = _[1]),
            y && (t.match(/Safari/) || e.ios) && (i.safari = !0),
            x && (i.webview = !0),
            _ && (i.ie = !0, i.version = _[1]),
            b && (i.edge = !0, i.version = b[1]),
            e.tablet = !!(o || g || r && !t.match(/Mobile/) || v && t.match(/Tablet/) || _ && !t.match(/Phone/) && t.match(/Touch/)),
            e.phone = !(e.tablet || e.ipod || !(r || s || l || d || f || m && t.match(/Android/) || m && t.match(/CriOS\/([\d.]+)/) || v && t.match(/Mobile/) || _ && t.match(/Touch/))),
            {
                browser: i,
                os: e,
                node: !1,
                canvasSupported: !!document.createElement("canvas").getContext,
                touchEventsSupported: "ontouchstart" in window && !i.ie && !i.edge,
                pointerEventsSupported: "onpointerdown" in window && (i.edge || i.ie && i.version >= 10)
            }
        }
        var n = {};
        n = "undefined" == typeof navigator ? {
            browser: {},
            os: {},
            node: !0,
            canvasSupported: !0
        }: i(navigator.userAgent),
        t.exports = n
    },
    function(t, e, i) { (function(e) {
            function n(t) {
                return d.isArray(t) || (t = [t]),
                t
            }
            function r(t, e) {
                var i = t.dimensions,
                n = new v(d.map(i, t.getDimensionInfo, t), t.hostModel);
                m(n, t);
                for (var r = n._storage = {},
                o = t._storage,
                a = 0; a < i.length; a++) {
                    var s = i[a],
                    l = o[s];
                    d.indexOf(e, s) >= 0 ? r[s] = new l.constructor(o[s].length) : r[s] = o[s];
                }
                return n
            }
            var o = "undefined",
            a = "undefined" == typeof window ? e: window,
            s = typeof a.Float64Array === o ? Array: a.Float64Array,
            l = typeof a.Int32Array === o ? Array: a.Int32Array,
            h = {
                "float": s,
                "int": l,
                ordinal: Array,
                number: Array,
                time: Array
            },
            c = i(12),
            u = i(48),
            d = i(1),
            f = i(7),
            p = d.isObject,
            g = ["stackedOn", "_nameList", "_idList", "_rawData"],
            m = function(t, e) {
                d.each(g.concat(e.__wrappedMethods || []),
                function(i) {
                    e.hasOwnProperty(i) && (t[i] = e[i])
                }),
                t.__wrappedMethods = e.__wrappedMethods
            },
            v = function(t, e) {
                t = t || ["x", "y"];
                for (var i = {},
                n = [], r = 0; r < t.length; r++) {
                    var o, a = {};
                    "string" == typeof t[r] ? (o = t[r], a = {
                        name: o,
                        stackable: !1,
                        type: "number"
                    }) : (a = t[r], o = a.name, a.type = a.type || "number"),
                    n.push(o),
                    i[o] = a
                }
                this.dimensions = n,
                this._dimensionInfos = i,
                this.hostModel = e,
                this.dataType,
                this.indices = [],
                this._storage = {},
                this._nameList = [],
                this._idList = [],
                this._optionModels = [],
                this.stackedOn = null,
                this._visual = {},
                this._layout = {},
                this._itemVisuals = [],
                this._itemLayouts = [],
                this._graphicEls = [],
                this._rawData,
                this._extent
            },
            y = v.prototype;
            y.type = "list",
            y.getDimension = function(t) {
                return isNaN(t) || (t = this.dimensions[t] || t),
                t
            },
            y.getDimensionInfo = function(t) {
                return d.clone(this._dimensionInfos[this.getDimension(t)])
            },
            y.initData = function(t, e, i) {
                if (t = t || [], !d.isArray(t)) throw new Error("Invalid data.");
                this._rawData = t;
                var n = this._storage = {},
                r = this.indices = [],
                o = this.dimensions,
                a = t.length,
                s = this._dimensionInfos,
                l = [],
                c = {};
                e = e || [];
                for (var u = 0; u < o.length; u++) {
                    var p = s[o[u]],
                    g = h[p.type];
                    n[o[u]] = new g(a)
                }
                i = i ||
                function(t, e, i, n) {
                    var r = f.getDataItemValue(t);
                    return f.converDataValue(d.isArray(r) ? r[n] : r, s[e])
                };
                for (var m = 0; m < t.length; m++) {
                    for (var v = t[m], y = 0; y < o.length; y++) {
                        var x = o[y],
                        _ = n[x];
                        _[m] = i(v, x, m, y)
                    }
                    r.push(m)
                }
                for (var u = 0; u < t.length; u++) {
                    var b = "";
                    e[u] || (e[u] = t[u].name, b = t[u].id);
                    var w = e[u] || ""; ! b && w && (c[w] = c[w] || 0, b = w, c[w] > 0 && (b += "__ec__" + c[w]), c[w]++),
                    b && (l[u] = b)
                }
                this._nameList = e,
                this._idList = l
            },
            y.count = function() {
                return this.indices.length
            },
            y.get = function(t, e, i) {
                var n = this._storage,
                r = this.indices[e];
                if (null == r) return NaN;
                var o = n[t] && n[t][r];
                if (i) {
                    var a = this._dimensionInfos[t];
                    if (a && a.stackable) for (var s = this.stackedOn; s;) {
                        var l = s.get(t, e); (o >= 0 && l > 0 || 0 >= o && 0 > l) && (o += l),
                        s = s.stackedOn
                    }
                }
                return o
            },
            y.getValues = function(t, e, i) {
                var n = [];
                d.isArray(t) || (i = e, e = t, t = this.dimensions);
                for (var r = 0,
                o = t.length; o > r; r++) n.push(this.get(t[r], e, i));
                return n
            },
            y.hasValue = function(t) {
                for (var e = this.dimensions,
                i = this._dimensionInfos,
                n = 0,
                r = e.length; r > n; n++) if ("ordinal" !== i[e[n]].type && isNaN(this.get(e[n], t))) return ! 1;
                return ! 0
            },
            y.getDataExtent = function(t, e) {
                var i = this._storage[t],
                n = this.getDimensionInfo(t);
                e = n && n.stackable && e;
                var r, o = (this._extent || (this._extent = {}))[t + !!e];
                if (o) return o;
                if (i) {
                    for (var a = 1 / 0,
                    s = -(1 / 0), l = 0, h = this.count(); h > l; l++) r = this.get(t, l, e),
                    a > r && (a = r),
                    r > s && (s = r);
                    return this._extent[t + e] = [a, s]
                }
                return [1 / 0, -(1 / 0)]
            },
            y.getSum = function(t, e) {
                var i = this._storage[t],
                n = 0;
                if (i) for (var r = 0,
                o = this.count(); o > r; r++) {
                    var a = this.get(t, r, e);
                    isNaN(a) || (n += a)
                }
                return n
            },
            y.indexOf = function(t, e) {
                var i = this._storage,
                n = i[t],
                r = this.indices;
                if (n) for (var o = 0,
                a = r.length; a > o; o++) {
                    var s = r[o];
                    if (n[s] === e) return o
                }
                return - 1
            },
            y.indexOfName = function(t) {
                for (var e = this.indices,
                i = this._nameList,
                n = 0,
                r = e.length; r > n; n++) {
                    var o = e[n];
                    if (i[o] === t) return n
                }
                return - 1
            },
            y.indexOfNearest = function(t, e, i) {
                var n = this._storage,
                r = n[t];
                if (r) {
                    for (var o = Number.MAX_VALUE,
                    a = -1,
                    s = 0,
                    l = this.count(); l > s; s++) {
                        var h = e - this.get(t, s, i),
                        c = Math.abs(h); (o > c || c === o && h > 0) && (o = c, a = s)
                    }
                    return a
                }
                return - 1
            },
            y.getRawIndex = function(t) {
                var e = this.indices[t];
                return null == e ? -1 : e
            },
            y.getRawDataItem = function(t) {
                return this._rawData[this.getRawIndex(t)]
            },
            y.getName = function(t) {
                return this._nameList[this.indices[t]] || ""
            },
            y.getId = function(t) {
                return this._idList[this.indices[t]] || this.getRawIndex(t) + ""
            },
            y.each = function(t, e, i, r) {
                "function" == typeof t && (r = i, i = e, e = t, t = []),
                t = d.map(n(t), this.getDimension, this);
                var o = [],
                a = t.length,
                s = this.indices;
                r = r || this;
                for (var l = 0; l < s.length; l++) if (0 === a) e.call(r, l);
                else if (1 === a) e.call(r, this.get(t[0], l, i), l);
                else {
                    for (var h = 0; a > h; h++) o[h] = this.get(t[h], l, i);
                    o[h] = l,
                    e.apply(r, o)
                }
            },
            y.filterSelf = function(t, e, i, r) {
                "function" == typeof t && (r = i, i = e, e = t, t = []),
                t = d.map(n(t), this.getDimension, this);
                var o = [],
                a = [],
                s = t.length,
                l = this.indices;
                r = r || this;
                for (var h = 0; h < l.length; h++) {
                    var c;
                    if (1 === s) c = e.call(r, this.get(t[0], h, i), h);
                    else {
                        for (var u = 0; s > u; u++) a[u] = this.get(t[u], h, i);
                        a[u] = h,
                        c = e.apply(r, a)
                    }
                    c && o.push(l[h])
                }
                return this.indices = o,
                this._extent = {},
                this
            },
            y.mapArray = function(t, e, i, n) {
                "function" == typeof t && (n = i, i = e, e = t, t = []);
                var r = [];
                return this.each(t,
                function() {
                    r.push(e && e.apply(this, arguments))
                },
                i, n),
                r
            },
            y.map = function(t, e, i, o) {
                t = d.map(n(t), this.getDimension, this);
                var a = r(this, t),
                s = a.indices = this.indices,
                l = a._storage,
                h = [];
                return this.each(t,
                function() {
                    var i = arguments[arguments.length - 1],
                    n = e && e.apply(this, arguments);
                    if (null != n) {
                        "number" == typeof n && (h[0] = n, n = h);
                        for (var r = 0; r < n.length; r++) {
                            var o = t[r],
                            a = l[o],
                            c = s[i];
                            a && (a[c] = n[r])
                        }
                    }
                },
                i, o),
                a
            },
            y.downSample = function(t, e, i, n) {
                for (var o = r(this, [t]), a = this._storage, s = o._storage, l = this.indices, h = o.indices = [], c = [], u = [], d = Math.floor(1 / e), f = s[t], p = this.count(), g = 0; g < a[t].length; g++) s[t][g] = a[t][g];
                for (var g = 0; p > g; g += d) {
                    d > p - g && (d = p - g, c.length = d);
                    for (var m = 0; d > m; m++) {
                        var v = l[g + m];
                        c[m] = f[v],
                        u[m] = v
                    }
                    var y = i(c),
                    v = u[n(c, y) || 0];
                    f[v] = y,
                    h.push(v)
                }
                return o
            },
            y.getItemModel = function(t) {
                var e = this.hostModel;
                return t = this.indices[t],
                new c(this._rawData[t], e, e && e.ecModel)
            },
            y.diff = function(t) {
                var e = this._idList,
                i = t && t._idList;
                return new u(t ? t.indices: [], this.indices,
                function(t) {
                    return i[t] || t + ""
                },
                function(t) {
                    return e[t] || t + ""
                })
            },
            y.getVisual = function(t) {
                var e = this._visual;
                return e && e[t]
            },
            y.setVisual = function(t, e) {
                if (p(t)) for (var i in t) t.hasOwnProperty(i) && this.setVisual(i, t[i]);
                else this._visual = this._visual || {},
                this._visual[t] = e
            },
            y.setLayout = function(t, e) {
                if (p(t)) for (var i in t) t.hasOwnProperty(i) && this.setLayout(i, t[i]);
                else this._layout[t] = e
            },
            y.getLayout = function(t) {
                return this._layout[t]
            },
            y.getItemLayout = function(t) {
                return this._itemLayouts[t]
            },
            y.setItemLayout = function(t, e, i) {
                this._itemLayouts[t] = i ? d.extend(this._itemLayouts[t] || {},
                e) : e
            },
            y.clearItemLayouts = function() {
                this._itemLayouts.length = 0
            },
            y.getItemVisual = function(t, e, i) {
                var n = this._itemVisuals[t],
                r = n && n[e];
                return null != r || i ? r: this.getVisual(e)
            },
            y.setItemVisual = function(t, e, i) {
                var n = this._itemVisuals[t] || {};
                if (this._itemVisuals[t] = n, p(e)) for (var r in e) e.hasOwnProperty(r) && (n[r] = e[r]);
                else n[e] = i
            };
            var x = function(t) {
                t.seriesIndex = this.seriesIndex,
                t.dataIndex = this.dataIndex,
                t.dataType = this.dataType
            };
            y.setItemGraphicEl = function(t, e) {
                var i = this.hostModel;
                e && (e.dataIndex = t, e.dataType = this.dataType, e.seriesIndex = i && i.seriesIndex, "group" === e.type && e.traverse(x, e)),
                this._graphicEls[t] = e
            },
            y.getItemGraphicEl = function(t) {
                return this._graphicEls[t]
            },
            y.eachItemGraphicEl = function(t, e) {
                d.each(this._graphicEls,
                function(i, n) {
                    i && t && t.call(e, i, n)
                })
            },
            y.cloneShallow = function() {
                var t = d.map(this.dimensions, this.getDimensionInfo, this),
                e = new v(t, this.hostModel);
                return e._storage = this._storage,
                m(e, this),
                e.indices = this.indices.slice(),
                e
            },
            y.wrapMethod = function(t, e) {
                var i = this[t];
                "function" == typeof i && (this.__wrappedMethods = this.__wrappedMethods || [], this.__wrappedMethods.push(t), this[t] = function() {
                    var t = i.apply(this, arguments);
                    return e.apply(this, [t].concat(d.slice(arguments)))
                })
            },
            y.TRANSFERABLE_METHODS = ["cloneShallow", "downSample", "map"],
            y.CHANGABLE_METHODS = ["filterSelf"],
            t.exports = v
        }).call(e,
        function() {
            return this
        } ())
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            return t > -w && w > t
        }
        function r(t) {
            return t > w || -w > t
        }
        function o(t, e, i, n, r) {
            var o = 1 - r;
            return o * o * (o * t + 3 * r * e) + r * r * (r * n + 3 * o * i)
        }
        function a(t, e, i, n, r) {
            var o = 1 - r;
            return 3 * (((e - t) * o + 2 * (i - e) * r) * o + (n - i) * r * r)
        }
        function s(t, e, i, r, o, a) {
            var s = r + 3 * (e - i) - t,
            l = 3 * (i - 2 * e + t),
            h = 3 * (e - t),
            c = t - o,
            u = l * l - 3 * s * h,
            d = l * h - 9 * s * c,
            f = h * h - 3 * l * c,
            p = 0;
            if (n(u) && n(d)) if (n(l)) a[0] = 0;
            else {
                var g = -h / l;
                g >= 0 && 1 >= g && (a[p++] = g)
            } else {
                var m = d * d - 4 * u * f;
                if (n(m)) {
                    var v = d / u,
                    g = -l / s + v,
                    y = -v / 2;
                    g >= 0 && 1 >= g && (a[p++] = g),
                    y >= 0 && 1 >= y && (a[p++] = y)
                } else if (m > 0) {
                    var x = b(m),
                    w = u * l + 1.5 * s * ( - d + x),
                    M = u * l + 1.5 * s * ( - d - x);
                    w = 0 > w ? -_( - w, A) : _(w, A),
                    M = 0 > M ? -_( - M, A) : _(M, A);
                    var g = ( - l - (w + M)) / (3 * s);
                    g >= 0 && 1 >= g && (a[p++] = g)
                } else {
                    var T = (2 * u * l - 3 * s * d) / (2 * b(u * u * u)),
                    C = Math.acos(T) / 3,
                    I = b(u),
                    k = Math.cos(C),
                    g = ( - l - 2 * I * k) / (3 * s),
                    y = ( - l + I * (k + S * Math.sin(C))) / (3 * s),
                    L = ( - l + I * (k - S * Math.sin(C))) / (3 * s);
                    g >= 0 && 1 >= g && (a[p++] = g),
                    y >= 0 && 1 >= y && (a[p++] = y),
                    L >= 0 && 1 >= L && (a[p++] = L)
                }
            }
            return p
        }
        function l(t, e, i, o, a) {
            var s = 6 * i - 12 * e + 6 * t,
            l = 9 * e + 3 * o - 3 * t - 9 * i,
            h = 3 * e - 3 * t,
            c = 0;
            if (n(l)) {
                if (r(s)) {
                    var u = -h / s;
                    u >= 0 && 1 >= u && (a[c++] = u)
                }
            } else {
                var d = s * s - 4 * l * h;
                if (n(d)) a[0] = -s / (2 * l);
                else if (d > 0) {
                    var f = b(d),
                    u = ( - s + f) / (2 * l),
                    p = ( - s - f) / (2 * l);
                    u >= 0 && 1 >= u && (a[c++] = u),
                    p >= 0 && 1 >= p && (a[c++] = p)
                }
            }
            return c
        }
        function h(t, e, i, n, r, o) {
            var a = (e - t) * r + t,
            s = (i - e) * r + e,
            l = (n - i) * r + i,
            h = (s - a) * r + a,
            c = (l - s) * r + s,
            u = (c - h) * r + h;
            o[0] = t,
            o[1] = a,
            o[2] = h,
            o[3] = u,
            o[4] = u,
            o[5] = c,
            o[6] = l,
            o[7] = n
        }
        function c(t, e, i, n, r, a, s, l, h, c, u) {
            var d, f, p, g, m, v = .005,
            y = 1 / 0;
            T[0] = h,
            T[1] = c;
            for (var _ = 0; 1 > _; _ += .05) C[0] = o(t, i, r, s, _),
            C[1] = o(e, n, a, l, _),
            g = x(T, C),
            y > g && (d = _, y = g);
            y = 1 / 0;
            for (var w = 0; 32 > w && !(M > v); w++) f = d - v,
            p = d + v,
            C[0] = o(t, i, r, s, f),
            C[1] = o(e, n, a, l, f),
            g = x(C, T),
            f >= 0 && y > g ? (d = f, y = g) : (I[0] = o(t, i, r, s, p), I[1] = o(e, n, a, l, p), m = x(I, T), 1 >= p && y > m ? (d = p, y = m) : v *= .5);
            return u && (u[0] = o(t, i, r, s, d), u[1] = o(e, n, a, l, d)),
            b(y)
        }
        function u(t, e, i, n) {
            var r = 1 - n;
            return r * (r * t + 2 * n * e) + n * n * i
        }
        function d(t, e, i, n) {
            return 2 * ((1 - n) * (e - t) + n * (i - e))
        }
        function f(t, e, i, o, a) {
            var s = t - 2 * e + i,
            l = 2 * (e - t),
            h = t - o,
            c = 0;
            if (n(s)) {
                if (r(l)) {
                    var u = -h / l;
                    u >= 0 && 1 >= u && (a[c++] = u)
                }
            } else {
                var d = l * l - 4 * s * h;
                if (n(d)) {
                    var u = -l / (2 * s);
                    u >= 0 && 1 >= u && (a[c++] = u)
                } else if (d > 0) {
                    var f = b(d),
                    u = ( - l + f) / (2 * s),
                    p = ( - l - f) / (2 * s);
                    u >= 0 && 1 >= u && (a[c++] = u),
                    p >= 0 && 1 >= p && (a[c++] = p)
                }
            }
            return c
        }
        function p(t, e, i) {
            var n = t + i - 2 * e;
            return 0 === n ? .5 : (t - e) / n
        }
        function g(t, e, i, n, r) {
            var o = (e - t) * n + t,
            a = (i - e) * n + e,
            s = (a - o) * n + o;
            r[0] = t,
            r[1] = o,
            r[2] = s,
            r[3] = s,
            r[4] = a,
            r[5] = i
        }
        function m(t, e, i, n, r, o, a, s, l) {
            var h, c = .005,
            d = 1 / 0;
            T[0] = a,
            T[1] = s;
            for (var f = 0; 1 > f; f += .05) {
                C[0] = u(t, i, r, f),
                C[1] = u(e, n, o, f);
                var p = x(T, C);
                d > p && (h = f, d = p)
            }
            d = 1 / 0;
            for (var g = 0; 32 > g && !(M > c); g++) {
                var m = h - c,
                v = h + c;
                C[0] = u(t, i, r, m),
                C[1] = u(e, n, o, m);
                var p = x(C, T);
                if (m >= 0 && d > p) h = m,
                d = p;
                else {
                    I[0] = u(t, i, r, v),
                    I[1] = u(e, n, o, v);
                    var y = x(I, T);
                    1 >= v && d > y ? (h = v, d = y) : c *= .5
                }
            }
            return l && (l[0] = u(t, i, r, h), l[1] = u(e, n, o, h)),
            b(d)
        }
        var v = i(5),
        y = v.create,
        x = v.distSquare,
        _ = Math.pow,
        b = Math.sqrt,
        w = 1e-8,
        M = 1e-4,
        S = b(3),
        A = 1 / 3,
        T = y(),
        C = y(),
        I = y();
        t.exports = {
            cubicAt: o,
            cubicDerivativeAt: a,
            cubicRootAt: s,
            cubicExtrema: l,
            cubicSubdivide: h,
            cubicProjectPoint: c,
            quadraticAt: u,
            quadraticDerivativeAt: d,
            quadraticRootAt: f,
            quadraticExtremum: p,
            quadraticSubdivide: g,
            quadraticProjectPoint: m
        }
    },
    function(t, e) {
        var i = function(t) {
            this.colorStops = t || []
        };
        i.prototype = {
            constructor: i,
            addColorStop: function(t, e) {
                this.colorStops.push({
                    offset: t,
                    color: e
                })
            }
        },
        t.exports = i
    },
    function(t, e, i) {
        function n(t, e) {
            var i = t + ":" + e;
            if (h[i]) return h[i];
            for (var n = (t + "").split("\n"), r = 0, o = 0, a = n.length; a > o; o++) r = Math.max(p.measureText(n[o], e).width, r);
            return c > u && (c = 0, h = {}),
            c++,
            h[i] = r,
            r
        }
        function r(t, e, i, r) {
            var o = ((t || "") + "").split("\n").length,
            a = n(t, e),
            s = n("国", e),
            l = o * s,
            h = new f(0, 0, a, l);
            switch (h.lineHeight = s, r) {
            case "bottom":
            case "alphabetic":
                h.y -= s;
                break;
            case "middle":
                h.y -= s / 2
            }
            switch (i) {
            case "end":
            case "right":
                h.x -= h.width;
                break;
            case "center":
                h.x -= h.width / 2
            }
            return h
        }
        function o(t, e, i, n) {
            var r = e.x,
            o = e.y,
            a = e.height,
            s = e.width,
            l = i.height,
            h = a / 2 - l / 2,
            c = "left";
            switch (t) {
            case "left":
                r -= n,
                o += h,
                c = "right";
                break;
            case "right":
                r += n + s,
                o += h,
                c = "left";
                break;
            case "top":
                r += s / 2,
                o -= n + l,
                c = "center";
                break;
            case "bottom":
                r += s / 2,
                o += a + n,
                c = "center";
                break;
            case "inside":
                r += s / 2,
                o += h,
                c = "center";
                break;
            case "insideLeft":
                r += n,
                o += h,
                c = "left";
                break;
            case "insideRight":
                r += s - n,
                o += h,
                c = "right";
                break;
            case "insideTop":
                r += s / 2,
                o += n,
                c = "center";
                break;
            case "insideBottom":
                r += s / 2,
                o += a - l - n,
                c = "center";
                break;
            case "insideTopLeft":
                r += n,
                o += n,
                c = "left";
                break;
            case "insideTopRight":
                r += s - n,
                o += n,
                c = "right";
                break;
            case "insideBottomLeft":
                r += n,
                o += a - l - n;
                break;
            case "insideBottomRight":
                r += s - n,
                o += a - l - n,
                c = "right"
            }
            return {
                x: r,
                y: o,
                textAlign: c,
                textBaseline: "top"
            }
        }
        function a(t, e, i, r) {
            if (!i) return "";
            r = d.defaults({
                ellipsis: "...",
                minCharacters: 3,
                maxIterations: 3,
                cnCharWidth: n("国", e),
                ascCharWidth: n("a", e)
            },
            r, !0),
            i -= n(r.ellipsis);
            for (var o = (t + "").split("\n"), a = 0, l = o.length; l > a; a++) o[a] = s(o[a], e, i, r);
            return o.join("\n")
        }
        function s(t, e, i, r) {
            for (var o = 0;; o++) {
                var a = n(t, e);
                if (i > a || o >= r.maxIterations) {
                    t += r.ellipsis;
                    break
                }
                var s = 0 === o ? l(t, i, r) : Math.floor(t.length * i / a);
                if (s < r.minCharacters) {
                    t = "";
                    break
                }
                t = t.substr(0, s)
            }
            return t
        }
        function l(t, e, i) {
            for (var n = 0,
            r = 0,
            o = t.length; o > r && e > n; r++) {
                var a = t.charCodeAt(r);
                n += a >= 0 && 127 >= a ? i.ascCharWidth: i.cnCharWidth
            }
            return r
        }
        var h = {},
        c = 0,
        u = 5e3,
        d = i(1),
        f = i(8),
        p = {
            getWidth: n,
            getBoundingRect: r,
            adjustTextPositionOnRect: o,
            ellipsis: a,
            measureText: function(t, e) {
                var i = d.getContext();
                return i.font = e,
                i.measureText(t)
            }
        };
        t.exports = p
    },
    function(t, e) {
        var i = "undefined" == typeof Float32Array ? Array: Float32Array,
        n = {
            create: function() {
                var t = new i(6);
                return n.identity(t),
                t
            },
            identity: function(t) {
                return t[0] = 1,
                t[1] = 0,
                t[2] = 0,
                t[3] = 1,
                t[4] = 0,
                t[5] = 0,
                t
            },
            copy: function(t, e) {
                return t[0] = e[0],
                t[1] = e[1],
                t[2] = e[2],
                t[3] = e[3],
                t[4] = e[4],
                t[5] = e[5],
                t
            },
            mul: function(t, e, i) {
                var n = e[0] * i[0] + e[2] * i[1],
                r = e[1] * i[0] + e[3] * i[1],
                o = e[0] * i[2] + e[2] * i[3],
                a = e[1] * i[2] + e[3] * i[3],
                s = e[0] * i[4] + e[2] * i[5] + e[4],
                l = e[1] * i[4] + e[3] * i[5] + e[5];
                return t[0] = n,
                t[1] = r,
                t[2] = o,
                t[3] = a,
                t[4] = s,
                t[5] = l,
                t
            },
            translate: function(t, e, i) {
                return t[0] = e[0],
                t[1] = e[1],
                t[2] = e[2],
                t[3] = e[3],
                t[4] = e[4] + i[0],
                t[5] = e[5] + i[1],
                t
            },
            rotate: function(t, e, i) {
                var n = e[0],
                r = e[2],
                o = e[4],
                a = e[1],
                s = e[3],
                l = e[5],
                h = Math.sin(i),
                c = Math.cos(i);
                return t[0] = n * c + a * h,
                t[1] = -n * h + a * c,
                t[2] = r * c + s * h,
                t[3] = -r * h + c * s,
                t[4] = c * o + h * l,
                t[5] = c * l - h * o,
                t
            },
            scale: function(t, e, i) {
                var n = i[0],
                r = i[1];
                return t[0] = e[0] * n,
                t[1] = e[1] * r,
                t[2] = e[2] * n,
                t[3] = e[3] * r,
                t[4] = e[4] * n,
                t[5] = e[5] * r,
                t
            },
            invert: function(t, e) {
                var i = e[0],
                n = e[2],
                r = e[4],
                o = e[1],
                a = e[3],
                s = e[5],
                l = i * a - o * n;
                return l ? (l = 1 / l, t[0] = a * l, t[1] = -o * l, t[2] = -n * l, t[3] = i * l, t[4] = (n * s - a * r) * l, t[5] = (o * r - i * s) * l, t) : null
            }
        };
        t.exports = n
    },
    function(t, e, i) {
        function n(t, e) {
            var i = o.slice(arguments, 2);
            return this.superClass.prototype[e].apply(t, i)
        }
        function r(t, e, i) {
            return this.superClass.prototype[e].apply(t, i)
        }
        var o = i(1),
        a = {},
        s = ".",
        l = "___EC__COMPONENT__CONTAINER___",
        h = a.parseClassType = function(t) {
            var e = {
                main: "",
                sub: ""
            };
            return t && (t = t.split(s), e.main = t[0] || "", e.sub = t[1] || ""),
            e
        };
        a.enableClassExtend = function(t, e) {
            t.extend = function(i) {
                var a = function() {
                    e && e.apply(this, arguments),
                    t.apply(this, arguments)
                };
                return o.extend(a.prototype, i),
                a.extend = this.extend,
                a.superCall = n,
                a.superApply = r,
                o.inherits(a, this),
                a.superClass = this,
                a
            }
        },
        a.enableClassManagement = function(t, e) {
            function i(t) {
                var e = n[t.main];
                return e && e[l] || (e = n[t.main] = {},
                e[l] = !0),
                e
            }
            e = e || {};
            var n = {};
            if (t.registerClass = function(t, e) {
                if (e) if (e = h(e), e.sub) {
                    if (e.sub !== l) {
                        var r = i(e);
                        r[e.sub] = t
                    }
                } else {
                    if (n[e.main]) throw new Error(e.main + "exists.");
                    n[e.main] = t
                }
                return t
            },
            t.getClass = function(t, e, i) {
                var r = n[t];
                if (r && r[l] && (r = e ? r[e] : null), i && !r) throw new Error("Component " + t + "." + (e || "") + " not exists. Load it first.");
                return r
            },
            t.getClassesByMainType = function(t) {
                t = h(t);
                var e = [],
                i = n[t.main];
                return i && i[l] ? o.each(i,
                function(t, i) {
                    i !== l && e.push(t)
                }) : e.push(i),
                e
            },
            t.hasClass = function(t) {
                return t = h(t),
                !!n[t.main]
            },
            t.getAllClassMainTypes = function() {
                var t = [];
                return o.each(n,
                function(e, i) {
                    t.push(i)
                }),
                t
            },
            t.hasSubTypes = function(t) {
                t = h(t);
                var e = n[t.main];
                return e && e[l]
            },
            t.parseClassType = h, e.registerWhenExtend) {
                var r = t.extend;
                r && (t.extend = function(e) {
                    var i = r.call(this, e);
                    return t.registerClass(i, e.type)
                })
            }
            return t
        },
        a.setReadOnly = function(t, e) {},
        t.exports = a
    },
    function(t, e, i) {
        var n = Array.prototype.slice,
        r = i(1),
        o = r.indexOf,
        a = function() {
            this._$handlers = {}
        };
        a.prototype = {
            constructor: a,
            one: function(t, e, i) {
                var n = this._$handlers;
                return e && t ? (n[t] || (n[t] = []), o(n[t], t) >= 0 ? this: (n[t].push({
                    h: e,
                    one: !0,
                    ctx: i || this
                }), this)) : this
            },
            on: function(t, e, i) {
                var n = this._$handlers;
                return e && t ? (n[t] || (n[t] = []), n[t].push({
                    h: e,
                    one: !1,
                    ctx: i || this
                }), this) : this
            },
            isSilent: function(t) {
                var e = this._$handlers;
                return e[t] && e[t].length
            },
            off: function(t, e) {
                var i = this._$handlers;
                if (!t) return this._$handlers = {},
                this;
                if (e) {
                    if (i[t]) {
                        for (var n = [], r = 0, o = i[t].length; o > r; r++) i[t][r].h != e && n.push(i[t][r]);
                        i[t] = n
                    }
                    i[t] && 0 === i[t].length && delete i[t]
                } else delete i[t];
                return this
            },
            trigger: function(t) {
                if (this._$handlers[t]) {
                    var e = arguments,
                    i = e.length;
                    i > 3 && (e = n.call(e, 1));
                    for (var r = this._$handlers[t], o = r.length, a = 0; o > a;) {
                        switch (i) {
                        case 1:
                            r[a].h.call(r[a].ctx);
                            break;
                        case 2:
                            r[a].h.call(r[a].ctx, e[1]);
                            break;
                        case 3:
                            r[a].h.call(r[a].ctx, e[1], e[2]);
                            break;
                        default:
                            r[a].h.apply(r[a].ctx, e)
                        }
                        r[a].one ? (r.splice(a, 1), o--) : a++
                    }
                }
                return this
            },
            triggerWithContext: function(t) {
                if (this._$handlers[t]) {
                    var e = arguments,
                    i = e.length;
                    i > 4 && (e = n.call(e, 1, e.length - 1));
                    for (var r = e[e.length - 1], o = this._$handlers[t], a = o.length, s = 0; a > s;) {
                        switch (i) {
                        case 1:
                            o[s].h.call(r);
                            break;
                        case 2:
                            o[s].h.call(r, e[1]);
                            break;
                        case 3:
                            o[s].h.call(r, e[1], e[2]);
                            break;
                        default:
                            o[s].h.apply(r, e)
                        }
                        o[s].one ? (o.splice(s, 1), a--) : s++
                    }
                }
                return this
            }
        },
        t.exports = a
    },
    function(t, e) {
        function i(t) {
            return t = Math.round(t),
            0 > t ? 0 : t > 255 ? 255 : t
        }
        function n(t) {
            return t = Math.round(t),
            0 > t ? 0 : t > 360 ? 360 : t
        }
        function r(t) {
            return 0 > t ? 0 : t > 1 ? 1 : t
        }
        function o(t) {
            return i(t.length && "%" === t.charAt(t.length - 1) ? parseFloat(t) / 100 * 255 : parseInt(t, 10))
        }
        function a(t) {
            return r(t.length && "%" === t.charAt(t.length - 1) ? parseFloat(t) / 100 : parseFloat(t))
        }
        function s(t, e, i) {
            return 0 > i ? i += 1 : i > 1 && (i -= 1),
            1 > 6 * i ? t + (e - t) * i * 6 : 1 > 2 * i ? e: 2 > 3 * i ? t + (e - t) * (2 / 3 - i) * 6 : t
        }
        function l(t, e, i) {
            return t + (e - t) * i
        }
        function h(t) {
            if (t) {
                t += "";
                var e = t.replace(/ /g, "").toLowerCase();
                if (e in x) return x[e].slice();
                if ("#" !== e.charAt(0)) {
                    var i = e.indexOf("("),
                    n = e.indexOf(")");
                    if ( - 1 !== i && n + 1 === e.length) {
                        var r = e.substr(0, i),
                        s = e.substr(i + 1, n - (i + 1)).split(","),
                        l = 1;
                        switch (r) {
                        case "rgba":
                            if (4 !== s.length) return;
                            l = a(s.pop());
                        case "rgb":
                            if (3 !== s.length) return;
                            return [o(s[0]), o(s[1]), o(s[2]), l];
                        case "hsla":
                            if (4 !== s.length) return;
                            return s[3] = a(s[3]),
                            c(s);
                        case "hsl":
                            if (3 !== s.length) return;
                            return c(s);
                        default:
                            return
                        }
                    }
                } else {
                    if (4 === e.length) {
                        var h = parseInt(e.substr(1), 16);
                        if (! (h >= 0 && 4095 >= h)) return;
                        return [(3840 & h) >> 4 | (3840 & h) >> 8, 240 & h | (240 & h) >> 4, 15 & h | (15 & h) << 4, 1]
                    }
                    if (7 === e.length) {
                        var h = parseInt(e.substr(1), 16);
                        if (! (h >= 0 && 16777215 >= h)) return;
                        return [(16711680 & h) >> 16, (65280 & h) >> 8, 255 & h, 1]
                    }
                }
            }
        }
        function c(t) {
            var e = (parseFloat(t[0]) % 360 + 360) % 360 / 360,
            n = a(t[1]),
            r = a(t[2]),
            o = .5 >= r ? r * (n + 1) : r + n - r * n,
            l = 2 * r - o,
            h = [i(255 * s(l, o, e + 1 / 3)), i(255 * s(l, o, e)), i(255 * s(l, o, e - 1 / 3))];
            return 4 === t.length && (h[3] = t[3]),
            h
        }
        function u(t) {
            if (t) {
                var e, i, n = t[0] / 255,
                r = t[1] / 255,
                o = t[2] / 255,
                a = Math.min(n, r, o),
                s = Math.max(n, r, o),
                l = s - a,
                h = (s + a) / 2;
                if (0 === l) e = 0,
                i = 0;
                else {
                    i = .5 > h ? l / (s + a) : l / (2 - s - a);
                    var c = ((s - n) / 6 + l / 2) / l,
                    u = ((s - r) / 6 + l / 2) / l,
                    d = ((s - o) / 6 + l / 2) / l;
                    n === s ? e = d - u: r === s ? e = 1 / 3 + c - d: o === s && (e = 2 / 3 + u - c),
                    0 > e && (e += 1),
                    e > 1 && (e -= 1)
                }
                var f = [360 * e, i, h];
                return null != t[3] && f.push(t[3]),
                f
            }
        }
        function d(t, e) {
            var i = h(t);
            if (i) {
                for (var n = 0; 3 > n; n++) 0 > e ? i[n] = i[n] * (1 - e) | 0 : i[n] = (255 - i[n]) * e + i[n] | 0;
                return y(i, 4 === i.length ? "rgba": "rgb")
            }
        }
        function f(t, e) {
            var i = h(t);
            return i ? ((1 << 24) + (i[0] << 16) + (i[1] << 8) + +i[2]).toString(16).slice(1) : void 0
        }
        function p(t, e, n) {
            if (e && e.length && t >= 0 && 1 >= t) {
                n = n || [0, 0, 0, 0];
                var r = t * (e.length - 1),
                o = Math.floor(r),
                a = Math.ceil(r),
                s = e[o],
                h = e[a],
                c = r - o;
                return n[0] = i(l(s[0], h[0], c)),
                n[1] = i(l(s[1], h[1], c)),
                n[2] = i(l(s[2], h[2], c)),
                n[3] = i(l(s[3], h[3], c)),
                n
            }
        }
        function g(t, e, n) {
            if (e && e.length && t >= 0 && 1 >= t) {
                var o = t * (e.length - 1),
                a = Math.floor(o),
                s = Math.ceil(o),
                c = h(e[a]),
                u = h(e[s]),
                d = o - a,
                f = y([i(l(c[0], u[0], d)), i(l(c[1], u[1], d)), i(l(c[2], u[2], d)), r(l(c[3], u[3], d))], "rgba");
                return n ? {
                    color: f,
                    leftIndex: a,
                    rightIndex: s,
                    value: o
                }: f
            }
        }
        function m(t, e, i, r) {
            return t = h(t),
            t ? (t = u(t), null != e && (t[0] = n(e)), null != i && (t[1] = a(i)), null != r && (t[2] = a(r)), y(c(t), "rgba")) : void 0
        }
        function v(t, e) {
            return t = h(t),
            t && null != e ? (t[3] = r(e), y(t, "rgba")) : void 0
        }
        function y(t, e) {
            return "rgb" !== e && "hsv" !== e && "hsl" !== e || (t = t.slice(0, 3)),
            e + "(" + t.join(",") + ")"
        }
        var x = {
            transparent: [0, 0, 0, 0],
            aliceblue: [240, 248, 255, 1],
            antiquewhite: [250, 235, 215, 1],
            aqua: [0, 255, 255, 1],
            aquamarine: [127, 255, 212, 1],
            azure: [240, 255, 255, 1],
            beige: [245, 245, 220, 1],
            bisque: [255, 228, 196, 1],
            black: [0, 0, 0, 1],
            blanchedalmond: [255, 235, 205, 1],
            blue: [0, 0, 255, 1],
            blueviolet: [138, 43, 226, 1],
            brown: [165, 42, 42, 1],
            burlywood: [222, 184, 135, 1],
            cadetblue: [95, 158, 160, 1],
            chartreuse: [127, 255, 0, 1],
            chocolate: [210, 105, 30, 1],
            coral: [255, 127, 80, 1],
            cornflowerblue: [100, 149, 237, 1],
            cornsilk: [255, 248, 220, 1],
            crimson: [220, 20, 60, 1],
            cyan: [0, 255, 255, 1],
            darkblue: [0, 0, 139, 1],
            darkcyan: [0, 139, 139, 1],
            darkgoldenrod: [184, 134, 11, 1],
            darkgray: [169, 169, 169, 1],
            darkgreen: [0, 100, 0, 1],
            darkgrey: [169, 169, 169, 1],
            darkkhaki: [189, 183, 107, 1],
            darkmagenta: [139, 0, 139, 1],
            darkolivegreen: [85, 107, 47, 1],
            darkorange: [255, 140, 0, 1],
            darkorchid: [153, 50, 204, 1],
            darkred: [139, 0, 0, 1],
            darksalmon: [233, 150, 122, 1],
            darkseagreen: [143, 188, 143, 1],
            darkslateblue: [72, 61, 139, 1],
            darkslategray: [47, 79, 79, 1],
            darkslategrey: [47, 79, 79, 1],
            darkturquoise: [0, 206, 209, 1],
            darkviolet: [148, 0, 211, 1],
            deeppink: [255, 20, 147, 1],
            deepskyblue: [0, 191, 255, 1],
            dimgray: [105, 105, 105, 1],
            dimgrey: [105, 105, 105, 1],
            dodgerblue: [30, 144, 255, 1],
            firebrick: [178, 34, 34, 1],
            floralwhite: [255, 250, 240, 1],
            forestgreen: [34, 139, 34, 1],
            fuchsia: [255, 0, 255, 1],
            gainsboro: [220, 220, 220, 1],
            ghostwhite: [248, 248, 255, 1],
            gold: [255, 215, 0, 1],
            goldenrod: [218, 165, 32, 1],
            gray: [128, 128, 128, 1],
            green: [0, 128, 0, 1],
            greenyellow: [173, 255, 47, 1],
            grey: [128, 128, 128, 1],
            honeydew: [240, 255, 240, 1],
            hotpink: [255, 105, 180, 1],
            indianred: [205, 92, 92, 1],
            indigo: [75, 0, 130, 1],
            ivory: [255, 255, 240, 1],
            khaki: [240, 230, 140, 1],
            lavender: [230, 230, 250, 1],
            lavenderblush: [255, 240, 245, 1],
            lawngreen: [124, 252, 0, 1],
            lemonchiffon: [255, 250, 205, 1],
            lightblue: [173, 216, 230, 1],
            lightcoral: [240, 128, 128, 1],
            lightcyan: [224, 255, 255, 1],
            lightgoldenrodyellow: [250, 250, 210, 1],
            lightgray: [211, 211, 211, 1],
            lightgreen: [144, 238, 144, 1],
            lightgrey: [211, 211, 211, 1],
            lightpink: [255, 182, 193, 1],
            lightsalmon: [255, 160, 122, 1],
            lightseagreen: [32, 178, 170, 1],
            lightskyblue: [135, 206, 250, 1],
            lightslategray: [119, 136, 153, 1],
            lightslategrey: [119, 136, 153, 1],
            lightsteelblue: [176, 196, 222, 1],
            lightyellow: [255, 255, 224, 1],
            lime: [0, 255, 0, 1],
            limegreen: [50, 205, 50, 1],
            linen: [250, 240, 230, 1],
            magenta: [255, 0, 255, 1],
            maroon: [128, 0, 0, 1],
            mediumaquamarine: [102, 205, 170, 1],
            mediumblue: [0, 0, 205, 1],
            mediumorchid: [186, 85, 211, 1],
            mediumpurple: [147, 112, 219, 1],
            mediumseagreen: [60, 179, 113, 1],
            mediumslateblue: [123, 104, 238, 1],
            mediumspringgreen: [0, 250, 154, 1],
            mediumturquoise: [72, 209, 204, 1],
            mediumvioletred: [199, 21, 133, 1],
            midnightblue: [25, 25, 112, 1],
            mintcream: [245, 255, 250, 1],
            mistyrose: [255, 228, 225, 1],
            moccasin: [255, 228, 181, 1],
            navajowhite: [255, 222, 173, 1],
            navy: [0, 0, 128, 1],
            oldlace: [253, 245, 230, 1],
            olive: [128, 128, 0, 1],
            olivedrab: [107, 142, 35, 1],
            orange: [255, 165, 0, 1],
            orangered: [255, 69, 0, 1],
            orchid: [218, 112, 214, 1],
            palegoldenrod: [238, 232, 170, 1],
            palegreen: [152, 251, 152, 1],
            paleturquoise: [175, 238, 238, 1],
            palevioletred: [219, 112, 147, 1],
            papayawhip: [255, 239, 213, 1],
            peachpuff: [255, 218, 185, 1],
            peru: [205, 133, 63, 1],
            pink: [255, 192, 203, 1],
            plum: [221, 160, 221, 1],
            powderblue: [176, 224, 230, 1],
            purple: [128, 0, 128, 1],
            red: [255, 0, 0, 1],
            rosybrown: [188, 143, 143, 1],
            royalblue: [65, 105, 225, 1],
            saddlebrown: [139, 69, 19, 1],
            salmon: [250, 128, 114, 1],
            sandybrown: [244, 164, 96, 1],
            seagreen: [46, 139, 87, 1],
            seashell: [255, 245, 238, 1],
            sienna: [160, 82, 45, 1],
            silver: [192, 192, 192, 1],
            skyblue: [135, 206, 235, 1],
            slateblue: [106, 90, 205, 1],
            slategray: [112, 128, 144, 1],
            slategrey: [112, 128, 144, 1],
            snow: [255, 250, 250, 1],
            springgreen: [0, 255, 127, 1],
            steelblue: [70, 130, 180, 1],
            tan: [210, 180, 140, 1],
            teal: [0, 128, 128, 1],
            thistle: [216, 191, 216, 1],
            tomato: [255, 99, 71, 1],
            turquoise: [64, 224, 208, 1],
            violet: [238, 130, 238, 1],
            wheat: [245, 222, 179, 1],
            white: [255, 255, 255, 1],
            whitesmoke: [245, 245, 245, 1],
            yellow: [255, 255, 0, 1],
            yellowgreen: [154, 205, 50, 1]
        };
        t.exports = {
            parse: h,
            lift: d,
            toHex: f,
            fastMapToColor: p,
            mapToColor: g,
            modifyHSL: m,
            modifyAlpha: v,
            stringify: y
        }
    },
    function(t, e) {
        "use strict";
        function i() {
            this._coordinateSystems = []
        }
        var n = {};
        i.prototype = {
            constructor: i,
            create: function(t, e) {
                var i = [];
                for (var r in n) {
                    var o = n[r].create(t, e);
                    o && (i = i.concat(o))
                }
                this._coordinateSystems = i
            },
            update: function(t, e) {
                for (var i = this._coordinateSystems,
                n = 0; n < i.length; n++) i[n].update && i[n].update(t, e)
            }
        },
        i.register = function(t, e) {
            n[t] = e
        },
        i.get = function(t) {
            return n[t]
        },
        t.exports = i
    },
    function(t, e, i) {
        var n = i(123),
        r = i(38);
        i(124),
        i(122);
        var o = i(32),
        a = i(4),
        s = i(1),
        l = i(18),
        h = {};
        h.getScaleExtent = function(t, e) {
            var i = t.scale,
            n = i.getExtent(),
            r = n[1] - n[0];
            if ("ordinal" === i.type) return isFinite(r) ? n: [0, 0];
            var o = e.getMin ? e.getMin() : e.get("min"),
            l = e.getMax ? e.getMax() : e.get("max"),
            h = e.getNeedCrossZero ? e.getNeedCrossZero() : !e.get("scale"),
            c = e.get("boundaryGap");
            s.isArray(c) || (c = [c || 0, c || 0]),
            c[0] = a.parsePercent(c[0], 1),
            c[1] = a.parsePercent(c[1], 1);
            var u = !0,
            d = !0;
            return null == o && (o = n[0] - c[0] * r, u = !1),
            null == l && (l = n[1] + c[1] * r, d = !1),
            "dataMin" === o && (o = n[0]),
            "dataMax" === l && (l = n[1]),
            h && (o > 0 && l > 0 && !u && (o = 0), 0 > o && 0 > l && !d && (l = 0)),
            [o, l]
        },
        h.niceScaleExtent = function(t, e) {
            var i = t.scale,
            n = h.getScaleExtent(t, e),
            r = null != (e.getMin ? e.getMin() : e.get("min")),
            o = null != (e.getMax ? e.getMax() : e.get("max")),
            a = e.get("splitNumber");
            i.setExtent(n[0], n[1]),
            i.niceExtent(a, r, o);
            var s = e.get("minInterval");
            if (isFinite(s) && !r && !o && "interval" === i.type) {
                var l = i.getInterval(),
                c = Math.max(Math.abs(l), s) / l;
                n = i.getExtent(),
                i.setExtent(c * n[0], n[1] * c),
                i.niceExtent(a)
            }
            var l = e.get("interval");
            null != l && i.setInterval && i.setInterval(l)
        },
        h.createScaleByModel = function(t, e) {
            if (e = e || t.get("type")) switch (e) {
            case "category":
                return new n(t.getCategories(), [1 / 0, -(1 / 0)]);
            case "value":
                return new r;
            default:
                return (o.getClass(e) || r).create(t)
            }
        },
        h.ifAxisCrossZero = function(t) {
            var e = t.scale.getExtent(),
            i = e[0],
            n = e[1];
            return ! (i > 0 && n > 0 || 0 > i && 0 > n)
        },
        h.getAxisLabelInterval = function(t, e, i, n) {
            var r, o = 0,
            a = 0,
            s = 1;
            e.length > 40 && (s = Math.round(e.length / 40));
            for (var h = 0; h < t.length; h += s) {
                var c = t[h],
                u = l.getBoundingRect(e[h], i, "center", "top");
                u[n ? "x": "y"] += c,
                u[n ? "width": "height"] *= 1.5,
                r ? r.intersect(u) ? (a++, o = Math.max(o, a)) : (r.union(u), a = 0) : r = u.clone()
            }
            return 0 === o && s > 1 ? s: o * s
        },
        h.getFormattedLabels = function(t, e) {
            var i = t.scale,
            n = i.getTicksLabels(),
            r = i.getTicks();
            return "string" == typeof e ? (e = function(t) {
                return function(e) {
                    return t.replace("{value}", e)
                }
            } (e), s.map(n, e)) : "function" == typeof e ? s.map(r,
            function(n, r) {
                return e("category" === t.type ? i.getLabel(n) : n, r)
            },
            this) : n
        },
        t.exports = h
    },
    function(t, e, i) {
        "use strict";
        var n = i(3),
        r = i(8),
        o = n.extendShape({
            type: "triangle",
            shape: {
                cx: 0,
                cy: 0,
                width: 0,
                height: 0
            },
            buildPath: function(t, e) {
                var i = e.cx,
                n = e.cy,
                r = e.width / 2,
                o = e.height / 2;
                t.moveTo(i, n - o),
                t.lineTo(i + r, n + o),
                t.lineTo(i - r, n + o),
                t.closePath()
            }
        }),
        a = n.extendShape({
            type: "diamond",
            shape: {
                cx: 0,
                cy: 0,
                width: 0,
                height: 0
            },
            buildPath: function(t, e) {
                var i = e.cx,
                n = e.cy,
                r = e.width / 2,
                o = e.height / 2;
                t.moveTo(i, n - o),
                t.lineTo(i + r, n),
                t.lineTo(i, n + o),
                t.lineTo(i - r, n),
                t.closePath()
            }
        }),
        s = n.extendShape({
            type: "pin",
            shape: {
                x: 0,
                y: 0,
                width: 0,
                height: 0
            },
            buildPath: function(t, e) {
                var i = e.x,
                n = e.y,
                r = e.width / 5 * 3,
                o = Math.max(r, e.height),
                a = r / 2,
                s = a * a / (o - a),
                l = n - o + a + s,
                h = Math.asin(s / a),
                c = Math.cos(h) * a,
                u = Math.sin(h),
                d = Math.cos(h);
                t.arc(i, l, a, Math.PI - h, 2 * Math.PI + h);
                var f = .6 * a,
                p = .7 * a;
                t.bezierCurveTo(i + c - u * f, l + s + d * f, i, n - p, i, n),
                t.bezierCurveTo(i, n - p, i - c + u * f, l + s + d * f, i - c, l + s),
                t.closePath()
            }
        }),
        l = n.extendShape({
            type: "arrow",
            shape: {
                x: 0,
                y: 0,
                width: 0,
                height: 0
            },
            buildPath: function(t, e) {
                var i = e.height,
                n = e.width,
                r = e.x,
                o = e.y,
                a = n / 3 * 2;
                t.moveTo(r, o),
                t.lineTo(r + a, o + i),
                t.lineTo(r, o + i / 4 * 3),
                t.lineTo(r - a, o + i),
                t.lineTo(r, o),
                t.closePath()
            }
        }),
        h = {
            line: n.Line,
            rect: n.Rect,
            roundRect: n.Rect,
            square: n.Rect,
            circle: n.Circle,
            diamond: a,
            pin: s,
            arrow: l,
            triangle: o
        },
        c = {
            line: function(t, e, i, n, r) {
                r.x1 = t,
                r.y1 = e + n / 2,
                r.x2 = t + i,
                r.y2 = e + n / 2
            },
            rect: function(t, e, i, n, r) {
                r.x = t,
                r.y = e,
                r.width = i,
                r.height = n
            },
            roundRect: function(t, e, i, n, r) {
                r.x = t,
                r.y = e,
                r.width = i,
                r.height = n,
                r.r = Math.min(i, n) / 4
            },
            square: function(t, e, i, n, r) {
                var o = Math.min(i, n);
                r.x = t,
                r.y = e,
                r.width = o,
                r.height = o
            },
            circle: function(t, e, i, n, r) {
                r.cx = t + i / 2,
                r.cy = e + n / 2,
                r.r = Math.min(i, n) / 2
            },
            diamond: function(t, e, i, n, r) {
                r.cx = t + i / 2,
                r.cy = e + n / 2,
                r.width = i,
                r.height = n
            },
            pin: function(t, e, i, n, r) {
                r.x = t + i / 2,
                r.y = e + n / 2,
                r.width = i,
                r.height = n
            },
            arrow: function(t, e, i, n, r) {
                r.x = t + i / 2,
                r.y = e + n / 2,
                r.width = i,
                r.height = n
            },
            triangle: function(t, e, i, n, r) {
                r.cx = t + i / 2,
                r.cy = e + n / 2,
                r.width = i,
                r.height = n
            }
        },
        u = {};
        for (var d in h) u[d] = new h[d];
        var f = n.extendShape({
            type: "symbol",
            shape: {
                symbolType: "",
                x: 0,
                y: 0,
                width: 0,
                height: 0
            },
            beforeBrush: function() {
                var t = this.style,
                e = this.shape;
                "pin" === e.symbolType && "inside" === t.textPosition && (t.textPosition = ["50%", "40%"], t.textAlign = "center", t.textVerticalAlign = "middle")
            },
            buildPath: function(t, e) {
                var i = e.symbolType,
                n = u[i];
                "none" !== e.symbolType && (n || (i = "rect", n = u[i]), c[i](e.x, e.y, e.width, e.height, n.shape), n.buildPath(t, n.shape))
            }
        }),
        p = function(t) {
            if ("image" !== this.type) {
                var e = this.style,
                i = this.shape;
                i && "line" === i.symbolType ? e.stroke = t: this.__isEmptyBrush ? (e.stroke = t, e.fill = "#fff") : (e.fill && (e.fill = t), e.stroke && (e.stroke = t)),
                this.dirty()
            }
        },
        g = {
            createSymbol: function(t, e, i, o, a, s) {
                var l = 0 === t.indexOf("empty");
                l && (t = t.substr(5, 1).toLowerCase() + t.substr(6));
                var h;
                return h = 0 === t.indexOf("image://") ? new n.Image({
                    style: {
                        image: t.slice(8),
                        x: e,
                        y: i,
                        width: o,
                        height: a
                    }
                }) : 0 === t.indexOf("path://") ? n.makePath(t.slice(7), {},
                new r(e, i, o, a)) : new f({
                    shape: {
                        symbolType: t,
                        x: e,
                        y: i,
                        width: o,
                        height: a
                    }
                }),
                h.__isEmptyBrush = l,
                h.setColor = p,
                h.setColor(s),
                h
            }
        };
        t.exports = g
    },
    function(t, e, i) {
        function n() {
            this.group = new a,
            this.uid = s.getUID("viewChart")
        }
        function r(t, e) {
            if (t && (t.trigger(e), "group" === t.type)) for (var i = 0; i < t.childCount(); i++) r(t.childAt(i), e)
        }
        function o(t, e, i) {
            if (null != e.dataIndex) {
                var n = t.getItemGraphicEl(e.dataIndex);
                r(n, i)
            } else if (e.name) {
                var o = t.indexOfName(e.name),
                n = t.getItemGraphicEl(o);
                r(n, i)
            } else t.eachItemGraphicEl(function(t) {
                r(t, i)
            })
        }
        var a = i(27),
        s = i(42),
        l = i(20);
        n.prototype = {
            type: "chart",
            init: function(t, e) {},
            render: function(t, e, i, n) {},
            highlight: function(t, e, i, n) {
                o(t.getData(), n, "emphasis")
            },
            downplay: function(t, e, i, n) {
                o(t.getData(), n, "normal")
            },
            remove: function(t, e) {
                this.group.removeAll()
            },
            dispose: function() {}
        };
        var h = n.prototype;
        h.updateView = h.updateLayout = h.updateVisual = function(t, e, i, n) {
            this.render(t, e, i, n)
        },
        l.enableClassExtend(n),
        l.enableClassManagement(n, {
            registerWhenExtend: !0
        }),
        t.exports = n
    },
    function(t, e, i) {
        var n = i(1),
        r = i(55),
        o = i(8),
        a = function(t) {
            t = t || {},
            r.call(this, t);
            for (var e in t) this[e] = t[e];
            this._children = [],
            this.__storage = null,
            this.__dirty = !0
        };
        a.prototype = {
            constructor: a,
            type: "group",
            silent: !1,
            children: function() {
                return this._children.slice()
            },
            childAt: function(t) {
                return this._children[t]
            },
            childOfName: function(t) {
                for (var e = this._children,
                i = 0; i < e.length; i++) if (e[i].name === t) return e[i]
            },
            childCount: function() {
                return this._children.length
            },
            add: function(t) {
                return t && t !== this && t.parent !== this && (this._children.push(t), this._doAdd(t)),
                this
            },
            addBefore: function(t, e) {
                if (t && t !== this && t.parent !== this && e && e.parent === this) {
                    var i = this._children,
                    n = i.indexOf(e);
                    n >= 0 && (i.splice(n, 0, t), this._doAdd(t))
                }
                return this
            },
            _doAdd: function(t) {
                t.parent && t.parent.remove(t),
                t.parent = this;
                var e = this.__storage,
                i = this.__zr;
                e && e !== t.__storage && (e.addToMap(t), t instanceof a && t.addChildrenToStorage(e)),
                i && i.refresh()
            },
            remove: function(t) {
                var e = this.__zr,
                i = this.__storage,
                r = this._children,
                o = n.indexOf(r, t);
                return 0 > o ? this: (r.splice(o, 1), t.parent = null, i && (i.delFromMap(t.id), t instanceof a && t.delChildrenFromStorage(i)), e && e.refresh(), this)
            },
            removeAll: function() {
                var t, e, i = this._children,
                n = this.__storage;
                for (e = 0; e < i.length; e++) t = i[e],
                n && (n.delFromMap(t.id), t instanceof a && t.delChildrenFromStorage(n)),
                t.parent = null;
                return i.length = 0,
                this
            },
            eachChild: function(t, e) {
                for (var i = this._children,
                n = 0; n < i.length; n++) {
                    var r = i[n];
                    t.call(e, r, n)
                }
                return this
            },
            traverse: function(t, e) {
                for (var i = 0; i < this._children.length; i++) {
                    var n = this._children[i];
                    t.call(e, n),
                    "group" === n.type && n.traverse(t, e)
                }
                return this
            },
            addChildrenToStorage: function(t) {
                for (var e = 0; e < this._children.length; e++) {
                    var i = this._children[e];
                    t.addToMap(i),
                    i instanceof a && i.addChildrenToStorage(t)
                }
            },
            delChildrenFromStorage: function(t) {
                for (var e = 0; e < this._children.length; e++) {
                    var i = this._children[e];
                    t.delFromMap(i.id),
                    i instanceof a && i.delChildrenFromStorage(t)
                }
            },
            dirty: function() {
                return this.__dirty = !0,
                this.__zr && this.__zr.refresh(),
                this
            },
            getBoundingRect: function(t) {
                for (var e = null,
                i = new o(0, 0, 0, 0), n = t || this._children, r = [], a = 0; a < n.length; a++) {
                    var s = n[a];
                    if (!s.ignore && !s.invisible) {
                        var l = s.getBoundingRect(),
                        h = s.getLocalTransform(r);
                        h ? (i.copy(l), i.applyTransform(h), e = e || i.clone(), e.union(i)) : (e = e || l.clone(), e.union(l))
                    }
                }
                return e || i
            }
        },
        n.inherits(a, r),
        t.exports = a
    },
    function(t, e, i) {
        "use strict";
        var n = i(16),
        r = i(5),
        o = i(65),
        a = i(8),
        s = i(33).devicePixelRatio,
        l = {
            M: 1,
            L: 2,
            C: 3,
            Q: 4,
            A: 5,
            Z: 6,
            R: 7
        },
        h = [],
        c = [],
        u = [],
        d = [],
        f = Math.min,
        p = Math.max,
        g = Math.cos,
        m = Math.sin,
        v = Math.sqrt,
        y = Math.abs,
        x = "undefined" != typeof Float32Array,
        _ = function() {
            this.data = [],
            this._len = 0,
            this._ctx = null,
            this._xi = 0,
            this._yi = 0,
            this._x0 = 0,
            this._y0 = 0,
            this._ux = 0,
            this._uy = 0
        };
        _.prototype = {
            constructor: _,
            _lineDash: null,
            _dashOffset: 0,
            _dashIdx: 0,
            _dashSum: 0,
            setScale: function(t, e) {
                this._ux = y(1 / s / t) || 0,
                this._uy = y(1 / s / e) || 0
            },
            getContext: function() {
                return this._ctx
            },
            beginPath: function(t) {
                return this._ctx = t,
                t && t.beginPath(),
                this._len = 0,
                this._lineDash && (this._lineDash = null, this._dashOffset = 0),
                this
            },
            moveTo: function(t, e) {
                return this.addData(l.M, t, e),
                this._ctx && this._ctx.moveTo(t, e),
                this._x0 = t,
                this._y0 = e,
                this._xi = t,
                this._yi = e,
                this
            },
            lineTo: function(t, e) {
                var i = y(t - this._xi) > this._ux || y(e - this._yi) > this._uy || 0 === this._len;
                return this.addData(l.L, t, e),
                this._ctx && i && (this._needsDash() ? this._dashedLineTo(t, e) : this._ctx.lineTo(t, e)),
                i && (this._xi = t, this._yi = e),
                this
            },
            bezierCurveTo: function(t, e, i, n, r, o) {
                return this.addData(l.C, t, e, i, n, r, o),
                this._ctx && (this._needsDash() ? this._dashedBezierTo(t, e, i, n, r, o) : this._ctx.bezierCurveTo(t, e, i, n, r, o)),
                this._xi = r,
                this._yi = o,
                this
            },
            quadraticCurveTo: function(t, e, i, n) {
                return this.addData(l.Q, t, e, i, n),
                this._ctx && (this._needsDash() ? this._dashedQuadraticTo(t, e, i, n) : this._ctx.quadraticCurveTo(t, e, i, n)),
                this._xi = i,
                this._yi = n,
                this
            },
            arc: function(t, e, i, n, r, o) {
                return this.addData(l.A, t, e, i, i, n, r - n, 0, o ? 0 : 1),
                this._ctx && this._ctx.arc(t, e, i, n, r, o),
                this._xi = g(r) * i + t,
                this._xi = m(r) * i + t,
                this
            },
            arcTo: function(t, e, i, n, r) {
                return this._ctx && this._ctx.arcTo(t, e, i, n, r),
                this
            },
            rect: function(t, e, i, n) {
                return this._ctx && this._ctx.rect(t, e, i, n),
                this.addData(l.R, t, e, i, n),
                this
            },
            closePath: function() {
                this.addData(l.Z);
                var t = this._ctx,
                e = this._x0,
                i = this._y0;
                return t && (this._needsDash() && this._dashedLineTo(e, i), t.closePath()),
                this._xi = e,
                this._yi = i,
                this
            },
            fill: function(t) {
                t && t.fill(),
                this.toStatic()
            },
            stroke: function(t) {
                t && t.stroke(),
                this.toStatic()
            },
            setLineDash: function(t) {
                if (t instanceof Array) {
                    this._lineDash = t,
                    this._dashIdx = 0;
                    for (var e = 0,
                    i = 0; i < t.length; i++) e += t[i];
                    this._dashSum = e
                }
                return this
            },
            setLineDashOffset: function(t) {
                return this._dashOffset = t,
                this
            },
            len: function() {
                return this._len
            },
            setData: function(t) {
                var e = t.length;
                this.data && this.data.length == e || !x || (this.data = new Float32Array(e));
                for (var i = 0; e > i; i++) this.data[i] = t[i];
                this._len = e
            },
            appendPath: function(t) {
                t instanceof Array || (t = [t]);
                for (var e = t.length,
                i = 0,
                n = this._len,
                r = 0; e > r; r++) i += t[r].len();
                x && this.data instanceof Float32Array && (this.data = new Float32Array(n + i));
                for (var r = 0; e > r; r++) for (var o = t[r].data, a = 0; a < o.length; a++) this.data[n++] = o[a];
                this._len = n
            },
            addData: function(t) {
                var e = this.data;
                this._len + arguments.length > e.length && (this._expandData(), e = this.data);
                for (var i = 0; i < arguments.length; i++) e[this._len++] = arguments[i];
                this._prevCmd = t
            },
            _expandData: function() {
                if (! (this.data instanceof Array)) {
                    for (var t = [], e = 0; e < this._len; e++) t[e] = this.data[e];
                    this.data = t
                }
            },
            _needsDash: function() {
                return this._lineDash
            },
            _dashedLineTo: function(t, e) {
                var i, n, r = this._dashSum,
                o = this._dashOffset,
                a = this._lineDash,
                s = this._ctx,
                l = this._xi,
                h = this._yi,
                c = t - l,
                u = e - h,
                d = v(c * c + u * u),
                g = l,
                m = h,
                y = a.length;
                for (c /= d, u /= d, 0 > o && (o = r + o), o %= r, g -= o * c, m -= o * u; c >= 0 && t >= g || 0 > c && g > t;) n = this._dashIdx,
                i = a[n],
                g += c * i,
                m += u * i,
                this._dashIdx = (n + 1) % y,
                c > 0 && l > g || 0 > c && g > l || s[n % 2 ? "moveTo": "lineTo"](c >= 0 ? f(g, t) : p(g, t), u >= 0 ? f(m, e) : p(m, e));
                c = g - t,
                u = m - e,
                this._dashOffset = -v(c * c + u * u)
            },
            _dashedBezierTo: function(t, e, i, r, o, a) {
                var s, l, h, c, u, d = this._dashSum,
                f = this._dashOffset,
                p = this._lineDash,
                g = this._ctx,
                m = this._xi,
                y = this._yi,
                x = n.cubicAt,
                _ = 0,
                b = this._dashIdx,
                w = p.length,
                M = 0;
                for (0 > f && (f = d + f), f %= d, s = 0; 1 > s; s += .1) l = x(m, t, i, o, s + .1) - x(m, t, i, o, s),
                h = x(y, e, r, a, s + .1) - x(y, e, r, a, s),
                _ += v(l * l + h * h);
                for (; w > b && (M += p[b], !(M > f)); b++);
                for (s = (M - f) / _; 1 >= s;) c = x(m, t, i, o, s),
                u = x(y, e, r, a, s),
                b % 2 ? g.moveTo(c, u) : g.lineTo(c, u),
                s += p[b] / _,
                b = (b + 1) % w;
                b % 2 !== 0 && g.lineTo(o, a),
                l = o - c,
                h = a - u,
                this._dashOffset = -v(l * l + h * h)
            },
            _dashedQuadraticTo: function(t, e, i, n) {
                var r = i,
                o = n;
                i = (i + 2 * t) / 3,
                n = (n + 2 * e) / 3,
                t = (this._xi + 2 * t) / 3,
                e = (this._yi + 2 * e) / 3,
                this._dashedBezierTo(t, e, i, n, r, o)
            },
            toStatic: function() {
                var t = this.data;
                t instanceof Array && (t.length = this._len, x && (this.data = new Float32Array(t)))
            },
            getBoundingRect: function() {
                h[0] = h[1] = u[0] = u[1] = Number.MAX_VALUE,
                c[0] = c[1] = d[0] = d[1] = -Number.MAX_VALUE;
                for (var t = this.data,
                e = 0,
                i = 0,
                n = 0,
                s = 0,
                f = 0; f < t.length;) {
                    var p = t[f++];
                    switch (1 == f && (e = t[f], i = t[f + 1], n = e, s = i), p) {
                    case l.M:
                        n = t[f++],
                        s = t[f++],
                        e = n,
                        i = s,
                        u[0] = n,
                        u[1] = s,
                        d[0] = n,
                        d[1] = s;
                        break;
                    case l.L:
                        o.fromLine(e, i, t[f], t[f + 1], u, d),
                        e = t[f++],
                        i = t[f++];
                        break;
                    case l.C:
                        o.fromCubic(e, i, t[f++], t[f++], t[f++], t[f++], t[f], t[f + 1], u, d),
                        e = t[f++],
                        i = t[f++];
                        break;
                    case l.Q:
                        o.fromQuadratic(e, i, t[f++], t[f++], t[f], t[f + 1], u, d),
                        e = t[f++],
                        i = t[f++];
                        break;
                    case l.A:
                        var v = t[f++],
                        y = t[f++],
                        x = t[f++],
                        _ = t[f++],
                        b = t[f++],
                        w = t[f++] + b,
                        M = (t[f++], 1 - t[f++]);
                        1 == f && (n = g(b) * x + v, s = m(b) * _ + y),
                        o.fromArc(v, y, x, _, b, w, M, u, d),
                        e = g(w) * x + v,
                        i = m(w) * _ + y;
                        break;
                    case l.R:
                        n = e = t[f++],
                        s = i = t[f++];
                        var S = t[f++],
                        A = t[f++];
                        o.fromLine(n, s, n + S, s + A, u, d);
                        break;
                    case l.Z:
                        e = n,
                        i = s
                    }
                    r.min(h, h, u),
                    r.max(c, c, d)
                }
                return 0 === f && (h[0] = h[1] = c[0] = c[1] = 0),
                new a(h[0], h[1], c[0] - h[0], c[1] - h[1])
            },
            rebuildPath: function(t) {
                for (var e, i, n, r, o, a, s = this.data,
                h = this._ux,
                c = this._uy,
                u = this._len,
                d = 0; u > d;) {
                    var f = s[d++];
                    switch (1 == d && (n = s[d], r = s[d + 1], e = n, i = r), f) {
                    case l.M:
                        e = n = s[d++],
                        i = r = s[d++],
                        t.moveTo(n, r);
                        break;
                    case l.L:
                        o = s[d++],
                        a = s[d++],
                        (y(o - n) > h || y(a - r) > c || d === u - 1) && (t.lineTo(o, a), n = o, r = a);
                        break;
                    case l.C:
                        t.bezierCurveTo(s[d++], s[d++], s[d++], s[d++], s[d++], s[d++]),
                        n = s[d - 2],
                        r = s[d - 1];
                        break;
                    case l.Q:
                        t.quadraticCurveTo(s[d++], s[d++], s[d++], s[d++]),
                        n = s[d - 2],
                        r = s[d - 1];
                        break;
                    case l.A:
                        var p = s[d++],
                        v = s[d++],
                        x = s[d++],
                        _ = s[d++],
                        b = s[d++],
                        w = s[d++],
                        M = s[d++],
                        S = s[d++],
                        A = x > _ ? x: _,
                        T = x > _ ? 1 : x / _,
                        C = x > _ ? _ / x: 1,
                        I = Math.abs(x - _) > .001,
                        k = b + w;
                        I ? (t.translate(p, v), t.rotate(M), t.scale(T, C), t.arc(0, 0, A, b, k, 1 - S), t.scale(1 / T, 1 / C), t.rotate( - M), t.translate( - p, -v)) : t.arc(p, v, A, b, k, 1 - S),
                        1 == d && (e = g(b) * x + p, i = m(b) * _ + v),
                        n = g(k) * x + p,
                        r = m(k) * _ + v;
                        break;
                    case l.R:
                        e = n = s[d],
                        i = r = s[d + 1],
                        t.rect(s[d++], s[d++], s[d++], s[d++]);
                        break;
                    case l.Z:
                        t.closePath(),
                        n = e,
                        r = i
                    }
                }
            }
        },
        _.CMD = l,
        t.exports = _
    },
    function(t, e) {
        "use strict";
        var i = {};
        t.exports = {
            register: function(t, e) {
                i[t] = e
            },
            get: function(t) {
                return i[t]
            }
        }
    },
    function(t, e, i) {
        var n = i(1);
        t.exports = function(t) {
            for (var e = 0; e < t.length; e++) t[e][1] || (t[e][1] = t[e][0]);
            return function(e) {
                for (var i = {},
                r = 0; r < t.length; r++) {
                    var o = t[r][1];
                    if (! (e && n.indexOf(e, o) >= 0)) {
                        var a = this.getShallow(o);
                        null != a && (i[t[r][0]] = a)
                    }
                }
                return i
            }
        }
    },
    function(t, e, i) {
        function n(t, e, i, n) {
            if (!e) return t;
            var s = o(e[0]),
            l = a.isArray(s) && s.length || 1;
            i = i || [],
            n = n || "extra";
            for (var h = 0; l > h; h++) if (!t[h]) {
                var c = i[h] || n + (h - i.length);
                t[h] = r(e, h) ? {
                    type: "ordinal",
                    name: c
                }: c
            }
            return t
        }
        function r(t, e) {
            for (var i = 0,
            n = t.length; n > i; i++) {
                var r = o(t[i]);
                if (!a.isArray(r)) return ! 1;
                var r = r[e];
                if (null != r && isFinite(r)) return ! 1;
                if (a.isString(r) && "-" !== r) return ! 0
            }
            return ! 1
        }
        function o(t) {
            return a.isArray(t) ? t: a.isObject(t) ? t.value: t
        }
        var a = i(1);
        t.exports = n
    },
    function(t, e, i) {
        function n() {
            this._extent = [1 / 0, -(1 / 0)],
            this._interval = 0,
            this.init && this.init.apply(this, arguments)
        }
        var r = i(20),
        o = n.prototype;
        o.parse = function(t) {
            return t
        },
        o.contain = function(t) {
            var e = this._extent;
            return t >= e[0] && t <= e[1]
        },
        o.normalize = function(t) {
            var e = this._extent;
            return e[1] === e[0] ? .5 : (t - e[0]) / (e[1] - e[0])
        },
        o.scale = function(t) {
            var e = this._extent;
            return t * (e[1] - e[0]) + e[0]
        },
        o.unionExtent = function(t) {
            var e = this._extent;
            t[0] < e[0] && (e[0] = t[0]),
            t[1] > e[1] && (e[1] = t[1])
        },
        o.getExtent = function() {
            return this._extent.slice()
        },
        o.setExtent = function(t, e) {
            var i = this._extent;
            isNaN(t) || (i[0] = t),
            isNaN(e) || (i[1] = e)
        },
        o.getTicksLabels = function() {
            for (var t = [], e = this.getTicks(), i = 0; i < e.length; i++) t.push(this.getLabel(e[i]));
            return t
        },
        r.enableClassExtend(n),
        r.enableClassManagement(n, {
            registerWhenExtend: !0
        }),
        t.exports = n
    },
    function(t, e) {
        var i = 1;
        "undefined" != typeof window && (i = Math.max(window.devicePixelRatio || 1, 1));
        var n = {
            debugMode: 0,
            devicePixelRatio: i
        };
        t.exports = n
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            return t.getBoundingClientRect ? t.getBoundingClientRect() : {
                left: 0,
                top: 0
            }
        }
        function r(t, e) {
            if (e = e || window.event, null != e.zrX) return e;
            var i = e.type,
            r = i && i.indexOf("touch") >= 0;
            if (r) {
                var o = "touchend" != i ? e.targetTouches[0] : e.changedTouches[0];
                if (o) {
                    var a = n(t);
                    e.zrX = o.clientX - a.left,
                    e.zrY = o.clientY - a.top
                }
            } else {
                var s = n(t);
                e.zrX = e.clientX - s.left,
                e.zrY = e.clientY - s.top,
                e.zrDelta = e.wheelDelta ? e.wheelDelta / 120 : -(e.detail || 0) / 3
            }
            return e
        }
        function o(t, e, i) {
            l ? t.addEventListener(e, i) : t.attachEvent("on" + e, i)
        }
        function a(t, e, i) {
            l ? t.removeEventListener(e, i) : t.detachEvent("on" + e, i)
        }
        var s = i(21),
        l = "undefined" != typeof window && !!window.addEventListener,
        h = l ?
        function(t) {
            t.preventDefault(),
            t.stopPropagation(),
            t.cancelBubble = !0
        }: function(t) {
            t.returnValue = !1,
            t.cancelBubble = !0
        };
        t.exports = {
            normalizeEvent: r,
            addEventListener: o,
            removeEventListener: a,
            stop: h,
            Dispatcher: s
        }
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            for (var e = 0; e < t.length && null == t[e];) e++;
            return t[e]
        }
        function r(t) {
            var e = n(t);
            return null != e && !u.isArray(p(e))
        }
        function o(t, e, i) {
            if (t = t || [], !u.isArray(t)) throw new Error("Invalid data.");
            var n = e.get("coordinateSystem"),
            o = m[n],
            a = f.get(n),
            s = o && o(t, e, i),
            d = s && s.dimensions;
            d || (d = a && a.dimensions || ["x", "y"], d = c(d, t, d.concat(["value"])));
            var v, y = s && s.categoryAxisModel,
            x = "ordinal" === d[0].type ? 0 : "ordinal" === d[1].type ? 1 : -1,
            _ = new h(d, e),
            b = l(s, t),
            w = y && r(t) ?
            function(t, e, i, n) {
                return n === x ? i: g(p(t), d[n])
            }: function(t, e, i, n) {
                var r = p(t),
                o = g(r && r[n], d[n]);
                return x === n && "string" == typeof o && (v = v || y.getCategories(), o = u.indexOf(v, o), 0 > o && !isNaN(o) && (o = +o)),
                o
            };
            return _.initData(t, b, w),
            _
        }
        function a(t) {
            return "category" !== t && "time" !== t
        }
        function s(t) {
            return "category" === t ? "ordinal": "time" === t ? "time": "float"
        }
        function l(t, e) {
            var i = [];
            if (t && t.categoryAxisModel) {
                var n = t.categoryAxisModel.getCategories();
                if (n) {
                    var r = e.length;
                    if (u.isArray(e[0]) && e[0].length > 1) {
                        i = [];
                        for (var o = 0; r > o; o++) i[o] = n[e[o][t.categoryIndex || 0]]
                    } else i = n.slice(0)
                }
            }
            return i
        }
        var h = i(15),
        c = i(31),
        u = i(1),
        d = i(7),
        f = i(23),
        p = d.getDataItemValue,
        g = d.converDataValue,
        m = {
            cartesian2d: function(t, e, i) {
                var n = i.getComponent("xAxis", e.get("xAxisIndex")),
                r = i.getComponent("yAxis", e.get("yAxisIndex"));
                if (!n || !r) throw new Error("Axis option not found");
                var o = n.get("type"),
                l = r.get("type"),
                h = [{
                    name: "x",
                    type: s(o),
                    stackable: a(o)
                },
                {
                    name: "y",
                    type: s(l),
                    stackable: a(l)
                }],
                u = "category" === o;
                return c(h, t, ["x", "y", "z"]),
                {
                    dimensions: h,
                    categoryIndex: u ? 0 : 1,
                    categoryAxisModel: u ? n: "category" === l ? r: null
                }
            },
            polar: function(t, e, i) {
                var n = e.get("polarIndex") || 0,
                r = function(t) {
                    return t.get("polarIndex") === n
                },
                o = i.findComponents({
                    mainType: "angleAxis",
                    filter: r
                })[0],
                l = i.findComponents({
                    mainType: "radiusAxis",
                    filter: r
                })[0];
                if (!o || !l) throw new Error("Axis option not found");
                var h = l.get("type"),
                u = o.get("type"),
                d = [{
                    name: "radius",
                    type: s(h),
                    stackable: a(h)
                },
                {
                    name: "angle",
                    type: s(u),
                    stackable: a(u)
                }],
                f = "category" === u;
                return c(d, t, ["radius", "angle", "value"]),
                {
                    dimensions: d,
                    categoryIndex: f ? 1 : 0,
                    categoryAxisModel: f ? o: "category" === h ? l: null
                }
            },
            geo: function(t, e, i) {
                return {
                    dimensions: c([{
                        name: "lng"
                    },
                    {
                        name: "lat"
                    }], t, ["lng", "lat", "value"])
                }
            }
        };
        t.exports = o
    },
    function(t, e, i) {
        "use strict";
        var n = i(3),
        r = i(1);
        i(52),
        i(95),
        i(2).extendComponentView({
            type: "grid",
            render: function(t, e) {
                this.group.removeAll(),
                t.get("show") && this.group.add(new n.Rect({
                    shape: t.coordinateSystem.getRect(),
                    style: r.defaults({
                        fill: t.get("backgroundColor")
                    },
                    t.getItemStyle()),
                    silent: !0
                }))
            }
        })
    },
    function(t, e, i) {
        function n(t) {
            t = t || {},
            a.call(this, t);
            for (var e in t) t.hasOwnProperty(e) && "style" !== e && (this[e] = t[e]);
            this.style = new o(t.style),
            this._rect = null,
            this.__clipPaths = []
        }
        var r = i(1),
        o = i(142),
        a = i(55),
        s = i(67);
        n.prototype = {
            constructor: n,
            type: "displayable",
            __dirty: !0,
            invisible: !1,
            z: 0,
            z2: 0,
            zlevel: 0,
            draggable: !1,
            dragging: !1,
            silent: !1,
            culling: !1,
            cursor: "pointer",
            rectHover: !1,
            beforeBrush: function(t) {},
            afterBrush: function(t) {},
            brush: function(t) {},
            getBoundingRect: function() {},
            contain: function(t, e) {
                return this.rectContain(t, e)
            },
            traverse: function(t, e) {
                t.call(e, this)
            },
            rectContain: function(t, e) {
                var i = this.transformCoordToLocal(t, e),
                n = this.getBoundingRect();
                return n.contain(i[0], i[1])
            },
            dirty: function() {
                this.__dirty = !0,
                this._rect = null,
                this.__zr && this.__zr.refresh()
            },
            animateStyle: function(t) {
                return this.animate("style", t)
            },
            attrKV: function(t, e) {
                "style" !== t ? a.prototype.attrKV.call(this, t, e) : this.style.set(e)
            },
            setStyle: function(t, e) {
                return this.style.set(t, e),
                this.dirty(!1),
                this
            },
            useStyle: function(t) {
                return this.style = new o(t),
                this.dirty(!1),
                this
            }
        },
        r.inherits(n, a),
        r.mixin(n, s),
        t.exports = n
    },
    function(t, e, i) {
        var n = i(4),
        r = i(9),
        o = i(32),
        a = Math.floor,
        s = Math.ceil,
        l = o.extend({
            type: "interval",
            _interval: 0,
            setExtent: function(t, e) {
                var i = this._extent;
                isNaN(t) || (i[0] = parseFloat(t)),
                isNaN(e) || (i[1] = parseFloat(e))
            },
            unionExtent: function(t) {
                var e = this._extent;
                t[0] < e[0] && (e[0] = t[0]),
                t[1] > e[1] && (e[1] = t[1]),
                l.prototype.setExtent.call(this, e[0], e[1])
            },
            getInterval: function() {
                return this._interval || this.niceTicks(),
                this._interval
            },
            setInterval: function(t) {
                this._interval = t,
                this._niceExtent = this._extent.slice()
            },
            getTicks: function() {
                this._interval || this.niceTicks();
                var t = this._interval,
                e = this._extent,
                i = [],
                r = 1e4;
                if (t) {
                    var o = this._niceExtent;
                    e[0] < o[0] && i.push(e[0]);
                    for (var a = o[0]; a <= o[1];) if (i.push(a), a = n.round(a + t), i.length > r) return [];
                    e[1] > o[1] && i.push(e[1])
                }
                return i
            },
            getTicksLabels: function() {
                for (var t = [], e = this.getTicks(), i = 0; i < e.length; i++) t.push(this.getLabel(e[i]));
                return t
            },
            getLabel: function(t) {
                return r.addCommas(t)
            },
            niceTicks: function(t) {
                t = t || 5;
                var e = this._extent,
                i = e[1] - e[0];
                if (isFinite(i)) {
                    0 > i && (i = -i, e.reverse());
                    var r = n.nice(i / t, !0),
                    o = [n.round(s(e[0] / r) * r), n.round(a(e[1] / r) * r)];
                    this._interval = r,
                    this._niceExtent = o
                }
            },
            niceExtent: function(t, e, i) {
                var r = this._extent;
                if (r[0] === r[1]) if (0 !== r[0]) {
                    var o = r[0] / 2;
                    r[0] -= o,
                    r[1] += o
                } else r[1] = 1;
                var l = r[1] - r[0];
                isFinite(l) || (r[0] = 0, r[1] = 1),
                this.niceTicks(t);
                var h = this._interval;
                e || (r[0] = n.round(a(r[0] / h) * h)),
                i || (r[1] = n.round(s(r[1] / h) * h))
            }
        });
        l.create = function() {
            return new l
        },
        t.exports = l
    },
    function(t, e, i) {
        function n(t) {
            this.group = new o.Group,
            this._symbolCtor = t || a
        }
        function r(t, e, i) {
            var n = t.getItemLayout(e);
            return n && !isNaN(n[0]) && !isNaN(n[1]) && !(i && i(e)) && "none" !== t.getItemVisual(e, "symbol")
        }
        var o = i(3),
        a = i(47),
        s = n.prototype;
        s.updateData = function(t, e) {
            var i = this.group,
            n = t.hostModel,
            a = this._data,
            s = this._symbolCtor;
            t.diff(a).add(function(n) {
                var o = t.getItemLayout(n);
                if (r(t, n, e)) {
                    var a = new s(t, n);
                    a.attr("position", o),
                    t.setItemGraphicEl(n, a),
                    i.add(a)
                }
            }).update(function(l, h) {
                var c = a.getItemGraphicEl(h),
                u = t.getItemLayout(l);
                return r(t, l, e) ? (c ? (c.updateData(t, l), o.updateProps(c, {
                    position: u
                },
                n)) : (c = new s(t, l), c.attr("position", u)), i.add(c), void t.setItemGraphicEl(l, c)) : void i.remove(c)
            }).remove(function(t) {
                var e = a.getItemGraphicEl(t);
                e && e.fadeOut(function() {
                    i.remove(e)
                })
            }).execute(),
            this._data = t
        },
        s.updateLayout = function() {
            var t = this._data;
            t && t.eachItemGraphicEl(function(e, i) {
                e.attr("position", t.getItemLayout(i))
            })
        },
        s.remove = function(t) {
            var e = this.group,
            i = this._data;
            i && (t ? i.eachItemGraphicEl(function(t) {
                t.fadeOut(function() {
                    e.remove(t)
                })
            }) : e.removeAll())
        },
        t.exports = n
    },
    function(t, e, i) {
        function n(t) {
            var e = {};
            return c(["start", "end", "startValue", "endValue"],
            function(i) {
                e[i] = t[i]
            }),
            e
        }
        function r(t, e, i, n) {
            null != i[e] && null == i[t] && (n[t] = null)
        }
        var o = i(1),
        a = i(14),
        s = i(2),
        l = i(7),
        h = i(169),
        c = o.each,
        u = l.eachAxisDim,
        d = s.extendComponentModel({
            type: "dataZoom",
            dependencies: ["xAxis", "yAxis", "zAxis", "radiusAxis", "angleAxis", "series"],
            defaultOption: {
                zlevel: 0,
                z: 4,
                orient: null,
                xAxisIndex: null,
                yAxisIndex: null,
                angleAxisIndex: null,
                radiusAxisIndex: null,
                filterMode: "filter",
                throttle: 100,
                start: 0,
                end: 100,
                startValue: null,
                endValue: null
            },
            init: function(t, e, i) {
                this._dataIntervalByAxis = {},
                this._dataInfo = {},
                this._axisProxies = {},
                this.textStyleModel;
                var r = n(t);
                this.mergeDefaultAndTheme(t, i),
                this.doInit(r)
            },
            mergeOption: function(t) {
                var e = n(t);
                o.merge(this.option, t, !0),
                this.doInit(e)
            },
            doInit: function(t) {
                var e = this.option;
                a.canvasSupported || (e.realtime = !1),
                r("start", "startValue", t, e),
                r("end", "endValue", t, e),
                this.textStyleModel = this.getModel("textStyle"),
                this._resetTarget(),
                this._giveAxisProxies()
            },
            _giveAxisProxies: function() {
                var t = this._axisProxies;
                this.eachTargetAxis(function(e, i, n, r) {
                    var o = this.dependentModels[e.axis][i],
                    a = o.__dzAxisProxy || (o.__dzAxisProxy = new h(e.name, i, this, r));
                    t[e.name + "_" + i] = a
                },
                this)
            },
            _resetTarget: function() {
                var t = this.option,
                e = this._judgeAutoMode();
                u(function(e) {
                    var i = e.axisIndex;
                    t[i] = l.normalizeToArray(t[i])
                },
                this),
                "axisIndex" === e ? this._autoSetAxisIndex() : "orient" === e && this._autoSetOrient()
            },
            _judgeAutoMode: function() {
                var t = this.option,
                e = !1;
                u(function(i) {
                    null != t[i.axisIndex] && (e = !0)
                },
                this);
                var i = t.orient;
                return null == i && e ? "orient": e ? void 0 : (null == i && (t.orient = "horizontal"), "axisIndex")
            },
            _autoSetAxisIndex: function() {
                var t = !0,
                e = this.get("orient", !0),
                i = this.option;
                if (t) {
                    var n = "vertical" === e ? {
                        dim: "y",
                        axisIndex: "yAxisIndex",
                        axis: "yAxis"
                    }: {
                        dim: "x",
                        axisIndex: "xAxisIndex",
                        axis: "xAxis"
                    };
                    this.dependentModels[n.axis].length && (i[n.axisIndex] = [0], t = !1)
                }
                t && u(function(e) {
                    if (t) {
                        var n = [],
                        r = this.dependentModels[e.axis];
                        if (r.length && !n.length) for (var o = 0,
                        a = r.length; a > o; o++)"category" === r[o].get("type") && n.push(o);
                        i[e.axisIndex] = n,
                        n.length && (t = !1)
                    }
                },
                this),
                t && this.ecModel.eachSeries(function(t) {
                    this._isSeriesHasAllAxesTypeOf(t, "value") && u(function(e) {
                        var n = i[e.axisIndex],
                        r = t.get(e.axisIndex);
                        o.indexOf(n, r) < 0 && n.push(r)
                    })
                },
                this)
            },
            _autoSetOrient: function() {
                var t;
                this.eachTargetAxis(function(e) { ! t && (t = e.name)
                },
                this),
                this.option.orient = "y" === t ? "vertical": "horizontal"
            },
            _isSeriesHasAllAxesTypeOf: function(t, e) {
                var i = !0;
                return u(function(n) {
                    var r = t.get(n.axisIndex),
                    o = this.dependentModels[n.axis][r];
                    o && o.get("type") === e || (i = !1)
                },
                this),
                i
            },
            getFirstTargetAxisModel: function() {
                var t;
                return u(function(e) {
                    if (null == t) {
                        var i = this.get(e.axisIndex);
                        i.length && (t = this.dependentModels[e.axis][i[0]])
                    }
                },
                this),
                t
            },
            eachTargetAxis: function(t, e) {
                var i = this.ecModel;
                u(function(n) {
                    c(this.get(n.axisIndex),
                    function(r) {
                        t.call(e, n, r, this, i)
                    },
                    this)
                },
                this)
            },
            getAxisProxy: function(t, e) {
                return this._axisProxies[t + "_" + e]
            },
            setRawRange: function(t) {
                c(["start", "end", "startValue", "endValue"],
                function(e) {
                    this.option[e] = t[e]
                },
                this)
            },
            getPercentRange: function() {
                var t = this.findRepresentativeAxisProxy();
                return t ? t.getDataPercentWindow() : void 0
            },
            getValueRange: function(t, e) {
                if (null != t || null != e) return this.getAxisProxy(t, e).getDataValueWindow();
                var i = this.findRepresentativeAxisProxy();
                return i ? i.getDataValueWindow() : void 0
            },
            findRepresentativeAxisProxy: function() {
                var t = this._axisProxies;
                for (var e in t) if (t.hasOwnProperty(e) && t[e].hostedBy(this)) return t[e];
                for (var e in t) if (t.hasOwnProperty(e) && !t[e].hostedBy(this)) return t[e]
            }
        });
        t.exports = d
    },
    function(t, e, i) {
        var n = i(54);
        t.exports = n.extend({
            type: "dataZoom",
            render: function(t, e, i, n) {
                this.dataZoomModel = t,
                this.ecModel = e,
                this.api = i
            },
            getTargetInfo: function() {
                function t(t, e, i, n) {
                    for (var r, o = 0; o < i.length; o++) if (i[o].model === t) {
                        r = i[o];
                        break
                    }
                    r || i.push(r = {
                        model: t,
                        axisModels: [],
                        coordIndex: n
                    }),
                    r.axisModels.push(e)
                }
                var e = this.dataZoomModel,
                i = this.ecModel,
                n = [],
                r = [],
                o = [];
                return e.eachTargetAxis(function(e, a) {
                    var s = i.getComponent(e.axis, a);
                    if (s) {
                        o.push(s);
                        var l = s.get("gridIndex"),
                        h = s.get("polarIndex");
                        if (null != l) {
                            var c = i.getComponent("grid", l);
                            t(c, s, n, l)
                        } else if (null != h) {
                            var c = i.getComponent("polar", h);
                            t(c, s, r, h)
                        }
                    }
                },
                this),
                {
                    cartesians: n,
                    polars: r,
                    axisModels: o
                }
            }
        })
    },
    function(t, e, i) {
        var n = i(1),
        r = i(20),
        o = r.parseClassType,
        a = 0,
        s = {},
        l = "_";
        s.getUID = function(t) {
            return [t || "", a++, Math.random()].join(l)
        },
        s.enableSubTypeDefaulter = function(t) {
            var e = {};
            return t.registerSubTypeDefaulter = function(t, i) {
                t = o(t),
                e[t.main] = i
            },
            t.determineSubType = function(i, n) {
                var r = n.type;
                if (!r) {
                    var a = o(i).main;
                    t.hasSubTypes(i) && e[a] && (r = e[a](n))
                }
                return r
            },
            t
        },
        s.enableTopologicalTravel = function(t, e) {
            function i(t) {
                var i = {},
                a = [];
                return n.each(t,
                function(s) {
                    var l = r(i, s),
                    h = l.originalDeps = e(s),
                    c = o(h, t);
                    l.entryCount = c.length,
                    0 === l.entryCount && a.push(s),
                    n.each(c,
                    function(t) {
                        n.indexOf(l.predecessor, t) < 0 && l.predecessor.push(t);
                        var e = r(i, t);
                        n.indexOf(e.successor, t) < 0 && e.successor.push(s)
                    })
                }),
                {
                    graph: i,
                    noEntryList: a
                }
            }
            function r(t, e) {
                return t[e] || (t[e] = {
                    predecessor: [],
                    successor: []
                }),
                t[e]
            }
            function o(t, e) {
                var i = [];
                return n.each(t,
                function(t) {
                    n.indexOf(e, t) >= 0 && i.push(t)
                }),
                i
            }
            t.topologicalTravel = function(t, e, r, o) {
                function a(t) {
                    h[t].entryCount--,
                    0 === h[t].entryCount && c.push(t)
                }
                function s(t) {
                    u[t] = !0,
                    a(t)
                }
                if (t.length) {
                    var l = i(e),
                    h = l.graph,
                    c = l.noEntryList,
                    u = {};
                    for (n.each(t,
                    function(t) {
                        u[t] = !0
                    }); c.length;) {
                        var d = c.pop(),
                        f = h[d],
                        p = !!u[d];
                        p && (r.call(o, d, f.originalDeps.slice()), delete u[d]),
                        n.each(f.successor, p ? s: a)
                    }
                    n.each(u,
                    function() {
                        throw new Error("Circle dependency may exists")
                    })
                }
            }
        },
        t.exports = s
    },
    function(t, e, i) {
        function n(t, e) {
            var i = t[1] - t[0],
            n = e,
            r = i / n / 2;
            t[0] += r,
            t[1] -= r
        }
        var r = i(4),
        o = r.linearMap,
        a = i(1),
        s = [0, 1],
        l = function(t, e, i) {
            this.dim = t,
            this.scale = e,
            this._extent = i || [0, 0],
            this.inverse = !1,
            this.onBand = !1
        };
        l.prototype = {
            constructor: l,
            contain: function(t) {
                var e = this._extent,
                i = Math.min(e[0], e[1]),
                n = Math.max(e[0], e[1]);
                return t >= i && n >= t
            },
            containData: function(t) {
                return this.contain(this.dataToCoord(t))
            },
            getExtent: function() {
                var t = this._extent.slice();
                return t
            },
            getPixelPrecision: function(t) {
                return r.getPixelPrecision(t || this.scale.getExtent(), this._extent)
            },
            setExtent: function(t, e) {
                var i = this._extent;
                i[0] = t,
                i[1] = e
            },
            dataToCoord: function(t, e) {
                var i = this._extent,
                r = this.scale;
                return t = r.normalize(t),
                this.onBand && "ordinal" === r.type && (i = i.slice(), n(i, r.count())),
                o(t, s, i, e)
            },
            coordToData: function(t, e) {
                var i = this._extent,
                r = this.scale;
                this.onBand && "ordinal" === r.type && (i = i.slice(), n(i, r.count()));
                var a = o(t, i, s, e);
                return this.scale.scale(a)
            },
            getTicksCoords: function() {
                if (this.onBand) {
                    for (var t = this.getBands(), e = [], i = 0; i < t.length; i++) e.push(t[i][0]);
                    return t[i - 1] && e.push(t[i - 1][1]),
                    e
                }
                return a.map(this.scale.getTicks(), this.dataToCoord, this)
            },
            getLabelsCoords: function() {
                if (this.onBand) {
                    for (var t, e = this.getBands(), i = [], n = 0; n < e.length; n++) t = e[n],
                    i.push((t[0] + t[1]) / 2);
                    return i
                }
                return a.map(this.scale.getTicks(), this.dataToCoord, this)
            },
            getBands: function() {
                for (var t = this.getExtent(), e = [], i = this.scale.count(), n = t[0], r = t[1], o = r - n, a = 0; i > a; a++) e.push([o * a / i + n, o * (a + 1) / i + n]);
                return e
            },
            getBandWidth: function() {
                var t = this._extent,
                e = this.scale.getExtent(),
                i = e[1] - e[0] + (this.onBand ? 1 : 0);
                0 === i && (i = 1);
                var n = Math.abs(t[1] - t[0]);
                return Math.abs(n) / i
            }
        },
        t.exports = l
    },
    function(t, e) {
        t.exports = function(t, e, i, n, r) {
            n.eachRawSeriesByType(t,
            function(t) {
                var r = t.getData(),
                o = t.get("symbol") || e,
                a = t.get("symbolSize");
                r.setVisual({
                    legendSymbol: i || o,
                    symbol: o,
                    symbolSize: a
                }),
                n.isSeriesFiltered(t) || ("function" == typeof a && r.each(function(e) {
                    var i = t.getRawValue(e),
                    n = t.getDataParams(e);
                    r.setItemVisual(e, "symbolSize", a(i, n))
                }), r.each(function(t) {
                    var e = r.getItemModel(t),
                    i = e.get("symbol", !0),
                    n = e.get("symbolSize", !0);
                    null != i && r.setItemVisual(t, "symbol", i),
                    null != n && r.setItemVisual(t, "symbolSize", n)
                }))
            })
        }
    },
    function(t, e, i) {
        var n = i(33);
        t.exports = function() {
            if (0 !== n.debugMode) if (1 == n.debugMode) for (var t in arguments) throw new Error(arguments[t]);
            else if (n.debugMode > 1) for (var t in arguments) console.log(arguments[t])
        }
    },
    function(t, e, i) {
        function n(t) {
            r.call(this, t)
        }
        var r = i(37),
        o = i(8),
        a = i(1),
        s = i(60),
        l = i(139),
        h = new l(50);
        n.prototype = {
            constructor: n,
            type: "image",
            brush: function(t) {
                var e, i = this.style,
                n = i.image;
                if (e = "string" == typeof n ? this._image: n, !e && n) {
                    var r = h.get(n);
                    if (!r) return e = new Image,
                    e.onload = function() {
                        e.onload = null;
                        for (var t = 0; t < r.pending.length; t++) r.pending[t].dirty()
                    },
                    r = {
                        image: e,
                        pending: [this]
                    },
                    e.src = n,
                    h.put(n, r),
                    void(this._image = e);
                    if (e = r.image, this._image = e, !e.width || !e.height) return void r.pending.push(this)
                }
                if (e) {
                    var o = i.width || e.width,
                    a = i.height || e.height,
                    l = i.x || 0,
                    c = i.y || 0;
                    if (!e.width || !e.height) return;
                    if (t.save(), i.bind(t), this.setTransform(t), i.r && (t.beginPath(), s.buildPath(t, i), t.clip()), i.sWidth && i.sHeight) {
                        var u = i.sx || 0,
                        d = i.sy || 0;
                        t.drawImage(e, u, d, i.sWidth, i.sHeight, l, c, o, a)
                    } else if (i.sx && i.sy) {
                        var u = i.sx,
                        d = i.sy,
                        f = o - u,
                        p = a - d;
                        t.drawImage(e, u, d, f, p, l, c, o, a)
                    } else t.drawImage(e, l, c, o, a);
                    null == i.width && (i.width = o),
                    null == i.height && (i.height = a),
                    null != i.text && this.drawRectText(t, this.getBoundingRect()),
                    t.restore()
                }
            },
            getBoundingRect: function() {
                var t = this.style;
                return this._rect || (this._rect = new o(t.x || 0, t.y || 0, t.width || 0, t.height || 0)),
                this._rect
            }
        },
        a.inherits(n, r),
        t.exports = n
    },
    function(t, e, i) {
        function n(t) {
            return a.isArray(t) || (t = [ + t, +t]),
            t
        }
        function r(t, e) {
            l.Group.call(this),
            this.updateData(t, e)
        }
        function o(t, e) {
            this.parent.drift(t, e)
        }
        var a = i(1),
        s = i(25),
        l = i(3),
        h = i(4),
        c = r.prototype;
        c._createSymbol = function(t, e, i) {
            this.removeAll();
            var r = e.hostModel,
            a = e.getItemVisual(i, "color"),
            h = s.createSymbol(t, -.5, -.5, 1, 1, a);
            h.attr({
                z2: 100,
                culling: !0,
                scale: [0, 0]
            }),
            h.drift = o;
            var c = n(e.getItemVisual(i, "symbolSize"));
            l.initProps(h, {
                scale: c
            },
            r, i),
            this._symbolType = t,
            this.add(h)
        },
        c.stopSymbolAnimation = function(t) {
            this.childAt(0).stopAnimation(t)
        },
        c.getScale = function() {
            return this.childAt(0).scale
        },
        c.highlight = function() {
            this.childAt(0).trigger("emphasis")
        },
        c.downplay = function() {
            this.childAt(0).trigger("normal")
        },
        c.setZ = function(t, e) {
            var i = this.childAt(0);
            i.zlevel = t,
            i.z = e
        },
        c.setDraggable = function(t) {
            var e = this.childAt(0);
            e.draggable = t,
            e.cursor = t ? "move": "pointer"
        },
        c.updateData = function(t, e) {
            var i = t.getItemVisual(e, "symbol") || "circle",
            r = t.hostModel,
            o = n(t.getItemVisual(e, "symbolSize"));
            if (i !== this._symbolType) this._createSymbol(i, t, e);
            else {
                var a = this.childAt(0);
                l.updateProps(a, {
                    scale: o
                },
                r, e)
            }
            this._updateCommon(t, e, o),
            this._seriesModel = r
        };
        var u = ["itemStyle", "normal"],
        d = ["itemStyle", "emphasis"],
        f = ["label", "normal"],
        p = ["label", "emphasis"];
        c._updateCommon = function(t, e, i) {
            var r = this.childAt(0),
            o = t.hostModel,
            s = t.getItemModel(e),
            c = s.getModel(u),
            g = t.getItemVisual(e, "color");
            "image" !== r.type && r.useStyle({
                strokeNoScale: !0
            });
            var m = r.style,
            v = s.getModel(d).getItemStyle();
            r.rotation = (s.getShallow("symbolRotate") || 0) * Math.PI / 180 || 0;
            var y = s.getShallow("symbolOffset");
            if (y) {
                var x = r.position;
                x[0] = h.parsePercent(y[0], i[0]),
                x[1] = h.parsePercent(y[1], i[1])
            }
            r.setColor(g),
            a.extend(m, c.getItemStyle(["color"]));
            var _ = t.getItemVisual(e, "opacity");
            null != _ && (m.opacity = _);
            for (var b, w, M = s.getModel(f), S = s.getModel(p), A = t.dimensions.slice(); A.length && (b = A.pop(), w = t.getDimensionInfo(b).type, "ordinal" === w || "time" === w););
            null != b && M.get("show") ? (l.setText(m, M, g), m.text = a.retrieve(o.getFormattedLabel(e, "normal"), t.get(b, e))) : m.text = "",
            null != b && S.getShallow("show") ? (l.setText(v, S, g), v.text = a.retrieve(o.getFormattedLabel(e, "emphasis"), t.get(b, e))) : v.text = "";
            var T = n(t.getItemVisual(e, "symbolSize"));
            if (r.off("mouseover").off("mouseout").off("emphasis").off("normal"), l.setHoverStyle(r, v), s.getShallow("hoverAnimation")) {
                var C = function() {
                    var t = T[1] / T[0];
                    this.animateTo({
                        scale: [Math.max(1.1 * T[0], T[0] + 3), Math.max(1.1 * T[1], T[1] + 3 * t)]
                    },
                    400, "elasticOut")
                },
                I = function() {
                    this.animateTo({
                        scale: T
                    },
                    400, "elasticOut")
                };
                r.on("mouseover", C).on("mouseout", I).on("emphasis", C).on("normal", I)
            }
        },
        c.fadeOut = function(t) {
            var e = this.childAt(0);
            e.off("mouseover").off("mouseout").off("emphasis").off("normal"),
            e.style.text = "",
            l.updateProps(e, {
                scale: [0, 0]
            },
            this._seriesModel, this.dataIndex, t)
        },
        a.inherits(r, l.Group),
        t.exports = r
    },
    function(t, e) {
        "use strict";
        function i(t) {
            return t
        }
        function n(t, e, n, r) {
            this._old = t,
            this._new = e,
            this._oldKeyGetter = n || i,
            this._newKeyGetter = r || i
        }
        function r(t, e, i) {
            for (var n = 0; n < t.length; n++) {
                var r = i(t[n]),
                o = e[r];
                null == o ? e[r] = n: (o.length || (e[r] = o = [o]), o.push(n))
            }
        }
        n.prototype = {
            constructor: n,
            add: function(t) {
                return this._add = t,
                this
            },
            update: function(t) {
                return this._update = t,
                this
            },
            remove: function(t) {
                return this._remove = t,
                this
            },
            execute: function() {
                var t, e = this._old,
                i = this._new,
                n = this._oldKeyGetter,
                o = this._newKeyGetter,
                a = {},
                s = {};
                for (r(e, a, n), r(i, s, o), t = 0; t < e.length; t++) {
                    var l = n(e[t]),
                    h = s[l];
                    if (null != h) {
                        var c = h.length;
                        c ? (1 === c && (s[l] = null), h = h.unshift()) : s[l] = null,
                        this._update && this._update(h, t)
                    } else this._remove && this._remove(t)
                }
                for (var l in s) if (s.hasOwnProperty(l)) {
                    var h = s[l];
                    if (null == h) continue;
                    if (h.length) for (var t = 0,
                    c = h.length; c > t; t++) this._add && this._add(h[t]);
                    else this._add && this._add(h)
                }
            }
        },
        t.exports = n
    },
    function(t, e, i) {
        function n(t) {
            var e = {
                componentType: t.mainType
            };
            return e[t.mainType + "Index"] = t.componentIndex,
            e
        }
        function r(t, e, i) {
            var n, r, o = c(e - t.rotation);
            return u(o) ? (r = i > 0 ? "top": "bottom", n = "center") : u(o - d) ? (r = i > 0 ? "bottom": "top", n = "center") : (r = "middle", n = o > 0 && d > o ? i > 0 ? "right": "left": i > 0 ? "left": "right"),
            {
                rotation: o,
                textAlign: n,
                verticalAlign: r
            }
        }
        function o(t, e, i) {
            var n, r, o = c( - t.rotation),
            a = i[0] > i[1],
            s = "start" === e && !a || "start" !== e && a;
            return u(o - d / 2) ? (r = s ? "bottom": "top", n = "center") : u(o - 1.5 * d) ? (r = s ? "top": "bottom", n = "center") : (r = "middle", n = 1.5 * d > o && o > d / 2 ? s ? "left": "right": s ? "right": "left"),
            {
                rotation: o,
                textAlign: n,
                verticalAlign: r
            }
        }
        var a = i(1),
        s = i(3),
        l = i(12),
        h = i(4),
        c = h.remRadian,
        u = h.isRadianAroundZero,
        d = Math.PI,
        f = function(t, e) {
            this.opt = e,
            this.axisModel = t,
            a.defaults(e, {
                labelOffset: 0,
                nameDirection: 1,
                tickDirection: 1,
                labelDirection: 1,
                silent: !0
            }),
            this.group = new s.Group({
                position: e.position.slice(),
                rotation: e.rotation
            })
        };
        f.prototype = {
            constructor: f,
            hasBuilder: function(t) {
                return !! p[t]
            },
            add: function(t) {
                p[t].call(this)
            },
            getGroup: function() {
                return this.group
            }
        };
        var p = {
            axisLine: function() {
                var t = this.opt,
                e = this.axisModel;
                if (e.get("axisLine.show")) {
                    var i = this.axisModel.axis.getExtent();
                    this.group.add(new s.Line({
                        shape: {
                            x1: i[0],
                            y1: 0,
                            x2: i[1],
                            y2: 0
                        },
                        style: a.extend({
                            lineCap: "round"
                        },
                        e.getModel("axisLine.lineStyle").getLineStyle()),
                        strokeContainThreshold: t.strokeContainThreshold,
                        silent: !!t.axisLineSilent,
                        z2: 1
                    }))
                }
            },
            axisTick: function() {
                var t = this.axisModel;
                if (t.get("axisTick.show")) {
                    for (var e = t.axis,
                    i = t.getModel("axisTick"), n = this.opt, r = i.getModel("lineStyle"), o = i.get("length"), a = m(i, n.labelInterval), l = e.getTicksCoords(), h = [], c = 0; c < l.length; c++) if (!g(e, c, a)) {
                        var u = l[c];
                        h.push(new s.Line(s.subPixelOptimizeLine({
                            shape: {
                                x1: u,
                                y1: 0,
                                x2: u,
                                y2: n.tickDirection * o
                            },
                            style: {
                                lineWidth: r.get("width")
                            },
                            silent: !0
                        })))
                    }
                    this.group.add(s.mergePath(h, {
                        style: r.getLineStyle(),
                        z2: 2,
                        silent: !0
                    }))
                }
            },
            axisLabel: function() {
                function t(t, e) {
                    var i = t && t.getBoundingRect().clone(),
                    n = e && e.getBoundingRect().clone();
                    return i && n ? (i.applyTransform(t.getLocalTransform()), n.applyTransform(e.getLocalTransform()), i.intersect(n)) : void 0
                }
                var e = this.axisModel;
                if (e.get("axisLabel.show")) {
                    var i = this.opt,
                    o = e.axis,
                    a = e.getModel("axisLabel"),
                    h = a.getModel("textStyle"),
                    c = a.get("margin"),
                    u = o.scale.getTicks(),
                    f = e.getFormattedLabels(),
                    p = i.labelRotation;
                    null == p && (p = a.get("rotate") || 0),
                    p = p * d / 180;
                    for (var m = r(i, p, i.labelDirection), v = e.get("data"), y = [], x = e.get("silent"), _ = 0; _ < u.length; _++) if (!g(o, _, i.labelInterval)) {
                        var b = h;
                        v && v[_] && v[_].textStyle && (b = new l(v[_].textStyle, h, e.ecModel));
                        var w = b.getTextColor(),
                        M = o.dataToCoord(u[_]),
                        S = [M, i.labelOffset + i.labelDirection * c],
                        A = o.scale.getLabel(u[_]),
                        T = new s.Text({
                            style: {
                                text: f[_],
                                textAlign: b.get("align", !0) || m.textAlign,
                                textVerticalAlign: b.get("baseline", !0) || m.verticalAlign,
                                textFont: b.getFont(),
                                fill: "function" == typeof w ? w(A) : w
                            },
                            position: S,
                            rotation: m.rotation,
                            silent: x,
                            z2: 10
                        });
                        T.eventData = n(e),
                        T.eventData.targetType = "axisLabel",
                        T.eventData.value = A,
                        y.push(T),
                        this.group.add(T)
                    }
                    if ("category" !== o.type) {
                        if (e.getMin ? e.getMin() : e.get("min")) {
                            var C = y[0],
                            I = y[1];
                            t(C, I) && (C.ignore = !0)
                        }
                        if (e.getMax ? e.getMax() : e.get("max")) {
                            var k = y[y.length - 1],
                            L = y[y.length - 2];
                            t(L, k) && (k.ignore = !0)
                        }
                    }
                }
            },
            axisName: function() {
                var t = this.opt,
                e = this.axisModel,
                i = this.opt.axisName;
                if (null == i && (i = e.get("name")), i) {
                    var a, l = e.get("nameLocation"),
                    h = t.nameDirection,
                    c = e.getModel("nameTextStyle"),
                    u = e.get("nameGap") || 0,
                    d = this.axisModel.axis.getExtent(),
                    f = d[0] > d[1] ? -1 : 1,
                    p = ["start" === l ? d[0] - f * u: "end" === l ? d[1] + f * u: (d[0] + d[1]) / 2, "middle" === l ? t.labelOffset + h * u: 0];
                    a = "middle" === l ? r(t, t.rotation, h) : o(t, l, d);
                    var g = new s.Text({
                        style: {
                            text: i,
                            textFont: c.getFont(),
                            fill: c.getTextColor() || e.get("axisLine.lineStyle.color"),
                            textAlign: a.textAlign,
                            textVerticalAlign: a.verticalAlign
                        },
                        position: p,
                        rotation: a.rotation,
                        silent: e.get("silent"),
                        z2: 1
                    });
                    g.eventData = n(e),
                    g.eventData.targetType = "axisName",
                    g.eventData.name = i,
                    this.group.add(g)
                }
            }
        },
        g = f.ifIgnoreOnTick = function(t, e, i) {
            var n, r = t.scale;
            return "ordinal" === r.type && ("function" == typeof i ? (n = r.getTicks()[e], !i(n, r.getLabel(n))) : e % (i + 1))
        },
        m = f.getInterval = function(t, e) {
            var i = t.get("interval");
            return null != i && "auto" != i || (i = e),
            i
        };
        t.exports = f
    },
    function(t, e, i) {
        function n(t) {
            return a.isObject(t) && null != t.value ? t.value: t
        }
        function r() {
            return "category" === this.get("type") && a.map(this.get("data"), n)
        }
        function o() {
            return s.getFormattedLabels(this.axis, this.get("axisLabel.formatter"))
        }
        var a = i(1),
        s = i(24);
        t.exports = {
            getFormattedLabels: o,
            getCategories: r
        }
    },
    function(t, e, i) {
        "use strict";
        function n(t, e) {
            return e.type || (e.data ? "category": "value")
        }
        var r = i(10),
        o = i(1),
        a = i(62),
        s = r.extend({
            type: "cartesian2dAxis",
            axis: null,
            init: function() {
                s.superApply(this, "init", arguments),
                this._resetRange()
            },
            mergeOption: function() {
                s.superApply(this, "mergeOption", arguments),
                this._resetRange()
            },
            restoreData: function() {
                s.superApply(this, "restoreData", arguments),
                this._resetRange()
            },
            setRange: function(t, e) {
                this.option.rangeStart = t,
                this.option.rangeEnd = e
            },
            getMin: function() {
                var t = this.option;
                return null != t.rangeStart ? t.rangeStart: t.min
            },
            getMax: function() {
                var t = this.option;
                return null != t.rangeEnd ? t.rangeEnd: t.max
            },
            getNeedCrossZero: function() {
                var t = this.option;
                return null != t.rangeStart || null != t.rangeEnd ? !1 : !t.scale
            },
            _resetRange: function() {
                this.option.rangeStart = this.option.rangeEnd = null
            }
        });
        o.merge(s.prototype, i(50));
        var l = {
            gridIndex: 0
        };
        a("x", s, n, l),
        a("y", s, n, l),
        t.exports = s
    },
    function(t, e, i) {
        function n(t, e, i) {
            return i.getComponent("grid", t.get("gridIndex")) === e
        }
        function r(t) {
            var e, i = t.model,
            n = i.getFormattedLabels(),
            r = 1,
            o = n.length;
            o > 40 && (r = Math.ceil(o / 40));
            for (var a = 0; o > a; a += r) if (!t.isLabelIgnored(a)) {
                var s = i.getTextRect(n[a]);
                e ? e.union(s) : e = s
            }
            return e
        }
        function o(t, e, i) {
            this._coordsMap = {},
            this._coordsList = [],
            this._axesMap = {},
            this._axesList = [],
            this._initCartesian(t, e, i),
            this._model = t
        }
        function a(t, e) {
            var i = t.getExtent(),
            n = i[0] + i[1];
            t.toGlobalCoord = "x" === t.dim ?
            function(t) {
                return t + e
            }: function(t) {
                return n - t + e
            },
            t.toLocalCoord = "x" === t.dim ?
            function(t) {
                return t - e
            }: function(t) {
                return n - t + e
            }
        }
        var s = i(11),
        l = i(24),
        h = i(1),
        c = i(106),
        u = i(104),
        d = h.each,
        f = l.ifAxisCrossZero,
        p = l.niceScaleExtent;
        i(107);
        var g = o.prototype;
        g.type = "grid",
        g.getRect = function() {
            return this._rect
        },
        g.update = function(t, e) {
            function i(t) {
                var e = n[t];
                for (var i in e) {
                    var r = e[i];
                    if (r && ("category" === r.type || !f(r))) return ! 0
                }
                return ! 1
            }
            var n = this._axesMap;
            this._updateScale(t, this._model),
            d(n.x,
            function(t) {
                p(t, t.model)
            }),
            d(n.y,
            function(t) {
                p(t, t.model)
            }),
            d(n.x,
            function(t) {
                i("y") && (t.onZero = !1)
            }),
            d(n.y,
            function(t) {
                i("x") && (t.onZero = !1)
            }),
            this.resize(this._model, e)
        },
        g.resize = function(t, e) {
            function i() {
                d(o,
                function(t) {
                    var e = t.isHorizontal(),
                    i = e ? [0, n.width] : [0, n.height],
                    r = t.inverse ? 1 : 0;
                    t.setExtent(i[r], i[1 - r]),
                    a(t, e ? n.x: n.y)
                })
            }
            var n = s.getLayoutRect(t.getBoxLayoutParams(), {
                width: e.getWidth(),
                height: e.getHeight()
            });
            this._rect = n;
            var o = this._axesList;
            i(),
            t.get("containLabel") && (d(o,
            function(t) {
                if (!t.model.get("axisLabel.inside")) {
                    var e = r(t);
                    if (e) {
                        var i = t.isHorizontal() ? "height": "width",
                        o = t.model.get("axisLabel.margin");
                        n[i] -= e[i] + o,
                        "top" === t.position ? n.y += e.height + o: "left" === t.position && (n.x += e.width + o)
                    }
                }
            }), i())
        },
        g.getAxis = function(t, e) {
            var i = this._axesMap[t];
            if (null != i) {
                if (null == e) for (var n in i) return i[n];
                return i[e]
            }
        },
        g.getCartesian = function(t, e) {
            var i = "x" + t + "y" + e;
            return this._coordsMap[i]
        },
        g._initCartesian = function(t, e, i) {
            function r(i) {
                return function(r, h) {
                    if (n(r, t, e)) {
                        var c = r.get("position");
                        "x" === i ? ("top" !== c && "bottom" !== c && (c = "bottom"), o[c] && (c = "top" === c ? "bottom": "top")) : ("left" !== c && "right" !== c && (c = "left"), o[c] && (c = "left" === c ? "right": "left")),
                        o[c] = !0;
                        var d = new u(i, l.createScaleByModel(r), [0, 0], r.get("type"), c),
                        f = "category" === d.type;
                        d.onBand = f && r.get("boundaryGap"),
                        d.inverse = r.get("inverse"),
                        d.onZero = r.get("axisLine.onZero"),
                        r.axis = d,
                        d.model = r,
                        d.index = h,
                        this._axesList.push(d),
                        a[i][h] = d,
                        s[i]++
                    }
                }
            }
            var o = {
                left: !1,
                right: !1,
                top: !1,
                bottom: !1
            },
            a = {
                x: {},
                y: {}
            },
            s = {
                x: 0,
                y: 0
            };
            return e.eachComponent("xAxis", r("x"), this),
            e.eachComponent("yAxis", r("y"), this),
            s.x && s.y ? (this._axesMap = a, void d(a.x,
            function(t, e) {
                d(a.y,
                function(i, n) {
                    var r = "x" + e + "y" + n,
                    o = new c(r);
                    o.grid = this,
                    this._coordsMap[r] = o,
                    this._coordsList.push(o),
                    o.addAxis(t),
                    o.addAxis(i)
                },
                this)
            },
            this)) : (this._axesMap = {},
            void(this._axesList = []))
        },
        g._updateScale = function(t, e) {
            function i(t, e, i) {
                d(i.coordDimToDataDim(e.dim),
                function(i) {
                    e.scale.unionExtent(t.getDataExtent(i, "ordinal" !== e.scale.type))
                })
            }
            h.each(this._axesList,
            function(t) {
                t.scale.setExtent(1 / 0, -(1 / 0))
            }),
            t.eachSeries(function(r) {
                if ("cartesian2d" === r.get("coordinateSystem")) {
                    var o = r.get("xAxisIndex"),
                    a = r.get("yAxisIndex"),
                    s = t.getComponent("xAxis", o),
                    l = t.getComponent("yAxis", a);
                    if (!n(s, e, t) || !n(l, e, t)) return;
                    var h = this.getCartesian(o, a),
                    c = r.getData(),
                    u = h.getAxis("x"),
                    d = h.getAxis("y");
                    "list" === c.type && (i(c, u, r), i(c, d, r))
                }
            },
            this)
        },
        o.create = function(t, e) {
            var i = [];
            return t.eachComponent("grid",
            function(n, r) {
                var a = new o(n, t, e);
                a.name = "grid_" + r,
                a.resize(n, e),
                n.coordinateSystem = a,
                i.push(a)
            }),
            t.eachSeries(function(e) {
                if ("cartesian2d" === e.get("coordinateSystem")) {
                    var n = e.get("xAxisIndex"),
                    r = t.getComponent("xAxis", n),
                    o = i[r.get("gridIndex")];
                    e.coordinateSystem = o.getCartesian(n, e.get("yAxisIndex"))
                }
            }),
            i
        },
        o.dimensions = c.prototype.dimensions,
        i(23).register("cartesian2d", o),
        t.exports = o
    },
    function(t, e) {
        t.exports = function(t, e, i) {
            e.eachSeriesByType(t,
            function(t) {
                var e = t.getData(),
                i = t.coordinateSystem;
                if (i) {
                    var n = i.dimensions;
                    e.each(n,
                    function(t, n, r) {
                        var o;
                        o = isNaN(t) || isNaN(n) ? [NaN, NaN] : i.dataToPoint([t, n]),
                        e.setItemLayout(r, o)
                    },
                    !0)
                }
            })
        }
    },
    function(t, e, i) {
        var n = i(27),
        r = i(42),
        o = i(20),
        a = function() {
            this.group = new n,
            this.uid = r.getUID("viewComponent")
        };
        a.prototype = {
            constructor: a,
            init: function(t, e) {},
            render: function(t, e, i, n) {},
            dispose: function() {}
        };
        var s = a.prototype;
        s.updateView = s.updateLayout = s.updateVisual = function(t, e, i, n) {},
        o.enableClassExtend(a),
        o.enableClassManagement(a, {
            registerWhenExtend: !0
        }),
        t.exports = a
    },
    function(t, e, i) {
        "use strict";
        var n = i(58),
        r = i(21),
        o = i(77),
        a = i(154),
        s = i(1),
        l = function(t) {
            o.call(this, t),
            r.call(this, t),
            a.call(this, t),
            this.id = t.id || n()
        };
        l.prototype = {
            type: "element",
            name: "",
            __zr: null,
            ignore: !1,
            clipPath: null,
            drift: function(t, e) {
                switch (this.draggable) {
                case "horizontal":
                    e = 0;
                    break;
                case "vertical":
                    t = 0
                }
                var i = this.transform;
                i || (i = this.transform = [1, 0, 0, 1, 0, 0]),
                i[4] += t,
                i[5] += e,
                this.decomposeTransform(),
                this.dirty()
            },
            beforeUpdate: function() {},
            afterUpdate: function() {},
            update: function() {
                this.updateTransform()
            },
            traverse: function(t, e) {},
            attrKV: function(t, e) {
                if ("position" === t || "scale" === t || "origin" === t) {
                    if (e) {
                        var i = this[t];
                        i || (i = this[t] = []),
                        i[0] = e[0],
                        i[1] = e[1]
                    }
                } else this[t] = e
            },
            hide: function() {
                this.ignore = !0,
                this.__zr && this.__zr.refresh()
            },
            show: function() {
                this.ignore = !1,
                this.__zr && this.__zr.refresh()
            },
            attr: function(t, e) {
                if ("string" == typeof t) this.attrKV(t, e);
                else if (s.isObject(t)) for (var i in t) t.hasOwnProperty(i) && this.attrKV(i, t[i]);
                return this.dirty(),
                this
            },
            setClipPath: function(t) {
                var e = this.__zr;
                e && t.addSelfToZr(e),
                this.clipPath && this.clipPath !== t && this.removeClipPath(),
                this.clipPath = t,
                t.__zr = e,
                t.__clipTarget = this,
                this.dirty()
            },
            removeClipPath: function() {
                var t = this.clipPath;
                t && (t.__zr && t.removeSelfFromZr(t.__zr), t.__zr = null, t.__clipTarget = null, this.clipPath = null, this.dirty())
            },
            addSelfToZr: function(t) {
                this.__zr = t;
                var e = this.animators;
                if (e) for (var i = 0; i < e.length; i++) t.animation.addAnimator(e[i]);
                this.clipPath && this.clipPath.addSelfToZr(t)
            },
            removeSelfFromZr: function(t) {
                this.__zr = null;
                var e = this.animators;
                if (e) for (var i = 0; i < e.length; i++) t.animation.removeAnimator(e[i]);
                this.clipPath && this.clipPath.removeSelfFromZr(t)
            }
        },
        s.mixin(l, a),
        s.mixin(l, o),
        s.mixin(l, r),
        t.exports = l
    },
    function(t, e, i) {
        function n(t, e) {
            return t[e]
        }
        function r(t, e, i) {
            t[e] = i
        }
        function o(t, e, i) {
            return (e - t) * i + t
        }
        function a(t, e, i) {
            return i > .5 ? e: t
        }
        function s(t, e, i, n, r) {
            var a = t.length;
            if (1 == r) for (var s = 0; a > s; s++) n[s] = o(t[s], e[s], i);
            else for (var l = t[0].length, s = 0; a > s; s++) for (var h = 0; l > h; h++) n[s][h] = o(t[s][h], e[s][h], i)
        }
        function l(t, e, i) {
            var n = t.length,
            r = e.length;
            if (n !== r) {
                var o = n > r;
                if (o) t.length = r;
                else for (var a = n; r > a; a++) t.push(1 === i ? e[a] : x.call(e[a]))
            }
            for (var s = t[0] && t[0].length, a = 0; a < t.length; a++) if (1 === i) isNaN(t[a]) && (t[a] = e[a]);
            else for (var l = 0; s > l; l++) isNaN(t[a][l]) && (t[a][l] = e[a][l])
        }
        function h(t, e, i) {
            if (t === e) return ! 0;
            var n = t.length;
            if (n !== e.length) return ! 1;
            if (1 === i) {
                for (var r = 0; n > r; r++) if (t[r] !== e[r]) return ! 1
            } else for (var o = t[0].length, r = 0; n > r; r++) for (var a = 0; o > a; a++) if (t[r][a] !== e[r][a]) return ! 1;
            return ! 0
        }
        function c(t, e, i, n, r, o, a, s, l) {
            var h = t.length;
            if (1 == l) for (var c = 0; h > c; c++) s[c] = u(t[c], e[c], i[c], n[c], r, o, a);
            else for (var d = t[0].length, c = 0; h > c; c++) for (var f = 0; d > f; f++) s[c][f] = u(t[c][f], e[c][f], i[c][f], n[c][f], r, o, a)
        }
        function u(t, e, i, n, r, o, a) {
            var s = .5 * (i - t),
            l = .5 * (n - e);
            return (2 * (e - i) + s + l) * a + ( - 3 * (e - i) - 2 * s - l) * o + s * r + e
        }
        function d(t) {
            if (y(t)) {
                var e = t.length;
                if (y(t[0])) {
                    for (var i = [], n = 0; e > n; n++) i.push(x.call(t[n]));
                    return i
                }
                return x.call(t)
            }
            return t
        }
        function f(t) {
            return t[0] = Math.floor(t[0]),
            t[1] = Math.floor(t[1]),
            t[2] = Math.floor(t[2]),
            "rgba(" + t.join(",") + ")"
        }
        function p(t, e, i, n, r) {
            var d = t._getter,
            p = t._setter,
            v = "spline" === e,
            x = n.length;
            if (x) {
                var _, b = n[0].value,
                w = y(b),
                M = !1,
                S = !1,
                A = w && y(b[0]) ? 2 : 1;
                n.sort(function(t, e) {
                    return t.time - e.time
                }),
                _ = n[x - 1].time;
                for (var T = [], C = [], I = n[0].value, k = !0, L = 0; x > L; L++) {
                    T.push(n[L].time / _);
                    var D = n[L].value;
                    if (w && h(D, I, A) || !w && D === I || (k = !1), I = D, "string" == typeof D) {
                        var P = m.parse(D);
                        P ? (D = P, M = !0) : S = !0
                    }
                    C.push(D)
                }
                if (!k) {
                    for (var O = C[x - 1], L = 0; x - 1 > L; L++) w ? l(C[L], O, A) : !isNaN(C[L]) || isNaN(O) || S || M || (C[L] = O);
                    w && l(d(t._target, r), O, A);
                    var z, E, R, B, N, V, F = 0,
                    G = 0;
                    if (M) var H = [0, 0, 0, 0];
                    var Z = function(t, e) {
                        var i;
                        if (G > e) {
                            for (z = Math.min(F + 1, x - 1), i = z; i >= 0 && !(T[i] <= e); i--);
                            i = Math.min(i, x - 2)
                        } else {
                            for (i = F; x > i && !(T[i] > e); i++);
                            i = Math.min(i - 1, x - 2)
                        }
                        F = i,
                        G = e;
                        var n = T[i + 1] - T[i];
                        if (0 !== n) if (E = (e - T[i]) / n, v) if (B = C[i], R = C[0 === i ? i: i - 1], N = C[i > x - 2 ? x - 1 : i + 1], V = C[i > x - 3 ? x - 1 : i + 2], w) c(R, B, N, V, E, E * E, E * E * E, d(t, r), A);
                        else {
                            var l;
                            if (M) l = c(R, B, N, V, E, E * E, E * E * E, H, 1),
                            l = f(H);
                            else {
                                if (S) return a(B, N, E);
                                l = u(R, B, N, V, E, E * E, E * E * E)
                            }
                            p(t, r, l)
                        } else if (w) s(C[i], C[i + 1], E, d(t, r), A);
                        else {
                            var l;
                            if (M) s(C[i], C[i + 1], E, H, 1),
                            l = f(H);
                            else {
                                if (S) return a(C[i], C[i + 1], E);
                                l = o(C[i], C[i + 1], E)
                            }
                            p(t, r, l)
                        }
                    },
                    W = new g({
                        target: t._target,
                        life: _,
                        loop: t._loop,
                        delay: t._delay,
                        onframe: Z,
                        ondestroy: i
                    });
                    return e && "spline" !== e && (W.easing = e),
                    W
                }
            }
        }
        var g = i(131),
        m = i(22),
        v = i(1),
        y = v.isArrayLike,
        x = Array.prototype.slice,
        _ = function(t, e, i, o) {
            this._tracks = {},
            this._target = t,
            this._loop = e || !1,
            this._getter = i || n,
            this._setter = o || r,
            this._clipCount = 0,
            this._delay = 0,
            this._doneList = [],
            this._onframeList = [],
            this._clipList = []
        };
        _.prototype = {
            when: function(t, e) {
                var i = this._tracks;
                for (var n in e) {
                    if (!i[n]) {
                        i[n] = [];
                        var r = this._getter(this._target, n);
                        if (null == r) continue;
                        0 !== t && i[n].push({
                            time: 0,
                            value: d(r)
                        })
                    }
                    i[n].push({
                        time: t,
                        value: e[n]
                    })
                }
                return this
            },
            during: function(t) {
                return this._onframeList.push(t),
                this
            },
            _doneCallback: function() {
                this._tracks = {},
                this._clipList.length = 0;
                for (var t = this._doneList,
                e = t.length,
                i = 0; e > i; i++) t[i].call(this)
            },
            start: function(t) {
                var e, i = this,
                n = 0,
                r = function() {
                    n--,
                    n || i._doneCallback()
                };
                for (var o in this._tracks) {
                    var a = p(this, t, r, this._tracks[o], o);
                    a && (this._clipList.push(a), n++, this.animation && this.animation.addClip(a), e = a)
                }
                if (e) {
                    var s = e.onframe;
                    e.onframe = function(t, e) {
                        s(t, e);
                        for (var n = 0; n < i._onframeList.length; n++) i._onframeList[n](t, e)
                    }
                }
                return n || this._doneCallback(),
                this
            },
            stop: function(t) {
                for (var e = this._clipList,
                i = this.animation,
                n = 0; n < e.length; n++) {
                    var r = e[n];
                    t && r.onframe(this._target, 1),
                    i && i.removeClip(r)
                }
                e.length = 0
            },
            delay: function(t) {
                return this._delay = t,
                this
            },
            done: function(t) {
                return t && this._doneList.push(t),
                this
            },
            getClips: function() {
                return this._clipList
            }
        },
        t.exports = _
    },
    function(t, e) {
        var i = 2 * Math.PI;
        t.exports = {
            normalizeRadian: function(t) {
                return t %= i,
                0 > t && (t += i),
                t
            }
        }
    },
    function(t, e) {
        var i = 2311;
        t.exports = function() {
            return "zr_" + i++
        }
    },
    function(t, e, i) {
        var n = i(144),
        r = i(143);
        t.exports = {
            buildPath: function(t, e, i) {
                var o = e.points,
                a = e.smooth;
                if (o && o.length >= 2) {
                    if (a && "spline" !== a) {
                        var s = r(o, a, i, e.smoothConstraint);
                        t.moveTo(o[0][0], o[0][1]);
                        for (var l = o.length,
                        h = 0; (i ? l: l - 1) > h; h++) {
                            var c = s[2 * h],
                            u = s[2 * h + 1],
                            d = o[(h + 1) % l];
                            t.bezierCurveTo(c[0], c[1], u[0], u[1], d[0], d[1])
                        }
                    } else {
                        "spline" === a && (o = n(o, i)),
                        t.moveTo(o[0][0], o[0][1]);
                        for (var h = 1,
                        f = o.length; f > h; h++) t.lineTo(o[h][0], o[h][1])
                    }
                    i && t.closePath()
                }
            }
        }
    },
    function(t, e) {
        t.exports = {
            buildPath: function(t, e) {
                var i, n, r, o, a = e.x,
                s = e.y,
                l = e.width,
                h = e.height,
                c = e.r;
                0 > l && (a += l, l = -l),
                0 > h && (s += h, h = -h),
                "number" == typeof c ? i = n = r = o = c: c instanceof Array ? 1 === c.length ? i = n = r = o = c[0] : 2 === c.length ? (i = r = c[0], n = o = c[1]) : 3 === c.length ? (i = c[0], n = o = c[1], r = c[2]) : (i = c[0], n = c[1], r = c[2], o = c[3]) : i = n = r = o = 0;
                var u;
                i + n > l && (u = i + n, i *= l / u, n *= l / u),
                r + o > l && (u = r + o, r *= l / u, o *= l / u),
                n + r > h && (u = n + r, n *= h / u, r *= h / u),
                i + o > h && (u = i + o, i *= h / u, o *= h / u),
                t.moveTo(a + i, s),
                t.lineTo(a + l - n, s),
                0 !== n && t.quadraticCurveTo(a + l, s, a + l, s + n),
                t.lineTo(a + l, s + h - r),
                0 !== r && t.quadraticCurveTo(a + l, s + h, a + l - r, s + h),
                t.lineTo(a + o, s + h),
                0 !== o && t.quadraticCurveTo(a, s + h, a, s + h - o),
                t.lineTo(a, s + i),
                0 !== i && t.quadraticCurveTo(a, s, a + i, s)
            }
        }
    },
    function(t, e, i) {
        var n = i(1);
        t.exports = {
            updateSelectedMap: function(t) {
                this._selectTargetMap = n.reduce(t || [],
                function(t, e) {
                    return t[e.name] = e,
                    t
                },
                {})
            },
            select: function(t) {
                var e = this._selectTargetMap,
                i = e[t],
                r = this.get("selectedMode");
                "single" === r && n.each(e,
                function(t) {
                    t.selected = !1
                }),
                i && (i.selected = !0)
            },
            unSelect: function(t) {
                var e = this._selectTargetMap[t];
                e && (e.selected = !1)
            },
            toggleSelected: function(t) {
                var e = this._selectTargetMap[t];
                return null != e ? (this[e.selected ? "unSelect": "select"](t), e.selected) : void 0
            },
            isSelected: function(t) {
                var e = this._selectTargetMap[t];
                return e && e.selected
            }
        }
    },
    function(t, e, i) {
        var n = i(72),
        r = i(1),
        o = i(10),
        a = i(11),
        s = ["value", "category", "time", "log"];
        t.exports = function(t, e, i, l) {
            r.each(s,
            function(o) {
                e.extend({
                    type: t + "Axis." + o,
                    mergeDefaultAndTheme: function(e, n) {
                        var s = this.layoutMode,
                        l = s ? a.getLayoutParams(e) : {},
                        h = n.getTheme();
                        r.merge(e, h.get(o + "Axis")),
                        r.merge(e, this.getDefaultOption()),
                        e.type = i(t, e),
                        s && a.mergeLayoutParam(e, l, s)
                    },
                    defaultOption: r.mergeAll([{},
                    n[o + "Axis"], l], !0)
                })
            }),
            o.registerSubTypeDefaulter(t + "Axis", r.curry(i, t))
        }
    },
    function(t, e) {
        t.exports = function(t, e) {
            var i = e.findComponents({
                mainType: "legend"
            });
            i && i.length && e.eachSeriesByType(t,
            function(t) {
                var e = t.getData();
                e.filterSelf(function(t) {
                    for (var n = e.getName(t), r = 0; r < i.length; r++) if (!i[r].isSelected(n)) return ! 1;
                    return ! 0
                },
                this)
            },
            this)
        }
    },
    function(t, e) {
        t.exports = function(t, e) {
            var i = e.get("color"),
            n = 0;
            e.eachRawSeriesByType(t,
            function(t) {
                var r = t.get("color", !0),
                o = t.getRawData();
                if (!e.isSeriesFiltered(t)) {
                    var a = t.getData();
                    a.each(function(t) {
                        var e = a.getItemModel(t),
                        s = a.getRawIndex(t),
                        l = a.getItemVisual(t, "color", !0);
                        if (l) o.setItemVisual(s, "color", l);
                        else {
                            var h = r ? r[s % r.length] : i[(s + n) % i.length],
                            c = e.get("itemStyle.normal.color") || h;
                            o.setItemVisual(s, "color", c),
                            a.setItemVisual(t, "color", c)
                        }
                    })
                }
                n += o.count()
            })
        }
    },
    function(t, e, i) {
        var n = i(5),
        r = i(16),
        o = {},
        a = Math.min,
        s = Math.max,
        l = Math.sin,
        h = Math.cos,
        c = n.create(),
        u = n.create(),
        d = n.create(),
        f = 2 * Math.PI;
        o.fromPoints = function(t, e, i) {
            if (0 !== t.length) {
                var n, r = t[0],
                o = r[0],
                l = r[0],
                h = r[1],
                c = r[1];
                for (n = 1; n < t.length; n++) r = t[n],
                o = a(o, r[0]),
                l = s(l, r[0]),
                h = a(h, r[1]),
                c = s(c, r[1]);
                e[0] = o,
                e[1] = h,
                i[0] = l,
                i[1] = c
            }
        },
        o.fromLine = function(t, e, i, n, r, o) {
            r[0] = a(t, i),
            r[1] = a(e, n),
            o[0] = s(t, i),
            o[1] = s(e, n)
        };
        var p = [],
        g = [];
        o.fromCubic = function(t, e, i, n, o, l, h, c, u, d) {
            var f, m = r.cubicExtrema,
            v = r.cubicAt,
            y = m(t, i, o, h, p);
            for (u[0] = 1 / 0, u[1] = 1 / 0, d[0] = -(1 / 0), d[1] = -(1 / 0), f = 0; y > f; f++) {
                var x = v(t, i, o, h, p[f]);
                u[0] = a(x, u[0]),
                d[0] = s(x, d[0])
            }
            for (y = m(e, n, l, c, g), f = 0; y > f; f++) {
                var _ = v(e, n, l, c, g[f]);
                u[1] = a(_, u[1]),
                d[1] = s(_, d[1])
            }
            u[0] = a(t, u[0]),
            d[0] = s(t, d[0]),
            u[0] = a(h, u[0]),
            d[0] = s(h, d[0]),
            u[1] = a(e, u[1]),
            d[1] = s(e, d[1]),
            u[1] = a(c, u[1]),
            d[1] = s(c, d[1])
        },
        o.fromQuadratic = function(t, e, i, n, o, l, h, c) {
            var u = r.quadraticExtremum,
            d = r.quadraticAt,
            f = s(a(u(t, i, o), 1), 0),
            p = s(a(u(e, n, l), 1), 0),
            g = d(t, i, o, f),
            m = d(e, n, l, p);
            h[0] = a(t, o, g),
            h[1] = a(e, l, m),
            c[0] = s(t, o, g),
            c[1] = s(e, l, m)
        },
        o.fromArc = function(t, e, i, r, o, a, s, p, g) {
            var m = n.min,
            v = n.max,
            y = Math.abs(o - a);
            if (1e-4 > y % f && y > 1e-4) return p[0] = t - i,
            p[1] = e - r,
            g[0] = t + i,
            void(g[1] = e + r);
            if (c[0] = h(o) * i + t, c[1] = l(o) * r + e, u[0] = h(a) * i + t, u[1] = l(a) * r + e, m(p, c, u), v(g, c, u), o %= f, 0 > o && (o += f), a %= f, 0 > a && (a += f), o > a && !s ? a += f: a > o && s && (o += f), s) {
                var x = a;
                a = o,
                o = x
            }
            for (var _ = 0; a > _; _ += Math.PI / 2) _ > o && (d[0] = h(_) * i + t, d[1] = l(_) * r + e, m(p, d, p), v(g, d, g))
        },
        t.exports = o
    },
    function(t, e, i) {
        var n = i(37),
        r = i(1),
        o = i(18),
        a = function(t) {
            n.call(this, t)
        };
        a.prototype = {
            constructor: a,
            type: "text",
            brush: function(t) {
                var e = this.style,
                i = e.x || 0,
                n = e.y || 0,
                r = e.text,
                a = e.fill,
                s = e.stroke;
                if (null != r && (r += ""), r) {
                    if (t.save(), this.style.bind(t), this.setTransform(t), a && (t.fillStyle = a), s && (t.strokeStyle = s), t.font = e.textFont || e.font, t.textAlign = e.textAlign, e.textVerticalAlign) {
                        var l = o.getBoundingRect(r, t.font, e.textAlign, "top");
                        switch (t.textBaseline = "middle", e.textVerticalAlign) {
                        case "middle":
                            n -= l.height / 2 - l.lineHeight / 2;
                            break;
                        case "bottom":
                            n -= l.height - l.lineHeight / 2;
                            break;
                        default:
                            n += l.lineHeight / 2
                        }
                    } else t.textBaseline = e.textBaseline;
                    for (var h = o.measureText("国", t.font).width, c = r.split("\n"), u = 0; u < c.length; u++) a && t.fillText(c[u], i, n),
                    s && t.strokeText(c[u], i, n),
                    n += h;
                    t.restore()
                }
            },
            getBoundingRect: function() {
                if (!this._rect) {
                    var t = this.style,
                    e = t.textVerticalAlign,
                    i = o.getBoundingRect(t.text + "", t.textFont || t.font, t.textAlign, e ? "top": t.textBaseline);
                    switch (e) {
                    case "middle":
                        i.y -= i.height / 2;
                        break;
                    case "bottom":
                        i.y -= i.height
                    }
                    i.x += t.x || 0,
                    i.y += t.y || 0,
                    this._rect = i
                }
                return this._rect
            }
        },
        r.inherits(a, n),
        t.exports = a
    },
    function(t, e, i) {
        function n(t, e) {
            return "string" == typeof t ? t.lastIndexOf("%") >= 0 ? parseFloat(t) / 100 * e: parseFloat(t) : t
        }
        function r(t, e) {
            t.transform(e[0], e[1], e[2], e[3], e[4], e[5])
        }
        var o = i(18),
        a = i(8),
        s = new a,
        l = function() {};
        l.prototype = {
            constructor: l,
            drawRectText: function(t, e, i) {
                var a = this.style,
                l = a.text;
                if (null != l && (l += ""), l) {
                    var h, c, u = a.textPosition,
                    d = a.textDistance,
                    f = a.textAlign,
                    p = a.textFont || a.font,
                    g = a.textBaseline,
                    m = a.textVerticalAlign;
                    i = i || o.getBoundingRect(l, p, f, g);
                    var v = this.transform,
                    y = this.invTransform;
                    if (v && (s.copy(e), s.applyTransform(v), e = s, r(t, y)), u instanceof Array) {
                        if (h = e.x + n(u[0], e.width), c = e.y + n(u[1], e.height), f = f || "left", g = g || "top", m) {
                            switch (m) {
                            case "middle":
                                c -= i.height / 2 - i.lineHeight / 2;
                                break;
                            case "bottom":
                                c -= i.height - i.lineHeight / 2;
                                break;
                            default:
                                c += i.lineHeight / 2
                            }
                            g = "middle"
                        }
                    } else {
                        var x = o.adjustTextPositionOnRect(u, e, i, d);
                        h = x.x,
                        c = x.y,
                        f = f || x.textAlign,
                        g = g || x.textBaseline
                    }
                    t.textAlign = f,
                    t.textBaseline = g;
                    var _ = a.textFill,
                    b = a.textStroke;
                    _ && (t.fillStyle = _),
                    b && (t.strokeStyle = b),
                    t.font = p,
                    t.shadowColor = a.textShadowColor,
                    t.shadowBlur = a.textShadowBlur,
                    t.shadowOffsetX = a.textShadowOffsetX,
                    t.shadowOffsetY = a.textShadowOffsetY;
                    for (var w = l.split("\n"), M = 0; M < w.length; M++) _ && t.fillText(w[M], h, c),
                    b && t.strokeText(w[M], h, c),
                    c += i.lineHeight;
                    v && r(t, v)
                }
            }
        },
        t.exports = l
    },
    function(t, e, i) {
        function n(t) {
            delete u[t]
        }
        /*!
	 * ZRender, a high performance 2d drawing library.
	 *
	 * Copyright (c) 2013, Baidu Inc.
	 * All rights reserved.
	 *
	 * LICENSE
	 * https://github.com/ecomfe/zrender/blob/master/LICENSE.txt
	 */
        var r = i(58),
        o = i(14),
        a = i(126),
        s = i(129),
        l = i(130),
        h = !o.canvasSupported,
        c = {
            canvas: i(128)
        },
        u = {},
        d = {};
        d.version = "3.1.0",
        d.init = function(t, e) {
            var i = new f(r(), t, e);
            return u[i.id] = i,
            i
        },
        d.dispose = function(t) {
            if (t) t.dispose();
            else {
                for (var e in u) u[e].dispose();
                u = {}
            }
            return d
        },
        d.getInstance = function(t) {
            return u[t]
        },
        d.registerPainter = function(t, e) {
            c[t] = e
        };
        var f = function(t, e, i) {
            i = i || {},
            this.dom = e,
            this.id = t;
            var n = this,
            r = new s,
            u = i.renderer;
            if (h) {
                if (!c.vml) throw new Error("You need to require 'zrender/vml/vml' to support IE8");
                u = "vml"
            } else u && c[u] || (u = "canvas");
            var d = new c[u](e, r, i);
            this.storage = r,
            this.painter = d,
            o.node || (this.handler = new a(d.getViewportRoot(), r, d)),
            this.animation = new l({
                stage: {
                    update: function() {
                        n._needsRefresh && n.refreshImmediately()
                    }
                }
            }),
            this.animation.start(),
            this._needsRefresh;
            var f = r.delFromMap,
            p = r.addToMap;
            r.delFromMap = function(t) {
                var e = r.get(t);
                f.call(r, t),
                e && e.removeSelfFromZr(n)
            },
            r.addToMap = function(t) {
                p.call(r, t),
                t.addSelfToZr(n)
            }
        };
        f.prototype = {
            constructor: f,
            getId: function() {
                return this.id
            },
            add: function(t) {
                this.storage.addRoot(t),
                this._needsRefresh = !0
            },
            remove: function(t) {
                this.storage.delRoot(t),
                this._needsRefresh = !0
            },
            configLayer: function(t, e) {
                this.painter.configLayer(t, e),
                this._needsRefresh = !0
            },
            refreshImmediately: function() {
                this._needsRefresh = !1,
                this.painter.refresh(),
                this._needsRefresh = !1
            },
            refresh: function() {
                this._needsRefresh = !0
            },
            resize: function() {
                this.painter.resize(),
                this.handler && this.handler.resize()
            },
            clearAnimation: function() {
                this.animation.clear()
            },
            getWidth: function() {
                return this.painter.getWidth()
            },
            getHeight: function() {
                return this.painter.getHeight()
            },
            pathToImage: function(t, e, i) {
                var n = r();
                return this.painter.pathToImage(n, t, e, i)
            },
            setDefaultCursorStyle: function(t) {
                this.handler.setDefaultCursorStyle(t)
            },
            on: function(t, e, i) {
                this.handler && this.handler.on(t, e, i)
            },
            off: function(t, e) {
                this.handler && this.handler.off(t, e)
            },
            trigger: function(t, e) {
                this.handler && this.handler.trigger(t, e)
            },
            clear: function() {
                this.storage.delRoot(),
                this.painter.clear()
            },
            dispose: function() {
                this.animation.stop(),
                this.clear(),
                this.storage.dispose(),
                this.painter.dispose(),
                this.handler && this.handler.dispose(),
                this.animation = this.storage = this.painter = this.handler = null,
                n(this.id)
            }
        },
        t.exports = d
    },
    function(t, e, i) {
        var n = i(2),
        r = i(1);
        t.exports = function(t, e) {
            r.each(e,
            function(e) {
                e.update = "updateView",
                n.registerAction(e,
                function(i, n) {
                    var r = {};
                    return n.eachComponent({
                        mainType: "series",
                        subType: t,
                        query: i
                    },
                    function(t) {
                        t[e.method] && t[e.method](i.name);
                        var n = t.getData();
                        n.each(function(e) {
                            var i = n.getName(e);
                            r[i] = t.isSelected(i) || !1
                        })
                    }),
                    {
                        name: i.name,
                        selected: r
                    }
                })
            })
        }
    },
    function(t, e, i) {
        function n(t) {
            if (!t.target || !t.target.draggable) {
                var e = t.offsetX,
                i = t.offsetY,
                n = this.rectProvider && this.rectProvider();
                n && n.contain(e, i) && (this._x = e, this._y = i, this._dragging = !0)
            }
        }
        function r(t) {
            if (this._dragging && (d.stop(t.event), "pinch" !== t.gestureEvent)) {
                if (f.isTaken("globalPan", this._zr)) return;
                var e = t.offsetX,
                i = t.offsetY,
                n = e - this._x,
                r = i - this._y;
                this._x = e,
                this._y = i;
                var o = this.target;
                if (o) {
                    var a = o.position;
                    a[0] += n,
                    a[1] += r,
                    o.dirty()
                }
                d.stop(t.event),
                this.trigger("pan", n, r)
            }
        }
        function o(t) {
            this._dragging = !1
        }
        function a(t) {
            var e = t.wheelDelta > 0 ? 1.1 : 1 / 1.1;
            l.call(this, t, e, t.offsetX, t.offsetY)
        }
        function s(t) {
            if (!f.isTaken("globalPan", this._zr)) {
                var e = t.pinchScale > 1 ? 1.1 : 1 / 1.1;
                l.call(this, t, e, t.pinchX, t.pinchY)
            }
        }
        function l(t, e, i, n) {
            var r = this.rectProvider && this.rectProvider();
            if (r && r.contain(i, n)) {
                d.stop(t.event);
                var o = this.target,
                a = this.zoomLimit;
                if (o) {
                    var s = o.position,
                    l = o.scale,
                    h = this.zoom = this.zoom || 1;
                    if (h *= e, a) {
                        var c = a.min || 0,
                        u = a.max || 1 / 0;
                        h = Math.max(Math.min(u, h), c)
                    }
                    var f = h / this.zoom;
                    this.zoom = h,
                    s[0] -= (i - s[0]) * (f - 1),
                    s[1] -= (n - s[1]) * (f - 1),
                    l[0] *= f,
                    l[1] *= f,
                    o.dirty()
                }
                this.trigger("zoom", e, i, n)
            }
        }
        function h(t, e, i) {
            this.target = e,
            this.rectProvider = i,
            this.zoomLimit,
            this.zoom,
            this._zr = t;
            var l = u.bind,
            h = l(n, this),
            d = l(r, this),
            f = l(o, this),
            p = l(a, this),
            g = l(s, this);
            c.call(this),
            this.enable = function(e) {
                this.disable(),
                null == e && (e = !0),
                e !== !0 && "move" !== e && "pan" !== e || (t.on("mousedown", h), t.on("mousemove", d), t.on("mouseup", f)),
                e !== !0 && "scale" !== e && "zoom" !== e || (t.on("mousewheel", p), t.on("pinch", g))
            },
            this.disable = function() {
                t.off("mousedown", h),
                t.off("mousemove", d),
                t.off("mouseup", f),
                t.off("mousewheel", p),
                t.off("pinch", g)
            },
            this.dispose = this.disable,
            this.isDragging = function() {
                return this._dragging
            },
            this.isPinching = function() {
                return this._pinching
            }
        }
        var c = i(21),
        u = i(1),
        d = i(34),
        f = i(101);
        u.mixin(h, c),
        t.exports = h
    },
    function(t, e) {
        t.exports = function(t, e, i, n, r) {
            function o(t, e, i) {
                var n = e.length ? e.slice() : [e, e];
                return e[0] > e[1] && n.reverse(),
                0 > t && n[0] + t < i[0] && (t = i[0] - n[0]),
                t > 0 && n[1] + t > i[1] && (t = i[1] - n[1]),
                t
            }
            return t ? ("rigid" === n ? (t = o(t, e, i), e[0] += t, e[1] += t) : (t = o(t, e[r], i), e[r] += t, "push" === n && e[0] > e[1] && (e[1 - r] = e[r])), e) : e
        }
    },
    function(t, e, i) {
        var n = i(1),
        r = {
            show: !0,
            zlevel: 0,
            z: 0,
            inverse: !1,
            name: "",
            nameLocation: "end",
            nameTextStyle: {},
            nameGap: 15,
            silent: !0,
            axisLine: {
                show: !0,
                onZero: !0,
                lineStyle: {
                    color: "#333",
                    width: 1,
                    type: "solid"
                }
            },
            axisTick: {
                show: !0,
                inside: !1,
                length: 5,
                lineStyle: {
                    color: "#333",
                    width: 1
                }
            },
            axisLabel: {
                show: !0,
                inside: !1,
                rotate: 0,
                margin: 8,
                textStyle: {
                    color: "#333",
                    fontSize: 12
                }
            },
            splitLine: {
                show: !0,
                lineStyle: {
                    color: ["#ccc"],
                    width: 1,
                    type: "solid"
                }
            },
            splitArea: {
                show: !1,
                areaStyle: {
                    color: ["rgba(250,250,250,0.3)", "rgba(200,200,200,0.3)"]
                }
            }
        },
        o = n.merge({
            boundaryGap: !0,
            axisTick: {
                interval: "auto"
            },
            axisLabel: {
                interval: "auto"
            }
        },
        r),
        a = n.defaults({
            boundaryGap: [0, 0],
            splitNumber: 5
        },
        r),
        s = n.defaults({
            scale: !0,
            min: "dataMin",
            max: "dataMax"
        },
        a),
        l = n.defaults({},
        a);
        l.scale = !0,
        t.exports = {
            categoryAxis: o,
            valueAxis: a,
            timeAxis: s,
            logAxis: l
        }
    },
    ,
    function(t, e, i) {
        var n = i(17);
        t.exports = function(t, e, i) {
            function r(t) {
                var r = [e, "normal", "color"],
                o = i.get("color"),
                a = t.getData(),
                s = t.get(r) || o[t.seriesIndex % o.length];
                a.setVisual("color", s),
                i.isSeriesFiltered(t) || ("function" != typeof s || s instanceof n || a.each(function(e) {
                    a.setItemVisual(e, "color", s(t.getDataParams(e)))
                }), a.each(function(t) {
                    var e = a.getItemModel(t),
                    i = e.get(r, !0);
                    null != i && a.setItemVisual(t, "color", i)
                }))
            }
            t ? i.eachSeriesByType(t, r) : i.eachSeries(r)
        }
    },
    function(t, e) {
        t.exports = function(t, e, i, n, r, o) {
            if (o > e && o > n || e > o && n > o) return 0;
            if (n === e) return 0;
            var a = e > n ? 1 : -1,
            s = (o - e) / (n - e),
            l = s * (i - t) + t;
            return l > r ? a: 0
        }
    },
    function(t, e, i) {
        "use strict";
        var n = i(1),
        r = i(17),
        o = function(t, e, i, n, o) {
            this.x = null == t ? 0 : t,
            this.y = null == e ? 0 : e,
            this.x2 = null == i ? 1 : i,
            this.y2 = null == n ? 0 : n,
            r.call(this, o)
        };
        o.prototype = {
            constructor: o,
            type: "linear"
        },
        n.inherits(o, r),
        t.exports = o
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            return t > s || -s > t
        }
        var r = i(19),
        o = i(5),
        a = r.identity,
        s = 5e-5,
        l = function(t) {
            t = t || {},
            t.position || (this.position = [0, 0]),
            null == t.rotation && (this.rotation = 0),
            t.scale || (this.scale = [1, 1]),
            this.origin = this.origin || null
        },
        h = l.prototype;
        h.transform = null,
        h.needLocalTransform = function() {
            return n(this.rotation) || n(this.position[0]) || n(this.position[1]) || n(this.scale[0] - 1) || n(this.scale[1] - 1)
        },
        h.updateTransform = function() {
            var t = this.parent,
            e = t && t.transform,
            i = this.needLocalTransform(),
            n = this.transform;
            return i || e ? (n = n || r.create(), i ? this.getLocalTransform(n) : a(n), e && (i ? r.mul(n, t.transform, n) : r.copy(n, t.transform)), this.transform = n, this.invTransform = this.invTransform || r.create(), void r.invert(this.invTransform, n)) : void(n && a(n))
        },
        h.getLocalTransform = function(t) {
            t = t || [],
            a(t);
            var e = this.origin,
            i = this.scale,
            n = this.rotation,
            o = this.position;
            return e && (t[4] -= e[0], t[5] -= e[1]),
            r.scale(t, t, i),
            n && r.rotate(t, t, n),
            e && (t[4] += e[0], t[5] += e[1]),
            t[4] += o[0],
            t[5] += o[1],
            t
        },
        h.setTransform = function(t) {
            var e = this.transform;
            e && t.transform(e[0], e[1], e[2], e[3], e[4], e[5])
        };
        var c = [];
        h.decomposeTransform = function() {
            if (this.transform) {
                var t = this.parent,
                e = this.transform;
                t && t.transform && (r.mul(c, t.invTransform, e), e = c);
                var i = e[0] * e[0] + e[1] * e[1],
                o = e[2] * e[2] + e[3] * e[3],
                a = this.position,
                s = this.scale;
                n(i - 1) && (i = Math.sqrt(i)),
                n(o - 1) && (o = Math.sqrt(o)),
                e[0] < 0 && (i = -i),
                e[3] < 0 && (o = -o),
                a[0] = e[4],
                a[1] = e[5],
                s[0] = i,
                s[1] = o,
                this.rotation = Math.atan2( - e[1] / o, e[0] / i)
            }
        },
        h.getGlobalScale = function() {
            var t = this.transform;
            if (!t) return [1, 1];
            var e = Math.sqrt(t[0] * t[0] + t[1] * t[1]),
            i = Math.sqrt(t[2] * t[2] + t[3] * t[3]);
            return t[0] < 0 && (e = -e),
            t[3] < 0 && (i = -i),
            [e, i]
        },
        h.transformCoordToLocal = function(t, e) {
            var i = [t, e],
            n = this.invTransform;
            return n && o.applyTransform(i, i, n),
            i
        },
        h.transformCoordToGlobal = function(t, e) {
            var i = [t, e],
            n = this.transform;
            return n && o.applyTransform(i, i, n),
            i
        },
        t.exports = l
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            r.each(o,
            function(e) {
                this[e] = r.bind(t[e], t)
            },
            this)
        }
        var r = i(1),
        o = ["getDom", "getZr", "getWidth", "getHeight", "dispatchAction", "on", "off", "getDataURL", "getConnectedDataURL", "getModel", "getOption"];
        t.exports = n
    },
    function(t, e, i) {
        var n = i(1);
        i(52),
        i(80),
        i(81);
        var r = i(109),
        o = i(2);
        o.registerLayout(n.curry(r, "bar")),
        o.registerVisualCoding("chart",
        function(t) {
            t.eachSeriesByType("bar",
            function(t) {
                var e = t.getData();
                e.setVisual("legendSymbol", "roundRect")
            })
        }),
        i(36)
    },
    function(t, e, i) {
        "use strict";
        var n = i(13),
        r = i(35);
        t.exports = n.extend({
            type: "series.bar",
            dependencies: ["grid", "polar"],
            getInitialData: function(t, e) {
                return r(t.data, this, e)
            },
            getMarkerPosition: function(t) {
                var e = this.coordinateSystem;
                if (e) {
                    var i = e.dataToPoint(t),
                    n = this.getData(),
                    r = n.getLayout("offset"),
                    o = n.getLayout("size"),
                    a = e.getBaseAxis().isHorizontal() ? 0 : 1;
                    return i[a] += r + o / 2,
                    i
                }
                return [NaN, NaN]
            },
            defaultOption: {
                zlevel: 0,
                z: 2,
                coordinateSystem: "cartesian2d",
                legendHoverLink: !0,
                xAxisIndex: 0,
                yAxisIndex: 0,
                barMinHeight: 0,
                itemStyle: {
                    normal: {
                        barBorderColor: "#fff",
                        barBorderWidth: 0
                    },
                    emphasis: {
                        barBorderColor: "#fff",
                        barBorderWidth: 0
                    }
                }
            }
        })
    },
    function(t, e, i) {
        "use strict";
        function n(t, e) {
            var i = t.width > 0 ? 1 : -1,
            n = t.height > 0 ? 1 : -1;
            e = Math.min(e, Math.abs(t.width), Math.abs(t.height)),
            t.x += i * e / 2,
            t.y += n * e / 2,
            t.width -= i * e,
            t.height -= n * e
        }
        var r = i(1),
        o = i(3);
        r.extend(i(12).prototype, i(82)),
        t.exports = i(2).extendChartView({
            type: "bar",
            render: function(t, e, i) {
                var n = t.get("coordinateSystem");
                return "cartesian2d" === n && this._renderOnCartesian(t, e, i),
                this.group
            },
            _renderOnCartesian: function(t, e, i) {
                function a(e, i) {
                    var a = l.getItemLayout(e),
                    s = l.getItemModel(e).get(p) || 0;
                    n(a, s);
                    var h = new o.Rect({
                        shape: r.extend({},
                        a)
                    });
                    if (f) {
                        var c = h.shape,
                        u = d ? "height": "width",
                        g = {};
                        c[u] = 0,
                        g[u] = a[u],
                        o[i ? "updateProps": "initProps"](h, {
                            shape: g
                        },
                        t, e)
                    }
                    return h
                }
                var s = this.group,
                l = t.getData(),
                h = this._data,
                c = t.coordinateSystem,
                u = c.getBaseAxis(),
                d = u.isHorizontal(),
                f = t.get("animation"),
                p = ["itemStyle", "normal", "barBorderWidth"];
                l.diff(h).add(function(t) {
                    if (l.hasValue(t)) {
                        var e = a(t);
                        l.setItemGraphicEl(t, e),
                        s.add(e)
                    }
                }).update(function(e, i) {
                    var r = h.getItemGraphicEl(i);
                    if (!l.hasValue(e)) return void s.remove(r);
                    r || (r = a(e, !0));
                    var c = l.getItemLayout(e),
                    u = l.getItemModel(e).get(p) || 0;
                    n(c, u),
                    o.updateProps(r, {
                        shape: c
                    },
                    t, e),
                    l.setItemGraphicEl(e, r),
                    s.add(r)
                }).remove(function(e) {
                    var i = h.getItemGraphicEl(e);
                    i && (i.style.text = "", o.updateProps(i, {
                        shape: {
                            width: 0
                        }
                    },
                    t, e,
                    function() {
                        s.remove(i)
                    }))
                }).execute(),
                this._updateStyle(t, l, d),
                this._data = l
            },
            _updateStyle: function(t, e, i) {
                function n(t, e, i, n, r) {
                    o.setText(t, e, i),
                    t.text = n,
                    "outside" === t.textPosition && (t.textPosition = r)
                }
                e.eachItemGraphicEl(function(a, s) {
                    var l = e.getItemModel(s),
                    h = e.getItemVisual(s, "color"),
                    c = e.getItemVisual(s, "opacity"),
                    u = e.getItemLayout(s),
                    d = l.getModel("itemStyle.normal"),
                    f = l.getModel("itemStyle.emphasis").getBarItemStyle();
                    a.setShape("r", d.get("barBorderRadius") || 0),
                    a.useStyle(r.defaults({
                        fill: h,
                        opacity: c
                    },
                    d.getBarItemStyle()));
                    var p = i ? u.height > 0 ? "bottom": "top": u.width > 0 ? "left": "right",
                    g = l.getModel("label.normal"),
                    m = l.getModel("label.emphasis"),
                    v = a.style;
                    g.get("show") ? n(v, g, h, r.retrieve(t.getFormattedLabel(s, "normal"), t.getRawValue(s)), p) : v.text = "",
                    m.get("show") ? n(f, m, h, r.retrieve(t.getFormattedLabel(s, "emphasis"), t.getRawValue(s)), p) : f.text = "",
                    o.setHoverStyle(a, f)
                })
            },
            remove: function(t, e) {
                var i = this.group;
                t.get("animation") ? this._data && this._data.eachItemGraphicEl(function(e) {
                    e.style.text = "",
                    o.updateProps(e, {
                        shape: {
                            width: 0
                        }
                    },
                    t, e.dataIndex,
                    function() {
                        i.remove(e)
                    })
                }) : i.removeAll()
            }
        })
    },
    function(t, e, i) {
        t.exports = {
            getBarItemStyle: i(30)([["fill", "color"], ["stroke", "borderColor"], ["lineWidth", "borderWidth"], ["stroke", "barBorderColor"], ["lineWidth", "barBorderWidth"], ["opacity"], ["shadowBlur"], ["shadowOffsetX"], ["shadowOffsetY"], ["shadowColor"]])
        }
    },
    function(t, e, i) {
        function n(t) {
            return "_" + t + "Type"
        }
        function r(t, e, i) {
            var n = e.getItemVisual(i, "color"),
            r = e.getItemVisual(i, t),
            o = e.getItemVisual(i, t + "Size");
            if (r && "none" !== r) {
                f.isArray(o) || (o = [o, o]);
                var a = h.createSymbol(r, -o[0] / 2, -o[1] / 2, o[0], o[1], n);
                return a.name = t,
                a
            }
        }
        function o(t) {
            var e = new u({
                name: "line"
            });
            return a(e.shape, t),
            e
        }
        function a(t, e) {
            var i = e[0],
            n = e[1],
            r = e[2];
            t.x1 = i[0],
            t.y1 = i[1],
            t.x2 = n[0],
            t.y2 = n[1],
            t.percent = 1,
            r && (t.cpx1 = r[0], t.cpy1 = r[1])
        }
        function s() {
            var t = this,
            e = t.childOfName("fromSymbol"),
            i = t.childOfName("toSymbol"),
            n = t.childOfName("label");
            if (e || i || !n.ignore) {
                for (var r = 1,
                o = this.parent; o;) o.scale && (r /= o.scale[0]),
                o = o.parent;
                var a = t.childOfName("line");
                if (this.__dirty || a.__dirty) {
                    var s = a.shape.percent,
                    l = a.pointAt(0),
                    h = a.pointAt(s),
                    u = c.sub([], h, l);
                    if (c.normalize(u, u), e) {
                        e.attr("position", l);
                        var d = a.tangentAt(0);
                        e.attr("rotation", Math.PI / 2 - Math.atan2(d[1], d[0])),
                        e.attr("scale", [r * s, r * s])
                    }
                    if (i) {
                        i.attr("position", h);
                        var d = a.tangentAt(1);
                        i.attr("rotation", -Math.PI / 2 - Math.atan2(d[1], d[0])),
                        i.attr("scale", [r * s, r * s])
                    }
                    if (!n.ignore) {
                        n.attr("position", h);
                        var f, p, g, m = 5 * r;
                        if ("end" === n.__position) f = [u[0] * m + h[0], u[1] * m + h[1]],
                        p = u[0] > .8 ? "left": u[0] < -.8 ? "right": "center",
                        g = u[1] > .8 ? "top": u[1] < -.8 ? "bottom": "middle";
                        else if ("middle" === n.__position) {
                            var v = s / 2,
                            d = a.tangentAt(v),
                            y = [d[1], -d[0]],
                            x = a.pointAt(v);
                            y[1] > 0 && (y[0] = -y[0], y[1] = -y[1]),
                            f = [x[0] + y[0] * m, x[1] + y[1] * m],
                            p = "center",
                            g = "bottom";
                            var _ = -Math.atan2(d[1], d[0]);
                            h[0] < l[0] && (_ = Math.PI + _),
                            n.attr("rotation", _)
                        } else f = [ - u[0] * m + l[0], -u[1] * m + l[1]],
                        p = u[0] > .8 ? "right": u[0] < -.8 ? "left": "center",
                        g = u[1] > .8 ? "bottom": u[1] < -.8 ? "top": "middle";
                        n.attr({
                            style: {
                                textVerticalAlign: n.__verticalAlign || g,
                                textAlign: n.__textAlign || p
                            },
                            position: f,
                            scale: [r, r]
                        })
                    }
                }
            }
        }
        function l(t, e) {
            d.Group.call(this),
            this._createLine(t, e)
        }
        var h = i(25),
        c = i(5),
        u = i(164),
        d = i(3),
        f = i(1),
        p = i(4),
        g = ["fromSymbol", "toSymbol"],
        m = l.prototype;
        m.beforeUpdate = s,
        m._createLine = function(t, e) {
            var i = t.hostModel,
            a = t.getItemLayout(e),
            s = o(a);
            s.shape.percent = 0,
            d.initProps(s, {
                shape: {
                    percent: 1
                }
            },
            i, e),
            this.add(s);
            var l = new d.Text({
                name: "label"
            });
            this.add(l),
            f.each(g,
            function(i) {
                var o = r(i, t, e);
                this.add(o),
                this[n(i)] = t.getItemVisual(e, i)
            },
            this),
            this._updateCommonStl(t, e)
        },
        m.updateData = function(t, e) {
            var i = t.hostModel,
            o = this.childOfName("line"),
            s = t.getItemLayout(e),
            l = {
                shape: {}
            };
            a(l.shape, s),
            d.updateProps(o, l, i, e),
            f.each(g,
            function(i) {
                var o = t.getItemVisual(e, i),
                a = n(i);
                if (this[a] !== o) {
                    var s = r(i, t, e);
                    this.remove(this.childOfName(i)),
                    this.add(s)
                }
                this[a] = o
            },
            this),
            this._updateCommonStl(t, e)
        },
        m._updateCommonStl = function(t, e) {
            var i = t.hostModel,
            n = this.childOfName("line"),
            r = t.getItemModel(e),
            o = r.getModel("label.normal"),
            a = o.getModel("textStyle"),
            s = r.getModel("label.emphasis"),
            l = s.getModel("textStyle"),
            h = p.round(i.getRawValue(e));
            isNaN(h) && (h = t.getName(e)),
            n.useStyle(f.extend({
                strokeNoScale: !0,
                fill: "none",
                stroke: t.getItemVisual(e, "color")
            },
            r.getModel("lineStyle.normal").getLineStyle())),
            n.hoverStyle = r.getModel("lineStyle.emphasis").getLineStyle();
            var c = t.getItemVisual(e, "color") || "#000",
            u = this.childOfName("label");
            u.setStyle({
                text: o.get("show") ? f.retrieve(i.getFormattedLabel(e, "normal", t.dataType), h) : "",
                textFont: a.getFont(),
                fill: a.getTextColor() || c
            }),
            u.hoverStyle = {
                text: s.get("show") ? f.retrieve(i.getFormattedLabel(e, "emphasis", t.dataType), h) : "",
                textFont: l.getFont(),
                fill: l.getTextColor() || c
            },
            u.__textAlign = a.get("align"),
            u.__verticalAlign = a.get("baseline"),
            u.__position = o.get("position"),
            u.ignore = !u.style.text && !u.hoverStyle.text,
            d.setHoverStyle(this)
        },
        m.updateLayout = function(t, e) {
            var i = t.getItemLayout(e),
            n = this.childOfName("line");
            a(n.shape, i),
            n.dirty(!0)
        },
        m.setLinePoints = function(t) {
            var e = this.childOfName("line");
            a(e.shape, t),
            e.dirty()
        },
        f.inherits(l, d.Group),
        t.exports = l
    },
    function(t, e, i) {
        function n(t) {
            return isNaN(t[0]) || isNaN(t[1])
        }
        function r(t) {
            return ! n(t[0]) && !n(t[1])
        }
        function o(t) {
            this._ctor = t || s,
            this.group = new a.Group
        }
        var a = i(3),
        s = i(83),
        l = o.prototype;
        l.updateData = function(t) {
            var e = this._lineData,
            i = this.group,
            n = this._ctor;
            t.diff(e).add(function(e) {
                if (r(t.getItemLayout(e))) {
                    var o = new n(t, e);
                    t.setItemGraphicEl(e, o),
                    i.add(o)
                }
            }).update(function(o, a) {
                var s = e.getItemGraphicEl(a);
                return r(t.getItemLayout(o)) ? (s ? s.updateData(t, o) : s = new n(t, o), t.setItemGraphicEl(o, s), void i.add(s)) : void i.remove(s)
            }).remove(function(t) {
                i.remove(e.getItemGraphicEl(t))
            }).execute(),
            this._lineData = t
        },
        l.updateLayout = function() {
            var t = this._lineData;
            t.eachItemGraphicEl(function(e, i) {
                e.updateLayout(t, i)
            },
            this)
        },
        l.remove = function() {
            this.group.removeAll()
        },
        t.exports = o
    },
    function(t, e, i) {
        var n = i(1),
        r = i(2);
        i(86),
        i(87),
        r.registerVisualCoding("chart", n.curry(i(44), "line", "circle", "line")),
        r.registerLayout(n.curry(i(53), "line")),
        r.registerProcessor("statistic", n.curry(i(121), "line")),
        i(36)
    },
    function(t, e, i) {
        "use strict";
        var n = i(35),
        r = i(13);
        t.exports = r.extend({
            type: "series.line",
            dependencies: ["grid", "polar"],
            getInitialData: function(t, e) {
                return n(t.data, this, e)
            },
            defaultOption: {
                zlevel: 0,
                z: 2,
                coordinateSystem: "cartesian2d",
                legendHoverLink: !0,
                hoverAnimation: !0,
                xAxisIndex: 0,
                yAxisIndex: 0,
                polarIndex: 0,
                clipOverflow: !0,
                label: {
                    normal: {
                        position: "top"
                    }
                },
                lineStyle: {
                    normal: {
                        width: 2,
                        type: "solid"
                    }
                },
                smooth: !1,
                smoothMonotone: null,
                symbol: "emptyCircle",
                symbolSize: 4,
                symbolRotate: null,
                showSymbol: !0,
                showAllSymbol: !1,
                connectNulls: !1,
                sampling: "none",
                animationEasing: "linear"
            }
        })
    },
    function(t, e, i) {
        "use strict";
        function n(t, e) {
            if (t.length === e.length) {
                for (var i = 0; i < t.length; i++) {
                    var n = t[i],
                    r = e[i];
                    if (n[0] !== r[0] || n[1] !== r[1]) return
                }
                return ! 0
            }
        }
        function r(t) {
            return "number" == typeof t ? t: t ? .3 : 0
        }
        function o(t) {
            var e = t.getGlobalExtent();
            if (t.onBand) {
                var i = t.getBandWidth() / 2 - 1,
                n = e[1] > e[0] ? 1 : -1;
                e[0] += n * i,
                e[1] -= n * i
            }
            return e
        }
        function a(t) {
            return t >= 0 ? 1 : -1
        }
        function s(t, e) {
            var i = t.getBaseAxis(),
            n = t.getOtherAxis(i),
            r = i.onZero ? 0 : n.scale.getExtent()[0],
            o = n.dim,
            s = "x" === o || "radius" === o ? 1 : 0;
            return e.mapArray([o],
            function(n, l) {
                for (var h, c = e.stackedOn; c && a(c.get(o, l)) === a(n);) {
                    h = c;
                    break
                }
                var u = [];
                return u[s] = e.get(i.dim, l),
                u[1 - s] = h ? h.get(o, l, !0) : r,
                t.dataToPoint(u)
            },
            !0)
        }
        function l(t, e) {
            return null != e.dataIndex ? e.dataIndex: null != e.name ? t.indexOfName(e.name) : void 0
        }
        function h(t, e, i) {
            var n = o(t.getAxis("x")),
            r = o(t.getAxis("y")),
            a = t.getBaseAxis().isHorizontal(),
            s = Math.min(n[0], n[1]),
            l = Math.min(r[0], r[1]),
            h = Math.max(n[0], n[1]) - s,
            c = Math.max(r[0], r[1]) - l,
            u = i.get("lineStyle.normal.width") || 2,
            d = i.get("clipOverflow") ? u / 2 : Math.max(h, c);
            a ? (l -= d, c += 2 * d) : (s -= d, h += 2 * d);
            var f = new m.Rect({
                shape: {
                    x: s,
                    y: l,
                    width: h,
                    height: c
                }
            });
            return e && (f.shape[a ? "width": "height"] = 0, m.initProps(f, {
                shape: {
                    width: h,
                    height: c
                }
            },
            i)),
            f
        }
        function c(t, e, i) {
            var n = t.getAngleAxis(),
            r = t.getRadiusAxis(),
            o = r.getExtent(),
            a = n.getExtent(),
            s = Math.PI / 180,
            l = new m.Sector({
                shape: {
                    cx: t.cx,
                    cy: t.cy,
                    r0: o[0],
                    r: o[1],
                    startAngle: -a[0] * s,
                    endAngle: -a[1] * s,
                    clockwise: n.inverse
                }
            });
            return e && (l.shape.endAngle = -a[0] * s, m.initProps(l, {
                shape: {
                    endAngle: -a[1] * s
                }
            },
            i)),
            l
        }
        function u(t, e, i) {
            return "polar" === t.type ? c(t, e, i) : h(t, e, i)
        }
        var d = i(1),
        f = i(39),
        p = i(47),
        g = i(88),
        m = i(3),
        v = i(89),
        y = i(26);
        t.exports = y.extend({
            type: "line",
            init: function() {
                var t = new m.Group,
                e = new f;
                this.group.add(e.group),
                this._symbolDraw = e,
                this._lineGroup = t
            },
            render: function(t, e, i) {
                var o = t.coordinateSystem,
                a = this.group,
                l = t.getData(),
                h = t.getModel("lineStyle.normal"),
                c = t.getModel("areaStyle.normal"),
                f = l.mapArray(l.getItemLayout, !0),
                p = "polar" === o.type,
                g = this._coordSys,
                m = this._symbolDraw,
                v = this._polyline,
                y = this._polygon,
                x = this._lineGroup,
                _ = t.get("animation"),
                b = !c.isEmpty(),
                w = s(o, l),
                M = t.get("showSymbol"),
                S = M && !p && !t.get("showAllSymbol") && this._getSymbolIgnoreFunc(l, o),
                A = this._data;
                A && A.eachItemGraphicEl(function(t, e) {
                    t.__temp && (a.remove(t), A.setItemGraphicEl(e, null))
                }),
                M || m.remove(),
                a.add(x),
                v && g.type === o.type ? (b && !y ? y = this._newPolygon(f, w, o, _) : y && !b && (x.remove(y), y = this._polygon = null), x.setClipPath(u(o, !1, t)), M && m.updateData(l, S), l.eachItemGraphicEl(function(t) {
                    t.stopAnimation(!0)
                }), n(this._stackedOnPoints, w) && n(this._points, f) || (_ ? this._updateAnimation(l, w, o, i) : (v.setShape({
                    points: f
                }), y && y.setShape({
                    points: f,
                    stackedOnPoints: w
                })))) : (M && m.updateData(l, S), v = this._newPolyline(f, o, _), b && (y = this._newPolygon(f, w, o, _)), x.setClipPath(u(o, !0, t))),
                v.useStyle(d.defaults(h.getLineStyle(), {
                    fill: "none",
                    stroke: l.getVisual("color"),
                    lineJoin: "bevel"
                }));
                var T = t.get("smooth");
                if (T = r(t.get("smooth")), v.setShape({
                    smooth: T,
                    smoothMonotone: t.get("smoothMonotone"),
                    connectNulls: t.get("connectNulls")
                }), y) {
                    var C = l.stackedOn,
                    I = 0;
                    if (y.useStyle(d.defaults(c.getAreaStyle(), {
                        fill: l.getVisual("color"),
                        opacity: .7,
                        lineJoin: "bevel"
                    })), C) {
                        var k = C.hostModel;
                        I = r(k.get("smooth"))
                    }
                    y.setShape({
                        smooth: T,
                        stackedOnSmooth: I,
                        smoothMonotone: t.get("smoothMonotone"),
                        connectNulls: t.get("connectNulls")
                    })
                }
                this._data = l,
                this._coordSys = o,
                this._stackedOnPoints = w,
                this._points = f
            },
            highlight: function(t, e, i, n) {
                var r = t.getData(),
                o = l(r, n);
                if (null != o && o >= 0) {
                    var a = r.getItemGraphicEl(o);
                    if (!a) {
                        var s = r.getItemLayout(o);
                        a = new p(r, o, i),
                        a.position = s,
                        a.setZ(t.get("zlevel"), t.get("z")),
                        a.ignore = isNaN(s[0]) || isNaN(s[1]),
                        a.__temp = !0,
                        r.setItemGraphicEl(o, a),
                        a.stopSymbolAnimation(!0),
                        this.group.add(a)
                    }
                    a.highlight()
                } else y.prototype.highlight.call(this, t, e, i, n)
            },
            downplay: function(t, e, i, n) {
                var r = t.getData(),
                o = l(r, n);
                if (null != o && o >= 0) {
                    var a = r.getItemGraphicEl(o);
                    a && (a.__temp ? (r.setItemGraphicEl(o, null), this.group.remove(a)) : a.downplay())
                } else y.prototype.downplay.call(this, t, e, i, n)
            },
            _newPolyline: function(t) {
                var e = this._polyline;
                return e && this._lineGroup.remove(e),
                e = new v.Polyline({
                    shape: {
                        points: t
                    },
                    silent: !0,
                    z2: 10
                }),
                this._lineGroup.add(e),
                this._polyline = e,
                e
            },
            _newPolygon: function(t, e) {
                var i = this._polygon;
                return i && this._lineGroup.remove(i),
                i = new v.Polygon({
                    shape: {
                        points: t,
                        stackedOnPoints: e
                    },
                    silent: !0
                }),
                this._lineGroup.add(i),
                this._polygon = i,
                i
            },
            _getSymbolIgnoreFunc: function(t, e) {
                var i = e.getAxesByScale("ordinal")[0];
                return i && i.isLabelIgnored ? d.bind(i.isLabelIgnored, i) : void 0
            },
            _updateAnimation: function(t, e, i, n) {
                var r = this._polyline,
                o = this._polygon,
                a = t.hostModel,
                s = g(this._data, t, this._stackedOnPoints, e, this._coordSys, i);
                r.shape.points = s.current,
                m.updateProps(r, {
                    shape: {
                        points: s.next
                    }
                },
                a),
                o && (o.setShape({
                    points: s.current,
                    stackedOnPoints: s.stackedOnCurrent
                }), m.updateProps(o, {
                    shape: {
                        points: s.next,
                        stackedOnPoints: s.stackedOnNext
                    }
                },
                a));
                for (var l = [], h = s.status, c = 0; c < h.length; c++) {
                    var u = h[c].cmd;
                    if ("=" === u) {
                        var d = t.getItemGraphicEl(h[c].idx1);
                        d && l.push({
                            el: d,
                            ptIdx: c
                        })
                    }
                }
                r.animators && r.animators.length && r.animators[0].during(function() {
                    for (var t = 0; t < l.length; t++) {
                        var e = l[t].el;
                        e.attr("position", r.shape.points[l[t].ptIdx])
                    }
                })
            },
            remove: function(t) {
                var e = this.group,
                i = this._data;
                this._lineGroup.removeAll(),
                this._symbolDraw.remove(!0),
                i && i.eachItemGraphicEl(function(t, n) {
                    t.__temp && (e.remove(t), i.setItemGraphicEl(n, null))
                }),
                this._polyline = this._polygon = this._coordSys = this._points = this._stackedOnPoints = this._data = null
            }
        })
    },
    function(t, e) {
        function i(t) {
            return t >= 0 ? 1 : -1
        }
        function n(t, e, n) {
            for (var r, o = t.getBaseAxis(), a = t.getOtherAxis(o), s = o.onZero ? 0 : a.scale.getExtent()[0], l = a.dim, h = "x" === l || "radius" === l ? 1 : 0, c = e.stackedOn, u = e.get(l, n); c && i(c.get(l, n)) === i(u);) {
                r = c;
                break
            }
            var d = [];
            return d[h] = e.get(o.dim, n),
            d[1 - h] = r ? r.get(l, n, !0) : s,
            t.dataToPoint(d)
        }
        function r(t, e) {
            var i = [];
            return e.diff(t).add(function(t) {
                i.push({
                    cmd: "+",
                    idx: t
                })
            }).update(function(t, e) {
                i.push({
                    cmd: "=",
                    idx: e,
                    idx1: t
                })
            }).remove(function(t) {
                i.push({
                    cmd: "-",
                    idx: t
                })
            }).execute(),
            i
        }
        t.exports = function(t, e, i, o, a, s) {
            for (var l = r(t, e), h = [], c = [], u = [], d = [], f = [], p = [], g = [], m = s.dimensions, v = 0; v < l.length; v++) {
                var y = l[v],
                x = !0;
                switch (y.cmd) {
                case "=":
                    var _ = t.getItemLayout(y.idx),
                    b = e.getItemLayout(y.idx1); (isNaN(_[0]) || isNaN(_[1])) && (_ = b.slice()),
                    h.push(_),
                    c.push(b),
                    u.push(i[y.idx]),
                    d.push(o[y.idx1]),
                    g.push(e.getRawIndex(y.idx1));
                    break;
                case "+":
                    var w = y.idx;
                    h.push(a.dataToPoint([e.get(m[0], w, !0), e.get(m[1], w, !0)])),
                    c.push(e.getItemLayout(w).slice()),
                    u.push(n(a, e, w)),
                    d.push(o[w]),
                    g.push(e.getRawIndex(w));
                    break;
                case "-":
                    var w = y.idx,
                    M = t.getRawIndex(w);
                    M !== w ? (h.push(t.getItemLayout(w)), c.push(s.dataToPoint([t.get(m[0], w, !0), t.get(m[1], w, !0)])), u.push(i[w]), d.push(n(s, t, w)), g.push(M)) : x = !1
                }
                x && (f.push(y), p.push(p.length))
            }
            p.sort(function(t, e) {
                return g[t] - g[e]
            });
            for (var S = [], A = [], T = [], C = [], I = [], v = 0; v < p.length; v++) {
                var w = p[v];
                S[v] = h[w],
                A[v] = c[w],
                T[v] = u[w],
                C[v] = d[w],
                I[v] = f[w]
            }
            return {
                current: S,
                next: A,
                stackedOnCurrent: T,
                stackedOnNext: C,
                status: I
            }
        }
    },
    function(t, e, i) {
        function n(t) {
            return isNaN(t[0]) || isNaN(t[1])
        }
        function r(t, e, i, r, o, a, g, m, v, y, x) {
            for (var _ = 0,
            b = i,
            w = 0; r > w; w++) {
                var M = e[b];
                if (b >= o || 0 > b) break;
                if (n(M)) {
                    if (x) {
                        b += a;
                        continue
                    }
                    break
                }
                if (b === i) t[a > 0 ? "moveTo": "lineTo"](M[0], M[1]),
                u(f, M);
                else if (v > 0) {
                    var S = b + a,
                    A = e[S];
                    if (x) for (; A && n(e[S]);) S += a,
                    A = e[S];
                    var T = .5,
                    C = e[_],
                    A = e[S];
                    if (!A || n(A)) u(p, M);
                    else {
                        n(A) && !x && (A = M),
                        s.sub(d, A, C);
                        var I, k;
                        if ("x" === y || "y" === y) {
                            var L = "x" === y ? 0 : 1;
                            I = Math.abs(M[L] - C[L]),
                            k = Math.abs(M[L] - A[L])
                        } else I = s.dist(M, C),
                        k = s.dist(M, A);
                        T = k / (k + I),
                        c(p, M, d, -v * (1 - T))
                    }
                    l(f, f, m),
                    h(f, f, g),
                    l(p, p, m),
                    h(p, p, g),
                    t.bezierCurveTo(f[0], f[1], p[0], p[1], M[0], M[1]),
                    c(f, M, d, v * T)
                } else t.lineTo(M[0], M[1]);
                _ = b,
                b += a
            }
            return w
        }
        function o(t, e) {
            var i = [1 / 0, 1 / 0],
            n = [ - (1 / 0), -(1 / 0)];
            if (e) for (var r = 0; r < t.length; r++) {
                var o = t[r];
                o[0] < i[0] && (i[0] = o[0]),
                o[1] < i[1] && (i[1] = o[1]),
                o[0] > n[0] && (n[0] = o[0]),
                o[1] > n[1] && (n[1] = o[1])
            }
            return {
                min: e ? i: n,
                max: e ? n: i
            }
        }
        var a = i(6),
        s = i(5),
        l = s.min,
        h = s.max,
        c = s.scaleAndAdd,
        u = s.copy,
        d = [],
        f = [],
        p = [];
        t.exports = {
            Polyline: a.extend({
                type: "ec-polyline",
                shape: {
                    points: [],
                    smooth: 0,
                    smoothConstraint: !0,
                    smoothMonotone: null,
                    connectNulls: !1
                },
                style: {
                    fill: null,
                    stroke: "#000"
                },
                buildPath: function(t, e) {
                    var i = e.points,
                    a = 0,
                    s = i.length,
                    l = o(i, e.smoothConstraint);
                    if (e.connectNulls) {
                        for (; s > 0 && n(i[s - 1]); s--);
                        for (; s > a && n(i[a]); a++);
                    }
                    for (; s > a;) a += r(t, i, a, s, s, 1, l.min, l.max, e.smooth, e.smoothMonotone, e.connectNulls) + 1
                }
            }),
            Polygon: a.extend({
                type: "ec-polygon",
                shape: {
                    points: [],
                    stackedOnPoints: [],
                    smooth: 0,
                    stackedOnSmooth: 0,
                    smoothConstraint: !0,
                    smoothMonotone: null,
                    connectNulls: !1
                },
                buildPath: function(t, e) {
                    var i = e.points,
                    a = e.stackedOnPoints,
                    s = 0,
                    l = i.length,
                    h = e.smoothMonotone,
                    c = o(i, e.smoothConstraint),
                    u = o(a, e.smoothConstraint);
                    if (e.connectNulls) {
                        for (; l > 0 && n(i[l - 1]); l--);
                        for (; l > s && n(i[s]); s++);
                    }
                    for (; l > s;) {
                        var d = r(t, i, s, l, l, 1, c.min, c.max, e.smooth, h, e.connectNulls);
                        r(t, a, s + d - 1, d, l, -1, u.min, u.max, e.stackedOnSmooth, h, e.connectNulls),
                        s += d + 1,
                        t.closePath()
                    }
                }
            })
        }
    },
    function(t, e, i) {
        var n = i(1),
        r = i(2);
        i(91),
        i(92),
        i(69)("pie", [{
            type: "pieToggleSelect",
            event: "pieselectchanged",
            method: "toggleSelected"
        },
        {
            type: "pieSelect",
            event: "pieselected",
            method: "select"
        },
        {
            type: "pieUnSelect",
            event: "pieunselected",
            method: "unSelect"
        }]),
        r.registerVisualCoding("chart", n.curry(i(64), "pie")),
        r.registerLayout(n.curry(i(94), "pie")),
        r.registerProcessor("filter", n.curry(i(63), "pie"))
    },
    function(t, e, i) {
        "use strict";
        var n = i(15),
        r = i(1),
        o = i(7),
        a = i(31),
        s = i(61),
        l = i(2).extendSeriesModel({
            type: "series.pie",
            init: function(t) {
                l.superApply(this, "init", arguments),
                this.legendDataProvider = function() {
                    return this._dataBeforeProcessed
                },
                this.updateSelectedMap(t.data),
                this._defaultLabelLine(t)
            },
            mergeOption: function(t) {
                l.superCall(this, "mergeOption", t),
                this.updateSelectedMap(this.option.data)
            },
            getInitialData: function(t, e) {
                var i = a(["value"], t.data),
                r = new n(i, this);
                return r.initData(t.data),
                r
            },
            getDataParams: function(t) {
                var e = this._data,
                i = l.superCall(this, "getDataParams", t),
                n = e.getSum("value");
                return i.percent = n ? +(e.get("value", t) / n * 100).toFixed(2) : 0,
                i.$vars.push("percent"),
                i
            },
            _defaultLabelLine: function(t) {
                o.defaultEmphasis(t.labelLine, ["show"]);
                var e = t.labelLine.normal,
                i = t.labelLine.emphasis;
                e.show = e.show && t.label.normal.show,
                i.show = i.show && t.label.emphasis.show
            },
            defaultOption: {
                zlevel: 0,
                z: 2,
                legendHoverLink: !0,
                hoverAnimation: !0,
                center: ["50%", "50%"],
                radius: [0, "75%"],
                clockwise: !0,
                startAngle: 90,
                minAngle: 0,
                selectedOffset: 10,
                avoidLabelOverlap: !0,
                label: {
                    normal: {
                        rotate: !1,
                        show: !0,
                        position: "outer"
                    },
                    emphasis: {}
                },
                labelLine: {
                    normal: {
                        show: !0,
                        length: 15,
                        length2: 15,
                        smooth: !1,
                        lineStyle: {
                            width: 1,
                            type: "solid"
                        }
                    }
                },
                itemStyle: {
                    normal: {
                        borderColor: "rgba(0,0,0,0)",
                        borderWidth: 1
                    },
                    emphasis: {
                        borderColor: "rgba(0,0,0,0)",
                        borderWidth: 1
                    }
                },
                animationEasing: "cubicOut",
                data: []
            }
        });
        r.mixin(l, s),
        t.exports = l
    },
    function(t, e, i) {
        function n(t, e, i, n) {
            var o = e.getData(),
            a = this.dataIndex,
            s = o.getName(a),
            l = e.get("selectedOffset");
            n.dispatchAction({
                type: "pieToggleSelect",
                from: t,
                name: s,
                seriesId: e.id
            }),
            o.each(function(t) {
                r(o.getItemGraphicEl(t), o.getItemLayout(t), e.isSelected(o.getName(t)), l, i)
            })
        }
        function r(t, e, i, n, r) {
            var o = (e.startAngle + e.endAngle) / 2,
            a = Math.cos(o),
            s = Math.sin(o),
            l = i ? n: 0,
            h = [a * l, s * l];
            r ? t.animate().when(200, {
                position: h
            }).start("bounceOut") : t.attr("position", h)
        }
        function o(t, e) {
            function i() {
                o.ignore = o.hoverIgnore,
                a.ignore = a.hoverIgnore
            }
            function n() {
                o.ignore = o.normalIgnore,
                a.ignore = a.normalIgnore
            }
            s.Group.call(this);
            var r = new s.Sector({
                z2: 2
            }),
            o = new s.Polyline,
            a = new s.Text;
            this.add(r),
            this.add(o),
            this.add(a),
            this.updateData(t, e, !0),
            this.on("emphasis", i).on("normal", n).on("mouseover", i).on("mouseout", n)
        }
        function a(t, e, i, n, r) {
            var o = n.getModel("textStyle"),
            a = "inside" === r || "inner" === r;
            return {
                fill: o.getTextColor() || (a ? "#fff": t.getItemVisual(e, "color")),
                opacity: t.getItemVisual(e, "opacity"),
                textFont: o.getFont(),
                text: l.retrieve(t.hostModel.getFormattedLabel(e, i), t.getName(e))
            }
        }
        var s = i(3),
        l = i(1),
        h = o.prototype;
        h.updateData = function(t, e, i) {
            function n() {
                a.stopAnimation(!0),
                a.animateTo({
                    shape: {
                        r: u.r + 10
                    }
                },
                300, "elasticOut")
            }
            function o() {
                a.stopAnimation(!0),
                a.animateTo({
                    shape: {
                        r: u.r
                    }
                },
                300, "elasticOut")
            }
            var a = this.childAt(0),
            h = t.hostModel,
            c = t.getItemModel(e),
            u = t.getItemLayout(e),
            d = l.extend({},
            u);
            d.label = null,
            i ? (a.setShape(d), a.shape.endAngle = u.startAngle, s.updateProps(a, {
                shape: {
                    endAngle: u.endAngle
                }
            },
            h, e)) : s.updateProps(a, {
                shape: d
            },
            h, e);
            var f = c.getModel("itemStyle"),
            p = t.getItemVisual(e, "color");
            a.useStyle(l.defaults({
                fill: p
            },
            f.getModel("normal").getItemStyle())),
            a.hoverStyle = f.getModel("emphasis").getItemStyle(),
            r(this, t.getItemLayout(e), c.get("selected"), h.get("selectedOffset"), h.get("animation")),
            a.off("mouseover").off("mouseout").off("emphasis").off("normal"),
            c.get("hoverAnimation") && a.on("mouseover", n).on("mouseout", o).on("emphasis", n).on("normal", o),
            this._updateLabel(t, e),
            s.setHoverStyle(this)
        },
        h._updateLabel = function(t, e) {
            var i = this.childAt(1),
            n = this.childAt(2),
            r = t.hostModel,
            o = t.getItemModel(e),
            l = t.getItemLayout(e),
            h = l.label,
            c = t.getItemVisual(e, "color");
            s.updateProps(i, {
                shape: {
                    points: h.linePoints || [[h.x, h.y], [h.x, h.y], [h.x, h.y]]
                }
            },
            r, e),
            s.updateProps(n, {
                style: {
                    x: h.x,
                    y: h.y
                }
            },
            r, e),
            n.attr({
                style: {
                    textVerticalAlign: h.verticalAlign,
                    textAlign: h.textAlign,
                    textFont: h.font
                },
                rotation: h.rotation,
                origin: [h.x, h.y],
                z2: 10
            });
            var u = o.getModel("label.normal"),
            d = o.getModel("label.emphasis"),
            f = o.getModel("labelLine.normal"),
            p = o.getModel("labelLine.emphasis"),
            g = u.get("position") || d.get("position");
            n.setStyle(a(t, e, "normal", u, g)),
            n.ignore = n.normalIgnore = !u.get("show"),
            n.hoverIgnore = !d.get("show"),
            i.ignore = i.normalIgnore = !f.get("show"),
            i.hoverIgnore = !p.get("show"),
            i.setStyle({
                stroke: c,
                opacity: t.getItemVisual(e, "opacity")
            }),
            i.setStyle(f.getModel("lineStyle").getLineStyle()),
            n.hoverStyle = a(t, e, "emphasis", d, g),
            i.hoverStyle = p.getModel("lineStyle").getLineStyle();
            var m = f.get("smooth");
            m && m === !0 && (m = .4),
            i.setShape({
                smooth: m
            })
        },
        l.inherits(o, s.Group);
        var c = i(26).extend({
            type: "pie",
            init: function() {
                var t = new s.Group;
                this._sectorGroup = t
            },
            render: function(t, e, i, r) {
                if (!r || r.from !== this.uid) {
                    var a = t.getData(),
                    s = this._data,
                    h = this.group,
                    c = e.get("animation"),
                    u = !s,
                    d = l.curry(n, this.uid, t, c, i),
                    f = t.get("selectedMode");
                    if (a.diff(s).add(function(t) {
                        var e = new o(a, t);
                        u && e.eachChild(function(t) {
                            t.stopAnimation(!0)
                        }),
                        f && e.on("click", d),
                        a.setItemGraphicEl(t, e),
                        h.add(e)
                    }).update(function(t, e) {
                        var i = s.getItemGraphicEl(e);
                        i.updateData(a, t),
                        i.off("click"),
                        f && i.on("click", d),
                        h.add(i),
                        a.setItemGraphicEl(t, i)
                    }).remove(function(t) {
                        var e = s.getItemGraphicEl(t);
                        h.remove(e)
                    }).execute(), c && u && a.count() > 0) {
                        var p = a.getItemLayout(0),
                        g = Math.max(i.getWidth(), i.getHeight()) / 2,
                        m = l.bind(h.removeClipPath, h);
                        h.setClipPath(this._createClipPath(p.cx, p.cy, g, p.startAngle, p.clockwise, m, t))
                    }
                    this._data = a
                }
            },
            _createClipPath: function(t, e, i, n, r, o, a) {
                var l = new s.Sector({
                    shape: {
                        cx: t,
                        cy: e,
                        r0: 0,
                        r: i,
                        startAngle: n,
                        endAngle: n,
                        clockwise: r
                    }
                });
                return s.initProps(l, {
                    shape: {
                        endAngle: n + (r ? 1 : -1) * Math.PI * 2
                    }
                },
                a, o),
                l
            }
        });
        t.exports = c
    },
    function(t, e, i) {
        "use strict";
        function n(t, e, i, n, r, o, a) {
            function s(e, i, n, r) {
                for (var o = e; i > o; o++) if (t[o].y += n, o > e && i > o + 1 && t[o + 1].y > t[o].y + t[o].height) return void l(o, n / 2);
                l(i - 1, n / 2)
            }
            function l(e, i) {
                for (var n = e; n >= 0 && (t[n].y -= i, !(n > 0 && t[n].y > t[n - 1].y + t[n - 1].height)); n--);
            }
            function h(t, e, i, n, r, o) {
                for (var a = o > 0 ? e ? Number.MAX_VALUE: 0 : e ? Number.MAX_VALUE: 0, s = 0, l = t.length; l > s; s++) if ("center" !== t[s].position) {
                    var h = Math.abs(t[s].y - n),
                    c = t[s].len,
                    u = t[s].len2,
                    d = r + c > h ? Math.sqrt((r + c + u) * (r + c + u) - h * h) : Math.abs(t[s].x - i);
                    e && d >= a && (d = a - 10),
                    !e && a >= d && (d = a + 10),
                    t[s].x = i + d * o,
                    a = d
                }
            }
            t.sort(function(t, e) {
                return t.y - e.y
            });
            for (var c, u = 0,
            d = t.length,
            f = [], p = [], g = 0; d > g; g++) c = t[g].y - u,
            0 > c && s(g, d, -c, r),
            u = t[g].y + t[g].height;
            0 > a - u && l(d - 1, u - a);
            for (var g = 0; d > g; g++) t[g].y >= i ? p.push(t[g]) : f.push(t[g]);
            h(f, !1, e, i, n, r),
            h(p, !0, e, i, n, r)
        }
        function r(t, e, i, r, o, a) {
            for (var s = [], l = [], h = 0; h < t.length; h++) t[h].x < e ? s.push(t[h]) : l.push(t[h]);
            n(l, e, i, r, 1, o, a),
            n(s, e, i, r, -1, o, a);
            for (var h = 0; h < t.length; h++) {
                var c = t[h].linePoints;
                if (c) {
                    var u = c[1][0] - c[2][0];
                    t[h].x < e ? c[2][0] = t[h].x + 3 : c[2][0] = t[h].x - 3,
                    c[1][1] = c[2][1] = t[h].y,
                    c[1][0] = c[2][0] + u
                }
            }
        }
        var o = i(18);
        t.exports = function(t, e, i, n) {
            var a, s, l = t.getData(),
            h = [],
            c = !1;
            l.each(function(i) {
                var n, r, u, d, f = l.getItemLayout(i),
                p = l.getItemModel(i),
                g = p.getModel("label.normal"),
                m = g.get("position") || p.get("label.emphasis.position"),
                v = p.getModel("labelLine.normal"),
                y = v.get("length"),
                x = v.get("length2"),
                _ = (f.startAngle + f.endAngle) / 2,
                b = Math.cos(_),
                w = Math.sin(_);
                a = f.cx,
                s = f.cy;
                var M = "inside" === m || "inner" === m;
                if ("center" === m) n = f.cx,
                r = f.cy,
                d = "center";
                else {
                    var S = (M ? (f.r + f.r0) / 2 * b: f.r * b) + a,
                    A = (M ? (f.r + f.r0) / 2 * w: f.r * w) + s;
                    if (n = S + 3 * b, r = A + 3 * w, !M) {
                        var T = S + b * (y + e - f.r),
                        C = A + w * (y + e - f.r),
                        I = T + (0 > b ? -1 : 1) * x,
                        k = C;
                        n = I + (0 > b ? -5 : 5),
                        r = k,
                        u = [[S, A], [T, C], [I, k]]
                    }
                    d = M ? "center": b > 0 ? "left": "right"
                }
                var L = g.getModel("textStyle").getFont(),
                D = g.get("rotate") ? 0 > b ? -_ + Math.PI: -_: 0,
                P = t.getFormattedLabel(i, "normal") || l.getName(i),
                O = o.getBoundingRect(P, L, d, "top");
                c = !!D,
                f.label = {
                    x: n,
                    y: r,
                    position: m,
                    height: O.height,
                    len: y,
                    len2: x,
                    linePoints: u,
                    textAlign: d,
                    verticalAlign: "middle",
                    font: L,
                    rotation: D
                },
                M || h.push(f.label)
            }),
            !c && t.get("avoidLabelOverlap") && r(h, a, s, e, i, n)
        }
    },
    function(t, e, i) {
        var n = i(4),
        r = n.parsePercent,
        o = i(93),
        a = i(1),
        s = 2 * Math.PI,
        l = Math.PI / 180;
        t.exports = function(t, e, i) {
            e.eachSeriesByType(t,
            function(t) {
                var e = t.get("center"),
                h = t.get("radius");
                a.isArray(h) || (h = [0, h]),
                a.isArray(e) || (e = [e, e]);
                var c = i.getWidth(),
                u = i.getHeight(),
                d = Math.min(c, u),
                f = r(e[0], c),
                p = r(e[1], u),
                g = r(h[0], d / 2),
                m = r(h[1], d / 2),
                v = t.getData(),
                y = -t.get("startAngle") * l,
                x = t.get("minAngle") * l,
                _ = v.getSum("value"),
                b = Math.PI / (_ || v.count()) * 2,
                w = t.get("clockwise"),
                M = t.get("roseType"),
                S = v.getDataExtent("value");
                S[0] = 0;
                var A = s,
                T = 0,
                C = y,
                I = w ? 1 : -1;
                if (v.each("value",
                function(t, e) {
                    var i;
                    i = "area" !== M ? 0 === _ ? b: t * b: s / (v.count() || 1),
                    x > i ? (i = x, A -= x) : T += t;
                    var r = C + I * i;
                    v.setItemLayout(e, {
                        angle: i,
                        startAngle: C,
                        endAngle: r,
                        clockwise: w,
                        cx: f,
                        cy: p,
                        r0: g,
                        r: M ? n.linearMap(t, S, [g, m]) : m
                    }),
                    C = r
                },
                !0), s > A) if (.001 >= A) {
                    var k = s / v.count();
                    v.each(function(t) {
                        var e = v.getItemLayout(t);
                        e.startAngle = y + I * t * k,
                        e.endAngle = y + I * (t + 1) * k
                    })
                } else b = A / T,
                C = y,
                v.each("value",
                function(t, e) {
                    var i = v.getItemLayout(e),
                    n = i.angle === x ? x: t * b;
                    i.startAngle = C,
                    i.endAngle = C + I * n,
                    C += n
                });
                o(t, m, c, u)
            })
        }
    },
    function(t, e, i) {
        "use strict";
        i(51),
        i(96)
    },
    function(t, e, i) {
        function n(t, e) {
            function i(t, e) {
                var i = n.getAxis(t);
                return i.toGlobalCoord(i.dataToCoord(0))
            }
            var n = t.coordinateSystem,
            r = e.axis,
            o = {},
            a = r.position,
            s = r.onZero ? "onZero": a,
            l = r.dim,
            h = n.getRect(),
            c = [h.x, h.x + h.width, h.y, h.y + h.height],
            u = {
                x: {
                    top: c[2],
                    bottom: c[3]
                },
                y: {
                    left: c[0],
                    right: c[1]
                }
            };
            u.x.onZero = Math.max(Math.min(i("y"), u.x.bottom), u.x.top),
            u.y.onZero = Math.max(Math.min(i("x"), u.y.right), u.y.left),
            o.position = ["y" === l ? u.y[s] : c[0], "x" === l ? u.x[s] : c[3]];
            var d = {
                x: 0,
                y: 1
            };
            o.rotation = Math.PI / 2 * d[l];
            var f = {
                top: -1,
                bottom: 1,
                left: -1,
                right: 1
            };
            o.labelDirection = o.tickDirection = o.nameDirection = f[a],
            r.onZero && (o.labelOffset = u[l][a] - u[l].onZero),
            e.getModel("axisTick").get("inside") && (o.tickDirection = -o.tickDirection),
            e.getModel("axisLabel").get("inside") && (o.labelDirection = -o.labelDirection);
            var p = e.getModel("axisLabel").get("rotate");
            return o.labelRotation = "top" === s ? -p: p,
            o.labelInterval = r.getLabelInterval(),
            o.z2 = 1,
            o
        }
        var r = i(1),
        o = i(3),
        a = i(49),
        s = a.ifIgnoreOnTick,
        l = a.getInterval,
        h = ["axisLine", "axisLabel", "axisTick", "axisName"],
        c = ["splitLine", "splitArea"],
        u = i(2).extendComponentView({
            type: "axis",
            render: function(t, e) {
                if (this.group.removeAll(), t.get("show")) {
                    var i = e.getComponent("grid", t.get("gridIndex")),
                    o = n(i, t),
                    s = new a(t, o);
                    r.each(h, s.add, s),
                    this.group.add(s.getGroup()),
                    r.each(c,
                    function(e) {
                        t.get(e + ".show") && this["_" + e](t, i, o.labelInterval)
                    },
                    this)
                }
            },
            _splitLine: function(t, e, i) {
                var n = t.axis,
                a = t.getModel("splitLine"),
                h = a.getModel("lineStyle"),
                c = h.get("width"),
                u = h.get("color"),
                d = l(a, i);
                u = r.isArray(u) ? u: [u];
                for (var f = e.coordinateSystem.getRect(), p = n.isHorizontal(), g = [], m = 0, v = n.getTicksCoords(), y = [], x = [], _ = 0; _ < v.length; _++) if (!s(n, _, d)) {
                    var b = n.toGlobalCoord(v[_]);
                    p ? (y[0] = b, y[1] = f.y, x[0] = b, x[1] = f.y + f.height) : (y[0] = f.x, y[1] = b, x[0] = f.x + f.width, x[1] = b);
                    var w = m++%u.length;
                    g[w] = g[w] || [],
                    g[w].push(new o.Line(o.subPixelOptimizeLine({
                        shape: {
                            x1: y[0],
                            y1: y[1],
                            x2: x[0],
                            y2: x[1]
                        },
                        style: {
                            lineWidth: c
                        },
                        silent: !0
                    })))
                }
                for (var M = h.getLineStyle(), _ = 0; _ < g.length; _++) this.group.add(o.mergePath(g[_], {
                    style: r.defaults({
                        stroke: u[_ % u.length]
                    },
                    M),
                    silent: !0
                }))
            },
            _splitArea: function(t, e, i) {
                var n = t.axis,
                a = t.getModel("splitArea"),
                h = a.getModel("areaStyle"),
                c = h.get("color"),
                u = e.coordinateSystem.getRect(),
                d = n.getTicksCoords(),
                f = n.toGlobalCoord(d[0]),
                p = n.toGlobalCoord(d[0]),
                g = [],
                m = 0,
                v = l(a, i);
                c = r.isArray(c) ? c: [c];
                for (var y = 1; y < d.length; y++) if (!s(n, y, v)) {
                    var x, _, b, w, M = n.toGlobalCoord(d[y]);
                    n.isHorizontal() ? (x = f, _ = u.y, b = M - x, w = u.height) : (x = u.x, _ = p, b = u.width, w = M - _);
                    var S = m++%c.length;
                    g[S] = g[S] || [],
                    g[S].push(new o.Rect({
                        shape: {
                            x: x,
                            y: _,
                            width: b,
                            height: w
                        },
                        silent: !0
                    })),
                    f = x + b,
                    p = _ + w
                }
                for (var A = h.getAreaStyle(), y = 0; y < g.length; y++) this.group.add(o.mergePath(g[y], {
                    style: r.defaults({
                        fill: c[y % c.length]
                    },
                    A),
                    silent: !0
                }))
            }
        });
        u.extend({
            type: "xAxis"
        }),
        u.extend({
            type: "yAxis"
        })
    },
    function(t, e, i) {
        var n = i(1),
        r = i(7),
        o = i(2);
        o.registerAction("dataZoom",
        function(t, e) {
            var i = r.createLinkedNodesFinder(n.bind(e.eachComponent, e, "dataZoom"), r.eachAxisDim,
            function(t, e) {
                return t.get(e.axisIndex)
            }),
            o = [];
            e.eachComponent({
                mainType: "dataZoom",
                query: t
            },
            function(t, e) {
                o.push.apply(o, i(t).nodes)
            }),
            n.each(o,
            function(e, i) {
                e.setRawRange({
                    start: t.start,
                    end: t.end,
                    startValue: t.startValue,
                    endValue: t.endValue
                })
            })
        })
    },
    function(t, e, i) {
        function n(t, e, i) {
            i.getAxisProxy(t.name, e).reset(i)
        }
        function r(t, e, i) {
            i.getAxisProxy(t.name, e).filterData(i)
        }
        var o = i(2);
        o.registerProcessor("filter",
        function(t, e) {
            t.eachComponent("dataZoom",
            function(t) {
                t.eachTargetAxis(n),
                t.eachTargetAxis(r)
            }),
            t.eachComponent("dataZoom",
            function(t) {
                var e = t.findRepresentativeAxisProxy(),
                i = e.getDataPercentWindow(),
                n = e.getDataValueWindow();
                t.setRawRange({
                    start: i[0],
                    end: i[1],
                    startValue: n[0],
                    endValue: n[1]
                })
            })
        })
    },
    function(t, e, i) {
        function n(t) {
            var e = t[a];
            return e || (e = t[a] = [{}]),
            e
        }
        var r = i(1),
        o = r.each,
        a = "\x00_ec_hist_store",
        s = {
            push: function(t, e) {
                var i = n(t);
                o(e,
                function(e, n) {
                    for (var r = i.length - 1; r >= 0; r--) {
                        var o = i[r];
                        if (o[n]) break
                    }
                    if (0 > r) {
                        var a = t.queryComponents({
                            mainType: "dataZoom",
                            subType: "select",
                            id: n
                        })[0];
                        if (a) {
                            var s = a.getPercentRange();
                            i[0][n] = {
                                dataZoomId: n,
                                start: s[0],
                                end: s[1]
                            }
                        }
                    }
                }),
                i.push(e)
            },
            pop: function(t) {
                var e = n(t),
                i = e[e.length - 1];
                e.length > 1 && e.pop();
                var r = {};
                return o(i,
                function(t, i) {
                    for (var n = e.length - 1; n >= 0; n--) {
                        var t = e[n][i];
                        if (t) {
                            r[i] = t;
                            break
                        }
                    }
                }),
                r
            },
            clear: function(t) {
                t[a] = null
            },
            count: function(t) {
                return n(t).length
            }
        };
        t.exports = s
    },
    function(t, e, i) {
        i(10).registerSubTypeDefaulter("dataZoom",
        function(t) {
            return "slider"
        })
    },
    function(t, e) {
        function i(t) {
            return t[n] || (t[n] = {})
        }
        var n = "\x00_ec_interaction_mutex",
        r = {
            take: function(t, e) {
                i(e)[t] = !0
            },
            release: function(t, e) {
                i(e)[t] = !1
            },
            isTaken: function(t, e) {
                return !! i(e)[t]
            }
        };
        t.exports = r
    },
    function(t, e, i) {
        function n(t, e, i) {
            r.positionGroup(t, e.getBoxLayoutParams(), {
                width: i.getWidth(),
                height: i.getHeight()
            },
            e.get("padding"))
        }
        var r = i(11),
        o = i(9),
        a = i(3);
        t.exports = {
            layout: function(t, e, i) {
                var o = r.getLayoutRect(e.getBoxLayoutParams(), {
                    width: i.getWidth(),
                    height: i.getHeight()
                },
                e.get("padding"));
                r.box(e.get("orient"), t, e.get("itemGap"), o.width, o.height),
                n(t, e, i)
            },
            addBackground: function(t, e) {
                var i = o.normalizeCssArray(e.get("padding")),
                n = t.getBoundingRect(),
                r = e.getItemStyle(["color", "opacity"]);
                r.fill = e.get("backgroundColor");
                var s = new a.Rect({
                    shape: {
                        x: n.x - i[3],
                        y: n.y - i[0],
                        width: n.width + i[1] + i[3],
                        height: n.height + i[0] + i[2]
                    },
                    style: r,
                    silent: !0,
                    z2: -1
                });
                a.subPixelOptimizeRect(s),
                t.add(s)
            }
        }
    },
    function(t, e, i) {
        function n(t, e, i) {
            var n = -1;
            do n = Math.max(a.getPrecision(t.get(e, i)), n),
            t = t.stackedOn;
            while (t);
            return n
        }
        function r(t, e, i, r, o, a) {
            var s = [],
            l = p(e, r, t),
            h = e.indexOfNearest(r, l, !0);
            s[o] = e.get(i, h, !0),
            s[a] = e.get(r, h, !0);
            var c = n(e, r, h);
            return c >= 0 && (s[a] = +s[a].toFixed(c)),
            s
        }
        var o = i(1),
        a = i(4),
        s = o.indexOf,
        l = o.curry,
        h = {
            min: l(r, "min"),
            max: l(r, "max"),
            average: l(r, "average")
        },
        c = function(t, e) {
            var i = t.getData(),
            n = t.coordinateSystem;
            if (e && (isNaN(parseFloat(e.x)) || isNaN(parseFloat(e.y))) && !o.isArray(e.coord) && n) {
                var r = u(e, i, n, t);
                if (e = o.clone(e), e.type && h[e.type] && r.baseAxis && r.valueAxis) {
                    var a = n.dimensions,
                    l = s(a, r.baseAxis.dim),
                    c = s(a, r.valueAxis.dim);
                    e.coord = h[e.type](i, r.baseDataDim, r.valueDataDim, l, c),
                    e.value = e.coord[c]
                } else e.coord = [null != e.xAxis ? e.xAxis: e.radiusAxis, null != e.yAxis ? e.yAxis: e.angleAxis]
            }
            return e
        },
        u = function(t, e, i, n) {
            var r = {};
            return null != t.valueIndex || null != t.valueDim ? (r.valueDataDim = null != t.valueIndex ? e.getDimension(t.valueIndex) : t.valueDim, r.valueAxis = i.getAxis(n.dataDimToCoordDim(r.valueDataDim)), r.baseAxis = i.getOtherAxis(r.valueAxis), r.baseDataDim = n.coordDimToDataDim(r.baseAxis.dim)[0]) : (r.baseAxis = n.getBaseAxis(), r.valueAxis = i.getOtherAxis(r.baseAxis), r.baseDataDim = n.coordDimToDataDim(r.baseAxis.dim)[0], r.valueDataDim = n.coordDimToDataDim(r.valueAxis.dim)[0]),
            r
        },
        d = function(t, e) {
            return t && t.containData && e.coord && (null == e.x || null == e.y) ? t.containData(e.coord) : !0
        },
        f = function(t, e, i, n) {
            return 2 > n ? t.coord && t.coord[n] : t.value
        },
        p = function(t, e, i) {
            return "average" === i ? t.getSum(e, !0) / t.count() : t.getDataExtent(e, !0)["max" === i ? 1 : 0]
        };
        t.exports = {
            dataTransform: c,
            dataFilter: d,
            dimValueGetter: f,
            getAxisInfo: u,
            numCalculate: p
        }
    },
    function(t, e, i) {
        var n = i(1),
        r = i(43),
        o = i(108),
        a = function(t, e, i, n, o) {
            r.call(this, t, e, i),
            this.type = n || "value",
            this.position = o || "bottom"
        };
        a.prototype = {
            constructor: a,
            index: 0,
            onZero: !1,
            model: null,
            isHorizontal: function() {
                var t = this.position;
                return "top" === t || "bottom" === t
            },
            getGlobalExtent: function() {
                var t = this.getExtent();
                return t[0] = this.toGlobalCoord(t[0]),
                t[1] = this.toGlobalCoord(t[1]),
                t
            },
            getLabelInterval: function() {
                var t = this._labelInterval;
                return t || (t = this._labelInterval = o(this)),
                t
            },
            isLabelIgnored: function(t) {
                if ("category" === this.type) {
                    var e = this.getLabelInterval();
                    return "function" == typeof e && !e(t, this.scale.getLabel(t)) || t % (e + 1)
                }
            },
            toLocalCoord: null,
            toGlobalCoord: null
        },
        n.inherits(a, r),
        t.exports = a
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            return this._axes[t]
        }
        var r = i(1),
        o = function(t) {
            this._axes = {},
            this._dimList = [],
            this.name = t || ""
        };
        o.prototype = {
            constructor: o,
            type: "cartesian",
            getAxis: function(t) {
                return this._axes[t]
            },
            getAxes: function() {
                return r.map(this._dimList, n, this)
            },
            getAxesByScale: function(t) {
                return t = t.toLowerCase(),
                r.filter(this.getAxes(),
                function(e) {
                    return e.scale.type === t
                })
            },
            addAxis: function(t) {
                var e = t.dim;
                this._axes[e] = t,
                this._dimList.push(e)
            },
            dataToCoord: function(t) {
                return this._dataCoordConvert(t, "dataToCoord")
            },
            coordToData: function(t) {
                return this._dataCoordConvert(t, "coordToData")
            },
            _dataCoordConvert: function(t, e) {
                for (var i = this._dimList,
                n = t instanceof Array ? [] : {},
                r = 0; r < i.length; r++) {
                    var o = i[r],
                    a = this._axes[o];
                    n[o] = a[e](t[o])
                }
                return n
            }
        },
        t.exports = o
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            o.call(this, t)
        }
        var r = i(1),
        o = i(105);
        n.prototype = {
            constructor: n,
            type: "cartesian2d",
            dimensions: ["x", "y"],
            getBaseAxis: function() {
                return this.getAxesByScale("ordinal")[0] || this.getAxesByScale("time")[0] || this.getAxis("x")
            },
            containPoint: function(t) {
                var e = this.getAxis("x"),
                i = this.getAxis("y");
                return e.contain(e.toLocalCoord(t[0])) && i.contain(i.toLocalCoord(t[1]))
            },
            containData: function(t) {
                return this.getAxis("x").containData(t[0]) && this.getAxis("y").containData(t[1])
            },
            dataToPoints: function(t, e) {
                return t.mapArray(["x", "y"],
                function(t, e) {
                    return this.dataToPoint([t, e])
                },
                e, this)
            },
            dataToPoint: function(t, e) {
                var i = this.getAxis("x"),
                n = this.getAxis("y");
                return [i.toGlobalCoord(i.dataToCoord(t[0], e)), n.toGlobalCoord(n.dataToCoord(t[1], e))]
            },
            pointToData: function(t, e) {
                var i = this.getAxis("x"),
                n = this.getAxis("y");
                return [i.coordToData(i.toLocalCoord(t[0]), e), n.coordToData(n.toLocalCoord(t[1]), e)]
            },
            getOtherAxis: function(t) {
                return this.getAxis("x" === t.dim ? "y": "x")
            }
        },
        r.inherits(n, o),
        t.exports = n
    },
    function(t, e, i) {
        "use strict";
        i(51);
        var n = i(10);
        t.exports = n.extend({
            type: "grid",
            dependencies: ["xAxis", "yAxis"],
            layoutMode: "box",
            coordinateSystem: null,
            defaultOption: {
                show: !1,
                zlevel: 0,
                z: 0,
                left: "10%",
                top: 60,
                right: "10%",
                bottom: 60,
                containLabel: !1,
                backgroundColor: "rgba(0,0,0,0)",
                borderWidth: 1,
                borderColor: "#ccc"
            }
        })
    },
    function(t, e, i) {
        "use strict";
        var n = i(1),
        r = i(24);
        t.exports = function(t) {
            var e = t.model,
            i = e.getModel("axisLabel"),
            o = i.get("interval");
            return "category" !== t.type || "auto" !== o ? "auto" === o ? 0 : o: r.getAxisLabelInterval(n.map(t.scale.getTicks(), t.dataToCoord, t), e.getFormattedLabels(), i.getModel("textStyle").getFont(), t.isHorizontal())
        }
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            return t.get("stack") || "__ec_stack_" + t.seriesIndex
        }
        function r(t, e) {
            var i = {};
            a.each(t,
            function(t, e) {
                var r = t.coordinateSystem,
                o = r.getBaseAxis(),
                a = i[o.index] || {
                    remainedWidth: o.getBandWidth(),
                    autoWidthCount: 0,
                    categoryGap: "20%",
                    gap: "30%",
                    axis: o,
                    stacks: {}
                },
                s = a.stacks;
                i[o.index] = a;
                var l = n(t);
                s[l] || a.autoWidthCount++,
                s[l] = s[l] || {
                    width: 0,
                    maxWidth: 0
                };
                var h = t.get("barWidth"),
                c = t.get("barMaxWidth"),
                u = t.get("barGap"),
                d = t.get("barCategoryGap");
                h && !s[l].width && (h = Math.min(a.remainedWidth, h), s[l].width = h, a.remainedWidth -= h),
                c && (s[l].maxWidth = c),
                null != u && (a.gap = u),
                null != d && (a.categoryGap = d)
            });
            var r = {};
            return a.each(i,
            function(t, e) {
                r[e] = {};
                var i = t.stacks,
                n = t.axis,
                o = n.getBandWidth(),
                s = l(t.categoryGap, o),
                h = l(t.gap, 1),
                c = t.remainedWidth,
                u = t.autoWidthCount,
                d = (c - s) / (u + (u - 1) * h);
                d = Math.max(d, 0),
                a.each(i,
                function(t, e) {
                    var i = t.maxWidth; ! t.width && i && d > i && (i = Math.min(i, c), c -= i, t.width = i, u--)
                }),
                d = (c - s) / (u + (u - 1) * h),
                d = Math.max(d, 0);
                var f, p = 0;
                a.each(i,
                function(t, e) {
                    t.width || (t.width = d),
                    f = t,
                    p += t.width * (1 + h)
                }),
                f && (p -= f.width * h);
                var g = -p / 2;
                a.each(i,
                function(t, i) {
                    r[e][i] = r[e][i] || {
                        offset: g,
                        width: t.width
                    },
                    g += t.width * (1 + h)
                })
            }),
            r
        }
        function o(t, e, i) {
            var o = r(a.filter(e.getSeriesByType(t),
            function(t) {
                return ! e.isSeriesFiltered(t) && t.coordinateSystem && "cartesian2d" === t.coordinateSystem.type
            })),
            s = {};
            e.eachSeriesByType(t,
            function(t) {
                var e = t.getData(),
                i = t.coordinateSystem,
                r = i.getBaseAxis(),
                a = n(t),
                l = o[r.index][a],
                h = l.offset,
                c = l.width,
                u = i.getOtherAxis(r),
                d = t.get("barMinHeight") || 0,
                f = r.onZero ? u.toGlobalCoord(u.dataToCoord(0)) : u.getGlobalExtent()[0],
                p = i.dataToPoints(e, !0);
                s[a] = s[a] || [],
                e.setLayout({
                    offset: h,
                    size: c
                }),
                e.each(u.dim,
                function(t, i) {
                    if (!isNaN(t)) {
                        s[a][i] || (s[a][i] = {
                            p: f,
                            n: f
                        });
                        var n, r, o, l, g = t >= 0 ? "p": "n",
                        m = p[i],
                        v = s[a][i][g];
                        u.isHorizontal() ? (n = v, r = m[1] + h, o = m[0] - v, l = c, Math.abs(o) < d && (o = (0 > o ? -1 : 1) * d), s[a][i][g] += o) : (n = m[0] + h, r = v, o = c, l = m[1] - v, Math.abs(l) < d && (l = (0 >= l ? -1 : 1) * d), s[a][i][g] += l),
                        e.setItemLayout(i, {
                            x: n,
                            y: r,
                            width: o,
                            height: l
                        })
                    }
                },
                !0)
            },
            this)
        }
        var a = i(1),
        s = i(4),
        l = s.parsePercent;
        t.exports = o
    },
    function(t, e, i) {
        var n = i(3),
        r = i(1),
        o = Math.PI;
        t.exports = function(t, e) {
            e = e || {},
            r.defaults(e, {
                text: "loading",
                color: "#c23531",
                textColor: "#000",
                maskColor: "rgba(255, 255, 255, 0.8)",
                zlevel: 0
            });
            var i = new n.Rect({
                style: {
                    fill: e.maskColor
                },
                zlevel: e.zlevel,
                z: 1e4
            }),
            a = new n.Arc({
                shape: {
                    startAngle: -o / 2,
                    endAngle: -o / 2 + .1,
                    r: 10
                },
                style: {
                    stroke: e.color,
                    lineCap: "round",
                    lineWidth: 5
                },
                zlevel: e.zlevel,
                z: 10001
            }),
            s = new n.Rect({
                style: {
                    fill: "none",
                    text: e.text,
                    textPosition: "right",
                    textDistance: 10,
                    textFill: e.textColor
                },
                zlevel: e.zlevel,
                z: 10001
            });
            a.animateShape(!0).when(1e3, {
                endAngle: 3 * o / 2
            }).start("circularInOut"),
            a.animateShape(!0).when(1e3, {
                startAngle: 3 * o / 2
            }).delay(300).start("circularInOut");
            var l = new n.Group;
            return l.add(a),
            l.add(s),
            l.add(i),
            l.resize = function() {
                var e = t.getWidth() / 2,
                n = t.getHeight() / 2;
                a.setShape({
                    cx: e,
                    cy: n
                });
                var r = a.shape.r;
                s.setShape({
                    x: e - r,
                    y: n - r,
                    width: 2 * r,
                    height: 2 * r
                }),
                i.setShape({
                    x: 0,
                    y: 0,
                    width: t.getWidth(),
                    height: t.getHeight()
                })
            },
            l.resize(),
            l
        }
    },
    function(t, e, i) {
        function n(t, e) {
            for (var i in e) _.hasClass(i) || ("object" == typeof e[i] ? t[i] = t[i] ? u.merge(t[i], e[i], !1) : u.clone(e[i]) : null == t[i] && (t[i] = e[i]))
        }
        function r(t) {
            t = t,
            this.option = {},
            this.option[w] = 1,
            this._componentsMap = {},
            this._seriesIndices = null,
            n(t, this._theme.option),
            u.merge(t, b, !1),
            this.mergeOption(t)
        }
        function o(t, e) {
            u.isArray(e) || (e = e ? [e] : []);
            var i = {};
            return p(e,
            function(e) {
                i[e] = (t[e] || []).slice()
            }),
            i
        }
        function a(t, e) {
            var i = {};
            p(e,
            function(t, e) {
                var n = t.exist;
                n && (i[n.id] = t)
            }),
            p(e,
            function(e, n) {
                var r = e.option;
                if (u.assert(!r || null == r.id || !i[r.id] || i[r.id] === e, "id duplicates: " + (r && r.id)), r && null != r.id && (i[r.id] = e), x(r)) {
                    var o = s(t, r, e.exist);
                    e.keyInfo = {
                        mainType: t,
                        subType: o
                    }
                }
            }),
            p(e,
            function(t, e) {
                var n = t.exist,
                r = t.option,
                o = t.keyInfo;
                if (x(r)) {
                    if (o.name = null != r.name ? r.name + "": n ? n.name: "\x00-", n) o.id = n.id;
                    else if (null != r.id) o.id = r.id + "";
                    else {
                        var a = 0;
                        do o.id = "\x00" + o.name + "\x00" + a++;
                        while (i[o.id])
                    }
                    i[o.id] = t
                }
            })
        }
        function s(t, e, i) {
            var n = e.type ? e.type: i ? i.subType: _.determineSubType(t, e);
            return n
        }
        function l(t) {
            return m(t,
            function(t) {
                return t.componentIndex
            }) || []
        }
        function h(t, e) {
            return e.hasOwnProperty("subType") ? g(t,
            function(t) {
                return t.subType === e.subType
            }) : t
        }
        function c(t) {
            if (!t._seriesIndices) throw new Error("Series has not been initialized yet.")
        }
        var u = i(1),
        d = i(7),
        f = i(12),
        p = u.each,
        g = u.filter,
        m = u.map,
        v = u.isArray,
        y = u.indexOf,
        x = u.isObject,
        _ = i(10),
        b = i(113),
        w = "\x00_ec_inner",
        M = f.extend({
            constructor: M,
            init: function(t, e, i, n) {
                i = i || {},
                this.option = null,
                this._theme = new f(i),
                this._optionManager = n
            },
            setOption: function(t, e) {
                u.assert(!(w in t), "please use chart.getOption()"),
                this._optionManager.setOption(t, e),
                this.resetOption()
            },
            resetOption: function(t) {
                var e = !1,
                i = this._optionManager;
                if (!t || "recreate" === t) {
                    var n = i.mountOption("recreate" === t);
                    this.option && "recreate" !== t ? (this.restoreData(), this.mergeOption(n)) : r.call(this, n),
                    e = !0
                }
                if ("timeline" !== t && "media" !== t || this.restoreData(), !t || "recreate" === t || "timeline" === t) {
                    var o = i.getTimelineOption(this);
                    o && (this.mergeOption(o), e = !0)
                }
                if (!t || "recreate" === t || "media" === t) {
                    var a = i.getMediaOption(this, this._api);
                    a.length && p(a,
                    function(t) {
                        this.mergeOption(t, e = !0)
                    },
                    this)
                }
                return e
            },
            mergeOption: function(t) {
                function e(e, r) {
                    var s = d.normalizeToArray(t[e]),
                    h = d.mappingToExists(n[e], s);
                    a(e, h);
                    var c = o(n, r);
                    i[e] = [],
                    n[e] = [],
                    p(h,
                    function(t, r) {
                        var o = t.exist,
                        a = t.option;
                        if (u.assert(x(a) || o, "Empty component definition"), a) {
                            var s = _.getClass(e, t.keyInfo.subType, !0);
                            o && o instanceof s ? (o.mergeOption(a, this), o.optionUpdated(this)) : (o = new s(a, this, this, u.extend({
                                dependentModels: c,
                                componentIndex: r
                            },
                            t.keyInfo)), o.optionUpdated(this))
                        } else o.mergeOption({},
                        this),
                        o.optionUpdated(this);
                        n[e][r] = o,
                        i[e][r] = o.option
                    },
                    this),
                    "series" === e && (this._seriesIndices = l(n.series))
                }
                var i = this.option,
                n = this._componentsMap,
                r = [];
                p(t,
                function(t, e) {
                    null != t && (_.hasClass(e) ? r.push(e) : i[e] = null == i[e] ? u.clone(t) : u.merge(i[e], t, !0))
                }),
                _.topologicalTravel(r, _.getAllClassMainTypes(), e, this)
            },
            getOption: function() {
                var t = u.clone(this.option);
                return p(t,
                function(e, i) {
                    if (_.hasClass(i)) {
                        for (var e = d.normalizeToArray(e), n = e.length - 1; n >= 0; n--) d.isIdInner(e[n]) && e.splice(n, 1);
                        t[i] = e
                    }
                }),
                delete t[w],
                t
            },
            getTheme: function() {
                return this._theme
            },
            getComponent: function(t, e) {
                var i = this._componentsMap[t];
                return i ? i[e || 0] : void 0
            },
            queryComponents: function(t) {
                var e = t.mainType;
                if (!e) return [];
                var i = t.index,
                n = t.id,
                r = t.name,
                o = this._componentsMap[e];
                if (!o || !o.length) return [];
                var a;
                if (null != i) v(i) || (i = [i]),
                a = g(m(i,
                function(t) {
                    return o[t]
                }),
                function(t) {
                    return !! t
                });
                else if (null != n) {
                    var s = v(n);
                    a = g(o,
                    function(t) {
                        return s && y(n, t.id) >= 0 || !s && t.id === n
                    })
                } else if (null != r) {
                    var l = v(r);
                    a = g(o,
                    function(t) {
                        return l && y(r, t.name) >= 0 || !l && t.name === r
                    })
                }
                return h(a, t)
            },
            findComponents: function(t) {
                function e(t) {
                    var e = r + "Index",
                    i = r + "Id",
                    n = r + "Name";
                    return t && (t.hasOwnProperty(e) || t.hasOwnProperty(i) || t.hasOwnProperty(n)) ? {
                        mainType: r,
                        index: t[e],
                        id: t[i],
                        name: t[n]
                    }: null
                }
                function i(e) {
                    return t.filter ? g(e, t.filter) : e
                }
                var n = t.query,
                r = t.mainType,
                o = e(n),
                a = o ? this.queryComponents(o) : this._componentsMap[r];
                return i(h(a, t))
            },
            eachComponent: function(t, e, i) {
                var n = this._componentsMap;
                if ("function" == typeof t) i = e,
                e = t,
                p(n,
                function(t, n) {
                    p(t,
                    function(t, r) {
                        e.call(i, n, t, r)
                    })
                });
                else if (u.isString(t)) p(n[t], e, i);
                else if (x(t)) {
                    var r = this.findComponents(t);
                    p(r, e, i)
                }
            },
            getSeriesByName: function(t) {
                var e = this._componentsMap.series;
                return g(e,
                function(e) {
                    return e.name === t
                })
            },
            getSeriesByIndex: function(t) {
                return this._componentsMap.series[t]
            },
            getSeriesByType: function(t) {
                var e = this._componentsMap.series;
                return g(e,
                function(e) {
                    return e.subType === t
                })
            },
            getSeries: function() {
                return this._componentsMap.series.slice()
            },
            eachSeries: function(t, e) {
                c(this),
                p(this._seriesIndices,
                function(i) {
                    var n = this._componentsMap.series[i];
                    t.call(e, n, i)
                },
                this)
            },
            eachRawSeries: function(t, e) {
                p(this._componentsMap.series, t, e)
            },
            eachSeriesByType: function(t, e, i) {
                c(this),
                p(this._seriesIndices,
                function(n) {
                    var r = this._componentsMap.series[n];
                    r.subType === t && e.call(i, r, n)
                },
                this)
            },
            eachRawSeriesByType: function(t, e, i) {
                return p(this.getSeriesByType(t), e, i)
            },
            isSeriesFiltered: function(t) {
                return c(this),
                u.indexOf(this._seriesIndices, t.componentIndex) < 0
            },
            filterSeries: function(t, e) {
                c(this);
                var i = g(this._componentsMap.series, t, e);
                this._seriesIndices = l(i)
            },
            restoreData: function() {
                var t = this._componentsMap;
                this._seriesIndices = l(t.series);
                var e = [];
                p(t,
                function(t, i) {
                    e.push(i)
                }),
                _.topologicalTravel(e, _.getAllClassMainTypes(),
                function(e, i) {
                    p(t[e],
                    function(t) {
                        t.restoreData()
                    })
                })
            }
        });
        t.exports = M
    },
    function(t, e, i) {
        function n(t) {
            this._api = t,
            this._timelineOptions = [],
            this._mediaList = [],
            this._mediaDefault,
            this._currentMediaIndices = [],
            this._optionBackup,
            this._newBaseOption
        }
        function r(t, e) {
            var i, n, r = [],
            o = [],
            a = t.timeline;
            if (t.baseOption && (n = t.baseOption), (a || t.options) && (n = n || {},
            r = (t.options || []).slice()), t.media) {
                n = n || {};
                var s = t.media;
                d(s,
                function(t) {
                    t && t.option && (t.query ? o.push(t) : i || (i = t))
                })
            }
            return n || (n = t),
            n.timeline || (n.timeline = a),
            d([n].concat(r).concat(h.map(o,
            function(t) {
                return t.option
            })),
            function(t) {
                d(e,
                function(e) {
                    e(t)
                })
            }),
            {
                baseOption: n,
                timelineOptions: r,
                mediaDefault: i,
                mediaList: o
            }
        }
        function o(t, e, i) {
            var n = {
                width: e,
                height: i,
                aspectratio: e / i
            },
            r = !0;
            return h.each(t,
            function(t, e) {
                var i = e.match(m);
                if (i && i[1] && i[2]) {
                    var o = i[1],
                    s = i[2].toLowerCase();
                    a(n[s], t, o) || (r = !1)
                }
            }),
            r
        }
        function a(t, e, i) {
            return "min" === i ? t >= e: "max" === i ? e >= t: t === e
        }
        function s(t, e) {
            return t.join(",") === e.join(",")
        }
        function l(t, e) {
            e = e || {},
            d(e,
            function(e, i) {
                if (null != e) {
                    var n = t[i];
                    if (u.hasClass(i)) {
                        e = c.normalizeToArray(e),
                        n = c.normalizeToArray(n);
                        var r = c.mappingToExists(n, e);
                        t[i] = p(r,
                        function(t) {
                            return t.option && t.exist ? g(t.exist, t.option, !0) : t.exist || t.option
                        })
                    } else t[i] = g(n, e, !0)
                }
            })
        }
        var h = i(1),
        c = i(7),
        u = i(10),
        d = h.each,
        f = h.clone,
        p = h.map,
        g = h.merge,
        m = /^(min|max)?(.+)$/;
        n.prototype = {
            constructor: n,
            setOption: function(t, e) {
                t = f(t, !0);
                var i = this._optionBackup,
                n = r.call(this, t, e);
                this._newBaseOption = n.baseOption,
                i ? (l(i.baseOption, n.baseOption), n.timelineOptions.length && (i.timelineOptions = n.timelineOptions), n.mediaList.length && (i.mediaList = n.mediaList), n.mediaDefault && (i.mediaDefault = n.mediaDefault)) : this._optionBackup = n
            },
            mountOption: function(t) {
                var e = this._optionBackup;
                return this._timelineOptions = p(e.timelineOptions, f),
                this._mediaList = p(e.mediaList, f),
                this._mediaDefault = f(e.mediaDefault),
                this._currentMediaIndices = [],
                f(t ? e.baseOption: this._newBaseOption)
            },
            getTimelineOption: function(t) {
                var e, i = this._timelineOptions;
                if (i.length) {
                    var n = t.getComponent("timeline");
                    n && (e = f(i[n.getCurrentIndex()], !0))
                }
                return e
            },
            getMediaOption: function(t) {
                var e = this._api.getWidth(),
                i = this._api.getHeight(),
                n = this._mediaList,
                r = this._mediaDefault,
                a = [],
                l = [];
                if (!n.length && !r) return l;
                for (var h = 0,
                c = n.length; c > h; h++) o(n[h].query, e, i) && a.push(h);
                return ! a.length && r && (a = [ - 1]),
                a.length && !s(a, this._currentMediaIndices) && (l = p(a,
                function(t) {
                    return f( - 1 === t ? r.option: n[t].option)
                })),
                this._currentMediaIndices = a,
                l
            }
        },
        t.exports = n
    },
    function(t, e) {
        var i = "";
        "undefined" != typeof navigator && (i = navigator.platform || ""),
        t.exports = {
            color: ["#c23531", "#2f4554", "#61a0a8", "#d48265", "#91c7ae", "#749f83", "#ca8622", "#bda29a", "#6e7074", "#546570", "#c4ccd3"],
            grid: {},
            textStyle: {
                fontFamily: i.match(/^Win/) ? "Microsoft YaHei": "sans-serif",
                fontSize: 12,
                fontStyle: "normal",
                fontWeight: "normal"
            },
            animation: !0,
            animationThreshold: 2e3,
            animationDuration: 1e3,
            animationDurationUpdate: 300,
            animationEasing: "exponentialOut",
            animationEasingUpdate: "cubicOut"
        }
    },
    function(t, e, i) {
        t.exports = {
            getAreaStyle: i(30)([["fill", "color"], ["shadowBlur"], ["shadowOffsetX"], ["shadowOffsetY"], ["opacity"], ["shadowColor"]])
        }
    },
    function(t, e) {
        t.exports = {
            getBoxLayoutParams: function() {
                return {
                    left: this.get("left"),
                    top: this.get("top"),
                    right: this.get("right"),
                    bottom: this.get("bottom"),
                    width: this.get("width"),
                    height: this.get("height")
                }
            }
        }
    },
    function(t, e, i) {
        t.exports = {
            getItemStyle: i(30)([["fill", "color"], ["stroke", "borderColor"], ["lineWidth", "borderWidth"], ["opacity"], ["shadowBlur"], ["shadowOffsetX"], ["shadowOffsetY"], ["shadowColor"]])
        }
    },
    function(t, e, i) {
        var n = i(30)([["lineWidth", "width"], ["stroke", "color"], ["opacity"], ["shadowBlur"], ["shadowOffsetX"], ["shadowOffsetY"], ["shadowColor"]]);
        t.exports = {
            getLineStyle: function(t) {
                var e = n.call(this, t),
                i = this.getLineDash();
                return i && (e.lineDash = i),
                e
            },
            getLineDash: function() {
                var t = this.get("type");
                return "solid" === t || null == t ? null: "dashed" === t ? [5, 5] : [1, 1]
            }
        }
    },
    function(t, e, i) {
        function n(t, e) {
            return t && t.getShallow(e)
        }
        var r = i(18);
        t.exports = {
            getTextColor: function() {
                var t = this.ecModel;
                return this.getShallow("color") || t && t.get("textStyle.color")
            },
            getFont: function() {
                var t = this.ecModel,
                e = t && t.getModel("textStyle");
                return [this.getShallow("fontStyle") || n(e, "fontStyle"), this.getShallow("fontWeight") || n(e, "fontWeight"), (this.getShallow("fontSize") || n(e, "fontSize") || 12) + "px", this.getShallow("fontFamily") || n(e, "fontFamily") || "sans-serif"].join(" ")
            },
            getTextRect: function(t) {
                var e = this.get("textStyle") || {};
                return r.getBoundingRect(t, this.getFont(), e.align, e.baseline)
            },
            ellipsis: function(t, e, i) {
                return r.ellipsis(t, this.getFont(), e, i)
            }
        }
    },
    function(t, e, i) {
        function n(t, e) {
            e = e.split(",");
            for (var i = t,
            n = 0; n < e.length && (i = i && i[e[n]], null != i); n++);
            return i
        }
        function r(t, e, i, n) {
            e = e.split(",");
            for (var r, o = t,
            a = 0; a < e.length - 1; a++) r = e[a],
            null == o[r] && (o[r] = {}),
            o = o[r]; (n || null == o[e[a]]) && (o[e[a]] = i)
        }
        function o(t) {
            u(l,
            function(e) {
                e[0] in t && !(e[1] in t) && (t[e[1]] = t[e[0]])
            })
        }
        var a = i(1),
        s = i(120),
        l = [["x", "left"], ["y", "top"], ["x2", "right"], ["y2", "bottom"]],
        h = ["grid", "geo", "parallel", "legend", "toolbox", "title", "visualMap", "dataZoom", "timeline"],
        c = ["bar", "boxplot", "candlestick", "chord", "effectScatter", "funnel", "gauge", "lines", "graph", "heatmap", "line", "map", "parallel", "pie", "radar", "sankey", "scatter", "treemap"],
        u = a.each;
        t.exports = function(t) {
            u(t.series,
            function(t) {
                if (a.isObject(t)) {
                    var e = t.type;
                    if (s(t), "pie" !== e && "gauge" !== e || null != t.clockWise && (t.clockwise = t.clockWise), "gauge" === e) {
                        var i = n(t, "pointer.color");
                        null != i && r(t, "itemStyle.normal.color", i)
                    }
                    for (var l = 0; l < c.length; l++) if (c[l] === t.type) {
                        o(t);
                        break
                    }
                }
            }),
            t.dataRange && (t.visualMap = t.dataRange),
            u(h,
            function(e) {
                var i = t[e];
                i && (a.isArray(i) || (i = [i]), u(i,
                function(t) {
                    o(t)
                }))
            })
        }
    },
    function(t, e, i) {
        function n(t) {
            var e = t && t.itemStyle;
            e && r.each(o,
            function(i) {
                var n = e.normal,
                o = e.emphasis;
                n && n[i] && (t[i] = t[i] || {},
                t[i].normal ? r.merge(t[i].normal, n[i]) : t[i].normal = n[i], n[i] = null),
                o && o[i] && (t[i] = t[i] || {},
                t[i].emphasis ? r.merge(t[i].emphasis, o[i]) : t[i].emphasis = o[i], o[i] = null)
            })
        }
        var r = i(1),
        o = ["areaStyle", "lineStyle", "nodeStyle", "linkStyle", "chordStyle", "label", "labelLine"];
        t.exports = function(t) {
            if (t) {
                n(t),
                n(t.markPoint),
                n(t.markLine);
                var e = t.data;
                if (e) {
                    for (var i = 0; i < e.length; i++) n(e[i]);
                    var o = t.markPoint;
                    if (o && o.data) for (var a = o.data,
                    i = 0; i < a.length; i++) n(a[i]);
                    var s = t.markLine;
                    if (s && s.data) for (var l = s.data,
                    i = 0; i < l.length; i++) r.isArray(l[i]) ? (n(l[i][0]), n(l[i][1])) : n(l[i])
                }
            }
        }
    },
    function(t, e) {
        var i = {
            average: function(t) {
                for (var e = 0,
                i = 0,
                n = 0; n < t.length; n++) isNaN(t[n]) || (e += t[n], i++);
                return 0 === i ? NaN: e / i
            },
            sum: function(t) {
                for (var e = 0,
                i = 0; i < t.length; i++) e += t[i] || 0;
                return e
            },
            max: function(t) {
                for (var e = -(1 / 0), i = 0; i < t.length; i++) t[i] > e && (e = t[i]);
                return e
            },
            min: function(t) {
                for (var e = 1 / 0,
                i = 0; i < t.length; i++) t[i] < e && (e = t[i]);
                return e
            },
            nearest: function(t) {
                return t[0]
            }
        },
        n = function(t, e) {
            return Math.round(t.length / 2)
        };
        t.exports = function(t, e, r) {
            e.eachSeriesByType(t,
            function(t) {
                var e = t.getData(),
                r = t.get("sampling"),
                o = t.coordinateSystem;
                if ("cartesian2d" === o.type && r) {
                    var a = o.getBaseAxis(),
                    s = o.getOtherAxis(a),
                    l = a.getExtent(),
                    h = l[1] - l[0],
                    c = Math.round(e.count() / h);
                    if (c > 1) {
                        var u;
                        "string" == typeof r ? u = i[r] : "function" == typeof r && (u = r),
                        u && (e = e.downSample(s.dim, 1 / c, u, n), t.setData(e))
                    }
                }
            },
            this)
        }
    },
    function(t, e, i) {
        var n = i(1),
        r = i(32),
        o = i(4),
        a = i(38),
        s = r.prototype,
        l = a.prototype,
        h = Math.floor,
        c = Math.ceil,
        u = Math.pow,
        d = 10,
        f = Math.log,
        p = r.extend({
            type: "log",
            getTicks: function() {
                return n.map(l.getTicks.call(this),
                function(t) {
                    return o.round(u(d, t))
                })
            },
            getLabel: l.getLabel,
            scale: function(t) {
                return t = s.scale.call(this, t),
                u(d, t)
            },
            setExtent: function(t, e) {
                t = f(t) / f(d),
                e = f(e) / f(d),
                l.setExtent.call(this, t, e)
            },
            getExtent: function() {
                var t = s.getExtent.call(this);
                return t[0] = u(d, t[0]),
                t[1] = u(d, t[1]),
                t
            },
            unionExtent: function(t) {
                t[0] = f(t[0]) / f(d),
                t[1] = f(t[1]) / f(d),
                s.unionExtent.call(this, t)
            },
            niceTicks: function(t) {
                t = t || 10;
                var e = this._extent,
                i = e[1] - e[0];
                if (! (i === 1 / 0 || 0 >= i)) {
                    var n = u(10, h(f(i / t) / Math.LN10)),
                    r = t / i * n;.5 >= r && (n *= 10);
                    var a = [o.round(c(e[0] / n) * n), o.round(h(e[1] / n) * n)];
                    this._interval = n,
                    this._niceExtent = a
                }
            },
            niceExtent: l.niceExtent
        });
        n.each(["contain", "normalize"],
        function(t) {
            p.prototype[t] = function(e) {
                return e = f(e) / f(d),
                s[t].call(this, e)
            }
        }),
        p.create = function() {
            return new p
        },
        t.exports = p
    },
    function(t, e, i) {
        var n = i(1),
        r = i(32),
        o = r.prototype,
        a = r.extend({
            type: "ordinal",
            init: function(t, e) {
                this._data = t,
                this._extent = e || [0, t.length - 1]
            },
            parse: function(t) {
                return "string" == typeof t ? n.indexOf(this._data, t) : Math.round(t)
            },
            contain: function(t) {
                return t = this.parse(t),
                o.contain.call(this, t) && null != this._data[t]
            },
            normalize: function(t) {
                return o.normalize.call(this, this.parse(t))
            },
            scale: function(t) {
                return Math.round(o.scale.call(this, t))
            },
            getTicks: function() {
                for (var t = [], e = this._extent, i = e[0]; i <= e[1];) t.push(i),
                i++;
                return t
            },
            getLabel: function(t) {
                return this._data[t]
            },
            count: function() {
                return this._extent[1] - this._extent[0] + 1
            },
            niceTicks: n.noop,
            niceExtent: n.noop
        });
        a.create = function() {
            return new a
        },
        t.exports = a
    },
    function(t, e, i) {
        var n = i(1),
        r = i(4),
        o = i(9),
        a = i(38),
        s = a.prototype,
        l = Math.ceil,
        h = Math.floor,
        c = 1e3,
        u = 60 * c,
        d = 60 * u,
        f = 24 * d,
        p = function(t, e, i, n) {
            for (; n > i;) {
                var r = i + n >>> 1;
                t[r][2] < e ? i = r + 1 : n = r
            }
            return i
        },
        g = a.extend({
            type: "time",
            getLabel: function(t) {
                var e = this._stepLvl,
                i = new Date(t);
                return o.formatTime(e[0], i)
            },
            niceExtent: function(t, e, i) {
                var n = this._extent;
                if (n[0] === n[1] && (n[0] -= f, n[1] += f), n[1] === -(1 / 0) && n[0] === 1 / 0) {
                    var o = new Date;
                    n[1] = new Date(o.getFullYear(), o.getMonth(), o.getDate()),
                    n[0] = n[1] - f
                }
                this.niceTicks(t);
                var a = this._interval;
                e || (n[0] = r.round(h(n[0] / a) * a)),
                i || (n[1] = r.round(l(n[1] / a) * a))
            },
            niceTicks: function(t) {
                t = t || 10;
                var e = this._extent,
                i = e[1] - e[0],
                n = i / t,
                o = m.length,
                a = p(m, n, 0, o),
                s = m[Math.min(a, o - 1)],
                c = s[2];
                if ("year" === s[0]) {
                    var u = i / c,
                    d = r.nice(u / t, !0);
                    c *= d
                }
                var f = [l(e[0] / c) * c, h(e[1] / c) * c];
                this._stepLvl = s,
                this._interval = c,
                this._niceExtent = f
            },
            parse: function(t) {
                return + r.parseDate(t)
            }
        });
        n.each(["contain", "normalize"],
        function(t) {
            g.prototype[t] = function(e) {
                return s[t].call(this, this.parse(e))
            }
        });
        var m = [["hh:mm:ss", 1, c], ["hh:mm:ss", 5, 5 * c], ["hh:mm:ss", 10, 10 * c], ["hh:mm:ss", 15, 15 * c], ["hh:mm:ss", 30, 30 * c], ["hh:mm\nMM-dd", 1, u], ["hh:mm\nMM-dd", 5, 5 * u], ["hh:mm\nMM-dd", 10, 10 * u], ["hh:mm\nMM-dd", 15, 15 * u], ["hh:mm\nMM-dd", 30, 30 * u], ["hh:mm\nMM-dd", 1, d], ["hh:mm\nMM-dd", 2, 2 * d], ["hh:mm\nMM-dd", 6, 6 * d], ["hh:mm\nMM-dd", 12, 12 * d], ["MM-dd\nyyyy", 1, f], ["week", 7, 7 * f], ["month", 1, 31 * f], ["quarter", 3, 380 * f / 4], ["half-year", 6, 380 * f / 2], ["year", 1, 380 * f]];
        g.create = function() {
            return new g
        },
        t.exports = g
    },
    function(t, e) {
        var i = {},
        n = "\x00__throttleOriginMethod",
        r = "\x00__throttleRate";
        i.throttle = function(t, e, i, n) {
            function r(r) {
                function f() {
                    c = (new Date).getTime(),
                    u = null,
                    (d ? t: t[r]).apply(a, s || [])
                }
                var p = function() {
                    l = (new Date).getTime(),
                    a = this,
                    s = arguments,
                    o = l - (n ? h: c) - e,
                    clearTimeout(u),
                    n ? i ? u = setTimeout(f, e) : o >= 0 && f() : o >= 0 ? f() : i && (u = setTimeout(f, -o)),
                    h = l
                };
                return p.clear = function() {
                    u && (clearTimeout(u), u = null)
                },
                p
            }
            var o, a, s, l = (new Date).getTime(),
            h = 0,
            c = 0,
            u = null,
            d = "function" == typeof t;
            if (e = e || 0, d) return r();
            for (var f = [], p = 0; p < t.length; p++) f[p] = r(p);
            return f
        },
        i.fixRate = function(t, e) {
            return null != e ? i.throttle(t, e, !0, !1) : t
        },
        i.debounce = function(t, e) {
            return null != e ? i.throttle(t, e, !0, !0) : t
        },
        i.createOrUpdate = function(t, e, o, a) {
            var s = t[e];
            if (s && null != o && a) {
                var l = s[n] || s,
                h = s[r];
                h !== o && (s = t[e] = i[a](l, o), s[n] = l, s[r] = o)
            }
        },
        i.clear = function(t, e) {
            var i = t[e];
            i && i[n] && (t[e] = i[n])
        },
        t.exports = i
    },
    function(t, e, i) {
        "use strict";
        function n(t, e, i) {
            return {
                type: t,
                event: i,
                target: e,
                cancelBubble: !1,
                offsetX: i.zrX,
                offsetY: i.zrY,
                gestureEvent: i.gestureEvent,
                pinchX: i.pinchX,
                pinchY: i.pinchY,
                pinchScale: i.pinchScale,
                wheelDelta: i.zrDelta
            }
        }
        function r(t, e, i) {
            var n = t._gestureMgr;
            "start" === i && n.clear();
            var r = n.recognize(e, t.findHover(e.zrX, e.zrY, null));
            if ("end" === i && n.clear(), r) {
                var o = r.type;
                e.gestureEvent = o,
                t._dispatchProxy(r.target, o, r.event)
            }
        }
        function o(t) {
            function e(t, e) {
                return function() {
                    return e._touching ? void 0 : t.apply(e, arguments)
                }
            }
            for (var i = y.concat(x), n = 0; n < i.length; n++) {
                var r = i[n];
                t._handlers[r] = f.bind(S[r], t)
            }
            for (var n = 0; n < v.length; n++) {
                var r = v[n];
                t._handlers[r] = e(S[r], t)
            }
        }
        function a(t, e, i) {
            if (t[t.rectHover ? "rectContain": "contain"](e, i)) {
                for (var n = t; n;) {
                    if (n.silent || n.clipPath && !n.clipPath.contain(e, i)) return ! 1;
                    n = n.parent
                }
                return ! 0
            }
            return ! 1
        }
        function s(t) {
            t._touching = !0,
            clearTimeout(t._touchTimer),
            t._touchTimer = setTimeout(function() {
                t._touching = !1
            },
            700)
        }
        function l() {
            return ! 1
        }
        function h() {
            return u.touchEventsSupported
        }
        function c(t) {
            return "mousewheel" === t && u.browser.firefox ? "DOMMouseScroll": t
        }
        var u = i(14),
        d = i(34),
        f = i(1),
        p = i(155),
        g = i(138),
        m = i(21),
        v = ["click", "dblclick", "mousewheel", "mouseout"]; ! l() && v.push("mouseup", "mousedown", "mousemove");
        var y = ["touchstart", "touchend", "touchmove"],
        x = ["pointerdown", "pointerup", "pointermove"],
        _ = 300,
        b = d.addEventListener,
        w = d.removeEventListener,
        M = d.normalizeEvent,
        S = {
            mousemove: function(t) {
                t = M(this.root, t);
                var e = t.zrX,
                i = t.zrY,
                n = this.findHover(e, i, null),
                r = this._hovered;
                this._hovered = n,
                this.root.style.cursor = n ? n.cursor: this._defaultCursorStyle,
                r && n !== r && r.__zr && this._dispatchProxy(r, "mouseout", t),
                this._dispatchProxy(n, "mousemove", t),
                n && n !== r && this._dispatchProxy(n, "mouseover", t)
            },
            mouseout: function(t) {
                t = M(this.root, t);
                var e = t.toElement || t.relatedTarget;
                if (e != this.root) for (; e && 9 != e.nodeType;) {
                    if (e === this.root) return;
                    e = e.parentNode
                }
                this._dispatchProxy(this._hovered, "mouseout", t),
                this.trigger("globalout", {
                    event: t
                })
            },
            touchstart: function(t) {
                t = M(this.root, t),
                this._lastTouchMoment = new Date,
                r(this, t, "start"),
                S.mousemove.call(this, t),
                S.mousedown.call(this, t),
                s(this)
            },
            touchmove: function(t) {
                t = M(this.root, t),
                r(this, t, "change"),
                S.mousemove.call(this, t),
                s(this)
            },
            touchend: function(t) {
                t = M(this.root, t),
                r(this, t, "end"),
                S.mouseup.call(this, t),
                +new Date - this._lastTouchMoment < _ && S.click.call(this, t),
                s(this)
            }
        };
        f.each(["click", "mousedown", "mouseup", "mousewheel", "dblclick"],
        function(t) {
            S[t] = function(e) {
                e = M(this.root, e);
                var i = this.findHover(e.zrX, e.zrY, null);
                if ("mousedown" === t) this._downel = i,
                this._upel = i;
                else if ("mosueup" === t) this._upel = i;
                else if ("click" === t && this._downel !== this._upel) return;
                this._dispatchProxy(i, t, e)
            }
        });
        var A = function(t, e, i) {
            function n(e, i) {
                f.each(e,
                function(e) {
                    b(t, c(e), i._handlers[e])
                },
                i)
            }
            m.call(this),
            this.root = t,
            this.storage = e,
            this.painter = i,
            this._hovered,
            this._lastTouchMoment,
            this._lastX,
            this._lastY,
            this._defaultCursorStyle = "default",
            this._gestureMgr = new g,
            this._handlers = [],
            this._touching = !1,
            this._touchTimer,
            o(this),
            l() ? n(x, this) : h() && n(y, this),
            n(v, this),
            p.call(this)
        };
        A.prototype = {
            constructor: A,
            resize: function(t) {
                this._hovered = null
            },
            dispatch: function(t, e) {
                var i = this._handlers[t];
                i && i.call(this, e)
            },
            dispose: function() {
                for (var t = this.root,
                e = v.concat(y), i = 0; i < e.length; i++) {
                    var n = e[i];
                    w(t, c(n), this._handlers[n])
                }
                this.root = this.storage = this.painter = null
            },
            setDefaultCursorStyle: function(t) {
                this._defaultCursorStyle = t
            },
            _dispatchProxy: function(t, e, i) {
                for (var r = "on" + e,
                o = n(e, t, i), a = t; a && (a[r] && (o.cancelBubble = a[r].call(a, o)), a.trigger(e, o), a = a.parent, !o.cancelBubble););
                o.cancelBubble || (this.trigger(e, o), this.painter && this.painter.eachOtherLayer(function(t) {
                    "function" == typeof t[r] && t[r].call(t, o),
                    t.trigger && t.trigger(e, o)
                }))
            },
            findHover: function(t, e, i) {
                for (var n = this.storage.getDisplayList(), r = n.length - 1; r >= 0; r--) if (!n[r].silent && n[r] !== i && !n[r].ignore && a(n[r], t, e)) return n[r]
            }
        },
        f.mixin(A, m),
        f.mixin(A, p),
        t.exports = A
    },
    function(t, e, i) {
        function n() {
            return ! 1
        }
        function r(t, e, i, n) {
            var r = document.createElement(e),
            o = i.getWidth(),
            a = i.getHeight(),
            s = r.style;
            return s.position = "absolute",
            s.left = 0,
            s.top = 0,
            s.width = o + "px",
            s.height = a + "px",
            r.width = o * n,
            r.height = a * n,
            r.setAttribute("data-zr-dom-id", t),
            r
        }
        var o = i(1),
        a = i(33),
        s = function(t, e, i) {
            var s;
            i = i || a.devicePixelRatio,
            "string" == typeof t ? s = r(t, "canvas", e, i) : o.isObject(t) && (s = t, t = s.id),
            this.id = t,
            this.dom = s;
            var l = s.style;
            l && (s.onselectstart = n, l["-webkit-user-select"] = "none", l["user-select"] = "none", l["-webkit-touch-callout"] = "none", l["-webkit-tap-highlight-color"] = "rgba(0,0,0,0)"),
            this.domBack = null,
            this.ctxBack = null,
            this.painter = e,
            this.config = null,
            this.clearColor = 0,
            this.motionBlur = !1,
            this.lastFrameAlpha = .7,
            this.dpr = i
        };
        s.prototype = {
            constructor: s,
            elCount: 0,
            __dirty: !0,
            initContext: function() {
                this.ctx = this.dom.getContext("2d");
                var t = this.dpr;
                1 != t && this.ctx.scale(t, t)
            },
            createBackBuffer: function() {
                var t = this.dpr;
                this.domBack = r("back-" + this.id, "canvas", this.painter, t),
                this.ctxBack = this.domBack.getContext("2d"),
                1 != t && this.ctxBack.scale(t, t)
            },
            resize: function(t, e) {
                var i = this.dpr,
                n = this.dom,
                r = n.style,
                o = this.domBack;
                r.width = t + "px",
                r.height = e + "px",
                n.width = t * i,
                n.height = e * i,
                1 != i && this.ctx.scale(i, i),
                o && (o.width = t * i, o.height = e * i, 1 != i && this.ctxBack.scale(i, i))
            },
            clear: function(t) {
                var e = this.dom,
                i = this.ctx,
                n = e.width,
                r = e.height,
                o = this.clearColor,
                a = this.motionBlur && !t,
                s = this.lastFrameAlpha,
                l = this.dpr;
                if (a && (this.domBack || this.createBackBuffer(), this.ctxBack.globalCompositeOperation = "copy", this.ctxBack.drawImage(e, 0, 0, n / l, r / l)), i.clearRect(0, 0, n / l, r / l), o && (i.save(), i.fillStyle = this.clearColor, i.fillRect(0, 0, n / l, r / l), i.restore()), a) {
                    var h = this.domBack;
                    i.save(),
                    i.globalAlpha = s,
                    i.drawImage(h, 0, 0, n / l, r / l),
                    i.restore()
                }
            }
        },
        t.exports = s
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            return parseInt(t, 10)
        }
        function r(t) {
            return t ? t.isBuildin ? !0 : "function" == typeof t.resize && "function" == typeof t.refresh: !1
        }
        function o(t) {
            t.__unusedCount++
        }
        function a(t) {
            t.__dirty = !1,
            1 == t.__unusedCount && t.clear()
        }
        function s(t, e, i) {
            return g.copy(t.getBoundingRect()),
            t.transform && g.applyTransform(t.transform),
            m.width = e,
            m.height = i,
            !g.intersect(m)
        }
        function l(t, e) {
            if (!t || !e || t.length !== e.length) return ! 0;
            for (var i = 0; i < t.length; i++) if (t[i] !== e[i]) return ! 0
        }
        function h(t, e) {
            for (var i = 0; i < t.length; i++) {
                var n, r = t[i];
                r.transform && (n = r.transform, e.transform(n[0], n[1], n[2], n[3], n[4], n[5]));
                var o = r.path;
                o.beginPath(e),
                r.buildPath(o, r.shape),
                e.clip(),
                r.transform && (n = r.invTransform, e.transform(n[0], n[1], n[2], n[3], n[4], n[5]))
            }
        }
        var c = i(33),
        u = i(1),
        d = i(45),
        f = i(8),
        p = i(127),
        g = new f(0, 0, 0, 0),
        m = new f(0, 0, 0, 0),
        v = function(t, e, i) {
            var n = !t.nodeName || "CANVAS" === t.nodeName.toUpperCase();
            i = i || {},
            this.dpr = i.devicePixelRatio || c.devicePixelRatio,
            this._singleCanvas = n,
            this.root = t;
            var r = t.style;
            if (r && (r["-webkit-tap-highlight-color"] = "transparent", r["-webkit-user-select"] = "none", r["user-select"] = "none", r["-webkit-touch-callout"] = "none", t.innerHTML = ""), this.storage = e, n) {
                var o = t.width,
                a = t.height;
                this._width = o,
                this._height = a;
                var s = new p(t, this, 1);
                s.initContext(),
                this._layers = {
                    0 : s
                },
                this._zlevelList = [0]
            } else {
                var o = this._getWidth(),
                a = this._getHeight();
                this._width = o,
                this._height = a;
                var l = document.createElement("div");
                this._domRoot = l;
                var h = l.style;
                h.position = "relative",
                h.overflow = "hidden",
                h.width = this._width + "px",
                h.height = this._height + "px",
                t.appendChild(l),
                this._layers = {},
                this._zlevelList = []
            }
            this._layerConfig = {},
            this.pathToImage = this._createPathToImage()
        };
        v.prototype = {
            constructor: v,
            isSingleCanvas: function() {
                return this._singleCanvas
            },
            getViewportRoot: function() {
                return this._singleCanvas ? this._layers[0].dom: this._domRoot
            },
            refresh: function(t) {
                var e = this.storage.getDisplayList(!0),
                i = this._zlevelList;
                this._paintList(e, t);
                for (var n = 0; n < i.length; n++) {
                    var r = i[n],
                    o = this._layers[r]; ! o.isBuildin && o.refresh && o.refresh()
                }
                return this
            },
            _paintList: function(t, e) {
                null == e && (e = !1),
                this._updateLayerStatus(t);
                var i, n, r, c = this._width,
                u = this._height;
                this.eachBuildinLayer(o);
                for (var f = null,
                p = 0,
                g = t.length; g > p; p++) {
                    var m = t[p],
                    v = this._singleCanvas ? 0 : m.zlevel;
                    if (n !== v && (n = v, i = this.getLayer(n), i.isBuildin || d("ZLevel " + n + " has been used by unkown layer " + i.id), r = i.ctx, i.__unusedCount = 0, (i.__dirty || e) && i.clear()), (i.__dirty || e) && !m.invisible && 0 !== m.style.opacity && m.scale[0] && m.scale[1] && (!m.culling || !s(m, c, u))) {
                        var y = m.__clipPaths;
                        l(y, f) && (f && r.restore(), y && (r.save(), h(y, r)), f = y),
                        m.beforeBrush && m.beforeBrush(r),
                        m.brush(r, !1),
                        m.afterBrush && m.afterBrush(r)
                    }
                    m.__dirty = !1
                }
                f && r.restore(),
                this.eachBuildinLayer(a)
            },
            getLayer: function(t) {
                if (this._singleCanvas) return this._layers[0];
                var e = this._layers[t];
                return e || (e = new p("zr_" + t, this, this.dpr), e.isBuildin = !0, this._layerConfig[t] && u.merge(e, this._layerConfig[t], !0), this.insertLayer(t, e), e.initContext()),
                e
            },
            insertLayer: function(t, e) {
                var i = this._layers,
                n = this._zlevelList,
                o = n.length,
                a = null,
                s = -1,
                l = this._domRoot;
                if (i[t]) return void d("ZLevel " + t + " has been used already");
                if (!r(e)) return void d("Layer of zlevel " + t + " is not valid");
                if (o > 0 && t > n[0]) {
                    for (s = 0; o - 1 > s && !(n[s] < t && n[s + 1] > t); s++);
                    a = i[n[s]]
                }
                if (n.splice(s + 1, 0, t), a) {
                    var h = a.dom;
                    h.nextSibling ? l.insertBefore(e.dom, h.nextSibling) : l.appendChild(e.dom)
                } else l.firstChild ? l.insertBefore(e.dom, l.firstChild) : l.appendChild(e.dom);
                i[t] = e
            },
            eachLayer: function(t, e) {
                var i, n, r = this._zlevelList;
                for (n = 0; n < r.length; n++) i = r[n],
                t.call(e, this._layers[i], i)
            },
            eachBuildinLayer: function(t, e) {
                var i, n, r, o = this._zlevelList;
                for (r = 0; r < o.length; r++) n = o[r],
                i = this._layers[n],
                i.isBuildin && t.call(e, i, n)
            },
            eachOtherLayer: function(t, e) {
                var i, n, r, o = this._zlevelList;
                for (r = 0; r < o.length; r++) n = o[r],
                i = this._layers[n],
                i.isBuildin || t.call(e, i, n)
            },
            getLayers: function() {
                return this._layers
            },
            _updateLayerStatus: function(t) {
                var e = this._layers,
                i = {};
                this.eachBuildinLayer(function(t, e) {
                    i[e] = t.elCount,
                    t.elCount = 0
                });
                for (var n = 0,
                r = t.length; r > n; n++) {
                    var o = t[n],
                    a = this._singleCanvas ? 0 : o.zlevel,
                    s = e[a];
                    if (s) {
                        if (s.elCount++, s.__dirty) continue;
                        s.__dirty = o.__dirty
                    }
                }
                this.eachBuildinLayer(function(t, e) {
                    i[e] !== t.elCount && (t.__dirty = !0)
                })
            },
            clear: function() {
                return this.eachBuildinLayer(this._clearLayer),
                this
            },
            _clearLayer: function(t) {
                t.clear()
            },
            configLayer: function(t, e) {
                if (e) {
                    var i = this._layerConfig;
                    i[t] ? u.merge(i[t], e, !0) : i[t] = e;
                    var n = this._layers[t];
                    n && u.merge(n, i[t], !0)
                }
            },
            delLayer: function(t) {
                var e = this._layers,
                i = this._zlevelList,
                n = e[t];
                n && (n.dom.parentNode.removeChild(n.dom), delete e[t], i.splice(u.indexOf(i, t), 1))
            },
            resize: function(t, e) {
                var i = this._domRoot;
                if (i.style.display = "none", t = t || this._getWidth(), e = e || this._getHeight(), i.style.display = "", this._width != t || e != this._height) {
                    i.style.width = t + "px",
                    i.style.height = e + "px";
                    for (var n in this._layers) this._layers[n].resize(t, e);
                    this.refresh(!0)
                }
                return this._width = t,
                this._height = e,
                this
            },
            clearLayer: function(t) {
                var e = this._layers[t];
                e && e.clear()
            },
            dispose: function() {
                this.root.innerHTML = "",
                this.root = this.storage = this._domRoot = this._layers = null
            },
            getRenderedCanvas: function(t) {
                if (t = t || {},
                this._singleCanvas) return this._layers[0].dom;
                var e = new p("image", this, t.pixelRatio || this.dpr);
                e.initContext();
                var i = e.ctx;
                e.clearColor = t.backgroundColor,
                e.clear();
                for (var n = this.storage.getDisplayList(!0), r = 0; r < n.length; r++) {
                    var o = n[r];
                    o.invisible || (o.beforeBrush && o.beforeBrush(i), o.brush(i, !1), o.afterBrush && o.afterBrush(i))
                }
                return e.dom
            },
            getWidth: function() {
                return this._width
            },
            getHeight: function() {
                return this._height
            },
            _getWidth: function() {
                var t = this.root,
                e = document.defaultView.getComputedStyle(t);
                return (t.clientWidth || n(e.width) || n(t.style.width)) - (n(e.paddingLeft) || 0) - (n(e.paddingRight) || 0) | 0
            },
            _getHeight: function() {
                var t = this.root,
                e = document.defaultView.getComputedStyle(t);
                return (t.clientHeight || n(e.height) || n(t.style.height)) - (n(e.paddingTop) || 0) - (n(e.paddingBottom) || 0) | 0
            },
            _pathToImage: function(t, e, n, r, o) {
                var a = document.createElement("canvas"),
                s = a.getContext("2d");
                a.width = n * o,
                a.height = r * o,
                s.clearRect(0, 0, n * o, r * o);
                var l = {
                    position: e.position,
                    rotation: e.rotation,
                    scale: e.scale
                };
                e.position = [0, 0, 0],
                e.rotation = 0,
                e.scale = [1, 1],
                e && e.brush(s);
                var h = i(46),
                c = new h({
                    id: t,
                    style: {
                        x: 0,
                        y: 0,
                        image: a
                    }
                });
                return null != l.position && (c.position = e.position = l.position),
                null != l.rotation && (c.rotation = e.rotation = l.rotation),
                null != l.scale && (c.scale = e.scale = l.scale),
                c
            },
            _createPathToImage: function() {
                var t = this;
                return function(e, i, n, r) {
                    return t._pathToImage(e, i, n, r, t.dpr)
                }
            }
        },
        t.exports = v
    },
    function(t, e, i) {
        "use strict";
        function n(t, e) {
            return t.zlevel === e.zlevel ? t.z === e.z ? t.z2 === e.z2 ? t.__renderidx - e.__renderidx: t.z2 - e.z2: t.z - e.z: t.zlevel - e.zlevel
        }
        var r = i(1),
        o = i(27),
        a = function() {
            this._elements = {},
            this._roots = [],
            this._displayList = [],
            this._displayListLen = 0
        };
        a.prototype = {
            constructor: a,
            getDisplayList: function(t, e) {
                return e = e || !1,
                t && this.updateDisplayList(e),
                this._displayList
            },
            updateDisplayList: function(t) {
                this._displayListLen = 0;
                for (var e = this._roots,
                i = this._displayList,
                r = 0,
                o = e.length; o > r; r++) this._updateAndAddDisplayable(e[r], null, t);
                i.length = this._displayListLen;
                for (var r = 0,
                o = i.length; o > r; r++) i[r].__renderidx = r;
                i.sort(n)
            },
            _updateAndAddDisplayable: function(t, e, i) {
                if (!t.ignore || i) {
                    t.beforeUpdate(),
                    t.update(),
                    t.afterUpdate();
                    var n = t.clipPath;
                    if (n && (n.parent = t, n.updateTransform(), e ? (e = e.slice(), e.push(n)) : e = [n]), "group" == t.type) {
                        for (var r = t._children,
                        o = 0; o < r.length; o++) {
                            var a = r[o];
                            a.__dirty = t.__dirty || a.__dirty,
                            this._updateAndAddDisplayable(a, e, i)
                        }
                        t.__dirty = !1
                    } else t.__clipPaths = e,
                    this._displayList[this._displayListLen++] = t
                }
            },
            addRoot: function(t) {
                this._elements[t.id] || (t instanceof o && t.addChildrenToStorage(this), this.addToMap(t), this._roots.push(t))
            },
            delRoot: function(t) {
                if (null == t) {
                    for (var e = 0; e < this._roots.length; e++) {
                        var i = this._roots[e];
                        i instanceof o && i.delChildrenFromStorage(this)
                    }
                    return this._elements = {},
                    this._roots = [],
                    this._displayList = [],
                    void(this._displayListLen = 0)
                }
                if (t instanceof Array) for (var e = 0,
                n = t.length; n > e; e++) this.delRoot(t[e]);
                else {
                    var a;
                    a = "string" == typeof t ? this._elements[t] : t;
                    var s = r.indexOf(this._roots, a);
                    s >= 0 && (this.delFromMap(a.id), this._roots.splice(s, 1), a instanceof o && a.delChildrenFromStorage(this))
                }
            },
            addToMap: function(t) {
                return t instanceof o && (t.__storage = this),
                t.dirty(),
                this._elements[t.id] = t,
                this
            },
            get: function(t) {
                return this._elements[t]
            },
            delFromMap: function(t) {
                var e = this._elements,
                i = e[t];
                return i && (delete e[t], i instanceof o && (i.__storage = null)),
                this
            },
            dispose: function() {
                this._elements = this._renderList = this._roots = null
            }
        },
        t.exports = a
    },
    function(t, e, i) {
        "use strict";
        var n = i(1),
        r = i(34).Dispatcher,
        o = "undefined" != typeof window && (window.requestAnimationFrame || window.msRequestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame) ||
        function(t) {
            setTimeout(t, 16)
        },
        a = i(56),
        s = function(t) {
            t = t || {},
            this.stage = t.stage || {},
            this.onframe = t.onframe ||
            function() {},
            this._clips = [],
            this._running = !1,
            this._time = 0,
            r.call(this)
        };
        s.prototype = {
            constructor: s,
            addClip: function(t) {
                this._clips.push(t)
            },
            addAnimator: function(t) {
                t.animation = this;
                for (var e = t.getClips(), i = 0; i < e.length; i++) this.addClip(e[i])
            },
            removeClip: function(t) {
                var e = n.indexOf(this._clips, t);
                e >= 0 && this._clips.splice(e, 1)
            },
            removeAnimator: function(t) {
                for (var e = t.getClips(), i = 0; i < e.length; i++) this.removeClip(e[i]);
                t.animation = null
            },
            _update: function() {
                for (var t = (new Date).getTime(), e = t - this._time, i = this._clips, n = i.length, r = [], o = [], a = 0; n > a; a++) {
                    var s = i[a],
                    l = s.step(t);
                    l && (r.push(l), o.push(s))
                }
                for (var a = 0; n > a;) i[a]._needsRemove ? (i[a] = i[n - 1], i.pop(), n--) : a++;
                n = r.length;
                for (var a = 0; n > a; a++) o[a].fire(r[a]);
                this._time = t,
                this.onframe(e),
                this.trigger("frame", e),
                this.stage.update && this.stage.update()
            },
            start: function() {
                function t() {
                    e._running && (o(t), e._update())
                }
                var e = this;
                this._running = !0,
                this._time = (new Date).getTime(),
                o(t)
            },
            stop: function() {
                this._running = !1
            },
            clear: function() {
                this._clips = []
            },
            animate: function(t, e) {
                e = e || {};
                var i = new a(t, e.loop, e.getter, e.setter);
                return i
            }
        },
        n.mixin(s, r),
        t.exports = s
    },
    function(t, e, i) {
        function n(t) {
            this._target = t.target,
            this._life = t.life || 1e3,
            this._delay = t.delay || 0,
            this._initialized = !1,
            this.loop = null == t.loop ? !1 : t.loop,
            this.gap = t.gap || 0,
            this.easing = t.easing || "Linear",
            this.onframe = t.onframe,
            this.ondestroy = t.ondestroy,
            this.onrestart = t.onrestart
        }
        var r = i(132);
        n.prototype = {
            constructor: n,
            step: function(t) {
                this._initialized || (this._startTime = (new Date).getTime() + this._delay, this._initialized = !0);
                var e = (t - this._startTime) / this._life;
                if (! (0 > e)) {
                    e = Math.min(e, 1);
                    var i = this.easing,
                    n = "string" == typeof i ? r[i] : i,
                    o = "function" == typeof n ? n(e) : e;
                    return this.fire("frame", o),
                    1 == e ? this.loop ? (this.restart(), "restart") : (this._needsRemove = !0, "destroy") : null
                }
            },
            restart: function() {
                var t = (new Date).getTime(),
                e = (t - this._startTime) % this._life;
                this._startTime = (new Date).getTime() - e + this.gap,
                this._needsRemove = !1
            },
            fire: function(t, e) {
                t = "on" + t,
                this[t] && this[t](this._target, e)
            }
        },
        t.exports = n
    },
    function(t, e) {
        var i = {
            linear: function(t) {
                return t
            },
            quadraticIn: function(t) {
                return t * t
            },
            quadraticOut: function(t) {
                return t * (2 - t)
            },
            quadraticInOut: function(t) {
                return (t *= 2) < 1 ? .5 * t * t: -.5 * (--t * (t - 2) - 1)
            },
            cubicIn: function(t) {
                return t * t * t
            },
            cubicOut: function(t) {
                return--t * t * t + 1
            },
            cubicInOut: function(t) {
                return (t *= 2) < 1 ? .5 * t * t * t: .5 * ((t -= 2) * t * t + 2)
            },
            quarticIn: function(t) {
                return t * t * t * t
            },
            quarticOut: function(t) {
                return 1 - --t * t * t * t
            },
            quarticInOut: function(t) {
                return (t *= 2) < 1 ? .5 * t * t * t * t: -.5 * ((t -= 2) * t * t * t - 2)
            },
            quinticIn: function(t) {
                return t * t * t * t * t
            },
            quinticOut: function(t) {
                return--t * t * t * t * t + 1
            },
            quinticInOut: function(t) {
                return (t *= 2) < 1 ? .5 * t * t * t * t * t: .5 * ((t -= 2) * t * t * t * t + 2)
            },
            sinusoidalIn: function(t) {
                return 1 - Math.cos(t * Math.PI / 2)
            },
            sinusoidalOut: function(t) {
                return Math.sin(t * Math.PI / 2)
            },
            sinusoidalInOut: function(t) {
                return.5 * (1 - Math.cos(Math.PI * t))
            },
            exponentialIn: function(t) {
                return 0 === t ? 0 : Math.pow(1024, t - 1)
            },
            exponentialOut: function(t) {
                return 1 === t ? 1 : 1 - Math.pow(2, -10 * t)
            },
            exponentialInOut: function(t) {
                return 0 === t ? 0 : 1 === t ? 1 : (t *= 2) < 1 ? .5 * Math.pow(1024, t - 1) : .5 * ( - Math.pow(2, -10 * (t - 1)) + 2)
            },
            circularIn: function(t) {
                return 1 - Math.sqrt(1 - t * t)
            },
            circularOut: function(t) {
                return Math.sqrt(1 - --t * t)
            },
            circularInOut: function(t) {
                return (t *= 2) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1)
            },
            elasticIn: function(t) {
                var e, i = .1,
                n = .4;
                return 0 === t ? 0 : 1 === t ? 1 : (!i || 1 > i ? (i = 1, e = n / 4) : e = n * Math.asin(1 / i) / (2 * Math.PI), -(i * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - e) * (2 * Math.PI) / n)))
            },
            elasticOut: function(t) {
                var e, i = .1,
                n = .4;
                return 0 === t ? 0 : 1 === t ? 1 : (!i || 1 > i ? (i = 1, e = n / 4) : e = n * Math.asin(1 / i) / (2 * Math.PI), i * Math.pow(2, -10 * t) * Math.sin((t - e) * (2 * Math.PI) / n) + 1)
            },
            elasticInOut: function(t) {
                var e, i = .1,
                n = .4;
                return 0 === t ? 0 : 1 === t ? 1 : (!i || 1 > i ? (i = 1, e = n / 4) : e = n * Math.asin(1 / i) / (2 * Math.PI), (t *= 2) < 1 ? -.5 * (i * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - e) * (2 * Math.PI) / n)) : i * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - e) * (2 * Math.PI) / n) * .5 + 1)
            },
            backIn: function(t) {
                var e = 1.70158;
                return t * t * ((e + 1) * t - e)
            },
            backOut: function(t) {
                var e = 1.70158;
                return--t * t * ((e + 1) * t + e) + 1
            },
            backInOut: function(t) {
                var e = 2.5949095;
                return (t *= 2) < 1 ? .5 * (t * t * ((e + 1) * t - e)) : .5 * ((t -= 2) * t * ((e + 1) * t + e) + 2)
            },
            bounceIn: function(t) {
                return 1 - i.bounceOut(1 - t)
            },
            bounceOut: function(t) {
                return 1 / 2.75 > t ? 7.5625 * t * t: 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375
            },
            bounceInOut: function(t) {
                return.5 > t ? .5 * i.bounceIn(2 * t) : .5 * i.bounceOut(2 * t - 1) + .5
            }
        };
        t.exports = i
    },
    function(t, e, i) {
        var n = i(57).normalizeRadian,
        r = 2 * Math.PI;
        t.exports = {
            containStroke: function(t, e, i, o, a, s, l, h, c) {
                if (0 === l) return ! 1;
                var u = l;
                h -= t,
                c -= e;
                var d = Math.sqrt(h * h + c * c);
                if (d - u > i || i > d + u) return ! 1;
                if (Math.abs(o - a) % r < 1e-4) return ! 0;
                if (s) {
                    var f = o;
                    o = n(a),
                    a = n(f)
                } else o = n(o),
                a = n(a);
                o > a && (a += r);
                var p = Math.atan2(c, h);
                return 0 > p && (p += r),
                p >= o && a >= p || p + r >= o && a >= p + r
            }
        }
    },
    function(t, e, i) {
        var n = i(16);
        t.exports = {
            containStroke: function(t, e, i, r, o, a, s, l, h, c, u) {
                if (0 === h) return ! 1;
                var d = h;
                if (u > e + d && u > r + d && u > a + d && u > l + d || e - d > u && r - d > u && a - d > u && l - d > u || c > t + d && c > i + d && c > o + d && c > s + d || t - d > c && i - d > c && o - d > c && s - d > c) return ! 1;
                var f = n.cubicProjectPoint(t, e, i, r, o, a, s, l, c, u, null);
                return d / 2 >= f
            }
        }
    },
    function(t, e) {
        t.exports = {
            containStroke: function(t, e, i, n, r, o, a) {
                if (0 === r) return ! 1;
                var s = r,
                l = 0,
                h = t;
                if (a > e + s && a > n + s || e - s > a && n - s > a || o > t + s && o > i + s || t - s > o && i - s > o) return ! 1;
                if (t === i) return Math.abs(o - t) <= s / 2;
                l = (e - n) / (t - i),
                h = (t * n - i * e) / (t - i);
                var c = l * o - a + h,
                u = c * c / (l * l + 1);
                return s / 2 * s / 2 >= u
            }
        }
    },
    function(t, e, i) {
        "use strict";
        function n(t, e) {
            return Math.abs(t - e) < x
        }
        function r() {
            var t = b[0];
            b[0] = b[1],
            b[1] = t
        }
        function o(t, e, i, n, o, a, s, l, h, c) {
            if (c > e && c > n && c > a && c > l || e > c && n > c && a > c && l > c) return 0;
            var u = g.cubicRootAt(e, n, a, l, c, _);
            if (0 === u) return 0;
            for (var d, f, p = 0,
            m = -1,
            v = 0; u > v; v++) {
                var y = _[v],
                x = g.cubicAt(t, i, o, s, y);
                h > x || (0 > m && (m = g.cubicExtrema(e, n, a, l, b), b[1] < b[0] && m > 1 && r(), d = g.cubicAt(e, n, a, l, b[0]), m > 1 && (f = g.cubicAt(e, n, a, l, b[1]))), p += 2 == m ? y < b[0] ? e > d ? 1 : -1 : y < b[1] ? d > f ? 1 : -1 : f > l ? 1 : -1 : y < b[0] ? e > d ? 1 : -1 : d > l ? 1 : -1)
            }
            return p
        }
        function a(t, e, i, n, r, o, a, s) {
            if (s > e && s > n && s > o || e > s && n > s && o > s) return 0;
            var l = g.quadraticRootAt(e, n, o, s, _);
            if (0 === l) return 0;
            var h = g.quadraticExtremum(e, n, o);
            if (h >= 0 && 1 >= h) {
                for (var c = 0,
                u = g.quadraticAt(e, n, o, h), d = 0; l > d; d++) {
                    var f = g.quadraticAt(t, i, r, _[d]);
                    a > f || (c += _[d] < h ? e > u ? 1 : -1 : u > o ? 1 : -1)
                }
                return c
            }
            var f = g.quadraticAt(t, i, r, _[0]);
            return a > f ? 0 : e > o ? 1 : -1
        }
        function s(t, e, i, n, r, o, a, s) {
            if (s -= e, s > i || -i > s) return 0;
            var l = Math.sqrt(i * i - s * s);
            _[0] = -l,
            _[1] = l;
            var h = Math.abs(n - r);
            if (1e-4 > h) return 0;
            if (1e-4 > h % y) {
                n = 0,
                r = y;
                var c = o ? 1 : -1;
                return a >= _[0] + t && a <= _[1] + t ? c: 0
            }
            if (o) {
                var l = n;
                n = p(r),
                r = p(l)
            } else n = p(n),
            r = p(r);
            n > r && (r += y);
            for (var u = 0,
            d = 0; 2 > d; d++) {
                var f = _[d];
                if (f + t > a) {
                    var g = Math.atan2(s, f),
                    c = o ? 1 : -1;
                    0 > g && (g = y + g),
                    (g >= n && r >= g || g + y >= n && r >= g + y) && (g > Math.PI / 2 && g < 1.5 * Math.PI && (c = -c), u += c)
                }
            }
            return u
        }
        function l(t, e, i, r, l) {
            for (var c = 0,
            p = 0,
            g = 0,
            y = 0,
            x = 0,
            _ = 0; _ < t.length;) {
                var b = t[_++];
                if (b === h.M && _ > 1 && (i || (c += m(p, g, y, x, r, l)), 0 !== c)) return ! 0;
                switch (1 == _ && (p = t[_], g = t[_ + 1], y = p, x = g), b) {
                case h.M:
                    y = t[_++],
                    x = t[_++],
                    p = y,
                    g = x;
                    break;
                case h.L:
                    if (i) {
                        if (v(p, g, t[_], t[_ + 1], e, r, l)) return ! 0
                    } else c += m(p, g, t[_], t[_ + 1], r, l) || 0;
                    p = t[_++],
                    g = t[_++];
                    break;
                case h.C:
                    if (i) {
                        if (u.containStroke(p, g, t[_++], t[_++], t[_++], t[_++], t[_], t[_ + 1], e, r, l)) return ! 0
                    } else c += o(p, g, t[_++], t[_++], t[_++], t[_++], t[_], t[_ + 1], r, l) || 0;
                    p = t[_++],
                    g = t[_++];
                    break;
                case h.Q:
                    if (i) {
                        if (d.containStroke(p, g, t[_++], t[_++], t[_], t[_ + 1], e, r, l)) return ! 0
                    } else c += a(p, g, t[_++], t[_++], t[_], t[_ + 1], r, l) || 0;
                    p = t[_++],
                    g = t[_++];
                    break;
                case h.A:
                    var w = t[_++],
                    M = t[_++],
                    S = t[_++],
                    A = t[_++],
                    T = t[_++],
                    C = t[_++],
                    I = (t[_++], 1 - t[_++]),
                    k = Math.cos(T) * S + w,
                    L = Math.sin(T) * A + M;
                    _ > 1 ? c += m(p, g, k, L, r, l) : (y = k, x = L);
                    var D = (r - w) * A / S + w;
                    if (i) {
                        if (f.containStroke(w, M, A, T, T + C, I, e, D, l)) return ! 0
                    } else c += s(w, M, A, T, T + C, I, D, l);
                    p = Math.cos(T + C) * S + w,
                    g = Math.sin(T + C) * A + M;
                    break;
                case h.R:
                    y = p = t[_++],
                    x = g = t[_++];
                    var P = t[_++],
                    O = t[_++],
                    k = y + P,
                    L = x + O;
                    if (i) {
                        if (v(y, x, k, x, e, r, l) || v(k, x, k, L, e, r, l) || v(k, L, y, L, e, r, l) || v(y, L, k, L, e, r, l)) return ! 0
                    } else c += m(k, x, k, L, r, l),
                    c += m(y, L, y, x, r, l);
                    break;
                case h.Z:
                    if (i) {
                        if (v(p, g, y, x, e, r, l)) return ! 0
                    } else if (c += m(p, g, y, x, r, l), 0 !== c) return ! 0;
                    p = y,
                    g = x
                }
            }
            return i || n(g, x) || (c += m(p, g, y, x, r, l) || 0),
            0 !== c
        }
        var h = i(28).CMD,
        c = i(135),
        u = i(134),
        d = i(137),
        f = i(133),
        p = i(57).normalizeRadian,
        g = i(16),
        m = i(75),
        v = c.containStroke,
        y = 2 * Math.PI,
        x = 1e-4,
        _ = [ - 1, -1, -1],
        b = [ - 1, -1];
        t.exports = {
            contain: function(t, e, i) {
                return l(t, 0, !1, e, i)
            },
            containStroke: function(t, e, i, n) {
                return l(t, e, !0, i, n)
            }
        }
    },
    function(t, e, i) {
        var n = i(16);
        t.exports = {
            containStroke: function(t, e, i, r, o, a, s, l, h) {
                if (0 === s) return ! 1;
                var c = s;
                if (h > e + c && h > r + c && h > a + c || e - c > h && r - c > h && a - c > h || l > t + c && l > i + c && l > o + c || t - c > l && i - c > l && o - c > l) return ! 1;
                var u = n.quadraticProjectPoint(t, e, i, r, o, a, l, h, null);
                return c / 2 >= u
            }
        }
    },
    function(t, e) {
        "use strict";
        function i(t) {
            var e = t[1][0] - t[0][0],
            i = t[1][1] - t[0][1];
            return Math.sqrt(e * e + i * i)
        }
        function n(t) {
            return [(t[0][0] + t[1][0]) / 2, (t[0][1] + t[1][1]) / 2]
        }
        var r = function() {
            this._track = []
        };
        r.prototype = {
            constructor: r,
            recognize: function(t, e) {
                return this._doTrack(t, e),
                this._recognize(t)
            },
            clear: function() {
                return this._track.length = 0,
                this
            },
            _doTrack: function(t, e) {
                var i = t.touches;
                if (i) {
                    for (var n = {
                        points: [],
                        touches: [],
                        target: e,
                        event: t
                    },
                    r = 0, o = i.length; o > r; r++) {
                        var a = i[r];
                        n.points.push([a.clientX, a.clientY]),
                        n.touches.push(a)
                    }
                    this._track.push(n)
                }
            },
            _recognize: function(t) {
                for (var e in o) if (o.hasOwnProperty(e)) {
                    var i = o[e](this._track, t);
                    if (i) return i
                }
            }
        };
        var o = {
            pinch: function(t, e) {
                var r = t.length;
                if (r) {
                    var o = (t[r - 1] || {}).points,
                    a = (t[r - 2] || {}).points || o;
                    if (a && a.length > 1 && o && o.length > 1) {
                        var s = i(o) / i(a); ! isFinite(s) && (s = 1),
                        e.pinchScale = s;
                        var l = n(o);
                        return e.pinchX = l[0],
                        e.pinchY = l[1],
                        {
                            type: "pinch",
                            target: t[0].target,
                            event: e
                        }
                    }
                }
            }
        };
        t.exports = r
    },
    function(t, e) {
        var i = function() {
            this.head = null,
            this.tail = null,
            this._len = 0
        },
        n = i.prototype;
        n.insert = function(t) {
            var e = new r(t);
            return this.insertEntry(e),
            e
        },
        n.insertEntry = function(t) {
            this.head ? (this.tail.next = t, t.prev = this.tail, this.tail = t) : this.head = this.tail = t,
            this._len++
        },
        n.remove = function(t) {
            var e = t.prev,
            i = t.next;
            e ? e.next = i: this.head = i,
            i ? i.prev = e: this.tail = e,
            t.next = t.prev = null,
            this._len--
        },
        n.len = function() {
            return this._len
        };
        var r = function(t) {
            this.value = t,
            this.next,
            this.prev
        },
        o = function(t) {
            this._list = new i,
            this._map = {},
            this._maxSize = t || 10
        },
        a = o.prototype;
        a.put = function(t, e) {
            var i = this._list,
            n = this._map;
            if (null == n[t]) {
                var r = i.len();
                if (r >= this._maxSize && r > 0) {
                    var o = i.head;
                    i.remove(o),
                    delete n[o.key]
                }
                var a = i.insert(e);
                a.key = t,
                n[t] = a
            }
        },
        a.get = function(t) {
            var e = this._map[t],
            i = this._list;
            return null != e ? (e !== i.tail && (i.remove(e), i.insertEntry(e)), e.value) : void 0
        },
        a.clear = function() {
            this._list.clear(),
            this._map = {}
        },
        t.exports = o
    },
    function(t, e, i) {
        var n = i(6);
        t.exports = n.extend({
            type: "compound",
            shape: {
                paths: null
            },
            _updatePathDirty: function() {
                for (var t = this.__dirtyPath,
                e = this.shape.paths,
                i = 0; i < e.length; i++) t = t || e[i].__dirtyPath;
                this.__dirtyPath = t,
                this.__dirty = this.__dirty || t
            },
            beforeBrush: function() {
                this._updatePathDirty();
                for (var t = this.shape.paths || [], e = this.getGlobalScale(), i = 0; i < t.length; i++) t[i].path.setScale(e[0], e[1])
            },
            buildPath: function(t, e) {
                for (var i = e.paths || [], n = 0; n < i.length; n++) i[n].buildPath(t, i[n].shape)
            },
            afterBrush: function() {
                for (var t = this.shape.paths,
                e = 0; e < t.length; e++) t[e].__dirtyPath = !1
            },
            getBoundingRect: function() {
                return this._updatePathDirty(),
                n.prototype.getBoundingRect.call(this)
            }
        })
    },
    function(t, e, i) {
        "use strict";
        var n = i(1),
        r = i(17),
        o = function(t, e, i, n) {
            this.x = null == t ? .5 : t,
            this.y = null == e ? .5 : e,
            this.r = null == i ? .5 : i,
            r.call(this, n)
        };
        o.prototype = {
            constructor: o,
            type: "radial"
        },
        n.inherits(o, r),
        t.exports = o
    },
    function(t, e) {
        var i = ["lineCap", "lineJoin", "miterLimit", "shadowBlur", "shadowOffsetX", "shadowOffsetY", "shadowColor"],
        n = function(t) {
            this.extendFrom(t)
        };
        n.prototype = {
            constructor: n,
            fill: "#000000",
            stroke: null,
            opacity: 1,
            lineDash: null,
            lineDashOffset: 0,
            shadowBlur: 0,
            shadowOffsetX: 0,
            shadowOffsetY: 0,
            lineWidth: 1,
            strokeNoScale: !1,
            text: null,
            textFill: "#000",
            textStroke: null,
            textPosition: "inside",
            textBaseline: null,
            textAlign: null,
            textVerticalAlign: null,
            textDistance: 5,
            textShadowBlur: 0,
            textShadowOffsetX: 0,
            textShadowOffsetY: 0,
            bind: function(t, e) {
                for (var n = this.fill,
                r = this.stroke,
                o = 0; o < i.length; o++) {
                    var a = i[o];
                    null != this[a] && (t[a] = this[a])
                }
                if (null != r) {
                    var s = this.lineWidth;
                    t.lineWidth = s / (this.strokeNoScale && e && e.getLineScale ? e.getLineScale() : 1)
                }
                null == n || "none" === n || n.colorStops || (t.fillStyle = n),
                null == r || "none" === r || r.colorStops || (t.strokeStyle = r),
                null != this.opacity && (t.globalAlpha = this.opacity)
            },
            extendFrom: function(t, e) {
                if (t) {
                    var i = this;
                    for (var n in t) ! t.hasOwnProperty(n) || !e && i.hasOwnProperty(n) || (i[n] = t[n])
                }
            },
            set: function(t, e) {
                "string" == typeof t ? this[t] = e: this.extendFrom(t, !0)
            },
            clone: function() {
                var t = new this.constructor;
                return t.extendFrom(this, !0),
                t
            },
            createLinearGradient: function(t, e, i) {
                var n = e.x * i.width + i.x,
                r = e.x2 * i.width + i.x,
                o = e.y * i.height + i.y,
                a = e.y2 * i.height + i.y,
                s = t.createLinearGradient(n, o, r, a);
                return s
            },
            createRadialGradient: function(t, e, i) {
                var n = i.width,
                r = i.height,
                o = Math.min(n, r),
                a = e.x * n + i.x,
                s = e.y * r + i.y,
                l = e.r * o,
                h = t.createRadialGradient(a, s, 0, a, s, l);
                return h
            },
            getGradient: function(t, e, i) {
                for (var n = "radial" === e.type ? "createRadialGradient": "createLinearGradient", r = this[n](t, e, i), o = e.colorStops, a = 0; a < o.length; a++) r.addColorStop(o[a].offset, o[a].color);
                return r
            }
        };
        var r, o, a = n.prototype;
        for (o = 0; o < i.length; o++) r = i[o],
        r in a || (a[r] = null);
        t.exports = n
    },
    function(t, e, i) {
        var n = i(5),
        r = n.min,
        o = n.max,
        a = n.scale,
        s = n.distance,
        l = n.add;
        t.exports = function(t, e, i, h) {
            var c, u, d, f, p = [],
            g = [],
            m = [],
            v = [];
            if (h) {
                d = [1 / 0, 1 / 0],
                f = [ - (1 / 0), -(1 / 0)];
                for (var y = 0,
                x = t.length; x > y; y++) r(d, d, t[y]),
                o(f, f, t[y]);
                r(d, d, h[0]),
                o(f, f, h[1])
            }
            for (var y = 0,
            x = t.length; x > y; y++) {
                var _ = t[y];
                if (i) c = t[y ? y - 1 : x - 1],
                u = t[(y + 1) % x];
                else {
                    if (0 === y || y === x - 1) {
                        p.push(n.clone(t[y]));
                        continue
                    }
                    c = t[y - 1],
                    u = t[y + 1]
                }
                n.sub(g, u, c),
                a(g, g, e);
                var b = s(_, c),
                w = s(_, u),
                M = b + w;
                0 !== M && (b /= M, w /= M),
                a(m, g, -b),
                a(v, g, w);
                var S = l([], _, m),
                A = l([], _, v);
                h && (o(S, S, d), r(S, S, f), o(A, A, d), r(A, A, f)),
                p.push(S),
                p.push(A)
            }
            return i && p.push(p.shift()),
            p
        }
    },
    function(t, e, i) {
        function n(t, e, i, n, r, o, a) {
            var s = .5 * (i - t),
            l = .5 * (n - e);
            return (2 * (e - i) + s + l) * a + ( - 3 * (e - i) - 2 * s - l) * o + s * r + e
        }
        var r = i(5);
        t.exports = function(t, e) {
            for (var i = t.length,
            o = [], a = 0, s = 1; i > s; s++) a += r.distance(t[s - 1], t[s]);
            var l = a / 2;
            l = i > l ? i: l;
            for (var s = 0; l > s; s++) {
                var h, c, u, d = s / (l - 1) * (e ? i: i - 1),
                f = Math.floor(d),
                p = d - f,
                g = t[f % i];
                e ? (h = t[(f - 1 + i) % i], c = t[(f + 1) % i], u = t[(f + 2) % i]) : (h = t[0 === f ? f: f - 1], c = t[f > i - 2 ? i - 1 : f + 1], u = t[f > i - 3 ? i - 1 : f + 2]);
                var m = p * p,
                v = p * m;
                o.push([n(h[0], g[0], c[0], u[0], p, m, v), n(h[1], g[1], c[1], u[1], p, m, v)])
            }
            return o
        }
    },
    function(t, e, i) {
        t.exports = i(6).extend({
            type: "arc",
            shape: {
                cx: 0,
                cy: 0,
                r: 0,
                startAngle: 0,
                endAngle: 2 * Math.PI,
                clockwise: !0
            },
            style: {
                stroke: "#000",
                fill: null
            },
            buildPath: function(t, e) {
                var i = e.cx,
                n = e.cy,
                r = Math.max(e.r, 0),
                o = e.startAngle,
                a = e.endAngle,
                s = e.clockwise,
                l = Math.cos(o),
                h = Math.sin(o);
                t.moveTo(l * r + i, h * r + n),
                t.arc(i, n, r, o, a, !s)
            }
        })
    },
    function(t, e, i) {
        "use strict";
        function n(t, e, i) {
            var n = t.cpx2,
            r = t.cpy2;
            return null === n || null === r ? [(i ? u: h)(t.x1, t.cpx1, t.cpx2, t.x2, e), (i ? u: h)(t.y1, t.cpy1, t.cpy2, t.y2, e)] : [(i ? c: l)(t.x1, t.cpx1, t.x2, e), (i ? c: l)(t.y1, t.cpy1, t.y2, e)]
        }
        var r = i(16),
        o = i(5),
        a = r.quadraticSubdivide,
        s = r.cubicSubdivide,
        l = r.quadraticAt,
        h = r.cubicAt,
        c = r.quadraticDerivativeAt,
        u = r.cubicDerivativeAt,
        d = [];
        t.exports = i(6).extend({
            type: "bezier-curve",
            shape: {
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 0,
                cpx1: 0,
                cpy1: 0,
                percent: 1
            },
            style: {
                stroke: "#000",
                fill: null
            },
            buildPath: function(t, e) {
                var i = e.x1,
                n = e.y1,
                r = e.x2,
                o = e.y2,
                l = e.cpx1,
                h = e.cpy1,
                c = e.cpx2,
                u = e.cpy2,
                f = e.percent;
                0 !== f && (t.moveTo(i, n), null == c || null == u ? (1 > f && (a(i, l, r, f, d), l = d[1], r = d[2], a(n, h, o, f, d), h = d[1], o = d[2]), t.quadraticCurveTo(l, h, r, o)) : (1 > f && (s(i, l, c, r, f, d), l = d[1], c = d[2], r = d[3], s(n, h, u, o, f, d), h = d[1], u = d[2], o = d[3]), t.bezierCurveTo(l, h, c, u, r, o)))
            },
            pointAt: function(t) {
                return n(this.shape, t, !1)
            },
            tangentAt: function(t) {
                var e = n(this.shape, t, !0);
                return o.normalize(e, e)
            }
        })
    },
    function(t, e, i) {
        "use strict";
        t.exports = i(6).extend({
            type: "circle",
            shape: {
                cx: 0,
                cy: 0,
                r: 0
            },
            buildPath: function(t, e) {
                t.moveTo(e.cx + e.r, e.cy),
                t.arc(e.cx, e.cy, e.r, 0, 2 * Math.PI, !0)
            }
        })
    },
    function(t, e, i) {
        t.exports = i(6).extend({
            type: "line",
            shape: {
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 0,
                percent: 1
            },
            style: {
                stroke: "#000",
                fill: null
            },
            buildPath: function(t, e) {
                var i = e.x1,
                n = e.y1,
                r = e.x2,
                o = e.y2,
                a = e.percent;
                0 !== a && (t.moveTo(i, n), 1 > a && (r = i * (1 - a) + r * a, o = n * (1 - a) + o * a), t.lineTo(r, o))
            },
            pointAt: function(t) {
                var e = this.shape;
                return [e.x1 * (1 - t) + e.x2 * t, e.y1 * (1 - t) + e.y2 * t]
            }
        })
    },
    function(t, e, i) {
        var n = i(59);
        t.exports = i(6).extend({
            type: "polygon",
            shape: {
                points: null,
                smooth: !1,
                smoothConstraint: null
            },
            buildPath: function(t, e) {
                n.buildPath(t, e, !0)
            }
        })
    },
    function(t, e, i) {
        var n = i(59);
        t.exports = i(6).extend({
            type: "polyline",
            shape: {
                points: null,
                smooth: !1,
                smoothConstraint: null
            },
            style: {
                stroke: "#000",
                fill: null
            },
            buildPath: function(t, e) {
                n.buildPath(t, e, !1)
            }
        })
    },
    function(t, e, i) {
        var n = i(60);
        t.exports = i(6).extend({
            type: "rect",
            shape: {
                r: 0,
                x: 0,
                y: 0,
                width: 0,
                height: 0
            },
            buildPath: function(t, e) {
                var i = e.x,
                r = e.y,
                o = e.width,
                a = e.height;
                e.r ? n.buildPath(t, e) : t.rect(i, r, o, a),
                t.closePath()
            }
        })
    },
    function(t, e, i) {
        t.exports = i(6).extend({
            type: "ring",
            shape: {
                cx: 0,
                cy: 0,
                r: 0,
                r0: 0
            },
            buildPath: function(t, e) {
                var i = e.cx,
                n = e.cy,
                r = 2 * Math.PI;
                t.moveTo(i + e.r, n),
                t.arc(i, n, e.r, 0, r, !1),
                t.moveTo(i + e.r0, n),
                t.arc(i, n, e.r0, 0, r, !0)
            }
        })
    },
    function(t, e, i) {
        t.exports = i(6).extend({
            type: "sector",
            shape: {
                cx: 0,
                cy: 0,
                r0: 0,
                r: 0,
                startAngle: 0,
                endAngle: 2 * Math.PI,
                clockwise: !0
            },
            buildPath: function(t, e) {
                var i = e.cx,
                n = e.cy,
                r = Math.max(e.r0 || 0, 0),
                o = Math.max(e.r, 0),
                a = e.startAngle,
                s = e.endAngle,
                l = e.clockwise,
                h = Math.cos(a),
                c = Math.sin(a);
                t.moveTo(h * r + i, c * r + n),
                t.lineTo(h * o + i, c * o + n),
                t.arc(i, n, o, a, s, !l),
                t.lineTo(Math.cos(s) * r + i, Math.sin(s) * r + n),
                0 !== r && t.arc(i, n, r, s, a, l),
                t.closePath()
            }
        })
    },
    function(t, e, i) {
        "use strict";
        var n = i(56),
        r = i(1),
        o = r.isString,
        a = r.isFunction,
        s = r.isObject,
        l = i(45),
        h = function() {
            this.animators = []
        };
        h.prototype = {
            constructor: h,
            animate: function(t, e) {
                var i, o = !1,
                a = this,
                s = this.__zr;
                if (t) {
                    var h = t.split("."),
                    c = a;
                    o = "shape" === h[0];
                    for (var u = 0,
                    d = h.length; d > u; u++) c && (c = c[h[u]]);
                    c && (i = c)
                } else i = a;
                if (!i) return void l('Property "' + t + '" is not existed in element ' + a.id);
                var f = a.animators,
                p = new n(i, e);
                return p.during(function(t) {
                    a.dirty(o)
                }).done(function() {
                    f.splice(r.indexOf(f, p), 1)
                }),
                f.push(p),
                s && s.animation.addAnimator(p),
                p
            },
            stopAnimation: function(t) {
                for (var e = this.animators,
                i = e.length,
                n = 0; i > n; n++) e[n].stop(t);
                return e.length = 0,
                this
            },
            animateTo: function(t, e, i, n, r) {
                function s() {
                    h--,
                    h || r && r()
                }
                o(i) ? (r = n, n = i, i = 0) : a(n) ? (r = n, n = "linear", i = 0) : a(i) ? (r = i, i = 0) : a(e) ? (r = e, e = 500) : e || (e = 500),
                this.stopAnimation(),
                this._animateToShallow("", this, t, e, i, n, r);
                var l = this.animators.slice(),
                h = l.length;
                h || r && r();
                for (var c = 0; c < l.length; c++) l[c].done(s).start(n)
            },
            _animateToShallow: function(t, e, i, n, o) {
                var a = {},
                l = 0;
                for (var h in i) if (null != e[h]) s(i[h]) && !r.isArrayLike(i[h]) ? this._animateToShallow(t ? t + "." + h: h, e[h], i[h], n, o) : (a[h] = i[h], l++);
                else if (null != i[h]) if (t) {
                    var c = {};
                    c[t] = {},
                    c[t][h] = i[h],
                    this.attr(c)
                } else this.attr(h, i[h]);
                return l > 0 && this.animate(t, !1).when(null == n ? 500 : n, a).delay(o || 0),
                this
            }
        },
        t.exports = h
    },
    function(t, e) {
        function i() {
            this.on("mousedown", this._dragStart, this),
            this.on("mousemove", this._drag, this),
            this.on("mouseup", this._dragEnd, this),
            this.on("globalout", this._dragEnd, this)
        }
        i.prototype = {
            constructor: i,
            _dragStart: function(t) {
                var e = t.target;
                e && e.draggable && (this._draggingTarget = e, e.dragging = !0, this._x = t.offsetX, this._y = t.offsetY, this._dispatchProxy(e, "dragstart", t.event))
            },
            _drag: function(t) {
                var e = this._draggingTarget;
                if (e) {
                    var i = t.offsetX,
                    n = t.offsetY,
                    r = i - this._x,
                    o = n - this._y;
                    this._x = i,
                    this._y = n,
                    e.drift(r, o, t),
                    this._dispatchProxy(e, "drag", t.event);
                    var a = this.findHover(i, n, e),
                    s = this._dropTarget;
                    this._dropTarget = a,
                    e !== a && (s && a !== s && this._dispatchProxy(s, "dragleave", t.event), a && a !== s && this._dispatchProxy(a, "dragenter", t.event))
                }
            },
            _dragEnd: function(t) {
                var e = this._draggingTarget;
                e && (e.dragging = !1),
                this._dispatchProxy(e, "dragend", t.event),
                this._dropTarget && this._dispatchProxy(this._dropTarget, "drop", t.event),
                this._draggingTarget = null,
                this._dropTarget = null
            }
        },
        t.exports = i
    },
    function(t, e, i) {
        function n(t, e, i, n, r, o, a, s, l, h, c) {
            var g = l * (p / 180),
            y = f(g) * (t - i) / 2 + d(g) * (e - n) / 2,
            x = -1 * d(g) * (t - i) / 2 + f(g) * (e - n) / 2,
            _ = y * y / (a * a) + x * x / (s * s);
            _ > 1 && (a *= u(_), s *= u(_));
            var b = (r === o ? -1 : 1) * u((a * a * (s * s) - a * a * (x * x) - s * s * (y * y)) / (a * a * (x * x) + s * s * (y * y))) || 0,
            w = b * a * x / s,
            M = b * -s * y / a,
            S = (t + i) / 2 + f(g) * w - d(g) * M,
            A = (e + n) / 2 + d(g) * w + f(g) * M,
            T = v([1, 0], [(y - w) / a, (x - M) / s]),
            C = [(y - w) / a, (x - M) / s],
            I = [( - 1 * y - w) / a, ( - 1 * x - M) / s],
            k = v(C, I);
            m(C, I) <= -1 && (k = p),
            m(C, I) >= 1 && (k = 0),
            0 === o && k > 0 && (k -= 2 * p),
            1 === o && 0 > k && (k += 2 * p),
            c.addData(h, S, A, a, s, T, k, g, o)
        }
        function r(t) {
            if (!t) return [];
            var e, i = t.replace(/-/g, " -").replace(/  /g, " ").replace(/ /g, ",").replace(/,,/g, ",");
            for (e = 0; e < c.length; e++) i = i.replace(new RegExp(c[e], "g"), "|" + c[e]);
            var r, o = i.split("|"),
            a = 0,
            l = 0,
            h = new s,
            u = s.CMD;
            for (e = 1; e < o.length; e++) {
                var d, f = o[e],
                p = f.charAt(0),
                g = 0,
                m = f.slice(1).replace(/e,-/g, "e-").split(",");
                m.length > 0 && "" === m[0] && m.shift();
                for (var v = 0; v < m.length; v++) m[v] = parseFloat(m[v]);
                for (; g < m.length && !isNaN(m[g]) && !isNaN(m[0]);) {
                    var y, x, _, b, w, M, S, A = a,
                    T = l;
                    switch (p) {
                    case "l":
                        a += m[g++],
                        l += m[g++],
                        d = u.L,
                        h.addData(d, a, l);
                        break;
                    case "L":
                        a = m[g++],
                        l = m[g++],
                        d = u.L,
                        h.addData(d, a, l);
                        break;
                    case "m":
                        a += m[g++],
                        l += m[g++],
                        d = u.M,
                        h.addData(d, a, l),
                        p = "l";
                        break;
                    case "M":
                        a = m[g++],
                        l = m[g++],
                        d = u.M,
                        h.addData(d, a, l),
                        p = "L";
                        break;
                    case "h":
                        a += m[g++],
                        d = u.L,
                        h.addData(d, a, l);
                        break;
                    case "H":
                        a = m[g++],
                        d = u.L,
                        h.addData(d, a, l);
                        break;
                    case "v":
                        l += m[g++],
                        d = u.L,
                        h.addData(d, a, l);
                        break;
                    case "V":
                        l = m[g++],
                        d = u.L,
                        h.addData(d, a, l);
                        break;
                    case "C":
                        d = u.C,
                        h.addData(d, m[g++], m[g++], m[g++], m[g++], m[g++], m[g++]),
                        a = m[g - 2],
                        l = m[g - 1];
                        break;
                    case "c":
                        d = u.C,
                        h.addData(d, m[g++] + a, m[g++] + l, m[g++] + a, m[g++] + l, m[g++] + a, m[g++] + l),
                        a += m[g - 2],
                        l += m[g - 1];
                        break;
                    case "S":
                        y = a,
                        x = l;
                        var C = h.len(),
                        I = h.data;
                        r === u.C && (y += a - I[C - 4], x += l - I[C - 3]),
                        d = u.C,
                        A = m[g++],
                        T = m[g++],
                        a = m[g++],
                        l = m[g++],
                        h.addData(d, y, x, A, T, a, l);
                        break;
                    case "s":
                        y = a,
                        x = l;
                        var C = h.len(),
                        I = h.data;
                        r === u.C && (y += a - I[C - 4], x += l - I[C - 3]),
                        d = u.C,
                        A = a + m[g++],
                        T = l + m[g++],
                        a += m[g++],
                        l += m[g++],
                        h.addData(d, y, x, A, T, a, l);
                        break;
                    case "Q":
                        A = m[g++],
                        T = m[g++],
                        a = m[g++],
                        l = m[g++],
                        d = u.Q,
                        h.addData(d, A, T, a, l);
                        break;
                    case "q":
                        A = m[g++] + a,
                        T = m[g++] + l,
                        a += m[g++],
                        l += m[g++],
                        d = u.Q,
                        h.addData(d, A, T, a, l);
                        break;
                    case "T":
                        y = a,
                        x = l;
                        var C = h.len(),
                        I = h.data;
                        r === u.Q && (y += a - I[C - 4], x += l - I[C - 3]),
                        a = m[g++],
                        l = m[g++],
                        d = u.Q,
                        h.addData(d, y, x, a, l);
                        break;
                    case "t":
                        y = a,
                        x = l;
                        var C = h.len(),
                        I = h.data;
                        r === u.Q && (y += a - I[C - 4], x += l - I[C - 3]),
                        a += m[g++],
                        l += m[g++],
                        d = u.Q,
                        h.addData(d, y, x, a, l);
                        break;
                    case "A":
                        _ = m[g++],
                        b = m[g++],
                        w = m[g++],
                        M = m[g++],
                        S = m[g++],
                        A = a,
                        T = l,
                        a = m[g++],
                        l = m[g++],
                        d = u.A,
                        n(A, T, a, l, M, S, _, b, w, d, h);
                        break;
                    case "a":
                        _ = m[g++],
                        b = m[g++],
                        w = m[g++],
                        M = m[g++],
                        S = m[g++],
                        A = a,
                        T = l,
                        a += m[g++],
                        l += m[g++],
                        d = u.A,
                        n(A, T, a, l, M, S, _, b, w, d, h)
                    }
                }
                "z" !== p && "Z" !== p || (d = u.Z, h.addData(d)),
                r = d
            }
            return h.toStatic(),
            h
        }
        function o(t, e) {
            var i, n = r(t);
            return e = e || {},
            e.buildPath = function(t) {
                t.setData(n.data),
                i && l(t, i);
                var e = t.getContext();
                e && t.rebuildPath(e)
            },
            e.applyTransform = function(t) {
                i || (i = h.create()),
                h.mul(i, t, i)
            },
            e
        }
        var a = i(6),
        s = i(28),
        l = i(157),
        h = i(19),
        c = ["m", "M", "l", "L", "v", "V", "h", "H", "z", "Z", "c", "C", "q", "Q", "t", "T", "s", "S", "a", "A"],
        u = Math.sqrt,
        d = Math.sin,
        f = Math.cos,
        p = Math.PI,
        g = function(t) {
            return Math.sqrt(t[0] * t[0] + t[1] * t[1])
        },
        m = function(t, e) {
            return (t[0] * e[0] + t[1] * e[1]) / (g(t) * g(e))
        },
        v = function(t, e) {
            return (t[0] * e[1] < t[1] * e[0] ? -1 : 1) * Math.acos(m(t, e))
        };
        t.exports = {
            createFromString: function(t, e) {
                return new a(o(t, e))
            },
            extendFromString: function(t, e) {
                return a.extend(o(t, e))
            },
            mergePath: function(t, e) {
                var i, n, r = [],
                o = t.length;
                for (n = 0; o > n; n++) i = t[n],
                i.__dirty && i.buildPath(i.path, i.shape),
                r.push(i.path);
                var s = new a(e);
                return s.buildPath = function(t) {
                    t.appendPath(r);
                    var e = t.getContext();
                    e && t.rebuildPath(e)
                },
                s
            }
        }
    },
    function(t, e, i) {
        function n(t, e) {
            var i, n, o, c, u, d, f = t.data,
            p = r.M,
            g = r.C,
            m = r.L,
            v = r.R,
            y = r.A,
            x = r.Q;
            for (o = 0, c = 0; o < f.length;) {
                switch (i = f[o++], c = o, n = 0, i) {
                case p:
                    n = 1;
                    break;
                case m:
                    n = 1;
                    break;
                case g:
                    n = 3;
                    break;
                case x:
                    n = 2;
                    break;
                case y:
                    var _ = e[4],
                    b = e[5],
                    w = l(e[0] * e[0] + e[1] * e[1]),
                    M = l(e[2] * e[2] + e[3] * e[3]),
                    S = h( - e[1] / M, e[0] / w);
                    f[o++] += _,
                    f[o++] += b,
                    f[o++] *= w,
                    f[o++] *= M,
                    f[o++] += S,
                    f[o++] += S,
                    o += 2,
                    c = o;
                    break;
                case v:
                    d[0] = f[o++],
                    d[1] = f[o++],
                    a(d, d, e),
                    f[c++] = d[0],
                    f[c++] = d[1],
                    d[0] += f[o++],
                    d[1] += f[o++],
                    a(d, d, e),
                    f[c++] = d[0],
                    f[c++] = d[1]
                }
                for (u = 0; n > u; u++) {
                    var d = s[u];
                    d[0] = f[o++],
                    d[1] = f[o++],
                    a(d, d, e),
                    f[c++] = d[0],
                    f[c++] = d[1]
                }
            }
        }
        var r = i(28).CMD,
        o = i(5),
        a = o.applyTransform,
        s = [[], [], []],
        l = Math.sqrt,
        h = Math.atan2;
        t.exports = n
    },
    function(t, e, i) {
        if (!i(14).canvasSupported) {
            var n, r = "urn:schemas-microsoft-com:vml",
            o = window,
            a = o.document,
            s = !1;
            try { ! a.namespaces.zrvml && a.namespaces.add("zrvml", r),
                n = function(t) {
                    return a.createElement("<zrvml:" + t + ' class="zrvml">')
                }
            } catch(l) {
                n = function(t) {
                    return a.createElement("<" + t + ' xmlns="' + r + '" class="zrvml">')
                }
            }
            var h = function() {
                if (!s) {
                    s = !0;
                    var t = a.styleSheets;
                    t.length < 31 ? a.createStyleSheet().addRule(".zrvml", "behavior:url(#default#VML)") : t[0].addRule(".zrvml", "behavior:url(#default#VML)")
                }
            };
            t.exports = {
                doc: a,
                initVML: h,
                createNode: n
            }
        }
    },
    , ,
    function(t, e, i) {
        function n(t, e, i) {
            v.call(this),
            this.type = t,
            this.zr = e,
            this.opt = y.clone(i),
            this.group = new x.Group,
            this._containerRect = null,
            this._track = [],
            this._dragging,
            this._cover,
            this._disabled = !0,
            this._handlers = {
                mousedown: _(s, this),
                mousemove: _(l, this),
                mouseup: _(h, this)
            },
            b(C,
            function(t) {
                this.zr.on(t, this._handlers[t])
            },
            this)
        }
        function r(t) {
            t.traverse(function(t) {
                t.z = A
            })
        }
        function o(t, e) {
            var i = this.group.transformCoordToLocal(t, e);
            return ! this._containerRect || this._containerRect.contain(i[0], i[1])
        }
        function a(t) {
            var e = t.event;
            e.preventDefault && e.preventDefault()
        }
        function s(t) {
            if (! (this._disabled || t.target && t.target.draggable)) {
                a(t);
                var e = t.offsetX,
                i = t.offsetY;
                o.call(this, e, i) && (this._dragging = !0, this._track = [[e, i]])
            }
        }
        function l(t) {
            this._dragging && !this._disabled && (a(t), c.call(this, t))
        }
        function h(t) {
            this._dragging && !this._disabled && (a(t), c.call(this, t, !0), this._dragging = !1, this._track = [])
        }
        function c(t, e) {
            var i = t.offsetX,
            n = t.offsetY;
            if (o.call(this, i, n)) {
                this._track.push([i, n]);
                var r = u.call(this) ? I[this.type].getRanges.call(this) : [];
                d.call(this, r),
                this.trigger("selected", y.clone(r)),
                e && this.trigger("selectEnd", y.clone(r))
            }
        }
        function u() {
            var t = this._track;
            if (!t.length) return ! 1;
            var e = t[t.length - 1],
            i = t[0],
            n = e[0] - i[0],
            r = e[1] - i[1],
            o = S(n * n + r * r, .5);
            return o > T
        }
        function d(t) {
            var e = I[this.type];
            t && t.length ? (this._cover || (this._cover = e.create.call(this), this.group.add(this._cover)), e.update.call(this, t)) : (this.group.remove(this._cover), this._cover = null),
            r(this.group)
        }
        function f() {
            var t = this.group,
            e = t.parent;
            e && e.remove(t)
        }
        function p() {
            var t = this.opt;
            return new x.Rect({
                style: {
                    stroke: t.stroke,
                    fill: t.fill,
                    lineWidth: t.lineWidth,
                    opacity: t.opacity
                }
            })
        }
        function g() {
            return y.map(this._track,
            function(t) {
                return this.group.transformCoordToLocal(t[0], t[1])
            },
            this)
        }
        function m() {
            var t = g.call(this),
            e = t.length - 1;
            return 0 > e && (e = 0),
            [t[0], t[e]]
        }
        var v = i(21),
        y = i(1),
        x = i(3),
        _ = y.bind,
        b = y.each,
        w = Math.min,
        M = Math.max,
        S = Math.pow,
        A = 1e4,
        T = 2,
        C = ["mousedown", "mousemove", "mouseup"];
        n.prototype = {
            constructor: n,
            enable: function(t, e) {
                this._disabled = !1,
                f.call(this),
                this._containerRect = e !== !1 ? e || t.getBoundingRect() : null,
                t.add(this.group)
            },
            update: function(t) {
                d.call(this, t && y.clone(t))
            },
            disable: function() {
                this._disabled = !0,
                f.call(this)
            },
            dispose: function() {
                this.disable(),
                b(C,
                function(t) {
                    this.zr.off(t, this._handlers[t])
                },
                this)
            }
        },
        y.mixin(n, v);
        var I = {
            line: {
                create: p,
                getRanges: function() {
                    var t = m.call(this),
                    e = w(t[0][0], t[1][0]),
                    i = M(t[0][0], t[1][0]);
                    return [[e, i]]
                },
                update: function(t) {
                    var e = t[0],
                    i = this.opt.width;
                    this._cover.setShape({
                        x: e[0],
                        y: -i / 2,
                        width: e[1] - e[0],
                        height: i
                    })
                }
            },
            rect: {
                create: p,
                getRanges: function() {
                    var t = m.call(this),
                    e = [w(t[1][0], t[0][0]), w(t[1][1], t[0][1])],
                    i = [M(t[1][0], t[0][0]), M(t[1][1], t[0][1])];
                    return [[[e[0], i[0]], [e[1], i[1]]]]
                },
                update: function(t) {
                    var e = t[0];
                    this._cover.setShape({
                        x: e[0][0],
                        y: e[1][0],
                        width: e[0][1] - e[0][0],
                        height: e[1][1] - e[1][0]
                    })
                }
            }
        };
        t.exports = n
    },
    ,
    function(t, e, i) {
        function n() {
            this.group = new r.Group,
            this._symbolEl = new s({
                silent: !0
            })
        }
        var r = i(3),
        o = i(25),
        a = i(1),
        s = r.extendShape({
            shape: {
                points: null,
                sizes: null
            },
            symbolProxy: null,
            buildPath: function(t, e) {
                for (var i = e.points,
                n = e.sizes,
                r = this.symbolProxy,
                o = r.shape,
                a = 0; a < i.length; a++) {
                    var s = i[a],
                    l = n[a];
                    l[0] < 4 ? t.rect(s[0] - l[0] / 2, s[1] - l[1] / 2, l[0], l[1]) : (o.x = s[0] - l[0] / 2, o.y = s[1] - l[1] / 2, o.width = l[0], o.height = l[1], r.buildPath(t, o))
                }
            }
        }),
        l = n.prototype;
        l.updateData = function(t) {
            this.group.removeAll();
            var e = this._symbolEl,
            i = t.hostModel;
            e.setShape({
                points: t.mapArray(t.getItemLayout),
                sizes: t.mapArray(function(e) {
                    var i = t.getItemVisual(e, "symbolSize");
                    return a.isArray(i) || (i = [i, i]),
                    i
                })
            }),
            e.symbolProxy = o.createSymbol(t.getVisual("symbol"), 0, 0, 0, 0),
            e.setColor = e.symbolProxy.setColor,
            e.useStyle(i.getModel("itemStyle.normal").getItemStyle(["color"]));
            var n = t.getVisual("color");
            n && e.setColor(n),
            this.group.add(this._symbolEl)
        },
        l.updateLayout = function(t) {
            var e = t.getData();
            this._symbolEl.setShape({
                points: e.mapArray(e.getItemLayout)
            })
        },
        l.remove = function() {
            this.group.removeAll()
        },
        t.exports = n
    },
    function(t, e, i) {
        function n(t) {
            return null == t.cpx1 || null == t.cpy1
        }
        var r = i(3),
        o = i(5),
        a = r.Line.prototype,
        s = r.BezierCurve.prototype;
        t.exports = r.extendShape({
            type: "ec-line",
            style: {
                stroke: "#000",
                fill: null
            },
            shape: {
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 0,
                percent: 1,
                cpx1: null,
                cpy1: null
            },
            buildPath: function(t, e) { (n(e) ? a: s).buildPath(t, e)
            },
            pointAt: function(t) {
                return n(this.shape) ? a.pointAt.call(this, t) : s.pointAt.call(this, t)
            },
            tangentAt: function(t) {
                var e = this.shape,
                i = n(e) ? [e.x2 - e.x1, e.y2 - e.y1] : s.tangentAt.call(this, t);
                return o.normalize(i, i)
            }
        })
    },
    function(t, e, i) {
        var n = i(1),
        r = i(2);
        i(166),
        i(167),
        r.registerVisualCoding("chart", n.curry(i(44), "scatter", "circle", null)),
        r.registerLayout(n.curry(i(53), "scatter")),
        i(36)
    },
    function(t, e, i) {
        "use strict";
        var n = i(35),
        r = i(13);
        t.exports = r.extend({
            type: "series.scatter",
            dependencies: ["grid", "polar"],
            getInitialData: function(t, e) {
                var i = n(t.data, this, e);
                return i
            },
            defaultOption: {
                coordinateSystem: "cartesian2d",
                zlevel: 0,
                z: 2,
                legendHoverLink: !0,
                hoverAnimation: !0,
                xAxisIndex: 0,
                yAxisIndex: 0,
                polarIndex: 0,
                geoIndex: 0,
                symbolSize: 10,
                large: !1,
                largeThreshold: 2e3,
                itemStyle: {
                    normal: {
                        opacity: .8
                    }
                }
            }
        })
    },
    function(t, e, i) {
        var n = i(39),
        r = i(163);
        i(2).extendChartView({
            type: "scatter",
            init: function() {
                this._normalSymbolDraw = new n,
                this._largeSymbolDraw = new r
            },
            render: function(t, e, i) {
                var n = t.getData(),
                r = this._largeSymbolDraw,
                o = this._normalSymbolDraw,
                a = this.group,
                s = t.get("large") && n.count() > t.get("largeThreshold") ? r: o;
                this._symbolDraw = s,
                s.updateData(n),
                a.add(s.group),
                a.remove(s === r ? o.group: r.group)
            },
            updateLayout: function(t) {
                this._symbolDraw.updateLayout(t)
            },
            remove: function(t, e) {
                this._symbolDraw && this._symbolDraw.remove(e, !0)
            }
        })
    },
    function(t, e, i) {
        i(100),
        i(40),
        i(41),
        i(174),
        i(175),
        i(170),
        i(171),
        i(98),
        i(97)
    },
    function(t, e, i) {
        function n(t, e) {
            var i = [1 / 0, -(1 / 0)];
            return h(e,
            function(e) {
                var n = e.getData();
                n && h(e.coordDimToDataDim(t),
                function(t) {
                    var e = n.getDataExtent(t);
                    e[0] < i[0] && (i[0] = e[0]),
                    e[1] > i[1] && (i[1] = e[1])
                })
            },
            this),
            i
        }
        function r(t, e, i) {
            var n = i.getAxisModel(),
            r = n.axis.scale,
            a = [0, 100],
            s = [t.start, t.end],
            u = [];
            return e = e.slice(),
            o(e, n, r),
            h(["startValue", "endValue"],
            function(e) {
                u.push(null != t[e] ? r.parse(t[e]) : null)
            }),
            h([0, 1],
            function(t) {
                var i = u[t],
                n = s[t];
                null != n || null == i ? (null == n && (n = a[t]), i = r.parse(l.linearMap(n, a, e, !0))) : n = l.linearMap(i, e, a, !0),
                u[t] = i,
                s[t] = n
            }),
            {
                valueWindow: c(u),
                percentWindow: c(s)
            }
        }
        function o(t, e, i) {
            return h(["min", "max"],
            function(n, r) {
                var o = e.get(n, !0);
                null != o && (o + "").toLowerCase() !== "data" + n && (t[r] = i.parse(o))
            }),
            e.get("scale", !0) || (t[0] > 0 && (t[0] = 0), t[1] < 0 && (t[1] = 0)),
            t
        }
        function a(t, e) {
            var i = t.getAxisModel(),
            n = t._percentWindow,
            r = t._valueWindow;
            if (n) {
                var o = e || 0 === n[0] && 100 === n[1],
                a = !e && l.getPixelPrecision(r, [0, 500]),
                s = !(e || 20 > a && a >= 0),
                h = e || o || s;
                i.setRange && i.setRange(h ? null: +r[0].toFixed(a), h ? null: +r[1].toFixed(a))
            }
        }
        var s = i(1),
        l = i(4),
        h = s.each,
        c = l.asc,
        u = function(t, e, i, n) {
            this._dimName = t,
            this._axisIndex = e,
            this._valueWindow,
            this._percentWindow,
            this._dataExtent,
            this.ecModel = n,
            this._dataZoomModel = i
        };
        u.prototype = {
            constructor: u,
            hostedBy: function(t) {
                return this._dataZoomModel === t
            },
            getDataExtent: function() {
                return this._dataExtent.slice()
            },
            getDataValueWindow: function() {
                return this._valueWindow.slice()
            },
            getDataPercentWindow: function() {
                return this._percentWindow.slice()
            },
            getTargetSeriesModels: function() {
                var t = [];
                return this.ecModel.eachSeries(function(e) {
                    this._axisIndex === e.get(this._dimName + "AxisIndex") && t.push(e)
                },
                this),
                t
            },
            getAxisModel: function() {
                return this.ecModel.getComponent(this._dimName + "Axis", this._axisIndex)
            },
            getOtherAxisModel: function() {
                var t, e, i = this._dimName,
                n = this.ecModel,
                r = this.getAxisModel(),
                o = "x" === i || "y" === i;
                o ? (e = "gridIndex", t = "x" === i ? "y": "x") : (e = "polarIndex", t = "angle" === i ? "radius": "angle");
                var a;
                return n.eachComponent(t + "Axis",
                function(t) { (t.get(e) || 0) === (r.get(e) || 0) && (a = t)
                }),
                a
            },
            reset: function(t) {
                if (t === this._dataZoomModel) {
                    var e = this._dataExtent = n(this._dimName, this.getTargetSeriesModels()),
                    i = r(t.option, e, this);
                    this._valueWindow = i.valueWindow,
                    this._percentWindow = i.percentWindow,
                    a(this)
                }
            },
            restore: function(t) {
                t === this._dataZoomModel && (this._valueWindow = this._percentWindow = null, a(this, !0))
            },
            filterData: function(t) {
                function e(t) {
                    return t >= o[0] && t <= o[1]
                }
                if (t === this._dataZoomModel) {
                    var i = this._dimName,
                    n = this.getTargetSeriesModels(),
                    r = t.get("filterMode"),
                    o = this._valueWindow,
                    a = this.getOtherAxisModel();
                    t.get("$fromToolbox") && a && "category" === a.get("type") && (r = "empty"),
                    h(n,
                    function(t) {
                        var n = t.getData();
                        n && h(t.coordDimToDataDim(i),
                        function(i) {
                            "empty" === r ? t.setData(n.map(i,
                            function(t) {
                                return e(t) ? t: NaN
                            })) : n.filterSelf(i, e)
                        })
                    })
                }
            }
        },
        t.exports = u
    },
    function(t, e, i) {
        t.exports = i(40).extend({
            type: "dataZoom.inside",
            defaultOption: {
                zoomLock: !1
            }
        })
    },
    function(t, e, i) {
        function n(t, e, i, n) {
            e = e.slice();
            var r = n.axisModels[0];
            if (r) {
                var a = o(t, r, i),
                s = a.signal * (e[1] - e[0]) * a.pixel / a.pixelLength;
                return h(s, e, [0, 100], "rigid"),
                e
            }
        }
        function r(t, e, i, n, r, s) {
            i = i.slice();
            var l = r.axisModels[0];
            if (l) {
                var h = o(e, l, n),
                c = h.pixel - h.pixelStart,
                u = c / h.pixelLength * (i[1] - i[0]) + i[0];
                return t = Math.max(t, 0),
                i[0] = (i[0] - u) * t + u,
                i[1] = (i[1] - u) * t + u,
                a(i)
            }
        }
        function o(t, e, i) {
            var n = e.axis,
            r = i.rectProvider(),
            o = {};
            return "x" === n.dim ? (o.pixel = t[0], o.pixelLength = r.width, o.pixelStart = r.x, o.signal = n.inverse ? 1 : -1) : (o.pixel = t[1], o.pixelLength = r.height, o.pixelStart = r.y, o.signal = n.inverse ? -1 : 1),
            o
        }
        function a(t) {
            var e = [0, 100];
            return ! (t[0] <= e[1]) && (t[0] = e[1]),
            !(t[1] <= e[1]) && (t[1] = e[1]),
            !(t[0] >= e[0]) && (t[0] = e[0]),
            !(t[1] >= e[0]) && (t[1] = e[0]),
            t
        }
        var s = i(41),
        l = i(1),
        h = i(71),
        c = i(176),
        u = l.bind,
        d = s.extend({
            type: "dataZoom.inside",
            init: function(t, e) {
                this._range
            },
            render: function(t, e, i, n) {
                d.superApply(this, "render", arguments),
                c.shouldRecordRange(n, t.id) && (this._range = t.getPercentRange());
                var r = this.getTargetInfo().cartesians,
                o = l.map(r,
                function(t) {
                    return c.generateCoordId(t.model)
                });
                l.each(r,
                function(e) {
                    var n = e.model;
                    c.register(i, {
                        coordId: c.generateCoordId(n),
                        allCoordIds: o,
                        coordinateSystem: n.coordinateSystem,
                        dataZoomId: t.id,
                        throttleRage: t.get("throttle", !0),
                        panGetRange: u(this._onPan, this, e),
                        zoomGetRange: u(this._onZoom, this, e)
                    })
                },
                this)
            },
            remove: function() {
                c.unregister(this.api, this.dataZoomModel.id),
                d.superApply(this, "remove", arguments),
                this._range = null
            },
            dispose: function() {
                c.unregister(this.api, this.dataZoomModel.id),
                d.superApply(this, "dispose", arguments),
                this._range = null
            },
            _onPan: function(t, e, i, r) {
                return this._range = n([i, r], this._range, e, t)
            },
            _onZoom: function(t, e, i, n, o) {
                var a = this.dataZoomModel;
                return a.option.zoomLock ? this._range: this._range = r(1 / i, [n, o], this._range, e, t, a)
            }
        });
        t.exports = d
    },
    function(t, e, i) {
        var n = i(40);
        t.exports = n.extend({
            type: "dataZoom.select"
        })
    },
    function(t, e, i) {
        t.exports = i(41).extend({
            type: "dataZoom.select"
        })
    },
    function(t, e, i) {
        var n = i(40),
        r = n.extend({
            type: "dataZoom.slider",
            layoutMode: "box",
            defaultOption: {
                show: !0,
                right: "ph",
                top: "ph",
                width: "ph",
                height: "ph",
                left: null,
                bottom: null,
                backgroundColor: "rgba(47,69,84,0)",
                dataBackgroundColor: "#ddd",
                fillerColor: "rgba(47,69,84,0.15)",
                handleColor: "rgba(148,164,165,0.95)",
                handleSize: 10,
                labelPrecision: null,
                labelFormatter: null,
                showDetail: !0,
                showDataShadow: "auto",
                realtime: !0,
                zoomLock: !1,
                textStyle: {
                    color: "#333"
                }
            },
            mergeOption: function(t) {
                r.superApply(this, "mergeOption", arguments)
            }
        });
        t.exports = r
    },
    function(t, e, i) {
        function n(t) {
            return "x" === t ? "y": "x"
        }
        var r = i(1),
        o = i(3),
        a = i(125),
        s = i(41),
        l = o.Rect,
        h = i(4),
        c = h.linearMap,
        u = i(11),
        d = i(71),
        f = h.asc,
        p = r.bind,
        g = Math.round,
        m = Math.max,
        v = r.each,
        y = 7,
        x = 1,
        _ = 30,
        b = "horizontal",
        w = "vertical",
        M = 5,
        S = ["line", "bar", "candlestick", "scatter"],
        A = s.extend({
            type: "dataZoom.slider",
            init: function(t, e) {
                this._displayables = {},
                this._orient,
                this._range,
                this._handleEnds,
                this._size,
                this._halfHandleSize,
                this._location,
                this._dragging,
                this._dataShadowInfo,
                this.api = e
            },
            render: function(t, e, i, n) {
                return A.superApply(this, "render", arguments),
                a.createOrUpdate(this, "_dispatchZoomAction", this.dataZoomModel.get("throttle"), "fixRate"),
                this._orient = t.get("orient"),
                this._halfHandleSize = g(t.get("handleSize") / 2),
                this.dataZoomModel.get("show") === !1 ? void this.group.removeAll() : (n && "dataZoom" === n.type && n.from === this.uid || this._buildView(), void this._updateView())
            },
            remove: function() {
                A.superApply(this, "remove", arguments),
                a.clear(this, "_dispatchZoomAction")
            },
            dispose: function() {
                A.superApply(this, "dispose", arguments),
                a.clear(this, "_dispatchZoomAction")
            },
            _buildView: function() {
                var t = this.group;
                t.removeAll(),
                this._resetLocation(),
                this._resetInterval();
                var e = this._displayables.barGroup = new o.Group;
                this._renderBackground(),
                this._renderDataShadow(),
                this._renderHandle(),
                t.add(e),
                this._positionGroup()
            },
            _resetLocation: function() {
                var t = this.dataZoomModel,
                e = this.api,
                i = this._findCoordRect(),
                n = {
                    width: e.getWidth(),
                    height: e.getHeight()
                },
                o = this._orient === b ? {
                    right: n.width - i.x - i.width,
                    top: n.height - _ - y,
                    width: i.width,
                    height: _
                }: {
                    right: y,
                    top: i.y,
                    width: _,
                    height: i.height
                },
                a = u.getLayoutParams(t.option);
                r.each(["right", "top", "width", "height"],
                function(t) {
                    "ph" === a[t] && (a[t] = o[t])
                });
                var s = u.getLayoutRect(a, n, t.padding);
                this._location = {
                    x: s.x,
                    y: s.y
                },
                this._size = [s.width, s.height],
                this._orient === w && this._size.reverse()
            },
            _positionGroup: function() {
                var t = this.group,
                e = this._location,
                i = this._orient,
                n = this.dataZoomModel.getFirstTargetAxisModel(),
                r = n && n.get("inverse"),
                o = this._displayables.barGroup,
                a = (this._dataShadowInfo || {}).otherAxisInverse;
                o.attr(i !== b || r ? i === b && r ? {
                    scale: a ? [ - 1, 1] : [ - 1, -1]
                }: i !== w || r ? {
                    scale: a ? [ - 1, -1] : [ - 1, 1],
                    rotation: Math.PI / 2
                }: {
                    scale: a ? [1, -1] : [1, 1],
                    rotation: Math.PI / 2
                }: {
                    scale: a ? [1, 1] : [1, -1]
                });
                var s = t.getBoundingRect([o]);
                t.position[0] = e.x - s.x,
                t.position[1] = e.y - s.y
            },
            _getViewExtent: function() {
                var t = this._halfHandleSize,
                e = m(this._size[0], 4 * t),
                i = [t, e - t];
                return i
            },
            _renderBackground: function() {
                var t = this.dataZoomModel,
                e = this._size;
                this._displayables.barGroup.add(new l({
                    silent: !0,
                    shape: {
                        x: 0,
                        y: 0,
                        width: e[0],
                        height: e[1]
                    },
                    style: {
                        fill: t.get("backgroundColor")
                    }
                }))
            },
            _renderDataShadow: function() {
                var t = this._dataShadowInfo = this._prepareDataShadowInfo();
                if (t) {
                    var e = this._size,
                    i = t.series,
                    n = i.getRawData(),
                    r = i.getShadowDim ? i.getShadowDim() : t.otherDim,
                    a = n.getDataExtent(r),
                    s = .3 * (a[1] - a[0]);
                    a = [a[0] - s, a[1] + s];
                    var l = [0, e[1]],
                    h = [0, e[0]],
                    u = [[e[0], 0], [0, 0]],
                    d = h[1] / (n.count() - 1),
                    f = 0,
                    p = Math.round(n.count() / e[0]);
                    n.each([r],
                    function(t, e) {
                        if (p > 0 && e % p) return void(f += d);
                        var i = null == t || isNaN(t) || "" === t ? null: c(t, a, l, !0);
                        null != i && u.push([f, i]),
                        f += d
                    }),
                    this._displayables.barGroup.add(new o.Polyline({
                        shape: {
                            points: u
                        },
                        style: {
                            fill: this.dataZoomModel.get("dataBackgroundColor"),
                            lineWidth: 0
                        },
                        silent: !0,
                        z2: -20
                    }))
                }
            },
            _prepareDataShadowInfo: function() {
                var t = this.dataZoomModel,
                e = t.get("showDataShadow");
                if (e !== !1) {
                    var i, o = this.ecModel;
                    return t.eachTargetAxis(function(a, s) {
                        var l = t.getAxisProxy(a.name, s).getTargetSeriesModels();
                        r.each(l,
                        function(t) {
                            if (! (i || e !== !0 && r.indexOf(S, t.get("type")) < 0)) {
                                var l = n(a.name),
                                h = o.getComponent(a.axis, s).axis;
                                i = {
                                    thisAxis: h,
                                    series: t,
                                    thisDim: a.name,
                                    otherDim: l,
                                    otherAxisInverse: t.coordinateSystem.getOtherAxis(h).inverse
                                }
                            }
                        },
                        this)
                    },
                    this),
                    i
                }
            },
            _renderHandle: function() {
                var t = this._displayables,
                e = t.handles = [],
                i = t.handleLabels = [],
                n = this._displayables.barGroup,
                r = this._size;
                n.add(t.filler = new l({
                    draggable: !0,
                    cursor: "move",
                    drift: p(this._onDragMove, this, "all"),
                    ondragend: p(this._onDragEnd, this),
                    onmouseover: p(this._showDataInfo, this, !0),
                    onmouseout: p(this._showDataInfo, this, !1),
                    style: {
                        fill: this.dataZoomModel.get("fillerColor"),
                        textPosition: "inside"
                    }
                })),
                n.add(new l(o.subPixelOptimizeRect({
                    silent: !0,
                    shape: {
                        x: 0,
                        y: 0,
                        width: r[0],
                        height: r[1]
                    },
                    style: {
                        stroke: this.dataZoomModel.get("dataBackgroundColor"),
                        lineWidth: x,
                        fill: "rgba(0,0,0,0)"
                    }
                }))),
                v([0, 1],
                function(t) {
                    n.add(e[t] = new l({
                        style: {
                            fill: this.dataZoomModel.get("handleColor")
                        },
                        cursor: "move",
                        draggable: !0,
                        drift: p(this._onDragMove, this, t),
                        ondragend: p(this._onDragEnd, this),
                        onmouseover: p(this._showDataInfo, this, !0),
                        onmouseout: p(this._showDataInfo, this, !1)
                    }));
                    var r = this.dataZoomModel.textStyleModel;
                    this.group.add(i[t] = new o.Text({
                        silent: !0,
                        invisible: !0,
                        style: {
                            x: 0,
                            y: 0,
                            text: "",
                            textVerticalAlign: "middle",
                            textAlign: "center",
                            fill: r.getTextColor(),
                            textFont: r.getFont()
                        }
                    }))
                },
                this)
            },
            _resetInterval: function() {
                var t = this._range = this.dataZoomModel.getPercentRange(),
                e = this._getViewExtent();
                this._handleEnds = [c(t[0], [0, 100], e, !0), c(t[1], [0, 100], e, !0)]
            },
            _updateInterval: function(t, e) {
                var i = this._handleEnds,
                n = this._getViewExtent();
                d(e, i, n, "all" === t || this.dataZoomModel.get("zoomLock") ? "rigid": "cross", t),
                this._range = f([c(i[0], n, [0, 100], !0), c(i[1], n, [0, 100], !0)])
            },
            _updateView: function() {
                var t = this._displayables,
                e = this._handleEnds,
                i = f(e.slice()),
                n = this._size,
                r = this._halfHandleSize;
                v([0, 1],
                function(i) {
                    var o = t.handles[i];
                    o.setShape({
                        x: e[i] - r,
                        y: -1,
                        width: 2 * r,
                        height: n[1] + 2,
                        r: 1
                    })
                },
                this),
                t.filler.setShape({
                    x: i[0],
                    y: 0,
                    width: i[1] - i[0],
                    height: this._size[1]
                }),
                this._updateDataInfo()
            },
            _updateDataInfo: function() {
                function t(t) {
                    var e = o.getTransform(i.handles[t], this.group),
                    s = o.transformDirection(0 === t ? "right": "left", e),
                    l = this._halfHandleSize + M,
                    c = o.applyTransform([h[t] + (0 === t ? -l: l), this._size[1] / 2], e);
                    n[t].setStyle({
                        x: c[0],
                        y: c[1],
                        textVerticalAlign: r === b ? "middle": s,
                        textAlign: r === b ? s: "center",
                        text: a[t]
                    })
                }
                var e = this.dataZoomModel,
                i = this._displayables,
                n = i.handleLabels,
                r = this._orient,
                a = ["", ""];
                if (e.get("showDetail")) {
                    var s, l;
                    e.eachTargetAxis(function(t, i) {
                        s || (s = e.getAxisProxy(t.name, i).getDataValueWindow(), l = this.ecModel.getComponent(t.axis, i).axis)
                    },
                    this),
                    s && (a = [this._formatLabel(s[0], l), this._formatLabel(s[1], l)])
                }
                var h = f(this._handleEnds.slice());
                t.call(this, 0),
                t.call(this, 1)
            },
            _formatLabel: function(t, e) {
                var i = this.dataZoomModel,
                n = i.get("labelFormatter");
                if (r.isFunction(n)) return n(t);
                var o = i.get("labelPrecision");
                return null != o && "auto" !== o || (o = e.getPixelPrecision()),
                t = null == t && isNaN(t) ? "": "category" === e.type || "time" === e.type ? e.scale.getLabel(Math.round(t)) : t.toFixed(Math.min(o, 20)),
                r.isString(n) && (t = n.replace("{value}", t)),
                t
            },
            _showDataInfo: function(t) {
                t = this._dragging || t;
                var e = this._displayables.handleLabels;
                e[0].attr("invisible", !t),
                e[1].attr("invisible", !t)
            },
            _onDragMove: function(t, e, i) {
                this._dragging = !0;
                var n = this._applyBarTransform([e, i], !0);
                this._updateInterval(t, n[0]),
                this._updateView(),
                this.dataZoomModel.get("realtime") && this._dispatchZoomAction()
            },
            _onDragEnd: function() {
                this._dragging = !1,
                this._showDataInfo(!1),
                this._dispatchZoomAction()
            },
            _dispatchZoomAction: function() {
                var t = this._range;
                this.api.dispatchAction({
                    type: "dataZoom",
                    from: this.uid,
                    dataZoomId: this.dataZoomModel.id,
                    start: t[0],
                    end: t[1]
                })
            },
            _applyBarTransform: function(t, e) {
                var i = this._displayables.barGroup.getLocalTransform();
                return o.applyTransform(t, i, e)
            },
            _findCoordRect: function() {
                var t, e = this.getTargetInfo();
                if (e.cartesians.length) t = e.cartesians[0].model.coordinateSystem.getRect();
                else {
                    var i = this.api.getWidth(),
                    n = this.api.getHeight();
                    t = {
                        x: .2 * i,
                        y: .2 * n,
                        width: .6 * i,
                        height: .6 * n
                    }
                }
                return t
            }
        });
        t.exports = A
    },
    function(t, e, i) {
        function n(t) {
            var e = t.getZr();
            return e[p] || (e[p] = {})
        }
        function r(t, e, i) {
            var n = new u(t.getZr());
            return n.enable(),
            n.on("pan", f(a, i)),
            n.on("zoom", f(s, i)),
            n
        }
        function o(t) {
            c.each(t,
            function(e, i) {
                e.count || (e.controller.off("pan").off("zoom"), delete t[i])
            })
        }
        function a(t, e, i) {
            l(t,
            function(n) {
                return n.panGetRange(t.controller, e, i)
            })
        }
        function s(t, e, i, n) {
            l(t,
            function(r) {
                return r.zoomGetRange(t.controller, e, i, n)
            })
        }
        function l(t, e) {
            var i = [];
            c.each(t.dataZoomInfos,
            function(t) {
                var n = e(t);
                n && i.push({
                    dataZoomId: t.dataZoomId,
                    start: n[0],
                    end: n[1]
                })
            }),
            t.dispatchAction(i)
        }
        function h(t, e) {
            t.dispatchAction({
                type: "dataZoom",
                batch: e
            })
        }
        var c = i(1),
        u = i(70),
        d = i(125),
        f = c.curry,
        p = "\x00_ec_dataZoom_roams",
        g = {
            register: function(t, e) {
                var i = n(t),
                a = e.dataZoomId,
                s = e.coordId;
                c.each(i,
                function(t, i) {
                    var n = t.dataZoomInfos;
                    n[a] && c.indexOf(e.allCoordIds, s) < 0 && (delete n[a], t.count--)
                }),
                o(i);
                var l = i[s];
                l || (l = i[s] = {
                    coordId: s,
                    dataZoomInfos: {},
                    count: 0
                },
                l.controller = r(t, e, l), l.dispatchAction = c.curry(h, t));
                var u = e.coordinateSystem.getRect().clone();
                l.controller.rectProvider = function() {
                    return u
                },
                d.createOrUpdate(l, "dispatchAction", e.throttleRate, "fixRate"),
                !l.dataZoomInfos[a] && l.count++,
                l.dataZoomInfos[a] = e
            },
            unregister: function(t, e) {
                var i = n(t);
                c.each(i,
                function(t) {
                    var i = t.dataZoomInfos;
                    i[e] && (delete i[e], t.count--)
                }),
                o(i)
            },
            shouldRecordRange: function(t, e) {
                if (t && "dataZoom" === t.type && t.batch) for (var i = 0,
                n = t.batch.length; n > i; i++) if (t.batch[i].dataZoomId === e) return ! 1;
                return ! 0
            },
            generateCoordId: function(t) {
                return t.type + "\x00_" + t.id
            }
        };
        t.exports = g
    },
    function(t, e, i) {
        i(100),
        i(40),
        i(41),
        i(172),
        i(173),
        i(98),
        i(97)
    },
    function(t, e, i) {
        i(179),
        i(181),
        i(180);
        var n = i(2);
        n.registerProcessor("filter", i(182))
    },
    function(t, e, i) {
        "use strict";
        var n = i(1),
        r = i(12),
        o = i(2).extendComponentModel({
            type: "legend",
            dependencies: ["series"],
            layoutMode: {
                type: "box",
                ignoreSize: !0
            },
            init: function(t, e, i) {
                this.mergeDefaultAndTheme(t, i),
                t.selected = t.selected || {},
                this._updateData(i);
                var n = this._data,
                r = this.option.selected;
                if (n[0] && "single" === this.get("selectedMode")) {
                    var o = !1;
                    for (var a in r) r[a] && (this.select(a), o = !0); ! o && this.select(n[0].get("name"))
                }
            },
            mergeOption: function(t) {
                o.superCall(this, "mergeOption", t),
                this._updateData(this.ecModel)
            },
            _updateData: function(t) {
                var e = n.map(this.get("data") || [],
                function(t) {
                    return "string" == typeof t && (t = {
                        name: t
                    }),
                    new r(t, this, this.ecModel)
                },
                this);
                this._data = e;
                var i = n.map(t.getSeries(),
                function(t) {
                    return t.name
                });
                t.eachSeries(function(t) {
                    if (t.legendDataProvider) {
                        var e = t.legendDataProvider();
                        i = i.concat(e.mapArray(e.getName))
                    }
                }),
                this._availableNames = i
            },
            getData: function() {
                return this._data
            },
            select: function(t) {
                var e = this.option.selected,
                i = this.get("selectedMode");
                if ("single" === i) {
                    var r = this._data;
                    n.each(r,
                    function(t) {
                        e[t.get("name")] = !1
                    })
                }
                e[t] = !0
            },
            unSelect: function(t) {
                "single" !== this.get("selectedMode") && (this.option.selected[t] = !1)
            },
            toggleSelected: function(t) {
                var e = this.option.selected;
                t in e || (e[t] = !0),
                this[e[t] ? "unSelect": "select"](t)
            },
            isSelected: function(t) {
                var e = this.option.selected;
                return ! (t in e && !e[t]) && n.indexOf(this._availableNames, t) >= 0
            },
            defaultOption: {
                zlevel: 0,
                z: 4,
                show: !0,
                orient: "horizontal",
                left: "center",
                top: "top",
                align: "auto",
                backgroundColor: "rgba(0,0,0,0)",
                borderColor: "#ccc",
                borderWidth: 0,
                padding: 5,
                itemGap: 10,
                itemWidth: 25,
                itemHeight: 14,
                textStyle: {
                    color: "#333"
                },
                selectedMode: !0
            }
        });
        t.exports = o
    },
    function(t, e, i) {
        function n(t, e) {
            e.dispatchAction({
                type: "legendToggleSelect",
                name: t
            })
        }
        function r(t, e, i) {
            t.get("legendHoverLink") && i.dispatchAction({
                type: "highlight",
                seriesName: t.name,
                name: e
            })
        }
        function o(t, e, i) {
            t.get("legendHoverLink") && i.dispatchAction({
                type: "downplay",
                seriesName: t.name,
                name: e
            })
        }
        var a = i(1),
        s = i(25),
        l = i(3),
        h = i(102),
        c = a.curry,
        u = "#ccc";
        t.exports = i(2).extendComponentView({
            type: "legend",
            init: function() {
                this._symbolTypeStore = {}
            },
            render: function(t, e, i) {
                var s = this.group;
                if (s.removeAll(), t.get("show")) {
                    var u = t.get("selectedMode"),
                    d = t.get("align");
                    "auto" === d && (d = "right" === t.get("left") && "vertical" === t.get("orient") ? "right": "left");
                    var f = {};
                    a.each(t.getData(),
                    function(a) {
                        var h = a.get("name");
                        if ("" === h || "\n" === h) return void s.add(new l.Group({
                            newline: !0
                        }));
                        var p = e.getSeriesByName(h)[0];
                        if (!f[h]) if (p) {
                            var g = p.getData(),
                            m = g.getVisual("color");
                            "function" == typeof m && (m = m(p.getDataParams(0)));
                            var v = g.getVisual("legendSymbol") || "roundRect",
                            y = g.getVisual("symbol"),
                            x = this._createItem(h, a, t, v, y, d, m, u);
                            x.on("click", c(n, h, i)).on("mouseover", c(r, p, "", i)).on("mouseout", c(o, p, "", i)),
                            f[h] = !0
                        } else e.eachRawSeries(function(e) {
                            if (!f[h] && e.legendDataProvider) {
                                var s = e.legendDataProvider(),
                                l = s.indexOfName(h);
                                if (0 > l) return;
                                var p = s.getItemVisual(l, "color"),
                                g = "roundRect",
                                m = this._createItem(h, a, t, g, null, d, p, u);
                                m.on("click", c(n, h, i)).on("mouseover", c(r, e, h, i)).on("mouseout", c(o, e, h, i)),
                                f[h] = !0
                            }
                        },
                        this)
                    },
                    this),
                    h.layout(s, t, i),
                    h.addBackground(s, t)
                }
            },
            _createItem: function(t, e, i, n, r, o, a, h) {
                var c = i.get("itemWidth"),
                d = i.get("itemHeight"),
                f = i.isSelected(t),
                p = new l.Group,
                g = e.getModel("textStyle"),
                m = e.get("icon");
                if (n = m || n, p.add(s.createSymbol(n, 0, 0, c, d, f ? a: u)), !m && r && (r !== n || "none" == r)) {
                    var v = .8 * d;
                    "none" === r && (r = "circle"),
                    p.add(s.createSymbol(r, (c - v) / 2, (d - v) / 2, v, v, f ? a: u))
                }
                var y = "left" === o ? c + 5 : -5,
                x = o,
                _ = i.get("formatter");
                "string" == typeof _ && _ ? t = _.replace("{name}", t) : "function" == typeof _ && (t = _(t));
                var b = new l.Text({
                    style: {
                        text: t,
                        x: y,
                        y: d / 2,
                        fill: f ? g.getTextColor() : u,
                        textFont: g.getFont(),
                        textAlign: x,
                        textVerticalAlign: "middle"
                    }
                });
                return p.add(b),
                p.add(new l.Rect({
                    shape: p.getBoundingRect(),
                    invisible: !0
                })),
                p.eachChild(function(t) {
                    t.silent = !h
                }),
                this.group.add(p),
                l.setHoverStyle(p),
                p
            }
        })
    },
    function(t, e, i) {
        function n(t, e, i) {
            var n, r = {},
            a = "toggleSelected" === t;
            return i.eachComponent("legend",
            function(i) {
                a && null != n ? i[n ? "select": "unSelect"](e.name) : (i[t](e.name), n = i.isSelected(e.name));
                var s = i.getData();
                o.each(s,
                function(t) {
                    var e = t.get("name");
                    if ("\n" !== e && "" !== e) {
                        var n = i.isSelected(e);
                        e in r ? r[e] = r[e] && n: r[e] = n
                    }
                })
            }),
            {
                name: e.name,
                selected: r
            }
        }
        var r = i(2),
        o = i(1);
        r.registerAction("legendToggleSelect", "legendselectchanged", o.curry(n, "toggleSelected")),
        r.registerAction("legendSelect", "legendselected", o.curry(n, "select")),
        r.registerAction("legendUnSelect", "legendunselected", o.curry(n, "unSelect"))
    },
    function(t, e) {
        t.exports = function(t) {
            var e = t.findComponents({
                mainType: "legend"
            });
            e && e.length && t.filterSeries(function(t) {
                for (var i = 0; i < e.length; i++) if (!e[i].isSelected(t.name)) return ! 1;
                return ! 0
            })
        }
    },
    function(t, e, i) {
        i(185),
        i(186),
        i(2).registerPreprocessor(function(t) {
            t.markLine = t.markLine || {}
        })
    },
    function(t, e, i) {
        i(187),
        i(188),
        i(2).registerPreprocessor(function(t) {
            t.markPoint = t.markPoint || {}
        })
    },
    function(t, e, i) {
        function n(t) {
            r.defaultEmphasis(t.label, r.LABEL_OPTIONS)
        }
        var r = i(7),
        o = i(1),
        a = i(2).extendComponentModel({
            type: "markLine",
            dependencies: ["series", "grid", "polar", "geo"],
            init: function(t, e, i, n) {
                this.mergeDefaultAndTheme(t, i),
                this.mergeOption(t, i, n.createdBySelf, !0)
            },
            mergeOption: function(t, e, i, r) {
                i || e.eachSeries(function(t) {
                    var i = t.get("markLine"),
                    s = t.markLineModel;
                    if (!i || !i.data) return void(t.markLineModel = null);
                    if (s) s.mergeOption(i, e, !0);
                    else {
                        r && n(i),
                        o.each(i.data,
                        function(t) {
                            t instanceof Array ? (n(t[0]), n(t[1])) : n(t)
                        });
                        var l = {
                            mainType: "markLine",
                            seriesIndex: t.seriesIndex,
                            name: t.name,
                            createdBySelf: !0
                        };
                        s = new a(i, this, e, l)
                    }
                    t.markLineModel = s
                },
                this)
            },
            defaultOption: {
                zlevel: 0,
                z: 5,
                symbol: ["circle", "arrow"],
                symbolSize: [8, 16],
                precision: 2,
                tooltip: {
                    trigger: "item"
                },
                label: {
                    normal: {
                        show: !0,
                        position: "end"
                    },
                    emphasis: {
                        show: !0
                    }
                },
                lineStyle: {
                    normal: {
                        type: "dashed"
                    },
                    emphasis: {
                        width: 3
                    }
                },
                animationEasing: "linear"
            }
        });
        t.exports = a
    },
    function(t, e, i) {
        function n(t) {
            return ! isNaN(t) && !isFinite(t)
        }
        function r(t, e, i, r) {
            var o = 1 - t,
            a = r.dimensions[t];
            return n(e[o]) && n(i[o]) && e[t] === i[t] && r.getAxis(a).containData(e[t])
        }
        function o(t, e) {
            if ("cartesian2d" === t.type) {
                var i = e[0].coord,
                n = e[1].coord;
                if (i && n && (r(1, i, n, t) || r(0, i, n, t))) return ! 0
            }
            return g.dataFilter(t, e[0]) && g.dataFilter(t, e[1])
        }
        function a(t, e, i, r, o, a, s) {
            var l, h = a.coordinateSystem,
            c = t.getItemModel(e),
            u = c.get("x"),
            f = c.get("y");
            if (null != u && null != f) l = [d.parsePercent(u, s.getWidth()), d.parsePercent(f, s.getHeight())];
            else {
                if (a.getMarkerPosition) l = a.getMarkerPosition(t.getValues(t.dimensions, e));
                else {
                    var p = h.dimensions,
                    g = t.get(p[0], e),
                    m = t.get(p[1], e);
                    l = h.dataToPoint([g, m])
                }
                if ("cartesian2d" === h.type) {
                    var v = h.getAxis("x"),
                    y = h.getAxis("y"),
                    p = h.dimensions;
                    n(t.get(p[0], e)) ? l[0] = v.toGlobalCoord(v.getExtent()[i ? 0 : 1]) : n(t.get(p[1], e)) && (l[1] = y.toGlobalCoord(y.getExtent()[i ? 0 : 1]))
                }
            }
            t.setItemLayout(e, l)
        }
        function s(t, e, i) {
            var n;
            n = t ? l.map(t && t.dimensions,
            function(t) {
                var i = e.getData().getDimensionInfo(e.coordDimToDataDim(t)[0]) || {};
                return i.name = t,
                i
            }) : [{
                name: "value",
                type: "float"
            }];
            var r = new h(n, i),
            a = new h(n, i),
            s = new h([], i),
            c = l.map(i.get("data"), l.curry(v, e, t, i));
            t && (c = l.filter(c, l.curry(o, t)));
            var u = t ? g.dimValueGetter: function(t) {
                return t.value
            };
            return r.initData(l.map(c,
            function(t) {
                return t[0]
            }), null, u),
            a.initData(l.map(c,
            function(t) {
                return t[1]
            }), null, u),
            s.initData(l.map(c,
            function(t) {
                return t[2]
            })),
            {
                from: r,
                to: a,
                line: s
            }
        }
        var l = i(1),
        h = i(15),
        c = i(9),
        u = i(7),
        d = i(4),
        f = c.addCommas,
        p = c.encodeHTML,
        g = i(103),
        m = i(84),
        v = function(t, e, i, n) {
            var r = t.getData(),
            o = n.type;
            if (!l.isArray(n) && ("min" === o || "max" === o || "average" === o || null != n.xAxis || null != n.yAxis)) {
                var a, s, h;
                if (null != n.yAxis || null != n.xAxis) s = null != n.yAxis ? "y": "x",
                a = e.getAxis(s),
                h = l.retrieve(n.yAxis, n.xAxis);
                else {
                    var c = g.getAxisInfo(n, r, e, t);
                    s = c.valueDataDim,
                    a = c.valueAxis,
                    h = g.numCalculate(r, s, o)
                }
                var u = "x" === s ? 0 : 1,
                d = 1 - u,
                f = l.clone(n),
                p = {};
                f.type = null,
                f.coord = [],
                p.coord = [],
                f.coord[d] = -(1 / 0),
                p.coord[d] = 1 / 0;
                var m = i.get("precision");
                m >= 0 && (h = +h.toFixed(m)),
                f.coord[u] = p.coord[u] = h,
                n = [f, p, {
                    type: o,
                    valueIndex: n.valueIndex,
                    value: h
                }]
            }
            return n = [g.dataTransform(t, n[0]), g.dataTransform(t, n[1]), l.extend({},
            n[2])],
            n[2].type = n[2].type || "",
            l.merge(n[2], n[0]),
            l.merge(n[2], n[1]),
            n
        },
        y = {
            formatTooltip: function(t) {
                var e = this._data,
                i = this.getRawValue(t),
                n = l.isArray(i) ? l.map(i, f).join(", ") : f(i),
                r = e.getName(t);
                return this.name + "<br />" + ((r ? p(r) + " : ": "") + n)
            },
            getData: function() {
                return this._data
            },
            setData: function(t) {
                this._data = t
            }
        };
        l.defaults(y, u.dataFormatMixin),
        i(2).extendComponentView({
            type: "markLine",
            init: function() {
                this._markLineMap = {}
            },
            render: function(t, e, i) {
                var n = this._markLineMap;
                for (var r in n) n[r].__keep = !1;
                e.eachSeries(function(t) {
                    var n = t.markLineModel;
                    n && this._renderSeriesML(t, n, e, i)
                },
                this);
                for (var r in n) n[r].__keep || this.group.remove(n[r].group)
            },
            updateLayout: function(t, e, i) {
                e.eachSeries(function(t) {
                    var e = t.markLineModel;
                    if (e) {
                        var n = e.getData(),
                        r = e.__from,
                        o = e.__to;
                        r.each(function(e) {
                            var s = n.getItemModel(e),
                            l = s.get("type"),
                            h = s.get("valueIndex");
                            a(r, e, !0, l, h, t, i),
                            a(o, e, !1, l, h, t, i)
                        }),
                        n.each(function(t) {
                            n.setItemLayout(t, [r.getItemLayout(t), o.getItemLayout(t)])
                        }),
                        this._markLineMap[t.name].updateLayout()
                    }
                },
                this)
            },
            _renderSeriesML: function(t, e, i, n) {
                function r(e, i, r, o, s) {
                    var l = e.getItemModel(i);
                    a(e, i, r, o, s, t, n),
                    e.setItemVisual(i, {
                        symbolSize: l.get("symbolSize") || _[r ? 0 : 1],
                        symbol: l.get("symbol", !0) || x[r ? 0 : 1],
                        color: l.get("itemStyle.normal.color") || c.getVisual("color")
                    })
                }
                var o = t.coordinateSystem,
                h = t.name,
                c = t.getData(),
                u = this._markLineMap,
                d = u[h];
                d || (d = u[h] = new m),
                this.group.add(d.group);
                var f = s(o, t, e),
                p = f.from,
                g = f.to,
                v = f.line;
                e.__from = p,
                e.__to = g,
                l.extend(e, y),
                e.setData(v);
                var x = e.get("symbol"),
                _ = e.get("symbolSize");
                l.isArray(x) || (x = [x, x]),
                "number" == typeof _ && (_ = [_, _]),
                f.from.each(function(t) {
                    var e = v.getItemModel(t),
                    i = e.get("type"),
                    n = e.get("valueIndex");
                    r(p, t, !0, i, n),
                    r(g, t, !1, i, n)
                }),
                v.each(function(t) {
                    var e = v.getItemModel(t).get("lineStyle.normal.color");
                    v.setItemVisual(t, {
                        color: e || p.getItemVisual(t, "color")
                    }),
                    v.setItemLayout(t, [p.getItemLayout(t), g.getItemLayout(t)]),
                    v.setItemVisual(t, {
                        fromSymbolSize: p.getItemVisual(t, "symbolSize"),
                        fromSymbol: p.getItemVisual(t, "symbol"),
                        toSymbolSize: g.getItemVisual(t, "symbolSize"),
                        toSymbol: g.getItemVisual(t, "symbol")
                    })
                }),
                d.updateData(v),
                f.line.eachItemGraphicEl(function(t, i) {
                    t.traverse(function(t) {
                        t.dataModel = e
                    })
                }),
                d.__keep = !0
            }
        })
    },
    function(t, e, i) {
        function n(t) {
            r.defaultEmphasis(t.label, r.LABEL_OPTIONS)
        }
        var r = i(7),
        o = i(1),
        a = i(2).extendComponentModel({
            type: "markPoint",
            dependencies: ["series", "grid", "polar"],
            init: function(t, e, i, n) {
                this.mergeDefaultAndTheme(t, i),
                this.mergeOption(t, i, n.createdBySelf, !0)
            },
            mergeOption: function(t, e, i, r) {
                i || e.eachSeries(function(t) {
                    var i = t.get("markPoint"),
                    s = t.markPointModel;
                    if (!i || !i.data) return void(t.markPointModel = null);
                    if (s) s.mergeOption(i, e, !0);
                    else {
                        r && n(i),
                        o.each(i.data, n);
                        var l = {
                            mainType: "markPoint",
                            seriesIndex: t.seriesIndex,
                            name: t.name,
                            createdBySelf: !0
                        };
                        s = new a(i, this, e, l)
                    }
                    t.markPointModel = s
                },
                this)
            },
            defaultOption: {
                zlevel: 0,
                z: 5,
                symbol: "pin",
                symbolSize: 50,
                tooltip: {
                    trigger: "item"
                },
                label: {
                    normal: {
                        show: !0,
                        position: "inside"
                    },
                    emphasis: {
                        show: !0
                    }
                },
                itemStyle: {
                    normal: {
                        borderWidth: 2
                    }
                }
            }
        });
        t.exports = a
    },
    function(t, e, i) {
        function n(t, e, i) {
            var n = e.coordinateSystem;
            t.each(function(r) {
                var o, a = t.getItemModel(r),
                s = a.getShallow("x"),
                l = a.getShallow("y");
                if (null != s && null != l) o = [h.parsePercent(s, i.getWidth()), h.parsePercent(l, i.getHeight())];
                else if (e.getMarkerPosition) o = e.getMarkerPosition(t.getValues(t.dimensions, r));
                else if (n) {
                    var c = t.get(n.dimensions[0], r),
                    u = t.get(n.dimensions[1], r);
                    o = n.dataToPoint([c, u])
                }
                t.setItemLayout(r, o)
            })
        }
        function r(t, e, i) {
            var n;
            n = t ? a.map(t && t.dimensions,
            function(t) {
                var i = e.getData().getDimensionInfo(e.coordDimToDataDim(t)[0]) || {};
                return i.name = t,
                i
            }) : [{
                name: "value",
                type: "float"
            }];
            var r = new d(n, i),
            o = a.map(i.get("data"), a.curry(f.dataTransform, e));
            return t && (o = a.filter(o, a.curry(f.dataFilter, t))),
            r.initData(o, null, t ? f.dimValueGetter: function(t) {
                return t.value
            }),
            r
        }
        var o = i(39),
        a = i(1),
        s = i(9),
        l = i(7),
        h = i(4),
        c = s.addCommas,
        u = s.encodeHTML,
        d = i(15),
        f = i(103),
        p = {
            formatTooltip: function(t) {
                var e = this.getData(),
                i = this.getRawValue(t),
                n = a.isArray(i) ? a.map(i, c).join(", ") : c(i),
                r = e.getName(t);
                return this.name + "<br />" + ((r ? u(r) + " : ": "") + n)
            },
            getData: function() {
                return this._data
            },
            setData: function(t) {
                this._data = t
            }
        };
        a.defaults(p, l.dataFormatMixin),
        i(2).extendComponentView({
            type: "markPoint",
            init: function() {
                this._symbolDrawMap = {}
            },
            render: function(t, e, i) {
                var n = this._symbolDrawMap;
                for (var r in n) n[r].__keep = !1;
                e.eachSeries(function(t) {
                    var e = t.markPointModel;
                    e && this._renderSeriesMP(t, e, i)
                },
                this);
                for (var r in n) n[r].__keep || (n[r].remove(), this.group.remove(n[r].group))
            },
            updateLayout: function(t, e, i) {
                e.eachSeries(function(t) {
                    var e = t.markPointModel;
                    e && (n(e.getData(), t, i), this._symbolDrawMap[t.name].updateLayout(e))
                },
                this)
            },
            _renderSeriesMP: function(t, e, i) {
                var s = t.coordinateSystem,
                l = t.name,
                h = t.getData(),
                c = this._symbolDrawMap,
                u = c[l];
                u || (u = c[l] = new o);
                var d = r(s, t, e);
                a.mixin(e, p),
                e.setData(d),
                n(e.getData(), t, i),
                d.each(function(t) {
                    var i = d.getItemModel(t),
                    n = i.getShallow("symbolSize");
                    "function" == typeof n && (n = n(e.getRawValue(t), e.getDataParams(t))),
                    d.setItemVisual(t, {
                        symbolSize: n,
                        color: i.get("itemStyle.normal.color") || h.getVisual("color"),
                        symbol: i.getShallow("symbol")
                    })
                }),
                u.updateData(d),
                this.group.add(u.group),
                d.eachItemGraphicEl(function(t) {
                    t.traverse(function(t) {
                        t.dataModel = e
                    })
                }),
                u.__keep = !0
            }
        })
    },
    function(t, e, i) {
        "use strict";
        var n = i(2),
        r = i(3),
        o = i(11);
        n.extendComponentModel({
            type: "title",
            layoutMode: {
                type: "box",
                ignoreSize: !0
            },
            defaultOption: {
                zlevel: 0,
                z: 6,
                show: !0,
                text: "",
                target: "blank",
                subtext: "",
                subtarget: "blank",
                left: 0,
                top: 0,
                backgroundColor: "rgba(0,0,0,0)",
                borderColor: "#ccc",
                borderWidth: 0,
                padding: 5,
                itemGap: 10,
                textStyle: {
                    fontSize: 18,
                    fontWeight: "bolder",
                    color: "#333"
                },
                subtextStyle: {
                    color: "#aaa"
                }
            }
        }),
        n.extendComponentView({
            type: "title",
            render: function(t, e, i) {
                if (this.group.removeAll(), t.get("show")) {
                    var n = this.group,
                    a = t.getModel("textStyle"),
                    s = t.getModel("subtextStyle"),
                    l = t.get("textAlign"),
                    h = new r.Text({
                        style: {
                            text: t.get("text"),
                            textFont: a.getFont(),
                            fill: a.getTextColor(),
                            textBaseline: "top"
                        },
                        z2: 10
                    }),
                    c = h.getBoundingRect(),
                    u = t.get("subtext"),
                    d = new r.Text({
                        style: {
                            text: u,
                            textFont: s.getFont(),
                            fill: s.getTextColor(),
                            y: c.height + t.get("itemGap"),
                            textBaseline: "top"
                        },
                        z2: 10
                    }),
                    f = t.get("link"),
                    p = t.get("sublink");
                    h.silent = !f,
                    d.silent = !p,
                    f && h.on("click",
                    function() {
                        window.open(f, "_" + t.get("target"))
                    }),
                    p && d.on("click",
                    function() {
                        window.open(p, "_" + t.get("subtarget"))
                    }),
                    n.add(h),
                    u && n.add(d);
                    var g = n.getBoundingRect(),
                    m = t.getBoxLayoutParams();
                    m.width = g.width,
                    m.height = g.height;
                    var v = o.getLayoutRect(m, {
                        width: i.getWidth(),
                        height: i.getHeight()
                    },
                    t.get("padding"));
                    l || (l = t.get("left") || t.get("right"), "middle" === l && (l = "center"), "right" === l ? v.x += v.width: "center" === l && (v.x += v.width / 2)),
                    n.position = [v.x, v.y],
                    h.setStyle("textAlign", l),
                    d.setStyle("textAlign", l),
                    g = n.getBoundingRect();
                    var y = v.margin,
                    x = t.getItemStyle(["color", "opacity"]);
                    x.fill = t.get("backgroundColor");
                    var _ = new r.Rect({
                        shape: {
                            x: g.x - y[3],
                            y: g.y - y[0],
                            width: g.width + y[1] + y[3],
                            height: g.height + y[0] + y[2]
                        },
                        style: x,
                        silent: !0
                    });
                    r.subPixelOptimizeRect(_),
                    n.add(_)
                }
            }
        })
    },
    function(t, e, i) {
        i(191),
        i(192),
        i(197),
        i(195),
        i(193),
        i(194),
        i(196)
    },
    function(t, e, i) {
        var n = i(29),
        r = i(1),
        o = i(2).extendComponentModel({
            type: "toolbox",
            layoutMode: {
                type: "box",
                ignoreSize: !0
            },
            mergeDefaultAndTheme: function(t) {
                o.superApply(this, "mergeDefaultAndTheme", arguments),
                r.each(this.option.feature,
                function(t, e) {
                    var i = n.get(e);
                    i && r.merge(t, i.defaultOption)
                })
            },
            defaultOption: {
                show: !0,
                z: 6,
                zlevel: 0,
                orient: "horizontal",
                left: "right",
                top: "top",
                backgroundColor: "transparent",
                borderColor: "#ccc",
                borderWidth: 0,
                padding: 5,
                itemSize: 15,
                itemGap: 8,
                showTitle: !0,
                iconStyle: {
                    normal: {
                        borderColor: "#666",
                        color: "none"
                    },
                    emphasis: {
                        borderColor: "#3E98C5"
                    }
                }
            }
        });
        t.exports = o
    },
    function(t, e, i) { (function(e) {
            function n(t) {
                return 0 === t.indexOf("my")
            }
            var r = i(29),
            o = i(1),
            a = i(3),
            s = i(12),
            l = i(48),
            h = i(102),
            c = i(18);
            t.exports = i(2).extendComponentView({
                type: "toolbox",
                render: function(t, e, i) {
                    function u(o, a) {
                        var l, h = v[o],
                        c = v[a],
                        u = g[h],
                        f = new s(u, t, t.ecModel);
                        if (h && !c) {
                            if (n(h)) l = {
                                model: f,
                                onclick: f.option.onclick,
                                featureName: h
                            };
                            else {
                                var p = r.get(h);
                                if (!p) return;
                                l = new p(f)
                            }
                            m[h] = l
                        } else {
                            if (l = m[c], !l) return;
                            l.model = f
                        }
                        return ! h && c ? void(l.dispose && l.dispose(e, i)) : !f.get("show") || l.unusable ? void(l.remove && l.remove(e, i)) : (d(f, l, h), f.setIconStatus = function(t, e) {
                            var i = this.option,
                            n = this.iconPaths;
                            i.iconStatus = i.iconStatus || {},
                            i.iconStatus[t] = e,
                            n[t] && n[t].trigger(e)
                        },
                        void(l.render && l.render(f, e, i)))
                    }
                    function d(n, r, s) {
                        var l = n.getModel("iconStyle"),
                        h = r.getIcons ? r.getIcons() : n.get("icon"),
                        c = n.get("title") || {};
                        if ("string" == typeof h) {
                            var u = h,
                            d = c;
                            h = {},
                            c = {},
                            h[s] = u,
                            c[s] = d
                        }
                        var g = n.iconPaths = {};
                        o.each(h,
                        function(s, h) {
                            var u = l.getModel("normal").getItemStyle(),
                            d = l.getModel("emphasis").getItemStyle(),
                            m = {
                                x: -p / 2,
                                y: -p / 2,
                                width: p,
                                height: p
                            },
                            v = 0 === s.indexOf("image://") ? (m.image = s.slice(8), new a.Image({
                                style: m
                            })) : a.makePath(s.replace("path://", ""), {
                                style: u,
                                hoverStyle: d,
                                rectHover: !0
                            },
                            m, "center");
                            a.setHoverStyle(v),
                            t.get("showTitle") && (v.__title = c[h], v.on("mouseover",
                            function() {
                                v.setStyle({
                                    text: c[h],
                                    textPosition: d.textPosition || "bottom",
                                    textFill: d.fill || d.stroke || "#000",
                                    textAlign: d.textAlign || "center"
                                })
                            }).on("mouseout",
                            function() {
                                v.setStyle({
                                    textFill: null
                                })
                            })),
                            v.trigger(n.get("iconStatus." + h) || "normal"),
                            f.add(v),
                            v.on("click", o.bind(r.onclick, r, e, i, h)),
                            g[h] = v
                        })
                    }
                    var f = this.group;
                    if (f.removeAll(), t.get("show")) {
                        var p = +t.get("itemSize"),
                        g = t.get("feature") || {},
                        m = this._features || (this._features = {}),
                        v = [];
                        o.each(g,
                        function(t, e) {
                            v.push(e)
                        }),
                        new l(this._featureNames || [], v).add(u).update(u).remove(o.curry(u, null)).execute(),
                        this._featureNames = v,
                        h.layout(f, t, i),
                        h.addBackground(f, t),
                        f.eachChild(function(t) {
                            var e = t.__title,
                            n = t.hoverStyle;
                            if (n && e) {
                                var r = c.getBoundingRect(e, n.font),
                                o = t.position[0] + f.position[0],
                                a = t.position[1] + f.position[1] + p,
                                s = !1;
                                a + r.height > i.getHeight() && (n.textPosition = "top", s = !0);
                                var l = s ? -5 - r.height: p + 8;
                                o + r.width / 2 > i.getWidth() ? (n.textPosition = ["100%", l], n.textAlign = "right") : o - r.width / 2 < 0 && (n.textPosition = [0, l], n.textAlign = "left")
                            }
                        })
                    }
                },
                remove: function(t, e) {
                    o.each(this._features,
                    function(i) {
                        i.remove && i.remove(t, e)
                    }),
                    this.group.removeAll()
                },
                dispose: function(t, e) {
                    o.each(this._features,
                    function(i) {
                        i.dispose && i.dispose(t, e)
                    })
                }
            })
        }).call(e, i(203))
    },
    function(t, e, i) {
        function n(t) {
            var e = {},
            i = [],
            n = [];
            return t.eachRawSeries(function(t) {
                var r = t.coordinateSystem;
                if (!r || "cartesian2d" !== r.type && "polar" !== r.type) i.push(t);
                else {
                    var o = r.getBaseAxis();
                    if ("category" === o.type) {
                        var a = o.dim + "_" + o.index;
                        e[a] || (e[a] = {
                            categoryAxis: o,
                            valueAxis: r.getOtherAxis(o),
                            series: []
                        },
                        n.push({
                            axisDim: o.dim,
                            axisIndex: o.index
                        })),
                        e[a].series.push(t)
                    } else i.push(t)
                }
            }),
            {
                seriesGroupByCategoryAxis: e,
                other: i,
                meta: n
            }
        }
        function r(t) {
            var e = [];
            return p.each(t,
            function(t, i) {
                var n = t.categoryAxis,
                r = t.valueAxis,
                o = r.dim,
                a = [" "].concat(p.map(t.series,
                function(t) {
                    return t.name
                })),
                s = [n.model.getCategories()];
                p.each(t.series,
                function(t) {
                    s.push(t.getRawData().mapArray(o,
                    function(t) {
                        return t
                    }))
                });
                for (var l = [a.join(v)], h = 0; h < s[0].length; h++) {
                    for (var c = [], u = 0; u < s.length; u++) c.push(s[u][h]);
                    l.push(c.join(v))
                }
                e.push(l.join("\n"))
            }),
            e.join("\n\n" + m + "\n\n")
        }
        function o(t) {
            return p.map(t,
            function(t) {
                var e = t.getRawData(),
                i = [t.name],
                n = [];
                return e.each(e.dimensions,
                function() {
                    for (var t = arguments.length,
                    r = arguments[t - 1], o = e.getName(r), a = 0; t - 1 > a; a++) n[a] = arguments[a];
                    i.push((o ? o + v: "") + n.join(v))
                }),
                i.join("\n")
            }).join("\n\n" + m + "\n\n")
        }
        function a(t) {
            var e = n(t);
            return {
                value: p.filter([r(e.seriesGroupByCategoryAxis), o(e.other)],
                function(t) {
                    return t.replace(/[\n\t\s]/g, "")
                }).join("\n\n" + m + "\n\n"),
                meta: e.meta
            }
        }
        function s(t) {
            return t.replace(/^\s\s*/, "").replace(/\s\s*$/, "")
        }
        function l(t) {
            var e = t.slice(0, t.indexOf("\n"));
            return e.indexOf(v) >= 0 ? !0 : void 0
        }
        function h(t) {
            for (var e = t.split(/\n+/g), i = s(e.shift()).split(y), n = [], r = p.map(i,
            function(t) {
                return {
                    name: t,
                    data: []
                }
            }), o = 0; o < e.length; o++) {
                var a = s(e[o]).split(y);
                n.push(a.shift());
                for (var l = 0; l < a.length; l++) r[l] && (r[l].data[o] = a[l])
            }
            return {
                series: r,
                categories: n
            }
        }
        function c(t) {
            for (var e = t.split(/\n+/g), i = s(e.shift()), n = [], r = 0; r < e.length; r++) {
                var o, a = s(e[r]).split(y),
                l = "",
                h = !1;
                isNaN(a[0]) ? (h = !0, l = a[0], a = a.slice(1), n[r] = {
                    name: l,
                    value: []
                },
                o = n[r].value) : o = n[r] = [];
                for (var c = 0; c < a.length; c++) o.push( + a[c]);
                1 === o.length && (h ? n[r].value = o[0] : n[r] = o[0])
            }
            return {
                name: i,
                data: n
            }
        }
        function u(t, e) {
            var i = t.split(new RegExp("\n*" + m + "\n*", "g")),
            n = {
                series: []
            };
            return p.each(i,
            function(t, i) {
                if (l(t)) {
                    var r = h(t),
                    o = e[i],
                    a = o.axisDim + "Axis";
                    o && (n[a] = n[a] || [], n[a][o.axisIndex] = {
                        data: r.categories
                    },
                    n.series = n.series.concat(r.series))
                } else {
                    var r = c(t);
                    n.series.push(r)
                }
            }),
            n
        }
        function d(t) {
            this._dom = null,
            this.model = t
        }
        function f(t, e) {
            return p.map(t,
            function(t, i) {
                var n = e && e[i];
                return p.isObject(n) && !p.isArray(n) ? (p.isObject(t) && !p.isArray(t) && (t = t.value), p.defaults({
                    value: t
                },
                n)) : t
            })
        }
        var p = i(1),
        g = i(34),
        m = new Array(60).join("-"),
        v = "	",
        y = new RegExp("[" + v + "]+", "g");
        d.defaultOption = {
            show: !0,
            readOnly: !1,
            optionToContent: null,
            contentToOption: null,
            icon: "M17.5,17.3H33 M17.5,17.3H33 M45.4,29.5h-28 M11.5,2v56H51V14.8L38.4,2H11.5z M38.4,2.2v12.7H51 M45.4,41.7h-28",
            title: "数据视图",
            lang: ["数据视图", "关闭", "刷新"],
            backgroundColor: "#fff",
            textColor: "#000",
            textareaColor: "#fff",
            textareaBorderColor: "#333",
            buttonColor: "#c23531",
            buttonTextColor: "#fff"
        },
        d.prototype.onclick = function(t, e) {
            function i() {
                n.removeChild(o),
                S._dom = null
            }
            var n = e.getDom(),
            r = this.model;
            this._dom && n.removeChild(this._dom);
            var o = document.createElement("div");
            o.style.cssText = "position:absolute;left:5px;top:5px;bottom:5px;right:5px;",
            o.style.backgroundColor = r.get("backgroundColor") || "#fff";
            var s = document.createElement("h4"),
            l = r.get("lang") || [];
            s.innerHTML = l[0] || r.get("title"),
            s.style.cssText = "margin: 10px 20px;",
            s.style.color = r.get("textColor");
            var h = document.createElement("div"),
            c = document.createElement("textarea");
            h.style.cssText = "display:block;width:100%;overflow:hidden;";
            var d = r.get("optionToContent"),
            f = r.get("contentToOption"),
            m = a(t);
            if ("function" == typeof d) {
                var y = d(e.getOption());
                "string" == typeof y ? h.innerHTML = y: p.isDom(y) && h.appendChild(y)
            } else h.appendChild(c),
            c.readOnly = r.get("readOnly"),
            c.style.cssText = "width:100%;height:100%;font-family:monospace;font-size:14px;line-height:1.6rem;",
            c.style.color = r.get("textColor"),
            c.style.borderColor = r.get("textareaBorderColor"),
            c.style.backgroundColor = r.get("textareaColor"),
            c.value = m.value;
            var x = m.meta,
            _ = document.createElement("div");
            _.style.cssText = "position:absolute;bottom:0;left:0;right:0;";
            var b = "float:right;margin-right:20px;border:none;cursor:pointer;padding:2px 5px;font-size:12px;border-radius:3px",
            w = document.createElement("div"),
            M = document.createElement("div");
            b += ";background-color:" + r.get("buttonColor"),
            b += ";color:" + r.get("buttonTextColor");
            var S = this;
            g.addEventListener(w, "click", i),
            g.addEventListener(M, "click",
            function() {
                var t;
                try {
                    t = "function" == typeof f ? f(h, e.getOption()) : u(c.value, x)
                } catch(n) {
                    throw i(),
                    new Error("Data view format error " + n)
                }
                t && e.dispatchAction({
                    type: "changeDataView",
                    newOption: t
                }),
                i()
            }),
            w.innerHTML = l[1],
            M.innerHTML = l[2],
            M.style.cssText = b,
            w.style.cssText = b,
            !r.get("readOnly") && _.appendChild(M),
            _.appendChild(w),
            g.addEventListener(c, "keydown",
            function(t) {
                if (9 === (t.keyCode || t.which)) {
                    var e = this.value,
                    i = this.selectionStart,
                    n = this.selectionEnd;
                    this.value = e.substring(0, i) + v + e.substring(n),
                    this.selectionStart = this.selectionEnd = i + 1,
                    g.stop(t)
                }
            }),
            o.appendChild(s),
            o.appendChild(h),
            o.appendChild(_),
            h.style.height = n.clientHeight - 80 + "px",
            n.appendChild(o),
            this._dom = o
        },
        d.prototype.remove = function(t, e) {
            this._dom && e.getDom().removeChild(this._dom)
        },
        d.prototype.dispose = function(t, e) {
            this.remove(t, e)
        },
        i(29).register("dataView", d),
        i(2).registerAction({
            type: "changeDataView",
            event: "dataViewChanged",
            update: "prepareAndUpdate"
        },
        function(t, e) {
            var i = [];
            p.each(t.newOption.series,
            function(t) {
                var n = e.getSeriesByName(t.name)[0];
                if (n) {
                    var r = n.get("data");
                    i.push({
                        name: t.name,
                        data: f(t.data, r)
                    })
                } else i.push(p.extend({
                    type: "scatter"
                },
                t))
            }),
            e.mergeOption(p.defaults({
                series: i
            },
            t.newOption))
        }),
        t.exports = d
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            this.model = t,
            this._controllerGroup,
            this._controller,
            this._isZoomActive
        }
        function r(t, e) {
            var i = [{
                axisModel: t.getAxis("x").model,
                axisIndex: 0
            },
            {
                axisModel: t.getAxis("y").model,
                axisIndex: 0
            }];
            return i.grid = t,
            e.eachComponent({
                mainType: "dataZoom",
                subType: "select"
            },
            function(t, n) {
                o("xAxis", i[0].axisModel, t, e) && (i[0].dataZoomModel = t),
                o("yAxis", i[1].axisModel, t, e) && (i[1].dataZoomModel = t)
            }),
            i
        }
        function o(t, e, i, n) {
            var r = i.get(t + "Index");
            return null != r && n.getComponent(t, r) === e
        }
        function a(t, e) {
            var i = e.grid,
            n = new d(t[0][0], t[1][0], t[0][1] - t[0][0], t[1][1] - t[1][0]);
            if (n.intersect(i.getRect())) {
                var r = i.getCartesian(e[0].axisIndex, e[1].axisIndex),
                o = r.pointToData([t[0][0], t[1][0]], !0),
                a = r.pointToData([t[0][1], t[1][1]], !0);
                return [v([o[0], a[0]]), v([o[1], a[1]])]
            }
        }
        function s(t, e, i, n) {
            var r = e[i],
            o = r.dataZoomModel;
            return o ? {
                dataZoomId: o.id,
                startValue: t[i][0],
                endValue: t[i][1]
            }: void 0
        }
        function l(t, e) {
            t.setIconStatus("back", p.count(e) > 1 ? "emphasis": "normal")
        }
        var h = i(1),
        c = i(4),
        u = i(161),
        d = i(8),
        f = i(27),
        p = i(99),
        g = i(101),
        m = h.each,
        v = c.asc;
        i(177);
        var y = "\x00_ec_\x00toolbox-dataZoom_";
        n.defaultOption = {
            show: !0,
            icon: {
                zoom: "M0,13.5h26.9 M13.5,26.9V0 M32.1,13.5H58V58H13.5 V32.1",
                back: "M22,1.4L9.9,13.5l12.3,12.3 M10.3,13.5H54.9v44.6 H10.3v-26"
            },
            title: {
                zoom: "区域缩放",
                back: "区域缩放还原"
            }
        };
        var x = n.prototype;
        x.render = function(t, e, i) {
            l(t, e)
        },
        x.onclick = function(t, e, i) {
            var n = this._controllerGroup;
            this._controllerGroup || (n = this._controllerGroup = new f, e.getZr().add(n)),
            _[i].call(this, n, this.model, t, e)
        },
        x.remove = function(t, e) {
            this._disposeController(),
            g.release("globalPan", e.getZr())
        },
        x.dispose = function(t, e) {
            var i = e.getZr();
            g.release("globalPan", i),
            this._disposeController(),
            this._controllerGroup && i.remove(this._controllerGroup)
        };
        var _ = {
            zoom: function(t, e, i, n) {
                var r = this._isZoomActive = !this._isZoomActive,
                o = n.getZr();
                g[r ? "take": "release"]("globalPan", o),
                e.setIconStatus("zoom", r ? "emphasis": "normal"),
                r ? (o.setDefaultCursorStyle("crosshair"), this._createController(t, e, i, n)) : (o.setDefaultCursorStyle("default"), this._disposeController())
            },
            back: function(t, e, i, n) {
                this._dispatchAction(p.pop(i), n)
            }
        };
        x._createController = function(t, e, i, n) {
            var r = this._controller = new u("rect", n.getZr(), {
                lineWidth: 3,
                stroke: "#333",
                fill: "rgba(0,0,0,0.2)"
            });
            r.on("selectEnd", h.bind(this._onSelected, this, r, e, i, n)),
            r.enable(t, !1)
        },
        x._disposeController = function() {
            var t = this._controller;
            t && (t.off("selected"), t.dispose())
        },
        x._onSelected = function(t, e, i, n, o) {
            if (o.length) {
                var l = o[0];
                t.update();
                var h = {};
                i.eachComponent("grid",
                function(t, e) {
                    var n = t.coordinateSystem,
                    o = r(n, i),
                    c = a(l, o);
                    if (c) {
                        var u = s(c, o, 0, "x"),
                        d = s(c, o, 1, "y");
                        u && (h[u.dataZoomId] = u),
                        d && (h[d.dataZoomId] = d)
                    }
                },
                this),
                p.push(i, h),
                this._dispatchAction(h, n)
            }
        },
        x._dispatchAction = function(t, e) {
            var i = [];
            m(t,
            function(t) {
                i.push(t)
            }),
            i.length && e.dispatchAction({
                type: "dataZoom",
                from: this.uid,
                batch: h.clone(i, !0)
            })
        },
        i(29).register("dataZoom", n),
        i(2).registerPreprocessor(function(t) {
            function e(t, e) {
                if (e) {
                    var r = t + "Index",
                    o = e[r];
                    null == o || h.isArray(o) || (o = o === !1 ? [] : [o]),
                    i(t,
                    function(e, i) {
                        if (null == o || -1 !== h.indexOf(o, i)) {
                            var a = {
                                type: "select",
                                $fromToolbox: !0,
                                id: y + t + i
                            };
                            a[r] = i,
                            n.push(a)
                        }
                    })
                }
            }
            function i(e, i) {
                var n = t[e];
                h.isArray(n) || (n = n ? [n] : []),
                m(n, i)
            }
            if (t) {
                var n = t.dataZoom || (t.dataZoom = []);
                h.isArray(n) || (t.dataZoom = n = [n]);
                var r = t.toolbox;
                if (r && (h.isArray(r) && (r = r[0]), r && r.feature)) {
                    var o = r.feature.dataZoom;
                    e("xAxis", o),
                    e("yAxis", o)
                }
            }
        }),
        t.exports = n
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            this.model = t
        }
        var r = i(1);
        n.defaultOption = {
            show: !0,
            type: [],
            icon: {
                line: "M4.1,28.9h7.1l9.3-22l7.4,38l9.7-19.7l3,12.8h14.9M4.1,58h51.4",
                bar: "M6.7,22.9h10V48h-10V22.9zM24.9,13h10v35h-10V13zM43.2,2h10v46h-10V2zM3.1,58h53.7",
                stack: "M8.2,38.4l-8.4,4.1l30.6,15.3L60,42.5l-8.1-4.1l-21.5,11L8.2,38.4z M51.9,30l-8.1,4.2l-13.4,6.9l-13.9-6.9L8.2,30l-8.4,4.2l8.4,4.2l22.2,11l21.5-11l8.1-4.2L51.9,30z M51.9,21.7l-8.1,4.2L35.7,30l-5.3,2.8L24.9,30l-8.4-4.1l-8.3-4.2l-8.4,4.2L8.2,30l8.3,4.2l13.9,6.9l13.4-6.9l8.1-4.2l8.1-4.1L51.9,21.7zM30.4,2.2L-0.2,17.5l8.4,4.1l8.3,4.2l8.4,4.2l5.5,2.7l5.3-2.7l8.1-4.2l8.1-4.2l8.1-4.1L30.4,2.2z",
                tiled: "M2.3,2.2h22.8V25H2.3V2.2z M35,2.2h22.8V25H35V2.2zM2.3,35h22.8v22.8H2.3V35z M35,35h22.8v22.8H35V35z"
            },
            title: {
                line: "切换为折线图",
                bar: "切换为柱状图",
                stack: "切换为堆叠",
                tiled: "切换为平铺"
            },
            option: {},
            seriesIndex: {}
        };
        var o = n.prototype;
        o.getIcons = function() {
            var t = this.model,
            e = t.get("icon"),
            i = {};
            return r.each(t.get("type"),
            function(t) {
                e[t] && (i[t] = e[t])
            }),
            i
        };
        var a = {
            line: function(t, e, i, n) {
                return "bar" === t ? r.merge({
                    id: e,
                    type: "line",
                    data: i.get("data"),
                    stack: i.get("stack"),
                    markPoint: i.get("markPoint"),
                    markLine: i.get("markLine")
                },
                n.get("option.line") || {},
                !0) : void 0
            },
            bar: function(t, e, i, n) {
                return "line" === t ? r.merge({
                    id: e,
                    type: "bar",
                    data: i.get("data"),
                    stack: i.get("stack"),
                    markPoint: i.get("markPoint"),
                    markLine: i.get("markLine")
                },
                n.get("option.bar") || {},
                !0) : void 0
            },
            stack: function(t, e, i, n) {
                return "line" === t || "bar" === t ? r.merge({
                    id: e,
                    stack: "__ec_magicType_stack__"
                },
                n.get("option.stack") || {},
                !0) : void 0
            },
            tiled: function(t, e, i, n) {
                return "line" === t || "bar" === t ? r.merge({
                    id: e,
                    stack: ""
                },
                n.get("option.tiled") || {},
                !0) : void 0
            }
        },
        s = [["line", "bar"], ["stack", "tiled"]];
        o.onclick = function(t, e, i) {
            var n = this.model,
            o = n.get("seriesIndex." + i);
            if (a[i]) {
                var l = {
                    series: []
                },
                h = function(t) {
                    var e = t.subType,
                    o = t.id,
                    s = a[i](e, o, t, n);
                    s && (r.defaults(s, t.option), l.series.push(s));
                    var h = t.coordinateSystem;
                    if (h && "cartesian2d" === h.type && ("line" === i || "bar" === i)) {
                        var c = h.getAxesByScale("ordinal")[0];
                        if (c) {
                            var u = c.dim,
                            d = t.get(u + "AxisIndex"),
                            f = u + "Axis";
                            l[f] = l[f] || [];
                            for (var p = 0; d >= p; p++) l[f][d] = l[f][d] || {};
                            l[f][d].boundaryGap = "bar" === i
                        }
                    }
                };
                r.each(s,
                function(t) {
                    r.indexOf(t, i) >= 0 && r.each(t,
                    function(t) {
                        n.setIconStatus(t, "normal")
                    })
                }),
                n.setIconStatus(i, "emphasis"),
                t.eachComponent({
                    mainType: "series",
                    query: null == o ? null: {
                        seriesIndex: o
                    }
                },
                h),
                e.dispatchAction({
                    type: "changeMagicType",
                    currentType: i,
                    newOption: l
                })
            }
        };
        var l = i(2);
        l.registerAction({
            type: "changeMagicType",
            event: "magicTypeChanged",
            update: "prepareAndUpdate"
        },
        function(t, e) {
            e.mergeOption(t.newOption)
        }),
        i(29).register("magicType", n),
        t.exports = n
    },
    function(t, e, i) {
        "use strict";
        function n(t) {
            this.model = t
        }
        var r = i(99);
        n.defaultOption = {
            show: !0,
            icon: "M3.8,33.4 M47,18.9h9.8V8.7 M56.3,20.1 C52.1,9,40.5,0.6,26.8,2.1C12.6,3.7,1.6,16.2,2.1,30.6 M13,41.1H3.1v10.2 M3.7,39.9c4.2,11.1,15.8,19.5,29.5,18 c14.2-1.6,25.2-14.1,24.7-28.5",
            title: "还原"
        };
        var o = n.prototype;
        o.onclick = function(t, e, i) {
            r.clear(t),
            e.dispatchAction({
                type: "restore",
                from: this.uid
            })
        },
        i(29).register("restore", n),
        i(2).registerAction({
            type: "restore",
            event: "restore",
            update: "prepareAndUpdate"
        },
        function(t, e) {
            e.resetOption("recreate")
        }),
        t.exports = n
    },
    function(t, e, i) {
        function n(t) {
            this.model = t
        }
        var r = i(14);
        n.defaultOption = {
            show: !0,
            icon: "M4.7,22.9L29.3,45.5L54.7,23.4M4.6,43.6L4.6,58L53.8,58L53.8,43.6M29.2,45.1L29.2,0",
            title: "保存为图片",
            type: "png",
            name: "",
            excludeComponents: ["toolbox"],
            pixelRatio: 1,
            lang: ["右键另存为图片"]
        },
        n.prototype.unusable = !r.canvasSupported;
        var o = n.prototype;
        o.onclick = function(t, e) {
            var i = this.model,
            n = i.get("name") || t.get("title.0.text") || "echarts",
            r = document.createElement("a"),
            o = i.get("type", !0) || "png";
            r.download = n + "." + o,
            r.target = "_blank";
            var a = e.getConnectedDataURL({
                type: o,
                backgroundColor: i.get("backgroundColor", !0) || t.get("backgroundColor") || "#fff",
                excludeComponents: i.get("excludeComponents"),
                pixelRatio: i.get("pixelRatio")
            });
            if (r.href = a, "function" == typeof MouseEvent) {
                var s = new MouseEvent("click", {
                    view: window,
                    bubbles: !0,
                    cancelable: !1
                });
                r.dispatchEvent(s)
            } else {
                var l = i.get("lang"),
                h = '<body style="margin:0;"><img src="' + a + '" style="max-width:100%;" title="' + (l && l[0] || "") + '" /></body>',
                c = window.open();
                c.document.write(h)
            }
        },
        i(29).register("saveAsImage", n),
        t.exports = n
    },
    function(t, e, i) {
        i(200),
        i(201),
        i(2).registerAction({
            type: "showTip",
            event: "showTip",
            update: "none"
        },
        function() {}),
        i(2).registerAction({
            type: "hideTip",
            event: "hideTip",
            update: "none"
        },
        function() {})
    },
    function(t, e, i) {
        function n(t) {
            var e = "cubic-bezier(0.23, 1, 0.32, 1)",
            i = "left " + t + "s " + e + ",top " + t + "s " + e;
            return l.map(g,
            function(t) {
                return t + "transition:" + i
            }).join(";")
        }
        function r(t) {
            var e = [],
            i = t.get("fontSize"),
            n = t.getTextColor();
            return n && e.push("color:" + n),
            e.push("font:" + t.getFont()),
            i && e.push("line-height:" + Math.round(3 * i / 2) + "px"),
            d(["decoration", "align"],
            function(i) {
                var n = t.get(i);
                n && e.push("text-" + i + ":" + n)
            }),
            e.join(";")
        }
        function o(t) {
            t = t;
            var e = [],
            i = t.get("transitionDuration"),
            o = t.get("backgroundColor"),
            a = t.getModel("textStyle"),
            s = t.get("padding");
            return i && e.push(n(i)),
            o && (p.canvasSupported ? e.push("background-Color:" + o) : (e.push("background-Color:#" + h.toHex(o)), e.push("filter:alpha(opacity=70)"))),
            d(["width", "color", "radius"],
            function(i) {
                var n = "border-" + i,
                r = f(n),
                o = t.get(r);
                null != o && e.push(n + ":" + o + ("color" === i ? "": "px"))
            }),
            e.push(r(a)),
            null != s && e.push("padding:" + u.normalizeCssArray(s).join("px ") + "px"),
            e.join(";") + ";"
        }
        function a(t, e) {
            var i = document.createElement("div"),
            n = e.getZr();
            this.el = i,
            this._x = e.getWidth() / 2,
            this._y = e.getHeight() / 2,
            t.appendChild(i),
            this._container = t,
            this._show = !1,
            this._hideTimeout;
            var r = this;
            i.onmouseenter = function() {
                r.enterable && (clearTimeout(r._hideTimeout), r._show = !0),
                r._inContent = !0
            },
            i.onmousemove = function(e) {
                if (!r.enterable) {
                    var i = n.handler;
                    c.normalizeEvent(t, e),
                    i.dispatch("mousemove", e)
                }
            },
            i.onmouseleave = function() {
                r.enterable && r._show && r.hideLater(r._hideDelay),
                r._inContent = !1
            },
            s(i, t)
        }
        function s(t, e) {
            function i(t) {
                n(t.target) && t.preventDefault()
            }
            function n(i) {
                for (; i && i !== e;) {
                    if (i === t) return ! 0;
                    i = i.parentNode
                }
            }
            c.addEventListener(e, "touchstart", i),
            c.addEventListener(e, "touchmove", i),
            c.addEventListener(e, "touchend", i)
        }
        var l = i(1),
        h = i(22),
        c = i(34),
        u = i(9),
        d = l.each,
        f = u.toCamelCase,
        p = i(14),
        g = ["", "-webkit-", "-moz-", "-o-"],
        m = "position:absolute;display:block;border-style:solid;white-space:nowrap;z-index:9999999;";
        a.prototype = {
            constructor: a,
            enterable: !0,
            update: function() {
                var t = this._container,
                e = t.currentStyle || document.defaultView.getComputedStyle(t),
                i = t.style;
                "absolute" !== i.position && "absolute" !== e.position && (i.position = "relative")
            },
            show: function(t) {
                clearTimeout(this._hideTimeout),
                this.el.style.cssText = m + o(t) + ";left:" + this._x + "px;top:" + this._y + "px;" + (t.get("extraCssText") || ""),
                this._show = !0
            },
            setContent: function(t) {
                var e = this.el;
                e.innerHTML = t,
                e.style.display = t ? "block": "none"
            },
            moveTo: function(t, e) {
                var i = this.el.style;
                i.left = t + "px",
                i.top = e + "px",
                this._x = t,
                this._y = e
            },
            hide: function() {
                this.el.style.display = "none",
                this._show = !1
            },
            hideLater: function(t) { ! this._show || this._inContent && this.enterable || (t ? (this._hideDelay = t, this._show = !1, this._hideTimeout = setTimeout(l.bind(this.hide, this), t)) : this.hide())
            },
            isShow: function() {
                return this._show
            }
        },
        t.exports = a
    },
    function(t, e, i) {
        i(2).extendComponentModel({
            type: "tooltip",
            defaultOption: {
                zlevel: 0,
                z: 8,
                show: !0,
                showContent: !0,
                trigger: "item",
                triggerOn: "mousemove",
                alwaysShowContent: !1,
                showDelay: 0,
                hideDelay: 100,
                transitionDuration: .4,
                enterable: !1,
                backgroundColor: "rgba(50,50,50,0.7)",
                borderColor: "#333",
                borderRadius: 4,
                borderWidth: 0,
                padding: 5,
                extraCssText: "",
                axisPointer: {
                    type: "line",
                    axis: "auto",
                    animation: !0,
                    animationDurationUpdate: 200,
                    animationEasingUpdate: "exponentialOut",
                    lineStyle: {
                        color: "#555",
                        width: 1,
                        type: "solid"
                    },
                    crossStyle: {
                        color: "#555",
                        width: 1,
                        type: "dashed",
                        textStyle: {}
                    },
                    shadowStyle: {
                        color: "rgba(150,150,150,0.3)"
                    }
                },
                textStyle: {
                    color: "#fff",
                    fontSize: 14
                }
            }
        })
    },
    function(t, e, i) {
        function n(t, e) {
            if (!t || !e) return ! 1;
            var i = g.round;
            return i(t[0]) === i(e[0]) && i(t[1]) === i(e[1])
        }
        function r(t, e, i, n) {
            return {
                x1: t,
                y1: e,
                x2: i,
                y2: n
            }
        }
        function o(t, e, i, n) {
            return {
                x: t,
                y: e,
                width: i,
                height: n
            }
        }
        function a(t, e, i, n, r, o) {
            return {
                cx: t,
                cy: e,
                r0: i,
                r: n,
                startAngle: r,
                endAngle: o,
                clockwise: !0
            }
        }
        function s(t, e, i, n, r) {
            var o = i.clientWidth,
            a = i.clientHeight,
            s = 20;
            return t + o + s > n ? t -= o + s: t += s,
            e + a + s > r ? e -= a + s: e += s,
            [t, e]
        }
        function l(t, e, i) {
            var n = i.clientWidth,
            r = i.clientHeight,
            o = 5,
            a = 0,
            s = 0,
            l = e.width,
            h = e.height;
            switch (t) {
            case "inside":
                a = e.x + l / 2 - n / 2,
                s = e.y + h / 2 - r / 2;
                break;
            case "top":
                a = e.x + l / 2 - n / 2,
                s = e.y - r - o;
                break;
            case "bottom":
                a = e.x + l / 2 - n / 2,
                s = e.y + h + o;
                break;
            case "left":
                a = e.x - n - o,
                s = e.y + h / 2 - r / 2;
                break;
            case "right":
                a = e.x + l + o,
                s = e.y + h / 2 - r / 2
            }
            return [a, s]
        }
        function h(t, e, i, n, r, o, a) {
            var h = a.getWidth(),
            c = a.getHeight(),
            u = o && o.getBoundingRect().clone();
            if (o && u.applyTransform(o.transform), "function" == typeof t && (t = t([e, i], r, n.el, u)), f.isArray(t)) e = m(t[0], h),
            i = m(t[1], c);
            else if ("string" == typeof t && o) {
                var d = l(t, u, n.el);
                e = d[0],
                i = d[1]
            } else {
                var d = s(e, i, n.el, h, c);
                e = d[0],
                i = d[1]
            }
            n.moveTo(e, i)
        }
        function c(t) {
            var e = t.coordinateSystem,
            i = t.get("tooltip.trigger", !0);
            return ! (!e || "cartesian2d" !== e.type && "polar" !== e.type && "single" !== e.type || "item" === i)
        }
        var u = i(199),
        d = i(3),
        f = i(1),
        p = i(9),
        g = i(4),
        m = g.parsePercent,
        v = i(14);
        i(2).extendComponentView({
            type: "tooltip",
            _axisPointers: {},
            init: function(t, e) {
                if (!v.node) {
                    var i = new u(e.getDom(), e);
                    this._tooltipContent = i,
                    e.on("showTip", this._manuallyShowTip, this),
                    e.on("hideTip", this._manuallyHideTip, this)
                }
            },
            render: function(t, e, i) {
                if (!v.node) {
                    this.group.removeAll(),
                    this._axisPointers = {},
                    this._tooltipModel = t,
                    this._ecModel = e,
                    this._api = i,
                    this._lastHover = {};
                    var n = this._tooltipContent;
                    n.update(),
                    n.enterable = t.get("enterable"),
                    this._alwaysShowContent = t.get("alwaysShowContent"),
                    this._seriesGroupByAxis = this._prepareAxisTriggerData(t, e);
                    var r = this._crossText;
                    if (r && this.group.add(r), null != this._lastX && null != this._lastY) {
                        var o = this;
                        clearTimeout(this._refreshUpdateTimeout),
                        this._refreshUpdateTimeout = setTimeout(function() {
                            o._manuallyShowTip({
                                x: o._lastX,
                                y: o._lastY
                            })
                        })
                    }
                    var a = this._api.getZr();
                    a.off("click", this._tryShow),
                    a.off("mousemove", this._mousemove),
                    a.off("mouseout", this._hide),
                    a.off("globalout", this._hide),
                    "click" === t.get("triggerOn") ? a.on("click", this._tryShow, this) : (a.on("mousemove", this._mousemove, this), a.on("mouseout", this._hide, this), a.on("globalout", this._hide, this))
                }
            },
            _mousemove: function(t) {
                var e = this._tooltipModel.get("showDelay"),
                i = this;
                clearTimeout(this._showTimeout),
                e > 0 ? this._showTimeout = setTimeout(function() {
                    i._tryShow(t)
                },
                e) : this._tryShow(t)
            },
            _manuallyShowTip: function(t) {
                if (t.from !== this.uid) {
                    var e = this._ecModel,
                    i = t.seriesIndex,
                    n = t.dataIndex,
                    r = e.getSeriesByIndex(i),
                    o = this._api;
                    if (null == t.x || null == t.y) {
                        if (r || e.eachSeries(function(t) {
                            c(t) && !r && (r = t)
                        }), r) {
                            var a = r.getData();
                            null == n && (n = a.indexOfName(t.name));
                            var s, l, h = a.getItemGraphicEl(n),
                            u = r.coordinateSystem;
                            if (u && u.dataToPoint) {
                                var d = u.dataToPoint(a.getValues(f.map(u.dimensions,
                                function(t) {
                                    return r.coordDimToDataDim(t)[0]
                                }), n, !0));
                                s = d && d[0],
                                l = d && d[1]
                            } else if (h) {
                                var p = h.getBoundingRect().clone();
                                p.applyTransform(h.transform),
                                s = p.x + p.width / 2,
                                l = p.y + p.height / 2
                            }
                            null != s && null != l && this._tryShow({
                                offsetX: s,
                                offsetY: l,
                                target: h,
                                event: {}
                            })
                        }
                    } else {
                        var h = o.getZr().handler.findHover(t.x, t.y);
                        this._tryShow({
                            offsetX: t.x,
                            offsetY: t.y,
                            target: h,
                            event: {}
                        })
                    }
                }
            },
            _manuallyHideTip: function(t) {
                t.from !== this.uid && this._hide()
            },
            _prepareAxisTriggerData: function(t, e) {
                var i = {};
                return e.eachSeries(function(t) {
                    if (c(t)) {
                        var e, n, r = t.coordinateSystem;
                        "cartesian2d" === r.type ? (e = r.getBaseAxis(), n = e.dim + e.index) : "single" === r.type ? (e = r.getAxis(), n = e.dim + e.type) : (e = r.getBaseAxis(), n = e.dim + r.name),
                        i[n] = i[n] || {
                            coordSys: [],
                            series: []
                        },
                        i[n].coordSys.push(r),
                        i[n].series.push(t)
                    }
                },
                this),
                i
            },
            _tryShow: function(t) {
                var e = t.target,
                i = this._tooltipModel,
                n = i.get("trigger"),
                r = this._ecModel,
                o = this._api;
                if (i) if (this._lastX = t.offsetX, this._lastY = t.offsetY, e && null != e.dataIndex) {
                    var a = e.dataModel || r.getSeriesByIndex(e.seriesIndex),
                    s = e.dataIndex,
                    l = a.getData().getItemModel(s);
                    "axis" === (l.get("tooltip.trigger") || n) ? this._showAxisTooltip(i, r, t) : (this._ticket = "", this._hideAxisPointer(), this._resetLastHover(), this._showItemTooltipContent(a, s, e.dataType, t)),
                    o.dispatchAction({
                        type: "showTip",
                        from: this.uid,
                        dataIndex: e.dataIndex,
                        seriesIndex: e.seriesIndex
                    })
                } else "item" === n ? this._hide() : this._showAxisTooltip(i, r, t),
                "cross" === i.get("axisPointer.type") && o.dispatchAction({
                    type: "showTip",
                    from: this.uid,
                    x: t.offsetX,
                    y: t.offsetY
                })
            },
            _showAxisTooltip: function(t, e, i) {
                var r = t.getModel("axisPointer"),
                o = r.get("type");
                if ("cross" === o) {
                    var a = i.target;
                    if (a && null != a.dataIndex) {
                        var s = e.getSeriesByIndex(a.seriesIndex),
                        l = a.dataIndex;
                        this._showItemTooltipContent(s, l, a.dataType, i)
                    }
                }
                this._showAxisPointer();
                var h = !0;
                f.each(this._seriesGroupByAxis,
                function(t) {
                    var e = t.coordSys,
                    a = e[0],
                    s = [i.offsetX, i.offsetY];
                    if (!a.containPoint(s)) return void this._hideAxisPointer(a.name);
                    h = !1;
                    var l = a.dimensions,
                    c = a.pointToData(s, !0);
                    s = a.dataToPoint(c);
                    var u = a.getBaseAxis(),
                    d = r.get("axis");
                    "auto" === d && (d = u.dim);
                    var p = !1,
                    g = this._lastHover;
                    if ("cross" === o) n(g.data, c) && (p = !0),
                    g.data = c;
                    else {
                        var m = f.indexOf(l, d);
                        g.data === c[m] && (p = !0),
                        g.data = c[m]
                    }
                    "cartesian2d" !== a.type || p ? "polar" !== a.type || p ? "single" !== a.type || p || this._showSinglePointer(r, a, d, s) : this._showPolarPointer(r, a, d, s) : this._showCartesianPointer(r, a, d, s),
                    "cross" !== o && this._dispatchAndShowSeriesTooltipContent(a, t.series, s, c, p)
                },
                this),
                this._tooltipModel.get("show") || this._hideAxisPointer(),
                h && this._hide()
            },
            _showCartesianPointer: function(t, e, i, n) {
                function a(i, n, o) {
                    var a = "x" === i ? r(n[0], o[0], n[0], o[1]) : r(o[0], n[1], o[1], n[1]),
                    s = l._getPointerElement(e, t, i, a);
                    c ? d.updateProps(s, {
                        shape: a
                    },
                    t) : s.attr({
                        shape: a
                    })
                }
                function s(i, n, r) {
                    var a = e.getAxis(i),
                    s = a.getBandWidth(),
                    h = r[1] - r[0],
                    u = "x" === i ? o(n[0] - s / 2, r[0], s, h) : o(r[0], n[1] - s / 2, h, s),
                    f = l._getPointerElement(e, t, i, u);
                    c ? d.updateProps(f, {
                        shape: u
                    },
                    t) : f.attr({
                        shape: u
                    })
                }
                var l = this,
                h = t.get("type"),
                c = "cross" !== h;
                if ("cross" === h) a("x", n, e.getAxis("y").getGlobalExtent()),
                a("y", n, e.getAxis("x").getGlobalExtent()),
                this._updateCrossText(e, n, t);
                else {
                    var u = e.getAxis("x" === i ? "y": "x"),
                    f = u.getGlobalExtent();
                    "cartesian2d" === e.type && ("line" === h ? a: s)(i, n, f)
                }
            },
            _showSinglePointer: function(t, e, i, n) {
                function o(i, n, o) {
                    var s = e.getAxis(),
                    h = s.orient,
                    c = "horizontal" === h ? r(n[0], o[0], n[0], o[1]) : r(o[0], n[1], o[1], n[1]),
                    u = a._getPointerElement(e, t, i, c);
                    l ? d.updateProps(u, {
                        shape: c
                    },
                    t) : u.attr({
                        shape: c
                    })
                }
                var a = this,
                s = t.get("type"),
                l = "cross" !== s,
                h = e.getRect(),
                c = [h.y, h.y + h.height];
                o(i, n, c)
            },
            _showPolarPointer: function(t, e, i, n) {
                function o(i, n, o) {
                    var a, s = e.pointToCoord(n);
                    if ("angle" === i) {
                        var h = e.coordToPoint([o[0], s[1]]),
                        c = e.coordToPoint([o[1], s[1]]);
                        a = r(h[0], h[1], c[0], c[1])
                    } else a = {
                        cx: e.cx,
                        cy: e.cy,
                        r: s[0]
                    };
                    var u = l._getPointerElement(e, t, i, a);
                    f ? d.updateProps(u, {
                        shape: a
                    },
                    t) : u.attr({
                        shape: a
                    })
                }
                function s(i, n, r) {
                    var o, s = e.getAxis(i),
                    h = s.getBandWidth(),
                    c = e.pointToCoord(n),
                    u = Math.PI / 180;
                    o = "angle" === i ? a(e.cx, e.cy, r[0], r[1], ( - c[1] - h / 2) * u, ( - c[1] + h / 2) * u) : a(e.cx, e.cy, c[0] - h / 2, c[0] + h / 2, 0, 2 * Math.PI);
                    var p = l._getPointerElement(e, t, i, o);
                    f ? d.updateProps(p, {
                        shape: o
                    },
                    t) : p.attr({
                        shape: o
                    })
                }
                var l = this,
                h = t.get("type"),
                c = e.getAngleAxis(),
                u = e.getRadiusAxis(),
                f = "cross" !== h;
                if ("cross" === h) o("angle", n, u.getExtent()),
                o("radius", n, c.getExtent()),
                this._updateCrossText(e, n, t);
                else {
                    var p = e.getAxis("radius" === i ? "angle": "radius"),
                    g = p.getExtent(); ("line" === h ? o: s)(i, n, g)
                }
            },
            _updateCrossText: function(t, e, i) {
                var n = i.getModel("crossStyle"),
                r = n.getModel("textStyle"),
                o = this._tooltipModel,
                a = this._crossText;
                a || (a = this._crossText = new d.Text({
                    style: {
                        textAlign: "left",
                        textVerticalAlign: "bottom"
                    }
                }), this.group.add(a));
                var s = t.pointToData(e),
                l = t.dimensions;
                s = f.map(s,
                function(e, i) {
                    var n = t.getAxis(l[i]);
                    return e = "category" === n.type || "time" === n.type ? n.scale.getLabel(e) : p.addCommas(e.toFixed(n.getPixelPrecision()))
                }),
                a.setStyle({
                    fill: r.getTextColor() || n.get("color"),
                    textFont: r.getFont(),
                    text: s.join(", "),
                    x: e[0] + 5,
                    y: e[1] - 5
                }),
                a.z = o.get("z"),
                a.zlevel = o.get("zlevel")
            },
            _getPointerElement: function(t, e, i, n) {
                var r = this._tooltipModel,
                o = r.get("z"),
                a = r.get("zlevel"),
                s = this._axisPointers,
                l = t.name;
                if (s[l] = s[l] || {},
                s[l][i]) return s[l][i];
                var h = e.get("type"),
                c = e.getModel(h + "Style"),
                u = "shadow" === h,
                f = c[u ? "getAreaStyle": "getLineStyle"](),
                p = "polar" === t.type ? u ? "Sector": "radius" === i ? "Circle": "Line": u ? "Rect": "Line";
                u ? f.stroke = null: f.fill = null;
                var g = s[l][i] = new d[p]({
                    style: f,
                    z: o,
                    zlevel: a,
                    silent: !0,
                    shape: n
                });
                return this.group.add(g),
                g
            },
            _dispatchAndShowSeriesTooltipContent: function(t, e, i, n, r) {
                var o = this._tooltipModel,
                a = this._tooltipContent,
                s = t.getBaseAxis(),
                l = f.map(e,
                function(t) {
                    return {
                        seriesIndex: t.seriesIndex,
                        dataIndex: t.getAxisTooltipDataIndex ? t.getAxisTooltipDataIndex(t.coordDimToDataDim(s.dim), n, s) : t.getData().indexOfNearest(t.coordDimToDataDim(s.dim)[0], n["x" === s.dim || "radius" === s.dim ? 0 : 1])
                    }
                }),
                c = this._lastHover,
                u = this._api;
                if (c.payloadBatch && !r && u.dispatchAction({
                    type: "downplay",
                    batch: c.payloadBatch
                }), r || (u.dispatchAction({
                    type: "highlight",
                    batch: l
                }), c.payloadBatch = l), u.dispatchAction({
                    type: "showTip",
                    dataIndex: l[0].dataIndex,
                    seriesIndex: l[0].seriesIndex,
                    from: this.uid
                }), s && o.get("showContent") && o.get("show")) {
                    var d, g = o.get("formatter"),
                    m = o.get("position"),
                    v = f.map(e,
                    function(t, e) {
                        return t.getDataParams(l[e].dataIndex)
                    });
                    a.show(o);
                    var y = l[0].dataIndex;
                    if (!r) {
                        if (this._ticket = "", g) {
                            if ("string" == typeof g) d = p.formatTpl(g, v);
                            else if ("function" == typeof g) {
                                var x = this,
                                _ = "axis_" + t.name + "_" + y,
                                b = function(t, e) {
                                    t === x._ticket && (a.setContent(e), h(m, i[0], i[1], a, v, null, u))
                                };
                                x._ticket = _,
                                d = g(v, _, b)
                            }
                        } else {
                            var w = e[0].getData().getName(y);
                            d = (w ? w + "<br />": "") + f.map(e,
                            function(t, e) {
                                return t.formatTooltip(l[e].dataIndex, !0)
                            }).join("<br />")
                        }
                        a.setContent(d)
                    }
                    h(m, i[0], i[1], a, v, null, u)
                }
            },
            _showItemTooltipContent: function(t, e, i, n) {
                var r = this._api,
                o = t.getData(i),
                a = o.getItemModel(e),
                s = this._tooltipModel,
                l = this._tooltipContent,
                c = a.getModel("tooltip");
                if (c.parentModel ? c.parentModel.parentModel = s: c.parentModel = this._tooltipModel, c.get("showContent") && c.get("show")) {
                    var u, d = c.get("formatter"),
                    f = c.get("position"),
                    g = t.getDataParams(e, i);
                    if (d) {
                        if ("string" == typeof d) u = p.formatTpl(d, g);
                        else if ("function" == typeof d) {
                            var m = this,
                            v = "item_" + t.name + "_" + e,
                            y = function(t, e) {
                                t === m._ticket && (l.setContent(e), h(f, n.offsetX, n.offsetY, l, g, n.target, r))
                            };
                            m._ticket = v,
                            u = d(g, v, y)
                        }
                    } else u = t.formatTooltip(e, !1, i);
                    l.show(c),
                    l.setContent(u),
                    h(f, n.offsetX, n.offsetY, l, g, n.target, r)
                }
            },
            _showAxisPointer: function(t) {
                if (t) {
                    var e = this._axisPointers[t];
                    e && f.each(e,
                    function(t) {
                        t.show()
                    })
                } else this.group.eachChild(function(t) {
                    t.show()
                }),
                this.group.show()
            },
            _resetLastHover: function() {
                var t = this._lastHover;
                t.payloadBatch && this._api.dispatchAction({
                    type: "downplay",
                    batch: t.payloadBatch
                }),
                this._lastHover = {}
            },
            _hideAxisPointer: function(t) {
                if (t) {
                    var e = this._axisPointers[t];
                    e && f.each(e,
                    function(t) {
                        t.hide()
                    })
                } else this.group.hide()
            },
            _hide: function() {
                clearTimeout(this._showTimeout),
                this._hideAxisPointer(),
                this._resetLastHover(),
                this._alwaysShowContent || this._tooltipContent.hideLater(this._tooltipModel.get("hideDelay")),
                this._api.dispatchAction({
                    type: "hideTip",
                    from: this.uid
                }),
                this._lastX = this._lastY = null
            },
            dispose: function(t, e) {
                if (!v.node) {
                    var i = e.getZr();
                    this._tooltipContent.hide(),
                    i.off("click", this._tryShow),
                    i.off("mousemove", this._mousemove),
                    i.off("mouseout", this._hide),
                    i.off("globalout", this._hide),
                    e.off("showTip", this._manuallyShowTip),
                    e.off("hideTip", this._manuallyHideTip)
                }
            }
        })
    },
    ,
    function(t, e) {
        function i() {
            h = !1,
            a.length ? l = a.concat(l) : c = -1,
            l.length && n()
        }
        function n() {
            if (!h) {
                var t = setTimeout(i);
                h = !0;
                for (var e = l.length; e;) {
                    for (a = l, l = []; ++c < e;) a && a[c].run();
                    c = -1,
                    e = l.length
                }
                a = null,
                h = !1,
                clearTimeout(t)
            }
        }
        function r(t, e) {
            this.fun = t,
            this.array = e
        }
        function o() {}
        var a, s = t.exports = {},
        l = [],
        h = !1,
        c = -1;
        s.nextTick = function(t) {
            var e = new Array(arguments.length - 1);
            if (arguments.length > 1) for (var i = 1; i < arguments.length; i++) e[i - 1] = arguments[i];
            l.push(new r(t, e)),
            1 !== l.length || h || setTimeout(n, 0)
        },
        r.prototype.run = function() {
            this.fun.apply(null, this.array)
        },
        s.title = "browser",
        s.browser = !0,
        s.env = {},
        s.argv = [],
        s.version = "",
        s.versions = {},
        s.on = o,
        s.addListener = o,
        s.once = o,
        s.off = o,
        s.removeListener = o,
        s.removeAllListeners = o,
        s.emit = o,
        s.binding = function(t) {
            throw new Error("process.binding is not supported")
        },
        s.cwd = function() {
            return "/"
        },
        s.chdir = function(t) {
            throw new Error("process.chdir is not supported")
        },
        s.umask = function() {
            return 0
        }
    },
    function(t, e, i) {
        function n(t) {
            return parseInt(t, 10)
        }
        function r(t, e) {
            s.initVML(),
            this.root = t,
            this.storage = e;
            var i = document.createElement("div"),
            n = document.createElement("div");
            i.style.cssText = "display:inline-block;overflow:hidden;position:relative;width:300px;height:150px;",
            n.style.cssText = "position:absolute;left:0;top:0;",
            t.appendChild(i),
            this._vmlRoot = n,
            this._vmlViewport = i,
            this.resize();
            var r = e.delFromMap,
            o = e.addToMap;
            e.delFromMap = function(t) {
                var i = e.get(t);
                r.call(e, t),
                i && i.onRemove && i.onRemove(n)
            },
            e.addToMap = function(t) {
                t.onAdd && t.onAdd(n),
                o.call(e, t)
            },
            this._firstPaint = !0
        }
        function o(t) {
            return function() {
                a('In IE8.0 VML mode painter not support method "' + t + '"')
            }
        }
        var a = i(45),
        s = i(158);
        r.prototype = {
            constructor: r,
            getViewportRoot: function() {
                return this._vmlViewport
            },
            refresh: function() {
                var t = this.storage.getDisplayList(!0, !0);
                this._paintList(t)
            },
            _paintList: function(t) {
                for (var e = this._vmlRoot,
                i = 0; i < t.length; i++) {
                    var n = t[i];
                    n.invisible || n.ignore ? (n.__alreadyNotVisible || n.onRemove(e), n.__alreadyNotVisible = !0) : (n.__alreadyNotVisible && n.onAdd(e), n.__alreadyNotVisible = !1, n.__dirty && (n.beforeBrush && n.beforeBrush(), (n.brushVML || n.brush).call(n, e), n.afterBrush && n.afterBrush())),
                    n.__dirty = !1
                }
                this._firstPaint && (this._vmlViewport.appendChild(e), this._firstPaint = !1)
            },
            resize: function() {
                var t = this._getWidth(),
                e = this._getHeight();
                if (this._width != t && this._height != e) {
                    this._width = t,
                    this._height = e;
                    var i = this._vmlViewport.style;
                    i.width = t + "px",
                    i.height = e + "px"
                }
            },
            dispose: function() {
                this.root.innerHTML = "",
                this._vmlRoot = this._vmlViewport = this.storage = null
            },
            getWidth: function() {
                return this._width
            },
            getHeight: function() {
                return this._height
            },
            _getWidth: function() {
                var t = this.root,
                e = t.currentStyle;
                return (t.clientWidth || n(e.width)) - n(e.paddingLeft) - n(e.paddingRight) | 0
            },
            _getHeight: function() {
                var t = this.root,
                e = t.currentStyle;
                return (t.clientHeight || n(e.height)) - n(e.paddingTop) - n(e.paddingBottom) | 0
            }
        };
        for (var l = ["getLayer", "insertLayer", "eachLayer", "eachBuildinLayer", "eachOtherLayer", "getLayers", "modLayer", "delLayer", "clearLayer", "toDataURL", "pathToImage"], h = 0; h < l.length; h++) {
            var c = l[h];
            r.prototype[c] = o(c)
        }
        t.exports = r
    },
    function(t, e, i) {
        if (!i(14).canvasSupported) {
            var n = i(5),
            r = i(8),
            o = i(28).CMD,
            a = i(22),
            s = i(18),
            l = i(67),
            h = i(37),
            c = i(46),
            u = i(66),
            d = i(6),
            f = i(17),
            p = i(158),
            g = Math.round,
            m = Math.sqrt,
            v = Math.abs,
            y = Math.cos,
            x = Math.sin,
            _ = Math.max,
            b = n.applyTransform,
            w = ",",
            M = "progid:DXImageTransform.Microsoft",
            S = 21600,
            A = S / 2,
            T = 1e5,
            C = 1e3,
            I = function(t) {
                t.style.cssText = "position:absolute;left:0;top:0;width:1px;height:1px;",
                t.coordsize = S + "," + S,
                t.coordorigin = "0,0"
            },
            k = function(t) {
                return String(t).replace(/&/g, "&amp;").replace(/"/g, "&quot;")
            },
            L = function(t, e, i) {
                return "rgb(" + [t, e, i].join(",") + ")"
            },
            D = function(t, e) {
                e && t && e.parentNode !== t && t.appendChild(e)
            },
            P = function(t, e) {
                e && t && e.parentNode === t && t.removeChild(e)
            },
            O = function(t, e, i) {
                return (parseFloat(t) || 0) * T + (parseFloat(e) || 0) * C + i
            },
            z = function(t, e) {
                return "string" == typeof t ? t.lastIndexOf("%") >= 0 ? parseFloat(t) / 100 * e: parseFloat(t) : t
            },
            E = function(t, e, i) {
                var n = a.parse(e);
                i = +i,
                isNaN(i) && (i = 1),
                n && (t.color = L(n[0], n[1], n[2]), t.opacity = i * n[3])
            },
            R = function(t) {
                var e = a.parse(t);
                return [L(e[0], e[1], e[2]), e[3]]
            },
            B = function(t, e, i) {
                var n = e.fill;
                if (null != n) if (n instanceof f) {
                    var r, o = 0,
                    a = [0, 0],
                    s = 0,
                    l = 1,
                    h = i.getBoundingRect(),
                    c = h.width,
                    u = h.height;
                    if ("linear" === n.type) {
                        r = "gradient";
                        var d = i.transform,
                        p = [n.x * c, n.y * u],
                        g = [n.x2 * c, n.y2 * u];
                        d && (b(p, p, d), b(g, g, d));
                        var m = g[0] - p[0],
                        v = g[1] - p[1];
                        o = 180 * Math.atan2(m, v) / Math.PI,
                        0 > o && (o += 360),
                        1e-6 > o && (o = 0)
                    } else {
                        r = "gradientradial";
                        var p = [n.x * c, n.y * u],
                        d = i.transform,
                        y = i.scale,
                        x = c,
                        w = u;
                        a = [(p[0] - h.x) / x, (p[1] - h.y) / w],
                        d && b(p, p, d),
                        x /= y[0] * S,
                        w /= y[1] * S;
                        var M = _(x, w);
                        s = 0 / M,
                        l = 2 * n.r / M - s
                    }
                    var A = n.colorStops.slice();
                    A.sort(function(t, e) {
                        return t.offset - e.offset
                    });
                    for (var T = A.length,
                    C = [], I = [], k = 0; T > k; k++) {
                        var L = A[k],
                        D = R(L.color);
                        I.push(L.offset * l + s + " " + D[0]),
                        0 !== k && k !== T - 1 || C.push(D)
                    }
                    if (T >= 2) {
                        var P = C[0][0],
                        O = C[1][0],
                        z = C[0][1] * e.opacity,
                        B = C[1][1] * e.opacity;
                        t.type = r,
                        t.method = "none",
                        t.focus = "100%",
                        t.angle = o,
                        t.color = P,
                        t.color2 = O,
                        t.colors = I.join(","),
                        t.opacity = B,
                        t.opacity2 = z
                    }
                    "radial" === r && (t.focusposition = a.join(","))
                } else E(t, n, e.opacity)
            },
            N = function(t, e) {
                null != e.lineJoin && (t.joinstyle = e.lineJoin),
                null != e.miterLimit && (t.miterlimit = e.miterLimit * S),
                null != e.lineCap && (t.endcap = e.lineCap),
                null != e.lineDash && (t.dashstyle = e.lineDash.join(" ")),
                null == e.stroke || e.stroke instanceof f || E(t, e.stroke, e.opacity)
            },
            V = function(t, e, i, n) {
                var r = "fill" == e,
                o = t.getElementsByTagName(e)[0];
                null != i[e] && "none" !== i[e] && (r || !r && i.lineWidth) ? (t[r ? "filled": "stroked"] = "true", i[e] instanceof f && P(t, o), o || (o = p.createNode(e)), r ? B(o, i, n) : N(o, i), D(t, o)) : (t[r ? "filled": "stroked"] = "false", P(t, o))
            },
            F = [[], [], []],
            G = function(t, e) {
                var i, n, r, a, s, l, h = o.M,
                c = o.C,
                u = o.L,
                d = o.A,
                f = o.Q,
                p = [];
                for (a = 0; a < t.length;) {
                    switch (r = t[a++], n = "", i = 0, r) {
                    case h:
                        n = " m ",
                        i = 1,
                        s = t[a++],
                        l = t[a++],
                        F[0][0] = s,
                        F[0][1] = l;
                        break;
                    case u:
                        n = " l ",
                        i = 1,
                        s = t[a++],
                        l = t[a++],
                        F[0][0] = s,
                        F[0][1] = l;
                        break;
                    case f:
                    case c:
                        n = " c ",
                        i = 3;
                        var v, _, M = t[a++],
                        T = t[a++],
                        C = t[a++],
                        I = t[a++];
                        r === f ? (v = C, _ = I, C = (C + 2 * M) / 3, I = (I + 2 * T) / 3, M = (s + 2 * M) / 3, T = (l + 2 * T) / 3) : (v = t[a++], _ = t[a++]),
                        F[0][0] = M,
                        F[0][1] = T,
                        F[1][0] = C,
                        F[1][1] = I,
                        F[2][0] = v,
                        F[2][1] = _,
                        s = v,
                        l = _;
                        break;
                    case d:
                        var k = 0,
                        L = 0,
                        D = 1,
                        P = 1,
                        O = 0;
                        e && (k = e[4], L = e[5], D = m(e[0] * e[0] + e[1] * e[1]), P = m(e[2] * e[2] + e[3] * e[3]), O = Math.atan2( - e[1] / P, e[0] / D));
                        var z = t[a++],
                        E = t[a++],
                        R = t[a++],
                        B = t[a++],
                        N = t[a++] + O,
                        V = t[a++] + N + O;
                        a++;
                        var G = t[a++],
                        H = z + y(N) * R,
                        Z = E + x(N) * B,
                        M = z + y(V) * R,
                        T = E + x(V) * B,
                        W = G ? " wa ": " at ";
                        Math.abs(H - M) < 1e-10 && (Math.abs(V - N) > .01 ? G && (H += 270 / S) : Math.abs(Z - E) < 1e-10 ? G && z > H || !G && H > z ? T -= 270 / S: T += 270 / S: G && E > Z || !G && Z > E ? M += 270 / S: M -= 270 / S),
                        p.push(W, g(((z - R) * D + k) * S - A), w, g(((E - B) * P + L) * S - A), w, g(((z + R) * D + k) * S - A), w, g(((E + B) * P + L) * S - A), w, g((H * D + k) * S - A), w, g((Z * P + L) * S - A), w, g((M * D + k) * S - A), w, g((T * P + L) * S - A)),
                        s = M,
                        l = T;
                        break;
                    case o.R:
                        var q = F[0],
                        j = F[1];
                        q[0] = t[a++],
                        q[1] = t[a++],
                        j[0] = q[0] + t[a++],
                        j[1] = q[1] + t[a++],
                        e && (b(q, q, e), b(j, j, e)),
                        q[0] = g(q[0] * S - A),
                        j[0] = g(j[0] * S - A),
                        q[1] = g(q[1] * S - A),
                        j[1] = g(j[1] * S - A),
                        p.push(" m ", q[0], w, q[1], " l ", j[0], w, q[1], " l ", j[0], w, j[1], " l ", q[0], w, j[1]);
                        break;
                    case o.Z:
                        p.push(" x ")
                    }
                    if (i > 0) {
                        p.push(n);
                        for (var X = 0; i > X; X++) {
                            var U = F[X];
                            e && b(U, U, e),
                            p.push(g(U[0] * S - A), w, g(U[1] * S - A), i - 1 > X ? w: "")
                        }
                    }
                }
                return p.join("")
            };
            d.prototype.brushVML = function(t) {
                var e = this.style,
                i = this._vmlEl;
                i || (i = p.createNode("shape"), I(i), this._vmlEl = i),
                V(i, "fill", e, this),
                V(i, "stroke", e, this);
                var n = this.transform,
                r = null != n,
                o = i.getElementsByTagName("stroke")[0];
                if (o) {
                    var a = e.lineWidth;
                    if (r && !e.strokeNoScale) {
                        var s = n[0] * n[3] - n[1] * n[2];
                        a *= m(v(s))
                    }
                    o.weight = a + "px"
                }
                var l = this.path;
                this.__dirtyPath && (l.beginPath(), this.buildPath(l, this.shape), l.toStatic(), this.__dirtyPath = !1),
                i.path = G(l.data, this.transform),
                i.style.zIndex = O(this.zlevel, this.z, this.z2),
                D(t, i),
                e.text ? this.drawRectText(t, this.getBoundingRect()) : this.removeRectText(t)
            },
            d.prototype.onRemove = function(t) {
                P(t, this._vmlEl),
                this.removeRectText(t)
            },
            d.prototype.onAdd = function(t) {
                D(t, this._vmlEl),
                this.appendRectText(t)
            };
            var H = function(t) {
                return "object" == typeof t && t.tagName && "IMG" === t.tagName.toUpperCase()
            };
            c.prototype.brushVML = function(t) {
                var e, i, n = this.style,
                r = n.image;
                if (H(r)) {
                    var o = r.src;
                    if (o === this._imageSrc) e = this._imageWidth,
                    i = this._imageHeight;
                    else {
                        var a = r.runtimeStyle,
                        s = a.width,
                        l = a.height;
                        a.width = "auto",
                        a.height = "auto",
                        e = r.width,
                        i = r.height,
                        a.width = s,
                        a.height = l,
                        this._imageSrc = o,
                        this._imageWidth = e,
                        this._imageHeight = i
                    }
                    r = o
                } else r === this._imageSrc && (e = this._imageWidth, i = this._imageHeight);
                if (r) {
                    var h = n.x || 0,
                    c = n.y || 0,
                    u = n.width,
                    d = n.height,
                    f = n.sWidth,
                    v = n.sHeight,
                    y = n.sx || 0,
                    x = n.sy || 0,
                    S = f && v,
                    A = this._vmlEl;
                    A || (A = p.doc.createElement("div"), I(A), this._vmlEl = A);
                    var T, C = A.style,
                    k = !1,
                    L = 1,
                    P = 1;
                    if (this.transform && (T = this.transform, L = m(T[0] * T[0] + T[1] * T[1]), P = m(T[2] * T[2] + T[3] * T[3]), k = T[1] || T[2]), k) {
                        var z = [h, c],
                        E = [h + u, c],
                        R = [h, c + d],
                        B = [h + u, c + d];
                        b(z, z, T),
                        b(E, E, T),
                        b(R, R, T),
                        b(B, B, T);
                        var N = _(z[0], E[0], R[0], B[0]),
                        V = _(z[1], E[1], R[1], B[1]),
                        F = [];
                        F.push("M11=", T[0] / L, w, "M12=", T[2] / P, w, "M21=", T[1] / L, w, "M22=", T[3] / P, w, "Dx=", g(h * L + T[4]), w, "Dy=", g(c * P + T[5])),
                        C.padding = "0 " + g(N) + "px " + g(V) + "px 0",
                        C.filter = M + ".Matrix(" + F.join("") + ", SizingMethod=clip)"
                    } else T && (h = h * L + T[4], c = c * P + T[5]),
                    C.filter = "",
                    C.left = g(h) + "px",
                    C.top = g(c) + "px";
                    var G = this._imageEl,
                    Z = this._cropEl;
                    G || (G = p.doc.createElement("div"), this._imageEl = G);
                    var W = G.style;
                    if (S) {
                        if (e && i) W.width = g(L * e * u / f) + "px",
                        W.height = g(P * i * d / v) + "px";
                        else {
                            var q = new Image,
                            j = this;
                            q.onload = function() {
                                q.onload = null,
                                e = q.width,
                                i = q.height,
                                W.width = g(L * e * u / f) + "px",
                                W.height = g(P * i * d / v) + "px",
                                j._imageWidth = e,
                                j._imageHeight = i,
                                j._imageSrc = r
                            },
                            q.src = r
                        }
                        Z || (Z = p.doc.createElement("div"), Z.style.overflow = "hidden", this._cropEl = Z);
                        var X = Z.style;
                        X.width = g((u + y * u / f) * L),
                        X.height = g((d + x * d / v) * P),
                        X.filter = M + ".Matrix(Dx=" + -y * u / f * L + ",Dy=" + -x * d / v * P + ")",
                        Z.parentNode || A.appendChild(Z),
                        G.parentNode != Z && Z.appendChild(G)
                    } else W.width = g(L * u) + "px",
                    W.height = g(P * d) + "px",
                    A.appendChild(G),
                    Z && Z.parentNode && (A.removeChild(Z), this._cropEl = null);
                    var U = "",
                    Y = n.opacity;
                    1 > Y && (U += ".Alpha(opacity=" + g(100 * Y) + ") "),
                    U += M + ".AlphaImageLoader(src=" + r + ", SizingMethod=scale)",
                    W.filter = U,
                    A.style.zIndex = O(this.zlevel, this.z, this.z2),
                    D(t, A),
                    n.text && this.drawRectText(t, this.getBoundingRect())
                }
            },
            c.prototype.onRemove = function(t) {
                P(t, this._vmlEl),
                this._vmlEl = null,
                this._cropEl = null,
                this._imageEl = null,
                this.removeRectText(t)
            },
            c.prototype.onAdd = function(t) {
                D(t, this._vmlEl),
                this.appendRectText(t)
            };
            var Z, W = "normal",
            q = {},
            j = 0,
            X = 100,
            U = document.createElement("div"),
            Y = function(t) {
                var e = q[t];
                if (!e) {
                    j > X && (j = 0, q = {});
                    var i, n = U.style;
                    try {
                        n.font = t,
                        i = n.fontFamily.split(",")[0]
                    } catch(r) {}
                    e = {
                        style: n.fontStyle || W,
                        variant: n.fontVariant || W,
                        weight: n.fontWeight || W,
                        size: 0 | parseFloat(n.fontSize || 12),
                        family: i || "Microsoft YaHei"
                    },
                    q[t] = e,
                    j++
                }
                return e
            };
            s.measureText = function(t, e) {
                var i = p.doc;
                Z || (Z = i.createElement("div"), Z.style.cssText = "position:absolute;top:-20000px;left:0;padding:0;margin:0;border:none;white-space:pre;", p.doc.body.appendChild(Z));
                try {
                    Z.style.font = e
                } catch(n) {}
                return Z.innerHTML = "",
                Z.appendChild(i.createTextNode(t)),
                {
                    width: Z.offsetWidth
                }
            };
            for (var $ = new r,
            Q = function(t, e, i, n) {
                var r = this.style,
                o = r.text;
                if (o) {
                    var a, l, h = r.textAlign,
                    c = Y(r.textFont),
                    u = c.style + " " + c.variant + " " + c.weight + " " + c.size + 'px "' + c.family + '"',
                    d = r.textBaseline,
                    f = r.textVerticalAlign;
                    i = i || s.getBoundingRect(o, u, h, d);
                    var m = this.transform;
                    if (m && !n && ($.copy(e), $.applyTransform(m), e = $), n) a = e.x,
                    l = e.y;
                    else {
                        var v = r.textPosition,
                        y = r.textDistance;
                        if (v instanceof Array) a = e.x + z(v[0], e.width),
                        l = e.y + z(v[1], e.height),
                        h = h || "left",
                        d = d || "top";
                        else {
                            var x = s.adjustTextPositionOnRect(v, e, i, y);
                            a = x.x,
                            l = x.y,
                            h = h || x.textAlign,
                            d = d || x.textBaseline
                        }
                    }
                    if (f) {
                        switch (f) {
                        case "middle":
                            l -= i.height / 2;
                            break;
                        case "bottom":
                            l -= i.height
                        }
                        d = "top"
                    }
                    var _ = c.size;
                    switch (d) {
                    case "hanging":
                    case "top":
                        l += _ / 1.75;
                        break;
                    case "middle":
                        break;
                    default:
                        l -= _ / 2.25
                    }
                    switch (h) {
                    case "left":
                        break;
                    case "center":
                        a -= i.width / 2;
                        break;
                    case "right":
                        a -= i.width
                    }
                    var M, S, A, T = p.createNode,
                    C = this._textVmlEl;
                    C ? (A = C.firstChild, M = A.nextSibling, S = M.nextSibling) : (C = T("line"), M = T("path"), S = T("textpath"), A = T("skew"), S.style["v-text-align"] = "left", I(C), M.textpathok = !0, S.on = !0, C.from = "0 0", C.to = "1000 0.05", D(C, A), D(C, M), D(C, S), this._textVmlEl = C);
                    var L = [a, l],
                    P = C.style;
                    m && n ? (b(L, L, m), A.on = !0, A.matrix = m[0].toFixed(3) + w + m[2].toFixed(3) + w + m[1].toFixed(3) + w + m[3].toFixed(3) + ",0,0", A.offset = (g(L[0]) || 0) + "," + (g(L[1]) || 0), A.origin = "0 0", P.left = "0px", P.top = "0px") : (A.on = !1, P.left = g(a) + "px", P.top = g(l) + "px"),
                    S.string = k(o);
                    try {
                        S.style.font = u
                    } catch(E) {}
                    V(C, "fill", {
                        fill: n ? r.fill: r.textFill,
                        opacity: r.opacity
                    },
                    this),
                    V(C, "stroke", {
                        stroke: n ? r.stroke: r.textStroke,
                        opacity: r.opacity,
                        lineDash: r.lineDash
                    },
                    this),
                    C.style.zIndex = O(this.zlevel, this.z, this.z2),
                    D(t, C)
                }
            },
            K = function(t) {
                P(t, this._textVmlEl),
                this._textVmlEl = null
            },
            J = function(t) {
                D(t, this._textVmlEl)
            },
            tt = [l, h, c, d, u], et = 0; et < tt.length; et++) {
                var it = tt[et].prototype;
                it.drawRectText = Q,
                it.removeRectText = K,
                it.appendRectText = J
            }
            u.prototype.brushVML = function(t) {
                var e = this.style;
                e.text ? this.drawRectText(t, {
                    x: e.x || 0,
                    y: e.y || 0,
                    width: 0,
                    height: 0
                },
                this.getBoundingRect(), !0) : this.removeRectText(t)
            },
            u.prototype.onRemove = function(t) {
                this.removeRectText(t)
            },
            u.prototype.onAdd = function(t) {
                this.appendRectText(t)
            }
        }
    },
    function(t, e, i) {
        i(205),
        i(68).registerPainter("vml", i(204))
    }])
});
}
