var __tcf_nostub = 0;var __tcf_lang = 'sk';"use strict";

function _readOnlyError(name) { throw new Error("\"" + name + "\" is read-only"); }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

!function (t) {
  var e = {};

  function n(r) {
    if (e[r]) return e[r].exports;
    var o = e[r] = {
      i: r,
      l: !1,
      exports: {}
    };
    return t[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports;
  }

  n.m = t, n.c = e, n.d = function (t, e, r) {
    n.o(t, e) || Object.defineProperty(t, e, {
      enumerable: !0,
      get: r
    });
  }, n.r = function (t) {
    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
      value: "Module"
    }), Object.defineProperty(t, "__esModule", {
      value: !0
    });
  }, n.t = function (t, e) {
    if (1 & e && (t = n(t)), 8 & e) return t;
    if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
    var r = Object.create(null);
    if (n.r(r), Object.defineProperty(r, "default", {
      enumerable: !0,
      value: t
    }), 2 & e && "string" != typeof t) for (var o in t) {
      n.d(r, o, function (e) {
        return t[e];
      }.bind(null, o));
    }
    return r;
  }, n.n = function (t) {
    var e = t && t.__esModule ? function () {
      return t.default;
    } : function () {
      return t;
    };
    return n.d(e, "a", e), e;
  }, n.o = function (t, e) {
    return Object.prototype.hasOwnProperty.call(t, e);
  }, n.p = "", n(n.s = 150);
}([function (t, e, n) {
  var r = n(1),
      o = n(7),
      i = n(16),
      s = n(12),
      u = n(20),
      c = function c(t, e, n) {
    var a,
        f,
        l,
        p,
        h = t & c.F,
        d = t & c.G,
        v = t & c.S,
        y = t & c.P,
        g = t & c.B,
        m = d ? r : v ? r[e] || (r[e] = {}) : (r[e] || {}).prototype,
        b = d ? o : o[e] || (o[e] = {}),
        _ = b.prototype || (b.prototype = {});

    for (a in d && (n = e), n) {
      l = ((f = !h && m && void 0 !== m[a]) ? m : n)[a], p = g && f ? u(l, r) : y && "function" == typeof l ? u(Function.call, l) : l, m && s(m, a, l, t & c.U), b[a] != l && i(b, a, p), y && _[a] != l && (_[a] = l);
    }
  };

  r.core = o, c.F = 1, c.G = 2, c.S = 4, c.P = 8, c.B = 16, c.W = 32, c.U = 64, c.R = 128, t.exports = c;
}, function (t, e) {
  var n = t.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
  "number" == typeof __g && (__g = n);
}, function (t, e) {
  t.exports = function (t) {
    try {
      return !!t();
    } catch (t) {
      return !0;
    }
  };
}, function (t, e, n) {
  var r = n(4);

  t.exports = function (t) {
    if (!r(t)) throw TypeError(t + " is not an object!");
    return t;
  };
}, function (t, e) {
  t.exports = function (t) {
    return "object" == _typeof(t) ? null !== t : "function" == typeof t;
  };
}, function (t, e, n) {
  var r = n(57)("wks"),
      o = n(33),
      i = n(1).Symbol,
      s = "function" == typeof i;
  (t.exports = function (t) {
    return r[t] || (r[t] = s && i[t] || (s ? i : o)("Symbol." + t));
  }).store = r;
}, function (t, e, n) {
  var r = n(22),
      o = Math.min;

  t.exports = function (t) {
    return t > 0 ? o(r(t), 9007199254740991) : 0;
  };
}, function (t, e) {
  var n = t.exports = {
    version: "2.6.11"
  };
  "number" == typeof __e && (__e = n);
}, function (t, e, n) {
  t.exports = !n(2)(function () {
    return 7 != Object.defineProperty({}, "a", {
      get: function get() {
        return 7;
      }
    }).a;
  });
}, function (t, e, n) {
  var r = n(3),
      o = n(102),
      i = n(29),
      s = Object.defineProperty;
  e.f = n(8) ? Object.defineProperty : function (t, e, n) {
    if (r(t), e = i(e, !0), r(n), o) try {
      return s(t, e, n);
    } catch (t) {}
    if ("get" in n || "set" in n) throw TypeError("Accessors not supported!");
    return "value" in n && (t[e] = n.value), t;
  };
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(98)), r(n(14)), r(n(18)), r(n(42)), r(n(145)), r(n(146)), r(n(147)), r(n(356));
}, function (t, e, n) {
  var r = n(27);

  t.exports = function (t) {
    return Object(r(t));
  };
}, function (t, e, n) {
  var r = n(1),
      o = n(16),
      i = n(15),
      s = n(33)("src"),
      u = n(155),
      c = ("" + u).split("toString");
  n(7).inspectSource = function (t) {
    return u.call(t);
  }, (t.exports = function (t, e, n, u) {
    var a = "function" == typeof n;
    a && (i(n, "name") || o(n, "name", e)), t[e] !== n && (a && (i(n, s) || o(n, s, t[e] ? "" + t[e] : c.join(String(e)))), t === r ? t[e] = n : u ? t[e] ? t[e] = n : o(t, e, n) : (delete t[e], o(t, e, n)));
  })(Function.prototype, "toString", function () {
    return "function" == typeof this && this[s] || u.call(this);
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(2),
      i = n(27),
      s = /"/g,
      u = function u(t, e, n, r) {
    var o = String(i(t)),
        u = "<" + e;
    return "" !== n && (u += " " + n + '="' + String(r).replace(s, "&quot;") + '"'), u + ">" + o + "</" + e + ">";
  };

  t.exports = function (t, e) {
    var n = {};
    n[t] = e(u), r(r.P + r.F * o(function () {
      var e = ""[t]('"');
      return e !== e.toLowerCase() || e.split('"').length > 3;
    }), "String", n);
  };
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(343)), r(n(344)), r(n(345)), r(n(346));
}, function (t, e) {
  var n = {}.hasOwnProperty;

  t.exports = function (t, e) {
    return n.call(t, e);
  };
}, function (t, e, n) {
  var r = n(9),
      o = n(32);
  t.exports = n(8) ? function (t, e, n) {
    return r.f(t, e, o(1, n));
  } : function (t, e, n) {
    return t[e] = n, t;
  };
}, function (t, e, n) {
  var r = n(50),
      o = n(27);

  t.exports = function (t) {
    return r(o(t));
  };
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(135)), r(n(347)), r(n(348)), r(n(136)), r(n(349)), r(n(100)), r(n(137)), r(n(350)), r(n(351));
}, function (t, e, n) {
  "use strict";

  var r = n(2);

  t.exports = function (t, e) {
    return !!t && r(function () {
      e ? t.call(null, function () {}, 1) : t.call(null);
    });
  };
}, function (t, e, n) {
  var r = n(21);

  t.exports = function (t, e, n) {
    if (r(t), void 0 === e) return t;

    switch (n) {
      case 1:
        return function (n) {
          return t.call(e, n);
        };

      case 2:
        return function (n, r) {
          return t.call(e, n, r);
        };

      case 3:
        return function (n, r, o) {
          return t.call(e, n, r, o);
        };
    }

    return function () {
      return t.apply(e, arguments);
    };
  };
}, function (t, e) {
  t.exports = function (t) {
    if ("function" != typeof t) throw TypeError(t + " is not a function!");
    return t;
  };
}, function (t, e) {
  var n = Math.ceil,
      r = Math.floor;

  t.exports = function (t) {
    return isNaN(t = +t) ? 0 : (t > 0 ? r : n)(t);
  };
}, function (t, e, n) {
  var r = n(51),
      o = n(32),
      i = n(17),
      s = n(29),
      u = n(15),
      c = n(102),
      a = Object.getOwnPropertyDescriptor;
  e.f = n(8) ? a : function (t, e) {
    if (t = i(t), e = s(e, !0), c) try {
      return a(t, e);
    } catch (t) {}
    if (u(t, e)) return o(!r.f.call(t, e), t[e]);
  };
}, function (t, e, n) {
  var r = n(0),
      o = n(7),
      i = n(2);

  t.exports = function (t, e) {
    var n = (o.Object || {})[t] || Object[t],
        s = {};
    s[t] = e(n), r(r.S + r.F * i(function () {
      n(1);
    }), "Object", s);
  };
}, function (t, e, n) {
  var r = n(20),
      o = n(50),
      i = n(11),
      s = n(6),
      u = n(118);

  t.exports = function (t, e) {
    var n = 1 == t,
        c = 2 == t,
        a = 3 == t,
        f = 4 == t,
        l = 6 == t,
        p = 5 == t || l,
        h = e || u;
    return function (e, u, d) {
      for (var v, y, g = i(e), m = o(g), b = r(u, d, 3), _ = s(m.length), w = 0, E = n ? h(e, _) : c ? h(e, 0) : void 0; _ > w; w++) {
        if ((p || w in m) && (y = b(v = m[w], w, g), t)) if (n) E[w] = y;else if (y) switch (t) {
          case 3:
            return !0;

          case 5:
            return v;

          case 6:
            return w;

          case 2:
            E.push(v);
        } else if (f) return !1;
      }

      return l ? -1 : a || f ? f : E;
    };
  };
}, function (t, e) {
  var n = {}.toString;

  t.exports = function (t) {
    return n.call(t).slice(8, -1);
  };
}, function (t, e) {
  t.exports = function (t) {
    if (null == t) throw TypeError("Can't call method on  " + t);
    return t;
  };
}, function (t, e, n) {
  "use strict";

  if (n(8)) {
    var r = n(34),
        o = n(1),
        i = n(2),
        s = n(0),
        u = n(68),
        c = n(96),
        a = n(20),
        f = n(48),
        l = n(32),
        p = n(16),
        h = n(49),
        d = n(22),
        v = n(6),
        y = n(129),
        g = n(36),
        m = n(29),
        b = n(15),
        _ = n(52),
        w = n(4),
        E = n(11),
        S = n(88),
        O = n(37),
        A = n(39),
        P = n(38).f,
        I = n(90),
        C = n(33),
        x = n(5),
        L = n(25),
        T = n(58),
        M = n(53),
        F = n(92),
        R = n(46),
        V = n(61),
        j = n(47),
        N = n(91),
        B = n(120),
        D = n(9),
        k = n(23),
        U = D.f,
        G = k.f,
        Y = o.RangeError,
        W = o.TypeError,
        H = o.Uint8Array,
        z = Array.prototype,
        q = c.ArrayBuffer,
        J = c.DataView,
        Q = L(0),
        K = L(2),
        X = L(3),
        $ = L(4),
        Z = L(5),
        tt = L(6),
        et = T(!0),
        nt = T(!1),
        rt = F.values,
        ot = F.keys,
        it = F.entries,
        st = z.lastIndexOf,
        ut = z.reduce,
        ct = z.reduceRight,
        at = z.join,
        ft = z.sort,
        lt = z.slice,
        pt = z.toString,
        ht = z.toLocaleString,
        dt = x("iterator"),
        vt = x("toStringTag"),
        yt = C("typed_constructor"),
        gt = C("def_constructor"),
        mt = u.CONSTR,
        bt = u.TYPED,
        _t = u.VIEW,
        wt = L(1, function (t, e) {
      return Pt(M(t, t[gt]), e);
    }),
        Et = i(function () {
      return 1 === new H(new Uint16Array([1]).buffer)[0];
    }),
        St = !!H && !!H.prototype.set && i(function () {
      new H(1).set({});
    }),
        Ot = function Ot(t, e) {
      var n = d(t);
      if (n < 0 || n % e) throw Y("Wrong offset!");
      return n;
    },
        At = function At(t) {
      if (w(t) && bt in t) return t;
      throw W(t + " is not a typed array!");
    },
        Pt = function Pt(t, e) {
      if (!w(t) || !(yt in t)) throw W("It is not a typed array constructor!");
      return new t(e);
    },
        It = function It(t, e) {
      return Ct(M(t, t[gt]), e);
    },
        Ct = function Ct(t, e) {
      for (var n = 0, r = e.length, o = Pt(t, r); r > n;) {
        o[n] = e[n++];
      }

      return o;
    },
        xt = function xt(t, e, n) {
      U(t, e, {
        get: function get() {
          return this._d[n];
        }
      });
    },
        Lt = function Lt(t) {
      var e,
          n,
          r,
          o,
          i,
          s,
          u = E(t),
          c = arguments.length,
          f = c > 1 ? arguments[1] : void 0,
          l = void 0 !== f,
          p = I(u);

      if (null != p && !S(p)) {
        for (s = p.call(u), r = [], e = 0; !(i = s.next()).done; e++) {
          r.push(i.value);
        }

        u = r;
      }

      for (l && c > 2 && (f = a(f, arguments[2], 2)), e = 0, n = v(u.length), o = Pt(this, n); n > e; e++) {
        o[e] = l ? f(u[e], e) : u[e];
      }

      return o;
    },
        Tt = function Tt() {
      for (var t = 0, e = arguments.length, n = Pt(this, e); e > t;) {
        n[t] = arguments[t++];
      }

      return n;
    },
        Mt = !!H && i(function () {
      ht.call(new H(1));
    }),
        Ft = function Ft() {
      return ht.apply(Mt ? lt.call(At(this)) : At(this), arguments);
    },
        Rt = {
      copyWithin: function copyWithin(t, e) {
        return B.call(At(this), t, e, arguments.length > 2 ? arguments[2] : void 0);
      },
      every: function every(t) {
        return $(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      fill: function fill(t) {
        return N.apply(At(this), arguments);
      },
      filter: function filter(t) {
        return It(this, K(At(this), t, arguments.length > 1 ? arguments[1] : void 0));
      },
      find: function find(t) {
        return Z(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      findIndex: function findIndex(t) {
        return tt(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      forEach: function forEach(t) {
        Q(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      indexOf: function indexOf(t) {
        return nt(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      includes: function includes(t) {
        return et(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      join: function join(t) {
        return at.apply(At(this), arguments);
      },
      lastIndexOf: function lastIndexOf(t) {
        return st.apply(At(this), arguments);
      },
      map: function map(t) {
        return wt(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      reduce: function reduce(t) {
        return ut.apply(At(this), arguments);
      },
      reduceRight: function reduceRight(t) {
        return ct.apply(At(this), arguments);
      },
      reverse: function reverse() {
        for (var t, e = At(this).length, n = Math.floor(e / 2), r = 0; r < n;) {
          t = this[r], this[r++] = this[--e], this[e] = t;
        }

        return this;
      },
      some: function some(t) {
        return X(At(this), t, arguments.length > 1 ? arguments[1] : void 0);
      },
      sort: function sort(t) {
        return ft.call(At(this), t);
      },
      subarray: function subarray(t, e) {
        var n = At(this),
            r = n.length,
            o = g(t, r);
        return new (M(n, n[gt]))(n.buffer, n.byteOffset + o * n.BYTES_PER_ELEMENT, v((void 0 === e ? r : g(e, r)) - o));
      }
    },
        Vt = function Vt(t, e) {
      return It(this, lt.call(At(this), t, e));
    },
        jt = function jt(t) {
      At(this);
      var e = Ot(arguments[1], 1),
          n = this.length,
          r = E(t),
          o = v(r.length),
          i = 0;
      if (o + e > n) throw Y("Wrong length!");

      for (; i < o;) {
        this[e + i] = r[i++];
      }
    },
        Nt = {
      entries: function entries() {
        return it.call(At(this));
      },
      keys: function keys() {
        return ot.call(At(this));
      },
      values: function values() {
        return rt.call(At(this));
      }
    },
        Bt = function Bt(t, e) {
      return w(t) && t[bt] && "symbol" != _typeof(e) && e in t && String(+e) == String(e);
    },
        Dt = function Dt(t, e) {
      return Bt(t, e = m(e, !0)) ? l(2, t[e]) : G(t, e);
    },
        kt = function kt(t, e, n) {
      return !(Bt(t, e = m(e, !0)) && w(n) && b(n, "value")) || b(n, "get") || b(n, "set") || n.configurable || b(n, "writable") && !n.writable || b(n, "enumerable") && !n.enumerable ? U(t, e, n) : (t[e] = n.value, t);
    };

    mt || (k.f = Dt, D.f = kt), s(s.S + s.F * !mt, "Object", {
      getOwnPropertyDescriptor: Dt,
      defineProperty: kt
    }), i(function () {
      pt.call({});
    }) && (pt = ht = function ht() {
      return at.call(this);
    });
    var Ut = h({}, Rt);
    h(Ut, Nt), p(Ut, dt, Nt.values), h(Ut, {
      slice: Vt,
      set: jt,
      constructor: function constructor() {},
      toString: pt,
      toLocaleString: Ft
    }), xt(Ut, "buffer", "b"), xt(Ut, "byteOffset", "o"), xt(Ut, "byteLength", "l"), xt(Ut, "length", "e"), U(Ut, vt, {
      get: function get() {
        return this[bt];
      }
    }), t.exports = function (t, e, n, c) {
      var a = t + ((c = !!c) ? "Clamped" : "") + "Array",
          l = "get" + t,
          h = "set" + t,
          d = o[a],
          g = d || {},
          m = d && A(d),
          b = !d || !u.ABV,
          E = {},
          S = d && d.prototype,
          I = function I(t, n) {
        U(t, n, {
          get: function get() {
            return function (t, n) {
              var r = t._d;
              return r.v[l](n * e + r.o, Et);
            }(this, n);
          },
          set: function set(t) {
            return function (t, n, r) {
              var o = t._d;
              c && (r = (r = Math.round(r)) < 0 ? 0 : r > 255 ? 255 : 255 & r), o.v[h](n * e + o.o, r, Et);
            }(this, n, t);
          },
          enumerable: !0
        });
      };

      b ? (d = n(function (t, n, r, o) {
        f(t, d, a, "_d");
        var i,
            s,
            u,
            c,
            l = 0,
            h = 0;

        if (w(n)) {
          if (!(n instanceof q || "ArrayBuffer" == (c = _(n)) || "SharedArrayBuffer" == c)) return bt in n ? Ct(d, n) : Lt.call(d, n);
          i = n, h = Ot(r, e);
          var g = n.byteLength;

          if (void 0 === o) {
            if (g % e) throw Y("Wrong length!");
            if ((s = g - h) < 0) throw Y("Wrong length!");
          } else if ((s = v(o) * e) + h > g) throw Y("Wrong length!");

          u = s / e;
        } else u = y(n), i = new q(s = u * e);

        for (p(t, "_d", {
          b: i,
          o: h,
          l: s,
          e: u,
          v: new J(i)
        }); l < u;) {
          I(t, l++);
        }
      }), S = d.prototype = O(Ut), p(S, "constructor", d)) : i(function () {
        d(1);
      }) && i(function () {
        new d(-1);
      }) && V(function (t) {
        new d(), new d(null), new d(1.5), new d(t);
      }, !0) || (d = n(function (t, n, r, o) {
        var i;
        return f(t, d, a), w(n) ? n instanceof q || "ArrayBuffer" == (i = _(n)) || "SharedArrayBuffer" == i ? void 0 !== o ? new g(n, Ot(r, e), o) : void 0 !== r ? new g(n, Ot(r, e)) : new g(n) : bt in n ? Ct(d, n) : Lt.call(d, n) : new g(y(n));
      }), Q(m !== Function.prototype ? P(g).concat(P(m)) : P(g), function (t) {
        t in d || p(d, t, g[t]);
      }), d.prototype = S, r || (S.constructor = d));
      var C = S[dt],
          x = !!C && ("values" == C.name || null == C.name),
          L = Nt.values;
      p(d, yt, !0), p(S, bt, a), p(S, _t, !0), p(S, gt, d), (c ? new d(1)[vt] == a : vt in S) || U(S, vt, {
        get: function get() {
          return a;
        }
      }), E[a] = d, s(s.G + s.W + s.F * (d != g), E), s(s.S, a, {
        BYTES_PER_ELEMENT: e
      }), s(s.S + s.F * i(function () {
        g.of.call(d, 1);
      }), a, {
        from: Lt,
        of: Tt
      }), "BYTES_PER_ELEMENT" in S || p(S, "BYTES_PER_ELEMENT", e), s(s.P, a, Rt), j(a), s(s.P + s.F * St, a, {
        set: jt
      }), s(s.P + s.F * !x, a, Nt), r || S.toString == pt || (S.toString = pt), s(s.P + s.F * i(function () {
        new d(1).slice();
      }), a, {
        slice: Vt
      }), s(s.P + s.F * (i(function () {
        return [1, 2].toLocaleString() != new d([1, 2]).toLocaleString();
      }) || !i(function () {
        S.toLocaleString.call([1, 2]);
      })), a, {
        toLocaleString: Ft
      }), R[a] = x ? C : L, r || x || p(S, dt, L);
    };
  } else t.exports = function () {};
}, function (t, e, n) {
  var r = n(4);

  t.exports = function (t, e) {
    if (!r(t)) return t;
    var n, o;
    if (e && "function" == typeof (n = t.toString) && !r(o = n.call(t))) return o;
    if ("function" == typeof (n = t.valueOf) && !r(o = n.call(t))) return o;
    if (!e && "function" == typeof (n = t.toString) && !r(o = n.call(t))) return o;
    throw TypeError("Can't convert object to primitive value");
  };
}, function (t, e, n) {
  var r = n(33)("meta"),
      o = n(4),
      i = n(15),
      s = n(9).f,
      u = 0,
      c = Object.isExtensible || function () {
    return !0;
  },
      a = !n(2)(function () {
    return c(Object.preventExtensions({}));
  }),
      f = function f(t) {
    s(t, r, {
      value: {
        i: "O" + ++u,
        w: {}
      }
    });
  },
      l = t.exports = {
    KEY: r,
    NEED: !1,
    fastKey: function fastKey(t, e) {
      if (!o(t)) return "symbol" == _typeof(t) ? t : ("string" == typeof t ? "S" : "P") + t;

      if (!i(t, r)) {
        if (!c(t)) return "F";
        if (!e) return "E";
        f(t);
      }

      return t[r].i;
    },
    getWeak: function getWeak(t, e) {
      if (!i(t, r)) {
        if (!c(t)) return !0;
        if (!e) return !1;
        f(t);
      }

      return t[r].w;
    },
    onFreeze: function onFreeze(t) {
      return a && l.NEED && c(t) && !i(t, r) && f(t), t;
    }
  };
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(70),
      o = n(329),
      i = function () {
    function t() {}

    return t.reset = function () {
      delete this.cmpId, delete this.cmpVersion, delete this.eventStatus, delete this.gdprApplies, delete this.tcModel, delete this.tcString, this.cmpStatus = r.CmpStatus.LOADING, this.disabled = !1, this.displayStatus = r.DisplayStatus.HIDDEN, this.eventQueue.clear();
    }, t.apiVersion = "2", t.tcfPolicyVersion = 2, t.eventQueue = new o.EventListenerQueue(), t.cmpStatus = r.CmpStatus.LOADING, t.disabled = !1, t.displayStatus = r.DisplayStatus.HIDDEN, t;
  }();

  e.CmpApiModel = i;
}, function (t, e) {
  t.exports = function (t, e) {
    return {
      enumerable: !(1 & t),
      configurable: !(2 & t),
      writable: !(4 & t),
      value: e
    };
  };
}, function (t, e) {
  var n = 0,
      r = Math.random();

  t.exports = function (t) {
    return "Symbol(".concat(void 0 === t ? "" : t, ")_", (++n + r).toString(36));
  };
}, function (t, e) {
  t.exports = !1;
}, function (t, e, n) {
  var r = n(104),
      o = n(75);

  t.exports = Object.keys || function (t) {
    return r(t, o);
  };
}, function (t, e, n) {
  var r = n(22),
      o = Math.max,
      i = Math.min;

  t.exports = function (t, e) {
    return (t = r(t)) < 0 ? o(t + e, 0) : i(t, e);
  };
}, function (t, e, n) {
  var r = n(3),
      o = n(105),
      i = n(75),
      s = n(74)("IE_PROTO"),
      u = function u() {},
      _c = function c() {
    var t,
        e = n(72)("iframe"),
        r = i.length;

    for (e.style.display = "none", n(76).appendChild(e), e.src = "javascript:", (t = e.contentWindow.document).open(), t.write("<script>document.F=Object<\/script>"), t.close(), _c = t.F; r--;) {
      delete _c.prototype[i[r]];
    }

    return _c();
  };

  t.exports = Object.create || function (t, e) {
    var n;
    return null !== t ? (u.prototype = r(t), n = new u(), u.prototype = null, n[s] = t) : n = _c(), void 0 === e ? n : o(n, e);
  };
}, function (t, e, n) {
  var r = n(104),
      o = n(75).concat("length", "prototype");

  e.f = Object.getOwnPropertyNames || function (t) {
    return r(t, o);
  };
}, function (t, e, n) {
  var r = n(15),
      o = n(11),
      i = n(74)("IE_PROTO"),
      s = Object.prototype;

  t.exports = Object.getPrototypeOf || function (t) {
    return t = o(t), r(t, i) ? t[i] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? s : null;
  };
}, function (t, e, n) {
  var r = n(5)("unscopables"),
      o = Array.prototype;
  null == o[r] && n(16)(o, r, {}), t.exports = function (t) {
    o[r][t] = !0;
  };
}, function (t, e, n) {
  var r = n(4);

  t.exports = function (t, e) {
    if (!r(t) || t._t !== e) throw TypeError("Incompatible receiver, " + e + " required!");
    return t;
  };
}, function (t, e, n) {
  "use strict";

  var r = this && this.__values || function (t) {
    var e = "function" == typeof Symbol && Symbol.iterator,
        n = e && t[e],
        r = 0;
    if (n) return n.call(t);
    if (t && "number" == typeof t.length) return {
      next: function next() {
        return t && r >= t.length && (t = void 0), {
          value: t && t[r++],
          done: !t
        };
      }
    };
    throw new TypeError(e ? "Object is not iterable." : "Symbol.iterator is not defined.");
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var o = function () {
    function t() {}

    return t.prototype.clone = function () {
      var t = this,
          e = new this.constructor();
      return Object.keys(this).forEach(function (n) {
        var r = t.deepClone(t[n]);
        void 0 !== r && (e[n] = r);
      }), e;
    }, t.prototype.deepClone = function (t) {
      var e,
          n,
          o = _typeof(t);

      if ("number" === o || "string" === o || "boolean" === o) return t;

      if (null !== t && "object" === o) {
        if ("function" == typeof t.clone) return t.clone();
        if (t instanceof Date) return new Date(t.getTime());

        if (void 0 !== t[Symbol.iterator]) {
          var i = [];

          try {
            for (var s = r(t), u = s.next(); !u.done; u = s.next()) {
              var c = u.value;
              i.push(this.deepClone(c));
            }
          } catch (t) {
            e = {
              error: t
            };
          } finally {
            try {
              u && !u.done && (n = s.return) && n.call(s);
            } finally {
              if (e) throw e.error;
            }
          }

          return t instanceof Array ? i : new t.constructor(i);
        }

        var a = {};

        for (var f in t) {
          t.hasOwnProperty(f) && (a[f] = this.deepClone(t[f]));
        }

        return a;
      }
    }, t;
  }();

  e.Cloneable = o;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(14),
      o = function () {
    function t() {}

    return t.encode = function (t, e) {
      var n;
      if ("string" == typeof t && (t = parseInt(t, 10)), (n = t.toString(2)).length > e || t < 0) throw new r.EncodingError(t + " too large to encode into " + e);
      return n.length < e && (n = "0".repeat(e - n.length) + n), n;
    }, t.decode = function (t, e) {
      if (e !== t.length) throw new r.DecodingError("invalid bit length");
      return parseInt(t, 2);
    }, t;
  }();

  e.IntEncoder = o;
}, function (t, e, n) {
  var r = n(9).f,
      o = n(15),
      i = n(5)("toStringTag");

  t.exports = function (t, e, n) {
    t && !o(t = n ? t : t.prototype, i) && r(t, i, {
      configurable: !0,
      value: e
    });
  };
}, function (t, e, n) {
  var r = n(0),
      o = n(27),
      i = n(2),
      s = n(78),
      u = "[" + s + "]",
      c = RegExp("^" + u + u + "*"),
      a = RegExp(u + u + "*$"),
      f = function f(t, e, n) {
    var o = {},
        u = i(function () {
      return !!s[t]() || "​" != "​"[t]();
    }),
        c = o[t] = u ? e(l) : s[t];
    n && (o[n] = c), r(r.P + r.F * u, "String", o);
  },
      l = f.trim = function (t, e) {
    return t = String(o(t)), 1 & e && (t = t.replace(c, "")), 2 & e && (t = t.replace(a, "")), t;
  };

  t.exports = f;
}, function (t, e) {
  t.exports = {};
}, function (t, e, n) {
  "use strict";

  var r = n(1),
      o = n(9),
      i = n(8),
      s = n(5)("species");

  t.exports = function (t) {
    var e = r[t];
    i && e && !e[s] && o.f(e, s, {
      configurable: !0,
      get: function get() {
        return this;
      }
    });
  };
}, function (t, e) {
  t.exports = function (t, e, n, r) {
    if (!(t instanceof e) || void 0 !== r && r in t) throw TypeError(n + ": incorrect invocation!");
    return t;
  };
}, function (t, e, n) {
  var r = n(12);

  t.exports = function (t, e, n) {
    for (var o in e) {
      r(t, o, e[o], n);
    }

    return t;
  };
}, function (t, e, n) {
  var r = n(26);
  t.exports = Object("z").propertyIsEnumerable(0) ? Object : function (t) {
    return "String" == r(t) ? t.split("") : Object(t);
  };
}, function (t, e) {
  e.f = {}.propertyIsEnumerable;
}, function (t, e, n) {
  var r = n(26),
      o = n(5)("toStringTag"),
      i = "Arguments" == r(function () {
    return arguments;
  }());

  t.exports = function (t) {
    var e, n, s;
    return void 0 === t ? "Undefined" : null === t ? "Null" : "string" == typeof (n = function (t, e) {
      try {
        return t[e];
      } catch (t) {}
    }(e = Object(t), o)) ? n : i ? r(e) : "Object" == (s = r(e)) && "function" == typeof e.callee ? "Arguments" : s;
  };
}, function (t, e, n) {
  var r = n(3),
      o = n(21),
      i = n(5)("species");

  t.exports = function (t, e) {
    var n,
        s = r(t).constructor;
    return void 0 === s || null == (n = r(s)[i]) ? e : o(n);
  };
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(325)), r(n(330)), r(n(331)), r(n(69)), r(n(133));
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = function () {
    function t(t, e, n) {
      this.callback = t, this.param = e, this.listenerId = n, this.isValid() ? this.success() : this.fail();
    }

    return t.prototype.isValid = function () {
      return !0;
    }, t.prototype.fail = function () {
      (0, this.callback)(null, !1);
    }, t;
  }();

  e.Command = r;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = function () {
    function t() {}

    return t.encode = function (t) {
      return +t + "";
    }, t.decode = function (t) {
      return "1" === t;
    }, t;
  }();

  e.BooleanEncoder = r;
}, function (t, e, n) {
  var r = n(7),
      o = n(1),
      i = o["__core-js_shared__"] || (o["__core-js_shared__"] = {});
  (t.exports = function (t, e) {
    return i[t] || (i[t] = void 0 !== e ? e : {});
  })("versions", []).push({
    version: r.version,
    mode: n(34) ? "pure" : "global",
    copyright: "© 2019 Denis Pushkarev (zloirock.ru)"
  });
}, function (t, e, n) {
  var r = n(17),
      o = n(6),
      i = n(36);

  t.exports = function (t) {
    return function (e, n, s) {
      var u,
          c = r(e),
          a = o(c.length),
          f = i(s, a);

      if (t && n != n) {
        for (; a > f;) {
          if ((u = c[f++]) != u) return !0;
        }
      } else for (; a > f; f++) {
        if ((t || f in c) && c[f] === n) return t || f || 0;
      }

      return !t && -1;
    };
  };
}, function (t, e) {
  e.f = Object.getOwnPropertySymbols;
}, function (t, e, n) {
  var r = n(26);

  t.exports = Array.isArray || function (t) {
    return "Array" == r(t);
  };
}, function (t, e, n) {
  var r = n(5)("iterator"),
      o = !1;

  try {
    var i = [7][r]();
    i.return = function () {
      o = !0;
    }, Array.from(i, function () {
      throw 2;
    });
  } catch (t) {}

  t.exports = function (t, e) {
    if (!e && !o) return !1;
    var n = !1;

    try {
      var i = [7],
          s = i[r]();
      s.next = function () {
        return {
          done: n = !0
        };
      }, i[r] = function () {
        return s;
      }, t(i);
    } catch (t) {}

    return n;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(3);

  t.exports = function () {
    var t = r(this),
        e = "";
    return t.global && (e += "g"), t.ignoreCase && (e += "i"), t.multiline && (e += "m"), t.unicode && (e += "u"), t.sticky && (e += "y"), e;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(52),
      o = RegExp.prototype.exec;

  t.exports = function (t, e) {
    var n = t.exec;

    if ("function" == typeof n) {
      var i = n.call(t, e);
      if ("object" != _typeof(i)) throw new TypeError("RegExp exec method returned something other than an Object or null");
      return i;
    }

    if ("RegExp" !== r(t)) throw new TypeError("RegExp#exec called on incompatible receiver");
    return o.call(t, e);
  };
}, function (t, e, n) {
  "use strict";

  n(122);

  var r = n(12),
      o = n(16),
      i = n(2),
      s = n(27),
      u = n(5),
      c = n(93),
      a = u("species"),
      f = !i(function () {
    var t = /./;
    return t.exec = function () {
      var t = [];
      return t.groups = {
        a: "7"
      }, t;
    }, "7" !== "".replace(t, "$<a>");
  }),
      l = function () {
    var t = /(?:)/,
        e = t.exec;

    t.exec = function () {
      return e.apply(this, arguments);
    };

    var n = "ab".split(t);
    return 2 === n.length && "a" === n[0] && "b" === n[1];
  }();

  t.exports = function (t, e, n) {
    var p = u(t),
        h = !i(function () {
      var e = {};
      return e[p] = function () {
        return 7;
      }, 7 != ""[t](e);
    }),
        d = h ? !i(function () {
      var e = !1,
          n = /a/;
      return n.exec = function () {
        return e = !0, null;
      }, "split" === t && (n.constructor = {}, n.constructor[a] = function () {
        return n;
      }), n[p](""), !e;
    }) : void 0;

    if (!h || !d || "replace" === t && !f || "split" === t && !l) {
      var v = /./[p],
          y = n(s, p, ""[t], function (t, e, n, r, o) {
        return e.exec === c ? h && !o ? {
          done: !0,
          value: v.call(e, n, r)
        } : {
          done: !0,
          value: t.call(n, e, r)
        } : {
          done: !1
        };
      }),
          g = y[0],
          m = y[1];
      r(String.prototype, t, g), o(RegExp.prototype, p, 2 == e ? function (t, e) {
        return m.call(t, this, e);
      } : function (t) {
        return m.call(t, this);
      });
    }
  };
}, function (t, e, n) {
  var r = n(20),
      o = n(117),
      i = n(88),
      s = n(3),
      u = n(6),
      c = n(90),
      a = {},
      f = {};
  (e = t.exports = function (t, e, n, l, p) {
    var h,
        d,
        v,
        y,
        g = p ? function () {
      return t;
    } : c(t),
        m = r(n, l, e ? 2 : 1),
        b = 0;
    if ("function" != typeof g) throw TypeError(t + " is not iterable!");

    if (i(g)) {
      for (h = u(t.length); h > b; b++) {
        if ((y = e ? m(s(d = t[b])[0], d[1]) : m(t[b])) === a || y === f) return y;
      }
    } else for (v = g.call(t); !(d = v.next()).done;) {
      if ((y = o(v, m, d.value, e)) === a || y === f) return y;
    }
  }).BREAK = a, e.RETURN = f;
}, function (t, e, n) {
  var r = n(1).navigator;
  t.exports = r && r.userAgent || "";
}, function (t, e, n) {
  "use strict";

  var r = n(1),
      o = n(0),
      i = n(12),
      s = n(49),
      u = n(30),
      c = n(65),
      a = n(48),
      f = n(4),
      l = n(2),
      p = n(61),
      h = n(44),
      d = n(79);

  t.exports = function (t, e, n, v, y, g) {
    var m = r[t],
        b = m,
        _ = y ? "set" : "add",
        w = b && b.prototype,
        E = {},
        S = function S(t) {
      var e = w[t];
      i(w, t, "delete" == t || "has" == t ? function (t) {
        return !(g && !f(t)) && e.call(this, 0 === t ? 0 : t);
      } : "get" == t ? function (t) {
        return g && !f(t) ? void 0 : e.call(this, 0 === t ? 0 : t);
      } : "add" == t ? function (t) {
        return e.call(this, 0 === t ? 0 : t), this;
      } : function (t, n) {
        return e.call(this, 0 === t ? 0 : t, n), this;
      });
    };

    if ("function" == typeof b && (g || w.forEach && !l(function () {
      new b().entries().next();
    }))) {
      var O = new b(),
          A = O[_](g ? {} : -0, 1) != O,
          P = l(function () {
        O.has(1);
      }),
          I = p(function (t) {
        new b(t);
      }),
          C = !g && l(function () {
        for (var t = new b(), e = 5; e--;) {
          t[_](e, e);
        }

        return !t.has(-0);
      });
      I || ((b = e(function (e, n) {
        a(e, b, t);
        var r = d(new m(), e, b);
        return null != n && c(n, y, r[_], r), r;
      })).prototype = w, w.constructor = b), (P || C) && (S("delete"), S("has"), y && S("get")), (C || A) && S(_), g && w.clear && delete w.clear;
    } else b = v.getConstructor(e, t, y, _), s(b.prototype, n), u.NEED = !0;

    return h(b, t), E[t] = b, o(o.G + o.W + o.F * (b != m), E), g || v.setStrong(b, t, y), b;
  };
}, function (t, e, n) {
  for (var r, o = n(1), i = n(16), s = n(33), u = s("typed_array"), c = s("view"), a = !(!o.ArrayBuffer || !o.DataView), f = a, l = 0, p = "Int8Array,Uint8Array,Uint8ClampedArray,Int16Array,Uint16Array,Int32Array,Uint32Array,Float32Array,Float64Array".split(","); l < 9;) {
    (r = o[p[l++]]) ? (i(r.prototype, u, !0), i(r.prototype, c, !0)) : f = !1;
  }

  t.exports = {
    ABV: a,
    CONSTR: f,
    TYPED: u,
    VIEW: c
  };
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });
  var r = n(31);

  e.Response = function () {
    this.cmpId = r.CmpApiModel.cmpId, this.cmpVersion = r.CmpApiModel.cmpVersion, this.gdprApplies = r.CmpApiModel.gdprApplies, this.tcfPolicyVersion = r.CmpApiModel.tcfPolicyVersion;
  };
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(326)), r(n(327)), r(n(328));
}, function (t, e, n) {
  "use strict";

  var _r,
      o = this && this.__extends || (_r = function r(t, e) {
    return (_r = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(55),
      c = n(54),
      a = function (t) {
    function e() {
      return null !== t && t.apply(this, arguments) || this;
    }

    return o(e, t), e.prototype.success = function () {
      return i(this, void 0, void 0, function () {
        return s(this, function (t) {
          return (0, this.callback)(new c.TCData(this.param, this.listenerId), !0), [2];
        });
      });
    }, e.prototype.isValid = function () {
      var t = !0;
      return void 0 !== this.param && (t = (t = Array.isArray(this.param)) && this.param.every(function (t) {
        return Number.isInteger(t);
      })), t;
    }, e;
  }(u.Command);

  e.GetTCDataCommand = a;
}, function (t, e, n) {
  var r = n(4),
      o = n(1).document,
      i = r(o) && r(o.createElement);

  t.exports = function (t) {
    return i ? o.createElement(t) : {};
  };
}, function (t, e, n) {
  e.f = n(5);
}, function (t, e, n) {
  var r = n(57)("keys"),
      o = n(33);

  t.exports = function (t) {
    return r[t] || (r[t] = o(t));
  };
}, function (t, e) {
  t.exports = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",");
}, function (t, e, n) {
  var r = n(1).document;
  t.exports = r && r.documentElement;
}, function (t, e, n) {
  var r = n(4),
      o = n(3),
      i = function i(t, e) {
    if (o(t), !r(e) && null !== e) throw TypeError(e + ": can't set as prototype!");
  };

  t.exports = {
    set: Object.setPrototypeOf || ("__proto__" in {} ? function (t, e, r) {
      try {
        (r = n(20)(Function.call, n(23).f(Object.prototype, "__proto__").set, 2))(t, []), e = !(t instanceof Array);
      } catch (t) {
        e = !0;
      }

      return function (t, n) {
        return i(t, n), e ? t.__proto__ = n : r(t, n), t;
      };
    }({}, !1) : void 0),
    check: i
  };
}, function (t, e) {
  t.exports = "\t\n\x0B\f\r \xA0\u1680\u180E\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200A\u202F\u205F\u3000\u2028\u2029\uFEFF";
}, function (t, e, n) {
  var r = n(4),
      o = n(77).set;

  t.exports = function (t, e, n) {
    var i,
        s = e.constructor;
    return s !== n && "function" == typeof s && (i = s.prototype) !== n.prototype && r(i) && o && o(t, i), t;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(22),
      o = n(27);

  t.exports = function (t) {
    var e = String(o(this)),
        n = "",
        i = r(t);
    if (i < 0 || i == 1 / 0) throw RangeError("Count can't be negative");

    for (; i > 0; (i >>>= 1) && (e += e)) {
      1 & i && (n += e);
    }

    return n;
  };
}, function (t, e) {
  t.exports = Math.sign || function (t) {
    return 0 == (t = +t) || t != t ? t : t < 0 ? -1 : 1;
  };
}, function (t, e) {
  var n = Math.expm1;
  t.exports = !n || n(10) > 22025.465794806718 || n(10) < 22025.465794806718 || -2e-17 != n(-2e-17) ? function (t) {
    return 0 == (t = +t) ? t : t > -1e-6 && t < 1e-6 ? t + t * t / 2 : Math.exp(t) - 1;
  } : n;
}, function (t, e, n) {
  var r = n(22),
      o = n(27);

  t.exports = function (t) {
    return function (e, n) {
      var i,
          s,
          u = String(o(e)),
          c = r(n),
          a = u.length;
      return c < 0 || c >= a ? t ? "" : void 0 : (i = u.charCodeAt(c)) < 55296 || i > 56319 || c + 1 === a || (s = u.charCodeAt(c + 1)) < 56320 || s > 57343 ? t ? u.charAt(c) : i : t ? u.slice(c, c + 2) : s - 56320 + (i - 55296 << 10) + 65536;
    };
  };
}, function (t, e, n) {
  "use strict";

  var r = n(34),
      o = n(0),
      i = n(12),
      s = n(16),
      u = n(46),
      c = n(116),
      a = n(44),
      f = n(39),
      l = n(5)("iterator"),
      p = !([].keys && "next" in [].keys()),
      h = function h() {
    return this;
  };

  t.exports = function (t, e, n, d, v, y, g) {
    c(n, e, d);

    var m,
        b,
        _,
        w = function w(t) {
      if (!p && t in A) return A[t];

      switch (t) {
        case "keys":
        case "values":
          return function () {
            return new n(this, t);
          };
      }

      return function () {
        return new n(this, t);
      };
    },
        E = e + " Iterator",
        S = "values" == v,
        O = !1,
        A = t.prototype,
        P = A[l] || A["@@iterator"] || v && A[v],
        I = P || w(v),
        C = v ? S ? w("entries") : I : void 0,
        x = "Array" == e && A.entries || P;

    if (x && (_ = f(x.call(new t()))) !== Object.prototype && _.next && (a(_, E, !0), r || "function" == typeof _[l] || s(_, l, h)), S && P && "values" !== P.name && (O = !0, I = function I() {
      return P.call(this);
    }), r && !g || !p && !O && A[l] || s(A, l, I), u[e] = I, u[E] = h, v) if (m = {
      values: S ? I : w("values"),
      keys: y ? I : w("keys"),
      entries: C
    }, g) for (b in m) {
      b in A || i(A, b, m[b]);
    } else o(o.P + o.F * (p || O), e, m);
    return m;
  };
}, function (t, e, n) {
  var r = n(86),
      o = n(27);

  t.exports = function (t, e, n) {
    if (r(e)) throw TypeError("String#" + n + " doesn't accept regex!");
    return String(o(t));
  };
}, function (t, e, n) {
  var r = n(4),
      o = n(26),
      i = n(5)("match");

  t.exports = function (t) {
    var e;
    return r(t) && (void 0 !== (e = t[i]) ? !!e : "RegExp" == o(t));
  };
}, function (t, e, n) {
  var r = n(5)("match");

  t.exports = function (t) {
    var e = /./;

    try {
      "/./"[t](e);
    } catch (n) {
      try {
        return e[r] = !1, !"/./"[t](e);
      } catch (t) {}
    }

    return !0;
  };
}, function (t, e, n) {
  var r = n(46),
      o = n(5)("iterator"),
      i = Array.prototype;

  t.exports = function (t) {
    return void 0 !== t && (r.Array === t || i[o] === t);
  };
}, function (t, e, n) {
  "use strict";

  var r = n(9),
      o = n(32);

  t.exports = function (t, e, n) {
    e in t ? r.f(t, e, o(0, n)) : t[e] = n;
  };
}, function (t, e, n) {
  var r = n(52),
      o = n(5)("iterator"),
      i = n(46);

  t.exports = n(7).getIteratorMethod = function (t) {
    if (null != t) return t[o] || t["@@iterator"] || i[r(t)];
  };
}, function (t, e, n) {
  "use strict";

  var r = n(11),
      o = n(36),
      i = n(6);

  t.exports = function (t) {
    for (var e = r(this), n = i(e.length), s = arguments.length, u = o(s > 1 ? arguments[1] : void 0, n), c = s > 2 ? arguments[2] : void 0, a = void 0 === c ? n : o(c, n); a > u;) {
      e[u++] = t;
    }

    return e;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(40),
      o = n(121),
      i = n(46),
      s = n(17);
  t.exports = n(84)(Array, "Array", function (t, e) {
    this._t = s(t), this._i = 0, this._k = e;
  }, function () {
    var t = this._t,
        e = this._k,
        n = this._i++;
    return !t || n >= t.length ? (this._t = void 0, o(1)) : o(0, "keys" == e ? n : "values" == e ? t[n] : [n, t[n]]);
  }, "values"), i.Arguments = i.Array, r("keys"), r("values"), r("entries");
}, function (t, e, n) {
  "use strict";

  var r,
      o,
      i = n(62),
      s = RegExp.prototype.exec,
      u = String.prototype.replace,
      c = s,
      a = (r = /a/, o = /b*/g, s.call(r, "a"), s.call(o, "a"), 0 !== r.lastIndex || 0 !== o.lastIndex),
      f = void 0 !== /()??/.exec("")[1];
  (a || f) && (c = function c(t) {
    var e,
        n,
        r,
        o,
        c = this;
    return f && (n = new RegExp("^" + c.source + "$(?!\\s)", i.call(c))), a && (e = c.lastIndex), r = s.call(c, t), a && r && (c.lastIndex = c.global ? r.index + r[0].length : e), f && r && r.length > 1 && u.call(r[0], n, function () {
      for (o = 1; o < arguments.length - 2; o++) {
        void 0 === arguments[o] && (r[o] = void 0);
      }
    }), r;
  }), t.exports = c;
}, function (t, e, n) {
  "use strict";

  var r = n(83)(!0);

  t.exports = function (t, e, n) {
    return e + (n ? r(t, e).length : 1);
  };
}, function (t, e, n) {
  var r,
      o,
      i,
      s = n(20),
      u = n(110),
      c = n(76),
      a = n(72),
      f = n(1),
      l = f.process,
      p = f.setImmediate,
      h = f.clearImmediate,
      d = f.MessageChannel,
      v = f.Dispatch,
      y = 0,
      g = {},
      m = function m() {
    var t = +this;

    if (g.hasOwnProperty(t)) {
      var e = g[t];
      delete g[t], e();
    }
  },
      b = function b(t) {
    m.call(t.data);
  };

  p && h || (p = function p(t) {
    for (var e = [], n = 1; arguments.length > n;) {
      e.push(arguments[n++]);
    }

    return g[++y] = function () {
      u("function" == typeof t ? t : Function(t), e);
    }, r(y), y;
  }, h = function h(t) {
    delete g[t];
  }, "process" == n(26)(l) ? r = function r(t) {
    l.nextTick(s(m, t, 1));
  } : v && v.now ? r = function r(t) {
    v.now(s(m, t, 1));
  } : d ? (i = (o = new d()).port2, o.port1.onmessage = b, r = s(i.postMessage, i, 1)) : f.addEventListener && "function" == typeof postMessage && !f.importScripts ? (r = function r(t) {
    f.postMessage(t + "", "*");
  }, f.addEventListener("message", b, !1)) : r = "onreadystatechange" in a("script") ? function (t) {
    c.appendChild(a("script")).onreadystatechange = function () {
      c.removeChild(this), m.call(t);
    };
  } : function (t) {
    setTimeout(s(m, t, 1), 0);
  }), t.exports = {
    set: p,
    clear: h
  };
}, function (t, e, n) {
  "use strict";

  var r = n(1),
      o = n(8),
      i = n(34),
      s = n(68),
      u = n(16),
      c = n(49),
      a = n(2),
      f = n(48),
      l = n(22),
      p = n(6),
      h = n(129),
      d = n(38).f,
      v = n(9).f,
      y = n(91),
      g = n(44),
      _m2 = r.ArrayBuffer,
      _b = r.DataView,
      _ = r.Math,
      w = r.RangeError,
      E = r.Infinity,
      S = _m2,
      O = _.abs,
      A = _.pow,
      P = _.floor,
      I = _.log,
      C = _.LN2,
      x = o ? "_b" : "buffer",
      L = o ? "_l" : "byteLength",
      T = o ? "_o" : "byteOffset";

  function M(t, e, n) {
    var r,
        o,
        i,
        s = new Array(n),
        u = 8 * n - e - 1,
        c = (1 << u) - 1,
        a = c >> 1,
        f = 23 === e ? A(2, -24) - A(2, -77) : 0,
        l = 0,
        p = t < 0 || 0 === t && 1 / t < 0 ? 1 : 0;

    for ((t = O(t)) != t || t === E ? (o = t != t ? 1 : 0, r = c) : (r = P(I(t) / C), t * (i = A(2, -r)) < 1 && (r--, i *= 2), (t += r + a >= 1 ? f / i : f * A(2, 1 - a)) * i >= 2 && (r++, i /= 2), r + a >= c ? (o = 0, r = c) : r + a >= 1 ? (o = (t * i - 1) * A(2, e), r += a) : (o = t * A(2, a - 1) * A(2, e), r = 0)); e >= 8; s[l++] = 255 & o, o /= 256, e -= 8) {
      ;
    }

    for (r = r << e | o, u += e; u > 0; s[l++] = 255 & r, r /= 256, u -= 8) {
      ;
    }

    return s[--l] |= 128 * p, s;
  }

  function F(t, e, n) {
    var r,
        o = 8 * n - e - 1,
        i = (1 << o) - 1,
        s = i >> 1,
        u = o - 7,
        c = n - 1,
        a = t[c--],
        f = 127 & a;

    for (a >>= 7; u > 0; f = 256 * f + t[c], c--, u -= 8) {
      ;
    }

    for (r = f & (1 << -u) - 1, f >>= -u, u += e; u > 0; r = 256 * r + t[c], c--, u -= 8) {
      ;
    }

    if (0 === f) f = 1 - s;else {
      if (f === i) return r ? NaN : a ? -E : E;
      r += A(2, e), f -= s;
    }
    return (a ? -1 : 1) * r * A(2, f - e);
  }

  function R(t) {
    return t[3] << 24 | t[2] << 16 | t[1] << 8 | t[0];
  }

  function V(t) {
    return [255 & t];
  }

  function j(t) {
    return [255 & t, t >> 8 & 255];
  }

  function N(t) {
    return [255 & t, t >> 8 & 255, t >> 16 & 255, t >> 24 & 255];
  }

  function B(t) {
    return M(t, 52, 8);
  }

  function D(t) {
    return M(t, 23, 4);
  }

  function k(t, e, n) {
    v(t.prototype, e, {
      get: function get() {
        return this[n];
      }
    });
  }

  function U(t, e, n, r) {
    var o = h(+n);
    if (o + e > t[L]) throw w("Wrong index!");
    var i = t[x]._b,
        s = o + t[T],
        u = i.slice(s, s + e);
    return r ? u : u.reverse();
  }

  function G(t, e, n, r, o, i) {
    var s = h(+n);
    if (s + e > t[L]) throw w("Wrong index!");

    for (var u = t[x]._b, c = s + t[T], a = r(+o), f = 0; f < e; f++) {
      u[c + f] = a[i ? f : e - f - 1];
    }
  }

  if (s.ABV) {
    if (!a(function () {
      _m2(1);
    }) || !a(function () {
      new _m2(-1);
    }) || a(function () {
      return new _m2(), new _m2(1.5), new _m2(NaN), "ArrayBuffer" != _m2.name;
    })) {
      for (var Y, W = (_m2 = function m(t) {
        return f(this, _m2), new S(h(t));
      }).prototype = S.prototype, H = d(S), z = 0; H.length > z;) {
        (Y = H[z++]) in _m2 || u(_m2, Y, S[Y]);
      }

      i || (W.constructor = _m2);
    }

    var q = new _b(new _m2(2)),
        J = _b.prototype.setInt8;
    q.setInt8(0, 2147483648), q.setInt8(1, 2147483649), !q.getInt8(0) && q.getInt8(1) || c(_b.prototype, {
      setInt8: function setInt8(t, e) {
        J.call(this, t, e << 24 >> 24);
      },
      setUint8: function setUint8(t, e) {
        J.call(this, t, e << 24 >> 24);
      }
    }, !0);
  } else _m2 = function _m(t) {
    f(this, _m2, "ArrayBuffer");
    var e = h(t);
    this._b = y.call(new Array(e), 0), this[L] = e;
  }, _b = function b(t, e, n) {
    f(this, _b, "DataView"), f(t, _m2, "DataView");
    var r = t[L],
        o = l(e);
    if (o < 0 || o > r) throw w("Wrong offset!");
    if (o + (n = void 0 === n ? r - o : p(n)) > r) throw w("Wrong length!");
    this[x] = t, this[T] = o, this[L] = n;
  }, o && (k(_m2, "byteLength", "_l"), k(_b, "buffer", "_b"), k(_b, "byteLength", "_l"), k(_b, "byteOffset", "_o")), c(_b.prototype, {
    getInt8: function getInt8(t) {
      return U(this, 1, t)[0] << 24 >> 24;
    },
    getUint8: function getUint8(t) {
      return U(this, 1, t)[0];
    },
    getInt16: function getInt16(t) {
      var e = U(this, 2, t, arguments[1]);
      return (e[1] << 8 | e[0]) << 16 >> 16;
    },
    getUint16: function getUint16(t) {
      var e = U(this, 2, t, arguments[1]);
      return e[1] << 8 | e[0];
    },
    getInt32: function getInt32(t) {
      return R(U(this, 4, t, arguments[1]));
    },
    getUint32: function getUint32(t) {
      return R(U(this, 4, t, arguments[1])) >>> 0;
    },
    getFloat32: function getFloat32(t) {
      return F(U(this, 4, t, arguments[1]), 23, 4);
    },
    getFloat64: function getFloat64(t) {
      return F(U(this, 8, t, arguments[1]), 52, 8);
    },
    setInt8: function setInt8(t, e) {
      G(this, 1, t, V, e);
    },
    setUint8: function setUint8(t, e) {
      G(this, 1, t, V, e);
    },
    setInt16: function setInt16(t, e) {
      G(this, 2, t, j, e, arguments[2]);
    },
    setUint16: function setUint16(t, e) {
      G(this, 2, t, j, e, arguments[2]);
    },
    setInt32: function setInt32(t, e) {
      G(this, 4, t, N, e, arguments[2]);
    },
    setUint32: function setUint32(t, e) {
      G(this, 4, t, N, e, arguments[2]);
    },
    setFloat32: function setFloat32(t, e) {
      G(this, 4, t, D, e, arguments[2]);
    },
    setFloat64: function setFloat64(t, e) {
      G(this, 8, t, B, e, arguments[2]);
    }
  });

  g(_m2, "ArrayBuffer"), g(_b, "DataView"), u(_b.prototype, s.VIEW, !0), e.ArrayBuffer = _m2, e.DataView = _b;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = function () {
    function t() {}

    return t.PING = "ping", t.GET_TC_DATA = "getTCData", t.GET_IN_APP_TC_DATA = "getInAppTCData", t.GET_VENDOR_LIST = "getVendorList", t.ADD_EVENT_LISTENER = "addEventListener", t.REMOVE_EVENT_LISTENER = "removeEventListener", t;
  }();

  e.TCFCommands = r;
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(134)), r(n(99)), r(n(352)), r(n(138)), r(n(144));
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(18),
      o = function () {
    function t() {}

    var e, n, o, i, s, u, c, a, f, l, p, h, d, v, y, g, m, b, _, w;

    return e = r.Fields.cmpId, n = r.Fields.cmpVersion, o = r.Fields.consentLanguage, i = r.Fields.consentScreen, s = r.Fields.created, u = r.Fields.isServiceSpecific, c = r.Fields.lastUpdated, a = r.Fields.policyVersion, f = r.Fields.publisherCountryCode, l = r.Fields.publisherCustomLegitimateInterests, p = r.Fields.publisherCustomConsents, h = r.Fields.publisherLegitimateInterests, d = r.Fields.publisherConsents, v = r.Fields.purposeConsents, y = r.Fields.purposeLegitimateInterests, g = r.Fields.purposeOneTreatment, m = r.Fields.specialFeatureOptins, b = r.Fields.useNonStandardStacks, _ = r.Fields.vendorListVersion, w = r.Fields.version, t[e] = 12, t[n] = 12, t[o] = 12, t[i] = 6, t[s] = 36, t[u] = 1, t[c] = 36, t[a] = 6, t[f] = 12, t[l] = 24, t[p] = 24, t[h] = 24, t[d] = 24, t[v] = 24, t[y] = 24, t[g] = 1, t[m] = 12, t[b] = 1, t[_] = 12, t[w] = 6, t.anyBoolean = 1, t.encodingType = 1, t.maxId = 16, t.numCustomPurposes = 6, t.numEntries = 12, t.numRestrictions = 12, t.purposeId = 6, t.restrictionType = 2, t.segmentType = 3, t.singleOrRange = 1, t.vendorId = 16, t;
  }();

  e.BitLength = o;
}, function (t, e, n) {
  "use strict";

  var r;
  Object.defineProperty(e, "__esModule", {
    value: !0
  }), (r = e.RestrictionType || (e.RestrictionType = {}))[r.NOT_ALLOWED = 0] = "NOT_ALLOWED", r[r.REQUIRE_CONSENT = 1] = "REQUIRE_CONSENT", r[r.REQUIRE_LI = 2] = "REQUIRE_LI";
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(56),
      o = n(14),
      i = n(18),
      s = function () {
    function t() {}

    return t.encode = function (t, e) {
      for (var n = "", o = 1; o <= e; o++) {
        n += r.BooleanEncoder.encode(t.has(o));
      }

      return n;
    }, t.decode = function (t, e) {
      if (t.length !== e) throw new o.DecodingError("bitfield encoding length mismatch");

      for (var n = new i.Vector(), s = 1; s <= e; s++) {
        r.BooleanEncoder.decode(t[s - 1]) && n.set(s);
      }

      return n.bitLength = t.length, n;
    }, t;
  }();

  e.FixedVectorEncoder = s;
}, function (t, e, n) {
  t.exports = !n(8) && !n(2)(function () {
    return 7 != Object.defineProperty(n(72)("div"), "a", {
      get: function get() {
        return 7;
      }
    }).a;
  });
}, function (t, e, n) {
  var r = n(1),
      o = n(7),
      i = n(34),
      s = n(73),
      u = n(9).f;

  t.exports = function (t) {
    var e = o.Symbol || (o.Symbol = i ? {} : r.Symbol || {});
    "_" == t.charAt(0) || t in e || u(e, t, {
      value: s.f(t)
    });
  };
}, function (t, e, n) {
  var r = n(15),
      o = n(17),
      i = n(58)(!1),
      s = n(74)("IE_PROTO");

  t.exports = function (t, e) {
    var n,
        u = o(t),
        c = 0,
        a = [];

    for (n in u) {
      n != s && r(u, n) && a.push(n);
    }

    for (; e.length > c;) {
      r(u, n = e[c++]) && (~i(a, n) || a.push(n));
    }

    return a;
  };
}, function (t, e, n) {
  var r = n(9),
      o = n(3),
      i = n(35);
  t.exports = n(8) ? Object.defineProperties : function (t, e) {
    o(t);

    for (var n, s = i(e), u = s.length, c = 0; u > c;) {
      r.f(t, n = s[c++], e[n]);
    }

    return t;
  };
}, function (t, e, n) {
  var r = n(17),
      o = n(38).f,
      i = {}.toString,
      s = "object" == (typeof window === "undefined" ? "undefined" : _typeof(window)) && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [];

  t.exports.f = function (t) {
    return s && "[object Window]" == i.call(t) ? function (t) {
      try {
        return o(t);
      } catch (t) {
        return s.slice();
      }
    }(t) : o(r(t));
  };
}, function (t, e, n) {
  "use strict";

  var r = n(8),
      o = n(35),
      i = n(59),
      s = n(51),
      u = n(11),
      c = n(50),
      a = Object.assign;
  t.exports = !a || n(2)(function () {
    var t = {},
        e = {},
        n = Symbol(),
        r = "abcdefghijklmnopqrst";
    return t[n] = 7, r.split("").forEach(function (t) {
      e[t] = t;
    }), 7 != a({}, t)[n] || Object.keys(a({}, e)).join("") != r;
  }) ? function (t, e) {
    for (var n = u(t), a = arguments.length, f = 1, l = i.f, p = s.f; a > f;) {
      for (var h, d = c(arguments[f++]), v = l ? o(d).concat(l(d)) : o(d), y = v.length, g = 0; y > g;) {
        h = v[g++], r && !p.call(d, h) || (n[h] = d[h]);
      }
    }

    return n;
  } : a;
}, function (t, e) {
  t.exports = Object.is || function (t, e) {
    return t === e ? 0 !== t || 1 / t == 1 / e : t != t && e != e;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(21),
      o = n(4),
      i = n(110),
      s = [].slice,
      u = {},
      c = function c(t, e, n) {
    if (!(e in u)) {
      for (var r = [], o = 0; o < e; o++) {
        r[o] = "a[" + o + "]";
      }

      u[e] = Function("F,a", "return new F(" + r.join(",") + ")");
    }

    return u[e](t, n);
  };

  t.exports = Function.bind || function (t) {
    var e = r(this),
        n = s.call(arguments, 1),
        u = function u() {
      var r = n.concat(s.call(arguments));
      return this instanceof u ? c(e, r.length, r) : i(e, r, t);
    };

    return o(e.prototype) && (u.prototype = e.prototype), u;
  };
}, function (t, e) {
  t.exports = function (t, e, n) {
    var r = void 0 === n;

    switch (e.length) {
      case 0:
        return r ? t() : t.call(n);

      case 1:
        return r ? t(e[0]) : t.call(n, e[0]);

      case 2:
        return r ? t(e[0], e[1]) : t.call(n, e[0], e[1]);

      case 3:
        return r ? t(e[0], e[1], e[2]) : t.call(n, e[0], e[1], e[2]);

      case 4:
        return r ? t(e[0], e[1], e[2], e[3]) : t.call(n, e[0], e[1], e[2], e[3]);
    }

    return t.apply(n, e);
  };
}, function (t, e, n) {
  var r = n(1).parseInt,
      o = n(45).trim,
      i = n(78),
      s = /^[-+]?0[xX]/;
  t.exports = 8 !== r(i + "08") || 22 !== r(i + "0x16") ? function (t, e) {
    var n = o(String(t), 3);
    return r(n, e >>> 0 || (s.test(n) ? 16 : 10));
  } : r;
}, function (t, e, n) {
  var r = n(1).parseFloat,
      o = n(45).trim;
  t.exports = 1 / r(n(78) + "-0") != -1 / 0 ? function (t) {
    var e = o(String(t), 3),
        n = r(e);
    return 0 === n && "-" == e.charAt(0) ? -0 : n;
  } : r;
}, function (t, e, n) {
  var r = n(26);

  t.exports = function (t, e) {
    if ("number" != typeof t && "Number" != r(t)) throw TypeError(e);
    return +t;
  };
}, function (t, e, n) {
  var r = n(4),
      o = Math.floor;

  t.exports = function (t) {
    return !r(t) && isFinite(t) && o(t) === t;
  };
}, function (t, e) {
  t.exports = Math.log1p || function (t) {
    return (t = +t) > -1e-8 && t < 1e-8 ? t - t * t / 2 : Math.log(1 + t);
  };
}, function (t, e, n) {
  "use strict";

  var r = n(37),
      o = n(32),
      i = n(44),
      s = {};
  n(16)(s, n(5)("iterator"), function () {
    return this;
  }), t.exports = function (t, e, n) {
    t.prototype = r(s, {
      next: o(1, n)
    }), i(t, e + " Iterator");
  };
}, function (t, e, n) {
  var r = n(3);

  t.exports = function (t, e, n, o) {
    try {
      return o ? e(r(n)[0], n[1]) : e(n);
    } catch (e) {
      var i = t.return;
      throw void 0 !== i && r(i.call(t)), e;
    }
  };
}, function (t, e, n) {
  var r = n(245);

  t.exports = function (t, e) {
    return new (r(t))(e);
  };
}, function (t, e, n) {
  var r = n(21),
      o = n(11),
      i = n(50),
      s = n(6);

  t.exports = function (t, e, n, u, c) {
    r(e);
    var a = o(t),
        f = i(a),
        l = s(a.length),
        p = c ? l - 1 : 0,
        h = c ? -1 : 1;
    if (n < 2) for (;;) {
      if (p in f) {
        u = f[p], p += h;
        break;
      }

      if (p += h, c ? p < 0 : l <= p) throw TypeError("Reduce of empty array with no initial value");
    }

    for (; c ? p >= 0 : l > p; p += h) {
      p in f && (u = e(u, f[p], p, a));
    }

    return u;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(11),
      o = n(36),
      i = n(6);

  t.exports = [].copyWithin || function (t, e) {
    var n = r(this),
        s = i(n.length),
        u = o(t, s),
        c = o(e, s),
        a = arguments.length > 2 ? arguments[2] : void 0,
        f = Math.min((void 0 === a ? s : o(a, s)) - c, s - u),
        l = 1;

    for (c < u && u < c + f && (l = -1, c += f - 1, u += f - 1); f-- > 0;) {
      c in n ? n[u] = n[c] : delete n[u], u += l, c += l;
    }

    return n;
  };
}, function (t, e) {
  t.exports = function (t, e) {
    return {
      value: e,
      done: !!t
    };
  };
}, function (t, e, n) {
  "use strict";

  var r = n(93);
  n(0)({
    target: "RegExp",
    proto: !0,
    forced: r !== /./.exec
  }, {
    exec: r
  });
}, function (t, e, n) {
  n(8) && "g" != /./g.flags && n(9).f(RegExp.prototype, "flags", {
    configurable: !0,
    get: n(62)
  });
}, function (t, e, n) {
  "use strict";

  var r,
      o,
      i,
      s,
      u = n(34),
      c = n(1),
      a = n(20),
      f = n(52),
      l = n(0),
      p = n(4),
      h = n(21),
      d = n(48),
      v = n(65),
      y = n(53),
      g = n(95).set,
      m = n(265)(),
      b = n(125),
      _ = n(266),
      w = n(66),
      E = n(126),
      S = c.TypeError,
      O = c.process,
      A = O && O.versions,
      P = A && A.v8 || "",
      _I = c.Promise,
      C = "process" == f(O),
      x = function x() {},
      L = o = b.f,
      T = !!function () {
    try {
      var t = _I.resolve(1),
          e = (t.constructor = {})[n(5)("species")] = function (t) {
        t(x, x);
      };

      return (C || "function" == typeof PromiseRejectionEvent) && t.then(x) instanceof e && 0 !== P.indexOf("6.6") && -1 === w.indexOf("Chrome/66");
    } catch (t) {}
  }(),
      M = function M(t) {
    var e;
    return !(!p(t) || "function" != typeof (e = t.then)) && e;
  },
      F = function F(t, e) {
    if (!t._n) {
      t._n = !0;
      var n = t._c;
      m(function () {
        for (var r = t._v, o = 1 == t._s, i = 0, s = function s(e) {
          var n,
              i,
              s,
              u = o ? e.ok : e.fail,
              c = e.resolve,
              a = e.reject,
              f = e.domain;

          try {
            u ? (o || (2 == t._h && j(t), t._h = 1), !0 === u ? n = r : (f && f.enter(), n = u(r), f && (f.exit(), s = !0)), n === e.promise ? a(S("Promise-chain cycle")) : (i = M(n)) ? i.call(n, c, a) : c(n)) : a(r);
          } catch (t) {
            f && !s && f.exit(), a(t);
          }
        }; n.length > i;) {
          s(n[i++]);
        }

        t._c = [], t._n = !1, e && !t._h && R(t);
      });
    }
  },
      R = function R(t) {
    g.call(c, function () {
      var e,
          n,
          r,
          o = t._v,
          i = V(t);
      if (i && (e = _(function () {
        C ? O.emit("unhandledRejection", o, t) : (n = c.onunhandledrejection) ? n({
          promise: t,
          reason: o
        }) : (r = c.console) && r.error && r.error("Unhandled promise rejection", o);
      }), t._h = C || V(t) ? 2 : 1), t._a = void 0, i && e.e) throw e.v;
    });
  },
      V = function V(t) {
    return 1 !== t._h && 0 === (t._a || t._c).length;
  },
      j = function j(t) {
    g.call(c, function () {
      var e;
      C ? O.emit("rejectionHandled", t) : (e = c.onrejectionhandled) && e({
        promise: t,
        reason: t._v
      });
    });
  },
      N = function N(t) {
    var e = this;
    e._d || (e._d = !0, (e = e._w || e)._v = t, e._s = 2, e._a || (e._a = e._c.slice()), F(e, !0));
  },
      B = function B(t) {
    var e,
        n = this;

    if (!n._d) {
      n._d = !0, n = n._w || n;

      try {
        if (n === t) throw S("Promise can't be resolved itself");
        (e = M(t)) ? m(function () {
          var r = {
            _w: n,
            _d: !1
          };

          try {
            e.call(t, a(B, r, 1), a(N, r, 1));
          } catch (t) {
            N.call(r, t);
          }
        }) : (n._v = t, n._s = 1, F(n, !1));
      } catch (t) {
        N.call({
          _w: n,
          _d: !1
        }, t);
      }
    }
  };

  T || (_I = function I(t) {
    d(this, _I, "Promise", "_h"), h(t), r.call(this);

    try {
      t(a(B, this, 1), a(N, this, 1));
    } catch (t) {
      N.call(this, t);
    }
  }, (r = function r(t) {
    this._c = [], this._a = void 0, this._s = 0, this._d = !1, this._v = void 0, this._h = 0, this._n = !1;
  }).prototype = n(49)(_I.prototype, {
    then: function then(t, e) {
      var n = L(y(this, _I));
      return n.ok = "function" != typeof t || t, n.fail = "function" == typeof e && e, n.domain = C ? O.domain : void 0, this._c.push(n), this._a && this._a.push(n), this._s && F(this, !1), n.promise;
    },
    catch: function _catch(t) {
      return this.then(void 0, t);
    }
  }), i = function i() {
    var t = new r();
    this.promise = t, this.resolve = a(B, t, 1), this.reject = a(N, t, 1);
  }, b.f = L = function L(t) {
    return t === _I || t === s ? new i(t) : o(t);
  }), l(l.G + l.W + l.F * !T, {
    Promise: _I
  }), n(44)(_I, "Promise"), n(47)("Promise"), s = n(7).Promise, l(l.S + l.F * !T, "Promise", {
    reject: function reject(t) {
      var e = L(this);
      return (0, e.reject)(t), e.promise;
    }
  }), l(l.S + l.F * (u || !T), "Promise", {
    resolve: function resolve(t) {
      return E(u && this === s ? _I : this, t);
    }
  }), l(l.S + l.F * !(T && n(61)(function (t) {
    _I.all(t).catch(x);
  })), "Promise", {
    all: function all(t) {
      var e = this,
          n = L(e),
          r = n.resolve,
          o = n.reject,
          i = _(function () {
        var n = [],
            i = 0,
            s = 1;
        v(t, !1, function (t) {
          var u = i++,
              c = !1;
          n.push(void 0), s++, e.resolve(t).then(function (t) {
            c || (c = !0, n[u] = t, --s || r(n));
          }, o);
        }), --s || r(n);
      });

      return i.e && o(i.v), n.promise;
    },
    race: function race(t) {
      var e = this,
          n = L(e),
          r = n.reject,
          o = _(function () {
        v(t, !1, function (t) {
          e.resolve(t).then(n.resolve, r);
        });
      });

      return o.e && r(o.v), n.promise;
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(21);

  function o(t) {
    var e, n;
    this.promise = new t(function (t, r) {
      if (void 0 !== e || void 0 !== n) throw TypeError("Bad Promise constructor");
      e = t, n = r;
    }), this.resolve = r(e), this.reject = r(n);
  }

  t.exports.f = function (t) {
    return new o(t);
  };
}, function (t, e, n) {
  var r = n(3),
      o = n(4),
      i = n(125);

  t.exports = function (t, e) {
    if (r(t), o(e) && e.constructor === t) return e;
    var n = i.f(t);
    return (0, n.resolve)(e), n.promise;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(9).f,
      o = n(37),
      i = n(49),
      s = n(20),
      u = n(48),
      c = n(65),
      a = n(84),
      f = n(121),
      l = n(47),
      p = n(8),
      h = n(30).fastKey,
      d = n(41),
      v = p ? "_s" : "size",
      y = function y(t, e) {
    var n,
        r = h(e);
    if ("F" !== r) return t._i[r];

    for (n = t._f; n; n = n.n) {
      if (n.k == e) return n;
    }
  };

  t.exports = {
    getConstructor: function getConstructor(t, e, n, a) {
      var f = t(function (t, r) {
        u(t, f, e, "_i"), t._t = e, t._i = o(null), t._f = void 0, t._l = void 0, t[v] = 0, null != r && c(r, n, t[a], t);
      });
      return i(f.prototype, {
        clear: function clear() {
          for (var t = d(this, e), n = t._i, r = t._f; r; r = r.n) {
            r.r = !0, r.p && (r.p = r.p.n = void 0), delete n[r.i];
          }

          t._f = t._l = void 0, t[v] = 0;
        },
        delete: function _delete(t) {
          var n = d(this, e),
              r = y(n, t);

          if (r) {
            var o = r.n,
                i = r.p;
            delete n._i[r.i], r.r = !0, i && (i.n = o), o && (o.p = i), n._f == r && (n._f = o), n._l == r && (n._l = i), n[v]--;
          }

          return !!r;
        },
        forEach: function forEach(t) {
          d(this, e);

          for (var n, r = s(t, arguments.length > 1 ? arguments[1] : void 0, 3); n = n ? n.n : this._f;) {
            for (r(n.v, n.k, this); n && n.r;) {
              n = n.p;
            }
          }
        },
        has: function has(t) {
          return !!y(d(this, e), t);
        }
      }), p && r(f.prototype, "size", {
        get: function get() {
          return d(this, e)[v];
        }
      }), f;
    },
    def: function def(t, e, n) {
      var r,
          o,
          i = y(t, e);
      return i ? i.v = n : (t._l = i = {
        i: o = h(e, !0),
        k: e,
        v: n,
        p: r = t._l,
        n: void 0,
        r: !1
      }, t._f || (t._f = i), r && (r.n = i), t[v]++, "F" !== o && (t._i[o] = i)), t;
    },
    getEntry: y,
    setStrong: function setStrong(t, e, n) {
      a(t, e, function (t, n) {
        this._t = d(t, e), this._k = n, this._l = void 0;
      }, function () {
        for (var t = this._k, e = this._l; e && e.r;) {
          e = e.p;
        }

        return this._t && (this._l = e = e ? e.n : this._t._f) ? f(0, "keys" == t ? e.k : "values" == t ? e.v : [e.k, e.v]) : (this._t = void 0, f(1));
      }, n ? "entries" : "values", !n, !0), l(e);
    }
  };
}, function (t, e, n) {
  "use strict";

  var r = n(49),
      o = n(30).getWeak,
      i = n(3),
      s = n(4),
      u = n(48),
      c = n(65),
      a = n(25),
      f = n(15),
      l = n(41),
      p = a(5),
      h = a(6),
      d = 0,
      v = function v(t) {
    return t._l || (t._l = new y());
  },
      y = function y() {
    this.a = [];
  },
      g = function g(t, e) {
    return p(t.a, function (t) {
      return t[0] === e;
    });
  };

  y.prototype = {
    get: function get(t) {
      var e = g(this, t);
      if (e) return e[1];
    },
    has: function has(t) {
      return !!g(this, t);
    },
    set: function set(t, e) {
      var n = g(this, t);
      n ? n[1] = e : this.a.push([t, e]);
    },
    delete: function _delete(t) {
      var e = h(this.a, function (e) {
        return e[0] === t;
      });
      return ~e && this.a.splice(e, 1), !!~e;
    }
  }, t.exports = {
    getConstructor: function getConstructor(t, e, n, i) {
      var a = t(function (t, r) {
        u(t, a, e, "_i"), t._t = e, t._i = d++, t._l = void 0, null != r && c(r, n, t[i], t);
      });
      return r(a.prototype, {
        delete: function _delete(t) {
          if (!s(t)) return !1;
          var n = o(t);
          return !0 === n ? v(l(this, e)).delete(t) : n && f(n, this._i) && delete n[this._i];
        },
        has: function has(t) {
          if (!s(t)) return !1;
          var n = o(t);
          return !0 === n ? v(l(this, e)).has(t) : n && f(n, this._i);
        }
      }), a;
    },
    def: function def(t, e, n) {
      var r = o(i(e), !0);
      return !0 === r ? v(t).set(e, n) : r[t._i] = n, t;
    },
    ufstore: v
  };
}, function (t, e, n) {
  var r = n(22),
      o = n(6);

  t.exports = function (t) {
    if (void 0 === t) return 0;
    var e = r(t),
        n = o(e);
    if (e !== n) throw RangeError("Wrong length!");
    return n;
  };
}, function (t, e, n) {
  var r = n(38),
      o = n(59),
      i = n(3),
      s = n(1).Reflect;

  t.exports = s && s.ownKeys || function (t) {
    var e = r.f(i(t)),
        n = o.f;
    return n ? e.concat(n(t)) : e;
  };
}, function (t, e, n) {
  var r = n(6),
      o = n(80),
      i = n(27);

  t.exports = function (t, e, n, s) {
    var u = String(i(t)),
        c = u.length,
        a = void 0 === n ? " " : String(n),
        f = r(e);
    if (f <= c || "" == a) return u;
    var l = f - c,
        p = o.call(a, Math.ceil(l / a.length));
    return p.length > l && (p = p.slice(0, l)), s ? p + u : u + p;
  };
}, function (t, e, n) {
  var r = n(8),
      o = n(35),
      i = n(17),
      s = n(51).f;

  t.exports = function (t) {
    return function (e) {
      for (var n, u = i(e), c = o(u), a = c.length, f = 0, l = []; a > f;) {
        n = c[f++], r && !s.call(u, n) || l.push(t ? [n, u[n]] : u[n]);
      }

      return l;
    };
  };
}, function (t, e, n) {
  "use strict";

  var _r2,
      o = this && this.__extends || (_r2 = function r(t, e) {
    return (_r2 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r2(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__read || function (t, e) {
    var n = "function" == typeof Symbol && t[Symbol.iterator];
    if (!n) return t;
    var r,
        o,
        i = n.call(t),
        s = [];

    try {
      for (; (void 0 === e || e-- > 0) && !(r = i.next()).done;) {
        s.push(r.value);
      }
    } catch (t) {
      o = {
        error: t
      };
    } finally {
      try {
        r && !r.done && (n = i.return) && n.call(i);
      } finally {
        if (o) throw o.error;
      }
    }

    return s;
  },
      s = this && this.__spread || function () {
    for (var t = [], e = 0; e < arguments.length; e++) {
      t = t.concat(i(arguments[e]));
    }

    return t;
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(31),
      c = function (t) {
    function e(e, n) {
      var r = t.call(this) || this;

      if (r.eventStatus = u.CmpApiModel.eventStatus, r.cmpStatus = u.CmpApiModel.cmpStatus, r.listenerId = n, u.CmpApiModel.gdprApplies) {
        var o = u.CmpApiModel.tcModel;
        r.tcString = u.CmpApiModel.tcString, r.isServiceSpecific = o.isServiceSpecific, r.useNonStandardStacks = o.useNonStandardStacks, r.purposeOneTreatment = o.purposeOneTreatment, r.publisherCC = o.publisherCountryCode, r.outOfBand = {
          allowedVendors: r.createVectorField(o.vendorsAllowed, e),
          disclosedVendors: r.createVectorField(o.vendorsDisclosed, e)
        }, r.purpose = {
          consents: r.createVectorField(o.purposeConsents),
          legitimateInterests: r.createVectorField(o.purposeLegitimateInterests)
        }, r.vendor = {
          consents: r.createVectorField(o.vendorConsents, e),
          legitimateInterests: r.createVectorField(o.vendorLegitimateInterests, e)
        }, r.specialFeatureOptins = r.createVectorField(o.specialFeatureOptins), r.publisher = {
          consents: r.createVectorField(o.publisherConsents),
          legitimateInterests: r.createVectorField(o.publisherLegitimateInterests),
          customPurpose: {
            consents: r.createVectorField(o.publisherCustomConsents),
            legitimateInterests: r.createVectorField(o.publisherCustomLegitimateInterests)
          },
          restrictions: r.createRestrictions(o.publisherRestrictions)
        };
      }

      return r;
    }

    return o(e, t), e.prototype.createRestrictions = function (t) {
      var e = {};
      if (t.numRestrictions > 0) for (var n = t.getMaxVendorId(), r = function r(n) {
        var r = n.toString();
        t.getRestrictions(n).forEach(function (t) {
          var n = t.purposeId.toString();
          e[n] || (e[n] = {}), e[n][r] = t.restrictionType;
        });
      }, o = 1; o <= n; o++) {
        r(o);
      }
      return e;
    }, e.prototype.createVectorField = function (t, e) {
      return e ? e.reduce(function (e, n) {
        return e[n + ""] = t.has(+n), e;
      }, {}) : s(t).reduce(function (t, e) {
        return t[e[0].toString(10)] = e[1], t;
      }, {});
    }, e;
  }(n(69).Response);

  e.TCData = c;
}, function (t, e, n) {
  "use strict";

  (function (t) {
    Object.defineProperty(e, "__esModule", {
      value: !0
    });

    var r = n(14),
        o = function () {
      function e() {}

      return e.encode = function (n) {
        if (!/^[0-1]+$/.test(n)) throw new r.EncodingError("Invalid bitField");

        for (var o = n.length, i = "", s = 0; s < o; s += e.BYTE) {
          var u = n.substr(s, e.BYTE);
          u.length < e.BYTE && (u += "0".repeat(e.BYTE - u.length)), i += String.fromCharCode(parseInt(u, 2));
        }

        for (i = "function" == typeof btoa ? btoa(i) : t.from(i, "base64").toString(); "=" === i.charAt(i.length - 1);) {
          i = i.slice(0, -1);
        }

        return (i = i.replace(/\//g, "_")).replace(/\+/g, "-");
      }, e.decode = function (n) {
        var o = new r.DecodingError("Invalidly encoded Base64URL string");
        if (!/^[A-Za-z0-9\-_]+$/.test(n)) throw o;

        switch ((n = (n = n.replace(/_/g, "/")).replace(/-/g, "+")).length < 2 && (n += "A".repeat(2 - n.length)), n.length % 4) {
          case 0:
            break;

          case 2:
            n += "==";
            break;

          case 3:
            n += "=";
            break;

          default:
            throw o;
        }

        for (var i = (n = "function" == typeof atob ? atob(n) : t.from(n, "base64").toString("binary")).length, s = "", u = 0; u < i; u++) {
          var c = n.charCodeAt(u).toString(2);
          s += "0".repeat(e.BYTE - c.length) + c;
        }

        return s;
      }, e.BYTE = 8, e;
    }();

    e.Base64Url = o;
  }).call(this, n(338).Buffer);
}, function (t, e, n) {
  "use strict";

  var _r3,
      o = this && this.__extends || (_r3 = function r(t, e) {
    return (_r3 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r3(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = function (t) {
    function e() {
      var e = null !== t && t.apply(this, arguments) || this;
      return e.root = null, e;
    }

    return o(e, t), e.prototype.isEmpty = function () {
      return !this.root;
    }, e.prototype.add = function (t) {
      var e,
          n = {
        value: t,
        left: null,
        right: null
      };
      if (this.isEmpty()) this.root = n;else for (e = this.root;;) {
        if (t < e.value) {
          if (null === e.left) {
            e.left = n;
            break;
          }

          e = e.left;
        } else {
          if (!(t > e.value)) break;

          if (null === e.right) {
            e.right = n;
            break;
          }

          e = e.right;
        }
      }
    }, e.prototype.get = function () {
      for (var t = [], e = this.root; e;) {
        if (e.left) {
          for (var n = e.left; n.right && n.right != e;) {
            n = n.right;
          }

          n.right == e ? (n.right = null, t.push(e.value), e = e.right) : (n.right = e, e = e.left);
        } else t.push(e.value), e = e.right;
      }

      return t;
    }, e.prototype.contains = function (t) {
      for (var e = !1, n = this.root; n;) {
        if (n.value === t) {
          e = !0;
          break;
        }

        t > n.value ? n = n.right : t < n.value && (n = n.left);
      }

      return e;
    }, e.prototype.min = function (t) {
      var e;

      for (void 0 === t && (t = this.root); t;) {
        t.left ? t = t.left : (e = t.value, t = null);
      }

      return e;
    }, e.prototype.max = function (t) {
      var e;

      for (void 0 === t && (t = this.root); t;) {
        t.right ? t = t.right : (e = t.value, t = null);
      }

      return e;
    }, e.prototype.remove = function (t, e) {
      void 0 === e && (e = this.root);

      for (var n = null, r = "left"; e;) {
        if (t < e.value) n = e, e = e.left, r = "left";else if (t > e.value) n = e, e = e.right, r = "right";else {
          if (e.left || e.right) {
            if (e.left) {
              if (e.right) {
                var o = this.min(e.right);
                this.remove(o, e.right), e.value = o;
              } else n ? n[r] = e.left : this.root = e.left;
            } else n ? n[r] = e.right : this.root = e.right;
          } else n ? n[r] = null : this.root = null;
          e = null;
        }
      }
    }, e;
  }(n(42).Cloneable);

  e.BinarySearchTree = i;
}, function (t, e, n) {
  "use strict";

  var _r4,
      o = this && this.__extends || (_r4 = function r(t, e) {
    return (_r4 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r4(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = n(42),
      s = n(14),
      u = n(100),
      c = function (t) {
    function e(e, n) {
      var r = t.call(this) || this;
      return void 0 !== e && (r.purposeId = e), void 0 !== n && (r.restrictionType = n), r;
    }

    return o(e, t), e.unHash = function (t) {
      var n = t.split(this.hashSeparator),
          r = new e();
      if (2 !== n.length) throw new s.TCModelError("hash", t);
      return r.purposeId = parseInt(n[0], 10), r.restrictionType = parseInt(n[1], 10), r;
    }, Object.defineProperty(e.prototype, "hash", {
      get: function get() {
        if (!this.isValid()) throw new Error("cannot hash invalid PurposeRestriction");
        return "" + this.purposeId + e.hashSeparator + this.restrictionType;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "purposeId", {
      get: function get() {
        return this.purposeId_;
      },
      set: function set(t) {
        this.purposeId_ = t;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.isValid = function () {
      return Number.isInteger(this.purposeId) && this.purposeId > 0 && (this.restrictionType === u.RestrictionType.NOT_ALLOWED || this.restrictionType === u.RestrictionType.REQUIRE_CONSENT || this.restrictionType === u.RestrictionType.REQUIRE_LI);
    }, e.prototype.isSameAs = function (t) {
      return this.purposeId === t.purposeId && this.restrictionType === t.restrictionType;
    }, e.hashSeparator = "-", e;
  }(i.Cloneable);

  e.PurposeRestriction = c;
}, function (t, e, n) {
  "use strict";

  var r;
  Object.defineProperty(e, "__esModule", {
    value: !0
  }), (r = e.Segment || (e.Segment = {})).CORE = "core", r.VENDORS_DISCLOSED = "vendorsDisclosed", r.VENDORS_ALLOWED = "vendorsAllowed", r.PUBLISHER_TC = "publisherTC";
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(56)), r(n(139)), r(n(353)), r(n(101)), r(n(43)), r(n(140)), r(n(141)), r(n(143)), r(n(142));
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(43),
      o = n(14),
      i = function () {
    function t() {}

    return t.encode = function (t, e) {
      return r.IntEncoder.encode(Math.round(t.getTime() / 100), e);
    }, t.decode = function (t, e) {
      if (e !== t.length) throw new o.DecodingError("invalid bit length");
      var n = new Date();
      return n.setTime(100 * r.IntEncoder.decode(t, e)), n;
    }, t;
  }();

  e.DateEncoder = i;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(43),
      o = n(14),
      i = function () {
    function t() {}

    return t.encode = function (t, e) {
      var n = (t = t.toUpperCase()).charCodeAt(0) - 65,
          i = t.charCodeAt(1) - 65;
      if (n < 0 || n > 25 || i < 0 || i > 25) throw new o.EncodingError("invalid language code: " + t);
      if (e % 2 == 1) throw new o.EncodingError("numBits must be even, " + e + " is not valid");
      return e /= 2, r.IntEncoder.encode(n, e) + r.IntEncoder.encode(i, e);
    }, t.decode = function (t, e) {
      if (e !== t.length || t.length % 2) throw new o.DecodingError("invalid bit length for language");
      var n = t.length / 2,
          i = r.IntEncoder.decode(t.slice(0, n), n) + 65,
          s = r.IntEncoder.decode(t.slice(n), n) + 65;
      return String.fromCharCode(i) + String.fromCharCode(s);
    }, t;
  }();

  e.LangEncoder = i;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(99),
      o = n(56),
      i = n(14),
      s = n(43),
      u = n(18),
      c = function () {
    function t() {}

    return t.encode = function (t) {
      var e = s.IntEncoder.encode(t.numRestrictions, r.BitLength.numRestrictions);
      return t.isEncodable() && t.getRestrictions().forEach(function (n) {
        e += s.IntEncoder.encode(n.purposeId, r.BitLength.purposeId), e += s.IntEncoder.encode(n.restrictionType, r.BitLength.restrictionType);

        for (var i = t.getVendors(n), u = i.length, c = 0, a = 0, f = "", l = 0; l < u; l++) {
          var p = i[l];

          if (0 === a && (c++, a = p), l === u - 1 || i[l + 1] > p + 1) {
            var h = !(p === a);
            f += o.BooleanEncoder.encode(h), f += s.IntEncoder.encode(a, r.BitLength.vendorId), h && (f += s.IntEncoder.encode(p, r.BitLength.vendorId)), a = 0;
          }
        }

        e += s.IntEncoder.encode(c, r.BitLength.numEntries), e += f;
      }), e;
    }, t.decode = function (t) {
      var e = 0,
          n = new u.PurposeRestrictionVector(),
          c = s.IntEncoder.decode(t.substr(e, r.BitLength.numRestrictions), r.BitLength.numRestrictions);
      e += r.BitLength.numRestrictions;

      for (var a = 0; a < c; a++) {
        var f = s.IntEncoder.decode(t.substr(e, r.BitLength.purposeId), r.BitLength.purposeId);
        e += r.BitLength.purposeId;
        var l = s.IntEncoder.decode(t.substr(e, r.BitLength.restrictionType), r.BitLength.restrictionType);
        e += r.BitLength.restrictionType;
        var p = new u.PurposeRestriction(f, l),
            h = s.IntEncoder.decode(t.substr(e, r.BitLength.numEntries), r.BitLength.numEntries);
        e += r.BitLength.numEntries;

        for (var d = 0; d < h; d++) {
          var v = o.BooleanEncoder.decode(t.substr(e, r.BitLength.anyBoolean));
          e += r.BitLength.anyBoolean;
          var y = s.IntEncoder.decode(t.substr(e, r.BitLength.vendorId), r.BitLength.vendorId);

          if (e += r.BitLength.vendorId, v) {
            var g = s.IntEncoder.decode(t.substr(e, r.BitLength.vendorId), r.BitLength.vendorId);
            if (e += r.BitLength.vendorId, g < y) throw new i.DecodingError("Invalid RangeEntry: endVendorId " + g + " is less than " + y);

            for (var m = y; m <= g; m++) {
              n.add(m, p);
            }
          } else n.add(y, p);
        }
      }

      return n.bitLength = e, n;
    }, t;
  }();

  e.PurposeRestrictionVectorEncoder = c;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(18),
      o = n(98),
      i = n(43),
      s = n(56),
      u = n(101),
      c = n(143),
      a = function () {
    function t() {}

    return t.encode = function (t) {
      var e,
          n = [],
          r = [],
          u = i.IntEncoder.encode(t.maxId, o.BitLength.maxId),
          a = "",
          f = o.BitLength.maxId + o.BitLength.encodingType,
          l = f + t.maxId,
          p = 2 * o.BitLength.vendorId + o.BitLength.singleOrRange + o.BitLength.numEntries,
          h = f + o.BitLength.numEntries;
      return t.forEach(function (i, u) {
        a += s.BooleanEncoder.encode(i), (e = t.maxId > p && h < l) && i && (t.has(u + 1) ? 0 === r.length && (r.push(u), h += o.BitLength.singleOrRange, h += o.BitLength.vendorId) : (r.push(u), h += o.BitLength.vendorId, n.push(r), r = []));
      }), e ? (u += c.VectorEncodingType.RANGE + "", u += this.buildRangeEncoding(n)) : (u += c.VectorEncodingType.FIELD + "", u += a), u;
    }, t.decode = function (t) {
      var e,
          n = 0,
          a = i.IntEncoder.decode(t.substr(n, o.BitLength.maxId), o.BitLength.maxId);
      n += o.BitLength.maxId;
      var f = i.IntEncoder.decode(t.charAt(n), o.BitLength.encodingType);

      if (n += o.BitLength.encodingType, f === c.VectorEncodingType.RANGE) {
        e = new r.Vector();
        var l = i.IntEncoder.decode(t.substr(n, o.BitLength.numEntries), o.BitLength.numEntries);
        n += o.BitLength.numEntries;

        for (var p = 0; p < l; p++) {
          var h = s.BooleanEncoder.decode(t.charAt(n));
          n += o.BitLength.singleOrRange;
          var d = i.IntEncoder.decode(t.substr(n, o.BitLength.vendorId), o.BitLength.vendorId);

          if (n += o.BitLength.vendorId, h) {
            var v = i.IntEncoder.decode(t.substr(n, o.BitLength.vendorId), o.BitLength.vendorId);
            n += o.BitLength.vendorId;

            for (var y = d; y <= v; y++) {
              e.set(y);
            }
          } else e.set(d);
        }
      } else {
        var g = t.substr(n, a);
        n += a, e = u.FixedVectorEncoder.decode(g, a);
      }

      return e.bitLength = n, e;
    }, t.buildRangeEncoding = function (t) {
      var e = t.length,
          n = i.IntEncoder.encode(e, o.BitLength.numEntries);
      return t.forEach(function (t) {
        var e = 1 === t.length;
        n += s.BooleanEncoder.encode(!e), n += i.IntEncoder.encode(t[0], o.BitLength.vendorId), e || (n += i.IntEncoder.encode(t[1], o.BitLength.vendorId));
      }), n;
    }, t;
  }();

  e.VendorVectorEncoder = a;
}, function (t, e, n) {
  "use strict";

  var r;
  Object.defineProperty(e, "__esModule", {
    value: !0
  }), (r = e.VectorEncodingType || (e.VectorEncodingType = {}))[r.FIELD = 0] = "FIELD", r[r.RANGE = 1] = "RANGE";
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(354)), r(n(355));
}, function (t, e, n) {
  "use strict";

  var _r5,
      o = this && this.__extends || (_r5 = function r(t, e) {
    return (_r5 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r5(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(42),
      c = n(14),
      a = n(146),
      f = n(18),
      l = function (t) {
    function e(n) {
      var r = t.call(this) || this;
      r.isReady_ = !1, r.isLatest = !1;
      var o = e.baseUrl;
      if (r.lang_ = e.DEFAULT_LANGUAGE, r.isVendorList(n)) r.populate(n), r.readyPromise = Promise.resolve();else {
        if (!o) throw new c.GVLError("must specify GVL.baseUrl before loading GVL json");

        if (n > 0) {
          var i = n;
          e.CACHE.has(i) ? (r.populate(e.CACHE.get(i)), r.readyPromise = Promise.resolve()) : (o += e.versionedFilename.replace("[VERSION]", i + ""), r.readyPromise = r.fetchJson(o));
        } else e.CACHE.has(e.LATEST_CACHE_KEY) ? (r.populate(e.CACHE.get(e.LATEST_CACHE_KEY)), r.readyPromise = Promise.resolve()) : (r.isLatest = !0, r.readyPromise = r.fetchJson(o + e.latestFilename));
      }
      return r;
    }

    return o(e, t), Object.defineProperty(e, "baseUrl", {
      get: function get() {
        return this.baseUrl_;
      },
      set: function set(t) {
        if (/^https?:\/\/vendorlist\.consensu\.org\//.test(t)) throw new c.GVLError("Invalid baseUrl!  You may not pull directly from vendorlist.consensu.org and must provide your own cache");
        t.length > 0 && "/" !== t[t.length - 1] && (t += "/"), this.baseUrl_ = t;
      },
      enumerable: !0,
      configurable: !0
    }), e.emptyLanguageCache = function (t) {
      var n = !1;
      return void 0 === t && e.LANGUAGE_CACHE.size > 0 ? (e.LANGUAGE_CACHE = new Map(), n = !0) : "string" == typeof t && this.consentLanguages.has(t.toUpperCase()) && (e.LANGUAGE_CACHE.delete(t.toUpperCase()), n = !0), n;
    }, e.emptyCache = function (t) {
      var n = !1;
      return Number.isInteger(t) && t >= 0 ? (e.CACHE.delete(t), n = !0) : void 0 === t && (e.CACHE = new Map(), n = !0), n;
    }, e.prototype.cacheLanguage = function () {
      e.LANGUAGE_CACHE.has(this.lang_) || e.LANGUAGE_CACHE.set(this.lang_, {
        purposes: this.purposes,
        specialPurposes: this.specialPurposes,
        features: this.features,
        specialFeatures: this.specialFeatures,
        stacks: this.stacks
      });
    }, e.prototype.fetchJson = function (t) {
      return i(this, void 0, void 0, function () {
        var e, n;
        return s(this, function (r) {
          switch (r.label) {
            case 0:
              return r.trys.push([0, 2,, 3]), e = this.populate, [4, a.Json.fetch(t)];

            case 1:
              return e.apply(this, [r.sent()]), [3, 3];

            case 2:
              throw n = r.sent(), new c.GVLError(n.message);

            case 3:
              return [2];
          }
        });
      });
    }, e.prototype.getJson = function () {
      return JSON.parse(JSON.stringify({
        gvlSpecificationVersion: this.gvlSpecificationVersion,
        vendorListVersion: this.vendorListVersion,
        tcfPolicyVersion: this.tcfPolicyVersion,
        lastUpdated: this.lastUpdated,
        purposes: this.purposes,
        specialPurposes: this.specialPurposes,
        features: this.features,
        specialFeatures: this.specialFeatures,
        stacks: this.stacks,
        vendors: this.fullVendorList
      }));
    }, e.prototype.changeLanguage = function (t) {
      return i(this, void 0, void 0, function () {
        var n, r, o, i, u;
        return s(this, function (s) {
          switch (s.label) {
            case 0:
              if (n = t.toUpperCase(), !e.consentLanguages.has(n)) return [3, 6];
              if (n === this.lang_) return [3, 5];
              if (this.lang_ = n, !e.LANGUAGE_CACHE.has(n)) return [3, 1];

              for (o in r = e.LANGUAGE_CACHE.get(n)) {
                r.hasOwnProperty(o) && (this[o] = r[o]);
              }

              return [3, 5];

            case 1:
              i = e.baseUrl + e.languageFilename.replace("[LANG]", t), s.label = 2;

            case 2:
              return s.trys.push([2, 4,, 5]), [4, this.fetchJson(i)];

            case 3:
              return s.sent(), this.cacheLanguage(), [3, 5];

            case 4:
              throw u = s.sent(), new c.GVLError("unable to load language: " + u.message);

            case 5:
              return [3, 7];

            case 6:
              throw new c.GVLError("unsupported language " + t);

            case 7:
              return [2];
          }
        });
      });
    }, Object.defineProperty(e.prototype, "language", {
      get: function get() {
        return this.lang_;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.isVendorList = function (t) {
      return void 0 !== t && void 0 !== t.vendors;
    }, e.prototype.populate = function (t) {
      this.purposes = t.purposes, this.specialPurposes = t.specialPurposes, this.features = t.features, this.specialFeatures = t.specialFeatures, this.stacks = t.stacks, this.isVendorList(t) && (this.gvlSpecificationVersion = t.gvlSpecificationVersion, this.tcfPolicyVersion = t.tcfPolicyVersion, this.vendorListVersion = t.vendorListVersion, this.lastUpdated = t.lastUpdated, "string" == typeof this.lastUpdated && (this.lastUpdated = new Date(this.lastUpdated)), this.vendors_ = t.vendors, this.fullVendorList = t.vendors, this.mapVendors(), this.isReady_ = !0, this.isLatest && e.CACHE.set(e.LATEST_CACHE_KEY, this.getJson()), e.CACHE.has(this.vendorListVersion) || e.CACHE.set(this.vendorListVersion, this.getJson())), this.cacheLanguage();
    }, e.prototype.mapVendors = function (t) {
      var e = this;
      this.byPurposeVendorMap = {}, this.bySpecialPurposeVendorMap = {}, this.byFeatureVendorMap = {}, this.bySpecialFeatureVendorMap = {}, Object.keys(this.purposes).forEach(function (t) {
        e.byPurposeVendorMap[t] = {
          legInt: new Set(),
          consent: new Set(),
          flexible: new Set()
        };
      }), Object.keys(this.specialPurposes).forEach(function (t) {
        e.bySpecialPurposeVendorMap[t] = new Set();
      }), Object.keys(this.features).forEach(function (t) {
        e.byFeatureVendorMap[t] = new Set();
      }), Object.keys(this.specialFeatures).forEach(function (t) {
        e.bySpecialFeatureVendorMap[t] = new Set();
      }), Array.isArray(t) || (t = Object.keys(this.fullVendorList).map(function (t) {
        return +t;
      })), this.vendors_ = t.reduce(function (t, n) {
        var r = e.vendors_["" + n];
        return r && void 0 === r.deletedDate && (r.purposes.forEach(function (t) {
          e.byPurposeVendorMap[t + ""].consent.add(n);
        }), r.specialPurposes.forEach(function (t) {
          e.bySpecialPurposeVendorMap[t + ""].add(n);
        }), r.legIntPurposes.forEach(function (t) {
          e.byPurposeVendorMap[t + ""].legInt.add(n);
        }), r.flexiblePurposes && r.flexiblePurposes.forEach(function (t) {
          e.byPurposeVendorMap[t + ""].flexible.add(n);
        }), r.features.forEach(function (t) {
          e.byFeatureVendorMap[t + ""].add(n);
        }), r.specialFeatures.forEach(function (t) {
          e.bySpecialFeatureVendorMap[t + ""].add(n);
        }), t[n] = r), t;
      }, {});
    }, e.prototype.getFilteredVendors = function (t, e, n, r) {
      var o = this,
          i = t.charAt(0).toUpperCase() + t.slice(1),
          s = {};
      return ("purpose" === t && n ? this["by" + i + "VendorMap"][e + ""][n] : this["by" + (r ? "Special" : "") + i + "VendorMap"][e + ""]).forEach(function (t) {
        s[t + ""] = o.vendors[t + ""];
      }), s;
    }, e.prototype.getVendorsWithConsentPurpose = function (t) {
      return this.getFilteredVendors("purpose", t, "consent");
    }, e.prototype.getVendorsWithLegIntPurpose = function (t) {
      return this.getFilteredVendors("purpose", t, "legInt");
    }, e.prototype.getVendorsWithFlexiblePurpose = function (t) {
      return this.getFilteredVendors("purpose", t, "flexible");
    }, e.prototype.getVendorsWithSpecialPurpose = function (t) {
      return this.getFilteredVendors("purpose", t, void 0, !0);
    }, e.prototype.getVendorsWithFeature = function (t) {
      return this.getFilteredVendors("feature", t);
    }, e.prototype.getVendorsWithSpecialFeature = function (t) {
      return this.getFilteredVendors("feature", t, void 0, !0);
    }, Object.defineProperty(e.prototype, "vendors", {
      get: function get() {
        return this.vendors_;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.narrowVendorsTo = function (t) {
      this.mapVendors(t);
    }, Object.defineProperty(e.prototype, "isReady", {
      get: function get() {
        return this.isReady_;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.clone = function () {
      return new e(this.getJson());
    }, e.isInstanceOf = function (t) {
      return "object" == _typeof(t) && "function" == typeof t.narrowVendorsTo;
    }, e.LANGUAGE_CACHE = new Map(), e.CACHE = new Map(), e.LATEST_CACHE_KEY = 0, e.DEFAULT_LANGUAGE = "EN", e.consentLanguages = new f.ConsentLanguages(), e.latestFilename = "vendor-list.json", e.versionedFilename = "archives/vendor-list-v[VERSION].json", e.languageFilename = "purposes-[LANG].json", e;
  }(u.Cloneable);

  e.GVL = l;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = function () {
    function t() {}

    return t.absCall = function (t, e, n, r) {
      return new Promise(function (o, i) {
        var s = new XMLHttpRequest();
        s.withCredentials = n, s.addEventListener("load", function () {
          if (s.readyState == XMLHttpRequest.DONE) if (s.status >= 200 && s.status < 300) {
            var t = s.response;
            if ("string" == typeof t) try {
              t = JSON.parse(t);
            } catch (t) {}
            o(t);
          } else i(new Error("HTTP Status: " + s.status + " response type: " + s.responseType));
        }), s.addEventListener("error", function () {
          i(new Error("error"));
        }), s.addEventListener("abort", function () {
          i(new Error("aborted"));
        }), null === e ? s.open("GET", t, !0) : s.open("POST", t, !0), s.responseType = "json", s.timeout = r, s.ontimeout = function () {
          i(new Error("Timeout " + r + "ms " + t));
        }, s.send(e);
      });
    }, t.post = function (t, e, n, r) {
      return void 0 === n && (n = !1), void 0 === r && (r = 0), this.absCall(t, JSON.stringify(e), n, r);
    }, t.fetch = function (t, e, n) {
      return void 0 === e && (e = !1), void 0 === n && (n = 0), this.absCall(t, null, e, n);
    }, t;
  }();

  e.Json = r;
}, function (t, e, n) {
  "use strict";

  var _r6,
      o = this && this.__extends || (_r6 = function r(t, e) {
    return (_r6 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r6(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = n(42),
      s = n(14),
      u = n(145),
      c = n(18),
      a = function (t) {
    function e(e) {
      var n = t.call(this) || this;
      return n.isServiceSpecific_ = !1, n.supportOOB_ = !0, n.useNonStandardStacks_ = !1, n.purposeOneTreatment_ = !1, n.publisherCountryCode_ = "AA", n.version_ = 2, n.consentScreen_ = 0, n.policyVersion_ = 2, n.consentLanguage_ = "EN", n.cmpId_ = 0, n.cmpVersion_ = 0, n.vendorListVersion_ = 0, n.specialFeatureOptins = new c.Vector(), n.purposeConsents = new c.Vector(), n.purposeLegitimateInterests = new c.Vector(), n.publisherConsents = new c.Vector(), n.publisherLegitimateInterests = new c.Vector(), n.publisherCustomConsents = new c.Vector(), n.publisherCustomLegitimateInterests = new c.Vector(), n.vendorConsents = new c.Vector(), n.vendorLegitimateInterests = new c.Vector(), n.vendorsDisclosed = new c.Vector(), n.vendorsAllowed = new c.Vector(), n.publisherRestrictions = new c.PurposeRestrictionVector(), e && (n.gvl = e), n.created = new Date(), n.updated(), n;
    }

    return o(e, t), Object.defineProperty(e.prototype, "gvl", {
      get: function get() {
        return this.gvl_;
      },
      set: function set(t) {
        u.GVL.isInstanceOf(t) || (t = new u.GVL(t)), this.gvl_ = t, this.publisherRestrictions.gvl = t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "cmpId", {
      get: function get() {
        return this.cmpId_;
      },
      set: function set(t) {
        if (!(Number.isInteger(+t) && t > 1)) throw new s.TCModelError("cmpId", t);
        this.cmpId_ = +t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "cmpVersion", {
      get: function get() {
        return this.cmpVersion_;
      },
      set: function set(t) {
        if (!(Number.isInteger(+t) && t > -1)) throw new s.TCModelError("cmpVersion", t);
        this.cmpVersion_ = +t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "consentScreen", {
      get: function get() {
        return this.consentScreen_;
      },
      set: function set(t) {
        if (!(Number.isInteger(+t) && t > -1)) throw new s.TCModelError("consentScreen", t);
        this.consentScreen_ = +t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "consentLanguage", {
      get: function get() {
        return this.consentLanguage_;
      },
      set: function set(t) {
        this.consentLanguage_ = t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "publisherCountryCode", {
      get: function get() {
        return this.publisherCountryCode_;
      },
      set: function set(t) {
        if (!/^([A-z]){2}$/.test(t)) throw new s.TCModelError("publisherCountryCode", t);
        this.publisherCountryCode_ = t.toUpperCase();
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "vendorListVersion", {
      get: function get() {
        return this.gvl ? this.gvl.vendorListVersion : this.vendorListVersion_;
      },
      set: function set(t) {
        if (!(Number.isInteger(+t) && t > 0)) throw new s.TCModelError("vendorListVersion", t);
        this.gvl ? this.gvl.vendorListVersion !== +t && (this.gvl = new u.GVL(+t)) : this.vendorListVersion_ = +t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "policyVersion", {
      get: function get() {
        return this.gvl ? this.gvl.tcfPolicyVersion : this.policyVersion_;
      },
      set: function set(t) {
        this.policyVersion_ = parseInt(t, 10);
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "version", {
      get: function get() {
        return this.version_;
      },
      set: function set(t) {
        this.version_ = parseInt(t, 10);
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "isServiceSpecific", {
      get: function get() {
        return this.isServiceSpecific_;
      },
      set: function set(t) {
        this.isServiceSpecific_ = t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "useNonStandardStacks", {
      get: function get() {
        return this.useNonStandardStacks_;
      },
      set: function set(t) {
        this.useNonStandardStacks_ = t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "supportOOB", {
      get: function get() {
        return this.supportOOB_;
      },
      set: function set(t) {
        this.supportOOB_ = t;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "purposeOneTreatment", {
      get: function get() {
        return this.purposeOneTreatment_;
      },
      set: function set(t) {
        this.purposeOneTreatment_ = t;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.setAllVendorConsents = function () {
      this.vendorConsents.setAll(this.gvl.vendors);
    }, e.prototype.unsetAllVendorConsents = function () {
      this.vendorConsents.empty();
    }, e.prototype.setAllVendorsDisclosed = function () {
      this.vendorsDisclosed.setAll(this.gvl.vendors);
    }, e.prototype.unsetAllVendorsDisclosed = function () {
      this.vendorsDisclosed.empty();
    }, e.prototype.setAllVendorsAllowed = function () {
      this.vendorsAllowed.setAll(this.gvl.vendors);
    }, e.prototype.unsetAllVendorsAllowed = function () {
      this.vendorsAllowed.empty();
    }, e.prototype.setAllVendorLegitimateInterests = function () {
      this.vendorLegitimateInterests.setAll(this.gvl.vendors);
    }, e.prototype.unsetAllVendorLegitimateInterests = function () {
      this.vendorLegitimateInterests.empty();
    }, e.prototype.setAllPurposeConsents = function () {
      this.purposeConsents.setAll(this.gvl.purposes);
    }, e.prototype.unsetAllPurposeConsents = function () {
      this.purposeConsents.empty();
    }, e.prototype.setAllPurposeLegitimateInterests = function () {
      this.purposeLegitimateInterests.setAll(this.gvl.purposes);
    }, e.prototype.unsetAllPurposeLegitimateInterests = function () {
      this.purposeLegitimateInterests.empty();
    }, e.prototype.setAllSpecialFeatureOptins = function () {
      this.specialFeatureOptins.setAll(this.gvl.specialFeatures);
    }, e.prototype.unsetAllSpecialFeatureOptins = function () {
      this.specialFeatureOptins.empty();
    }, e.prototype.setAll = function () {
      this.setAllVendorConsents(), this.setAllPurposeLegitimateInterests(), this.setAllSpecialFeatureOptins(), this.setAllPurposeConsents(), this.setAllVendorLegitimateInterests();
    }, e.prototype.unsetAll = function () {
      this.unsetAllVendorConsents(), this.unsetAllPurposeLegitimateInterests(), this.unsetAllSpecialFeatureOptins(), this.unsetAllPurposeConsents(), this.unsetAllVendorLegitimateInterests();
    }, Object.defineProperty(e.prototype, "numCustomPurposes", {
      get: function get() {
        var t = 0;
        return this.customPurposes && Object.keys(this.customPurposes).forEach(function (e) {
          t = Math.max(t, parseInt(e, 10));
        }), t;
      },
      set: function set(t) {
        if (!this.customPurposes) {
          this.customPurposes = {};

          for (var e = 0; e < t; e++) {
            var n = (e + 1).toString();
            this.customPurposes[n] = {
              id: e + 1,
              name: "publisher purpose " + n,
              description: "publisher purpose description " + n,
              descriptionLegal: "publisher purpose legal description " + n
            };
          }
        }
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.updated = function () {
      this.lastUpdated = new Date();
    }, e.consentLanguages = u.GVL.consentLanguages, e;
  }(i.Cloneable);

  e.TCModel = a;
}, function (t, e, n) {
  "use strict";

  function r(t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), r(n(324)), r(n(54)), r(n(70)), r(n(332));
}, function (t, e, n) {
  t.exports = function () {
    var t = window,
        e = [];
    var n;

    for (; t;) {
      try {
        if (t.frames.__tcfapiLocator) {
          n = t;
          break;
        }
      } catch (t) {}

      if (t === window.top) break;
      try{
        t = t.parent;
      }catch(e){
        
      }
    }

    n || (function e() {
      var n = t.document,
          r = !!t.frames.__tcfapiLocator;
      if (!r) if (n.body) {
        var _t2 = n.createElement("iframe");

        _t2.style.cssText = "display:none", _t2.name = "__tcfapiLocator", n.body.appendChild(_t2);
      } else setTimeout(e, 5);
      return !r;
    }(), t.__tcfapi = function () {
      var n;

      for (var _len = arguments.length, t = new Array(_len), _key = 0; _key < _len; _key++) {
        t[_key] = arguments[_key];
      }

      if (!t.length) return e;
      if ("setGdprApplies" === t[0]) t.length > 3 && 2 === parseInt(t[1], 10) && "boolean" == typeof t[3] && (n = t[3], "function" == typeof t[2] && t[2]("set", !0));else if ("ping" === t[0]) {
        var _e = {
          gdprApplies: n,
          cmpLoaded: !1,
          cmpStatus: "stubCMP",
          apiVersion: 2
        };
        "function" == typeof t[2] && t[2](_e, !0);
      } else e.push(t);
    }, t.addEventListener("message", function (t) {
      var e = "string" == typeof t.data;
      var n = {};

      try {
        n = e ? JSON.parse(t.data) : t.data;
      } catch (t) {}

      var r = n.__tcfapiCall;
      r && window.__tcfapi(r.command, r.version, function (n, o) {
        var i = {
          __tcfapiReturn: {
            returnValue: n,
            success: o,
            callId: r.callId
          }
        };
        e && (i = JSON.stringify(i)), t.source.postMessage(i, "*");
      }, r.parameter);
    }, !1));
  };
}, function (t, e, n) {
  "use strict";

  n.r(e);
  n(151);
  var r = n(148),
      o = n(10),
      i = n(149),
      s = "sk";
  "string" == typeof window.__tcf_lang && 2 == window.__tcf_lang.length && (s = window.__tcf_lang);
  var u = !1;
  "number" == typeof window.__tcf_nostub && window.__tcf_nostub && (u = !0), u || (console.log("%c __tcfapi %c stub %c core ", "background:gray;color:white", "background:#4e0060;color:white", "background:#fffa0c;color:black"), i()), o.GVL.baseUrl = "https://etarget.mgr.consensu.org/gdpr/tcfv2/", o.GVL.latestFilename = "vendor-list.json.php", o.GVL.versionedFilename = "vendor-list.json.php?v=[VERSION]", o.GVL.languageFilename = "purposes.json.php?l=[LANG]";
  var c,
      a = new o.GVL(),
      f = {},
      l = new o.TCModel(a),
      p = "";

  function h(t) {
    switch (t) {
      case "vendor":
        t = "vendorConsents";
        break;

      case "vendorInterests":
        t = "vendorLegitimateInterests";
        break;

      case "purpose":
        t = "purposeConsents";
        break;

      case "purposeInterests":
        t = "purposeLegitimateInterests";
        break;

      case "specialFeatures":
        t = "specialFeatureOptins";
    }

    return t;
  }

  function d(t) {
    return t.charAt(0).toUpperCase() + t.slice(1);
  }

  function v(t) {
    var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !1;
    var n = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "";
    var r = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : !1;
    var i = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : !1;
    var s = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : !1;
    var u = arguments.length > 6 && arguments[6] !== undefined ? arguments[6] : !1;
    if ("string" == typeof t && t.length > 10) p = t, e.updated(), g(p, e, !0).then(function (t) {
      (e = t).isServiceSpecific = !0, e.isServiceSpecific_ = !0, y(p, r, i, s);
    });else {
      if ("object" != _typeof(e) || null == e) return !1;
      e.isServiceSpecific = !0, e.isServiceSpecific_ = !0, e.updated(), s ? p = function (t) {
        var e = {
          segments: [o.Segment.CORE, o.Segment.PUBLISHER_TC]
        };
        var n = "";

        try {
          n = o.TCString.encode(t, e);
        } catch (t) {
          console.log(t);
        }

        return n;
      }(e) : u && 0 == t && (p = null, r = !0), y(p, r, i, s);
    }
  }

  function y(t, e, n) {
    var r = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : !1;
    c.update(t, e), r && function (t, e, n) {
      var r = new Date();
      r.setDate(r.getDate() + n);
      var o = window.location.hostname;
      o = (o = o.split("."))[o.length - 2] + "." + o[o.length - 1], document.cookie = encodeURIComponent(t) + "=" + encodeURIComponent(e) + (n ? "; secure; samesite=none; expires=" + r.toUTCString() : "") + "; domain=" + o + "; path=/";
    }("euconsent-v2", t, 365), "function" == typeof n && n(["updated", t]);
  }

  function g(t) {
    var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !1;
    var n = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : !1;
    return 1 == n ? new Promise(function (n, r) {
      m(t, e);
      var o = 0,
          i = setInterval(function () {
        o > 10 && (clearInterval(i), r("too much recursions")), e.gvl.isReady && (clearInterval(i), i = !1, n(e)), o++;
      }, 200);
    }) : m(t, e);
  }

  function m(t) {
    var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !1;
    return e ? o.TCString.decode(t, e) : o.TCString.decode(t);
  }

  a.readyPromise.then(function () {
    Object.assign(f, a), a.changeLanguage(s).then(function () {
      a.en = f, l.cmpId = 50, l.cmpVersion = 2, l.consentScreen = 1, l.isServiceSpecific = !0, l.isServiceSpecific_ = !0, l.consentLanguage_ = a.language, l.publisherCountryCode_ = a.language, l.supportOOB_ = !1, function (t) {
        try {
          if ("function" == typeof __tcfapi) {
            var e = __tcfapi().length;

            console.log("%c __tcfapi %c queue %c " + e + " ", "background:gray;color:white", "background:#4e0060;color:white", "background:#fffa0c;color:black");
          }
        } catch (t) {
          console.log(t);
        }

        c = new r.CmpApi(50, 2, !0, {
          decode: function decode(e) {
            var n = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "";
            e(g(n.length > 10 ? n : o.TCString.encode(t), !1, !1));
          },
          encode: function encode(e) {
            e(o.TCString.encode(t));
          },
          show: function show(e) {
            var n = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !1;
            v(!1, t, "", n), e("shown");
          },
          ready: function ready(e) {
            e(t.gvl.isReady, t.gvl);
          },
          allow: function allow(e, n) {
            var r = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : !1;
            "all" == n && function (t) {
              var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !1;
              var n = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : !1;

              try {
                if (void 0 !== e && e) {
                  if ("object" == _typeof(e)) for (var r in e) {
                    var o = "setAll" + d(h(e[r]));
                    "function" == typeof t[o] && t[o]();
                  } else {
                    o = "setAll" + d(h(e));
                    "function" == typeof t[o] && t[o]();
                  }
                } else t.setAll();
              } catch (t) {
                console.log(t);
              }
            }(t, r), e("allowed");
          },
          update: function update(e) {
            var n = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
            var r = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "";
            var o = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : !1;
            var i = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : !1;
            v(n, t, r, o, e, i);
          },
          empty: function empty(e) {
            var n = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "all";
            var r = !1;

            switch (n) {
              case "all":
                t.unsetAll();
                break;

              case "vendor":
                r = t.vendorConsents;
                break;

              default:
                n && "object" == _typeof(t[n]) && (r = t[n]);
            }

            "object" == _typeof(r) && r.empty(), e("empty");
          },
          get: function get(e, n) {
            switch (n) {
              case "gvl":
                e(a);
                break;

              case "model":
                e(t);
            }
          },
          unset: function unset(t, e, n) {
            __tcfapi("set", 2, t, e, n, !0);
          },
          set: function set(e, n, r) {
            var o = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : !1;
            var i = !1,
                s = "";

            if (o && (s = "un"), n = h(n), "object" == _typeof(t[n]) && (i = t[n]), "object" == _typeof(i)) {
              if (void 0 === r) return void e("params not " + s + "set, because params is undefined");
              if ("object" == _typeof(r)) for (var u in r) {
                r[u] && (o ? i.unset(r[u]) : i.set(r[u]));
              } else o ? i.unset(r) : i.set(r);
            } else e("params not " + s + "set, because object is undefined");

            e(s + "set " + n);
          }
        }), v(function (t) {
          for (var e = document.cookie.split(/[ ;]/), n = 0; n < e.length; n++) {
            var r = e[n].split("=");
            if (r[0] == t) return r[1].split(";")[0];
          }

          return !1;
        }("euconsent-v2"), t, "", !1, !1, !1, !0);
      }(l);
    });
  });
}, function (t, e, n) {
  n(152);
}, function (t, e, n) {
  "use strict";

  n(153), n(296), n(298), n(301), n(303), n(305), n(307), n(309), n(311), n(313), n(315), n(317), n(319), n(323);
}, function (t, e, n) {
  n(154), n(157), n(158), n(159), n(160), n(161), n(162), n(163), n(164), n(165), n(166), n(167), n(168), n(169), n(170), n(171), n(172), n(173), n(174), n(175), n(176), n(177), n(178), n(179), n(180), n(181), n(182), n(183), n(184), n(185), n(186), n(187), n(188), n(189), n(190), n(191), n(192), n(193), n(194), n(195), n(196), n(197), n(198), n(200), n(201), n(202), n(203), n(204), n(205), n(206), n(207), n(208), n(209), n(210), n(211), n(212), n(213), n(214), n(215), n(216), n(217), n(218), n(219), n(220), n(221), n(222), n(223), n(224), n(225), n(226), n(227), n(228), n(229), n(230), n(231), n(232), n(233), n(235), n(236), n(238), n(239), n(240), n(241), n(242), n(243), n(244), n(246), n(247), n(248), n(249), n(250), n(251), n(252), n(253), n(254), n(255), n(256), n(257), n(258), n(92), n(259), n(122), n(260), n(123), n(261), n(262), n(263), n(264), n(124), n(267), n(268), n(269), n(270), n(271), n(272), n(273), n(274), n(275), n(276), n(277), n(278), n(279), n(280), n(281), n(282), n(283), n(284), n(285), n(286), n(287), n(288), n(289), n(290), n(291), n(292), n(293), n(294), n(295), t.exports = n(7);
}, function (t, e, n) {
  "use strict";

  var r = n(1),
      o = n(15),
      i = n(8),
      s = n(0),
      u = n(12),
      c = n(30).KEY,
      a = n(2),
      f = n(57),
      l = n(44),
      p = n(33),
      h = n(5),
      d = n(73),
      v = n(103),
      y = n(156),
      g = n(60),
      m = n(3),
      b = n(4),
      _ = n(11),
      w = n(17),
      E = n(29),
      S = n(32),
      O = n(37),
      A = n(106),
      P = n(23),
      I = n(59),
      C = n(9),
      x = n(35),
      L = P.f,
      T = C.f,
      M = A.f,
      _F = r.Symbol,
      R = r.JSON,
      V = R && R.stringify,
      j = h("_hidden"),
      N = h("toPrimitive"),
      B = {}.propertyIsEnumerable,
      D = f("symbol-registry"),
      k = f("symbols"),
      U = f("op-symbols"),
      G = Object.prototype,
      Y = "function" == typeof _F && !!I.f,
      W = r.QObject,
      H = !W || !W.prototype || !W.prototype.findChild,
      z = i && a(function () {
    return 7 != O(T({}, "a", {
      get: function get() {
        return T(this, "a", {
          value: 7
        }).a;
      }
    })).a;
  }) ? function (t, e, n) {
    var r = L(G, e);
    r && delete G[e], T(t, e, n), r && t !== G && T(G, e, r);
  } : T,
      q = function q(t) {
    var e = k[t] = O(_F.prototype);
    return e._k = t, e;
  },
      J = Y && "symbol" == _typeof(_F.iterator) ? function (t) {
    return "symbol" == _typeof(t);
  } : function (t) {
    return t instanceof _F;
  },
      Q = function Q(t, e, n) {
    return t === G && Q(U, e, n), m(t), e = E(e, !0), m(n), o(k, e) ? (n.enumerable ? (o(t, j) && t[j][e] && (t[j][e] = !1), n = O(n, {
      enumerable: S(0, !1)
    })) : (o(t, j) || T(t, j, S(1, {})), t[j][e] = !0), z(t, e, n)) : T(t, e, n);
  },
      K = function K(t, e) {
    m(t);

    for (var n, r = y(e = w(e)), o = 0, i = r.length; i > o;) {
      Q(t, n = r[o++], e[n]);
    }

    return t;
  },
      X = function X(t) {
    var e = B.call(this, t = E(t, !0));
    return !(this === G && o(k, t) && !o(U, t)) && (!(e || !o(this, t) || !o(k, t) || o(this, j) && this[j][t]) || e);
  },
      $ = function $(t, e) {
    if (t = w(t), e = E(e, !0), t !== G || !o(k, e) || o(U, e)) {
      var n = L(t, e);
      return !n || !o(k, e) || o(t, j) && t[j][e] || (n.enumerable = !0), n;
    }
  },
      Z = function Z(t) {
    for (var e, n = M(w(t)), r = [], i = 0; n.length > i;) {
      o(k, e = n[i++]) || e == j || e == c || r.push(e);
    }

    return r;
  },
      tt = function tt(t) {
    for (var e, n = t === G, r = M(n ? U : w(t)), i = [], s = 0; r.length > s;) {
      !o(k, e = r[s++]) || n && !o(G, e) || i.push(k[e]);
    }

    return i;
  };

  Y || (u((_F = function F() {
    if (this instanceof _F) throw TypeError("Symbol is not a constructor!");

    var t = p(arguments.length > 0 ? arguments[0] : void 0),
        e = function e(n) {
      this === G && e.call(U, n), o(this, j) && o(this[j], t) && (this[j][t] = !1), z(this, t, S(1, n));
    };

    return i && H && z(G, t, {
      configurable: !0,
      set: e
    }), q(t);
  }).prototype, "toString", function () {
    return this._k;
  }), P.f = $, C.f = Q, n(38).f = A.f = Z, n(51).f = X, I.f = tt, i && !n(34) && u(G, "propertyIsEnumerable", X, !0), d.f = function (t) {
    return q(h(t));
  }), s(s.G + s.W + s.F * !Y, {
    Symbol: _F
  });

  for (var et = "hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables".split(","), nt = 0; et.length > nt;) {
    h(et[nt++]);
  }

  for (var rt = x(h.store), ot = 0; rt.length > ot;) {
    v(rt[ot++]);
  }

  s(s.S + s.F * !Y, "Symbol", {
    for: function _for(t) {
      return o(D, t += "") ? D[t] : D[t] = _F(t);
    },
    keyFor: function keyFor(t) {
      if (!J(t)) throw TypeError(t + " is not a symbol!");

      for (var e in D) {
        if (D[e] === t) return e;
      }
    },
    useSetter: function useSetter() {
      H = !0;
    },
    useSimple: function useSimple() {
      H = !1;
    }
  }), s(s.S + s.F * !Y, "Object", {
    create: function create(t, e) {
      return void 0 === e ? O(t) : K(O(t), e);
    },
    defineProperty: Q,
    defineProperties: K,
    getOwnPropertyDescriptor: $,
    getOwnPropertyNames: Z,
    getOwnPropertySymbols: tt
  });
  var it = a(function () {
    I.f(1);
  });
  s(s.S + s.F * it, "Object", {
    getOwnPropertySymbols: function getOwnPropertySymbols(t) {
      return I.f(_(t));
    }
  }), R && s(s.S + s.F * (!Y || a(function () {
    var t = _F();

    return "[null]" != V([t]) || "{}" != V({
      a: t
    }) || "{}" != V(Object(t));
  })), "JSON", {
    stringify: function stringify(t) {
      for (var e, n, r = [t], o = 1; arguments.length > o;) {
        r.push(arguments[o++]);
      }

      if (n = e = r[1], (b(e) || void 0 !== t) && !J(t)) return g(e) || (e = function e(t, _e2) {
        if ("function" == typeof n && (_e2 = n.call(this, t, _e2)), !J(_e2)) return _e2;
      }), r[1] = e, V.apply(R, r);
    }
  }), _F.prototype[N] || n(16)(_F.prototype, N, _F.prototype.valueOf), l(_F, "Symbol"), l(Math, "Math", !0), l(r.JSON, "JSON", !0);
}, function (t, e, n) {
  t.exports = n(57)("native-function-to-string", Function.toString);
}, function (t, e, n) {
  var r = n(35),
      o = n(59),
      i = n(51);

  t.exports = function (t) {
    var e = r(t),
        n = o.f;
    if (n) for (var s, u = n(t), c = i.f, a = 0; u.length > a;) {
      c.call(t, s = u[a++]) && e.push(s);
    }
    return e;
  };
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Object", {
    create: n(37)
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S + r.F * !n(8), "Object", {
    defineProperty: n(9).f
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S + r.F * !n(8), "Object", {
    defineProperties: n(105)
  });
}, function (t, e, n) {
  var r = n(17),
      o = n(23).f;
  n(24)("getOwnPropertyDescriptor", function () {
    return function (t, e) {
      return o(r(t), e);
    };
  });
}, function (t, e, n) {
  var r = n(11),
      o = n(39);
  n(24)("getPrototypeOf", function () {
    return function (t) {
      return o(r(t));
    };
  });
}, function (t, e, n) {
  var r = n(11),
      o = n(35);
  n(24)("keys", function () {
    return function (t) {
      return o(r(t));
    };
  });
}, function (t, e, n) {
  n(24)("getOwnPropertyNames", function () {
    return n(106).f;
  });
}, function (t, e, n) {
  var r = n(4),
      o = n(30).onFreeze;
  n(24)("freeze", function (t) {
    return function (e) {
      return t && r(e) ? t(o(e)) : e;
    };
  });
}, function (t, e, n) {
  var r = n(4),
      o = n(30).onFreeze;
  n(24)("seal", function (t) {
    return function (e) {
      return t && r(e) ? t(o(e)) : e;
    };
  });
}, function (t, e, n) {
  var r = n(4),
      o = n(30).onFreeze;
  n(24)("preventExtensions", function (t) {
    return function (e) {
      return t && r(e) ? t(o(e)) : e;
    };
  });
}, function (t, e, n) {
  var r = n(4);
  n(24)("isFrozen", function (t) {
    return function (e) {
      return !r(e) || !!t && t(e);
    };
  });
}, function (t, e, n) {
  var r = n(4);
  n(24)("isSealed", function (t) {
    return function (e) {
      return !r(e) || !!t && t(e);
    };
  });
}, function (t, e, n) {
  var r = n(4);
  n(24)("isExtensible", function (t) {
    return function (e) {
      return !!r(e) && (!t || t(e));
    };
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S + r.F, "Object", {
    assign: n(107)
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Object", {
    is: n(108)
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Object", {
    setPrototypeOf: n(77).set
  });
}, function (t, e, n) {
  "use strict";

  var r = n(52),
      o = {};
  o[n(5)("toStringTag")] = "z", o + "" != "[object z]" && n(12)(Object.prototype, "toString", function () {
    return "[object " + r(this) + "]";
  }, !0);
}, function (t, e, n) {
  var r = n(0);
  r(r.P, "Function", {
    bind: n(109)
  });
}, function (t, e, n) {
  var r = n(9).f,
      o = Function.prototype,
      i = /^\s*function ([^ (]*)/;
  "name" in o || n(8) && r(o, "name", {
    configurable: !0,
    get: function get() {
      try {
        return ("" + this).match(i)[1];
      } catch (t) {
        return "";
      }
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(4),
      o = n(39),
      i = n(5)("hasInstance"),
      s = Function.prototype;
  i in s || n(9).f(s, i, {
    value: function value(t) {
      if ("function" != typeof this || !r(t)) return !1;
      if (!r(this.prototype)) return t instanceof this;

      for (; t = o(t);) {
        if (this.prototype === t) return !0;
      }

      return !1;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(111);
  r(r.G + r.F * (parseInt != o), {
    parseInt: o
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(112);
  r(r.G + r.F * (parseFloat != o), {
    parseFloat: o
  });
}, function (t, e, n) {
  "use strict";

  var r = n(1),
      o = n(15),
      i = n(26),
      s = n(79),
      u = n(29),
      c = n(2),
      a = n(38).f,
      f = n(23).f,
      l = n(9).f,
      p = n(45).trim,
      _h = r.Number,
      d = _h,
      v = _h.prototype,
      y = "Number" == i(n(37)(v)),
      g = ("trim" in String.prototype),
      m = function m(t) {
    var e = u(t, !1);

    if ("string" == typeof e && e.length > 2) {
      var n,
          r,
          o,
          i = (e = g ? e.trim() : p(e, 3)).charCodeAt(0);

      if (43 === i || 45 === i) {
        if (88 === (n = e.charCodeAt(2)) || 120 === n) return NaN;
      } else if (48 === i) {
        switch (e.charCodeAt(1)) {
          case 66:
          case 98:
            r = 2, o = 49;
            break;

          case 79:
          case 111:
            r = 8, o = 55;
            break;

          default:
            return +e;
        }

        for (var s, c = e.slice(2), a = 0, f = c.length; a < f; a++) {
          if ((s = c.charCodeAt(a)) < 48 || s > o) return NaN;
        }

        return parseInt(c, r);
      }
    }

    return +e;
  };

  if (!_h(" 0o1") || !_h("0b1") || _h("+0x1")) {
    _h = function h(t) {
      var e = arguments.length < 1 ? 0 : t,
          n = this;
      return n instanceof _h && (y ? c(function () {
        v.valueOf.call(n);
      }) : "Number" != i(n)) ? s(new d(m(e)), n, _h) : m(e);
    };

    for (var b, _ = n(8) ? a(d) : "MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger".split(","), w = 0; _.length > w; w++) {
      o(d, b = _[w]) && !o(_h, b) && l(_h, b, f(d, b));
    }

    _h.prototype = v, v.constructor = _h, n(12)(r, "Number", _h);
  }
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(22),
      i = n(113),
      s = n(80),
      u = 1..toFixed,
      c = Math.floor,
      a = [0, 0, 0, 0, 0, 0],
      f = "Number.toFixed: incorrect invocation!",
      l = function l(t, e) {
    for (var n = -1, r = e; ++n < 6;) {
      r += t * a[n], a[n] = r % 1e7, r = c(r / 1e7);
    }
  },
      p = function p(t) {
    for (var e = 6, n = 0; --e >= 0;) {
      n += a[e], a[e] = c(n / t), n = n % t * 1e7;
    }
  },
      h = function h() {
    for (var t = 6, e = ""; --t >= 0;) {
      if ("" !== e || 0 === t || 0 !== a[t]) {
        var n = String(a[t]);
        e = "" === e ? n : e + s.call("0", 7 - n.length) + n;
      }
    }

    return e;
  },
      d = function d(t, e, n) {
    return 0 === e ? n : e % 2 == 1 ? d(t, e - 1, n * t) : d(t * t, e / 2, n);
  };

  r(r.P + r.F * (!!u && ("0.000" !== 8e-5.toFixed(3) || "1" !== .9.toFixed(0) || "1.25" !== 1.255.toFixed(2) || "1000000000000000128" !== 0xde0b6b3a7640080.toFixed(0)) || !n(2)(function () {
    u.call({});
  })), "Number", {
    toFixed: function toFixed(t) {
      var e,
          n,
          r,
          u,
          c = i(this, f),
          a = o(t),
          v = "",
          y = "0";
      if (a < 0 || a > 20) throw RangeError(f);
      if (c != c) return "NaN";
      if (c <= -1e21 || c >= 1e21) return String(c);
      if (c < 0 && (v = "-", c = -c), c > 1e-21) if (n = (e = function (t) {
        for (var e = 0, n = t; n >= 4096;) {
          e += 12, n /= 4096;
        }

        for (; n >= 2;) {
          e += 1, n /= 2;
        }

        return e;
      }(c * d(2, 69, 1)) - 69) < 0 ? c * d(2, -e, 1) : c / d(2, e, 1), n *= 4503599627370496, (e = 52 - e) > 0) {
        for (l(0, n), r = a; r >= 7;) {
          l(1e7, 0), r -= 7;
        }

        for (l(d(10, r, 1), 0), r = e - 1; r >= 23;) {
          p(1 << 23), r -= 23;
        }

        p(1 << r), l(1, 1), p(2), y = h();
      } else l(0, n), l(1 << -e, 0), y = h() + s.call("0", a);
      return y = a > 0 ? v + ((u = y.length) <= a ? "0." + s.call("0", a - u) + y : y.slice(0, u - a) + "." + y.slice(u - a)) : v + y;
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(2),
      i = n(113),
      s = 1..toPrecision;
  r(r.P + r.F * (o(function () {
    return "1" !== s.call(1, void 0);
  }) || !o(function () {
    s.call({});
  })), "Number", {
    toPrecision: function toPrecision(t) {
      var e = i(this, "Number#toPrecision: incorrect invocation!");
      return void 0 === t ? s.call(e) : s.call(e, t);
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Number", {
    EPSILON: Math.pow(2, -52)
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(1).isFinite;
  r(r.S, "Number", {
    isFinite: function isFinite(t) {
      return "number" == typeof t && o(t);
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Number", {
    isInteger: n(114)
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Number", {
    isNaN: function isNaN(t) {
      return t != t;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(114),
      i = Math.abs;
  r(r.S, "Number", {
    isSafeInteger: function isSafeInteger(t) {
      return o(t) && i(t) <= 9007199254740991;
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Number", {
    MAX_SAFE_INTEGER: 9007199254740991
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Number", {
    MIN_SAFE_INTEGER: -9007199254740991
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(112);
  r(r.S + r.F * (Number.parseFloat != o), "Number", {
    parseFloat: o
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(111);
  r(r.S + r.F * (Number.parseInt != o), "Number", {
    parseInt: o
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(115),
      i = Math.sqrt,
      s = Math.acosh;
  r(r.S + r.F * !(s && 710 == Math.floor(s(Number.MAX_VALUE)) && s(1 / 0) == 1 / 0), "Math", {
    acosh: function acosh(t) {
      return (t = +t) < 1 ? NaN : t > 94906265.62425156 ? Math.log(t) + Math.LN2 : o(t - 1 + i(t - 1) * i(t + 1));
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = Math.asinh;
  r(r.S + r.F * !(o && 1 / o(0) > 0), "Math", {
    asinh: function t(e) {
      return isFinite(e = +e) && 0 != e ? e < 0 ? -t(-e) : Math.log(e + Math.sqrt(e * e + 1)) : e;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = Math.atanh;
  r(r.S + r.F * !(o && 1 / o(-0) < 0), "Math", {
    atanh: function atanh(t) {
      return 0 == (t = +t) ? t : Math.log((1 + t) / (1 - t)) / 2;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(81);
  r(r.S, "Math", {
    cbrt: function cbrt(t) {
      return o(t = +t) * Math.pow(Math.abs(t), 1 / 3);
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Math", {
    clz32: function clz32(t) {
      return (t >>>= 0) ? 31 - Math.floor(Math.log(t + .5) * Math.LOG2E) : 32;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = Math.exp;
  r(r.S, "Math", {
    cosh: function cosh(t) {
      return (o(t = +t) + o(-t)) / 2;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(82);
  r(r.S + r.F * (o != Math.expm1), "Math", {
    expm1: o
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Math", {
    fround: n(199)
  });
}, function (t, e, n) {
  var r = n(81),
      o = Math.pow,
      i = o(2, -52),
      s = o(2, -23),
      u = o(2, 127) * (2 - s),
      c = o(2, -126);

  t.exports = Math.fround || function (t) {
    var e,
        n,
        o = Math.abs(t),
        a = r(t);
    return o < c ? a * (o / c / s + 1 / i - 1 / i) * c * s : (n = (e = (1 + s / i) * o) - (e - o)) > u || n != n ? a * (1 / 0) : a * n;
  };
}, function (t, e, n) {
  var r = n(0),
      o = Math.abs;
  r(r.S, "Math", {
    hypot: function hypot(t, e) {
      for (var n, r, i = 0, s = 0, u = arguments.length, c = 0; s < u;) {
        c < (n = o(arguments[s++])) ? (i = i * (r = c / n) * r + 1, c = n) : i += n > 0 ? (r = n / c) * r : n;
      }

      return c === 1 / 0 ? 1 / 0 : c * Math.sqrt(i);
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = Math.imul;
  r(r.S + r.F * n(2)(function () {
    return -5 != o(4294967295, 5) || 2 != o.length;
  }), "Math", {
    imul: function imul(t, e) {
      var n = +t,
          r = +e,
          o = 65535 & n,
          i = 65535 & r;
      return 0 | o * i + ((65535 & n >>> 16) * i + o * (65535 & r >>> 16) << 16 >>> 0);
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Math", {
    log10: function log10(t) {
      return Math.log(t) * Math.LOG10E;
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Math", {
    log1p: n(115)
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Math", {
    log2: function log2(t) {
      return Math.log(t) / Math.LN2;
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Math", {
    sign: n(81)
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(82),
      i = Math.exp;
  r(r.S + r.F * n(2)(function () {
    return -2e-17 != !Math.sinh(-2e-17);
  }), "Math", {
    sinh: function sinh(t) {
      return Math.abs(t = +t) < 1 ? (o(t) - o(-t)) / 2 : (i(t - 1) - i(-t - 1)) * (Math.E / 2);
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(82),
      i = Math.exp;
  r(r.S, "Math", {
    tanh: function tanh(t) {
      var e = o(t = +t),
          n = o(-t);
      return e == 1 / 0 ? 1 : n == 1 / 0 ? -1 : (e - n) / (i(t) + i(-t));
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Math", {
    trunc: function trunc(t) {
      return (t > 0 ? Math.floor : Math.ceil)(t);
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(36),
      i = String.fromCharCode,
      s = String.fromCodePoint;
  r(r.S + r.F * (!!s && 1 != s.length), "String", {
    fromCodePoint: function fromCodePoint(t) {
      for (var e, n = [], r = arguments.length, s = 0; r > s;) {
        if (e = +arguments[s++], o(e, 1114111) !== e) throw RangeError(e + " is not a valid code point");
        n.push(e < 65536 ? i(e) : i(55296 + ((e -= 65536) >> 10), e % 1024 + 56320));
      }

      return n.join("");
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(17),
      i = n(6);
  r(r.S, "String", {
    raw: function raw(t) {
      for (var e = o(t.raw), n = i(e.length), r = arguments.length, s = [], u = 0; n > u;) {
        s.push(String(e[u++])), u < r && s.push(String(arguments[u]));
      }

      return s.join("");
    }
  });
}, function (t, e, n) {
  "use strict";

  n(45)("trim", function (t) {
    return function () {
      return t(this, 3);
    };
  });
}, function (t, e, n) {
  "use strict";

  var r = n(83)(!0);
  n(84)(String, "String", function (t) {
    this._t = String(t), this._i = 0;
  }, function () {
    var t,
        e = this._t,
        n = this._i;
    return n >= e.length ? {
      value: void 0,
      done: !0
    } : (t = r(e, n), this._i += t.length, {
      value: t,
      done: !1
    });
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(83)(!1);
  r(r.P, "String", {
    codePointAt: function codePointAt(t) {
      return o(this, t);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(6),
      i = n(85),
      s = "".endsWith;
  r(r.P + r.F * n(87)("endsWith"), "String", {
    endsWith: function endsWith(t) {
      var e = i(this, t, "endsWith"),
          n = arguments.length > 1 ? arguments[1] : void 0,
          r = o(e.length),
          u = void 0 === n ? r : Math.min(o(n), r),
          c = String(t);
      return s ? s.call(e, c, u) : e.slice(u - c.length, u) === c;
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(85);
  r(r.P + r.F * n(87)("includes"), "String", {
    includes: function includes(t) {
      return !!~o(this, t, "includes").indexOf(t, arguments.length > 1 ? arguments[1] : void 0);
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.P, "String", {
    repeat: n(80)
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(6),
      i = n(85),
      s = "".startsWith;
  r(r.P + r.F * n(87)("startsWith"), "String", {
    startsWith: function startsWith(t) {
      var e = i(this, t, "startsWith"),
          n = o(Math.min(arguments.length > 1 ? arguments[1] : void 0, e.length)),
          r = String(t);
      return s ? s.call(e, r, n) : e.slice(n, n + r.length) === r;
    }
  });
}, function (t, e, n) {
  "use strict";

  n(13)("anchor", function (t) {
    return function (e) {
      return t(this, "a", "name", e);
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("big", function (t) {
    return function () {
      return t(this, "big", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("blink", function (t) {
    return function () {
      return t(this, "blink", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("bold", function (t) {
    return function () {
      return t(this, "b", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("fixed", function (t) {
    return function () {
      return t(this, "tt", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("fontcolor", function (t) {
    return function (e) {
      return t(this, "font", "color", e);
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("fontsize", function (t) {
    return function (e) {
      return t(this, "font", "size", e);
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("italics", function (t) {
    return function () {
      return t(this, "i", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("link", function (t) {
    return function (e) {
      return t(this, "a", "href", e);
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("small", function (t) {
    return function () {
      return t(this, "small", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("strike", function (t) {
    return function () {
      return t(this, "strike", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("sub", function (t) {
    return function () {
      return t(this, "sub", "", "");
    };
  });
}, function (t, e, n) {
  "use strict";

  n(13)("sup", function (t) {
    return function () {
      return t(this, "sup", "", "");
    };
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Date", {
    now: function now() {
      return new Date().getTime();
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(11),
      i = n(29);
  r(r.P + r.F * n(2)(function () {
    return null !== new Date(NaN).toJSON() || 1 !== Date.prototype.toJSON.call({
      toISOString: function toISOString() {
        return 1;
      }
    });
  }), "Date", {
    toJSON: function toJSON(t) {
      var e = o(this),
          n = i(e);
      return "number" != typeof n || isFinite(n) ? e.toISOString() : null;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(234);
  r(r.P + r.F * (Date.prototype.toISOString !== o), "Date", {
    toISOString: o
  });
}, function (t, e, n) {
  "use strict";

  var r = n(2),
      o = Date.prototype.getTime,
      i = Date.prototype.toISOString,
      s = function s(t) {
    return t > 9 ? t : "0" + t;
  };

  t.exports = r(function () {
    return "0385-07-25T07:06:39.999Z" != i.call(new Date(-50000000000001));
  }) || !r(function () {
    i.call(new Date(NaN));
  }) ? function () {
    if (!isFinite(o.call(this))) throw RangeError("Invalid time value");
    var t = this,
        e = t.getUTCFullYear(),
        n = t.getUTCMilliseconds(),
        r = e < 0 ? "-" : e > 9999 ? "+" : "";
    return r + ("00000" + Math.abs(e)).slice(r ? -6 : -4) + "-" + s(t.getUTCMonth() + 1) + "-" + s(t.getUTCDate()) + "T" + s(t.getUTCHours()) + ":" + s(t.getUTCMinutes()) + ":" + s(t.getUTCSeconds()) + "." + (n > 99 ? n : "0" + s(n)) + "Z";
  } : i;
}, function (t, e, n) {
  var r = Date.prototype,
      o = r.toString,
      i = r.getTime;
  new Date(NaN) + "" != "Invalid Date" && n(12)(r, "toString", function () {
    var t = i.call(this);
    return t == t ? o.call(this) : "Invalid Date";
  });
}, function (t, e, n) {
  var r = n(5)("toPrimitive"),
      o = Date.prototype;
  r in o || n(16)(o, r, n(237));
}, function (t, e, n) {
  "use strict";

  var r = n(3),
      o = n(29);

  t.exports = function (t) {
    if ("string" !== t && "number" !== t && "default" !== t) throw TypeError("Incorrect hint");
    return o(r(this), "number" != t);
  };
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Array", {
    isArray: n(60)
  });
}, function (t, e, n) {
  "use strict";

  var r = n(20),
      o = n(0),
      i = n(11),
      s = n(117),
      u = n(88),
      c = n(6),
      a = n(89),
      f = n(90);
  o(o.S + o.F * !n(61)(function (t) {
    Array.from(t);
  }), "Array", {
    from: function from(t) {
      var e,
          n,
          o,
          l,
          p = i(t),
          h = "function" == typeof this ? this : Array,
          d = arguments.length,
          v = d > 1 ? arguments[1] : void 0,
          y = void 0 !== v,
          g = 0,
          m = f(p);
      if (y && (v = r(v, d > 2 ? arguments[2] : void 0, 2)), null == m || h == Array && u(m)) for (n = new h(e = c(p.length)); e > g; g++) {
        a(n, g, y ? v(p[g], g) : p[g]);
      } else for (l = m.call(p), n = new h(); !(o = l.next()).done; g++) {
        a(n, g, y ? s(l, v, [o.value, g], !0) : o.value);
      }
      return n.length = g, n;
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(89);
  r(r.S + r.F * n(2)(function () {
    function t() {}

    return !(Array.of.call(t) instanceof t);
  }), "Array", {
    of: function of() {
      for (var t = 0, e = arguments.length, n = new ("function" == typeof this ? this : Array)(e); e > t;) {
        o(n, t, arguments[t++]);
      }

      return n.length = e, n;
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(17),
      i = [].join;
  r(r.P + r.F * (n(50) != Object || !n(19)(i)), "Array", {
    join: function join(t) {
      return i.call(o(this), void 0 === t ? "," : t);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(76),
      i = n(26),
      s = n(36),
      u = n(6),
      c = [].slice;
  r(r.P + r.F * n(2)(function () {
    o && c.call(o);
  }), "Array", {
    slice: function slice(t, e) {
      var n = u(this.length),
          r = i(this);
      if (e = void 0 === e ? n : e, "Array" == r) return c.call(this, t, e);

      for (var o = s(t, n), a = s(e, n), f = u(a - o), l = new Array(f), p = 0; p < f; p++) {
        l[p] = "String" == r ? this.charAt(o + p) : this[o + p];
      }

      return l;
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(21),
      i = n(11),
      s = n(2),
      u = [].sort,
      c = [1, 2, 3];
  r(r.P + r.F * (s(function () {
    c.sort(void 0);
  }) || !s(function () {
    c.sort(null);
  }) || !n(19)(u)), "Array", {
    sort: function sort(t) {
      return void 0 === t ? u.call(i(this)) : u.call(i(this), o(t));
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(25)(0),
      i = n(19)([].forEach, !0);
  r(r.P + r.F * !i, "Array", {
    forEach: function forEach(t) {
      return o(this, t, arguments[1]);
    }
  });
}, function (t, e, n) {
  var r = n(4),
      o = n(60),
      i = n(5)("species");

  t.exports = function (t) {
    var e;
    return o(t) && ("function" != typeof (e = t.constructor) || e !== Array && !o(e.prototype) || (e = void 0), r(e) && null === (e = e[i]) && (e = void 0)), void 0 === e ? Array : e;
  };
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(25)(1);
  r(r.P + r.F * !n(19)([].map, !0), "Array", {
    map: function map(t) {
      return o(this, t, arguments[1]);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(25)(2);
  r(r.P + r.F * !n(19)([].filter, !0), "Array", {
    filter: function filter(t) {
      return o(this, t, arguments[1]);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(25)(3);
  r(r.P + r.F * !n(19)([].some, !0), "Array", {
    some: function some(t) {
      return o(this, t, arguments[1]);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(25)(4);
  r(r.P + r.F * !n(19)([].every, !0), "Array", {
    every: function every(t) {
      return o(this, t, arguments[1]);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(119);
  r(r.P + r.F * !n(19)([].reduce, !0), "Array", {
    reduce: function reduce(t) {
      return o(this, t, arguments.length, arguments[1], !1);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(119);
  r(r.P + r.F * !n(19)([].reduceRight, !0), "Array", {
    reduceRight: function reduceRight(t) {
      return o(this, t, arguments.length, arguments[1], !0);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(58)(!1),
      i = [].indexOf,
      s = !!i && 1 / [1].indexOf(1, -0) < 0;
  r(r.P + r.F * (s || !n(19)(i)), "Array", {
    indexOf: function indexOf(t) {
      return s ? i.apply(this, arguments) || 0 : o(this, t, arguments[1]);
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(17),
      i = n(22),
      s = n(6),
      u = [].lastIndexOf,
      c = !!u && 1 / [1].lastIndexOf(1, -0) < 0;
  r(r.P + r.F * (c || !n(19)(u)), "Array", {
    lastIndexOf: function lastIndexOf(t) {
      if (c) return u.apply(this, arguments) || 0;
      var e = o(this),
          n = s(e.length),
          r = n - 1;

      for (arguments.length > 1 && (r = Math.min(r, i(arguments[1]))), r < 0 && (r = n + r); r >= 0; r--) {
        if (r in e && e[r] === t) return r || 0;
      }

      return -1;
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.P, "Array", {
    copyWithin: n(120)
  }), n(40)("copyWithin");
}, function (t, e, n) {
  var r = n(0);
  r(r.P, "Array", {
    fill: n(91)
  }), n(40)("fill");
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(25)(5),
      i = !0;
  "find" in [] && Array(1).find(function () {
    i = !1;
  }), r(r.P + r.F * i, "Array", {
    find: function find(t) {
      return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
    }
  }), n(40)("find");
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(25)(6),
      i = "findIndex",
      s = !0;
  i in [] && Array(1)[i](function () {
    s = !1;
  }), r(r.P + r.F * s, "Array", {
    findIndex: function findIndex(t) {
      return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
    }
  }), n(40)(i);
}, function (t, e, n) {
  n(47)("Array");
}, function (t, e, n) {
  var r = n(1),
      o = n(79),
      i = n(9).f,
      s = n(38).f,
      u = n(86),
      c = n(62),
      _a = r.RegExp,
      f = _a,
      l = _a.prototype,
      p = /a/g,
      h = /a/g,
      d = new _a(p) !== p;

  if (n(8) && (!d || n(2)(function () {
    return h[n(5)("match")] = !1, _a(p) != p || _a(h) == h || "/a/i" != _a(p, "i");
  }))) {
    _a = function a(t, e) {
      var n = this instanceof _a,
          r = u(t),
          i = void 0 === e;
      return !n && r && t.constructor === _a && i ? t : o(d ? new f(r && !i ? t.source : t, e) : f((r = t instanceof _a) ? t.source : t, r && i ? c.call(t) : e), n ? this : l, _a);
    };

    for (var v = function v(t) {
      (t in _a) || i(_a, t, {
        configurable: !0,
        get: function get() {
          return f[t];
        },
        set: function set(e) {
          f[t] = e;
        }
      });
    }, y = s(f), g = 0; y.length > g;) {
      v(y[g++]);
    }

    l.constructor = _a, _a.prototype = l, n(12)(r, "RegExp", _a);
  }

  n(47)("RegExp");
}, function (t, e, n) {
  "use strict";

  n(123);

  var r = n(3),
      o = n(62),
      i = n(8),
      s = /./.toString,
      u = function u(t) {
    n(12)(RegExp.prototype, "toString", t, !0);
  };

  n(2)(function () {
    return "/a/b" != s.call({
      source: "a",
      flags: "b"
    });
  }) ? u(function () {
    var t = r(this);
    return "/".concat(t.source, "/", "flags" in t ? t.flags : !i && t instanceof RegExp ? o.call(t) : void 0);
  }) : "toString" != s.name && u(function () {
    return s.call(this);
  });
}, function (t, e, n) {
  "use strict";

  var r = n(3),
      o = n(6),
      i = n(94),
      s = n(63);
  n(64)("match", 1, function (t, e, n, u) {
    return [function (n) {
      var r = t(this),
          o = null == n ? void 0 : n[e];
      return void 0 !== o ? o.call(n, r) : new RegExp(n)[e](String(r));
    }, function (t) {
      var e = u(n, t, this);
      if (e.done) return e.value;
      var c = r(t),
          a = String(this);
      if (!c.global) return s(c, a);
      var f = c.unicode;
      c.lastIndex = 0;

      for (var l, p = [], h = 0; null !== (l = s(c, a));) {
        var d = String(l[0]);
        p[h] = d, "" === d && (c.lastIndex = i(a, o(c.lastIndex), f)), h++;
      }

      return 0 === h ? null : p;
    }];
  });
}, function (t, e, n) {
  "use strict";

  var r = n(3),
      o = n(11),
      i = n(6),
      s = n(22),
      u = n(94),
      c = n(63),
      a = Math.max,
      f = Math.min,
      l = Math.floor,
      p = /\$([$&`']|\d\d?|<[^>]*>)/g,
      h = /\$([$&`']|\d\d?)/g;
  n(64)("replace", 2, function (t, e, n, d) {
    return [function (r, o) {
      var i = t(this),
          s = null == r ? void 0 : r[e];
      return void 0 !== s ? s.call(r, i, o) : n.call(String(i), r, o);
    }, function (t, e) {
      var o = d(n, t, this, e);
      if (o.done) return o.value;
      var l = r(t),
          p = String(this),
          h = "function" == typeof e;
      h || (e = String(e));
      var y = l.global;

      if (y) {
        var g = l.unicode;
        l.lastIndex = 0;
      }

      for (var m = [];;) {
        var b = c(l, p);
        if (null === b) break;
        if (m.push(b), !y) break;
        "" === String(b[0]) && (l.lastIndex = u(p, i(l.lastIndex), g));
      }

      for (var _, w = "", E = 0, S = 0; S < m.length; S++) {
        b = m[S];

        for (var O = String(b[0]), A = a(f(s(b.index), p.length), 0), P = [], I = 1; I < b.length; I++) {
          P.push(void 0 === (_ = b[I]) ? _ : String(_));
        }

        var C = b.groups;

        if (h) {
          var x = [O].concat(P, A, p);
          void 0 !== C && x.push(C);
          var L = String(e.apply(void 0, x));
        } else L = v(O, p, A, P, C, e);

        A >= E && (w += p.slice(E, A) + L, E = A + O.length);
      }

      return w + p.slice(E);
    }];

    function v(t, e, r, i, s, u) {
      var c = r + t.length,
          a = i.length,
          f = h;
      return void 0 !== s && (s = o(s), f = p), n.call(u, f, function (n, o) {
        var u;

        switch (o.charAt(0)) {
          case "$":
            return "$";

          case "&":
            return t;

          case "`":
            return e.slice(0, r);

          case "'":
            return e.slice(c);

          case "<":
            u = s[o.slice(1, -1)];
            break;

          default:
            var f = +o;
            if (0 === f) return n;

            if (f > a) {
              var p = l(f / 10);
              return 0 === p ? n : p <= a ? void 0 === i[p - 1] ? o.charAt(1) : i[p - 1] + o.charAt(1) : n;
            }

            u = i[f - 1];
        }

        return void 0 === u ? "" : u;
      });
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(3),
      o = n(108),
      i = n(63);
  n(64)("search", 1, function (t, e, n, s) {
    return [function (n) {
      var r = t(this),
          o = null == n ? void 0 : n[e];
      return void 0 !== o ? o.call(n, r) : new RegExp(n)[e](String(r));
    }, function (t) {
      var e = s(n, t, this);
      if (e.done) return e.value;
      var u = r(t),
          c = String(this),
          a = u.lastIndex;
      o(a, 0) || (u.lastIndex = 0);
      var f = i(u, c);
      return o(u.lastIndex, a) || (u.lastIndex = a), null === f ? -1 : f.index;
    }];
  });
}, function (t, e, n) {
  "use strict";

  var r = n(86),
      o = n(3),
      i = n(53),
      s = n(94),
      u = n(6),
      c = n(63),
      a = n(93),
      f = n(2),
      l = Math.min,
      p = [].push,
      h = "length",
      d = !f(function () {
    RegExp(4294967295, "y");
  });
  n(64)("split", 2, function (t, e, n, f) {
    var v;
    return v = "c" == "abbc".split(/(b)*/)[1] || 4 != "test".split(/(?:)/, -1)[h] || 2 != "ab".split(/(?:ab)*/)[h] || 4 != ".".split(/(.?)(.?)/)[h] || ".".split(/()()/)[h] > 1 || "".split(/.?/)[h] ? function (t, e) {
      var o = String(this);
      if (void 0 === t && 0 === e) return [];
      if (!r(t)) return n.call(o, t, e);

      for (var i, s, u, c = [], f = (t.ignoreCase ? "i" : "") + (t.multiline ? "m" : "") + (t.unicode ? "u" : "") + (t.sticky ? "y" : ""), l = 0, d = void 0 === e ? 4294967295 : e >>> 0, v = new RegExp(t.source, f + "g"); (i = a.call(v, o)) && !((s = v.lastIndex) > l && (c.push(o.slice(l, i.index)), i[h] > 1 && i.index < o[h] && p.apply(c, i.slice(1)), u = i[0][h], l = s, c[h] >= d));) {
        v.lastIndex === i.index && v.lastIndex++;
      }

      return l === o[h] ? !u && v.test("") || c.push("") : c.push(o.slice(l)), c[h] > d ? c.slice(0, d) : c;
    } : "0".split(void 0, 0)[h] ? function (t, e) {
      return void 0 === t && 0 === e ? [] : n.call(this, t, e);
    } : n, [function (n, r) {
      var o = t(this),
          i = null == n ? void 0 : n[e];
      return void 0 !== i ? i.call(n, o, r) : v.call(String(o), n, r);
    }, function (t, e) {
      var r = f(v, t, this, e, v !== n);
      if (r.done) return r.value;
      var a = o(t),
          p = String(this),
          h = i(a, RegExp),
          y = a.unicode,
          g = (a.ignoreCase ? "i" : "") + (a.multiline ? "m" : "") + (a.unicode ? "u" : "") + (d ? "y" : "g"),
          m = new h(d ? a : "^(?:" + a.source + ")", g),
          b = void 0 === e ? 4294967295 : e >>> 0;
      if (0 === b) return [];
      if (0 === p.length) return null === c(m, p) ? [p] : [];

      for (var _ = 0, w = 0, E = []; w < p.length;) {
        m.lastIndex = d ? w : 0;
        var S,
            O = c(m, d ? p : p.slice(w));
        if (null === O || (S = l(u(m.lastIndex + (d ? 0 : w)), p.length)) === _) w = s(p, w, y);else {
          if (E.push(p.slice(_, w)), E.length === b) return E;

          for (var A = 1; A <= O.length - 1; A++) {
            if (E.push(O[A]), E.length === b) return E;
          }

          w = _ = S;
        }
      }

      return E.push(p.slice(_)), E;
    }];
  });
}, function (t, e, n) {
  var r = n(1),
      o = n(95).set,
      i = r.MutationObserver || r.WebKitMutationObserver,
      s = r.process,
      u = r.Promise,
      c = "process" == n(26)(s);

  t.exports = function () {
    var t,
        e,
        n,
        a = function a() {
      var r, o;

      for (c && (r = s.domain) && r.exit(); t;) {
        o = t.fn, t = t.next;

        try {
          o();
        } catch (r) {
          throw t ? n() : e = void 0, r;
        }
      }

      e = void 0, r && r.enter();
    };

    if (c) n = function n() {
      s.nextTick(a);
    };else if (!i || r.navigator && r.navigator.standalone) {
      if (u && u.resolve) {
        var f = u.resolve(void 0);

        n = function n() {
          f.then(a);
        };
      } else n = function n() {
        o.call(r, a);
      };
    } else {
      var l = !0,
          p = document.createTextNode("");
      new i(a).observe(p, {
        characterData: !0
      }), n = function n() {
        p.data = l = !l;
      };
    }
    return function (r) {
      var o = {
        fn: r,
        next: void 0
      };
      e && (e.next = o), t || (t = o, n()), e = o;
    };
  };
}, function (t, e) {
  t.exports = function (t) {
    try {
      return {
        e: !1,
        v: t()
      };
    } catch (t) {
      return {
        e: !0,
        v: t
      };
    }
  };
}, function (t, e, n) {
  "use strict";

  var r = n(127),
      o = n(41);
  t.exports = n(67)("Map", function (t) {
    return function () {
      return t(this, arguments.length > 0 ? arguments[0] : void 0);
    };
  }, {
    get: function get(t) {
      var e = r.getEntry(o(this, "Map"), t);
      return e && e.v;
    },
    set: function set(t, e) {
      return r.def(o(this, "Map"), 0 === t ? 0 : t, e);
    }
  }, r, !0);
}, function (t, e, n) {
  "use strict";

  var r = n(127),
      o = n(41);
  t.exports = n(67)("Set", function (t) {
    return function () {
      return t(this, arguments.length > 0 ? arguments[0] : void 0);
    };
  }, {
    add: function add(t) {
      return r.def(o(this, "Set"), t = 0 === t ? 0 : t, t);
    }
  }, r);
}, function (t, e, n) {
  "use strict";

  var r,
      o = n(1),
      i = n(25)(0),
      s = n(12),
      u = n(30),
      c = n(107),
      a = n(128),
      f = n(4),
      l = n(41),
      p = n(41),
      h = !o.ActiveXObject && "ActiveXObject" in o,
      d = u.getWeak,
      v = Object.isExtensible,
      y = a.ufstore,
      g = function g(t) {
    return function () {
      return t(this, arguments.length > 0 ? arguments[0] : void 0);
    };
  },
      m = {
    get: function get(t) {
      if (f(t)) {
        var e = d(t);
        return !0 === e ? y(l(this, "WeakMap")).get(t) : e ? e[this._i] : void 0;
      }
    },
    set: function set(t, e) {
      return a.def(l(this, "WeakMap"), t, e);
    }
  },
      b = t.exports = n(67)("WeakMap", g, m, a, !0, !0);

  p && h && (c((r = a.getConstructor(g, "WeakMap")).prototype, m), u.NEED = !0, i(["delete", "has", "get", "set"], function (t) {
    var e = b.prototype,
        n = e[t];
    s(e, t, function (e, o) {
      if (f(e) && !v(e)) {
        this._f || (this._f = new r());

        var i = this._f[t](e, o);

        return "set" == t ? this : i;
      }

      return n.call(this, e, o);
    });
  }));
}, function (t, e, n) {
  "use strict";

  var r = n(128),
      o = n(41);
  n(67)("WeakSet", function (t) {
    return function () {
      return t(this, arguments.length > 0 ? arguments[0] : void 0);
    };
  }, {
    add: function add(t) {
      return r.def(o(this, "WeakSet"), t, !0);
    }
  }, r, !1, !0);
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(68),
      i = n(96),
      s = n(3),
      u = n(36),
      c = n(6),
      a = n(4),
      f = n(1).ArrayBuffer,
      l = n(53),
      p = i.ArrayBuffer,
      h = i.DataView,
      d = o.ABV && f.isView,
      v = p.prototype.slice,
      y = o.VIEW;
  r(r.G + r.W + r.F * (f !== p), {
    ArrayBuffer: p
  }), r(r.S + r.F * !o.CONSTR, "ArrayBuffer", {
    isView: function isView(t) {
      return d && d(t) || a(t) && y in t;
    }
  }), r(r.P + r.U + r.F * n(2)(function () {
    return !new p(2).slice(1, void 0).byteLength;
  }), "ArrayBuffer", {
    slice: function slice(t, e) {
      if (void 0 !== v && void 0 === e) return v.call(s(this), t);

      for (var n = s(this).byteLength, r = u(t, n), o = u(void 0 === e ? n : e, n), i = new (l(this, p))(c(o - r)), a = new h(this), f = new h(i), d = 0; r < o;) {
        f.setUint8(d++, a.getUint8(r++));
      }

      return i;
    }
  }), n(47)("ArrayBuffer");
}, function (t, e, n) {
  var r = n(0);
  r(r.G + r.W + r.F * !n(68).ABV, {
    DataView: n(96).DataView
  });
}, function (t, e, n) {
  n(28)("Int8", 1, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  n(28)("Uint8", 1, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  n(28)("Uint8", 1, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  }, !0);
}, function (t, e, n) {
  n(28)("Int16", 2, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  n(28)("Uint16", 2, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  n(28)("Int32", 4, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  n(28)("Uint32", 4, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  n(28)("Float32", 4, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  n(28)("Float64", 8, function (t) {
    return function (e, n, r) {
      return t(this, e, n, r);
    };
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(21),
      i = n(3),
      s = (n(1).Reflect || {}).apply,
      u = Function.apply;
  r(r.S + r.F * !n(2)(function () {
    s(function () {});
  }), "Reflect", {
    apply: function apply(t, e, n) {
      var r = o(t),
          c = i(n);
      return s ? s(r, e, c) : u.call(r, e, c);
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(37),
      i = n(21),
      s = n(3),
      u = n(4),
      c = n(2),
      a = n(109),
      f = (n(1).Reflect || {}).construct,
      l = c(function () {
    function t() {}

    return !(f(function () {}, [], t) instanceof t);
  }),
      p = !c(function () {
    f(function () {});
  });
  r(r.S + r.F * (l || p), "Reflect", {
    construct: function construct(t, e) {
      i(t), s(e);
      var n = arguments.length < 3 ? t : i(arguments[2]);
      if (p && !l) return f(t, e, n);

      if (t == n) {
        switch (e.length) {
          case 0:
            return new t();

          case 1:
            return new t(e[0]);

          case 2:
            return new t(e[0], e[1]);

          case 3:
            return new t(e[0], e[1], e[2]);

          case 4:
            return new t(e[0], e[1], e[2], e[3]);
        }

        var r = [null];
        return r.push.apply(r, e), new (a.apply(t, r))();
      }

      var c = n.prototype,
          h = o(u(c) ? c : Object.prototype),
          d = Function.apply.call(t, h, e);
      return u(d) ? d : h;
    }
  });
}, function (t, e, n) {
  var r = n(9),
      o = n(0),
      i = n(3),
      s = n(29);
  o(o.S + o.F * n(2)(function () {
    Reflect.defineProperty(r.f({}, 1, {
      value: 1
    }), 1, {
      value: 2
    });
  }), "Reflect", {
    defineProperty: function defineProperty(t, e, n) {
      i(t), e = s(e, !0), i(n);

      try {
        return r.f(t, e, n), !0;
      } catch (t) {
        return !1;
      }
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(23).f,
      i = n(3);
  r(r.S, "Reflect", {
    deleteProperty: function deleteProperty(t, e) {
      var n = o(i(t), e);
      return !(n && !n.configurable) && delete t[e];
    }
  });
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(3),
      i = function i(t) {
    this._t = o(t), this._i = 0;
    var e,
        n = this._k = [];

    for (e in t) {
      n.push(e);
    }
  };

  n(116)(i, "Object", function () {
    var t,
        e = this._k;

    do {
      if (this._i >= e.length) return {
        value: void 0,
        done: !0
      };
    } while (!((t = e[this._i++]) in this._t));

    return {
      value: t,
      done: !1
    };
  }), r(r.S, "Reflect", {
    enumerate: function enumerate(t) {
      return new i(t);
    }
  });
}, function (t, e, n) {
  var r = n(23),
      o = n(39),
      i = n(15),
      s = n(0),
      u = n(4),
      c = n(3);
  s(s.S, "Reflect", {
    get: function t(e, n) {
      var s,
          a,
          f = arguments.length < 3 ? e : arguments[2];
      return c(e) === f ? e[n] : (s = r.f(e, n)) ? i(s, "value") ? s.value : void 0 !== s.get ? s.get.call(f) : void 0 : u(a = o(e)) ? t(a, n, f) : void 0;
    }
  });
}, function (t, e, n) {
  var r = n(23),
      o = n(0),
      i = n(3);
  o(o.S, "Reflect", {
    getOwnPropertyDescriptor: function getOwnPropertyDescriptor(t, e) {
      return r.f(i(t), e);
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(39),
      i = n(3);
  r(r.S, "Reflect", {
    getPrototypeOf: function getPrototypeOf(t) {
      return o(i(t));
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Reflect", {
    has: function has(t, e) {
      return e in t;
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(3),
      i = Object.isExtensible;
  r(r.S, "Reflect", {
    isExtensible: function isExtensible(t) {
      return o(t), !i || i(t);
    }
  });
}, function (t, e, n) {
  var r = n(0);
  r(r.S, "Reflect", {
    ownKeys: n(130)
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(3),
      i = Object.preventExtensions;
  r(r.S, "Reflect", {
    preventExtensions: function preventExtensions(t) {
      o(t);

      try {
        return i && i(t), !0;
      } catch (t) {
        return !1;
      }
    }
  });
}, function (t, e, n) {
  var r = n(9),
      o = n(23),
      i = n(39),
      s = n(15),
      u = n(0),
      c = n(32),
      a = n(3),
      f = n(4);
  u(u.S, "Reflect", {
    set: function t(e, n, u) {
      var l,
          p,
          h = arguments.length < 4 ? e : arguments[3],
          d = o.f(a(e), n);

      if (!d) {
        if (f(p = i(e))) return t(p, n, u, h);
        d = c(0);
      }

      if (s(d, "value")) {
        if (!1 === d.writable || !f(h)) return !1;

        if (l = o.f(h, n)) {
          if (l.get || l.set || !1 === l.writable) return !1;
          l.value = u, r.f(h, n, l);
        } else r.f(h, n, c(0, u));

        return !0;
      }

      return void 0 !== d.set && (d.set.call(h, u), !0);
    }
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(77);
  o && r(r.S, "Reflect", {
    setPrototypeOf: function setPrototypeOf(t, e) {
      o.check(t, e);

      try {
        return o.set(t, e), !0;
      } catch (t) {
        return !1;
      }
    }
  });
}, function (t, e, n) {
  n(297), t.exports = n(7).Array.includes;
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(58)(!0);
  r(r.P, "Array", {
    includes: function includes(t) {
      return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
    }
  }), n(40)("includes");
}, function (t, e, n) {
  n(299), t.exports = n(7).Array.flatMap;
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(300),
      i = n(11),
      s = n(6),
      u = n(21),
      c = n(118);
  r(r.P, "Array", {
    flatMap: function flatMap(t) {
      var e,
          n,
          r = i(this);
      return u(t), e = s(r.length), n = c(r, 0), o(n, r, r, e, 0, 1, t, arguments[1]), n;
    }
  }), n(40)("flatMap");
}, function (t, e, n) {
  "use strict";

  var r = n(60),
      o = n(4),
      i = n(6),
      s = n(20),
      u = n(5)("isConcatSpreadable");

  t.exports = function t(e, n, c, a, f, l, p, h) {
    for (var d, v, y = f, g = 0, m = !!p && s(p, h, 3); g < a;) {
      if (g in c) {
        if (d = m ? m(c[g], g, n) : c[g], v = !1, o(d) && (v = void 0 !== (v = d[u]) ? !!v : r(d)), v && l > 0) y = t(e, n, d, i(d.length), y, l - 1) - 1;else {
          if (y >= 9007199254740991) throw TypeError();
          e[y] = d;
        }
        y++;
      }

      g++;
    }

    return y;
  };
}, function (t, e, n) {
  n(302), t.exports = n(7).String.padStart;
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(131),
      i = n(66),
      s = /Version\/10\.\d+(\.\d+)?( Mobile\/\w+)? Safari\//.test(i);
  r(r.P + r.F * s, "String", {
    padStart: function padStart(t) {
      return o(this, t, arguments.length > 1 ? arguments[1] : void 0, !0);
    }
  });
}, function (t, e, n) {
  n(304), t.exports = n(7).String.padEnd;
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(131),
      i = n(66),
      s = /Version\/10\.\d+(\.\d+)?( Mobile\/\w+)? Safari\//.test(i);
  r(r.P + r.F * s, "String", {
    padEnd: function padEnd(t) {
      return o(this, t, arguments.length > 1 ? arguments[1] : void 0, !1);
    }
  });
}, function (t, e, n) {
  n(306), t.exports = n(7).String.trimLeft;
}, function (t, e, n) {
  "use strict";

  n(45)("trimLeft", function (t) {
    return function () {
      return t(this, 1);
    };
  }, "trimStart");
}, function (t, e, n) {
  n(308), t.exports = n(7).String.trimRight;
}, function (t, e, n) {
  "use strict";

  n(45)("trimRight", function (t) {
    return function () {
      return t(this, 2);
    };
  }, "trimEnd");
}, function (t, e, n) {
  n(310), t.exports = n(73).f("asyncIterator");
}, function (t, e, n) {
  n(103)("asyncIterator");
}, function (t, e, n) {
  n(312), t.exports = n(7).Object.getOwnPropertyDescriptors;
}, function (t, e, n) {
  var r = n(0),
      o = n(130),
      i = n(17),
      s = n(23),
      u = n(89);
  r(r.S, "Object", {
    getOwnPropertyDescriptors: function getOwnPropertyDescriptors(t) {
      for (var e, n, r = i(t), c = s.f, a = o(r), f = {}, l = 0; a.length > l;) {
        void 0 !== (n = c(r, e = a[l++])) && u(f, e, n);
      }

      return f;
    }
  });
}, function (t, e, n) {
  n(314), t.exports = n(7).Object.values;
}, function (t, e, n) {
  var r = n(0),
      o = n(132)(!1);
  r(r.S, "Object", {
    values: function values(t) {
      return o(t);
    }
  });
}, function (t, e, n) {
  n(316), t.exports = n(7).Object.entries;
}, function (t, e, n) {
  var r = n(0),
      o = n(132)(!0);
  r(r.S, "Object", {
    entries: function entries(t) {
      return o(t);
    }
  });
}, function (t, e, n) {
  "use strict";

  n(124), n(318), t.exports = n(7).Promise.finally;
}, function (t, e, n) {
  "use strict";

  var r = n(0),
      o = n(7),
      i = n(1),
      s = n(53),
      u = n(126);
  r(r.P + r.R, "Promise", {
    finally: function _finally(t) {
      var e = s(this, o.Promise || i.Promise),
          n = "function" == typeof t;
      return this.then(n ? function (n) {
        return u(e, t()).then(function () {
          return n;
        });
      } : t, n ? function (n) {
        return u(e, t()).then(function () {
          throw n;
        });
      } : t);
    }
  });
}, function (t, e, n) {
  n(320), n(321), n(322), t.exports = n(7);
}, function (t, e, n) {
  var r = n(1),
      o = n(0),
      i = n(66),
      s = [].slice,
      u = /MSIE .\./.test(i),
      c = function c(t) {
    return function (e, n) {
      var r = arguments.length > 2,
          o = !!r && s.call(arguments, 2);
      return t(r ? function () {
        ("function" == typeof e ? e : Function(e)).apply(this, o);
      } : e, n);
    };
  };

  o(o.G + o.B + o.F * u, {
    setTimeout: c(r.setTimeout),
    setInterval: c(r.setInterval)
  });
}, function (t, e, n) {
  var r = n(0),
      o = n(95);
  r(r.G + r.B, {
    setImmediate: o.set,
    clearImmediate: o.clear
  });
}, function (t, e, n) {
  for (var r = n(92), o = n(35), i = n(12), s = n(1), u = n(16), c = n(46), a = n(5), f = a("iterator"), l = a("toStringTag"), p = c.Array, h = {
    CSSRuleList: !0,
    CSSStyleDeclaration: !1,
    CSSValueList: !1,
    ClientRectList: !1,
    DOMRectList: !1,
    DOMStringList: !1,
    DOMTokenList: !0,
    DataTransferItemList: !1,
    FileList: !1,
    HTMLAllCollection: !1,
    HTMLCollection: !1,
    HTMLFormElement: !1,
    HTMLSelectElement: !1,
    MediaList: !0,
    MimeTypeArray: !1,
    NamedNodeMap: !1,
    NodeList: !0,
    PaintRequestList: !1,
    Plugin: !1,
    PluginArray: !1,
    SVGLengthList: !1,
    SVGNumberList: !1,
    SVGPathSegList: !1,
    SVGPointList: !1,
    SVGStringList: !1,
    SVGTransformList: !1,
    SourceBufferList: !1,
    StyleSheetList: !0,
    TextTrackCueList: !1,
    TextTrackList: !1,
    TouchList: !1
  }, d = o(h), v = 0; v < d.length; v++) {
    var y,
        g = d[v],
        m = h[g],
        b = s[g],
        _ = b && b.prototype;

    if (_ && (_[f] || u(_, f, p), _[l] || u(_, l, g), c[g] = p, m)) for (y in r) {
      _[y] || i(_, y, r[y], !0);
    }
  }
}, function (t, e, n) {
  var r = function (t) {
    "use strict";

    var e = Object.prototype,
        n = e.hasOwnProperty,
        r = "function" == typeof Symbol ? Symbol : {},
        o = r.iterator || "@@iterator",
        i = r.asyncIterator || "@@asyncIterator",
        s = r.toStringTag || "@@toStringTag";

    function u(t, e, n) {
      return Object.defineProperty(t, e, {
        value: n,
        enumerable: !0,
        configurable: !0,
        writable: !0
      }), t[e];
    }

    try {
      u({}, "");
    } catch (t) {
      u = function u(t, e, n) {
        return t[e] = n;
      };
    }

    function c(t, e, n, r) {
      var o = e && e.prototype instanceof l ? e : l,
          i = Object.create(o.prototype),
          s = new S(r || []);
      return i._invoke = function (t, e, n) {
        var r = "suspendedStart";
        return function (o, i) {
          if ("executing" === r) throw new Error("Generator is already running");

          if ("completed" === r) {
            if ("throw" === o) throw i;
            return A();
          }

          for (n.method = o, n.arg = i;;) {
            var s = n.delegate;

            if (s) {
              var u = _(s, n);

              if (u) {
                if (u === f) continue;
                return u;
              }
            }

            if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) {
              if ("suspendedStart" === r) throw r = "completed", n.arg;
              n.dispatchException(n.arg);
            } else "return" === n.method && n.abrupt("return", n.arg);
            r = "executing";
            var c = a(t, e, n);

            if ("normal" === c.type) {
              if (r = n.done ? "completed" : "suspendedYield", c.arg === f) continue;
              return {
                value: c.arg,
                done: n.done
              };
            }

            "throw" === c.type && (r = "completed", n.method = "throw", n.arg = c.arg);
          }
        };
      }(t, n, s), i;
    }

    function a(t, e, n) {
      try {
        return {
          type: "normal",
          arg: t.call(e, n)
        };
      } catch (t) {
        return {
          type: "throw",
          arg: t
        };
      }
    }

    t.wrap = c;
    var f = {};

    function l() {}

    function p() {}

    function h() {}

    var d = {};

    d[o] = function () {
      return this;
    };

    var v = Object.getPrototypeOf,
        y = v && v(v(O([])));
    y && y !== e && n.call(y, o) && (d = y);
    var g = h.prototype = l.prototype = Object.create(d);

    function m(t) {
      ["next", "throw", "return"].forEach(function (e) {
        u(t, e, function (t) {
          return this._invoke(e, t);
        });
      });
    }

    function b(t, e) {
      var r;

      this._invoke = function (o, i) {
        function s() {
          return new e(function (r, s) {
            !function r(o, i, s, u) {
              var c = a(t[o], t, i);

              if ("throw" !== c.type) {
                var f = c.arg,
                    l = f.value;
                return l && "object" == _typeof(l) && n.call(l, "__await") ? e.resolve(l.__await).then(function (t) {
                  r("next", t, s, u);
                }, function (t) {
                  r("throw", t, s, u);
                }) : e.resolve(l).then(function (t) {
                  f.value = t, s(f);
                }, function (t) {
                  return r("throw", t, s, u);
                });
              }

              u(c.arg);
            }(o, i, r, s);
          });
        }

        return r = r ? r.then(s, s) : s();
      };
    }

    function _(t, e) {
      var n = t.iterator[e.method];

      if (void 0 === n) {
        if (e.delegate = null, "throw" === e.method) {
          if (t.iterator.return && (e.method = "return", e.arg = void 0, _(t, e), "throw" === e.method)) return f;
          e.method = "throw", e.arg = new TypeError("The iterator does not provide a 'throw' method");
        }

        return f;
      }

      var r = a(n, t.iterator, e.arg);
      if ("throw" === r.type) return e.method = "throw", e.arg = r.arg, e.delegate = null, f;
      var o = r.arg;
      return o ? o.done ? (e[t.resultName] = o.value, e.next = t.nextLoc, "return" !== e.method && (e.method = "next", e.arg = void 0), e.delegate = null, f) : o : (e.method = "throw", e.arg = new TypeError("iterator result is not an object"), e.delegate = null, f);
    }

    function w(t) {
      var e = {
        tryLoc: t[0]
      };
      1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e);
    }

    function E(t) {
      var e = t.completion || {};
      e.type = "normal", delete e.arg, t.completion = e;
    }

    function S(t) {
      this.tryEntries = [{
        tryLoc: "root"
      }], t.forEach(w, this), this.reset(!0);
    }

    function O(t) {
      if (t) {
        var e = t[o];
        if (e) return e.call(t);
        if ("function" == typeof t.next) return t;

        if (!isNaN(t.length)) {
          var r = -1,
              i = function e() {
            for (; ++r < t.length;) {
              if (n.call(t, r)) return e.value = t[r], e.done = !1, e;
            }

            return e.value = void 0, e.done = !0, e;
          };

          return i.next = i;
        }
      }

      return {
        next: A
      };
    }

    function A() {
      return {
        value: void 0,
        done: !0
      };
    }

    return p.prototype = g.constructor = h, h.constructor = p, p.displayName = u(h, s, "GeneratorFunction"), t.isGeneratorFunction = function (t) {
      var e = "function" == typeof t && t.constructor;
      return !!e && (e === p || "GeneratorFunction" === (e.displayName || e.name));
    }, t.mark = function (t) {
      return Object.setPrototypeOf ? Object.setPrototypeOf(t, h) : (t.__proto__ = h, u(t, s, "GeneratorFunction")), t.prototype = Object.create(g), t;
    }, t.awrap = function (t) {
      return {
        __await: t
      };
    }, m(b.prototype), b.prototype[i] = function () {
      return this;
    }, t.AsyncIterator = b, t.async = function (e, n, r, o, i) {
      void 0 === i && (i = Promise);
      var s = new b(c(e, n, r, o), i);
      return t.isGeneratorFunction(n) ? s : s.next().then(function (t) {
        return t.done ? t.value : s.next();
      });
    }, m(g), u(g, s, "Generator"), g[o] = function () {
      return this;
    }, g.toString = function () {
      return "[object Generator]";
    }, t.keys = function (t) {
      var e = [];

      for (var n in t) {
        e.push(n);
      }

      return e.reverse(), function n() {
        for (; e.length;) {
          var r = e.pop();
          if (r in t) return n.value = r, n.done = !1, n;
        }

        return n.done = !0, n;
      };
    }, t.values = O, S.prototype = {
      constructor: S,
      reset: function reset(t) {
        if (this.prev = 0, this.next = 0, this.sent = this._sent = void 0, this.done = !1, this.delegate = null, this.method = "next", this.arg = void 0, this.tryEntries.forEach(E), !t) for (var e in this) {
          "t" === e.charAt(0) && n.call(this, e) && !isNaN(+e.slice(1)) && (this[e] = void 0);
        }
      },
      stop: function stop() {
        this.done = !0;
        var t = this.tryEntries[0].completion;
        if ("throw" === t.type) throw t.arg;
        return this.rval;
      },
      dispatchException: function dispatchException(t) {
        if (this.done) throw t;
        var e = this;

        function r(n, r) {
          return s.type = "throw", s.arg = t, e.next = n, r && (e.method = "next", e.arg = void 0), !!r;
        }

        for (var o = this.tryEntries.length - 1; o >= 0; --o) {
          var i = this.tryEntries[o],
              s = i.completion;
          if ("root" === i.tryLoc) return r("end");

          if (i.tryLoc <= this.prev) {
            var u = n.call(i, "catchLoc"),
                c = n.call(i, "finallyLoc");

            if (u && c) {
              if (this.prev < i.catchLoc) return r(i.catchLoc, !0);
              if (this.prev < i.finallyLoc) return r(i.finallyLoc);
            } else if (u) {
              if (this.prev < i.catchLoc) return r(i.catchLoc, !0);
            } else {
              if (!c) throw new Error("try statement without catch or finally");
              if (this.prev < i.finallyLoc) return r(i.finallyLoc);
            }
          }
        }
      },
      abrupt: function abrupt(t, e) {
        for (var r = this.tryEntries.length - 1; r >= 0; --r) {
          var o = this.tryEntries[r];

          if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) {
            var i = o;
            break;
          }
        }

        i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i.finallyLoc && (i = null);
        var s = i ? i.completion : {};
        return s.type = t, s.arg = e, i ? (this.method = "next", this.next = i.finallyLoc, f) : this.complete(s);
      },
      complete: function complete(t, e) {
        if ("throw" === t.type) throw t.arg;
        return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), f;
      },
      finish: function finish(t) {
        for (var e = this.tryEntries.length - 1; e >= 0; --e) {
          var n = this.tryEntries[e];
          if (n.finallyLoc === t) return this.complete(n.completion, n.afterLoc), E(n), f;
        }
      },
      catch: function _catch(t) {
        for (var e = this.tryEntries.length - 1; e >= 0; --e) {
          var n = this.tryEntries[e];

          if (n.tryLoc === t) {
            var r = n.completion;

            if ("throw" === r.type) {
              var o = r.arg;
              E(n);
            }

            return o;
          }
        }

        throw new Error("illegal catch attempt");
      },
      delegateYield: function delegateYield(t, e, n) {
        return this.delegate = {
          iterator: O(t),
          resultName: e,
          nextLoc: n
        }, "next" === this.method && (this.arg = void 0), f;
      }
    }, t;
  }(t.exports);

  try {
    regeneratorRuntime = r;
  } catch (t) {
    Function("r", "regeneratorRuntime = r")(r);
  }
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  }), function (t) {
    for (var n in t) {
      e.hasOwnProperty(n) || (e[n] = t[n]);
    }
  }(n(97));
}, function (t, e, n) {
  "use strict";

  var _r7,
      o = this && this.__extends || (_r7 = function r(t, e) {
    return (_r7 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r7(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = n(69),
      s = n(70),
      u = function (t) {
    function e() {
      var e = null !== t && t.apply(this, arguments) || this;
      return e.cmpStatus = s.CmpStatus.ERROR, e;
    }

    return o(e, t), e;
  }(i.Response);

  e.Disabled = u;
}, function (t, e, n) {
  "use strict";

  var r;
  Object.defineProperty(e, "__esModule", {
    value: !0
  }), (r = e.CmpStatus || (e.CmpStatus = {})).STUB = "stub", r.LOADING = "loading", r.LOADED = "loaded", r.ERROR = "error";
}, function (t, e, n) {
  "use strict";

  var r;
  Object.defineProperty(e, "__esModule", {
    value: !0
  }), (r = e.DisplayStatus || (e.DisplayStatus = {})).VISIBLE = "visible", r.HIDDEN = "hidden", r.DISABLED = "disabled";
}, function (t, e, n) {
  "use strict";

  var r;
  Object.defineProperty(e, "__esModule", {
    value: !0
  }), (r = e.EventStatus || (e.EventStatus = {})).TC_LOADED = "tcloaded", r.CMP_UI_SHOWN = "cmpuishown", r.USER_ACTION_COMPLETE = "useractioncomplete";
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(71),
      o = function () {
    function t() {
      this.eventQueue = new Map(), this.queueNumber = 0;
    }

    return t.prototype.add = function (t) {
      return this.eventQueue.set(this.queueNumber, t), this.queueNumber++;
    }, t.prototype.remove = function (t) {
      return this.eventQueue.delete(t);
    }, t.prototype.exec = function () {
      this.eventQueue.forEach(function (t, e) {
        new r.GetTCDataCommand(t, void 0, e);
      });
    }, t.prototype.clear = function () {
      this.queueNumber = 0, this.eventQueue.clear();
    }, Object.defineProperty(t.prototype, "size", {
      get: function get() {
        return this.eventQueue.size;
      },
      enumerable: !0,
      configurable: !0
    }), t;
  }();

  e.EventListenerQueue = o;
}, function (t, e, n) {
  "use strict";

  var _r8,
      o = this && this.__extends || (_r8 = function r(t, e) {
    return (_r8 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r8(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__read || function (t, e) {
    var n = "function" == typeof Symbol && t[Symbol.iterator];
    if (!n) return t;
    var r,
        o,
        i = n.call(t),
        s = [];

    try {
      for (; (void 0 === e || e-- > 0) && !(r = i.next()).done;) {
        s.push(r.value);
      }
    } catch (t) {
      o = {
        error: t
      };
    } finally {
      try {
        r && !r.done && (n = i.return) && n.call(i);
      } finally {
        if (o) throw o.error;
      }
    }

    return s;
  },
      s = this && this.__spread || function () {
    for (var t = [], e = 0; e < arguments.length; e++) {
      t = t.concat(i(arguments[e]));
    }

    return t;
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = function (t) {
    function e(e) {
      var n = t.call(this, e) || this;
      return delete n.outOfBand, n;
    }

    return o(e, t), e.prototype.createVectorField = function (t) {
      return s(t).reduce(function (t, e) {
        return t + (e[1] ? "1" : "0");
      }, "");
    }, e.prototype.createRestrictions = function (t) {
      var e = {};

      if (t.numRestrictions > 0) {
        var n = t.getMaxVendorId();
        t.getRestrictions().forEach(function (t) {
          e[t.purposeId.toString()] = "_".repeat(n);
        });

        for (var r = function r(n) {
          var r = n + 1;
          t.getRestrictions(r).forEach(function (t) {
            var r = t.restrictionType.toString(),
                o = t.purposeId.toString(),
                i = e[o].substr(0, n),
                s = e[o].substr(n + 1);
            e[o] = i + r + s;
          });
        }, o = 0; o < n; o++) {
          r(o);
        }
      }

      return e;
    }, e;
  }(n(133).TCData);

  e.InAppTCData = u;
}, function (t, e, n) {
  "use strict";

  var _r9,
      o = this && this.__extends || (_r9 = function r(t, e) {
    return (_r9 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r9(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = n(31),
      s = function (t) {
    function e() {
      var e = t.call(this) || this;
      return e.cmpLoaded = !0, e.cmpStatus = i.CmpApiModel.cmpStatus, e.displayStatus = i.CmpApiModel.displayStatus, e.apiVersion = "" + i.CmpApiModel.apiVersion, i.CmpApiModel.tcModel && i.CmpApiModel.tcModel.vendorListVersion && (e.gvlVersion = +i.CmpApiModel.tcModel.vendorListVersion), e;
    }

    return o(e, t), e;
  }(n(69).Response);

  e.Ping = s;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(31),
      o = n(70),
      i = n(333),
      s = n(10),
      u = function () {
    function t(t, e, n, o) {
      void 0 === n && (n = !1), this.throwIfInvalidInt(t, "cmpId", 2), this.throwIfInvalidInt(e, "cmpVersion", 0), r.CmpApiModel.cmpId = t, r.CmpApiModel.cmpVersion = e, this.isServiceSpecific = !!n, this.callResponder = new i.CallResponder(o);
    }

    return Object.defineProperty(t.prototype, "tcModel", {
      set: function set(t) {
        console.error("@iabtcf/cmpapi: As of v1.0.0-beta.21 setting tcModel via CmpApi.tcModel is deprecated.  Use cmpApi.update(tcString, uiVisible) instead"), console.log("  see: https://github.com/InteractiveAdvertisingBureau/iabtcf-es/tree/master/modules/cmpapi#cmpapi-examples");
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(t.prototype, "tcString", {
      set: function set(t) {
        console.error("@iabtcf/cmpapi: As of v1.0.0-beta.21 setting tcString via CmpApi.tcString is deprecated.  Use cmpApi.update(tcString, uiVisible) instead"), console.log("  see: https://github.com/InteractiveAdvertisingBureau/iabtcf-es/tree/master/modules/cmpapi#cmpapi-examples");
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(t.prototype, "uiVisible", {
      set: function set(t) {
        console.error("@iabtcf/cmpapi: As of v1.0.0-beta.21 setting uiVisible via CmpApi.uiVisible is deprecated.  Use cmpApi.update(tcString, uiVisible) instead"), console.log("  see: https://github.com/InteractiveAdvertisingBureau/iabtcf-es/tree/master/modules/cmpapi#cmpapi-examples");
      },
      enumerable: !0,
      configurable: !0
    }), t.prototype.throwIfInvalidInt = function (t, e, n) {
      if (!("number" == typeof t && Number.isInteger(t) && t >= n)) throw new Error("Invalid " + e + ": " + t);
    }, t.prototype.update = function (t, e) {
      if (void 0 === e && (e = !1), r.CmpApiModel.disabled) throw new Error("CmpApi Disabled");
      r.CmpApiModel.cmpStatus = o.CmpStatus.LOADED, e ? (r.CmpApiModel.displayStatus = o.DisplayStatus.VISIBLE, r.CmpApiModel.eventStatus = o.EventStatus.CMP_UI_SHOWN) : void 0 === r.CmpApiModel.tcModel ? (r.CmpApiModel.displayStatus = o.DisplayStatus.DISABLED, r.CmpApiModel.eventStatus = o.EventStatus.TC_LOADED) : (r.CmpApiModel.displayStatus = o.DisplayStatus.HIDDEN, r.CmpApiModel.eventStatus = o.EventStatus.USER_ACTION_COMPLETE), null === t ? (r.CmpApiModel.gdprApplies = !1, r.CmpApiModel.tcModel = null) : (r.CmpApiModel.gdprApplies = !0, "" === t ? (r.CmpApiModel.tcModel = new s.TCModel(), r.CmpApiModel.tcModel.cmpId = r.CmpApiModel.cmpId, r.CmpApiModel.tcModel.cmpVersion = r.CmpApiModel.cmpVersion) : r.CmpApiModel.tcModel = s.TCString.decode(t), r.CmpApiModel.tcModel.isServiceSpecific = this.isServiceSpecific, r.CmpApiModel.tcString = t), r.CmpApiModel.eventQueue.exec(), this.callResponder.purgeQueuedCalls();
    }, t.prototype.disable = function () {
      r.CmpApiModel.disabled = !0, r.CmpApiModel.cmpStatus = o.CmpStatus.ERROR;
    }, t;
  }();

  e.CmpApi = u;
}, function (t, e, n) {
  "use strict";

  var r = this && this.__read || function (t, e) {
    var n = "function" == typeof Symbol && t[Symbol.iterator];
    if (!n) return t;
    var r,
        o,
        i = n.call(t),
        s = [];

    try {
      for (; (void 0 === e || e-- > 0) && !(r = i.next()).done;) {
        s.push(r.value);
      }
    } catch (t) {
      o = {
        error: t
      };
    } finally {
      try {
        r && !r.done && (n = i.return) && n.call(i);
      } finally {
        if (o) throw o.error;
      }
    }

    return s;
  },
      o = this && this.__spread || function () {
    for (var t = [], e = 0; e < arguments.length; e++) {
      t = t.concat(r(arguments[e]));
    }

    return t;
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = n(334),
      s = n(31),
      u = n(97),
      c = n(359),
      a = function () {
    function t(t) {
      this.API_FUNCTION_NAME = "__tcfapi", this.customCommands = t;

      try {
        this.queuedCalls = window[this.API_FUNCTION_NAME]();
      } catch (t) {} finally {
        window[this.API_FUNCTION_NAME] = this.apiCall.bind(this);
      }
    }

    return t.prototype.apiCall = function (t, e, n) {
      for (var r, a = [], f = 3; f < arguments.length; f++) {
        a[f - 3] = arguments[f];
      }

      if ("string" != typeof t) n("invalid command: " + t, !1);else if (2 != e) n("unsupported version: " + e, !1);else {
        if ("function" != typeof n) throw new Error("invalid callback function");
        s.CmpApiModel.disabled ? new c.DisabledCommand(n) : this.isKnownCommand(t) ? t === u.TCFCommands.PING ? new i.CommandMap[t](n, a[0]) : this.customCommands && this.customCommands[t] ? (r = this.customCommands)[t].apply(r, o([n], a)) : void 0 === s.CmpApiModel.tcModel ? this.queuedCalls.push([t, e, n, a]) : new i.CommandMap[t](n, a[0]) : n('CmpApi does not support the "' + t + '" command', !1);
      }
    }, t.prototype.purgeQueuedCalls = function () {
      if (this.queuedCalls) {
        var t = this.apiCall.bind(this);
        this.queuedCalls.forEach(function (e) {
          var n = r(e, 4),
              i = n[0],
              s = n[1],
              u = n[2],
              c = n[3];
          void 0 !== c ? t.apply(void 0, o([i, s, u], c)) : t(i, s, u);
        }), delete this.queuedCalls;
      }
    }, t.prototype.isKnownCommand = function (t) {
      return void 0 !== this.customCommands && void 0 !== this.customCommands[t] || void 0 !== i.CommandMap[t];
    }, t;
  }();

  e.CallResponder = a;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(335),
      o = n(71),
      i = n(336),
      s = n(337),
      u = n(357),
      c = n(358),
      a = n(97),
      f = function () {
    function t() {}

    var e, n, f, l, p, h;
    return e = a.TCFCommands.PING, n = a.TCFCommands.GET_TC_DATA, f = a.TCFCommands.GET_IN_APP_TC_DATA, l = a.TCFCommands.GET_VENDOR_LIST, p = a.TCFCommands.ADD_EVENT_LISTENER, h = a.TCFCommands.REMOVE_EVENT_LISTENER, t[e] = r.PingCommand, t[n] = o.GetTCDataCommand, t[f] = i.GetInAppTCDataCommand, t[l] = s.GetVendorListCommand, t[p] = u.AddEventListenerCommand, t[h] = c.RemoveEventListenerCommand, t;
  }();

  e.CommandMap = f;
}, function (t, e, n) {
  "use strict";

  var _r10,
      o = this && this.__extends || (_r10 = function r(t, e) {
    return (_r10 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r10(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(54),
      c = function (t) {
    function e() {
      return null !== t && t.apply(this, arguments) || this;
    }

    return o(e, t), e.prototype.success = function () {
      return i(this, void 0, void 0, function () {
        return s(this, function (t) {
          return (0, this.callback)(new u.Ping()), [2];
        });
      });
    }, e;
  }(n(55).Command);

  e.PingCommand = c;
}, function (t, e, n) {
  "use strict";

  var _r11,
      o = this && this.__extends || (_r11 = function r(t, e) {
    return (_r11 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r11(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(71),
      c = n(54),
      a = function (t) {
    function e() {
      return null !== t && t.apply(this, arguments) || this;
    }

    return o(e, t), e.prototype.success = function () {
      return i(this, void 0, void 0, function () {
        return s(this, function (t) {
          return (0, this.callback)(new c.InAppTCData(this.param), !0), [2];
        });
      });
    }, e;
  }(u.GetTCDataCommand);

  e.GetInAppTCDataCommand = a;
}, function (t, e, n) {
  "use strict";

  var _r12,
      o = this && this.__extends || (_r12 = function r(t, e) {
    return (_r12 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r12(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(31),
      c = n(55),
      a = n(10),
      f = function (t) {
    function e() {
      return null !== t && t.apply(this, arguments) || this;
    }

    return o(e, t), e.prototype.success = function () {
      return i(this, void 0, void 0, function () {
        var t, e;
        return s(this, function (n) {
          switch (n.label) {
            case 0:
              t = this.callback, void 0 === this.param && (this.param = u.CmpApiModel.tcModel.vendorListVersion), e = new a.GVL(this.param), n.label = 1;

            case 1:
              return n.trys.push([1, 3,, 4]), [4, e.readyPromise];

            case 2:
              return n.sent(), t(e.getJson(), !0), [3, 4];

            case 3:
              return n.sent(), this.fail(), [3, 4];

            case 4:
              return [2];
          }
        });
      });
    }, e.prototype.isValid = function () {
      var t = !0;
      return void 0 !== this.param && (t = ("string" == typeof this.param || "number" == typeof this.param) && (Number.isInteger(+this.param) && +this.param > 0 || "LATEST" === this.param)), t;
    }, e;
  }(c.Command);

  e.GetVendorListCommand = f;
}, function (t, e, n) {
  "use strict";

  (function (t) {
    /*!
     * The buffer module from node.js, for the browser.
     *
     * @author   Feross Aboukhadijeh <http://feross.org>
     * @license  MIT
     */
    var r = n(340),
        o = n(341),
        i = n(342);

    function s() {
      return c.TYPED_ARRAY_SUPPORT ? 2147483647 : 1073741823;
    }

    function u(t, e) {
      if (s() < e) throw new RangeError("Invalid typed array length");
      return c.TYPED_ARRAY_SUPPORT ? (t = new Uint8Array(e)).__proto__ = c.prototype : (null === t && (t = new c(e)), t.length = e), t;
    }

    function c(t, e, n) {
      if (!(c.TYPED_ARRAY_SUPPORT || this instanceof c)) return new c(t, e, n);

      if ("number" == typeof t) {
        if ("string" == typeof e) throw new Error("If encoding is specified then the first argument must be a string");
        return l(this, t);
      }

      return a(this, t, e, n);
    }

    function a(t, e, n, r) {
      if ("number" == typeof e) throw new TypeError('"value" argument must not be a number');
      return "undefined" != typeof ArrayBuffer && e instanceof ArrayBuffer ? function (t, e, n, r) {
        if (e.byteLength, n < 0 || e.byteLength < n) throw new RangeError("'offset' is out of bounds");
        if (e.byteLength < n + (r || 0)) throw new RangeError("'length' is out of bounds");
        e = void 0 === n && void 0 === r ? new Uint8Array(e) : void 0 === r ? new Uint8Array(e, n) : new Uint8Array(e, n, r);
        c.TYPED_ARRAY_SUPPORT ? (t = e).__proto__ = c.prototype : t = p(t, e);
        return t;
      }(t, e, n, r) : "string" == typeof e ? function (t, e, n) {
        "string" == typeof n && "" !== n || (n = "utf8");
        if (!c.isEncoding(n)) throw new TypeError('"encoding" must be a valid string encoding');
        var r = 0 | d(e, n),
            o = (t = u(t, r)).write(e, n);
        o !== r && (t = t.slice(0, o));
        return t;
      }(t, e, n) : function (t, e) {
        if (c.isBuffer(e)) {
          var n = 0 | h(e.length);
          return 0 === (t = u(t, n)).length || e.copy(t, 0, 0, n), t;
        }

        if (e) {
          if ("undefined" != typeof ArrayBuffer && e.buffer instanceof ArrayBuffer || "length" in e) return "number" != typeof e.length || (r = e.length) != r ? u(t, 0) : p(t, e);
          if ("Buffer" === e.type && i(e.data)) return p(t, e.data);
        }

        var r;
        throw new TypeError("First argument must be a string, Buffer, ArrayBuffer, Array, or array-like object.");
      }(t, e);
    }

    function f(t) {
      if ("number" != typeof t) throw new TypeError('"size" argument must be a number');
      if (t < 0) throw new RangeError('"size" argument must not be negative');
    }

    function l(t, e) {
      if (f(e), t = u(t, e < 0 ? 0 : 0 | h(e)), !c.TYPED_ARRAY_SUPPORT) for (var n = 0; n < e; ++n) {
        t[n] = 0;
      }
      return t;
    }

    function p(t, e) {
      var n = e.length < 0 ? 0 : 0 | h(e.length);
      t = u(t, n);

      for (var r = 0; r < n; r += 1) {
        t[r] = 255 & e[r];
      }

      return t;
    }

    function h(t) {
      if (t >= s()) throw new RangeError("Attempt to allocate Buffer larger than maximum size: 0x" + s().toString(16) + " bytes");
      return 0 | t;
    }

    function d(t, e) {
      if (c.isBuffer(t)) return t.length;
      if ("undefined" != typeof ArrayBuffer && "function" == typeof ArrayBuffer.isView && (ArrayBuffer.isView(t) || t instanceof ArrayBuffer)) return t.byteLength;
      "string" != typeof t && (t = "" + t);
      var n = t.length;
      if (0 === n) return 0;

      for (var r = !1;;) {
        switch (e) {
          case "ascii":
          case "latin1":
          case "binary":
            return n;

          case "utf8":
          case "utf-8":
          case void 0:
            return k(t).length;

          case "ucs2":
          case "ucs-2":
          case "utf16le":
          case "utf-16le":
            return 2 * n;

          case "hex":
            return n >>> 1;

          case "base64":
            return U(t).length;

          default:
            if (r) return k(t).length;
            e = ("" + e).toLowerCase(), r = !0;
        }
      }
    }

    function v(t, e, n) {
      var r = !1;
      if ((void 0 === e || e < 0) && (e = 0), e > this.length) return "";
      if ((void 0 === n || n > this.length) && (n = this.length), n <= 0) return "";
      if ((n >>>= 0) <= (e >>>= 0)) return "";

      for (t || (t = "utf8");;) {
        switch (t) {
          case "hex":
            return x(this, e, n);

          case "utf8":
          case "utf-8":
            return P(this, e, n);

          case "ascii":
            return I(this, e, n);

          case "latin1":
          case "binary":
            return C(this, e, n);

          case "base64":
            return A(this, e, n);

          case "ucs2":
          case "ucs-2":
          case "utf16le":
          case "utf-16le":
            return L(this, e, n);

          default:
            if (r) throw new TypeError("Unknown encoding: " + t);
            t = (t + "").toLowerCase(), r = !0;
        }
      }
    }

    function y(t, e, n) {
      var r = t[e];
      t[e] = t[n], t[n] = r;
    }

    function g(t, e, n, r, o) {
      if (0 === t.length) return -1;

      if ("string" == typeof n ? (r = n, n = 0) : n > 2147483647 ? n = 2147483647 : n < -2147483648 && (n = -2147483648), n = +n, isNaN(n) && (n = o ? 0 : t.length - 1), n < 0 && (n = t.length + n), n >= t.length) {
        if (o) return -1;
        n = t.length - 1;
      } else if (n < 0) {
        if (!o) return -1;
        n = 0;
      }

      if ("string" == typeof e && (e = c.from(e, r)), c.isBuffer(e)) return 0 === e.length ? -1 : m(t, e, n, r, o);
      if ("number" == typeof e) return e &= 255, c.TYPED_ARRAY_SUPPORT && "function" == typeof Uint8Array.prototype.indexOf ? o ? Uint8Array.prototype.indexOf.call(t, e, n) : Uint8Array.prototype.lastIndexOf.call(t, e, n) : m(t, [e], n, r, o);
      throw new TypeError("val must be string, number or Buffer");
    }

    function m(t, e, n, r, o) {
      var i,
          s = 1,
          u = t.length,
          c = e.length;

      if (void 0 !== r && ("ucs2" === (r = String(r).toLowerCase()) || "ucs-2" === r || "utf16le" === r || "utf-16le" === r)) {
        if (t.length < 2 || e.length < 2) return -1;
        s = 2, u /= 2, c /= 2, n /= 2;
      }

      function a(t, e) {
        return 1 === s ? t[e] : t.readUInt16BE(e * s);
      }

      if (o) {
        var f = -1;

        for (i = n; i < u; i++) {
          if (a(t, i) === a(e, -1 === f ? 0 : i - f)) {
            if (-1 === f && (f = i), i - f + 1 === c) return f * s;
          } else -1 !== f && (i -= i - f), f = -1;
        }
      } else for (n + c > u && (n = u - c), i = n; i >= 0; i--) {
        for (var l = !0, p = 0; p < c; p++) {
          if (a(t, i + p) !== a(e, p)) {
            l = !1;
            break;
          }
        }

        if (l) return i;
      }

      return -1;
    }

    function b(t, e, n, r) {
      n = Number(n) || 0;
      var o = t.length - n;
      r ? (r = Number(r)) > o && (r = o) : r = o;
      var i = e.length;
      if (i % 2 != 0) throw new TypeError("Invalid hex string");
      r > i / 2 && (r = i / 2);

      for (var s = 0; s < r; ++s) {
        var u = parseInt(e.substr(2 * s, 2), 16);
        if (isNaN(u)) return s;
        t[n + s] = u;
      }

      return s;
    }

    function _(t, e, n, r) {
      return G(k(e, t.length - n), t, n, r);
    }

    function w(t, e, n, r) {
      return G(function (t) {
        for (var e = [], n = 0; n < t.length; ++n) {
          e.push(255 & t.charCodeAt(n));
        }

        return e;
      }(e), t, n, r);
    }

    function E(t, e, n, r) {
      return w(t, e, n, r);
    }

    function S(t, e, n, r) {
      return G(U(e), t, n, r);
    }

    function O(t, e, n, r) {
      return G(function (t, e) {
        for (var n, r, o, i = [], s = 0; s < t.length && !((e -= 2) < 0); ++s) {
          n = t.charCodeAt(s), r = n >> 8, o = n % 256, i.push(o), i.push(r);
        }

        return i;
      }(e, t.length - n), t, n, r);
    }

    function A(t, e, n) {
      return 0 === e && n === t.length ? r.fromByteArray(t) : r.fromByteArray(t.slice(e, n));
    }

    function P(t, e, n) {
      n = Math.min(t.length, n);

      for (var r = [], o = e; o < n;) {
        var i,
            s,
            u,
            c,
            a = t[o],
            f = null,
            l = a > 239 ? 4 : a > 223 ? 3 : a > 191 ? 2 : 1;
        if (o + l <= n) switch (l) {
          case 1:
            a < 128 && (f = a);
            break;

          case 2:
            128 == (192 & (i = t[o + 1])) && (c = (31 & a) << 6 | 63 & i) > 127 && (f = c);
            break;

          case 3:
            i = t[o + 1], s = t[o + 2], 128 == (192 & i) && 128 == (192 & s) && (c = (15 & a) << 12 | (63 & i) << 6 | 63 & s) > 2047 && (c < 55296 || c > 57343) && (f = c);
            break;

          case 4:
            i = t[o + 1], s = t[o + 2], u = t[o + 3], 128 == (192 & i) && 128 == (192 & s) && 128 == (192 & u) && (c = (15 & a) << 18 | (63 & i) << 12 | (63 & s) << 6 | 63 & u) > 65535 && c < 1114112 && (f = c);
        }
        null === f ? (f = 65533, l = 1) : f > 65535 && (f -= 65536, r.push(f >>> 10 & 1023 | 55296), f = 56320 | 1023 & f), r.push(f), o += l;
      }

      return function (t) {
        var e = t.length;
        if (e <= 4096) return String.fromCharCode.apply(String, t);
        var n = "",
            r = 0;

        for (; r < e;) {
          n += String.fromCharCode.apply(String, t.slice(r, r += 4096));
        }

        return n;
      }(r);
    }

    e.Buffer = c, e.SlowBuffer = function (t) {
      +t != t && (t = 0);
      return c.alloc(+t);
    }, e.INSPECT_MAX_BYTES = 50, c.TYPED_ARRAY_SUPPORT = void 0 !== t.TYPED_ARRAY_SUPPORT ? t.TYPED_ARRAY_SUPPORT : function () {
      try {
        var t = new Uint8Array(1);
        return t.__proto__ = {
          __proto__: Uint8Array.prototype,
          foo: function foo() {
            return 42;
          }
        }, 42 === t.foo() && "function" == typeof t.subarray && 0 === t.subarray(1, 1).byteLength;
      } catch (t) {
        return !1;
      }
    }(), e.kMaxLength = s(), c.poolSize = 8192, c._augment = function (t) {
      return t.__proto__ = c.prototype, t;
    }, c.from = function (t, e, n) {
      return a(null, t, e, n);
    }, c.TYPED_ARRAY_SUPPORT && (c.prototype.__proto__ = Uint8Array.prototype, c.__proto__ = Uint8Array, "undefined" != typeof Symbol && Symbol.species && c[Symbol.species] === c && Object.defineProperty(c, Symbol.species, {
      value: null,
      configurable: !0
    })), c.alloc = function (t, e, n) {
      return function (t, e, n, r) {
        return f(e), e <= 0 ? u(t, e) : void 0 !== n ? "string" == typeof r ? u(t, e).fill(n, r) : u(t, e).fill(n) : u(t, e);
      }(null, t, e, n);
    }, c.allocUnsafe = function (t) {
      return l(null, t);
    }, c.allocUnsafeSlow = function (t) {
      return l(null, t);
    }, c.isBuffer = function (t) {
      return !(null == t || !t._isBuffer);
    }, c.compare = function (t, e) {
      if (!c.isBuffer(t) || !c.isBuffer(e)) throw new TypeError("Arguments must be Buffers");
      if (t === e) return 0;

      for (var n = t.length, r = e.length, o = 0, i = Math.min(n, r); o < i; ++o) {
        if (t[o] !== e[o]) {
          n = t[o], r = e[o];
          break;
        }
      }

      return n < r ? -1 : r < n ? 1 : 0;
    }, c.isEncoding = function (t) {
      switch (String(t).toLowerCase()) {
        case "hex":
        case "utf8":
        case "utf-8":
        case "ascii":
        case "latin1":
        case "binary":
        case "base64":
        case "ucs2":
        case "ucs-2":
        case "utf16le":
        case "utf-16le":
          return !0;

        default:
          return !1;
      }
    }, c.concat = function (t, e) {
      if (!i(t)) throw new TypeError('"list" argument must be an Array of Buffers');
      if (0 === t.length) return c.alloc(0);
      var n;
      if (void 0 === e) for (e = 0, n = 0; n < t.length; ++n) {
        e += t[n].length;
      }
      var r = c.allocUnsafe(e),
          o = 0;

      for (n = 0; n < t.length; ++n) {
        var s = t[n];
        if (!c.isBuffer(s)) throw new TypeError('"list" argument must be an Array of Buffers');
        s.copy(r, o), o += s.length;
      }

      return r;
    }, c.byteLength = d, c.prototype._isBuffer = !0, c.prototype.swap16 = function () {
      var t = this.length;
      if (t % 2 != 0) throw new RangeError("Buffer size must be a multiple of 16-bits");

      for (var e = 0; e < t; e += 2) {
        y(this, e, e + 1);
      }

      return this;
    }, c.prototype.swap32 = function () {
      var t = this.length;
      if (t % 4 != 0) throw new RangeError("Buffer size must be a multiple of 32-bits");

      for (var e = 0; e < t; e += 4) {
        y(this, e, e + 3), y(this, e + 1, e + 2);
      }

      return this;
    }, c.prototype.swap64 = function () {
      var t = this.length;
      if (t % 8 != 0) throw new RangeError("Buffer size must be a multiple of 64-bits");

      for (var e = 0; e < t; e += 8) {
        y(this, e, e + 7), y(this, e + 1, e + 6), y(this, e + 2, e + 5), y(this, e + 3, e + 4);
      }

      return this;
    }, c.prototype.toString = function () {
      var t = 0 | this.length;
      return 0 === t ? "" : 0 === arguments.length ? P(this, 0, t) : v.apply(this, arguments);
    }, c.prototype.equals = function (t) {
      if (!c.isBuffer(t)) throw new TypeError("Argument must be a Buffer");
      return this === t || 0 === c.compare(this, t);
    }, c.prototype.inspect = function () {
      var t = "",
          n = e.INSPECT_MAX_BYTES;
      return this.length > 0 && (t = this.toString("hex", 0, n).match(/.{2}/g).join(" "), this.length > n && (t += " ... ")), "<Buffer " + t + ">";
    }, c.prototype.compare = function (t, e, n, r, o) {
      if (!c.isBuffer(t)) throw new TypeError("Argument must be a Buffer");
      if (void 0 === e && (e = 0), void 0 === n && (n = t ? t.length : 0), void 0 === r && (r = 0), void 0 === o && (o = this.length), e < 0 || n > t.length || r < 0 || o > this.length) throw new RangeError("out of range index");
      if (r >= o && e >= n) return 0;
      if (r >= o) return -1;
      if (e >= n) return 1;
      if (this === t) return 0;

      for (var i = (o >>>= 0) - (r >>>= 0), s = (n >>>= 0) - (e >>>= 0), u = Math.min(i, s), a = this.slice(r, o), f = t.slice(e, n), l = 0; l < u; ++l) {
        if (a[l] !== f[l]) {
          i = a[l], s = f[l];
          break;
        }
      }

      return i < s ? -1 : s < i ? 1 : 0;
    }, c.prototype.includes = function (t, e, n) {
      return -1 !== this.indexOf(t, e, n);
    }, c.prototype.indexOf = function (t, e, n) {
      return g(this, t, e, n, !0);
    }, c.prototype.lastIndexOf = function (t, e, n) {
      return g(this, t, e, n, !1);
    }, c.prototype.write = function (t, e, n, r) {
      if (void 0 === e) r = "utf8", n = this.length, e = 0;else if (void 0 === n && "string" == typeof e) r = e, n = this.length, e = 0;else {
        if (!isFinite(e)) throw new Error("Buffer.write(string, encoding, offset[, length]) is no longer supported");
        e |= 0, isFinite(n) ? (n |= 0, void 0 === r && (r = "utf8")) : (r = n, n = void 0);
      }
      var o = this.length - e;
      if ((void 0 === n || n > o) && (n = o), t.length > 0 && (n < 0 || e < 0) || e > this.length) throw new RangeError("Attempt to write outside buffer bounds");
      r || (r = "utf8");

      for (var i = !1;;) {
        switch (r) {
          case "hex":
            return b(this, t, e, n);

          case "utf8":
          case "utf-8":
            return _(this, t, e, n);

          case "ascii":
            return w(this, t, e, n);

          case "latin1":
          case "binary":
            return E(this, t, e, n);

          case "base64":
            return S(this, t, e, n);

          case "ucs2":
          case "ucs-2":
          case "utf16le":
          case "utf-16le":
            return O(this, t, e, n);

          default:
            if (i) throw new TypeError("Unknown encoding: " + r);
            r = ("" + r).toLowerCase(), i = !0;
        }
      }
    }, c.prototype.toJSON = function () {
      return {
        type: "Buffer",
        data: Array.prototype.slice.call(this._arr || this, 0)
      };
    };

    function I(t, e, n) {
      var r = "";
      n = Math.min(t.length, n);

      for (var o = e; o < n; ++o) {
        r += String.fromCharCode(127 & t[o]);
      }

      return r;
    }

    function C(t, e, n) {
      var r = "";
      n = Math.min(t.length, n);

      for (var o = e; o < n; ++o) {
        r += String.fromCharCode(t[o]);
      }

      return r;
    }

    function x(t, e, n) {
      var r = t.length;
      (!e || e < 0) && (e = 0), (!n || n < 0 || n > r) && (n = r);

      for (var o = "", i = e; i < n; ++i) {
        o += D(t[i]);
      }

      return o;
    }

    function L(t, e, n) {
      for (var r = t.slice(e, n), o = "", i = 0; i < r.length; i += 2) {
        o += String.fromCharCode(r[i] + 256 * r[i + 1]);
      }

      return o;
    }

    function T(t, e, n) {
      if (t % 1 != 0 || t < 0) throw new RangeError("offset is not uint");
      if (t + e > n) throw new RangeError("Trying to access beyond buffer length");
    }

    function M(t, e, n, r, o, i) {
      if (!c.isBuffer(t)) throw new TypeError('"buffer" argument must be a Buffer instance');
      if (e > o || e < i) throw new RangeError('"value" argument is out of bounds');
      if (n + r > t.length) throw new RangeError("Index out of range");
    }

    function F(t, e, n, r) {
      e < 0 && (e = 65535 + e + 1);

      for (var o = 0, i = Math.min(t.length - n, 2); o < i; ++o) {
        t[n + o] = (e & 255 << 8 * (r ? o : 1 - o)) >>> 8 * (r ? o : 1 - o);
      }
    }

    function R(t, e, n, r) {
      e < 0 && (e = 4294967295 + e + 1);

      for (var o = 0, i = Math.min(t.length - n, 4); o < i; ++o) {
        t[n + o] = e >>> 8 * (r ? o : 3 - o) & 255;
      }
    }

    function V(t, e, n, r, o, i) {
      if (n + r > t.length) throw new RangeError("Index out of range");
      if (n < 0) throw new RangeError("Index out of range");
    }

    function j(t, e, n, r, i) {
      return i || V(t, 0, n, 4), o.write(t, e, n, r, 23, 4), n + 4;
    }

    function N(t, e, n, r, i) {
      return i || V(t, 0, n, 8), o.write(t, e, n, r, 52, 8), n + 8;
    }

    c.prototype.slice = function (t, e) {
      var n,
          r = this.length;
      if ((t = ~~t) < 0 ? (t += r) < 0 && (t = 0) : t > r && (t = r), (e = void 0 === e ? r : ~~e) < 0 ? (e += r) < 0 && (e = 0) : e > r && (e = r), e < t && (e = t), c.TYPED_ARRAY_SUPPORT) (n = this.subarray(t, e)).__proto__ = c.prototype;else {
        var o = e - t;
        n = new c(o, void 0);

        for (var i = 0; i < o; ++i) {
          n[i] = this[i + t];
        }
      }
      return n;
    }, c.prototype.readUIntLE = function (t, e, n) {
      t |= 0, e |= 0, n || T(t, e, this.length);

      for (var r = this[t], o = 1, i = 0; ++i < e && (o *= 256);) {
        r += this[t + i] * o;
      }

      return r;
    }, c.prototype.readUIntBE = function (t, e, n) {
      t |= 0, e |= 0, n || T(t, e, this.length);

      for (var r = this[t + --e], o = 1; e > 0 && (o *= 256);) {
        r += this[t + --e] * o;
      }

      return r;
    }, c.prototype.readUInt8 = function (t, e) {
      return e || T(t, 1, this.length), this[t];
    }, c.prototype.readUInt16LE = function (t, e) {
      return e || T(t, 2, this.length), this[t] | this[t + 1] << 8;
    }, c.prototype.readUInt16BE = function (t, e) {
      return e || T(t, 2, this.length), this[t] << 8 | this[t + 1];
    }, c.prototype.readUInt32LE = function (t, e) {
      return e || T(t, 4, this.length), (this[t] | this[t + 1] << 8 | this[t + 2] << 16) + 16777216 * this[t + 3];
    }, c.prototype.readUInt32BE = function (t, e) {
      return e || T(t, 4, this.length), 16777216 * this[t] + (this[t + 1] << 16 | this[t + 2] << 8 | this[t + 3]);
    }, c.prototype.readIntLE = function (t, e, n) {
      t |= 0, e |= 0, n || T(t, e, this.length);

      for (var r = this[t], o = 1, i = 0; ++i < e && (o *= 256);) {
        r += this[t + i] * o;
      }

      return r >= (o *= 128) && (r -= Math.pow(2, 8 * e)), r;
    }, c.prototype.readIntBE = function (t, e, n) {
      t |= 0, e |= 0, n || T(t, e, this.length);

      for (var r = e, o = 1, i = this[t + --r]; r > 0 && (o *= 256);) {
        i += this[t + --r] * o;
      }

      return i >= (o *= 128) && (i -= Math.pow(2, 8 * e)), i;
    }, c.prototype.readInt8 = function (t, e) {
      return e || T(t, 1, this.length), 128 & this[t] ? -1 * (255 - this[t] + 1) : this[t];
    }, c.prototype.readInt16LE = function (t, e) {
      e || T(t, 2, this.length);
      var n = this[t] | this[t + 1] << 8;
      return 32768 & n ? 4294901760 | n : n;
    }, c.prototype.readInt16BE = function (t, e) {
      e || T(t, 2, this.length);
      var n = this[t + 1] | this[t] << 8;
      return 32768 & n ? 4294901760 | n : n;
    }, c.prototype.readInt32LE = function (t, e) {
      return e || T(t, 4, this.length), this[t] | this[t + 1] << 8 | this[t + 2] << 16 | this[t + 3] << 24;
    }, c.prototype.readInt32BE = function (t, e) {
      return e || T(t, 4, this.length), this[t] << 24 | this[t + 1] << 16 | this[t + 2] << 8 | this[t + 3];
    }, c.prototype.readFloatLE = function (t, e) {
      return e || T(t, 4, this.length), o.read(this, t, !0, 23, 4);
    }, c.prototype.readFloatBE = function (t, e) {
      return e || T(t, 4, this.length), o.read(this, t, !1, 23, 4);
    }, c.prototype.readDoubleLE = function (t, e) {
      return e || T(t, 8, this.length), o.read(this, t, !0, 52, 8);
    }, c.prototype.readDoubleBE = function (t, e) {
      return e || T(t, 8, this.length), o.read(this, t, !1, 52, 8);
    }, c.prototype.writeUIntLE = function (t, e, n, r) {
      (t = +t, e |= 0, n |= 0, r) || M(this, t, e, n, Math.pow(2, 8 * n) - 1, 0);
      var o = 1,
          i = 0;

      for (this[e] = 255 & t; ++i < n && (o *= 256);) {
        this[e + i] = t / o & 255;
      }

      return e + n;
    }, c.prototype.writeUIntBE = function (t, e, n, r) {
      (t = +t, e |= 0, n |= 0, r) || M(this, t, e, n, Math.pow(2, 8 * n) - 1, 0);
      var o = n - 1,
          i = 1;

      for (this[e + o] = 255 & t; --o >= 0 && (i *= 256);) {
        this[e + o] = t / i & 255;
      }

      return e + n;
    }, c.prototype.writeUInt8 = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 1, 255, 0), c.TYPED_ARRAY_SUPPORT || (t = Math.floor(t)), this[e] = 255 & t, e + 1;
    }, c.prototype.writeUInt16LE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 2, 65535, 0), c.TYPED_ARRAY_SUPPORT ? (this[e] = 255 & t, this[e + 1] = t >>> 8) : F(this, t, e, !0), e + 2;
    }, c.prototype.writeUInt16BE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 2, 65535, 0), c.TYPED_ARRAY_SUPPORT ? (this[e] = t >>> 8, this[e + 1] = 255 & t) : F(this, t, e, !1), e + 2;
    }, c.prototype.writeUInt32LE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 4, 4294967295, 0), c.TYPED_ARRAY_SUPPORT ? (this[e + 3] = t >>> 24, this[e + 2] = t >>> 16, this[e + 1] = t >>> 8, this[e] = 255 & t) : R(this, t, e, !0), e + 4;
    }, c.prototype.writeUInt32BE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 4, 4294967295, 0), c.TYPED_ARRAY_SUPPORT ? (this[e] = t >>> 24, this[e + 1] = t >>> 16, this[e + 2] = t >>> 8, this[e + 3] = 255 & t) : R(this, t, e, !1), e + 4;
    }, c.prototype.writeIntLE = function (t, e, n, r) {
      if (t = +t, e |= 0, !r) {
        var o = Math.pow(2, 8 * n - 1);
        M(this, t, e, n, o - 1, -o);
      }

      var i = 0,
          s = 1,
          u = 0;

      for (this[e] = 255 & t; ++i < n && (s *= 256);) {
        t < 0 && 0 === u && 0 !== this[e + i - 1] && (u = 1), this[e + i] = (t / s >> 0) - u & 255;
      }

      return e + n;
    }, c.prototype.writeIntBE = function (t, e, n, r) {
      if (t = +t, e |= 0, !r) {
        var o = Math.pow(2, 8 * n - 1);
        M(this, t, e, n, o - 1, -o);
      }

      var i = n - 1,
          s = 1,
          u = 0;

      for (this[e + i] = 255 & t; --i >= 0 && (s *= 256);) {
        t < 0 && 0 === u && 0 !== this[e + i + 1] && (u = 1), this[e + i] = (t / s >> 0) - u & 255;
      }

      return e + n;
    }, c.prototype.writeInt8 = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 1, 127, -128), c.TYPED_ARRAY_SUPPORT || (t = Math.floor(t)), t < 0 && (t = 255 + t + 1), this[e] = 255 & t, e + 1;
    }, c.prototype.writeInt16LE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 2, 32767, -32768), c.TYPED_ARRAY_SUPPORT ? (this[e] = 255 & t, this[e + 1] = t >>> 8) : F(this, t, e, !0), e + 2;
    }, c.prototype.writeInt16BE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 2, 32767, -32768), c.TYPED_ARRAY_SUPPORT ? (this[e] = t >>> 8, this[e + 1] = 255 & t) : F(this, t, e, !1), e + 2;
    }, c.prototype.writeInt32LE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 4, 2147483647, -2147483648), c.TYPED_ARRAY_SUPPORT ? (this[e] = 255 & t, this[e + 1] = t >>> 8, this[e + 2] = t >>> 16, this[e + 3] = t >>> 24) : R(this, t, e, !0), e + 4;
    }, c.prototype.writeInt32BE = function (t, e, n) {
      return t = +t, e |= 0, n || M(this, t, e, 4, 2147483647, -2147483648), t < 0 && (t = 4294967295 + t + 1), c.TYPED_ARRAY_SUPPORT ? (this[e] = t >>> 24, this[e + 1] = t >>> 16, this[e + 2] = t >>> 8, this[e + 3] = 255 & t) : R(this, t, e, !1), e + 4;
    }, c.prototype.writeFloatLE = function (t, e, n) {
      return j(this, t, e, !0, n);
    }, c.prototype.writeFloatBE = function (t, e, n) {
      return j(this, t, e, !1, n);
    }, c.prototype.writeDoubleLE = function (t, e, n) {
      return N(this, t, e, !0, n);
    }, c.prototype.writeDoubleBE = function (t, e, n) {
      return N(this, t, e, !1, n);
    }, c.prototype.copy = function (t, e, n, r) {
      if (n || (n = 0), r || 0 === r || (r = this.length), e >= t.length && (e = t.length), e || (e = 0), r > 0 && r < n && (r = n), r === n) return 0;
      if (0 === t.length || 0 === this.length) return 0;
      if (e < 0) throw new RangeError("targetStart out of bounds");
      if (n < 0 || n >= this.length) throw new RangeError("sourceStart out of bounds");
      if (r < 0) throw new RangeError("sourceEnd out of bounds");
      r > this.length && (r = this.length), t.length - e < r - n && (r = t.length - e + n);
      var o,
          i = r - n;
      if (this === t && n < e && e < r) for (o = i - 1; o >= 0; --o) {
        t[o + e] = this[o + n];
      } else if (i < 1e3 || !c.TYPED_ARRAY_SUPPORT) for (o = 0; o < i; ++o) {
        t[o + e] = this[o + n];
      } else Uint8Array.prototype.set.call(t, this.subarray(n, n + i), e);
      return i;
    }, c.prototype.fill = function (t, e, n, r) {
      if ("string" == typeof t) {
        if ("string" == typeof e ? (r = e, e = 0, n = this.length) : "string" == typeof n && (r = n, n = this.length), 1 === t.length) {
          var o = t.charCodeAt(0);
          o < 256 && (t = o);
        }

        if (void 0 !== r && "string" != typeof r) throw new TypeError("encoding must be a string");
        if ("string" == typeof r && !c.isEncoding(r)) throw new TypeError("Unknown encoding: " + r);
      } else "number" == typeof t && (t &= 255);

      if (e < 0 || this.length < e || this.length < n) throw new RangeError("Out of range index");
      if (n <= e) return this;
      var i;
      if (e >>>= 0, n = void 0 === n ? this.length : n >>> 0, t || (t = 0), "number" == typeof t) for (i = e; i < n; ++i) {
        this[i] = t;
      } else {
        var s = c.isBuffer(t) ? t : k(new c(t, r).toString()),
            u = s.length;

        for (i = 0; i < n - e; ++i) {
          this[i + e] = s[i % u];
        }
      }
      return this;
    };
    var B = /[^+\/0-9A-Za-z-_]/g;

    function D(t) {
      return t < 16 ? "0" + t.toString(16) : t.toString(16);
    }

    function k(t, e) {
      var n;
      e = e || 1 / 0;

      for (var r = t.length, o = null, i = [], s = 0; s < r; ++s) {
        if ((n = t.charCodeAt(s)) > 55295 && n < 57344) {
          if (!o) {
            if (n > 56319) {
              (e -= 3) > -1 && i.push(239, 191, 189);
              continue;
            }

            if (s + 1 === r) {
              (e -= 3) > -1 && i.push(239, 191, 189);
              continue;
            }

            o = n;
            continue;
          }

          if (n < 56320) {
            (e -= 3) > -1 && i.push(239, 191, 189), o = n;
            continue;
          }

          n = 65536 + (o - 55296 << 10 | n - 56320);
        } else o && (e -= 3) > -1 && i.push(239, 191, 189);

        if (o = null, n < 128) {
          if ((e -= 1) < 0) break;
          i.push(n);
        } else if (n < 2048) {
          if ((e -= 2) < 0) break;
          i.push(n >> 6 | 192, 63 & n | 128);
        } else if (n < 65536) {
          if ((e -= 3) < 0) break;
          i.push(n >> 12 | 224, n >> 6 & 63 | 128, 63 & n | 128);
        } else {
          if (!(n < 1114112)) throw new Error("Invalid code point");
          if ((e -= 4) < 0) break;
          i.push(n >> 18 | 240, n >> 12 & 63 | 128, n >> 6 & 63 | 128, 63 & n | 128);
        }
      }

      return i;
    }

    function U(t) {
      return r.toByteArray(function (t) {
        if ((t = function (t) {
          return t.trim ? t.trim() : t.replace(/^\s+|\s+$/g, "");
        }(t).replace(B, "")).length < 2) return "";

        for (; t.length % 4 != 0;) {
          t += "=";
        }

        return t;
      }(t));
    }

    function G(t, e, n, r) {
      for (var o = 0; o < r && !(o + n >= e.length || o >= t.length); ++o) {
        e[o + n] = t[o];
      }

      return o;
    }
  }).call(this, n(339));
}, function (t, e) {
  var n;

  n = function () {
    return this;
  }();

  try {
    n = n || new Function("return this")();
  } catch (t) {
    "object" == (typeof window === "undefined" ? "undefined" : _typeof(window)) && (n = window);
  }

  t.exports = n;
}, function (t, e, n) {
  "use strict";

  e.byteLength = function (t) {
    var e = a(t),
        n = e[0],
        r = e[1];
    return 3 * (n + r) / 4 - r;
  }, e.toByteArray = function (t) {
    var e,
        n,
        r = a(t),
        s = r[0],
        u = r[1],
        c = new i(function (t, e, n) {
      return 3 * (e + n) / 4 - n;
    }(0, s, u)),
        f = 0,
        l = u > 0 ? s - 4 : s;

    for (n = 0; n < l; n += 4) {
      e = o[t.charCodeAt(n)] << 18 | o[t.charCodeAt(n + 1)] << 12 | o[t.charCodeAt(n + 2)] << 6 | o[t.charCodeAt(n + 3)], c[f++] = e >> 16 & 255, c[f++] = e >> 8 & 255, c[f++] = 255 & e;
    }

    2 === u && (e = o[t.charCodeAt(n)] << 2 | o[t.charCodeAt(n + 1)] >> 4, c[f++] = 255 & e);
    1 === u && (e = o[t.charCodeAt(n)] << 10 | o[t.charCodeAt(n + 1)] << 4 | o[t.charCodeAt(n + 2)] >> 2, c[f++] = e >> 8 & 255, c[f++] = 255 & e);
    return c;
  }, e.fromByteArray = function (t) {
    for (var e, n = t.length, o = n % 3, i = [], s = 0, u = n - o; s < u; s += 16383) {
      i.push(f(t, s, s + 16383 > u ? u : s + 16383));
    }

    1 === o ? (e = t[n - 1], i.push(r[e >> 2] + r[e << 4 & 63] + "==")) : 2 === o && (e = (t[n - 2] << 8) + t[n - 1], i.push(r[e >> 10] + r[e >> 4 & 63] + r[e << 2 & 63] + "="));
    return i.join("");
  };

  for (var r = [], o = [], i = "undefined" != typeof Uint8Array ? Uint8Array : Array, s = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/", u = 0, c = s.length; u < c; ++u) {
    r[u] = s[u], o[s.charCodeAt(u)] = u;
  }

  function a(t) {
    var e = t.length;
    if (e % 4 > 0) throw new Error("Invalid string. Length must be a multiple of 4");
    var n = t.indexOf("=");
    return -1 === n && (n = e), [n, n === e ? 0 : 4 - n % 4];
  }

  function f(t, e, n) {
    for (var o, i, s = [], u = e; u < n; u += 3) {
      o = (t[u] << 16 & 16711680) + (t[u + 1] << 8 & 65280) + (255 & t[u + 2]), s.push(r[(i = o) >> 18 & 63] + r[i >> 12 & 63] + r[i >> 6 & 63] + r[63 & i]);
    }

    return s.join("");
  }

  o["-".charCodeAt(0)] = 62, o["_".charCodeAt(0)] = 63;
}, function (t, e) {
  e.read = function (t, e, n, r, o) {
    var i,
        s,
        u = 8 * o - r - 1,
        c = (1 << u) - 1,
        a = c >> 1,
        f = -7,
        l = n ? o - 1 : 0,
        p = n ? -1 : 1,
        h = t[e + l];

    for (l += p, i = h & (1 << -f) - 1, h >>= -f, f += u; f > 0; i = 256 * i + t[e + l], l += p, f -= 8) {
      ;
    }

    for (s = i & (1 << -f) - 1, i >>= -f, f += r; f > 0; s = 256 * s + t[e + l], l += p, f -= 8) {
      ;
    }

    if (0 === i) i = 1 - a;else {
      if (i === c) return s ? NaN : 1 / 0 * (h ? -1 : 1);
      s += Math.pow(2, r), i -= a;
    }
    return (h ? -1 : 1) * s * Math.pow(2, i - r);
  }, e.write = function (t, e, n, r, o, i) {
    var s,
        u,
        c,
        a = 8 * i - o - 1,
        f = (1 << a) - 1,
        l = f >> 1,
        p = 23 === o ? Math.pow(2, -24) - Math.pow(2, -77) : 0,
        h = r ? 0 : i - 1,
        d = r ? 1 : -1,
        v = e < 0 || 0 === e && 1 / e < 0 ? 1 : 0;

    for (e = Math.abs(e), isNaN(e) || e === 1 / 0 ? (u = isNaN(e) ? 1 : 0, s = f) : (s = Math.floor(Math.log(e) / Math.LN2), e * (c = Math.pow(2, -s)) < 1 && (s--, c *= 2), (e += s + l >= 1 ? p / c : p * Math.pow(2, 1 - l)) * c >= 2 && (s++, c /= 2), s + l >= f ? (u = 0, s = f) : s + l >= 1 ? (u = (e * c - 1) * Math.pow(2, o), s += l) : (u = e * Math.pow(2, l - 1) * Math.pow(2, o), s = 0)); o >= 8; t[n + h] = 255 & u, h += d, u /= 256, o -= 8) {
      ;
    }

    for (s = s << o | u, a += o; a > 0; t[n + h] = 255 & s, h += d, s /= 256, a -= 8) {
      ;
    }

    t[n + h - d] |= 128 * v;
  };
}, function (t, e) {
  var n = {}.toString;

  t.exports = Array.isArray || function (t) {
    return "[object Array]" == n.call(t);
  };
}, function (t, e, n) {
  "use strict";

  var _r13,
      o = this && this.__extends || (_r13 = function r(t, e) {
    return (_r13 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r13(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = function (t) {
    function e(e) {
      var n = t.call(this, e) || this;
      return n.name = "DecodingError", n;
    }

    return o(e, t), e;
  }(Error);

  e.DecodingError = i;
}, function (t, e, n) {
  "use strict";

  var _r14,
      o = this && this.__extends || (_r14 = function r(t, e) {
    return (_r14 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r14(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = function (t) {
    function e(e) {
      var n = t.call(this, e) || this;
      return n.name = "EncodingError", n;
    }

    return o(e, t), e;
  }(Error);

  e.EncodingError = i;
}, function (t, e, n) {
  "use strict";

  var _r15,
      o = this && this.__extends || (_r15 = function r(t, e) {
    return (_r15 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r15(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = function (t) {
    function e(e) {
      var n = t.call(this, e) || this;
      return n.name = "GVLError", n;
    }

    return o(e, t), e;
  }(Error);

  e.GVLError = i;
}, function (t, e, n) {
  "use strict";

  var _r16,
      o = this && this.__extends || (_r16 = function r(t, e) {
    return (_r16 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r16(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = function (t) {
    function e(e, n, r) {
      void 0 === r && (r = "");
      var o = t.call(this, "invalid value " + n + " passed for " + e + " " + r) || this;
      return o.name = "TCModelError", o;
    }

    return o(e, t), e;
  }(Error);

  e.TCModelError = i;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = function () {
    function t() {}

    return t.prototype.has = function (e) {
      return t.langSet.has(e);
    }, t.prototype.forEach = function (e) {
      t.langSet.forEach(e);
    }, Object.defineProperty(t.prototype, "size", {
      get: function get() {
        return t.langSet.size;
      },
      enumerable: !0,
      configurable: !0
    }), t.langSet = new Set(["BG", "CA", "CS", "DA", "DE", "EL", "EN", "ES", "ET", "FI", "FR", "HR", "HU", "IT", "LT", "LV", "MT", "NL", "NO", "PL", "PT", "RO", "RU", "SK", "SL", "SV", "ZH"]), t;
  }();

  e.ConsentLanguages = r;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = function () {
    function t() {}

    return t.cmpId = "cmpId", t.cmpVersion = "cmpVersion", t.consentLanguage = "consentLanguage", t.consentScreen = "consentScreen", t.created = "created", t.supportOOB = "supportOOB", t.isServiceSpecific = "isServiceSpecific", t.lastUpdated = "lastUpdated", t.numCustomPurposes = "numCustomPurposes", t.policyVersion = "policyVersion", t.publisherCountryCode = "publisherCountryCode", t.publisherCustomConsents = "publisherCustomConsents", t.publisherCustomLegitimateInterests = "publisherCustomLegitimateInterests", t.publisherLegitimateInterests = "publisherLegitimateInterests", t.publisherConsents = "publisherConsents", t.publisherRestrictions = "publisherRestrictions", t.purposeConsents = "purposeConsents", t.purposeLegitimateInterests = "purposeLegitimateInterests", t.purposeOneTreatment = "purposeOneTreatment", t.specialFeatureOptins = "specialFeatureOptins", t.useNonStandardStacks = "useNonStandardStacks", t.vendorConsents = "vendorConsents", t.vendorLegitimateInterests = "vendorLegitimateInterests", t.vendorListVersion = "vendorListVersion", t.vendorsAllowed = "vendorsAllowed", t.vendorsDisclosed = "vendorsDisclosed", t.version = "version", t;
  }();

  e.Fields = r;
}, function (t, e, n) {
  "use strict";

  var _r17,
      o = this && this.__extends || (_r17 = function r(t, e) {
    return (_r17 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r17(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  });

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var i = n(136),
      s = n(135),
      u = n(100),
      c = function (t) {
    function e() {
      var e = null !== t && t.apply(this, arguments) || this;
      return e.bitLength = 0, e.map = new Map(), e;
    }

    return o(e, t), e.prototype.has = function (t) {
      return this.map.has(t);
    }, e.prototype.isOkToHave = function (t, e, n) {
      var r = n.toString();

      if (this.gvl) {
        if (!this.gvl.vendors || !this.gvl.vendors[r]) return !1;
        var o = this.gvl.vendors[r];
        if (o.flexiblePurposes.length) switch (t) {
          case u.RestrictionType.NOT_ALLOWED:
            return o.legIntPurposes.includes(e) || o.purposes.includes(e);

          case u.RestrictionType.REQUIRE_CONSENT:
            return o.flexiblePurposes.includes(e) && o.legIntPurposes.includes(e);

          case u.RestrictionType.REQUIRE_LI:
            return o.flexiblePurposes.includes(e) && o.purposes.includes(e);

          default:
            return !1;
        } else if (t === u.RestrictionType.NOT_ALLOWED) return o.legIntPurposes.includes(e) || o.purposes.includes(e);
      }

      return !0;
    }, e.prototype.add = function (t, e) {
      var n = this;

      if (this.isOkToHave(e.restrictionType, e.purposeId, t)) {
        var r = e.hash;
        this.has(r) || (this.map.set(r, new s.BinarySearchTree()), this.bitLength = 0), this.getRestrictions(t).forEach(function (r) {
          r.purposeId === e.purposeId && n.remove(t, r);
        }), this.map.get(r).add(t);
      }
    }, e.prototype.getVendors = function (t) {
      var e = [];

      if (t) {
        var n = t.hash;
        this.has(n) && (e = this.map.get(n).get());
      } else {
        var r = new Set();
        this.map.forEach(function (t) {
          t.get().forEach(function (t) {
            r.add(t);
          });
        }), e = Array.from(r);
      }

      return e;
    }, e.prototype.getRestrictionType = function (t, e) {
      var n;
      return this.getRestrictions(t).forEach(function (t) {
        t.purposeId === e && (void 0 === n || n > t.restrictionType) && (n = t.restrictionType);
      }), n;
    }, e.prototype.vendorHasRestriction = function (t, e) {
      for (var n = !1, r = this.getRestrictions(t), o = 0; o < r.length && !n; o++) {
        n = e.isSameAs(r[o]);
      }

      return n;
    }, e.prototype.getMaxVendorId = function () {
      var t = 0;
      return this.map.forEach(function (e) {
        t = Math.max(e.max(), t);
      }), t;
    }, e.prototype.getRestrictions = function (t) {
      var e = [];
      return this.map.forEach(function (n, r) {
        t ? n.contains(t) && e.push(i.PurposeRestriction.unHash(r)) : e.push(i.PurposeRestriction.unHash(r));
      }), e;
    }, e.prototype.getPurposes = function () {
      var t = new Set();
      return this.map.forEach(function (e, n) {
        t.add(i.PurposeRestriction.unHash(n).purposeId);
      }), Array.from(t);
    }, e.prototype.remove = function (t, e) {
      var n = e.hash,
          r = this.map.get(n);
      r && (r.remove(t), r.isEmpty() && (this.map.delete(n), this.bitLength = 0));
    }, Object.defineProperty(e.prototype, "gvl", {
      get: function get() {
        return this.gvl_;
      },
      set: function set(t) {
        var e = this;
        this.gvl_ || (this.gvl_ = t, this.numRestrictions && this.map.forEach(function (t, n) {
          var r = i.PurposeRestriction.unHash(n);
          t.get().forEach(function (n) {
            e.isOkToHave(r.restrictionType, r.purposeId, n) || t.remove(n);
          });
        }));
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.isEmpty = function () {
      return 0 === this.map.size;
    }, e.prototype.isEncodable = function () {
      return void 0 !== this.gvl_ && !this.isEmpty();
    }, Object.defineProperty(e.prototype, "numRestrictions", {
      get: function get() {
        return this.map.size;
      },
      enumerable: !0,
      configurable: !0
    }), e;
  }(n(42).Cloneable);

  e.PurposeRestrictionVector = c;
}, function (t, e, n) {
  "use strict";

  var r;
  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var o = n(137),
      i = function () {
    function t() {}

    return t.ID_TO_KEY = {
      0: o.Segment.CORE,
      1: o.Segment.VENDORS_DISCLOSED,
      2: o.Segment.VENDORS_ALLOWED,
      3: o.Segment.PUBLISHER_TC
    }, t.KEY_TO_ID = ((r = {})[o.Segment.CORE] = 0, r[o.Segment.VENDORS_DISCLOSED] = 1, r[o.Segment.VENDORS_ALLOWED] = 2, r[o.Segment.PUBLISHER_TC] = 3, r), t;
  }();

  e.SegmentIDs = i;
}, function (t, e, n) {
  "use strict";

  var _r18,
      o = this && this.__extends || (_r18 = function r(t, e) {
    return (_r18 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r18(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  },
      s = this && this.__values || function (t) {
    var e = "function" == typeof Symbol && Symbol.iterator,
        n = e && t[e],
        r = 0;
    if (n) return n.call(t);
    if (t && "number" == typeof t.length) return {
      next: function next() {
        return t && r >= t.length && (t = void 0), {
          value: t && t[r++],
          done: !t
        };
      }
    };
    throw new TypeError(e ? "Object is not iterable." : "Symbol.iterator is not defined.");
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(42),
      c = n(14),
      a = function (t) {
    function e() {
      var e = null !== t && t.apply(this, arguments) || this;
      return e.bitLength = 0, e.maxId_ = 0, e.set_ = new Set(), e;
    }

    return o(e, t), e.prototype[Symbol.iterator] = function () {
      var t;
      return i(this, function (e) {
        switch (e.label) {
          case 0:
            t = 1, e.label = 1;

          case 1:
            return t <= this.maxId ? [4, [t, this.has(t)]] : [3, 4];

          case 2:
            e.sent(), e.label = 3;

          case 3:
            return t++, [3, 1];

          case 4:
            return [2];
        }
      });
    }, Object.defineProperty(e.prototype, "maxId", {
      get: function get() {
        return this.maxId_;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.has = function (t) {
      return this.set_.has(t);
    }, e.prototype.unset = function (t) {
      var e = this;
      Array.isArray(t) ? t.forEach(function (t) {
        return e.unset(t);
      }) : (this.set_.delete(t), this.bitLength = 0, t === this.maxId && (this.maxId_ = 0, this.set_.forEach(function (t) {
        e.maxId_ = Math.max(e.maxId, t);
      })));
    }, e.prototype.set = function (t) {
      var e = this;
      if (Array.isArray(t)) t.forEach(function (t) {
        return e.set(t);
      });else {
        if (!(Number.isInteger(t) && t > 0)) throw new c.TCModelError("set()", t, "must be positive integer");
        this.set_.add(t), this.maxId_ = Math.max(this.maxId, t), this.bitLength = 0;
      }
    }, e.prototype.empty = function () {
      this.set_ = new Set();
    }, e.prototype.forEach = function (t) {
      var e, n;

      try {
        for (var r = s(this), o = r.next(); !o.done; o = r.next()) {
          var i = o.value;
          t(i[1], i[0]);
        }
      } catch (t) {
        e = {
          error: t
        };
      } finally {
        try {
          o && !o.done && (n = r.return) && n.call(r);
        } finally {
          if (e) throw e.error;
        }
      }
    }, Object.defineProperty(e.prototype, "size", {
      get: function get() {
        return this.set_.size;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.setAll = function (t) {
      var e = this;
      Object.keys(t).forEach(function (t) {
        e.set(+t);
      });
    }, e;
  }(u.Cloneable);

  e.Vector = a;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(134),
      o = n(99),
      i = n(138),
      s = n(144),
      u = n(14),
      c = n(18),
      a = function () {
    function t() {}

    return t.encode = function (t, e) {
      var n;

      try {
        n = this.fieldSequence["" + t.version][e];
      } catch (n) {
        throw new u.EncodingError("Unable to encode version: " + t.version + ", segment: " + e);
      }

      var s = "";
      return e !== c.Segment.CORE && (s = i.IntEncoder.encode(c.SegmentIDs.KEY_TO_ID[e], o.BitLength.segmentType)), n.forEach(function (n) {
        var r = t[n],
            c = o.BitLength[n],
            a = i.FieldEncoderMap[n];

        try {
          s += a.encode(r, c);
        } catch (t) {
          throw new u.EncodingError("Error encoding " + e + "->" + n + ": " + t.message);
        }
      }), r.Base64Url.encode(s);
    }, t.decode = function (t, e, n) {
      var s = this.fieldSequence["" + e.version][n],
          a = r.Base64Url.decode(t),
          f = 0;
      return n !== c.Segment.CORE && (f += o.BitLength.segmentType), s.forEach(function (t) {
        var n = i.FieldEncoderMap[t],
            r = a.substr(f, o.BitLength[t]);
        if (e[t] = n.decode(r, o.BitLength[t]), o.BitLength[t]) f += o.BitLength[t];else {
          if (!e[t].bitLength) throw new u.DecodingError("error decoding " + t);
          f += e[t].bitLength;
        }
      }), e;
    }, t.fieldSequence = new s.FieldSequence(), t;
  }();

  e.SegmentEncoder = a;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(18),
      o = n(56),
      i = n(139),
      s = n(101),
      u = n(43),
      c = n(140),
      a = n(141),
      f = n(142),
      l = function () {
    function t() {}

    var e, n, l, p, h, d, v, y, g, m, b, _, w, E, S, O, A, P, I, C, x, L, T, M, F, R;

    return e = r.Fields.version, n = r.Fields.created, l = r.Fields.lastUpdated, p = r.Fields.cmpId, h = r.Fields.cmpVersion, d = r.Fields.consentScreen, v = r.Fields.consentLanguage, y = r.Fields.vendorListVersion, g = r.Fields.policyVersion, m = r.Fields.isServiceSpecific, b = r.Fields.useNonStandardStacks, _ = r.Fields.specialFeatureOptins, w = r.Fields.purposeConsents, E = r.Fields.purposeLegitimateInterests, S = r.Fields.purposeOneTreatment, O = r.Fields.publisherCountryCode, A = r.Fields.vendorConsents, P = r.Fields.vendorLegitimateInterests, I = r.Fields.publisherRestrictions, C = r.Fields.vendorsDisclosed, x = r.Fields.vendorsAllowed, L = r.Fields.publisherConsents, T = r.Fields.publisherLegitimateInterests, M = r.Fields.numCustomPurposes, F = r.Fields.publisherCustomConsents, R = r.Fields.publisherCustomLegitimateInterests, t[e] = u.IntEncoder, t[n] = i.DateEncoder, t[l] = i.DateEncoder, t[p] = u.IntEncoder, t[h] = u.IntEncoder, t[d] = u.IntEncoder, t[v] = c.LangEncoder, t[y] = u.IntEncoder, t[g] = u.IntEncoder, t[m] = o.BooleanEncoder, t[b] = o.BooleanEncoder, t[_] = s.FixedVectorEncoder, t[w] = s.FixedVectorEncoder, t[E] = s.FixedVectorEncoder, t[S] = o.BooleanEncoder, t[O] = c.LangEncoder, t[A] = f.VendorVectorEncoder, t[P] = f.VendorVectorEncoder, t[I] = a.PurposeRestrictionVectorEncoder, t.segmentType = u.IntEncoder, t[C] = f.VendorVectorEncoder, t[x] = f.VendorVectorEncoder, t[L] = s.FixedVectorEncoder, t[T] = s.FixedVectorEncoder, t[M] = u.IntEncoder, t[F] = s.FixedVectorEncoder, t[R] = s.FixedVectorEncoder, t;
  }();

  e.FieldEncoderMap = l;
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });
  var r = n(18);

  e.FieldSequence = function () {
    var t, e;
    this[1] = ((t = {})[r.Segment.CORE] = [r.Fields.version, r.Fields.created, r.Fields.lastUpdated, r.Fields.cmpId, r.Fields.cmpVersion, r.Fields.consentScreen, r.Fields.consentLanguage, r.Fields.vendorListVersion, r.Fields.purposeConsents, r.Fields.vendorConsents], t), this[2] = ((e = {})[r.Segment.CORE] = [r.Fields.version, r.Fields.created, r.Fields.lastUpdated, r.Fields.cmpId, r.Fields.cmpVersion, r.Fields.consentScreen, r.Fields.consentLanguage, r.Fields.vendorListVersion, r.Fields.policyVersion, r.Fields.isServiceSpecific, r.Fields.useNonStandardStacks, r.Fields.specialFeatureOptins, r.Fields.purposeConsents, r.Fields.purposeLegitimateInterests, r.Fields.purposeOneTreatment, r.Fields.publisherCountryCode, r.Fields.vendorConsents, r.Fields.vendorLegitimateInterests, r.Fields.publisherRestrictions], e[r.Segment.PUBLISHER_TC] = [r.Fields.publisherConsents, r.Fields.publisherLegitimateInterests, r.Fields.numCustomPurposes, r.Fields.publisherCustomConsents, r.Fields.publisherCustomLegitimateInterests], e[r.Segment.VENDORS_ALLOWED] = [r.Fields.vendorsAllowed], e[r.Segment.VENDORS_DISCLOSED] = [r.Fields.vendorsDisclosed], e);
  };
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });
  var r = n(18);

  e.SegmentSequence = function (t, e) {
    if (this[1] = [r.Segment.CORE], this[2] = [r.Segment.CORE], 2 === t.version) if (t.isServiceSpecific) this[2].push(r.Segment.PUBLISHER_TC);else {
      var n = !(!e || !e.isForVendors);
      n && !0 !== t[r.Fields.supportOOB] || this[2].push(r.Segment.VENDORS_DISCLOSED), n && (t[r.Fields.supportOOB] && t[r.Fields.vendorsAllowed].size > 0 && this[2].push(r.Segment.VENDORS_ALLOWED), this[2].push(r.Segment.PUBLISHER_TC));
    }
  };
}, function (t, e, n) {
  "use strict";

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var r = n(98),
      o = n(14),
      i = n(43),
      s = n(18),
      u = n(147),
      c = function () {
    function t() {}

    return t.encode = function (e, n) {
      var i,
          u = "",
          c = e.gvl;
      if (!c) throw new o.EncodingError("Unable to encode TCModel without a GVL");
      if (!c.isReady) throw new o.EncodingError("Unable to encode TCModel tcModel.gvl.readyPromise is not resolved");
      (e = e.clone()).consentLanguage = c.language, e[s.Fields.purposeLegitimateInterests].has(1) && e[s.Fields.purposeLegitimateInterests].unset(1);
      var a = Object.keys(c.vendors).map(function (t) {
        return parseInt(t, 10);
      });
      return e.vendorsDisclosed.set(a), n && 1 === n.version ? e.version = 1 : e.version = t.MAX_ENCODING_VERSION, (i = n && Array.isArray(n.segments) ? n.segments : new r.SegmentSequence(e, n)["" + e.version]).forEach(function (t, n) {
        var o = "";
        n < i.length - 1 && (o = "."), u += r.SegmentEncoder.encode(e, t) + o;
      }), u;
    }, t.decode = function (t, e) {
      var n = t.split("."),
          o = n.length;
      e || (e = new u.TCModel());

      for (var c = 0; c < o; c++) {
        var a = n[c],
            f = r.Base64Url.decode(a.charAt(0)).substr(0, r.BitLength.segmentType),
            l = s.SegmentIDs.ID_TO_KEY[i.IntEncoder.decode(f, r.BitLength.segmentType).toString()];
        r.SegmentEncoder.decode(a, e, l);
      }

      return e;
    }, t.MAX_ENCODING_VERSION = 2, t;
  }();

  e.TCString = c;
}, function (t, e, n) {
  "use strict";

  var _r19,
      o = this && this.__extends || (_r19 = function r(t, e) {
    return (_r19 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r19(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(71),
      c = n(31),
      a = function (t) {
    function e() {
      return null !== t && t.apply(this, arguments) || this;
    }

    return o(e, t), e.prototype.success = function () {
      return i(this, void 0, void 0, function () {
        var t;
        return s(this, function (e) {
          return t = c.CmpApiModel.eventQueue.add(this.callback), void 0 !== c.CmpApiModel.tcModel && new u.GetTCDataCommand(this.callback, void 0, t), [2];
        });
      });
    }, e;
  }(u.GetTCDataCommand);

  e.AddEventListenerCommand = a;
}, function (t, e, n) {
  "use strict";

  var _r20,
      o = this && this.__extends || (_r20 = function r(t, e) {
    return (_r20 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r20(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(55),
      c = n(31),
      a = function (t) {
    function e() {
      return null !== t && t.apply(this, arguments) || this;
    }

    return o(e, t), e.prototype.success = function () {
      return i(this, void 0, void 0, function () {
        return s(this, function (t) {
          return (0, this.callback)(!0), [2];
        });
      });
    }, e.prototype.fail = function () {
      (0, this.callback)(!1);
    }, e.prototype.isValid = function () {
      return "number" == typeof this.param && c.CmpApiModel.eventQueue.remove(this.param);
    }, e;
  }(u.Command);

  e.RemoveEventListenerCommand = a;
}, function (t, e, n) {
  "use strict";

  var _r21,
      o = this && this.__extends || (_r21 = function r(t, e) {
    return (_r21 = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (t, e) {
      t.__proto__ = e;
    } || function (t, e) {
      for (var n in e) {
        e.hasOwnProperty(n) && (t[n] = e[n]);
      }
    })(t, e);
  }, function (t, e) {
    function n() {
      this.constructor = t;
    }

    _r21(t, e), t.prototype = null === e ? Object.create(e) : (n.prototype = e.prototype, new n());
  }),
      i = this && this.__awaiter || function (t, e, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(t) {
        try {
          c(r.next(t));
        } catch (t) {
          i(t);
        }
      }

      function u(t) {
        try {
          c(r.throw(t));
        } catch (t) {
          i(t);
        }
      }

      function c(t) {
        var e;
        t.done ? o(t.value) : (e = t.value, e instanceof n ? e : new n(function (t) {
          t(e);
        })).then(s, u);
      }

      c((r = r.apply(t, e || [])).next());
    });
  },
      s = this && this.__generator || function (t, e) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: u(0),
      throw: u(1),
      return: u(2)
    }, "function" == typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function u(i) {
      return function (u) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = 2 & i[0] ? r.return : i[0] ? r.throw || ((o = r.return) && o.call(r), 0) : r.next) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [2 & i[0], o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = e.call(t, s);
            } catch (t) {
              i = [6, t], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, u]);
      };
    }
  };

  Object.defineProperty(e, "__esModule", {
    value: !0
  });

  var u = n(54),
      c = function (t) {
    function e() {
      return null !== t && t.apply(this, arguments) || this;
    }

    return o(e, t), e.prototype.success = function () {
      return i(this, void 0, void 0, function () {
        return s(this, function (t) {
          return (0, this.callback)(new u.Disabled(), !1), [2];
        });
      });
    }, e;
  }(n(55).Command);

  e.DisabledCommand = c;
}]);

/*! jQuery v@1.8.0 jquery.com | jquery.org/license */
(function(a,b){function G(a){var b=F[a]={};return p.each(a.split(s),function(a,c){b[c]=!0}),b}function J(a,c,d){if(d===b&&a.nodeType===1){var e="data-"+c.replace(I,"-$1").toLowerCase();d=a.getAttribute(e);if(typeof d=="string"){try{d=d==="true"?!0:d==="false"?!1:d==="null"?null:+d+""===d?+d:H.test(d)?p.parseJSON(d):d}catch(f){}p.data(a,c,d)}else d=b}return d}function K(a){var b;for(b in a){if(b==="data"&&p.isEmptyObject(a[b]))continue;if(b!=="toJSON")return!1}return!0}function ba(){return!1}function bb(){return!0}function bh(a){return!a||!a.parentNode||a.parentNode.nodeType===11}function bi(a,b){do a=a[b];while(a&&a.nodeType!==1);return a}function bj(a,b,c){b=b||0;if(p.isFunction(b))return p.grep(a,function(a,d){var e=!!b.call(a,d,a);return e===c});if(b.nodeType)return p.grep(a,function(a,d){return a===b===c});if(typeof b=="string"){var d=p.grep(a,function(a){return a.nodeType===1});if(be.test(b))return p.filter(b,d,!c);b=p.filter(b,d)}return p.grep(a,function(a,d){return p.inArray(a,b)>=0===c})}function bk(a){var b=bl.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}function bC(a,b){return a.getElementsByTagName(b)[0]||a.appendChild(a.ownerDocument.createElement(b))}function bD(a,b){if(b.nodeType!==1||!p.hasData(a))return;var c,d,e,f=p._data(a),g=p._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;d<e;d++)p.event.add(b,c,h[c][d])}g.data&&(g.data=p.extend({},g.data))}function bE(a,b){var c;if(b.nodeType!==1)return;b.clearAttributes&&b.clearAttributes(),b.mergeAttributes&&b.mergeAttributes(a),c=b.nodeName.toLowerCase(),c==="object"?(b.parentNode&&(b.outerHTML=a.outerHTML),p.support.html5Clone&&a.innerHTML&&!p.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):c==="input"&&bv.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):c==="option"?b.selected=a.defaultSelected:c==="input"||c==="textarea"?b.defaultValue=a.defaultValue:c==="script"&&b.text!==a.text&&(b.text=a.text),b.removeAttribute(p.expando)}function bF(a){return typeof a.getElementsByTagName!="undefined"?a.getElementsByTagName("*"):typeof a.querySelectorAll!="undefined"?a.querySelectorAll("*"):[]}function bG(a){bv.test(a.type)&&(a.defaultChecked=a.checked)}function bX(a,b){if(b in a)return b;var c=b.charAt(0).toUpperCase()+b.slice(1),d=b,e=bV.length;while(e--){b=bV[e]+c;if(b in a)return b}return d}function bY(a,b){return a=b||a,p.css(a,"display")==="none"||!p.contains(a.ownerDocument,a)}function bZ(a,b){var c,d,e=[],f=0,g=a.length;for(;f<g;f++){c=a[f];if(!c.style)continue;e[f]=p._data(c,"olddisplay"),b?(!e[f]&&c.style.display==="none"&&(c.style.display=""),c.style.display===""&&bY(c)&&(e[f]=p._data(c,"olddisplay",cb(c.nodeName)))):(d=bH(c,"display"),!e[f]&&d!=="none"&&p._data(c,"olddisplay",d))}for(f=0;f<g;f++){c=a[f];if(!c.style)continue;if(!b||c.style.display==="none"||c.style.display==="")c.style.display=b?e[f]||"":"none"}return a}function b$(a,b,c){var d=bO.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function b_(a,b,c,d){var e=c===(d?"border":"content")?4:b==="width"?1:0,f=0;for(;e<4;e+=2)c==="margin"&&(f+=p.css(a,c+bU[e],!0)),d?(c==="content"&&(f-=parseFloat(bH(a,"padding"+bU[e]))||0),c!=="margin"&&(f-=parseFloat(bH(a,"border"+bU[e]+"Width"))||0)):(f+=parseFloat(bH(a,"padding"+bU[e]))||0,c!=="padding"&&(f+=parseFloat(bH(a,"border"+bU[e]+"Width"))||0));return f}function ca(a,b,c){var d=b==="width"?a.offsetWidth:a.offsetHeight,e=!0,f=p.support.boxSizing&&p.css(a,"boxSizing")==="border-box";if(d<=0){d=bH(a,b);if(d<0||d==null)d=a.style[b];if(bP.test(d))return d;e=f&&(p.support.boxSizingReliable||d===a.style[b]),d=parseFloat(d)||0}return d+b_(a,b,c||(f?"border":"content"),e)+"px"}function cb(a){if(bR[a])return bR[a];var b=p("<"+a+">").appendTo(e.body),c=b.css("display");b.remove();if(c==="none"||c===""){bI=e.body.appendChild(bI||p.extend(e.createElement("iframe"),{frameBorder:0,width:0,height:0}));if(!bJ||!bI.createElement)bJ=(bI.contentWindow||bI.contentDocument).document,bJ.write("<!doctype html><html><body>"),bJ.close();b=bJ.body.appendChild(bJ.createElement(a)),c=bH(b,"display"),e.body.removeChild(bI)}return bR[a]=c,c}function ch(a,b,c,d){var e;if(p.isArray(b))p.each(b,function(b,e){c||cd.test(a)?d(a,e):ch(a+"["+(typeof e=="object"?b:"")+"]",e,c,d)});else if(!c&&p.type(b)==="object")for(e in b)ch(a+"["+e+"]",b[e],c,d);else d(a,b)}function cy(a){return function(b,c){typeof b!="string"&&(c=b,b="*");var d,e,f,g=b.toLowerCase().split(s),h=0,i=g.length;if(p.isFunction(c))for(;h<i;h++)d=g[h],f=/^\+/.test(d),f&&(d=d.substr(1)||"*"),e=a[d]=a[d]||[],e[f?"unshift":"push"](c)}}function cz(a,c,d,e,f,g){f=f||c.dataTypes[0],g=g||{},g[f]=!0;var h,i=a[f],j=0,k=i?i.length:0,l=a===cu;for(;j<k&&(l||!h);j++)h=i[j](c,d,e),typeof h=="string"&&(!l||g[h]?h=b:(c.dataTypes.unshift(h),h=cz(a,c,d,e,h,g)));return(l||!h)&&!g["*"]&&(h=cz(a,c,d,e,"*",g)),h}function cA(a,c){var d,e,f=p.ajaxSettings.flatOptions||{};for(d in c)c[d]!==b&&((f[d]?a:e||(e={}))[d]=c[d]);e&&p.extend(!0,a,e)}function cB(a,c,d){var e,f,g,h,i=a.contents,j=a.dataTypes,k=a.responseFields;for(f in k)f in d&&(c[k[f]]=d[f]);while(j[0]==="*")j.shift(),e===b&&(e=a.mimeType||c.getResponseHeader("content-type"));if(e)for(f in i)if(i[f]&&i[f].test(e)){j.unshift(f);break}if(j[0]in d)g=j[0];else{for(f in d){if(!j[0]||a.converters[f+" "+j[0]]){g=f;break}h||(h=f)}g=g||h}if(g)return g!==j[0]&&j.unshift(g),d[g]}function cC(a,b){var c,d,e,f,g=a.dataTypes.slice(),h=g[0],i={},j=0;a.dataFilter&&(b=a.dataFilter(b,a.dataType));if(g[1])for(c in a.converters)i[c.toLowerCase()]=a.converters[c];for(;e=g[++j];)if(e!=="*"){if(h!=="*"&&h!==e){c=i[h+" "+e]||i["* "+e];if(!c)for(d in i){f=d.split(" ");if(f[1]===e){c=i[h+" "+f[0]]||i["* "+f[0]];if(c){c===!0?c=i[d]:i[d]!==!0&&(e=f[0],g.splice(j--,0,e));break}}}if(c!==!0)if(c&&a["throws"])b=c(b);else try{b=c(b)}catch(k){return{state:"parsererror",error:c?k:"No conversion from "+h+" to "+e}}}h=e}return{state:"success",data:b}}function cK(){try{return new a.XMLHttpRequest}catch(b){}}function cL(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}function cT(){return setTimeout(function(){cM=b},0),cM=p.now()}function cU(a,b){p.each(b,function(b,c){var d=(cS[b]||[]).concat(cS["*"]),e=0,f=d.length;for(;e<f;e++)if(d[e].call(a,b,c))return})}function cV(a,b,c){var d,e=0,f=0,g=cR.length,h=p.Deferred().always(function(){delete i.elem}),i=function(){var b=cM||cT(),c=Math.max(0,j.startTime+j.duration-b),d=1-(c/j.duration||0),e=0,f=j.tweens.length;for(;e<f;e++)j.tweens[e].run(d);return h.notifyWith(a,[j,d,c]),d<1&&f?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:p.extend({},b),opts:p.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:cM||cT(),duration:c.duration,tweens:[],createTween:function(b,c,d){var e=p.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(e),e},stop:function(b){var c=0,d=b?j.tweens.length:0;for(;c<d;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;cW(k,j.opts.specialEasing);for(;e<g;e++){d=cR[e].call(j,a,k,j.opts);if(d)return d}return cU(j,k),p.isFunction(j.opts.start)&&j.opts.start.call(a,j),p.fx.timer(p.extend(i,{anim:j,queue:j.opts.queue,elem:a})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}function cW(a,b){var c,d,e,f,g;for(c in a){d=p.camelCase(c),e=b[d],f=a[c],p.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=p.cssHooks[d];if(g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}}function cX(a,b,c){var d,e,f,g,h,i,j,k,l=this,m=a.style,n={},o=[],q=a.nodeType&&bY(a);c.queue||(j=p._queueHooks(a,"fx"),j.unqueued==null&&(j.unqueued=0,k=j.empty.fire,j.empty.fire=function(){j.unqueued||k()}),j.unqueued++,l.always(function(){l.always(function(){j.unqueued--,p.queue(a,"fx").length||j.empty.fire()})})),a.nodeType===1&&("height"in b||"width"in b)&&(c.overflow=[m.overflow,m.overflowX,m.overflowY],p.css(a,"display")==="inline"&&p.css(a,"float")==="none"&&(!p.support.inlineBlockNeedsLayout||cb(a.nodeName)==="inline"?m.display="inline-block":m.zoom=1)),c.overflow&&(m.overflow="hidden",p.support.shrinkWrapBlocks||l.done(function(){m.overflow=c.overflow[0],m.overflowX=c.overflow[1],m.overflowY=c.overflow[2]}));for(d in b){f=b[d];if(cO.exec(f)){delete b[d];if(f===(q?"hide":"show"))continue;o.push(d)}}g=o.length;if(g){h=p._data(a,"fxshow")||p._data(a,"fxshow",{}),q?p(a).show():l.done(function(){p(a).hide()}),l.done(function(){var b;p.removeData(a,"fxshow",!0);for(b in n)p.style(a,b,n[b])});for(d=0;d<g;d++)e=o[d],i=l.createTween(e,q?h[e]:0),n[e]=h[e]||p.style(a,e),e in h||(h[e]=i.start,q&&(i.end=i.start,i.start=e==="width"||e==="height"?1:0))}}function cY(a,b,c,d,e){return new cY.prototype.init(a,b,c,d,e)}function cZ(a,b){var c,d={height:a},e=0;for(;e<4;e+=2-b)c=bU[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function c_(a){return p.isWindow(a)?a:a.nodeType===9?a.defaultView||a.parentWindow:!1}var c,d,e=a.document,f=a.location,g=a.navigator,h=a.eQuery,i=a.e$,j=Array.prototype.push,k=Array.prototype.slice,l=Array.prototype.indexOf,m=Object.prototype.toString,n=Object.prototype.hasOwnProperty,o=String.prototype.trim,p=function(a,b){return new p.fn.init(a,b,c)},q=/[\-+]?(?:\d*\.|)\d+(?:[eE][\-+]?\d+|)/.source,r=/\S/,s=/\s+/,t=r.test(" ")?/^[\s\xA0]+|[\s\xA0]+$/g:/^\s+|\s+$/g,u=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^[\],:{}\s]*$/,x=/(?:^|:|,)(?:\s*\[)+/g,y=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,z=/"[^"\\\r\n]*"|true|false|null|-?(?:\d\d*\.|)\d+(?:[eE][\-+]?\d+|)/g,A=/^-ms-/,B=/-([\da-z])/gi,C=function(a,b){return(b+"").toUpperCase()},D=function(){e.addEventListener?(e.removeEventListener("DOMContentLoaded",D,!1),p.ready()):e.readyState==="complete"&&(e.detachEvent("onreadystatechange",D),p.ready())},E={};p.fn=p.prototype={constructor:p,init:function(a,c,d){var f,g,h,i;if(!a)return this;if(a.nodeType)return this.context=this[0]=a,this.length=1,this;if(typeof a=="string"){a.charAt(0)==="<"&&a.charAt(a.length-1)===">"&&a.length>=3?f=[null,a,null]:f=u.exec(a);if(f&&(f[1]||!c)){if(f[1])return c=c instanceof p?c[0]:c,i=c&&c.nodeType?c.ownerDocument||c:e,a=p.parseHTML(f[1],i,!0),v.test(f[1])&&p.isPlainObject(c)&&this.attr.call(a,c,!0),p.merge(this,a);g=e.getElementById(f[2]);if(g&&g.parentNode){if(g.id!==f[2])return d.find(a);this.length=1,this[0]=g}return this.context=e,this.selector=a,this}return!c||c.jquery?(c||d).find(a):this.constructor(c).find(a)}return p.isFunction(a)?d.ready(a):(a.selector!==b&&(this.selector=a.selector,this.context=a.context),p.makeArray(a,this))},selector:"",jquery:"1.8.0",length:0,size:function(){return this.length},toArray:function(){return k.call(this)},get:function(a){return a==null?this.toArray():a<0?this[this.length+a]:this[a]},pushStack:function(a,b,c){var d=p.merge(this.constructor(),a);return d.prevObject=this,d.context=this.context,b==="find"?d.selector=this.selector+(this.selector?" ":"")+c:b&&(d.selector=this.selector+"."+b+"("+c+")"),d},each:function(a,b){return p.each(this,a,b)},ready:function(a){return p.ready.promise().done(a),this},eq:function(a){return a=+a,a===-1?this.slice(a):this.slice(a,a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(k.apply(this,arguments),"slice",k.call(arguments).join(","))},map:function(a){return this.pushStack(p.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:j,sort:[].sort,splice:[].splice},p.fn.init.prototype=p.fn,p.extend=p.fn.extend=function(){var a,c,d,e,f,g,h=arguments[0]||{},i=1,j=arguments.length,k=!1;typeof h=="boolean"&&(k=h,h=arguments[1]||{},i=2),typeof h!="object"&&!p.isFunction(h)&&(h={}),j===i&&(h=this,--i);for(;i<j;i++)if((a=arguments[i])!=null)for(c in a){d=h[c],e=a[c];if(h===e)continue;k&&e&&(p.isPlainObject(e)||(f=p.isArray(e)))?(f?(f=!1,g=d&&p.isArray(d)?d:[]):g=d&&p.isPlainObject(d)?d:{},h[c]=p.extend(k,g,e)):e!==b&&(h[c]=e)}return h},p.extend({noConflict:function(b){return a.e$===p&&(a.e$=i),b&&a.eQuery===p&&(a.eQuery=h),p},isReady:!1,readyWait:1,holdReady:function(a){a?p.readyWait++:p.ready(!0)},ready:function(a){if(a===!0?--p.readyWait:p.isReady)return;if(!e.body)return setTimeout(p.ready,1);p.isReady=!0;if(a!==!0&&--p.readyWait>0)return;d.resolveWith(e,[p]),p.fn.trigger&&p(e).trigger("ready").off("ready")},isFunction:function(a){return p.type(a)==="function"},isArray:Array.isArray||function(a){return p.type(a)==="array"},isWindow:function(a){return a!=null&&a==a.window},isNumeric:function(a){return!isNaN(parseFloat(a))&&isFinite(a)},type:function(a){return a==null?String(a):E[m.call(a)]||"object"},isPlainObject:function(a){if(!a||p.type(a)!=="object"||a.nodeType||p.isWindow(a))return!1;try{if(a.constructor&&!n.call(a,"constructor")&&!n.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}var d;for(d in a);return d===b||n.call(a,d)},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},error:function(a){throw new Error(a)},parseHTML:function(a,b,c){var d;return!a||typeof a!="string"?null:(typeof b=="boolean"&&(c=b,b=0),b=b||e,(d=v.exec(a))?[b.createElement(d[1])]:(d=p.buildFragment([a],b,c?null:[]),p.merge([],(d.cacheable?p.clone(d.fragment):d.fragment).childNodes)))},parseJSON:function(b){if(!b||typeof b!="string")return null;b=p.trim(b);if(a.JSON&&a.JSON.parse)return a.JSON.parse(b);if(w.test(b.replace(y,"@").replace(z,"]").replace(x,"")))return(new Function("return "+b))();p.error("Invalid JSON: "+b)},parseXML:function(c){var d,e;if(!c||typeof c!="string")return null;try{a.DOMParser?(e=new DOMParser,d=e.parseFromString(c,"text/xml")):(d=new ActiveXObject("Microsoft.XMLDOM"),d.async="false",d.loadXML(c))}catch(f){d=b}return(!d||!d.documentElement||d.getElementsByTagName("parsererror").length)&&p.error("Invalid XML: "+c),d},noop:function(){},globalEval:function(b){b&&r.test(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(A,"ms-").replace(B,C)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,d){var e,f=0,g=a.length,h=g===b||p.isFunction(a);if(d){if(h){for(e in a)if(c.apply(a[e],d)===!1)break}else for(;f<g;)if(c.apply(a[f++],d)===!1)break}else if(h){for(e in a)if(c.call(a[e],e,a[e])===!1)break}else for(;f<g;)if(c.call(a[f],f,a[f++])===!1)break;return a},trim:o?function(a){return a==null?"":o.call(a)}:function(a){return a==null?"":a.toString().replace(t,"")},makeArray:function(a,b){var c,d=b||[];return a!=null&&(c=p.type(a),a.length==null||c==="string"||c==="function"||c==="regexp"||p.isWindow(a)?j.call(d,a):p.merge(d,a)),d},inArray:function(a,b,c){var d;if(b){if(l)return l.call(b,a,c);d=b.length,c=c?c<0?Math.max(0,d+c):c:0;for(;c<d;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,c){var d=c.length,e=a.length,f=0;if(typeof d=="number")for(;f<d;f++)a[e++]=c[f];else while(c[f]!==b)a[e++]=c[f++];return a.length=e,a},grep:function(a,b,c){var d,e=[],f=0,g=a.length;c=!!c;for(;f<g;f++)d=!!b(a[f],f),c!==d&&e.push(a[f]);return e},map:function(a,c,d){var e,f,g=[],h=0,i=a.length,j=a instanceof p||i!==b&&typeof i=="number"&&(i>0&&a[0]&&a[i-1]||i===0||p.isArray(a));if(j)for(;h<i;h++)e=c(a[h],h,d),e!=null&&(g[g.length]=e);else for(f in a)e=c(a[f],f,d),e!=null&&(g[g.length]=e);return g.concat.apply([],g)},guid:1,proxy:function(a,c){var d,e,f;return typeof c=="string"&&(d=a[c],c=a,a=d),p.isFunction(a)?(e=k.call(arguments,2),f=function(){return a.apply(c,e.concat(k.call(arguments)))},f.guid=a.guid=a.guid||f.guid||p.guid++,f):b},access:function(a,c,d,e,f,g,h){var i,j=d==null,k=0,l=a.length;if(d&&typeof d=="object"){for(k in d)p.access(a,c,k,d[k],1,g,e);f=1}else if(e!==b){i=h===b&&p.isFunction(e),j&&(i?(i=c,c=function(a,b,c){return i.call(p(a),c)}):(c.call(a,e),c=null));if(c)for(;k<l;k++)c(a[k],d,i?e.call(a[k],k,c(a[k],d)):e,h);f=1}return f?a:j?c.call(a):l?c(a[0],d):g},now:function(){return(new Date).getTime()}}),p.ready.promise=function(b){if(!d){d=p.Deferred();if(e.readyState==="complete"||e.readyState!=="loading"&&e.addEventListener)setTimeout(p.ready,1);else if(e.addEventListener)e.addEventListener("DOMContentLoaded",D,!1),a.addEventListener("load",p.ready,!1);else{e.attachEvent("onreadystatechange",D),a.attachEvent("onload",p.ready);var c=!1;try{c=a.frameElement==null&&e.documentElement}catch(f){}c&&c.doScroll&&function g(){if(!p.isReady){try{c.doScroll("left")}catch(a){return setTimeout(g,50)}p.ready()}}()}}return d.promise(b)},p.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){E["[object "+b+"]"]=b.toLowerCase()}),c=p(e);var F={};p.Callbacks=function(a){a=typeof a=="string"?F[a]||G(a):p.extend({},a);var c,d,e,f,g,h,i=[],j=!a.once&&[],k=function(b){c=a.memory&&b,d=!0,h=f||0,f=0,g=i.length,e=!0;for(;i&&h<g;h++)if(i[h].apply(b[0],b[1])===!1&&a.stopOnFalse){c=!1;break}e=!1,i&&(j?j.length&&k(j.shift()):c?i=[]:l.disable())},l={add:function(){if(i){var b=i.length;(function d(b){p.each(b,function(b,c){p.isFunction(c)&&(!a.unique||!l.has(c))?i.push(c):c&&c.length&&d(c)})})(arguments),e?g=i.length:c&&(f=b,k(c))}return this},remove:function(){return i&&p.each(arguments,function(a,b){var c;while((c=p.inArray(b,i,c))>-1)i.splice(c,1),e&&(c<=g&&g--,c<=h&&h--)}),this},has:function(a){return p.inArray(a,i)>-1},empty:function(){return i=[],this},disable:function(){return i=j=c=b,this},disabled:function(){return!i},lock:function(){return j=b,c||l.disable(),this},locked:function(){return!j},fireWith:function(a,b){return b=b||[],b=[a,b.slice?b.slice():b],i&&(!d||j)&&(e?j.push(b):k(b)),this},fire:function(){return l.fireWith(this,arguments),this},fired:function(){return!!d}};return l},p.extend({Deferred:function(a){var b=[["resolve","done",p.Callbacks("once memory"),"resolved"],["reject","fail",p.Callbacks("once memory"),"rejected"],["notify","progress",p.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return p.Deferred(function(c){p.each(b,function(b,d){var f=d[0],g=a[b];e[d[1]](p.isFunction(g)?function(){var a=g.apply(this,arguments);a&&p.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f+"With"](this===e?c:this,[a])}:c[f])}),a=null}).promise()},promise:function(a){return typeof a=="object"?p.extend(a,d):d}},e={};return d.pipe=d.then,p.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[a^1][2].disable,b[2][2].lock),e[f[0]]=g.fire,e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=k.call(arguments),d=c.length,e=d!==1||a&&p.isFunction(a.promise)?d:0,f=e===1?a:p.Deferred(),g=function(a,b,c){return function(d){b[a]=this,c[a]=arguments.length>1?k.call(arguments):d,c===h?f.notifyWith(b,c):--e||f.resolveWith(b,c)}},h,i,j;if(d>1){h=new Array(d),i=new Array(d),j=new Array(d);for(;b<d;b++)c[b]&&p.isFunction(c[b].promise)?c[b].promise().done(g(b,j,c)).fail(f.reject).progress(g(b,i,h)):--e}return e||f.resolveWith(j,c),f.promise()}}),p.support=function(){var b,c,d,f,g,h,i,j,k,l,m,n=e.createElement("div");n.setAttribute("className","t"),n.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",c=n.getElementsByTagName("*"),d=n.getElementsByTagName("a")[0],d.style.cssText="top:1px;float:left;opacity:.5";if(!c||!c.length||!d)return{};f=e.createElement("select"),g=f.appendChild(e.createElement("option")),h=n.getElementsByTagName("input")[0],b={leadingWhitespace:n.firstChild.nodeType===3,tbody:!n.getElementsByTagName("tbody").length,htmlSerialize:!!n.getElementsByTagName("link").length,style:/top/.test(d.getAttribute("style")),hrefNormalized:d.getAttribute("href")==="/a",opacity:/^0.5/.test(d.style.opacity),cssFloat:!!d.style.cssFloat,checkOn:h.value==="on",optSelected:g.selected,getSetAttribute:n.className!=="t",enctype:!!e.createElement("form").enctype,html5Clone:e.createElement("nav").cloneNode(!0).outerHTML!=="<:nav></:nav>",boxModel:e.compatMode==="CSS1Compat",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0,boxSizingReliable:!0,pixelPosition:!1},h.checked=!0,b.noCloneChecked=h.cloneNode(!0).checked,f.disabled=!0,b.optDisabled=!g.disabled;try{delete n.test}catch(o){b.deleteExpando=!1}!n.addEventListener&&n.attachEvent&&n.fireEvent&&(n.attachEvent("onclick",m=function(){b.noCloneEvent=!1}),n.cloneNode(!0).fireEvent("onclick"),n.detachEvent("onclick",m)),h=e.createElement("input"),h.value="t",h.setAttribute("type","radio"),b.radioValue=h.value==="t",h.setAttribute("checked","checked"),h.setAttribute("name","t"),n.appendChild(h),i=e.createDocumentFragment(),i.appendChild(n.lastChild),b.checkClone=i.cloneNode(!0).cloneNode(!0).lastChild.checked,b.appendChecked=h.checked,i.removeChild(h),i.appendChild(n);if(n.attachEvent)for(k in{submit:!0,change:!0,focusin:!0})j="on"+k,l=j in n,l||(n.setAttribute(j,"return;"),l=typeof n[j]=="function"),b[k+"Bubbles"]=l;return p(function(){var c,d,f,g,h="padding:0;margin:0;border:0;display:block;overflow:hidden;",i=e.getElementsByTagName("body")[0];if(!i)return;c=e.createElement("div"),c.style.cssText="visibility:hidden;border:0;width:0;height:0;position:static;top:0;margin-top:1px",i.insertBefore(c,i.firstChild),d=e.createElement("div"),c.appendChild(d),d.innerHTML="<table><tr><td></td><td>t</td></tr></table>",f=d.getElementsByTagName("td"),f[0].style.cssText="padding:0;margin:0;border:0;display:none",l=f[0].offsetHeight===0,f[0].style.display="",f[1].style.display="none",b.reliableHiddenOffsets=l&&f[0].offsetHeight===0,d.innerHTML="",d.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;",b.boxSizing=d.offsetWidth===4,b.doesNotIncludeMarginInBodyOffset=i.offsetTop!==1,a.getComputedStyle&&(b.pixelPosition=(a.getComputedStyle(d,null)||{}).top!=="1%",b.boxSizingReliable=(a.getComputedStyle(d,null)||{width:"4px"}).width==="4px",g=e.createElement("div"),g.style.cssText=d.style.cssText=h,g.style.marginRight=g.style.width="0",d.style.width="1px",d.appendChild(g),b.reliableMarginRight=!parseFloat((a.getComputedStyle(g,null)||{}).marginRight)),typeof d.style.zoom!="undefined"&&(d.innerHTML="",d.style.cssText=h+"width:1px;padding:1px;display:inline;zoom:1",b.inlineBlockNeedsLayout=d.offsetWidth===3,d.style.display="block",d.style.overflow="visible",d.innerHTML="<div></div>",d.firstChild.style.width="5px",b.shrinkWrapBlocks=d.offsetWidth!==3,c.style.zoom=1),i.removeChild(c),c=d=f=g=null}),i.removeChild(n),c=d=f=g=h=i=n=null,b}();var H=/^(?:\{.*\}|\[.*\])$/,I=/([A-Z])/g;p.extend({cache:{},deletedIds:[],uuid:0,expando:"jQuery"+(p.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){return a=a.nodeType?p.cache[a[p.expando]]:a[p.expando],!!a&&!K(a)},data:function(a,c,d,e){if(!p.acceptData(a))return;var f,g,h=p.expando,i=typeof c=="string",j=a.nodeType,k=j?p.cache:a,l=j?a[h]:a[h]&&h;if((!l||!k[l]||!e&&!k[l].data)&&i&&d===b)return;l||(j?a[h]=l=p.deletedIds.pop()||++p.uuid:l=h),k[l]||(k[l]={},j||(k[l].toJSON=p.noop));if(typeof c=="object"||typeof c=="function")e?k[l]=p.extend(k[l],c):k[l].data=p.extend(k[l].data,c);return f=k[l],e||(f.data||(f.data={}),f=f.data),d!==b&&(f[p.camelCase(c)]=d),i?(g=f[c],g==null&&(g=f[p.camelCase(c)])):g=f,g},removeData:function(a,b,c){if(!p.acceptData(a))return;var d,e,f,g=a.nodeType,h=g?p.cache:a,i=g?a[p.expando]:p.expando;if(!h[i])return;if(b){d=c?h[i]:h[i].data;if(d){p.isArray(b)||(b in d?b=[b]:(b=p.camelCase(b),b in d?b=[b]:b=b.split(" ")));for(e=0,f=b.length;e<f;e++)delete d[b[e]];if(!(c?K:p.isEmptyObject)(d))return}}if(!c){delete h[i].data;if(!K(h[i]))return}g?p.cleanData([a],!0):p.support.deleteExpando||h!=h.window?delete h[i]:h[i]=null},_data:function(a,b,c){return p.data(a,b,c,!0)},acceptData:function(a){var b=a.nodeName&&p.noData[a.nodeName.toLowerCase()];return!b||b!==!0&&a.getAttribute("classid")===b}}),p.fn.extend({data:function(a,c){var d,e,f,g,h,i=this[0],j=0,k=null;if(a===b){if(this.length){k=p.data(i);if(i.nodeType===1&&!p._data(i,"parsedAttrs")){f=i.attributes;for(h=f.length;j<h;j++)g=f[j].name,g.indexOf("data-")===0&&(g=p.camelCase(g.substring(5)),J(i,g,k[g]));p._data(i,"parsedAttrs",!0)}}return k}return typeof a=="object"?this.each(function(){p.data(this,a)}):(d=a.split(".",2),d[1]=d[1]?"."+d[1]:"",e=d[1]+"!",p.access(this,function(c){if(c===b)return k=this.triggerHandler("getData"+e,[d[0]]),k===b&&i&&(k=p.data(i,a),k=J(i,a,k)),k===b&&d[1]?this.data(d[0]):k;d[1]=c,this.each(function(){var b=p(this);b.triggerHandler("setData"+e,d),p.data(this,a,c),b.triggerHandler("changeData"+e,d)})},null,c,arguments.length>1,null,!1))},removeData:function(a){return this.each(function(){p.removeData(this,a)})}}),p.extend({queue:function(a,b,c){var d;if(a)return b=(b||"fx")+"queue",d=p._data(a,b),c&&(!d||p.isArray(c)?d=p._data(a,b,p.makeArray(c)):d.push(c)),d||[]},dequeue:function(a,b){b=b||"fx";var c=p.queue(a,b),d=c.shift(),e=p._queueHooks(a,b),f=function(){p.dequeue(a,b)};d==="inprogress"&&(d=c.shift()),d&&(b==="fx"&&c.unshift("inprogress"),delete e.stop,d.call(a,f,e)),!c.length&&e&&e.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return p._data(a,c)||p._data(a,c,{empty:p.Callbacks("once memory").add(function(){p.removeData(a,b+"queue",!0),p.removeData(a,c,!0)})})}}),p.fn.extend({queue:function(a,c){var d=2;return typeof a!="string"&&(c=a,a="fx",d--),arguments.length<d?p.queue(this[0],a):c===b?this:this.each(function(){var b=p.queue(this,a,c);p._queueHooks(this,a),a==="fx"&&b[0]!=="inprogress"&&p.dequeue(this,a)})},dequeue:function(a){return this.each(function(){p.dequeue(this,a)})},delay:function(a,b){return a=p.fx?p.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,c){var d,e=1,f=p.Deferred(),g=this,h=this.length,i=function(){--e||f.resolveWith(g,[g])};typeof a!="string"&&(c=a,a=b),a=a||"fx";while(h--)(d=p._data(g[h],a+"queueHooks"))&&d.empty&&(e++,d.empty.add(i));return i(),f.promise(c)}});var L,M,N,O=/[\t\r\n]/g,P=/\r/g,Q=/^(?:button|input)$/i,R=/^(?:button|input|object|select|textarea)$/i,S=/^a(?:rea|)$/i,T=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,U=p.support.getSetAttribute;p.fn.extend({attr:function(a,b){return p.access(this,p.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){p.removeAttr(this,a)})},prop:function(a,b){return p.access(this,p.prop,a,b,arguments.length>1)},removeProp:function(a){return a=p.propFix[a]||a,this.each(function(){try{this[a]=b,delete this[a]}catch(c){}})},addClass:function(a){var b,c,d,e,f,g,h;if(p.isFunction(a))return this.each(function(b){p(this).addClass(a.call(this,b,this.className))});if(a&&typeof a=="string"){b=a.split(s);for(c=0,d=this.length;c<d;c++){e=this[c];if(e.nodeType===1)if(!e.className&&b.length===1)e.className=a;else{f=" "+e.className+" ";for(g=0,h=b.length;g<h;g++)~f.indexOf(" "+b[g]+" ")||(f+=b[g]+" ");e.className=p.trim(f)}}}return this},removeClass:function(a){var c,d,e,f,g,h,i;if(p.isFunction(a))return this.each(function(b){p(this).removeClass(a.call(this,b,this.className))});if(a&&typeof a=="string"||a===b){c=(a||"").split(s);for(h=0,i=this.length;h<i;h++){e=this[h];if(e.nodeType===1&&e.className){d=(" "+e.className+" ").replace(O," ");for(f=0,g=c.length;f<g;f++)while(d.indexOf(" "+c[f]+" ")>-1)d=d.replace(" "+c[f]+" "," ");e.className=a?p.trim(d):""}}}return this},toggleClass:function(a,b){var c=typeof a,d=typeof b=="boolean";return p.isFunction(a)?this.each(function(c){p(this).toggleClass(a.call(this,c,this.className,b),b)}):this.each(function(){if(c==="string"){var e,f=0,g=p(this),h=b,i=a.split(s);while(e=i[f++])h=d?h:!g.hasClass(e),g[h?"addClass":"removeClass"](e)}else if(c==="undefined"||c==="boolean")this.className&&p._data(this,"__className__",this.className),this.className=this.className||a===!1?"":p._data(this,"__className__")||""})},hasClass:function(a){var b=" "+a+" ",c=0,d=this.length;for(;c<d;c++)if(this[c].nodeType===1&&(" "+this[c].className+" ").replace(O," ").indexOf(b)>-1)return!0;return!1},val:function(a){var c,d,e,f=this[0];if(!arguments.length){if(f)return c=p.valHooks[f.type]||p.valHooks[f.nodeName.toLowerCase()],c&&"get"in c&&(d=c.get(f,"value"))!==b?d:(d=f.value,typeof d=="string"?d.replace(P,""):d==null?"":d);return}return e=p.isFunction(a),this.each(function(d){var f,g=p(this);if(this.nodeType!==1)return;e?f=a.call(this,d,g.val()):f=a,f==null?f="":typeof f=="number"?f+="":p.isArray(f)&&(f=p.map(f,function(a){return a==null?"":a+""})),c=p.valHooks[this.type]||p.valHooks[this.nodeName.toLowerCase()];if(!c||!("set"in c)||c.set(this,f,"value")===b)this.value=f})}}),p.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return!b||b.specified?a.value:a.text}},select:{get:function(a){var b,c,d,e,f=a.selectedIndex,g=[],h=a.options,i=a.type==="select-one";if(f<0)return null;c=i?f:0,d=i?f+1:h.length;for(;c<d;c++){e=h[c];if(e.selected&&(p.support.optDisabled?!e.disabled:e.getAttribute("disabled")===null)&&(!e.parentNode.disabled||!p.nodeName(e.parentNode,"optgroup"))){b=p(e).val();if(i)return b;g.push(b)}}return i&&!g.length&&h.length?p(h[f]).val():g},set:function(a,b){var c=p.makeArray(b);return p(a).find("option").each(function(){this.selected=p.inArray(p(this).val(),c)>=0}),c.length||(a.selectedIndex=-1),c}}},attrFn:{},attr:function(a,c,d,e){var f,g,h,i=a.nodeType;if(!a||i===3||i===8||i===2)return;if(e&&p.isFunction(p.fn[c]))return p(a)[c](d);if(typeof a.getAttribute=="undefined")return p.prop(a,c,d);h=i!==1||!p.isXMLDoc(a),h&&(c=c.toLowerCase(),g=p.attrHooks[c]||(T.test(c)?M:L));if(d!==b){if(d===null){p.removeAttr(a,c);return}return g&&"set"in g&&h&&(f=g.set(a,d,c))!==b?f:(a.setAttribute(c,""+d),d)}return g&&"get"in g&&h&&(f=g.get(a,c))!==null?f:(f=a.getAttribute(c),f===null?b:f)},removeAttr:function(a,b){var c,d,e,f,g=0;if(b&&a.nodeType===1){d=b.split(s);for(;g<d.length;g++)e=d[g],e&&(c=p.propFix[e]||e,f=T.test(e),f||p.attr(a,e,""),a.removeAttribute(U?e:c),f&&c in a&&(a[c]=!1))}},attrHooks:{type:{set:function(a,b){if(Q.test(a.nodeName)&&a.parentNode)p.error("type property can't be changed");else if(!p.support.radioValue&&b==="radio"&&p.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}},value:{get:function(a,b){return L&&p.nodeName(a,"button")?L.get(a,b):b in a?a.value:null},set:function(a,b,c){if(L&&p.nodeName(a,"button"))return L.set(a,b,c);a.value=b}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,c,d){var e,f,g,h=a.nodeType;if(!a||h===3||h===8||h===2)return;return g=h!==1||!p.isXMLDoc(a),g&&(c=p.propFix[c]||c,f=p.propHooks[c]),d!==b?f&&"set"in f&&(e=f.set(a,d,c))!==b?e:a[c]=d:f&&"get"in f&&(e=f.get(a,c))!==null?e:a[c]},propHooks:{tabIndex:{get:function(a){var c=a.getAttributeNode("tabindex");return c&&c.specified?parseInt(c.value,10):R.test(a.nodeName)||S.test(a.nodeName)&&a.href?0:b}}}}),M={get:function(a,c){var d,e=p.prop(a,c);return e===!0||typeof e!="boolean"&&(d=a.getAttributeNode(c))&&d.nodeValue!==!1?c.toLowerCase():b},set:function(a,b,c){var d;return b===!1?p.removeAttr(a,c):(d=p.propFix[c]||c,d in a&&(a[d]=!0),a.setAttribute(c,c.toLowerCase())),c}},U||(N={name:!0,id:!0,coords:!0},L=p.valHooks.button={get:function(a,c){var d;return d=a.getAttributeNode(c),d&&(N[c]?d.value!=="":d.specified)?d.value:b},set:function(a,b,c){var d=a.getAttributeNode(c);return d||(d=e.createAttribute(c),a.setAttributeNode(d)),d.value=b+""}},p.each(["width","height"],function(a,b){p.attrHooks[b]=p.extend(p.attrHooks[b],{set:function(a,c){if(c==="")return a.setAttribute(b,"auto"),c}})}),p.attrHooks.contenteditable={get:L.get,set:function(a,b,c){b===""&&(b="false"),L.set(a,b,c)}}),p.support.hrefNormalized||p.each(["href","src","width","height"],function(a,c){p.attrHooks[c]=p.extend(p.attrHooks[c],{get:function(a){var d=a.getAttribute(c,2);return d===null?b:d}})}),p.support.style||(p.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||b},set:function(a,b){return a.style.cssText=""+b}}),p.support.optSelected||(p.propHooks.selected=p.extend(p.propHooks.selected,{get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null}})),p.support.enctype||(p.propFix.enctype="encoding"),p.support.checkOn||p.each(["radio","checkbox"],function(){p.valHooks[this]={get:function(a){return a.getAttribute("value")===null?"on":a.value}}}),p.each(["radio","checkbox"],function(){p.valHooks[this]=p.extend(p.valHooks[this],{set:function(a,b){if(p.isArray(b))return a.checked=p.inArray(p(a).val(),b)>=0}})});var V=/^(?:textarea|input|select)$/i,W=/^([^\.]*|)(?:\.(.+)|)$/,X=/(?:^|\s)hover(\.\S+|)\b/,Y=/^key/,Z=/^(?:mouse|contextmenu)|click/,$=/^(?:focusinfocus|focusoutblur)$/,_=function(a){return p.event.special.hover?a:a.replace(X,"mouseenter$1 mouseleave$1")};p.event={add:function(a,c,d,e,f){var g,h,i,j,k,l,m,n,o,q,r;if(a.nodeType===3||a.nodeType===8||!c||!d||!(g=p._data(a)))return;d.handler&&(o=d,d=o.handler,f=o.selector),d.guid||(d.guid=p.guid++),i=g.events,i||(g.events=i={}),h=g.handle,h||(g.handle=h=function(a){return typeof p!="undefined"&&(!a||p.event.triggered!==a.type)?p.event.dispatch.apply(h.elem,arguments):b},h.elem=a),c=p.trim(_(c)).split(" ");for(j=0;j<c.length;j++){k=W.exec(c[j])||[],l=k[1],m=(k[2]||"").split(".").sort(),r=p.event.special[l]||{},l=(f?r.delegateType:r.bindType)||l,r=p.event.special[l]||{},n=p.extend({type:l,origType:k[1],data:e,handler:d,guid:d.guid,selector:f,namespace:m.join(".")},o),q=i[l];if(!q){q=i[l]=[],q.delegateCount=0;if(!r.setup||r.setup.call(a,e,m,h)===!1)a.addEventListener?a.addEventListener(l,h,!1):a.attachEvent&&a.attachEvent("on"+l,h)}r.add&&(r.add.call(a,n),n.handler.guid||(n.handler.guid=d.guid)),f?q.splice(q.delegateCount++,0,n):q.push(n),p.event.global[l]=!0}a=null},global:{},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,n,o,q,r=p.hasData(a)&&p._data(a);if(!r||!(m=r.events))return;b=p.trim(_(b||"")).split(" ");for(f=0;f<b.length;f++){g=W.exec(b[f])||[],h=i=g[1],j=g[2];if(!h){for(h in m)p.event.remove(a,h+b[f],c,d,!0);continue}n=p.event.special[h]||{},h=(d?n.delegateType:n.bindType)||h,o=m[h]||[],k=o.length,j=j?new RegExp("(^|\\.)"+j.split(".").sort().join("\\.(?:.*\\.|)")+"(\\.|$)"):null;for(l=0;l<o.length;l++)q=o[l],(e||i===q.origType)&&(!c||c.guid===q.guid)&&(!j||j.test(q.namespace))&&(!d||d===q.selector||d==="**"&&q.selector)&&(o.splice(l--,1),q.selector&&o.delegateCount--,n.remove&&n.remove.call(a,q));o.length===0&&k!==o.length&&((!n.teardown||n.teardown.call(a,j,r.handle)===!1)&&p.removeEvent(a,h,r.handle),delete m[h])}p.isEmptyObject(m)&&(delete r.handle,p.removeData(a,"events",!0))},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(c,d,f,g){if(!f||f.nodeType!==3&&f.nodeType!==8){var h,i,j,k,l,m,n,o,q,r,s=c.type||c,t=[];if($.test(s+p.event.triggered))return;s.indexOf("!")>=0&&(s=s.slice(0,-1),i=!0),s.indexOf(".")>=0&&(t=s.split("."),s=t.shift(),t.sort());if((!f||p.event.customEvent[s])&&!p.event.global[s])return;c=typeof c=="object"?c[p.expando]?c:new p.Event(s,c):new p.Event(s),c.type=s,c.isTrigger=!0,c.exclusive=i,c.namespace=t.join("."),c.namespace_re=c.namespace?new RegExp("(^|\\.)"+t.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,m=s.indexOf(":")<0?"on"+s:"";if(!f){h=p.cache;for(j in h)h[j].events&&h[j].events[s]&&p.event.trigger(c,d,h[j].handle.elem,!0);return}c.result=b,c.target||(c.target=f),d=d!=null?p.makeArray(d):[],d.unshift(c),n=p.event.special[s]||{};if(n.trigger&&n.trigger.apply(f,d)===!1)return;q=[[f,n.bindType||s]];if(!g&&!n.noBubble&&!p.isWindow(f)){r=n.delegateType||s,k=$.test(r+s)?f:f.parentNode;for(l=f;k;k=k.parentNode)q.push([k,r]),l=k;l===(f.ownerDocument||e)&&q.push([l.defaultView||l.parentWindow||a,r])}for(j=0;j<q.length&&!c.isPropagationStopped();j++)k=q[j][0],c.type=q[j][1],o=(p._data(k,"events")||{})[c.type]&&p._data(k,"handle"),o&&o.apply(k,d),o=m&&k[m],o&&p.acceptData(k)&&o.apply(k,d)===!1&&c.preventDefault();return c.type=s,!g&&!c.isDefaultPrevented()&&(!n._default||n._default.apply(f.ownerDocument,d)===!1)&&(s!=="click"||!p.nodeName(f,"a"))&&p.acceptData(f)&&m&&f[s]&&(s!=="focus"&&s!=="blur"||c.target.offsetWidth!==0)&&!p.isWindow(f)&&(l=f[m],l&&(f[m]=null),p.event.triggered=s,f[s](),p.event.triggered=b,l&&(f[m]=l)),c.result}return},dispatch:function(c){c=p.event.fix(c||a.event);var d,e,f,g,h,i,j,k,l,m,n,o=(p._data(this,"events")||{})[c.type]||[],q=o.delegateCount,r=[].slice.call(arguments),s=!c.exclusive&&!c.namespace,t=p.event.special[c.type]||{},u=[];r[0]=c,c.delegateTarget=this;if(t.preDispatch&&t.preDispatch.call(this,c)===!1)return;if(q&&(!c.button||c.type!=="click")){g=p(this),g.context=this;for(f=c.target;f!=this;f=f.parentNode||this)if(f.disabled!==!0||c.type!=="click"){i={},k=[],g[0]=f;for(d=0;d<q;d++)l=o[d],m=l.selector,i[m]===b&&(i[m]=g.is(m)),i[m]&&k.push(l);k.length&&u.push({elem:f,matches:k})}}o.length>q&&u.push({elem:this,matches:o.slice(q)});for(d=0;d<u.length&&!c.isPropagationStopped();d++){j=u[d],c.currentTarget=j.elem;for(e=0;e<j.matches.length&&!c.isImmediatePropagationStopped();e++){l=j.matches[e];if(s||!c.namespace&&!l.namespace||c.namespace_re&&c.namespace_re.test(l.namespace))c.data=l.data,c.handleObj=l,h=((p.event.special[l.origType]||{}).handle||l.handler).apply(j.elem,r),h!==b&&(c.result=h,h===!1&&(c.preventDefault(),c.stopPropagation()))}}return t.postDispatch&&t.postDispatch.call(this,c),c.result},props:"attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return a.which==null&&(a.which=b.charCode!=null?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,c){var d,f,g,h=c.button,i=c.fromElement;return a.pageX==null&&c.clientX!=null&&(d=a.target.ownerDocument||e,f=d.documentElement,g=d.body,a.pageX=c.clientX+(f&&f.scrollLeft||g&&g.scrollLeft||0)-(f&&f.clientLeft||g&&g.clientLeft||0),a.pageY=c.clientY+(f&&f.scrollTop||g&&g.scrollTop||0)-(f&&f.clientTop||g&&g.clientTop||0)),!a.relatedTarget&&i&&(a.relatedTarget=i===a.target?c.toElement:i),!a.which&&h!==b&&(a.which=h&1?1:h&2?3:h&4?2:0),a}},fix:function(a){if(a[p.expando])return a;var b,c,d=a,f=p.event.fixHooks[a.type]||{},g=f.props?this.props.concat(f.props):this.props;a=p.Event(d);for(b=g.length;b;)c=g[--b],a[c]=d[c];return a.target||(a.target=d.srcElement||e),a.target.nodeType===3&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,f.filter?f.filter(a,d):a},special:{ready:{setup:p.bindReady},load:{noBubble:!0},focus:{delegateType:"focusin"},blur:{delegateType:"focusout"},beforeunload:{setup:function(a,b,c){p.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}},simulate:function(a,b,c,d){var e=p.extend(new p.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?p.event.trigger(e,null,b):p.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},p.event.handle=p.event.dispatch,p.removeEvent=e.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){var d="on"+b;a.detachEvent&&(typeof a[d]=="undefined"&&(a[d]=null),a.detachEvent(d,c))},p.Event=function(a,b){if(this instanceof p.Event)a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault()?bb:ba):this.type=a,b&&p.extend(this,b),this.timeStamp=a&&a.timeStamp||p.now(),this[p.expando]=!0;else return new p.Event(a,b)},p.Event.prototype={preventDefault:function(){this.isDefaultPrevented=bb;var a=this.originalEvent;if(!a)return;a.preventDefault?a.preventDefault():a.returnValue=!1},stopPropagation:function(){this.isPropagationStopped=bb;var a=this.originalEvent;if(!a)return;a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=bb,this.stopPropagation()},isDefaultPrevented:ba,isPropagationStopped:ba,isImmediatePropagationStopped:ba},p.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){p.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj,g=f.selector;if(!e||e!==d&&!p.contains(d,e))a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b;return c}}}),p.support.submitBubbles||(p.event.special.submit={setup:function(){if(p.nodeName(this,"form"))return!1;p.event.add(this,"click._submit keypress._submit",function(a){var c=a.target,d=p.nodeName(c,"input")||p.nodeName(c,"button")?c.form:b;d&&!p._data(d,"_submit_attached")&&(p.event.add(d,"submit._submit",function(a){a._submit_bubble=!0}),p._data(d,"_submit_attached",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&p.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){if(p.nodeName(this,"form"))return!1;p.event.remove(this,"._submit")}}),p.support.changeBubbles||(p.event.special.change={setup:function(){if(V.test(this.nodeName)){if(this.type==="checkbox"||this.type==="radio")p.event.add(this,"propertychange._change",function(a){a.originalEvent.propertyName==="checked"&&(this._just_changed=!0)}),p.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1),p.event.simulate("change",this,a,!0)});return!1}p.event.add(this,"beforeactivate._change",function(a){var b=a.target;V.test(b.nodeName)&&!p._data(b,"_change_attached")&&(p.event.add(b,"change._change",function(a){this.parentNode&&!a.isSimulated&&!a.isTrigger&&p.event.simulate("change",this.parentNode,a,!0)}),p._data(b,"_change_attached",!0))})},handle:function(a){var b=a.target;if(this!==b||a.isSimulated||a.isTrigger||b.type!=="radio"&&b.type!=="checkbox")return a.handleObj.handler.apply(this,arguments)},teardown:function(){return p.event.remove(this,"._change"),V.test(this.nodeName)}}),p.support.focusinBubbles||p.each({focus:"focusin",blur:"focusout"},function(a,b){var c=0,d=function(a){p.event.simulate(b,a.target,p.event.fix(a),!0)};p.event.special[b]={setup:function(){c++===0&&e.addEventListener(a,d,!0)},teardown:function(){--c===0&&e.removeEventListener(a,d,!0)}}}),p.fn.extend({on:function(a,c,d,e,f){var g,h;if(typeof a=="object"){typeof c!="string"&&(d=d||c,c=b);for(h in a)this.on(h,c,d,a[h],f);return this}d==null&&e==null?(e=c,d=c=b):e==null&&(typeof c=="string"?(e=d,d=b):(e=d,d=c,c=b));if(e===!1)e=ba;else if(!e)return this;return f===1&&(g=e,e=function(a){return p().off(a),g.apply(this,arguments)},e.guid=g.guid||(g.guid=p.guid++)),this.each(function(){p.event.add(this,a,e,d,c)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,c,d){var e,f;if(a&&a.preventDefault&&a.handleObj)return e=a.handleObj,p(a.delegateTarget).off(e.namespace?e.origType+"."+e.namespace:e.origType,e.selector,e.handler),this;if(typeof a=="object"){for(f in a)this.off(f,c,a[f]);return this}if(c===!1||typeof c=="function")d=c,c=b;return d===!1&&(d=ba),this.each(function(){p.event.remove(this,a,d,c)})},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},live:function(a,b,c){return p(this.context).on(a,this.selector,b,c),this},die:function(a,b){return p(this.context).off(a,this.selector||"**",b),this},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return arguments.length==1?this.off(a,"**"):this.off(b,a||"**",c)},trigger:function(a,b){return this.each(function(){p.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0])return p.event.trigger(a,b,this[0],!0)},toggle:function(a){var b=arguments,c=a.guid||p.guid++,d=0,e=function(c){var e=(p._data(this,"lastToggle"+a.guid)||0)%d;return p._data(this,"lastToggle"+a.guid,e+1),c.preventDefault(),b[e].apply(this,arguments)||!1};e.guid=c;while(d<b.length)b[d++].guid=c;return this.click(e)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}}),p.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){p.fn[b]=function(a,c){return c==null&&(c=a,a=null),arguments.length>0?this.on(b,null,a,c):this.trigger(b)},Y.test(b)&&(p.event.fixHooks[b]=p.event.keyHooks),Z.test(b)&&(p.event.fixHooks[b]=p.event.mouseHooks)}),function(a,b){function bd(a,b,c,d){var e=0,f=b.length;for(;e<f;e++)Z(a,b[e],c,d)}function be(a,b,c,d,e,f){var g,h=$.setFilters[b.toLowerCase()];return h||Z.error(b),(a||!(g=e))&&bd(a||"*",d,g=[],e),g.length>0?h(g,c,f):[]}function bf(a,c,d,e,f){var g,h,i,j,k,l,m,n,p=0,q=f.length,s=L.POS,t=new RegExp("^"+s.source+"(?!"+r+")","i"),u=function(){var a=1,c=arguments.length-2;for(;a<c;a++)arguments[a]===b&&(g[a]=b)};for(;p<q;p++){s.exec(""),a=f[p],j=[],i=0,k=e;while(g=s.exec(a)){n=s.lastIndex=g.index+g[0].length;if(n>i){m=a.slice(i,g.index),i=n,l=[c],B.test(m)&&(k&&(l=k),k=e);if(h=H.test(m))m=m.slice(0,-5).replace(B,"$&*");g.length>1&&g[0].replace(t,u),k=be(m,g[1],g[2],l,k,h)}}k?(j=j.concat(k),(m=a.slice(i))&&m!==")"?B.test(m)?bd(m,j,d,e):Z(m,c,d,e?e.concat(k):k):o.apply(d,j)):Z(a,c,d,e)}return q===1?d:Z.uniqueSort(d)}function bg(a,b,c){var d,e,f,g=[],i=0,j=D.exec(a),k=!j.pop()&&!j.pop(),l=k&&a.match(C)||[""],m=$.preFilter,n=$.filter,o=!c&&b!==h;for(;(e=l[i])!=null&&k;i++){g.push(d=[]),o&&(e=" "+e);while(e){k=!1;if(j=B.exec(e))e=e.slice(j[0].length),k=d.push({part:j.pop().replace(A," "),captures:j});for(f in n)(j=L[f].exec(e))&&(!m[f]||(j=m[f](j,b,c)))&&(e=e.slice(j.shift().length),k=d.push({part:f,captures:j}));if(!k)break}}return k||Z.error(a),g}function bh(a,b,e){var f=b.dir,g=m++;return a||(a=function(a){return a===e}),b.first?function(b,c){while(b=b[f])if(b.nodeType===1)return a(b,c)&&b}:function(b,e){var h,i=g+"."+d,j=i+"."+c;while(b=b[f])if(b.nodeType===1){if((h=b[q])===j)return b.sizset;if(typeof h=="string"&&h.indexOf(i)===0){if(b.sizset)return b}else{b[q]=j;if(a(b,e))return b.sizset=!0,b;b.sizset=!1}}}}function bi(a,b){return a?function(c,d){var e=b(c,d);return e&&a(e===!0?c:e,d)}:b}function bj(a,b,c){var d,e,f=0;for(;d=a[f];f++)$.relative[d.part]?e=bh(e,$.relative[d.part],b):(d.captures.push(b,c),e=bi(e,$.filter[d.part].apply(null,d.captures)));return e}function bk(a){return function(b,c){var d,e=0;for(;d=a[e];e++)if(d(b,c))return!0;return!1}}var c,d,e,f,g,h=a.document,i=h.documentElement,j="undefined",k=!1,l=!0,m=0,n=[].slice,o=[].push,q=("sizcache"+Math.random()).replace(".",""),r="[\\x20\\t\\r\\n\\f]",s="(?:\\\\.|[-\\w]|[^\\x00-\\xa0])+",t=s.replace("w","w#"),u="([*^$|!~]?=)",v="\\["+r+"*("+s+")"+r+"*(?:"+u+r+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+t+")|)|)"+r+"*\\]",w=":("+s+")(?:\\((?:(['\"])((?:\\\\.|[^\\\\])*?)\\2|((?:[^,]|\\\\,|(?:,(?=[^\\[]*\\]))|(?:,(?=[^\\(]*\\))))*))\\)|)",x=":(nth|eq|gt|lt|first|last|even|odd)(?:\\((\\d*)\\)|)(?=[^-]|$)",y=r+"*([\\x20\\t\\r\\n\\f>+~])"+r+"*",z="(?=[^\\x20\\t\\r\\n\\f])(?:\\\\.|"+v+"|"+w.replace(2,7)+"|[^\\\\(),])+",A=new RegExp("^"+r+"+|((?:^|[^\\\\])(?:\\\\.)*)"+r+"+$","g"),B=new RegExp("^"+y),C=new RegExp(z+"?(?="+r+"*,|$)","g"),D=new RegExp("^(?:(?!,)(?:(?:^|,)"+r+"*"+z+")*?|"+r+"*(.*?))(\\)|$)"),E=new RegExp(z.slice(19,-6)+"\\x20\\t\\r\\n\\f>+~])+|"+y,"g"),F=/^(?:#([\w\-]+)|(\w+)|\.([\w\-]+))$/,G=/[\x20\t\r\n\f]*[+~]/,H=/:not\($/,I=/h\d/i,J=/input|select|textarea|button/i,K=/\\(?!\\)/g,L={ID:new RegExp("^#("+s+")"),CLASS:new RegExp("^\\.("+s+")"),NAME:new RegExp("^\\[name=['\"]?("+s+")['\"]?\\]"),TAG:new RegExp("^("+s.replace("[-","[-\\*")+")"),ATTR:new RegExp("^"+v),PSEUDO:new RegExp("^"+w),CHILD:new RegExp("^:(only|nth|last|first)-child(?:\\("+r+"*(even|odd|(([+-]|)(\\d*)n|)"+r+"*(?:([+-]|)"+r+"*(\\d+)|))"+r+"*\\)|)","i"),POS:new RegExp(x,"ig"),needsContext:new RegExp("^"+r+"*[>+~]|"+x,"i")},M={},N=[],O={},P=[],Q=function(a){return a.sizzleFilter=!0,a},R=function(a){return function(b){return b.nodeName.toLowerCase()==="input"&&b.type===a}},S=function(a){return function(b){var c=b.nodeName.toLowerCase();return(c==="input"||c==="button")&&b.type===a}},T=function(a){var b=!1,c=h.createElement("div");try{b=a(c)}catch(d){}return c=null,b},U=T(function(a){a.innerHTML="<select></select>";var b=typeof a.lastChild.getAttribute("multiple");return b!=="boolean"&&b!=="string"}),V=T(function(a){a.id=q+0,a.innerHTML="<a name='"+q+"'></a><div name='"+q+"'></div>",i.insertBefore(a,i.firstChild);var b=h.getElementsByName&&h.getElementsByName(q).length===2+h.getElementsByName(q+0).length;return g=!h.getElementById(q),i.removeChild(a),b}),W=T(function(a){return a.appendChild(h.createComment("")),a.getElementsByTagName("*").length===0}),X=T(function(a){return a.innerHTML="<a href='#'></a>",a.firstChild&&typeof a.firstChild.getAttribute!==j&&a.firstChild.getAttribute("href")==="#"}),Y=T(function(a){return a.innerHTML="<div class='hidden e'></div><div class='hidden'></div>",!a.getElementsByClassName||a.getElementsByClassName("e").length===0?!1:(a.lastChild.className="e",a.getElementsByClassName("e").length!==1)}),Z=function(a,b,c,d){c=c||[],b=b||h;var e,f,g,i,j=b.nodeType;if(j!==1&&j!==9)return[];if(!a||typeof a!="string")return c;g=ba(b);if(!g&&!d)if(e=F.exec(a))if(i=e[1]){if(j===9){f=b.getElementById(i);if(!f||!f.parentNode)return c;if(f.id===i)return c.push(f),c}else if(b.ownerDocument&&(f=b.ownerDocument.getElementById(i))&&bb(b,f)&&f.id===i)return c.push(f),c}else{if(e[2])return o.apply(c,n.call(b.getElementsByTagName(a),0)),c;if((i=e[3])&&Y&&b.getElementsByClassName)return o.apply(c,n.call(b.getElementsByClassName(i),0)),c}return bm(a,b,c,d,g)},$=Z.selectors={cacheLength:50,match:L,order:["ID","TAG"],attrHandle:{},createPseudo:Q,find:{ID:g?function(a,b,c){if(typeof b.getElementById!==j&&!c){var d=b.getElementById(a);return d&&d.parentNode?[d]:[]}}:function(a,c,d){if(typeof c.getElementById!==j&&!d){var e=c.getElementById(a);return e?e.id===a||typeof e.getAttributeNode!==j&&e.getAttributeNode("id").value===a?[e]:b:[]}},TAG:W?function(a,b){if(typeof b.getElementsByTagName!==j)return b.getElementsByTagName(a)}:function(a,b){var c=b.getElementsByTagName(a);if(a==="*"){var d,e=[],f=0;for(;d=c[f];f++)d.nodeType===1&&e.push(d);return e}return c}},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(K,""),a[3]=(a[4]||a[5]||"").replace(K,""),a[2]==="~="&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),a[1]==="nth"?(a[2]||Z.error(a[0]),a[3]=+(a[3]?a[4]+(a[5]||1):2*(a[2]==="even"||a[2]==="odd")),a[4]=+(a[6]+a[7]||a[2]==="odd")):a[2]&&Z.error(a[0]),a},PSEUDO:function(a){var b,c=a[4];return L.CHILD.test(a[0])?null:(c&&(b=D.exec(c))&&b.pop()&&(a[0]=a[0].slice(0,b[0].length-c.length-1),c=b[0].slice(0,-1)),a.splice(2,3,c||a[3]),a)}},filter:{ID:g?function(a){return a=a.replace(K,""),function(b){return b.getAttribute("id")===a}}:function(a){return a=a.replace(K,""),function(b){var c=typeof b.getAttributeNode!==j&&b.getAttributeNode("id");return c&&c.value===a}},TAG:function(a){return a==="*"?function(){return!0}:(a=a.replace(K,"").toLowerCase(),function(b){return b.nodeName&&b.nodeName.toLowerCase()===a})},CLASS:function(a){var b=M[a];return b||(b=M[a]=new RegExp("(^|"+r+")"+a+"("+r+"|$)"),N.push(a),N.length>$.cacheLength&&delete M[N.shift()]),function(a){return b.test(a.className||typeof a.getAttribute!==j&&a.getAttribute("class")||"")}},ATTR:function(a,b,c){return b?function(d){var e=Z.attr(d,a),f=e+"";if(e==null)return b==="!=";switch(b){case"=":return f===c;case"!=":return f!==c;case"^=":return c&&f.indexOf(c)===0;case"*=":return c&&f.indexOf(c)>-1;case"$=":return c&&f.substr(f.length-c.length)===c;case"~=":return(" "+f+" ").indexOf(c)>-1;case"|=":return f===c||f.substr(0,c.length+1)===c+"-"}}:function(b){return Z.attr(b,a)!=null}},CHILD:function(a,b,c,d){if(a==="nth"){var e=m++;return function(a){var b,f,g=0,h=a;if(c===1&&d===0)return!0;b=a.parentNode;if(b&&(b[q]!==e||!a.sizset)){for(h=b.firstChild;h;h=h.nextSibling)if(h.nodeType===1){h.sizset=++g;if(h===a)break}b[q]=e}return f=a.sizset-d,c===0?f===0:f%c===0&&f/c>=0}}return function(b){var c=b;switch(a){case"only":case"first":while(c=c.previousSibling)if(c.nodeType===1)return!1;if(a==="first")return!0;c=b;case"last":while(c=c.nextSibling)if(c.nodeType===1)return!1;return!0}}},PSEUDO:function(a,b,c,d){var e=$.pseudos[a]||$.pseudos[a.toLowerCase()];return e||Z.error("unsupported pseudo: "+a),e.sizzleFilter?e(b,c,d):e}},pseudos:{not:Q(function(a,b,c){var d=bl(a.replace(A,"$1"),b,c);return function(a){return!d(a)}}),enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&!!a.checked||b==="option"&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},parent:function(a){return!$.pseudos.empty(a)},empty:function(a){var b;a=a.firstChild;while(a){if(a.nodeName>"@"||(b=a.nodeType)===3||b===4)return!1;a=a.nextSibling}return!0},contains:Q(function(a){return function(b){return(b.textContent||b.innerText||bc(b)).indexOf(a)>-1}}),has:Q(function(a){return function(b){return Z(a,b).length>0}}),header:function(a){return I.test(a.nodeName)},text:function(a){var b,c;return a.nodeName.toLowerCase()==="input"&&(b=a.type)==="text"&&((c=a.getAttribute("type"))==null||c.toLowerCase()===b)},radio:R("radio"),checkbox:R("checkbox"),file:R("file"),password:R("password"),image:R("image"),submit:S("submit"),reset:S("reset"),button:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&a.type==="button"||b==="button"},input:function(a){return J.test(a.nodeName)},focus:function(a){var b=a.ownerDocument;return a===b.activeElement&&(!b.hasFocus||b.hasFocus())&&(!!a.type||!!a.href)},active:function(a){return a===a.ownerDocument.activeElement}},setFilters:{first:function(a,b,c){return c?a.slice(1):[a[0]]},last:function(a,b,c){var d=a.pop();return c?a:[d]},even:function(a,b,c){var d=[],e=c?1:0,f=a.length;for(;e<f;e=e+2)d.push(a[e]);return d},odd:function(a,b,c){var d=[],e=c?0:1,f=a.length;for(;e<f;e=e+2)d.push(a[e]);return d},lt:function(a,b,c){return c?a.slice(+b):a.slice(0,+b)},gt:function(a,b,c){return c?a.slice(0,+b+1):a.slice(+b+1)},eq:function(a,b,c){var d=a.splice(+b,1);return c?a:d}}};$.setFilters.nth=$.setFilters.eq,$.filters=$.pseudos,X||($.attrHandle={href:function(a){return a.getAttribute("href",2)},type:function(a){return a.getAttribute("type")}}),V&&($.order.push("NAME"),$.find.NAME=function(a,b){if(typeof b.getElementsByName!==j)return b.getElementsByName(a)}),Y&&($.order.splice(1,0,"CLASS"),$.find.CLASS=function(a,b,c){if(typeof b.getElementsByClassName!==j&&!c)return b.getElementsByClassName(a)});try{n.call(i.childNodes,0)[0].nodeType}catch(_){n=function(a){var b,c=[];for(;b=this[a];a++)c.push(b);return c}}var ba=Z.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?b.nodeName!=="HTML":!1},bb=Z.contains=i.compareDocumentPosition?function(a,b){return!!(a.compareDocumentPosition(b)&16)}:i.contains?function(a,b){var c=a.nodeType===9?a.documentElement:a,d=b.parentNode;return a===d||!!(d&&d.nodeType===1&&c.contains&&c.contains(d))}:function(a,b){while(b=b.parentNode)if(b===a)return!0;return!1},bc=Z.getText=function(a){var b,c="",d=0,e=a.nodeType;if(e){if(e===1||e===9||e===11){if(typeof a.textContent=="string")return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=bc(a)}else if(e===3||e===4)return a.nodeValue}else for(;b=a[d];d++)c+=bc(b);return c};Z.attr=function(a,b){var c,d=ba(a);return d||(b=b.toLowerCase()),$.attrHandle[b]?$.attrHandle[b](a):U||d?a.getAttribute(b):(c=a.getAttributeNode(b),c?typeof a[b]=="boolean"?a[b]?b:null:c.specified?c.value:null:null)},Z.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},[0,0].sort(function(){return l=0}),i.compareDocumentPosition?e=function(a,b){return a===b?(k=!0,0):(!a.compareDocumentPosition||!b.compareDocumentPosition?a.compareDocumentPosition:a.compareDocumentPosition(b)&4)?-1:1}:(e=function(a,b){if(a===b)return k=!0,0;if(a.sourceIndex&&b.sourceIndex)return a.sourceIndex-b.sourceIndex;var c,d,e=[],g=[],h=a.parentNode,i=b.parentNode,j=h;if(h===i)return f(a,b);if(!h)return-1;if(!i)return 1;while(j)e.unshift(j),j=j.parentNode;j=i;while(j)g.unshift(j),j=j.parentNode;c=e.length,d=g.length;for(var l=0;l<c&&l<d;l++)if(e[l]!==g[l])return f(e[l],g[l]);return l===c?f(a,g[l],-1):f(e[l],b,1)},f=function(a,b,c){if(a===b)return c;var d=a.nextSibling;while(d){if(d===b)return-1;d=d.nextSibling}return 1}),Z.uniqueSort=function(a){var b,c=1;if(e){k=l,a.sort(e);if(k)for(;b=a[c];c++)b===a[c-1]&&a.splice(c--,1)}return a};var bl=Z.compile=function(a,b,c){var d,e,f,g=O[a];if(g&&g.context===b)return g;e=bg(a,b,c);for(f=0;d=e[f];f++)e[f]=bj(d,b,c);return g=O[a]=bk(e),g.context=b,g.runs=g.dirruns=0,P.push(a),P.length>$.cacheLength&&delete O[P.shift()],g};Z.matches=function(a,b){return Z(a,null,null,b)},Z.matchesSelector=function(a,b){return Z(b,null,null,[a]).length>0};var bm=function(a,b,e,f,g){a=a.replace(A,"$1");var h,i,j,k,l,m,p,q,r,s=a.match(C),t=a.match(E),u=b.nodeType;if(L.POS.test(a))return bf(a,b,e,f,s);if(f)h=n.call(f,0);else if(s&&s.length===1){if(t.length>1&&u===9&&!g&&(s=L.ID.exec(t[0]))){b=$.find.ID(s[1],b,g)[0];if(!b)return e;a=a.slice(t.shift().length)}q=(s=G.exec(t[0]))&&!s.index&&b.parentNode||b,r=t.pop(),m=r.split(":not")[0];for(j=0,k=$.order.length;j<k;j++){p=$.order[j];if(s=L[p].exec(m)){h=$.find[p]((s[1]||"").replace(K,""),q,g);if(h==null)continue;m===r&&(a=a.slice(0,a.length-r.length)+m.replace(L[p],""),a||o.apply(e,n.call(h,0)));break}}}if(a){i=bl(a,b,g),d=i.dirruns++,h==null&&(h=$.find.TAG("*",G.test(a)&&b.parentNode||b));for(j=0;l=h[j];j++)c=i.runs++,i(l,b)&&e.push(l)}return e};h.querySelectorAll&&function(){var a,b=bm,c=/'|\\/g,d=/\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,e=[],f=[":active"],g=i.matchesSelector||i.mozMatchesSelector||i.webkitMatchesSelector||i.oMatchesSelector||i.msMatchesSelector;T(function(a){a.innerHTML="<select><option selected></option></select>",a.querySelectorAll("[selected]").length||e.push("\\["+r+"*(?:checked|disabled|ismap|multiple|readonly|selected|value)"),a.querySelectorAll(":checked").length||e.push(":checked")}),T(function(a){a.innerHTML="<p test=''></p>",a.querySelectorAll("[test^='']").length&&e.push("[*^$]="+r+"*(?:\"\"|'')"),a.innerHTML="<input type='hidden'>",a.querySelectorAll(":enabled").length||e.push(":enabled",":disabled")}),e=e.length&&new RegExp(e.join("|")),bm=function(a,d,f,g,h){if(!g&&!h&&(!e||!e.test(a)))if(d.nodeType===9)try{return o.apply(f,n.call(d.querySelectorAll(a),0)),f}catch(i){}else if(d.nodeType===1&&d.nodeName.toLowerCase()!=="object"){var j=d.getAttribute("id"),k=j||q,l=G.test(a)&&d.parentNode||d;j?k=k.replace(c,"\\$&"):d.setAttribute("id",k);try{return o.apply(f,n.call(l.querySelectorAll(a.replace(C,"[id='"+k+"'] $&")),0)),f}catch(i){}finally{j||d.removeAttribute("id")}}return b(a,d,f,g,h)},g&&(T(function(b){a=g.call(b,"div");try{g.call(b,"[test!='']:sizzle"),f.push($.match.PSEUDO)}catch(c){}}),f=new RegExp(f.join("|")),Z.matchesSelector=function(b,c){c=c.replace(d,"='$1']");if(!ba(b)&&!f.test(c)&&(!e||!e.test(c)))try{var h=g.call(b,c);if(h||a||b.document&&b.document.nodeType!==11)return h}catch(i){}return Z(c,null,null,[b]).length>0})}(),Z.attr=p.attr,p.find=Z,p.expr=Z.selectors,p.expr[":"]=p.expr.pseudos,p.unique=Z.uniqueSort,p.text=Z.getText,p.isXMLDoc=Z.isXML,p.contains=Z.contains}(a);var bc=/Until$/,bd=/^(?:parents|prev(?:Until|All))/,be=/^.[^:#\[\.,]*$/,bf=p.expr.match.needsContext,bg={children:!0,contents:!0,next:!0,prev:!0};p.fn.extend({find:function(a){var b,c,d,e,f,g,h=this;if(typeof a!="string")return p(a).filter(function(){for(b=0,c=h.length;b<c;b++)if(p.contains(h[b],this))return!0});g=this.pushStack("","find",a);for(b=0,c=this.length;b<c;b++){d=g.length,p.find(a,this[b],g);if(b>0)for(e=d;e<g.length;e++)for(f=0;f<d;f++)if(g[f]===g[e]){g.splice(e--,1);break}}return g},has:function(a){var b,c=p(a,this),d=c.length;return this.filter(function(){for(b=0;b<d;b++)if(p.contains(this,c[b]))return!0})},not:function(a){return this.pushStack(bj(this,a,!1),"not",a)},filter:function(a){return this.pushStack(bj(this,a,!0),"filter",a)},is:function(a){return!!a&&(typeof a=="string"?bf.test(a)?p(a,this.context).index(this[0])>=0:p.filter(a,this).length>0:this.filter(a).length>0)},closest:function(a,b){var c,d=0,e=this.length,f=[],g=bf.test(a)||typeof a!="string"?p(a,b||this.context):0;for(;d<e;d++){c=this[d];while(c&&c.ownerDocument&&c!==b&&c.nodeType!==11){if(g?g.index(c)>-1:p.find.matchesSelector(c,a)){f.push(c);break}c=c.parentNode}}return f=f.length>1?p.unique(f):f,this.pushStack(f,"closest",a)},index:function(a){return a?typeof a=="string"?p.inArray(this[0],p(a)):p.inArray(a.eQuery?a[0]:a,this):this[0]&&this[0].parentNode?this.prevAll().length:-1},add:function(a,b){var c=typeof a=="string"?p(a,b):p.makeArray(a&&a.nodeType?[a]:a),d=p.merge(this.get(),c);return this.pushStack(bh(c[0])||bh(d[0])?d:p.unique(d))},addBack:function(a){return this.add(a==null?this.prevObject:this.prevObject.filter(a))}}),p.fn.andSelf=p.fn.addBack,p.each({parent:function(a){var b=a.parentNode;return b&&b.nodeType!==11?b:null},parents:function(a){return p.dir(a,"parentNode")},parentsUntil:function(a,b,c){return p.dir(a,"parentNode",c)},next:function(a){return bi(a,"nextSibling")},prev:function(a){return bi(a,"previousSibling")},nextAll:function(a){return p.dir(a,"nextSibling")},prevAll:function(a){return p.dir(a,"previousSibling")},nextUntil:function(a,b,c){return p.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return p.dir(a,"previousSibling",c)},siblings:function(a){return p.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return p.sibling(a.firstChild)},contents:function(a){return p.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:p.merge([],a.childNodes)}},function(a,b){p.fn[a]=function(c,d){var e=p.map(this,b,c);return bc.test(a)||(d=c),d&&typeof d=="string"&&(e=p.filter(d,e)),e=this.length>1&&!bg[a]?p.unique(e):e,this.length>1&&bd.test(a)&&(e=e.reverse()),this.pushStack(e,a,k.call(arguments).join(","))}}),p.extend({filter:function(a,b,c){return c&&(a=":not("+a+")"),b.length===1?p.find.matchesSelector(b[0],a)?[b[0]]:[]:p.find.matches(a,b)},dir:function(a,c,d){var e=[],f=a[c];while(f&&f.nodeType!==9&&(d===b||f.nodeType!==1||!p(f).is(d)))f.nodeType===1&&e.push(f),f=f[c];return e},sibling:function(a,b){var c=[];for(;a;a=a.nextSibling)a.nodeType===1&&a!==b&&c.push(a);return c}});var bl="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",bm=/ jQuery\d+="(?:null|\d+)"/g,bn=/^\s+/,bo=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,bp=/<([\w:]+)/,bq=/<tbody/i,br=/<|&#?\w+;/,bs=/<(?:script|style|link)/i,bt=/<(?:script|object|embed|option|style)/i,bu=new RegExp("<(?:"+bl+")[\\s/>]","i"),bv=/^(?:checkbox|radio)$/,bw=/checked\s*(?:[^=]|=\s*.checked.)/i,bx=/\/(java|ecma)script/i,by=/^\s*<!(?:\[CDATA\[|\-\-)|[\]\-]{2}>\s*$/g,bz={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]},bA=bk(e),bB=bA.appendChild(e.createElement("div"));bz.optgroup=bz.option,bz.tbody=bz.tfoot=bz.colgroup=bz.caption=bz.thead,bz.th=bz.td,p.support.htmlSerialize||(bz._default=[1,"X<div>","</div>"]),p.fn.extend({text:function(a){return p.access(this,function(a){return a===b?p.text(this):this.empty().append((this[0]&&this[0].ownerDocument||e).createTextNode(a))},null,a,arguments.length)},wrapAll:function(a){if(p.isFunction(a))return this.each(function(b){p(this).wrapAll(a.call(this,b))});if(this[0]){var b=p(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&a.firstChild.nodeType===1)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return p.isFunction(a)?this.each(function(b){p(this).wrapInner(a.call(this,b))}):this.each(function(){var b=p(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=p.isFunction(a);return this.each(function(c){p(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){p.nodeName(this,"body")||p(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){(this.nodeType===1||this.nodeType===11)&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){(this.nodeType===1||this.nodeType===11)&&this.insertBefore(a,this.firstChild)})},before:function(){if(!bh(this[0]))return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=p.clean(arguments);return this.pushStack(p.merge(a,this),"before",this.selector)}},after:function(){if(!bh(this[0]))return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=p.clean(arguments);return this.pushStack(p.merge(this,a),"after",this.selector)}},remove:function(a,b){var c,d=0;for(;(c=this[d])!=null;d++)if(!a||p.filter(a,[c]).length)!b&&c.nodeType===1&&(p.cleanData(c.getElementsByTagName("*")),p.cleanData([c])),c.parentNode&&c.parentNode.removeChild(c);return this},empty:function(){var a,b=0;for(;(a=this[b])!=null;b++){a.nodeType===1&&p.cleanData(a.getElementsByTagName("*"));while(a.firstChild)a.removeChild(a.firstChild)}return this},clone:function(a,b){return a=a==null?!1:a,b=b==null?a:b,this.map(function(){return p.clone(this,a,b)})},html:function(a){return p.access(this,function(a){var c=this[0]||{},d=0,e=this.length;if(a===b)return c.nodeType===1?c.innerHTML.replace(bm,""):b;if(typeof a=="string"&&!bs.test(a)&&(p.support.htmlSerialize||!bu.test(a))&&(p.support.leadingWhitespace||!bn.test(a))&&!bz[(bp.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(bo,"<$1></$2>");try{for(;d<e;d++)c=this[d]||{},c.nodeType===1&&(p.cleanData(c.getElementsByTagName("*")),c.innerHTML=a);c=0}catch(f){}}c&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(a){return bh(this[0])?this.length?this.pushStack(p(p.isFunction(a)?a():a),"replaceWith",a):this:p.isFunction(a)?this.each(function(b){var c=p(this),d=c.html();c.replaceWith(a.call(this,b,d))}):(typeof a!="string"&&(a=p(a).detach()),this.each(function(){var b=this.nextSibling,c=this.parentNode;p(this).remove(),b?p(b).before(a):p(c).append(a)}))},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){a=[].concat.apply([],a);var e,f,g,h,i=0,j=a[0],k=[],l=this.length;if(!p.support.checkClone&&l>1&&typeof j=="string"&&bw.test(j))return this.each(function(){p(this).domManip(a,c,d)});if(p.isFunction(j))return this.each(function(e){var f=p(this);a[0]=j.call(this,e,c?f.html():b),f.domManip(a,c,d)});if(this[0]){e=p.buildFragment(a,this,k),g=e.fragment,f=g.firstChild,g.childNodes.length===1&&(g=f);if(f){c=c&&p.nodeName(f,"tr");for(h=e.cacheable||l-1;i<l;i++)d.call(c&&p.nodeName(this[i],"table")?bC(this[i],"tbody"):this[i],i===h?g:p.clone(g,!0,!0))}g=f=null,k.length&&p.each(k,function(a,b){b.src?p.ajax?p.ajax({url:b.src,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0}):p.error("no ajax"):p.globalEval((b.text||b.textContent||b.innerHTML||"").replace(by,"")),b.parentNode&&b.parentNode.removeChild(b)})}return this}}),p.buildFragment=function(a,c,d){var f,g,h,i=a[0];return c=c||e,c=(c[0]||c).ownerDocument||c[0]||c,typeof c.createDocumentFragment=="undefined"&&(c=e),a.length===1&&typeof i=="string"&&i.length<512&&c===e&&i.charAt(0)==="<"&&!bt.test(i)&&(p.support.checkClone||!bw.test(i))&&(p.support.html5Clone||!bu.test(i))&&(g=!0,f=p.fragments[i],h=f!==b),f||(f=c.createDocumentFragment(),p.clean(a,c,f,d),g&&(p.fragments[i]=h&&f)),{fragment:f,cacheable:g}},p.fragments={},p.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){p.fn[a]=function(c){var d,e=0,f=[],g=p(c),h=g.length,i=this.length===1&&this[0].parentNode;if((i==null||i&&i.nodeType===11&&i.childNodes.length===1)&&h===1)return g[b](this[0]),this;for(;e<h;e++)d=(e>0?this.clone(!0):this).get(),p(g[e])[b](d),f=f.concat(d);return this.pushStack(f,a,g.selector)}}),p.extend({clone:function(a,b,c){var d,e,f,g;p.support.html5Clone||p.isXMLDoc(a)||!bu.test("<"+a.nodeName+">")?g=a.cloneNode(!0):(bB.innerHTML=a.outerHTML,bB.removeChild(g=bB.firstChild));if((!p.support.noCloneEvent||!p.support.noCloneChecked)&&(a.nodeType===1||a.nodeType===11)&&!p.isXMLDoc(a)){bE(a,g),d=bF(a),e=bF(g);for(f=0;d[f];++f)e[f]&&bE(d[f],e[f])}if(b){bD(a,g);if(c){d=bF(a),e=bF(g);for(f=0;d[f];++f)bD(d[f],e[f])}}return d=e=null,g},clean:function(a,b,c,d){var f,g,h,i,j,k,l,m,n,o,q,r,s=0,t=[];if(!b||typeof b.createDocumentFragment=="undefined")b=e;for(g=b===e&&bA;(h=a[s])!=null;s++){typeof h=="number"&&(h+="");if(!h)continue;if(typeof h=="string")if(!br.test(h))h=b.createTextNode(h);else{g=g||bk(b),l=l||g.appendChild(b.createElement("div")),h=h.replace(bo,"<$1></$2>"),i=(bp.exec(h)||["",""])[1].toLowerCase(),j=bz[i]||bz._default,k=j[0],l.innerHTML=j[1]+h+j[2];while(k--)l=l.lastChild;if(!p.support.tbody){m=bq.test(h),n=i==="table"&&!m?l.firstChild&&l.firstChild.childNodes:j[1]==="<table>"&&!m?l.childNodes:[];for(f=n.length-1;f>=0;--f)p.nodeName(n[f],"tbody")&&!n[f].childNodes.length&&n[f].parentNode.removeChild(n[f])}!p.support.leadingWhitespace&&bn.test(h)&&l.insertBefore(b.createTextNode(bn.exec(h)[0]),l.firstChild),h=l.childNodes,l=g.lastChild}h.nodeType?t.push(h):t=p.merge(t,h)}l&&(g.removeChild(l),h=l=g=null);if(!p.support.appendChecked)for(s=0;(h=t[s])!=null;s++)p.nodeName(h,"input")?bG(h):typeof h.getElementsByTagName!="undefined"&&p.grep(h.getElementsByTagName("input"),bG);if(c){q=function(a){if(!a.type||bx.test(a.type))return d?d.push(a.parentNode?a.parentNode.removeChild(a):a):c.appendChild(a)};for(s=0;(h=t[s])!=null;s++)if(!p.nodeName(h,"script")||!q(h))c.appendChild(h),typeof h.getElementsByTagName!="undefined"&&(r=p.grep(p.merge([],h.getElementsByTagName("script")),q),t.splice.apply(t,[s+1,0].concat(r)),s+=r.length)}return t},cleanData:function(a,b){var c,d,e,f,g=0,h=p.expando,i=p.cache,j=p.support.deleteExpando,k=p.event.special;for(;(e=a[g])!=null;g++)if(b||p.acceptData(e)){d=e[h],c=d&&i[d];if(c){if(c.events)for(f in c.events)k[f]?p.event.remove(e,f):p.removeEvent(e,f,c.handle);i[d]&&(delete i[d],j?delete e[h]:e.removeAttribute?e.removeAttribute(h):e[h]=null,p.deletedIds.push(d))}}}}),function(){var a,b;p.uaMatch=function(a){a=a.toLowerCase();var b=/(chrome)[ \/]([\w.]+)/.exec(a)||/(webkit)[ \/]([\w.]+)/.exec(a)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(a)||/(msie) ([\w.]+)/.exec(a)||a.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(a)||[];return{browser:b[1]||"",version:b[2]||"0"}},a=p.uaMatch(g.userAgent),b={},a.browser&&(b[a.browser]=!0,b.version=a.version),b.webkit&&(b.safari=!0),p.browser=b,p.sub=function(){function a(b,c){return new a.fn.init(b,c)}p.extend(!0,a,this),a.superclass=this,a.fn=a.prototype=this(),a.fn.constructor=a,a.sub=this.sub,a.fn.init=function c(c,d){return d&&d instanceof p&&!(d instanceof a)&&(d=a(d)),p.fn.init.call(this,c,d,b)},a.fn.init.prototype=a.fn;var b=a(e);return a}}();var bH,bI,bJ,bK=/alpha\([^)]*\)/i,bL=/opacity=([^)]*)/,bM=/^(top|right|bottom|left)$/,bN=/^margin/,bO=new RegExp("^("+q+")(.*)$","i"),bP=new RegExp("^("+q+")(?!px)[a-z%]+$","i"),bQ=new RegExp("^([-+])=("+q+")","i"),bR={},bS={position:"absolute",visibility:"hidden",display:"block"},bT={letterSpacing:0,fontWeight:400,lineHeight:1},bU=["Top","Right","Bottom","Left"],bV=["Webkit","O","Moz","ms"],bW=p.fn.toggle;p.fn.extend({css:function(a,c){return p.access(this,function(a,c,d){return d!==b?p.style(a,c,d):p.css(a,c)},a,c,arguments.length>1)},show:function(){return bZ(this,!0)},hide:function(){return bZ(this)},toggle:function(a,b){var c=typeof a=="boolean";return p.isFunction(a)&&p.isFunction(b)?bW.apply(this,arguments):this.each(function(){(c?a:bY(this))?p(this).show():p(this).hide()})}}),p.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=bH(a,"opacity");return c===""?"1":c}}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":p.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(!a||a.nodeType===3||a.nodeType===8||!a.style)return;var f,g,h,i=p.camelCase(c),j=a.style;c=p.cssProps[i]||(p.cssProps[i]=bX(j,i)),h=p.cssHooks[c]||p.cssHooks[i];if(d===b)return h&&"get"in h&&(f=h.get(a,!1,e))!==b?f:j[c];g=typeof d,g==="string"&&(f=bQ.exec(d))&&(d=(f[1]+1)*f[2]+parseFloat(p.css(a,c)),g="number");if(d==null||g==="number"&&isNaN(d))return;g==="number"&&!p.cssNumber[i]&&(d+="px");if(!h||!("set"in h)||(d=h.set(a,d,e))!==b)try{j[c]=d}catch(k){}},css:function(a,c,d,e){var f,g,h,i=p.camelCase(c);return c=p.cssProps[i]||(p.cssProps[i]=bX(a.style,i)),h=p.cssHooks[c]||p.cssHooks[i],h&&"get"in h&&(f=h.get(a,!0,e)),f===b&&(f=bH(a,c)),f==="normal"&&c in bT&&(f=bT[c]),d||e!==b?(g=parseFloat(f),d||p.isNumeric(g)?g||0:f):f},swap:function(a,b,c){var d,e,f={};for(e in b)f[e]=a.style[e],a.style[e]=b[e];d=c.call(a);for(e in b)a.style[e]=f[e];return d}}),a.getComputedStyle?bH=function(a,b){var c,d,e,f,g=getComputedStyle(a,null),h=a.style;return g&&(c=g[b],c===""&&!p.contains(a.ownerDocument.documentElement,a)&&(c=p.style(a,b)),bP.test(c)&&bN.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=c,c=g.width,h.width=d,h.minWidth=e,h.maxWidth=f)),c}:e.documentElement.currentStyle&&(bH=function(a,b){var c,d,e=a.currentStyle&&a.currentStyle[b],f=a.style;return e==null&&f&&f[b]&&(e=f[b]),bP.test(e)&&!bM.test(b)&&(c=f.left,d=a.runtimeStyle&&a.runtimeStyle.left,d&&(a.runtimeStyle.left=a.currentStyle.left),f.left=b==="fontSize"?"1em":e,e=f.pixelLeft+"px",f.left=c,d&&(a.runtimeStyle.left=d)),e===""?"auto":e}),p.each(["height","width"],function(a,b){p.cssHooks[b]={get:function(a,c,d){if(c)return a.offsetWidth!==0||bH(a,"display")!=="none"?ca(a,b,d):p.swap(a,bS,function(){return ca(a,b,d)})},set:function(a,c,d){return b$(a,c,d?b_(a,b,d,p.support.boxSizing&&p.css(a,"boxSizing")==="border-box"):0)}}}),p.support.opacity||(p.cssHooks.opacity={get:function(a,b){return bL.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=p.isNumeric(b)?"alpha(opacity="+b*100+")":"",f=d&&d.filter||c.filter||"";c.zoom=1;if(b>=1&&p.trim(f.replace(bK,""))===""&&c.removeAttribute){c.removeAttribute("filter");if(d&&!d.filter)return}c.filter=bK.test(f)?f.replace(bK,e):f+" "+e}}),p(function(){p.support.reliableMarginRight||(p.cssHooks.marginRight={get:function(a,b){return p.swap(a,{display:"inline-block"},function(){if(b)return bH(a,"marginRight")})}}),!p.support.pixelPosition&&p.fn.position&&p.each(["top","left"],function(a,b){p.cssHooks[b]={get:function(a,c){if(c){var d=bH(a,b);return bP.test(d)?p(a).position()[b]+"px":d}}}})}),p.expr&&p.expr.filters&&(p.expr.filters.hidden=function(a){return a.offsetWidth===0&&a.offsetHeight===0||!p.support.reliableHiddenOffsets&&(a.style&&a.style.display||bH(a,"display"))==="none"},p.expr.filters.visible=function(a){return!p.expr.filters.hidden(a)}),p.each({margin:"",padding:"",border:"Width"},function(a,b){p.cssHooks[a+b]={expand:function(c){var d,e=typeof c=="string"?c.split(" "):[c],f={};for(d=0;d<4;d++)f[a+bU[d]+b]=e[d]||e[d-2]||e[0];return f}},bN.test(a)||(p.cssHooks[a+b].set=b$)});var cc=/%20/g,cd=/\[\]$/,ce=/\r?\n/g,cf=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,cg=/^(?:select|textarea)/i;p.fn.extend({serialize:function(){return p.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?p.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||cg.test(this.nodeName)||cf.test(this.type))}).map(function(a,b){var c=p(this).val();return c==null?null:p.isArray(c)?p.map(c,function(a,c){return{name:b.name,value:a.replace(ce,"\r\n")}}):{name:b.name,value:c.replace(ce,"\r\n")}}).get()}}),p.param=function(a,c){var d,e=[],f=function(a,b){b=p.isFunction(b)?b():b==null?"":b,e[e.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};c===b&&(c=p.ajaxSettings&&p.ajaxSettings.traditional);if(p.isArray(a)||a.eQuery&&!p.isPlainObject(a))p.each(a,function(){f(this.name,this.value)});else for(d in a)ch(d,a[d],c,f);return e.join("&").replace(cc,"+")};var ci,cj,ck=/#.*$/,cl=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,cm=/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,cn=/^(?:GET|HEAD)$/,co=/^\/\//,cp=/\?/,cq=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,cr=/([?&])_=[^&]*/,cs=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,ct=p.fn.load,cu={},cv={},cw=["*/"]+["*"];try{ci=f.href}catch(cx){ci=e.createElement("a"),ci.href="",ci=ci.href}cj=cs.exec(ci.toLowerCase())||[],p.fn.load=function(a,c,d){if(typeof a!="string"&&ct)return ct.apply(this,arguments);if(!this.length)return this;var e,f,g,h=this,i=a.indexOf(" ");return i>=0&&(e=a.slice(i,a.length),a=a.slice(0,i)),p.isFunction(c)?(d=c,c=b):typeof c=="object"&&(f="POST"),p.ajax({url:a,type:f,dataType:"html",data:c,complete:function(a,b){d&&h.each(d,g||[a.responseText,b,a])}}).done(function(a){g=arguments,h.html(e?p("<div>").append(a.replace(cq,"")).find(e):a)}),this},p.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){p.fn[b]=function(a){return this.on(b,a)}}),p.each(["get","post"],function(a,c){p[c]=function(a,d,e,f){return p.isFunction(d)&&(f=f||e,e=d,d=b),p.ajax({type:c,url:a,data:d,success:e,dataType:f})}}),p.extend({getScript:function(a,c){return p.get(a,b,c,"script")},getJSON:function(a,b,c){return p.get(a,b,c,"json")},ajaxSetup:function(a,b){return b?cA(a,p.ajaxSettings):(b=a,a=p.ajaxSettings),cA(a,b),a},ajaxSettings:{url:ci,isLocal:cm.test(cj[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded; charset=UTF-8",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":cw},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":a.String,"text html":!0,"text json":p.parseJSON,"text xml":p.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:cy(cu),ajaxTransport:cy(cv),ajax:function(a,c){function y(a,c,f,i){var k,s,t,u,w,y=c;if(v===2)return;v=2,h&&clearTimeout(h),g=b,e=i||"",x.readyState=a>0?4:0,f&&(u=cB(l,x,f));if(a>=200&&a<300||a===304)l.ifModified&&(w=x.getResponseHeader("Last-Modified"),w&&(p.lastModified[d]=w),w=x.getResponseHeader("Etag"),w&&(p.etag[d]=w)),a===304?(y="notmodified",k=!0):(k=cC(l,u),y=k.state,s=k.data,t=k.error,k=!t);else{t=y;if(!y||a)y="error",a<0&&(a=0)}x.status=a,x.statusText=""+(c||y),k?o.resolveWith(m,[s,y,x]):o.rejectWith(m,[x,y,t]),x.statusCode(r),r=b,j&&n.trigger("ajax"+(k?"Success":"Error"),[x,l,k?s:t]),q.fireWith(m,[x,y]),j&&(n.trigger("ajaxComplete",[x,l]),--p.active||p.event.trigger("ajaxStop"))}typeof a=="object"&&(c=a,a=b),c=c||{};var d,e,f,g,h,i,j,k,l=p.ajaxSetup({},c),m=l.context||l,n=m!==l&&(m.nodeType||m instanceof p)?p(m):p.event,o=p.Deferred(),q=p.Callbacks("once memory"),r=l.statusCode||{},t={},u={},v=0,w="canceled",x={readyState:0,setRequestHeader:function(a,b){if(!v){var c=a.toLowerCase();a=u[c]=u[c]||a,t[a]=b}return this},getAllResponseHeaders:function(){return v===2?e:null},getResponseHeader:function(a){var c;if(v===2){if(!f){f={};while(c=cl.exec(e))f[c[1].toLowerCase()]=c[2]}c=f[a.toLowerCase()]}return c===b?null:c},overrideMimeType:function(a){return v||(l.mimeType=a),this},abort:function(a){return a=a||w,g&&g.abort(a),y(0,a),this}};o.promise(x),x.success=x.done,x.error=x.fail,x.complete=q.add,x.statusCode=function(a){if(a){var b;if(v<2)for(b in a)r[b]=[r[b],a[b]];else b=a[x.status],x.always(b)}return this},l.url=((a||l.url)+"").replace(ck,"").replace(co,cj[1]+"//"),l.dataTypes=p.trim(l.dataType||"*").toLowerCase().split(s),l.crossDomain==null&&(i=cs.exec(l.url.toLowerCase()),l.crossDomain=!(!i||i[1]==cj[1]&&i[2]==cj[2]&&(i[3]||(i[1]==="http:"?80:443))==(cj[3]||(cj[1]==="http:"?80:443)))),l.data&&l.processData&&typeof l.data!="string"&&(l.data=p.param(l.data,l.traditional)),cz(cu,l,c,x);if(v===2)return x;j=l.global,l.type=l.type.toUpperCase(),l.hasContent=!cn.test(l.type),j&&p.active++===0&&p.event.trigger("ajaxStart");if(!l.hasContent){l.data&&(l.url+=(cp.test(l.url)?"&":"?")+l.data,delete l.data),d=l.url;if(l.cache===!1){var z=p.now(),A=l.url.replace(cr,"$1_="+z);l.url=A+(A===l.url?(cp.test(l.url)?"&":"?")+"_="+z:"")}}(l.data&&l.hasContent&&l.contentType!==!1||c.contentType)&&x.setRequestHeader("Content-Type",l.contentType),l.ifModified&&(d=d||l.url,p.lastModified[d]&&x.setRequestHeader("If-Modified-Since",p.lastModified[d]),p.etag[d]&&x.setRequestHeader("If-None-Match",p.etag[d])),x.setRequestHeader("Accept",l.dataTypes[0]&&l.accepts[l.dataTypes[0]]?l.accepts[l.dataTypes[0]]+(l.dataTypes[0]!=="*"?", "+cw+"; q=0.01":""):l.accepts["*"]);for(k in l.headers)x.setRequestHeader(k,l.headers[k]);if(!l.beforeSend||l.beforeSend.call(m,x,l)!==!1&&v!==2){w="abort";for(k in{success:1,error:1,complete:1})x[k](l[k]);g=cz(cv,l,c,x);if(!g)y(-1,"No Transport");else{x.readyState=1,j&&n.trigger("ajaxSend",[x,l]),l.async&&l.timeout>0&&(h=setTimeout(function(){x.abort("timeout")},l.timeout));try{v=1,g.send(t,y)}catch(B){if(v<2)y(-1,B);else throw B}}return x}return x.abort()},active:0,lastModified:{},etag:{}});var cD=[],cE=/\?/,cF=/(=)\?(?=&|$)|\?\?/,cG=p.now();p.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=cD.pop()||p.expando+"_"+cG++;return this[a]=!0,a}}),p.ajaxPrefilter("json jsonp",function(c,d,e){var f,g,h,i=c.data,j=c.url,k=c.jsonp!==!1,l=k&&cF.test(j),m=k&&!l&&typeof i=="string"&&!(c.contentType||"").indexOf("application/x-www-form-urlencoded")&&cF.test(i);if(c.dataTypes[0]==="jsonp"||l||m)return f=c.jsonpCallback=p.isFunction(c.jsonpCallback)?c.jsonpCallback():c.jsonpCallback,g=a[f],l?c.url=j.replace(cF,"$1"+f):m?c.data=i.replace(cF,"$1"+f):k&&(c.url+=(cE.test(j)?"&":"?")+c.jsonp+"="+f),c.converters["script json"]=function(){return h||p.error(f+" was not called"),h[0]},c.dataTypes[0]="json",a[f]=function(){h=arguments},e.always(function(){a[f]=g,c[f]&&(c.jsonpCallback=d.jsonpCallback,cD.push(f)),h&&p.isFunction(g)&&g(h[0]),h=g=b}),"script"}),p.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){return p.globalEval(a),a}}}),p.ajaxPrefilter("script",function(a){a.cache===b&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),p.ajaxTransport("script",function(a){if(a.crossDomain){var c,d=e.head||e.getElementsByTagName("head")[0]||e.documentElement;return{send:function(f,g){c=e.createElement("script"),c.async="async",a.scriptCharset&&(c.charset=a.scriptCharset),c.src=a.url,c.onload=c.onreadystatechange=function(a,e){if(e||!c.readyState||/loaded|complete/.test(c.readyState))c.onload=c.onreadystatechange=null,d&&c.parentNode&&d.removeChild(c),c=b,e||g(200,"success")},d.insertBefore(c,d.firstChild)},abort:function(){c&&c.onload(0,1)}}}});var cH,cI=a.ActiveXObject?function(){for(var a in cH)cH[a](0,1)}:!1,cJ=0;p.ajaxSettings.xhr=a.ActiveXObject?function(){return!this.isLocal&&cK()||cL()}:cK,function(a){p.extend(p.support,{ajax:!!a,cors:!!a&&"withCredentials"in a})}(p.ajaxSettings.xhr()),p.support.ajax&&p.ajaxTransport(function(c){if(!c.crossDomain||p.support.cors){var d;return{send:function(e,f){var g,h,i=c.xhr();c.username?i.open(c.type,c.url,c.async,c.username,c.password):i.open(c.type,c.url,c.async);if(c.xhrFields)for(h in c.xhrFields)i[h]=c.xhrFields[h];c.mimeType&&i.overrideMimeType&&i.overrideMimeType(c.mimeType),!c.crossDomain&&!e["X-Requested-With"]&&(e["X-Requested-With"]="XMLHttpRequest");try{for(h in e)i.setRequestHeader(h,e[h])}catch(j){}i.send(c.hasContent&&c.data||null),d=function(a,e){var h,j,k,l,m;try{if(d&&(e||i.readyState===4)){d=b,g&&(i.onreadystatechange=p.noop,cI&&delete cH[g]);if(e)i.readyState!==4&&i.abort();else{h=i.status,k=i.getAllResponseHeaders(),l={},m=i.responseXML,m&&m.documentElement&&(l.xml=m);try{l.text=i.responseText}catch(a){}try{j=i.statusText}catch(n){j=""}!h&&c.isLocal&&!c.crossDomain?h=l.text?200:404:h===1223&&(h=204)}}}catch(o){e||f(-1,o)}l&&f(h,j,l,k)},c.async?i.readyState===4?setTimeout(d,0):(g=++cJ,cI&&(cH||(cH={},p(a).unload(cI)),cH[g]=d),i.onreadystatechange=d):d()},abort:function(){d&&d(0,1)}}}});var cM,cN,cO=/^(?:toggle|show|hide)$/,cP=new RegExp("^(?:([-+])=|)("+q+")([a-z%]*)$","i"),cQ=/queueHooks$/,cR=[cX],cS={"*":[function(a,b){var c,d,e,f=this.createTween(a,b),g=cP.exec(b),h=f.cur(),i=+h||0,j=1;if(g){c=+g[2],d=g[3]||(p.cssNumber[a]?"":"px");if(d!=="px"&&i){i=p.css(f.elem,a,!0)||c||1;do e=j=j||".5",i=i/j,p.style(f.elem,a,i+d),j=f.cur()/h;while(j!==1&&j!==e)}f.unit=d,f.start=i,f.end=g[1]?i+(g[1]+1)*c:c}return f}]};p.Animation=p.extend(cV,{tweener:function(a,b){p.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");var c,d=0,e=a.length;for(;d<e;d++)c=a[d],cS[c]=cS[c]||[],cS[c].unshift(b)},prefilter:function(a,b){b?cR.unshift(a):cR.push(a)}}),p.Tween=cY,cY.prototype={constructor:cY,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(p.cssNumber[c]?"":"px")},cur:function(){var a=cY.propHooks[this.prop];return a&&a.get?a.get(this):cY.propHooks._default.get(this)},run:function(a){var b,c=cY.propHooks[this.prop];return this.pos=b=p.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration),this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):cY.propHooks._default.set(this),this}},cY.prototype.init.prototype=cY.prototype,cY.propHooks={_default:{get:function(a){var b;return a.elem[a.prop]==null||!!a.elem.style&&a.elem.style[a.prop]!=null?(b=p.css(a.elem,a.prop,!1,""),!b||b==="auto"?0:b):a.elem[a.prop]},set:function(a){p.fx.step[a.prop]?p.fx.step[a.prop](a):a.elem.style&&(a.elem.style[p.cssProps[a.prop]]!=null||p.cssHooks[a.prop])?p.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},cY.propHooks.scrollTop=cY.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},p.each(["toggle","show","hide"],function(a,b){var c=p.fn[b];p.fn[b]=function(d,e,f){return d==null||typeof d=="boolean"||!a&&p.isFunction(d)&&p.isFunction(e)?c.apply(this,arguments):this.animate(cZ(b,!0),d,e,f)}}),p.fn.extend({fadeTo:function(a,b,c,d){return this.filter(bY).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=p.isEmptyObject(a),f=p.speed(b,c,d),g=function(){var b=cV(this,p.extend({},a),f);e&&b.stop(!0)};return e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,c,d){var e=function(a){var b=a.stop;delete a.stop,b(d)};return typeof a!="string"&&(d=c,c=a,a=b),c&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,c=a!=null&&a+"queueHooks",f=p.timers,g=p._data(this);if(c)g[c]&&g[c].stop&&e(g[c]);else for(c in g)g[c]&&g[c].stop&&cQ.test(c)&&e(g[c]);for(c=f.length;c--;)f[c].elem===this&&(a==null||f[c].queue===a)&&(f[c].anim.stop(d),b=!1,f.splice(c,1));(b||!d)&&p.dequeue(this,a)})}}),p.each({slideDown:cZ("show"),slideUp:cZ("hide"),slideToggle:cZ("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){p.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),p.speed=function(a,b,c){var d=a&&typeof a=="object"?p.extend({},a):{complete:c||!c&&b||p.isFunction(a)&&a,duration:a,easing:c&&b||b&&!p.isFunction(b)&&b};d.duration=p.fx.off?0:typeof d.duration=="number"?d.duration:d.duration in p.fx.speeds?p.fx.speeds[d.duration]:p.fx.speeds._default;if(d.queue==null||d.queue===!0)d.queue="fx";return d.old=d.complete,d.complete=function(){p.isFunction(d.old)&&d.old.call(this),d.queue&&p.dequeue(this,d.queue)},d},p.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},p.timers=[],p.fx=cY.prototype.init,p.fx.tick=function(){var a,b=p.timers,c=0;for(;c<b.length;c++)a=b[c],!a()&&b[c]===a&&b.splice(c--,1);b.length||p.fx.stop()},p.fx.timer=function(a){a()&&p.timers.push(a)&&!cN&&(cN=setInterval(p.fx.tick,p.fx.interval))},p.fx.interval=13,p.fx.stop=function(){clearInterval(cN),cN=null},p.fx.speeds={slow:600,fast:200,_default:400},p.fx.step={},p.expr&&p.expr.filters&&(p.expr.filters.animated=function(a){return p.grep(p.timers,function(b){return a===b.elem}).length});var c$=/^(?:body|html)$/i;p.fn.offset=function(a){if(arguments.length)return a===b?this:this.each(function(b){p.offset.setOffset(this,a,b)});var c,d,e,f,g,h,i,j,k,l,m=this[0],n=m&&m.ownerDocument;if(!n)return;return(e=n.body)===m?p.offset.bodyOffset(m):(d=n.documentElement,p.contains(d,m)?(c=m.getBoundingClientRect(),f=c_(n),g=d.clientTop||e.clientTop||0,h=d.clientLeft||e.clientLeft||0,i=f.pageYOffset||d.scrollTop,j=f.pageXOffset||d.scrollLeft,k=c.top+i-g,l=c.left+j-h,{top:k,left:l}):{top:0,left:0})},p.offset={bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;return p.support.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(p.css(a,"marginTop"))||0,c+=parseFloat(p.css(a,"marginLeft"))||0),{top:b,left:c}},setOffset:function(a,b,c){var d=p.css(a,"position");d==="static"&&(a.style.position="relative");var e=p(a),f=e.offset(),g=p.css(a,"top"),h=p.css(a,"left"),i=(d==="absolute"||d==="fixed")&&p.inArray("auto",[g,h])>-1,j={},k={},l,m;i?(k=e.position(),l=k.top,m=k.left):(l=parseFloat(g)||0,m=parseFloat(h)||0),p.isFunction(b)&&(b=b.call(a,c,f)),b.top!=null&&(j.top=b.top-f.top+l),b.left!=null&&(j.left=b.left-f.left+m),"using"in b?b.using.call(a,j):e.css(j)}},p.fn.extend({position:function(){if(!this[0])return;var a=this[0],b=this.offsetParent(),c=this.offset(),d=c$.test(b[0].nodeName)?{top:0,left:0}:b.offset();return c.top-=parseFloat(p.css(a,"marginTop"))||0,c.left-=parseFloat(p.css(a,"marginLeft"))||0,d.top+=parseFloat(p.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(p.css(b[0],"borderLeftWidth"))||0,{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||e.body;while(a&&!c$.test(a.nodeName)&&p.css(a,"position")==="static")a=a.offsetParent;return a||e.body})}}),p.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,c){var d=/Y/.test(c);p.fn[a]=function(e){return p.access(this,function(a,e,f){var g=c_(a);if(f===b)return g?c in g?g[c]:g.document.documentElement[e]:a[e];g?g.scrollTo(d?p(g).scrollLeft():f,d?f:p(g).scrollTop()):a[e]=f},a,e,arguments.length,null)}}),p.each({Height:"height",Width:"width"},function(a,c){p.each({padding:"inner"+a,content:c,"":"outer"+a},function(d,e){p.fn[e]=function(e,f){var g=arguments.length&&(d||typeof e!="boolean"),h=d||(e===!0||f===!0?"margin":"border");return p.access(this,function(c,d,e){var f;return p.isWindow(c)?c.document.documentElement["client"+a]:c.nodeType===9?(f=c.documentElement,Math.max(c.body["scroll"+a],f["scroll"+a],c.body["offset"+a],f["offset"+a],f["client"+a])):e===b?p.css(c,d,e,h):p.style(c,d,e,h)},c,g?e:b,g)}})}),a.eQuery=a.e$=p,typeof define=="function"&&define.amd&&define.amd.eQuery&&define("equery",[],function(){return p})})(window);function __ecmp(command,id,callback){ 
    switch(command){
        case 'decode':
            ecmpDecode(id,callback);    
        break;
        case 'auto':
            ecmpAuto(id,callback);    
        break;
        case 'allowed':
            ecmpIsAllowed(id,callback);
        break;
        case 'vendor':
            ecmpVendorData(id,callback);
        break;
        case 'evendor':
            ecmpVendorData(id,callback,1);
        break;
        case 'filled':
            ecmpFilled(id,callback);
        break;
        case 'status':
        case 'getStatus':
            ecmpStatus(id,callback);
        break;
        case 'getEStatus':
            ecmpStatusEtarget(id,callback);
        break;
        case 'show':
            ecmpShowHide('show');
        break;
        case 'hide':
            ecmpShowHide('hide');
        break;
    }   
}

function ecmpAuto(id,callback){
    ecmpShowHide('show',id,callback);
}

function ecmpShowHide(type,id,callback){
    if(type=='show'){
        if(typeof(showGPopup)=='function'){
            showGPopup(7);
        }
    }
    if(type=='hide'){
        if(typeof(hideGPopup)=='function'){
            hideGPopup(9);
        }
    }
}

function ecmpDecode(id,callback){
    if(typeof(__tcfapi)=='function'){
        __tcfapi('decode',2,callback,ecmpCookies('euconsent-v2'));
    }    
}

function ecmpVendorData(id,callback,etarget){
    var resobj = {};
    resobj.vendorConsents = false;
    resobj.vendorLegitimateInterests = false;
    resobj.purposeConsents = [];
    resobj.purposeLegitimateInterests = [];
    if(typeof(__tcfapi)=='function'){
        __tcfapi('decode',2,function(a){
            if(typeof(a)=='object' && !!a){
                var vcobj = a.vendorConsents;
                var vlobj = a.vendorLegitimateInterests;
                if(etarget){
                    if(typeof(a.publisherConsents)=='object'){
                        vcobj = a.publisherConsents;
                        vlobj = a.publisherLegitimateInterests;
                    }
                }
                if(typeof(vcobj)=='object'){
                    if(vdres = Array.from(vcobj).find(function(i,v){if(i[0]==id) return i;})){
                        if(vdres[1]){
                            resobj.vendorConsents = true;
                        }
                    }
                }
                if(typeof(vlobj)=='object'){
                    if(vdres = Array.from(vlobj).find(function(i,v){if(i[0]==id) return i;})){
                        if(vdres[1]){
                            resobj.vendorLegitimateInterests = true;
                        }
                    }
                }
                if(typeof(a.purposeConsents)=='object'){
                    Array.from(a.purposeConsents).forEach(function(i,v){
                        if(i[1]){
                            resobj.purposeConsents.push(i[0]);    
                        }
                    })
                }
                if(typeof(a.purposeLegitimateInterests)=='object'){
                    Array.from(a.purposeLegitimateInterests).forEach(function(i,v){
                        if(i[1]){
                            resobj.purposeLegitimateInterests.push(i[0]);    
                        }
                    })
                }
            }
            callback(resobj);
        },ecmpCookies('euconsent-v2'));
    }    
}

function ecmpFilled(id,callback){
    if(typeof(__tcfapi)=='function'){
        __tcfapi('getTCData',2,function(r){
            var cnt = false;
            if(typeof(r.vendor)=='object'){
                if(typeof(r.vendor.consents)=='object'){
                    if(typeof(r.vendor.consents[1])=='boolean'){
                        cnt = true;
                    }   
                }
            }
            if(typeof(callback)=='function'){
                callback(cnt); 
            }
        });
    }    
}

function ecmpStatus(id,callback){
    ecmpIsAllowed(id,callback);
}

function ecmpStatusEtarget(id,callback){
    ecmpIsAllowedEtarget(id,callback);
}

function ecmpIsAllowed(id,callback){
    ecmpDecode(id,function(response){
        var allowed = false;
        if(typeof(response)=='object'){
            if(typeof(response.vendorConsents)=='object'){
                if(typeof(response.vendorConsents.set_)=='object'){
                    response.vendorConsents.set_.forEach(function(i,v){
                        if(v==id){
                            allowed = true;
                        }
                    });
                } 
            }
            if(typeof(response.vendorLegitimateInterests)=='object'){
                if(typeof(response.vendorLegitimateInterests.set_)=='object'){
                    response.vendorLegitimateInterests.set_.forEach(function(i,v){
                        if(v==id){
                            allowed = true;
                        }
                    });
                } 
            }
        }  
        if(typeof(callback)=='function'){
            callback(allowed);
        }     
    });    
}

function ecmpIsAllowedEtarget(id,callback){
    ecmpDecode(id,function(response){
        var allowed = false;
        if(typeof(response)=='object'){
            if(typeof(response.publisherConsents)=='object'){
                if(typeof(response.publisherConsents.set_)=='object'){
                    response.publisherConsents.set_.forEach(function(i,v){
                        if(v==id){
                            allowed = true;
                        }
                    });
                } 
            }
            if(typeof(response.publisherLegitimateInterests)=='object'){
                if(typeof(response.publisherLegitimateInterests.set_)=='object'){
                    response.publisherLegitimateInterests.set_.forEach(function(i,v){
                        if(v==id){
                            allowed = true;
                        }
                    });
                } 
            }
        }  
        if(typeof(callback)=='function'){
            callback(allowed);
        }     
    });    
}

function ecmpCookies(name){
    var cookies = document.cookie;
    var cpoarts = false;
    var vars = [];
    if(typeof(cookies)=='string'){
        cookies = cookies.split(';');
        for(var k in cookies){
            if(cookies[k] && cookies[k].length>0 && typeof(cookies[k])=='string'){
                if(cookies[k].indexOf('euconsent')>=0){ 
                    cpoarts = cookies[k].split('=');
                    if(cpoarts[0].length>10){
                        vars[cpoarts[0].replace(/ /g,'')] = cpoarts[1];
                    }
                }
            }
        }
    }
    return vars[name];
}if(typeof(window.__et_tcfapiloaded)=='undefined'){
    window.__et_tcfapiloaded = 0;
}
(function (d,w) {

    this.variables = [];
    this.variables['ourips'] = parseInt('0');

    this.debug = function(){
        var args = arguments;
        var debugon = Math.max(window.location.href.indexOf('tcfdebug'),document.referrer.indexOf('tcfdebug')); 
        if(debugon>=0){
            console.log(args);
        }
    }

    this.urlHasPart = function(part){
        var haspart = Math.max(window.location.href.indexOf(part),document.referrer.indexOf(part)); 
        if(haspart>=0){
            return true;  
        }
        return false;
    }
    
    this.debug('start')
    
    this.setvals = function(){

        this.debug('setvals');
        
        this.vid = '5';
        this.variables['hidden'] = (parseInt('1' ? '1' : 0)===1) ? 'gdpr_hidden' : '';
        this.variables['test'] = '';
        this.variables['clona'] = parseInt('0');
        this.variables['apionly'] = parseInt('0');
        this.variables['btype'] = 0;
        this.variables['etIDprefix'] = 10000;
        this.variables['cookieloaded'] = 0;
        this.variables['cookiescaned'] = -1;
        this.variables['safari'] = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
        this.variables['inthemiddle'] = parseInt('0');
        this.variables['openbutton'] = parseInt('1');;
        this.variables['speciclass'] = '';
        this.variables['doccookie'] = '';
        this.variables['cookies'] = [];
        this.variables['gcookies'] = [];
        this.variables['gcookies']['euconsent-v2'] = '';
        this.variables['clona_def_hidden'] = 'gdpr_hidden';
        this.variables['open_hidden'] = (parseInt('1')>0 ? '' : 'gdpr_hidden');
        this.variables['close_hidden'] = (parseInt('0')>0 ? '' : 'gdpr_hidden');
        this.variables['allowed_vendors'] = [6,10,13,16,25,28,32,36,42,45,48,50,52,58,61,68,69,76,77,79,85,91,98,132,138,144,164,165,177,183,190,226,247,253,255,278,293,328,345,428,511,539,570,608,716,755,772];
        this.variables['stacks'] = [-2,-1,8,16];
        this.variables['purpose_global'] = [];

        if(this.vid==333333){
            this.variables['allowed_vendors'] = [1, 8, 10, 11, 12, 13, 16, 21, 23, 25, 28, 30, 32, 36, 40, 48, 50, 52, 57, 58, 59, 60, 61, 68, 69, 73, 76, 77, 79, 80, 85, 91, 94, 102, 104, 109, 122, 126, 128, 129, 130, 132, 140, 142, 144, 165, 173, 184, 185, 192, 202, 209, 210, 211, 231, 238, 243, 254, 264, 272, 275, 278, 302, 325, 373, 385, 423, 431, 434, 468, 475, 498, 528, 565, 577, 591, 614, 647, 665, 667, 678, 686, 755, 793, 804];    
        }

        this.variables['usedPurps'] = [];
        this.variables['usedLegits'] = [];

        this.lang = 'local';

        if(this.variables['inthemiddle']){
            this.variables['speciclass'] = 'middle';
        }
        if(this.variables['safari'] && false){
            this.variables['close_hidden'] = '';
        }

        this.variables['gvl'] = null;
        this.variables['vendors'] = null;
        this.variables['evendors'] = {"vendorListVersion":1,"vendors":{"5":{"id":5,"name":"PEREX, a.s.","description":"","policyUrl":"https:\/\/www.pravda.sk\/info\/9157-ochrana-osobnych-udajov-gdpr\/","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"4":{"id":4,"name":"Slovensk\u00e1 produk\u010dn\u00e1, a.s.","description":"Slovensk\u00e1 produk\u010dn\u00e1, a.s. ako prev\u00e1dzkovate\u013e a jeho partneri vyu\u017e\u00edvaj\u00fa technol\u00f3giu cookies na prisp\u00f4sobenie obsahu a rekl\u00e1m, uchov\u00e1vanie a pr\u00edstup k inform\u00e1ci\u00e1m. Svoj s\u00fahlas s vyu\u017e\u00edvan\u00edm cookies na uveden\u00e9 \u00fa\u010dely pre Slovensk\u00fa produk\u010dn\u00fa, a.s. a \u010fal\u0161\u00edch pr\u00edjemcov udel\u00edte kliknut\u00edm na \u201eS\u00fahlas\u00edm\". Udelen\u00fd s\u00fahlas m\u00f4\u017eete zmeni\u0165, pr\u00edpadne odvola\u0165 na str\u00e1nke Cookies \r\n<a href=https:\/\/www.joj.sk\/pouzivanie-cookies style=color:#eb1b34;font-weight:bold;>Pravidl\u00e1 pou\u017e\u00edvania cookies<\/a>\r\n","policyUrl":"<a href=https:\/\/www.joj.sk\/pouzivanie-cookies style=color:#eb1b34;font-weight:bold;>Cookies<\/a>\r\n\r\n\r\n","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"6":{"id":6,"name":"Zoznam s.r.o","description":"Spolo\u010dnos\u0165 Zoznam, s.r.o. ako prev\u00e1dzkovate\u013e a spolupracuj\u00face spolo\u010dnosti pou\u017e\u00edvaj\u00fa s\u00fabory cookies a in\u00e9 online identifik\u00e1tory, pri ktor\u00fdch doch\u00e1dza k spracovaniu \u00fadajov, aj osobn\u00fdch, ktor\u00e9 s\u00fa potrebn\u00e9 na zobrazenie webovej str\u00e1nky a jej funk\u010dnos\u0165, na pohodln\u00e9 nastavenie webov\u00fdch str\u00e1nok, na vytv\u00e1ranie anonymn\u00fdch \u0161tatist\u00edk alebo na zobrazenie personalizovan\u00e9ho obsahu a presonalizovanej reklamy pod\u013ea va\u0161ich z\u00e1ujmov. Kliknut\u00edm na \u201eUpravi\u0165\u201c m\u00f4\u017eete dobrovo\u013ene rozhodn\u00fa\u0165, ktor\u00e9 sp\u00f4soby pou\u017eitia t\u00fdchto \u00fadajov, na ak\u00fd \u00fa\u010del a pre ak\u00e9 spolo\u010dnosti chcete povoli\u0165. \u010eal\u0161ie inform\u00e1cie o spracovan\u00ed osobn\u00fdch \u00fadajov n\u00e1jdete v na\u0161ich \u201e<a href=https:\/\/media.zoznam.sk\/pravne-informacie\/ochrana-sukromia\/podmienky-ochrany-sukromia-a-spracuvania-udajov>Podmienkach ochrany s\u00fakromia<\/a>\u201c a \u201e<a href=https:\/\/media.zoznam.sk\/pravne-informacie\/ochrana-sukromia\/cookies-zoznam>Cookies politike na na\u0161ich str\u00e1nkach<\/a>\u201c. Svoje rozhodnutie m\u00f4\u017eete kedyko\u013evek zmeni\u0165 pomocou \u201eNastavenia s\u00fakromia\u201c v dolnej \u010dasti webovej str\u00e1nky.","policyUrl":"<a href=https:\/\/media.zoznam.sk\/pravne-informacie\/ochrana-sukromia\/podmienky-ochrany-sukromia-a-spracuvania-udajov>Podmienkach ochrany s\u00fakromia<\/a>\r\n<a href=https:\/\/media.zoznam.sk\/pravne-informacie\/ochrana-sukromia\/cookies-zoznam>Cookies politike na na\u0161ich str\u00e1nkach<\/a>","purposeIds":[1,2,3,4,5,6,7,8,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,10],"legIntPurposes":[]},"7":{"id":7,"name":"Ringier Axel Springer SK, a. s","description":" ","policyUrl":"https:\/\/www.ringieraxelspringer.pl\/slovak\/wp-content\/uploads\/sites\/6\/2019\/05\/ochrana_osobnych_udajov-1.pdf","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"8":{"id":8,"name":"SITA Slovensk\u00e1 tla\u010dov\u00e1 agent\u00fara a.s","description":" ","policyUrl":"https:\/\/www.webnoviny.sk\/ochrana-osobnych-udajov-cookies\/, https:\/\/www.webnoviny.sk\/ochrana-osobnych-udajov-cookies\/, https:\/\/najky.webnoviny.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/damskajazda.webnoviny.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/autolike.webnoviny.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/mnamky-recepty.webnoviny.sk\/ochrana-osobnych-udajov-a-cookies\/,https:\/\/dran.webnoviny.sk\/ochrana-osobnych-udajov-a-cookies\/,https:\/\/cestujsi.webnoviny.sk\/ochrana-osobnych-udajov-a-cookies\/, http:\/\/bratm.najky.webnoviny.sk\/info\/podmienky-pouzivania, https:\/\/najappky.webnoviny.sk\/ochrana-osobnych-udajov-a-cookies\/https:\/\/venergetike.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/vzdravotnictve.sk\/ochrana-osobnych-udajov-a-cookies\/,https:\/\/vofinanciach.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/nasadoprava.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/vpotravinarstve.sk\/ochrana-osobnych-udajov-a-cookies\/https:\/\/vrealitach.sk\/ochrana-osobnych-udajov-a-cookies\/https:\/\/podnikam.sk\/ochrana-osobnych-udajov-cookies\/, https:\/\/byvaniehrou.sk\/ochrana-osobnych-udajov-a-cookies\/\thttps:\/\/zdravoteka.sk\/ochrana-sukromia\/, https:\/\/bratislavaden.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/nitraden.sk\/ochrana-osobnych-udajov-a-cookies\/, https:\/\/zilinaden.sk\/ochrana-osobnych-udajov-a-cookies\/ , https:\/\/nasvidiek.sk\/ochrana-osobnych-udajov-a-cookies\/\r\n","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[1],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"9":{"id":9,"name":"News and Media Holding a.s.","description":"","policyUrl":"https:\/\/www.newsandmedia.sk\/gdpr\/","purposeIds":[1,2,3,4,5],"legIntPurposeIds":[],"specialPurposes":[],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5],"legIntPurposes":[]},"11":{"id":11,"name":"Startitup s.r.o., Interez Media s.r.o.","description":"","policyUrl":"https:\/\/www.startitup.sk\/podmienky-ochrany-sukromia-privacy-policy\/ https:\/\/fontech.startitup.sk\/podmienky-ochrany-sukromia-privacy-policy\/ https:\/\/odzadu.startitup.sk\/podmienky-ochrany-sukromia-privacy-policy\/ https:\/\/emefka.sk\/pravidla-ochrany-sukromia\/ https:\/\/www.interez.sk\/podmienky-ochrany-sukromia-privacy-policy\/ https:\/\/psych.interez.sk\/podmienky-ochrany-sukromia-privacy-policy\/ https:\/\/receptik.interez.sk\/podmienky-ochrany-sukromia-privacy-policy\/ https:\/\/www.babskeveci.sk\/podmienky-ochrany-sukromia-privacy-policy\/ https:\/\/imhd.sk\/transport\/doc\/sk\/17442\/Zasady-ochrany-osobnych-udajov","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[1,2],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"12":{"id":12,"name":"MAFRA Slovakia, a. s.","description":"Na na\u0161ich str\u00e1nkach pou\u017e\u00edvame cookies. Sl\u00fa\u017eia na zlep\u0161enie na\u0161ej pr\u00e1ce a v\u00e1\u0161ho z\u00e1\u017eitku na webe #DOMAIN#. Pre bli\u017e\u0161ie inform\u00e1cie o va\u0161ich pr\u00e1vach nav\u0161t\u00edvte <a href=https:\/\/hnonline.sk\/gdpr\/1749691-pravidla-pouzivania-cookies style=color:#0089d0;font-weight:bold;> Pravidl\u00e1 pou\u017e\u00edvania cookies<\/a> Spracovanie a spr\u00e1vu cookies nastav\u00edte priamo vo va\u0161om prehliada\u010di. Svoj s\u00fahlas s vyu\u017e\u00edvan\u00edm cookies pre #DOMAIN# a \u010fal\u0161\u00edch pr\u00edjemcov udel\u00edte kliknut\u00edm na tla\u010didlo \"S\u00fahlas\u00edm\". Udelen\u00fd s\u00fahlas m\u00f4\u017eete zmeni\u0165 alebo odvola\u0165 prostredn\u00edctvom tejto str\u00e1nky.\r\n\r\n\r\n\r\n","policyUrl":"<a href=https:\/\/hnonline.sk\/gdpr\/1749691-pravidla-pouzivania-cookies style=color:#0089d0;font-weight:bold;> Pravidl\u00e1 pou\u017e\u00edvania cookies<\/a>","purposeIds":[1,2,3,4,5],"legIntPurposeIds":[],"specialPurposes":[],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5],"legIntPurposes":[]},"14":{"id":14,"name":"FUN MEDIA GROUP, a.s. ","description":"Na t\u00fdchto webov\u00fdch str\u00e1nkach vyu\u017e\u00edvame technol\u00f3giu cookies na \u00fa\u010dely cielenia a personaliz\u00e1cie obsahu a reklamy. Uveden\u00e9 sprac\u00favanie zah\u0155\u0148a sprac\u00favanie na \u00fa\u010dely priameho marketingu vr\u00e1tane profilovania vo\u010di ktor\u00e9mu m\u00e1te pr\u00e1vo kedyko\u013evek namieta\u0165. Kliknut\u00edm na \u201eS\u00fahlas\u00edm\u201c ude\u013eujete svoj s\u00fahlas s vyu\u017e\u00edvan\u00edm cookies na dan\u00fd \u00fa\u010del pre FUN r\u00e1dio ako aj \u010fal\u0161\u00edch pr\u00edjemcov, ktor\u00fd m\u00f4\u017eete kedyko\u013evek odvola\u0165. V polo\u017eke \u201eDetaily\u201c m\u00f4\u017eete upravi\u0165 zoznam dan\u00fdch pr\u00edjemcov ako aj rozsah dovolen\u00e9ho sprac\u00favania na dan\u00fd \u00fa\u010del.Viac inform\u00e1ci\u00ed sa dozviete v na\u0161ich <a target=_blank href=https:\/\/www.funradio.sk\/clanok\/27130-osobne-udaje\/>Podmienkach ochrany s\u00fakromia.<\/a>\r\n\r\n","policyUrl":"<a target=_blank href=https:\/\/www.funradio.sk\/clanok\/27130-osobne-udaje\/>Podmienkach ochrany s\u00fakromia.<\/a>","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"16":{"id":16,"name":"Internet.sk, a.s.","description":"Na tomto webe vyu\u017e\u00edvame technol\u00f3giu cookies na \u00fa\u010dely cielenia a personaliz\u00e1cie obsahu a reklamy. Uveden\u00e9 sprac\u00favanie zah\u0155\u0148a sprac\u00favanie na \u00fa\u010dely marketingu vr\u00e1tane profilovania vo\u010di ktor\u00e9mu m\u00e1te pr\u00e1vo kedyko\u013evek namieta\u0165.<br>\r\n<br>\r\nKliknut\u00edm na \u201eS\u00fahlas\u00edm\u201c ude\u013eujete svoj s\u00fahlas s vyu\u017e\u00edvan\u00edm cookies na dan\u00fd \u00fa\u010del pre Internet.sk, a.s. ako aj \u010fal\u0161\u00edch pr\u00edjemcov, ktor\u00fd m\u00f4\u017eete kedyko\u013evek odvola\u0165. V polo\u017eke \u201eDetaily\u201c m\u00f4\u017eete upravi\u0165 zoznam dan\u00fdch pr\u00edjemcov ako aj rozsah dovolen\u00e9ho sprac\u00favania na dan\u00fd \u00fa\u010del. ","policyUrl":"https:\/\/www.internet.sk\/cookie.html\r\nhttps:\/\/www.dnes24.sk\/dokumenty\/podmienky-pouzivania-1\r\nhttps:\/\/www.sport7.sk\/cookies\r\nhttps:\/\/www.imeteo.sk\/cookie-law\r\nhttp:\/\/www.fony.sk\/cookies\r\nhttps:\/\/www.rodinka.sk\/\r\nhttps:\/\/eduworld.sk\/cookies\r\nhttps:\/\/www.ephoto.sk\/ephoto\/cookies\r\nhttps:\/\/zlavy.odpadnes.sk\/ochrana-osobnych-udajov\r\nhttps:\/\/www.vosveteit.sk\/obchodne-podmienky-a-cookies\/\r\n","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"17":{"id":17,"name":"ETARGET SE","description":"","policyUrl":"https:\/\/www.etarget.sk\/privacy.php","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[1,2],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"18":{"id":18,"name":"FPD Media, a.s.","description":"FPD Media, a.s. ako prev\u00e1dzkovate\u013e a jeho partneri vyu\u017e\u00edvaj\u00fa technol\u00f3giu cookies na prisp\u00f4sobenie obsahu a rekl\u00e1m, uchov\u00e1vanie a pr\u00edstup k inform\u00e1ci\u00e1m. Svoj s\u00fahlas s vyu\u017e\u00edvan\u00edm cookies na uveden\u00e9 \u00fa\u010dely pre FPD Media, a.s. a \u010fal\u0161\u00edch pr\u00edjemcov udel\u00edte kliknut\u00edm na \u201eS\u00fahlas\u00edm\". Udelen\u00fd s\u00fahlas m\u00f4\u017eete zmeni\u0165, pr\u00edpadne odvola\u0165 na str\u00e1nke <a href=https:\/\/www.cas.sk\/clanok\/728517\/zasady style=color:#eb1b34;font-weight:bold;>Z\u00e1sady pou\u017e\u00edvania cookies<\/a>.","policyUrl":"<a href=https:\/\/www.cas.sk\/clanok\/728517\/zasady style=color:#eb1b34;font-weight:bold;>Z\u00e1sady pou\u017e\u00edvania cookies<\/a>","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"19":{"id":19,"name":"Petit Press, a.s.","description":"Petit Press, a.s. a jeho partneri vyu\u017e\u00edvaj\u00fa technol\u00f3giu cookies a sprac\u00favaj\u00fa osobn\u00e9 d\u00e1ta ako napr\u00edklad IP adresy a cookie identifik\u00e1tory na \u00fa\u010dely zaznamen\u00e1vania inform\u00e1ci\u00ed o Va\u0161ich z\u00e1ujmoch a zobrazen\u00fdch reklam\u00e1ch,  aktivit\u00e1ch na prezeran\u00fdch str\u00e1nkach,  aby V\u00e1m mohli pon\u00faknu\u0165 pre V\u00e1s najrelevantnej\u0161\u00ed obsah, alebo reklamu, \u010falej na meranie v\u00fdkonnosti obsahu \u010di \u010fal\u0161iu analytiku. Svoj s\u00fahlas na uveden\u00e9 \u00fa\u010dely udel\u00edte kliknut\u00edm na \"S\u00fahlas\u00edm\", svoj s\u00fahlas m\u00f4\u017eete kedyko\u013evek zmeni\u0165 na tejto str\u00e1nke.  Viac sa dozviete v na\u0161ich <a target=_blank href=https:\/\/www.sme.sk\/dok\/20814016\/pravidla-pouzivania-cookies>Pravidl\u00e1ch pou\u017e\u00edvania cookies<\/a>","policyUrl":"<a target=_blank href=https:\/\/www.sme.sk\/dok\/20814016\/pravidla-pouzivania-cookies>Pravidl\u00e1ch pou\u017e\u00edvania cookies<\/a>","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"20":{"id":20,"name":"C.E.N. s.r.o.","description":"C.E.N. s.r.o. a jeho partneri vyu\u017e\u00edvaj\u00fa technol\u00f3giu cookies a sprac\u00favaj\u00fa osobn\u00e9 d\u00e1ta ako napr\u00edklad IP adresy a cookie identifik\u00e1tory na \u00fa\u010dely zaznamen\u00e1vania inform\u00e1ci\u00ed o Va\u0161ich z\u00e1ujmoch a zobrazen\u00fdch reklam\u00e1ch, aby V\u00e1m mohli pon\u00faknu\u0165 relevantnej\u0161\u00ed obsah alebo reklamu, \u010falej na meranie v\u00fdkonnosti obsahu \u010di \u010fal\u0161iu analytiku. Svoj s\u00fahlas na uveden\u00e9 \u00fa\u010dely udel\u00edte kliknut\u00edm na \"S\u00fahlas\u00edm\", svoj s\u00fahlas m\u00f4\u017eete kedyko\u013evek zmeni\u0165 v tomto okne. Viac sa dozviete v na\u0161ich <a target=_blank href=https:\/\/www.ta3.com\/pravidla-pouzivania-cookies.html>Pravidl\u00e1ch pou\u017e\u00edvania cookies<\/a>\r\n\r\n","policyUrl":"<a target=_blank href=https:\/\/www.ta3.com\/pravidla-pouzivania-cookies.html>Pravidl\u00e1ch pou\u017e\u00edvania cookies<\/a>","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"21":{"id":21,"name":"Media Ad (internet.sk)","description":"Na tomto webe vyu\u017e\u00edvame technol\u00f3giu cookies na \u00fa\u010dely cielenia a personaliz\u00e1cie obsahu a reklamy. Uveden\u00e9 sprac\u00favanie zah\u0155\u0148a sprac\u00favanie na \u00fa\u010dely marketingu vr\u00e1tane profilovania vo\u010di ktor\u00e9mu m\u00e1te pr\u00e1vo kedyko\u013evek namieta\u0165.<br>\r\n<br>\r\nKliknut\u00edm na \u201eS\u00fahlas\u00edm\u201c ude\u013eujete svoj s\u00fahlas s vyu\u017e\u00edvan\u00edm cookies na dan\u00fd \u00fa\u010del pre Internet.sk, a.s. ako aj \u010fal\u0161\u00edch pr\u00edjemcov, ktor\u00fd m\u00f4\u017eete kedyko\u013evek odvola\u0165. V polo\u017eke \u201eDetaily\u201c m\u00f4\u017eete upravi\u0165 zoznam dan\u00fdch pr\u00edjemcov ako aj rozsah dovolen\u00e9ho sprac\u00favania na dan\u00fd \u00fa\u010del. ","policyUrl":"https:\/\/www.internet.sk\/cookie.html\r\nhttps:\/\/www.sdetmi.com\/cookie\/\r\nhttps:\/\/www.kamzakrasou.sk\/ochrana-sukromia\r\nhttps:\/\/www.topspeed.sk\/ochrana-sukromia\r\n","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"22":{"id":22,"name":"N Press, s.r.o.","description":"","policyUrl":"https:\/\/dennikn.sk\/podmienky-spracuvania-osobnych-udajov\/","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]},"23":{"id":23,"name":"W PRESS a.s.","description":"","policyUrl":"https:\/\/www.tyzden.sk\/info\/vseobecne\/spracovanie-osobnych-udajov\/","purposeIds":[1,2,3,4,5,6,7,8,9,10],"legIntPurposeIds":[],"specialPurposes":[1,2],"features":[1,2,3],"specialFeatures":[1],"purposes":[1,2,3,4,5,6,7,8,9,10],"legIntPurposes":[]}}};
        
        this.vendor_wrap = this._ce('','div','vendor_outer_wrap');

        this.modelLoader();

        this.searchForLocalCookie();
        this.firstInclude(); 
         
    }

    /*
    this.loadOtherScripts = function(cnt=0){
        if(parseInt(this.vid)==20 && parseInt('0')===1 && false){
            var taold = document.getElementById('large_leaderboard_1');
            if(!!!taold && cnt<20){
                setTimeout(function(){
                    this.loadOtherScripts(cnt++);
                },100);
                return;
            }
            var tanew = document.createElement('div');
            taold.id = '_et_large_leaderboard_1';
            var scrpt = document.createElement('script');
            scrpt.src = '//sk.search.etargetnet.com/generic/header_bidding.php?ref=58130&placement=_et_large_leaderboard_1';
            scrpt.async = true;
            document.body.appendChild(scrpt);
            console.log('ta3 ready 3');
        }
    }
    */
    
    this.isMobileDevice = function(){
        this.isMobileCheck = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) this.isMobileCheck = true;})(navigator.userAgent||navigator.vendor||window.opera);
        return this.isMobileCheck;
    }
    
    this.searchForLocalCookie = function(){
        this.variables['doccookie'] = document.cookie;
        if(typeof(this.variables['doccookie'])=='string'){
            this.variables['doccookie'] = this.variables['doccookie'].split(';');
            for(var k in this.variables['doccookie']){
                if(this.variables['doccookie'][k] && this.variables['doccookie'][k].length>0 && typeof(this.variables['doccookie'][k])=='string'){
                    if(this.variables['doccookie'][k].indexOf('euconsent')>=0){ 
                        this.variables['cookieparts'] = this.variables['doccookie'][k].split('=');
                        if(this.variables['cookieparts'][0].length>10){
                            this.variables['cookies'][this.variables['cookieparts'][0].replace(/ /g,'')] = this.variables['cookieparts'][1];
                            if(typeof(this.variables['test'])!='undefined'){
                                if(this.variables['test']=='1'){
                                    this.logAction(12);
                                    continue;
                                }
                            }
                            this.variables['hidden'] = 'gdpr_hidden';
                        }
                    }
                }
            }
        }
        if(typeof(this.variables['cookies']['euconsent-v2'])=='string'){
            if(this.variables['cookies']['euconsent-v2'].length>10){
                this.variables['cookieloaded']++;
            }
        }
    }
    
    this.gbody = function(){

        if(this.variables['isSafariDevice']){
            this.variables['clona_def_hidden'] = 'gdpr_hidden';    
        }
        var _et_gdpr_open_img = this._ce('','img');
        _et_gdpr_open_img.src = 'https://www.etarget.sk/img/gdpr_icon.png';
        
        var _et_gdpr_open = this._ce(_et_gdpr_open_img,'div','gdpr_open '+this.variables['open_hidden']);
        
        var _et_gdpr_clona = this._ce('','div','gdpr_clona hidden '+this.variables['clona_def_hidden']);
        var _et_gdpr_clear = this._ce('','div','clear_line');
        var _et_gdpr_popup = this._ce('','div','gdpr_consent_popup hidden '+this.variables['speciclass']);
        _et_gdpr_popup.id = '5';
        var _et_gdpr_close_popup = this._ce('X','div','gdpr_close '+this.variables['close_hidden']);

        var _et_gdpr_scope = this._ce('GLOBAL scope','div','scope');
        
        var _et_gdpr_tabs = this._ce('','div','tabs');
        _et_gdpr_tabs.appendChild(this._ce(this.variables['gvl']['specialFeatures'][1].name+'<>'+this.variables['gvl']['en']['specialFeatures'][1].name,'tab','purpose stack_tab stack_-2 active'));
        _et_gdpr_tabs.appendChild(this._ce(this.variables['gvl']['purposes'][1].name+'<>'+this.variables['gvl']['en']['purposes'][1].name,'tab','purpose stack_tab stack_-1'));
        _et_gdpr_tabs.appendChild(this._ce(this.variables['gvl']['stacks'][8].name+'<>'+this.variables['gvl']['en']['stacks'][8].name,'tab','purpose stack_tab stack_8'));
        _et_gdpr_tabs.appendChild(this._ce(this.variables['gvl']['stacks'][16].name+'<>'+this.variables['gvl']['en']['stacks'][16].name,'tab','purpose stack_tab stack_16'));
        _et_gdpr_tabs.appendChild(this._ce('Zoznam príjemcov<>All vendors','tab','vendor'));
        
        var _et_gdpr_slide2 = this._ce('','div','gdpr_slide2 slide');
        _et_gdpr_slide2.appendChild(_et_gdpr_tabs);

        _et_gdpr_slide2.appendChild(this.vendor_wrap);
        _et_gdpr_slide2.appendChild(_et_gdpr_clear);
        
        var _et_gdpr_flag_local = this._ce('','div','flag local active sk');
        var _et_gdpr_flag_global = this._ce('','div','flag global en');
        
        var _et_gdpr_flags = this._ce('','div','flag_wrap');
        _et_gdpr_flags.appendChild(_et_gdpr_flag_local);
        _et_gdpr_flags.appendChild(_et_gdpr_flag_global);
        
        var _et_gdpr_text1_head = this._ce('','div','gdheader');
        _et_gdpr_text1_head.appendChild(this._ce('Vážime si vaše súkromie<>We value your privacy','span'));
        _et_gdpr_text1_head.appendChild(_et_gdpr_flags);      
        var _et_gdpr_text1_desc = this._ce('<p><b>PEREX, a.s.</b> a jeho partneri využívajú technológiu cookies a spracúvajú osobné dáta ako napríklad IP adresy a cookie identifikátory na účely zaznamenávania informácií o Vašich záujmoch a zobrazených reklamách, aby Vám mohli ponúknuť relevantnejší obsah alebo reklamu, ďalej na meranie výkonnosti obsahu či ďalšiu analytiku. Svoj súhlas na uvedené účely udelíte kliknutím na "Súhlasím", svoj súhlas môžete kedykoľvek zmeniť na tejto stránke.</p><><p><b>PEREX, a.s.</b> and our partners are using technologies like cookies and process personal data like the IP-address or browser information in order to personalize the advertising that you see. This helps us to show you more relevant ads and improves your internet experience. We also use it in order to measure results or align our website content. Because we value your privacy, we are herewith asking for your permission to use these technologies. You can always change/withdraw your consent later by clicking on the settings button on the right lower corner of the page.Please note that some vendors will process personal data based on legitimate interest. You have the right to object to this processing. In order to do this, please click on <span class=title>Vendors</span> tab below and disable the vendors.</p>','div','text');
        var _et_gdpr_text1_desc_step2 = this._ce('<b>PEREX, a.s.</b> a jeho partneri využívajú technológiu cookies a spracúvajú osobné dáta ako napríklad IP adresy a cookie identifikátory na účely zaznamenávania informácií o Vašich záujmoch a zobrazených reklamách, aby Vám mohli ponúknuť relevantnejší obsah alebo reklamu, ďalej na meranie výkonnosti obsahu či ďalšiu analytiku. Svoj súhlas na uvedené účely udelíte kliknutím na "Súhlasím", svoj súhlas môžete kedykoľvek zmeniť na tejto stránke.<><b>PEREX, a.s.</b> and our partners are using technologies like cookies and process personal data like the IP-address or browser information in order to personalize the advertising that you see. This helps us to show you more relevant ads and improves your internet experience. We also use it in order to measure results or align our website content. Because we value your privacy, we are herewith asking for your permission to use these technologies. You can always change/withdraw your consent later by clicking on the settings button on the right lower corner of the page.Please note that some vendors will process personal data based on legitimate interest. You have the right to object to this processing. In order to do this, please click on <span class=title>Vendors</span> tab below and disable the vendors.','div','text2');

        var _et_gdpr_text1 = document.createElement('div');
        _et_gdpr_text1.className = 'gdpr_text1';
        _et_gdpr_text1.appendChild(_et_gdpr_text1_head);
        _et_gdpr_text1.appendChild(_et_gdpr_text1_desc);
        _et_gdpr_text1.appendChild(_et_gdpr_text1_desc_step2);

        var _et_gdpr_button12 = this.createButton('Súhlasím<>Accept All','big accept');
        var _et_gdpr_button13 = this.createButton('Upraviť<>Customize','big vendors open');
        var _et_gdpr_button21 = this.createButton('Súhlasím<>Accept All','big accept');
        var _et_gdpr_button22 = this.createButton('Nesúhlasím<>I don\'t agree','link reject');
        var _et_gdpr_button23 = this.createButton('Uložiť<>Save','big save');
        var _et_gdpr_button232 = this.createButton('Uložiť<>Save','big save hidden');
        var _et_gdpr_back = this.createButton('Naspäť<>Back','link back vendors detail_close');
        var _et_gdpr_text1_link_powered = this._ce('poskytuje <a href="#"><img src=https://etarget.mgr.consensu.org/img/logo/etarget_logo_white_sk_notext2.png></a><>provided by <a href="#"><img src=https://etarget.mgr.consensu.org/img/logo/etarget_logo_white_sk_notext2.png></a>','div','link powered');
        var _et_gdpr_text1_link_powered2 = this._ce('poskytuje <a href="#"><img src=https://etarget.mgr.consensu.org/img/logo/etarget_logo_white_sk_notext2.png></a><>provided by <a href="#"><img src=https://etarget.mgr.consensu.org/img/logo/etarget_logo_white_sk_notext2.png></a>','div','link powered');

        var _et_gdpr_butto_wrap1 = this._ce('','div','button_wrap bw1');
        _et_gdpr_butto_wrap1.appendChild(_et_gdpr_button12);
        _et_gdpr_butto_wrap1.appendChild(_et_gdpr_button232);
        /*_et_gdpr_butto_wrap1.appendChild(_et_gdpr_button22);*/
        _et_gdpr_butto_wrap1.appendChild(_et_gdpr_text1_link_powered);
        
        var _et_gdpr_butto_wrap2 = this._ce('','div','button_wrap bw2');
        _et_gdpr_butto_wrap2.appendChild(_et_gdpr_button23);
        _et_gdpr_butto_wrap2.appendChild(_et_gdpr_back);
        _et_gdpr_butto_wrap2.appendChild(_et_gdpr_text1_link_powered2);
        
        var _et_gdpr_text1_link_purpose = this._ce('Zoznam účelov<>Purposes','div','link_purpose');
        var _et_gdpr_text1_link_vendors = this._ce('Zoznam príjemcov<>All vendors','div','link_vendors');
        var _et_gdpr_text1_link_scope = this._ce(': GLOBAL<>: GLOBAL','div','link_scope');
        var _et_gdpr_text1_link_wrap = this._ce('','div','link_wrap');

        var _et_gdpr_cont_slide1 = this._ce('','div','slider1_stack');
        var _et_gdpr_cont_slide1_left = this._ce('','div','slider1_stack_left');
        var _et_gdpr_cont_slide1_right = this._ce('','div','slider1_stack_right');

        for(var k in this.variables['stacks']){
            var sid = this.variables['stacks'][k];
            var stack = this.variables['gvl']['stacks'][sid];
            if(sid==-1){
                stack = this.variables['gvl']['purposes'][1];
            }
            if(sid==-2){
                stack = this.variables['gvl']['specialFeatures'][1];
            }
            var sname = stack.name;
            var senname = '';
            if(sid===-1){
                senname = this.variables['gvl']['en']['purposes'][1].name;
            }else if(sid===-2){
                senname = this.variables['gvl']['en']['specialFeatures'][1].name;
            }else{
                senname = this.variables['gvl']['en']['stacks'][sid].name;  
            }
            var stackel = this._ce('','label','row stack_label');
            var stackes = this._ce(sname+'<>'+senname,'span','stack_span');
            var stackei = this._ce('','input','stack_input');
            var stackeh = this.createHelper('stack',sid);
            stackei.type = 'checkbox';
            stackei.id = sid;
            stackel.appendChild(stackei);
            stackel.appendChild(stackes);
            stackel.appendChild(stackeh);
            _et_gdpr_cont_slide1_left.appendChild(stackel);
        }
        _et_gdpr_cont_slide1_right.appendChild(_et_gdpr_button13);
        _et_gdpr_cont_slide1.appendChild(_et_gdpr_cont_slide1_left);
        _et_gdpr_cont_slide1.appendChild(_et_gdpr_cont_slide1_right);

        var _et_gdpr_slide1 = this._ce('','div','gdpr_slide1 slide');
        _et_gdpr_slide1.appendChild(_et_gdpr_text1);
        _et_gdpr_slide1.appendChild(_et_gdpr_text1_link_wrap);
        _et_gdpr_slide1.appendChild(_et_gdpr_butto_wrap1);
        _et_gdpr_slide1.appendChild(_et_gdpr_butto_wrap2);
        _et_gdpr_slide1.appendChild(_et_gdpr_cont_slide1);
        _et_gdpr_slide1.appendChild(_et_gdpr_clear);

        _et_gdpr_popup.appendChild(_et_gdpr_slide1);
        _et_gdpr_popup.appendChild(_et_gdpr_slide2);
        _et_gdpr_popup.appendChild(_et_gdpr_close_popup);
        _et_gdpr_popup.appendChild(this._ce('','style'));

        d.body.appendChild(_et_gdpr_clona);
        d.body.appendChild(_et_gdpr_popup);
        d.body.appendChild(_et_gdpr_open);
        
    }
    
    this.checkShowButton = function(){
        e$(d).find('.enable_all').hide();
        e$(d).find('.disable_all').hide();
        e$(d).find('.enable_all2').hide();
        e$(d).find('.disable_all2').hide();
        var isPurpose = e$(d).find('.vendor_outer_wrap .purpose_list').is(':visible');
        var vnum = e$(d).find('.gdbutton.gdslider.vendor.active').length;
        var vnumall = e$(d).find('.gdbutton.gdslider.vendor').length;
        var vnum2 = e$(d).find('.gdbutton.gdslider.purpose.active').length;
        var vnumall2 = e$(d).find('.gdbutton.gdslider.purpose').length;
        if(isPurpose){
            if(vnum2<vnumall2){
                e$(d).find('.enable_all2').show();
            }else{
                e$(d).find('.disable_all2').show();
            }
        }else{
            if(vnum<vnumall){
                e$(d).find('.enable_all').show();
            }else{
                e$(d).find('.disable_all').show();
            } 
        }
    }

    this.changeLangTo = function(local){
        var replace = 'lang-global';
        if(local){
            replace = 'lang-local';
            this.lang = 'local';
        }else{
            e$(d).find('.flag.local').removeClass('active');
            e$(d).find('.flag.global').addClass('active');
            this.lang = 'global';
        }                         
        var all = e$(d).find('.gdpr_consent_popup *');
        e$.each(all,function(i,val){
            var obj = e$(val);
            var f = obj.attr(replace);
            if(typeof(f)=='string'){
                if(f.length>1){
                    obj.html(f);
                }    
            }
        });
    }

    this.createLocator = function(){

        var iframe = document.createElement('iframe');
        iframe.name = '__tcfapiLocator';
        iframe.style.display = 'none';

        e$(d.body).append(iframe);

        var ifrmbody = '\
        <script>\
        window.addEventListener(\"message\", postMessageHandler, false);\
        function postMessageHandler(e){\
            if(typeof(e.data.__tcfapiCall)==\"object\"){\
                var req = e.data.__tcfapiCall;\
                if(typeof(top.__tcfapi)===\"function\"){\
                    top.__tcfapi(e.data.__tcfapiCall.command,e.data.__tcfapiCall.version,function(a,b){\
                        var ret = {__tcfapiReturn: {returnValue: a, success: true, callId: e.data.__tcfapiCall.callId}};\
                        window.postMessage(ret,\"*\");\
                    },e.data.__tcfapiCall.parameter);\
                }else{\
                    var ret = {__tcfapiReturn: {returnValue: \"TCF API unavailable\", success: false, callId: e.data.__tcfapiCall.callId}};\
                    window.postMessage(ret,\"*\");\
                }\
            }\
        }\
        </script>\
        ';

        var ifrmdoc = iframe.contentWindow.document;
        ifrmdoc.open();
        ifrmdoc.write(ifrmbody);
        ifrmdoc.close();

    }
    
    this.addEventsNew = function(){
    
        this.debug('events');
    
        var thisa = this;

        /*this.createLocator(); IN STUB*/

        thisa.gdprCoursorIsMoving = false;
        thisa.gdprCoursorIsMovingTimeout = false;
        
        e$(d).on('touchmove',function(e){
            thisa.gdprCoursorIsMoving = true;
            if(thisa.gdprCoursorIsMovingTimeout){
                clearTimeout(thisa.gdprCoursorIsMovingTimeout);
                thisa.gdprCoursorIsMovingTimeout = false;
            }
            thisa.gdprCoursorIsMovingTimeout = setTimeout(function(){
                thisa.gdprCoursorIsMoving = false;    
            },200);
        });
        
        e$(d).on('click','.flag',function(){
            e$(d).find('.flag').removeClass('active');
            e$(this).addClass('active');
            thisa.changeLangTo(e$(this).hasClass('local'));
        });
        
        e$(d).on('click','.gdbutton.vendors.open, .gdbutton.vendors.detail_close',function(){        
            if(e$(d).find('.gdpr_consent_popup').hasClass('open')){
                e$(d).find('.gdpr_consent_popup').removeClass('open');        
            }else{
                e$(d).find('.gdpr_consent_popup').addClass('open');      
            }
        });
        
        e$(d).on('click','.gdbutton.gdslider',function(e){
            e.preventDefault();
            if(!thisa.gdprCoursorIsMoving){
                if(e$(this).hasClass('active')){
                    e$(this).not('.disabled').removeClass('active');
                }else{
                    e$(this).not('.disabled').addClass('active');
                }  
                if(e$(this).hasClass('vendor')){
                    thisa.checkShowButton();            
                }       
            }
            return false;
        });
        
        e$(d).on('click','tab',function(){
            e$(d).find('.enable_all').hide();
            e$(d).find('.disable_all').hide();
            if(e$(this).hasClass('vendor')){
                e$(d).find('.stack_list').removeClass('open');
                e$(d).find('tab.stack_tab').removeClass('active');
                thisa.showVendorsForStack(-1);
                e$(d).find('.vendor_outer_wrap').addClass('all');
            }else{
                e$(d).find('.vendor_outer_wrap').removeClass('all');
                e$(d).find('.stack_list').removeClass('open');
                e$(d).find('tab.stack_tab').removeClass('active');
                thisa.showVendorsForStack(0);
                if(e$(this).hasClass('stack_-1')){
                    e$(d).find('.stack_list.id_-1').addClass('open');
                }
                if(e$(this).hasClass('stack_-2')){
                    e$(d).find('.stack_list.id_-2').addClass('open');
                }
                if(e$(this).hasClass('stack_8')){
                    e$(d).find('.stack_list.id_8').addClass('open');
                }
                if(e$(this).hasClass('stack_16')){
                    e$(d).find('.stack_list.id_16').addClass('open');
                }
                e$(d).find('tab.vendor').removeClass('active');
            }    
            thisa.checkShowButton();
            e$(this).addClass('active');
        });
        
        e$(d).on('click','.link.reject',function(e){
            e.preventDefault();
            thisa.variables['btype'] = 3;
            thisa.disableAllAndSave();
            thisa.logAction(15);
            return false;
        });
        
        e$(d).on('click','.big.accept',function(e){
            e.preventDefault();
            thisa.variables['btype'] = 1;
            thisa.enableAllAndSave();
            thisa.logAction(13);
            return false;
        });
        
        e$(d).on('click','.big.save',function(e){ 
            e.preventDefault();
            thisa.variables['btype'] = 2;
            thisa.saveGDPR();
            thisa.logAction(14);
            return false;
        });
        
        e$(d).on('click','.gdpr_close',function(){
            thisa.hideGPopup(10);
        }); 
        
        e$(d).on('click','.gdpr_open',function(){
            thisa.showGPopup(8);
        });
        
        e$(d).on('click','.disable_all, .disable_all2',function(){
            var isPurpose = e$(d).find('.vendor_outer_wrap .purpose_list').is(':visible');
            thisa.disableAll('purpose');
            thisa.disableAll('purpose_special');
            thisa.disableAll('vendor');     
        });
        
        e$(d).on('click','.enable_all, .enable_all2',function(){
            var isPurpose = e$(d).find('.vendor_outer_wrap .purpose_list').is(':visible');
            thisa.enableAll('purpose');
            thisa.enableAll('purpose_special');
            thisa.enableAll('vendor'); 
        });

        e$(d).on('change','.stack_input',function(){
            var disable = !e$(this).is(':checked');
            thisa.enablePurposesForStack(this,this.id,disable);
            var sticntchecked = e$(d).find('.stack_input:checked');
            var allsticnt = e$(d).find('.stack_input');
            if(sticntchecked.length===allsticnt.length){
                e$(d).find('.button_wrap.bw1 .save').addClass('hidden');
                e$(d).find('.button_wrap.bw1 .accept').removeClass('hidden');
            }else{
                e$(d).find('.button_wrap.bw1 .accept').addClass('hidden');
                e$(d).find('.button_wrap.bw1 .save').removeClass('hidden');
            }
        });

        e$(d).on('click','.vendor_consents input',function(){
            if(e$(this).parent().hasClass('consent_left') && e$(this).is(':checked')){
                e$(this).parent().next().find('input').attr('checked',true).prop('checked',true);
            }
        });

        e$(d).on('change','.purp_input',function(){
            if(e$(this).is(':checked')){
                var el = e$(document).find('.legit_input#'+this.id);   
                if(el.length>0){
                    el.attr('checked',true).prop('checked',true);
                } 
            }
        });
        
        e$(d).on('click','.link_powered',function(){
            /**/  
        });
        
        e$(d).on('click','.link_purpose',function(){
            e$(d).find('.gdpr_consent_popup').addClass('open');  
            e$(d).find('tab.purpose').click();  
        });
        
        e$(d).on('click','.link_vendors',function(){
            e$(d).find('.gdpr_consent_popup').addClass('open');  
            e$(d).find('tab.vendor').click();  
        });

        e$(d).on('click','.helper_close',function(){
            e$(d).find('.helper_clona').last().remove();   
        });

        e$(d).find('.stack_list.id_-2').addClass('open');
        thisa.showVendorsForStack(0);

        thisa.checkShowButton();

        
        
        
    }

    this.enablePurposesForStack = function(obj,sid,disable){

        var purps = [];
        var objname = 'purp';

        if(sid<0){
            purps = [1];
        }else{
            purps = this.variables['gvl']['stacks'][sid].purposes;
        }
        if(sid==-2){
            objname = 'specf';
        }

        for(var k in purps){
            var pid = purps[k];
            var inp = e$(document).find('.'+objname+'_input#'+pid);
            var inpp = false;
            if(objname=='purp'){
                if(!disable){
                    inpp = e$(document).find('.legit_input#'+pid);
                }
            }
            if(disable){
                inp.removeAttr('checked').prop('checked',false);
                if(inpp){
                    inpp.removeAttr('checked').prop('checked',false);    
                }
            }else{
                inp.attr('checked',true).prop('checked',true);
                if(inpp){
                    inpp.attr('checked',true).prop('checked',true);  
                }
            }
        }

    }

    this.showVendorsForStack = function(sid){

        e$(document).find('.vendor_list .row.vendor').hide();

        if(sid===0){
            e$(document).find('.vendor_list').hide();
            return;
        }else{
            e$(document).find('.vendor_list').show();
        }

        if(sid===-1){
            e$(document).find('.vendor_list .row.vendor').show();
            return;
        }
        if(sid===-2){
            e$(document).find('.row.specf_1').show();
            return;
        }

        if(sid>1){
            var purps = this.variables['gvl']['stacks'][sid].purposes;
            for(var k in purps){
                var pid = purps[k];
                e$(document).find('.row.purp_'+pid).show();
            }
        }

    }
    
    this.disableAll = function(clss){
        if(clss){
            e$(d).find('.gdbutton.gdslider.'+clss).not('.disabled').removeClass('active');
        }else{
            e$(d).find('.gdbutton.gdslider').not('.disabled').removeClass('active');
        }
    }

    this.disableAllAndSave = function(){
        this.disableAll();
        this.saveGDPR(false,1);   
    }

    this.enableAll = function(clss){
        if(clss){
            e$(d).find('.gdbutton.gdslider.'+clss).not('.disabled').addClass('active');
        }else{
            e$(d).find('.gdbutton.gdslider').not('.disabled').addClass('active');
        }
    }

    this.enableAllAndSave = function(){
        this.enableAll();
        this.saveGDPR(1,false);  
    }
    
    this.saveGDPR = function(allAccepted,allRejected){

        this.debug('saveGDPR');

        if(allAccepted && !allRejected){
            e$(document).find('.gdpr_consent_popup input').attr('checked',true).prop('checked',true);
        }
        if(!allAccepted && allRejected){
            e$(document).find('.gdpr_consent_popup input').removeAttr('checked').prop('checked',null);
        }

        var purposesIDs = [];
        var legitsIDs = [];
        var sfeaturesIDs = [];
        var vconsentsIDs = [];
        var vlegitsIDs = [];
        var econsentsIDs = [];
        var elegitsIDs = [];

        var purposes_all = e$(document).find('.purp_input');
        var legits_all = e$(document).find('.legit_input');
        var sfeatures_all = e$(document).find('.specf_input');
        var vconsent_all = e$(document).find('.vendor_consent_input');
        var vlegit_all = e$(document).find('.vendor_legit_input');
        var econsent_all = e$(document).find('.etarget_consent_input');
        var elegit_all = e$(document).find('.etarget_legit_input');

        var purposes = e$(document).find('.purp_input:checked');
        var legits = e$(document).find('.legit_input:checked');
        var sfeatures = e$(document).find('.specf_input:checked');
        var vconsent = e$(document).find('.vendor_consent_input:checked');
        var vlegit = e$(document).find('.vendor_legit_input:checked');
        var econsent = e$(document).find('.etarget_consent_input:checked');
        var elegit = e$(document).find('.etarget_legit_input:checked');

        if(purposes_all.length==purposes.length 
        && legits_all.length==legits.length
        && sfeatures_all.length==sfeatures.length
        && vconsent_all.length==vconsent.length
        && vlegit_all.length==vlegit.length
        && econsent_all.length==econsent.length
        && elegit_all.length==elegit.length){
            this.variables['btype'] = 1;
        }

        if(purposes.length==0
        && legits.length==0
        && sfeatures.length==0
        && vconsent.length==0
        && vlegit.length==0
        && econsent.length==0
        && elegit.length==0){
            this.variables['btype'] = 3;
        }

        this.debug('button ID',this.variables['btype']);

        purposes.each(function(){purposesIDs.push(parseInt(this.id));});
        legits.each(function(){legitsIDs.push(parseInt(this.id));});
        sfeatures.each(function(){sfeaturesIDs.push(parseInt(this.id));});
        vconsent.each(function(){vconsentsIDs.push(parseInt(this.id));});
        vlegit.each(function(){vlegitsIDs.push(parseInt(this.id));});
        econsent.each(function(){econsentsIDs.push(parseInt(this.id));});
        elegit.each(function(){elegitsIDs.push(parseInt(this.id));});
        
        var pf = 0; 
        var vf = '';
        var ef = '';
        var delim = ''; 
        var edelim = ''; 
        
        var pla = purposes.length;
        var lla = legits.length;
        var scg = vconsent.length;
        var slg = vlegit.length;
        var vlg = sfeatures.length;
        var vce = econsent.length;
        var vle = elegit.length;

        var athis = this;

        var emptyArr = ['all','publisherConsents','publisherLegitimateInterests'];

        for(var k in emptyArr){
            __tcfapi('empty',2,function(r){
                athis.debug(r);
            },emptyArr[k]);  
        }

        if(purposesIDs){
            __tcfapi('set',2,function(r){
                athis.debug(r);
            },'purpose',purposesIDs);
        }
        if(legitsIDs){
            __tcfapi('set',2,function(r){
                athis.debug(r);
            },'purposeLegitimateInterests',legitsIDs);
        }

        // naplnim etarget vendorov ako publisherConsent
        if(econsentsIDs){
            __tcfapi('set',2,function(r){
                athis.debug(r);
            },'publisherConsents',econsentsIDs);
        }
        if(elegitsIDs){
            __tcfapi('set',2,function(r){
                athis.debug(r);
            },'publisherLegitimateInterests',elegitsIDs);
        }

        // naplnime IAB vendorov
        if(vconsentsIDs){
            __tcfapi('set',2,function(r){
                athis.debug(r);
            },'vendorConsents',vconsentsIDs);
        }
        if(vlegitsIDs){
            __tcfapi('set',2,function(r){
                athis.debug(r);
            },'vendorLegitimateInterests',vlegitsIDs);
        }
        if(sfeaturesIDs){
            __tcfapi('set',2,function(r){
                athis.debug(r);
            },'specialFeatureOptins',sfeaturesIDs);
        }

        this.hideGPopup(11);

        // ulozime global
        this.update();
        
    }

    this.update = function(prefix){

        if(this.variables['apionly']){
            return false;
        }

        var athis = this;

        var pref = '';
        if(typeof(prefix)=='string'){
            if(prefix.length>0){
                pref = prefix+'_';
            }
        }

        __tcfapi('update',2,function(r){

            if(this.vid=='9' && false){

                console.log('only local scope');

            }else{

                athis.debug('updated global',r,typeof(r));

                if(typeof(r)=='object'){
                    var rstr = r[1];
                    e$.ajax({
                        type: 'get',    
                        url: 'https://etarget.mgr.consensu.org/consent.php?ecmp=5&c=1&btype='+athis.variables['btype']+'&setCookie='+rstr+'&version=2&cookieName='+pref+'euconsent-v2',
                        cache: false,
                        crossDomain: true,
                        xhrFields: {
                            withCredentials: true
                        }  
                    });
                }

            }

        },null,pref,false,true);

    }
    
    this.showGPopup = function(id,update){  
        if(this.variables['apionly']){
            return false;
        }
        if(update!==false){
            update=true;
        }
        if(this.variables['clona']>0){
            e$(d).find('.gdpr_clona').removeClass('gdpr_hidden').show();  
        }
        if(id>6 && id<9){
            e$(d).find('.gdpr_consent_popup .gdpr_close').removeClass('gdpr_hidden').show();
        }
        e$(d).find('.gdpr_clona').removeClass('hidden').show();
        e$(d).find('.gdpr_consent_popup').removeClass('hidden').show();  
        this.logAction(id);
        if(update){
            __tcfapi('update',2,function(r){
                /*len updatnem ze som zobrzil okno*/     
            },null,null,true);
        }
        if(this.urlHasPart('tcfcookie')){
            try{
                var debugtxt = document.createElement('div');
                debugtxt.style.cssText = 'font-size:10px;width:100%;display:block;';
                debugtxt.innerHTML = this.variables['gcookies']['euconsent-v2'];
                document.getElementsByClassName('gdheader')[0].appendChild(debugtxt);
            }catch(e){
                this.debug(e);
            }
        }
    }

    this.hideGPopup = function(id){
        e$(d).find('.gdpr_clona').hide();
        e$(d).find('.gdpr_consent_popup').hide();
        this.logAction(id);
    }

    this.logAction = function(id,note){

        this.debug('log action',id);

        return;

        e$.ajax({
            type: 'get',    
            url: '//etarget.mgr.consensu.org/consent.php?action='+id+'&ecmp='+this.vid+'&cookieName=euconsent-v2&note='+note,
            cache: false,
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }  
        });
        
    }

    this.createButton = function(text,type,className,ID){
        
        var _et_gdpr_button = d.createElement('div');
        _et_gdpr_button.className='gdbutton '+type+' '+className;
        var _et_gdpr_button_text = d.createElement('div');
        _et_gdpr_button_text.className='button_text';
        
        var _et_gdpr_parts = text.split('<>');
        if(_et_gdpr_parts.length>1){
            _et_gdpr_button_text.setAttribute('lang-local',_et_gdpr_parts[0]);
            _et_gdpr_button_text.setAttribute('lang-global',_et_gdpr_parts[1]);
            text = _et_gdpr_parts[0];
        }
        
        _et_gdpr_button_text.innerHTML=text;
        
        _et_gdpr_button.appendChild(_et_gdpr_button_text);
        
        switch(type){
            case 'gdslider':
            var _et_gdpr_slide_wrap = this._ce('','div','slide_wrap');
            var _et_gdpr_slide_text_on = this._ce('ON','div','slide_text slide_text_on');
            var _et_gdpr_slide_text_off = this._ce('OFF','div','slide_text slide_text_off');
            var _et_gdpr_slide_bullet = this._ce('','div','slide_bullet');
            _et_gdpr_slide_wrap.appendChild(_et_gdpr_slide_text_on);
            _et_gdpr_slide_wrap.appendChild(_et_gdpr_slide_text_off);
            _et_gdpr_slide_wrap.appendChild(_et_gdpr_slide_bullet);
            _et_gdpr_button.appendChild(_et_gdpr_slide_wrap);
            if(ID){
                _et_gdpr_button.id = ID;
            }
            break;
        }
        
        return _et_gdpr_button;
        
    }
    
    this.firstInclude = function(){
    
        this.debug('firstInclude');  
        
        var _et_gdpr_style_popup = d.createElement('link');
        _et_gdpr_style_popup.type = 'text/css';
        _et_gdpr_style_popup.rel = 'stylesheet';
        _et_gdpr_style_popup.href = 'https://etarget.mgr.consensu.org/gdpr/gdprV2.0.1.css';
        d.head.appendChild(_et_gdpr_style_popup); 
        
        if(this.variables['inthemiddle']){
            var _et_gdpr_style_middle = d.createElement('link');
            _et_gdpr_style_middle.type = 'text/css';
            _et_gdpr_style_middle.rel = 'stylesheet';
            _et_gdpr_style_middle.href = 'https://etarget.mgr.consensu.org/gdpr/gdpr.middle.css';
            d.head.appendChild(_et_gdpr_style_middle);    
        }
        
    }

    this.modelLoaderCNT = 0;
    this.modelLoader = function(){

        var athis = this;

        this.debug('modelLoader X',this.modelLoaderCNT,typeof(__tcfapi));

        this.modelLoaderCNT++;

        if(typeof(__tcfapi)=='function'){
            athis.debug('modelLoader exists');
            __tcfapi('ping',2,function(a,b,c){
                athis.debug('modelLoader ping',a,b,c);     
            });
            try{
                __tcfapi('addEventListener',2,function(a,b,c){  
                    athis.eventControler(a,b,c); 
                });
            }catch(e){
                athis.debug('modelLoader error',e); 
                if(athis.modelLoaderCNT<40){
                    setTimeout(function(){
                        athis.modelLoader();   
                    },100);
                }
            }
        }else{
            athis.debug('modelLoader else');
            if(athis.modelLoaderCNT<40){
                setTimeout(function(){
                    athis.modelLoader();   
                },10);
            }    
        }

    }

    this.eventControler = function(a,b,c){
        var athis = this;
        this.debug('event3',a,b,c); 
        if(typeof(a)=='object' && !!a){
            if(a.eventStatus == 'tcloaded'){
                console.log("%c __tcfapi %c done ","background:gray;color:white","background:#4e0060;color:white");
                this.getGVL();
            }
            if(a.eventStatus == 'cmpuishown'){
                console.log("%c __tcfapi %c done ","background:gray;color:white","background:#4e0060;color:white");
                this.getGVL();
                this.showGPopup(9,false);
            }
            if(!!a.eventStatus){
                console.log("%c __tcfapi %c event %c "+a.eventStatus+" ","background:gray;color:white","background:#4e0060;color:white","background:#fffa0c;color:black");
            }
            if(typeof(a.listenerId)!='undefined') {
                __tcfapi('removeEventListener', 2, function() {
                    athis.debug('event removed');
                }, a.listenerId);
            }
        }
    }

    this.GVLCNT = 0;
    this.getGVL = function(){
        this.debug('getGVL2');
        var athis = this;
        this.GVLCNT++;
        if(this.GVLCNT<20){
            __tcfapi('get',2,function(r){
                this.debug('gvlRes',r);
                if(typeof(r.en)=='undefined'){
                    setTimeout(function(){
                        athis.getGVL();    
                    },100);
                }else{
                    athis.variables['gvl'] = r;
                    athis.checkVendors();
                }
            },'gvl');   
        }else{
            this.debug('GVL loop error');
        }
    }
    
    this.applyVendors = function(vendors){
    
        this.debug('apply vendors',this.variables['gvl'].purposes[1].id);
        
        var _et_gdpr_features = this.variables['gvl'].features;
        var _et_gdpr_features_special = this.variables['gvl'].specialFeatures;
        var _et_gdpr_purposes = this.variables['gvl'].purposes;
        var _et_gdpr_purposes_special = this.variables['gvl'].specialPurposes;
        var _et_gdpr_vendors = this.variables['gvl'].fullVendorList;
        var _et_gdpr_evendors = this.variables['evendors'].vendors;
        
        var _et_gdpr_vendors_list = document.createElement('div');
        _et_gdpr_vendors_list.className='vendor_list';
        
        var xi = 1;

        var _et_gdpr_vendors_list = this._ce('','div','vendor_list');

        _et_gdpr_vendors_list.appendChild(this._ce('Zoznam príjemcov<>All vendors','div','row title'));

        var _et_gdpr_vendors_list_consent = this._ce('','div','consent_right_title')
        _et_gdpr_vendors_list_consent.appendChild(this._ce('Súhlas<>Consent','div','row title consent_title'));
        _et_gdpr_vendors_list_consent.appendChild(this._ce('Oprávnený záujem<>Legitimate interest','div','row title consent_li_title'));
        _et_gdpr_vendors_list.appendChild(_et_gdpr_vendors_list_consent);

        var _et_gdpr_vendors_list_wrap = this.getGlobalVendors(_et_gdpr_vendors,'iab');
        var _et_gdpr_vendors_list_wrap_etarget = this.getGlobalVendors(_et_gdpr_evendors,'etarget');

        _et_gdpr_vendors_list.appendChild(_et_gdpr_vendors_list_wrap_etarget);
        _et_gdpr_vendors_list.appendChild(_et_gdpr_vendors_list_wrap);

        for(var k in this.variables['stacks']){
            var sid = this.variables['stacks'][k];
            var _et_gdpr_stack_purpose_list = this.getStackPurposes(sid);
            this.vendor_wrap.appendChild(_et_gdpr_stack_purpose_list);
        }

        this.vendor_wrap.appendChild(_et_gdpr_vendors_list);
        
        if(typeof(_et_gdpr_vendors)=='undefined'){
            return false;
        }else{
            if(this.variables['apionly']){
                return false;
            }else{
                this.gbody();
            }
        }
        
    }

    this.getStackPurposes = function(sid){

        var stack = this.variables['gvl'].stacks[sid];

        var spurp = {};
        if(sid===-1){
            spurp = [sid];
        }else if(sid===-2){
            spurp = [sid];
        }else{
            spurp = stack.purposes;
        }

        var _et_gdpr_vendors_list = this._ce('','div','stack_list id_'+sid);

        var title = 'Zoznam účelov<>Purposes';
        var titlel = 'Súhlas<>Consent';
        var titler = 'Oprávnený záujem<>Legitimate interest';
        if(sid===-2){
            title = 'Špeciálne vlastnosti<>Special features';
        }

        var stack_left = this._ce('','div','stack_left');
        var stack_right = this._ce('','div','stack_right');

        if(sid>1){
            title = 'Účely použité v tejto kategórii<>Purposes used in this stack';
            stack_left.appendChild(this._ce(titlel,'div','row title'));
            stack_right.appendChild(this._ce(titler,'div','row title'));
        }

        _et_gdpr_vendors_list.appendChild(this._ce(title,'div','row title'));
        
        for(var k in spurp){

            var supid = spurp[k];
            var purp = this.variables['gvl']['purposes'][supid];
            var objname = 'purposes';

            if(supid==-1){
                purp = this.variables['gvl']['purposes'][1];
            }
            if(supid==-2){
                objname = 'specialFeatures';
                purp = this.variables['gvl'][objname][1];
            }

            if(purp){

                var sepurpnname = this.variables['gvl']['en'][objname][purp.id].name;
                var purpl = this._ce('','label','row stack_label');
                var purpr = this._ce('','label','row stack_label');

                var purps = this._ce(purp.name+'<>'+sepurpnname,'span','stack_span');
                var purpsr = this._ce(purp.name+'<>'+sepurpnname,'span','stack_span');

                var purpi = this._ce('','input','purp_input');
                var purpir = this._ce('','input','legit_input');

                var purph = this.createHelper('purpose',purp.id,'consent');
                var purphr = this.createHelper('purpose',purp.id,'legit');

                if(sid===-2){
                    purpi = this._ce('','input','specf_input');  
                    purph = this.createHelper('specialFeature',purp.id,'specf');  
                }
                purpi.type = 'checkbox';
                purpi.id = purp.id;

                purpir.type = 'checkbox';
                purpir.id = purp.id;

                purpl.appendChild(purpi);
                purpl.appendChild(purps);
                purpl.appendChild(purph);

                purpr.appendChild(purpir);
                purpr.appendChild(purpsr);
                purpr.appendChild(purphr);

                stack_left.appendChild(purpl);
                stack_right.appendChild(purpr);

                _et_gdpr_vendors_list.appendChild(stack_left);

                if(sid>1){
                    _et_gdpr_vendors_list.appendChild(stack_right);
                }

            }

        }

        return _et_gdpr_vendors_list;

    }

    this.createHelper = function(type,id,subtype,medium){

        var athis = this;

        var helper = this._ce('','div','helper');
        var icon = this._ce('','div','helper_icon');
        helper.appendChild(icon);

        e$(helper).on('click',function(){
            athis.showHelper(type,id,subtype,medium);
            return false;
        });

        return helper;

    }

    this.showHelper = function(type,id,subtype,medium){

        var wrap = this._ce('','div','helper_wrap');

        var obj = {};
        var objen = {};

        switch(type){
            case 'stack':{
                if(id==-1){
                    obj = this.variables['gvl']['purposes'];
                    objen = this.variables['gvl']['en']['purposes'];
                }else{
                    obj = this.variables['gvl']['stacks'];
                    objen = this.variables['gvl']['en']['stacks'];
                }
            };break;
            case 'purpose':{
                obj = this.variables['gvl']['purposes'];
                objen = this.variables['gvl']['en']['purposes'];
            };break;
            case 'specialPurpose':{
                obj = this.variables['gvl']['specialPurposes'];
                objen = this.variables['gvl']['en']['specialPurposes'];
            };break;
            case 'feature':{
                obj = this.variables['gvl']['features'];
                objen = this.variables['gvl']['en']['features'];
            };break;
            case 'specialFeature':{
                obj = this.variables['gvl']['specialFeatures'];
                objen = this.variables['gvl']['en']['specialFeatures'];
            };break;
            case 'vendor':{
                obj = this.variables['gvl']['fullVendorList'];
                objen = this.variables['gvl']['en']['fullVendorList'];
                if(medium=='etarget'){
                    obj = objen = this.variables['evendors']['vendors'];
                }
            };break;
        }

        if(id<0){
            id = 1;
        }

        if(obj){
            if(this.lang=='global'){
                obj = objen[id];
            }else{
                obj = obj[id];
            }
        }

        if(typeof(obj.name)=='string'){

            var helper_type = this._ce('','div','helper_type');
            var helper_title = this._ce(obj.name,'h3','helper_title row title');

            wrap.appendChild(helper_type);
            wrap.appendChild(helper_title);

            if(typeof(obj.policyUrl)=='string'){
                var helper_policy = this._ce(obj.policyUrl,'a','row link gdbutton helper_policy');
                helper_policy.href = obj.policyUrl;
                wrap.appendChild(helper_policy);
            }
            if(typeof(obj.description)=='string'){
                var helper_desc = this._ce(obj.description.replace(/\n/g,'<br><span class=newlinedesc></span>'),'div','row helper_desc');
                wrap.appendChild(helper_desc);
            }
            if(typeof(obj.descriptionLegal)=='string'){
                var helper_desc = this._ce(obj.descriptionLegal.replace(/\n/g,'<br><span class=newlinedesc></span>'),'div','row helper_desc');
                wrap.appendChild(helper_desc);
            }

            var gvl = this.variables['gvl'];
            if(this.lang=='global'){
                gvl = this.variables['gvl']['en'];
            }

            if(typeof(subtype)=='string'){
                if(subtype.length>0){
                    var vendors = e$(document).find('.row.vendor.purp_'+id);
                    if(subtype=='legit'){
                        vendors = e$(document).find('.row.vendor.legit_'+id);    
                    }
                    if(subtype=='specf'){
                        vendors = e$(document).find('.row.vendor.specf_'+id);    
                    }

                    wrap.appendChild(this._ce('Vendors','div','row title'));
                    for(var k=0; k<vendors.length; k++){
                        var vendor = vendors[k];
                        if(typeof(vendor)=='object'){
                            var vname = e$(vendor).find('.vendor_label > span').text();
                            if(vname.length>0){
                                wrap.appendChild(this._ce(vname,'div','row'));    
                            }
                        }
                    }
                }
            }

            var helper_legit = this._ce('','ul','helper_legit');
            var legal_basis = this._ce('','ul','legal_basis');
            var helper_purpose_cnt = 0;

            if(typeof(obj.purposes)=='object'){
                if(obj.purposes.length>0){
                    legal_basis.appendChild(this._ce('Consent','li','helper_legit_li'));
                    var helper_purp = this._ce('','ul','helper_purp');
                    for(var k in obj.purposes){
                        var pid = obj.purposes[k];
                        var pobj = gvl['purposes'][pid];
                        var hlp = this.createHelper('purpose',pid);
                        var nm = this._ce(pobj.name+' (Consent)','div','helper_purp_name');
                        nm.appendChild(hlp);
                        helper_legit.appendChild(this._ce(nm,'li','helper_purp_li'));
                        helper_purpose_cnt++;
                    }
                }
            }
            if(typeof(obj.legIntPurposes)=='object'){
                if(obj.legIntPurposes.length>0){
                    legal_basis.appendChild(this._ce('Legitimate Interests','li','helper_legit_li'));
                    for(var k in obj.legIntPurposes){
                        var pid = obj.legIntPurposes[k];
                        var pobj = gvl['purposes'][pid];
                        var hlp = this.createHelper('purpose',pid);
                        var nm = this._ce(pobj.name+' (Legitimate Interests)','div','helper_purp_name');
                        nm.appendChild(hlp);
                        helper_legit.appendChild(this._ce(nm,'li','helper_purp_li'));
                        helper_purpose_cnt++;
                    }
                }
            }
            if(typeof(obj.specialPurposes)=='object'){
                if(obj.specialPurposes.length>0){
                    var helper_purp = this._ce('','ul','helper_purp');
                    for(var k in obj.specialPurposes){
                        var pid = obj.specialPurposes[k];
                        var pobj = gvl['specialPurposes'][pid];
                        var hlp = this.createHelper('specialPurpose',pid);
                        var nm = this._ce(pobj.name+' (Special)','div','helper_purp_name');
                        nm.appendChild(hlp);
                        helper_legit.appendChild(this._ce(nm,'li','helper_purp_li'));
                        helper_purpose_cnt++;
                    }
                }
            }

            var helper_feature = this._ce('','ul','helper_purp');
            var helper_feature_cnt = 0;

            if(typeof(obj.features)=='object'){
                if(obj.features.length>0){
                    for(var k in obj.features){
                        var pid = obj.features[k];
                        var pobj = gvl['features'][pid];
                        var hlp = this.createHelper('feature',pid);
                        var nm = this._ce(pobj.name+' (Feature)','div','helper_purp_name');
                        nm.appendChild(hlp);
                        helper_legit.appendChild(this._ce(nm,'li','helper_purp_li'));
                    }
                }
            }

            if(typeof(obj.specialFeatures)=='object'){
                if(obj.specialFeatures.length>0){
                    for(var k in obj.specialFeatures){
                        var pid = obj.specialFeatures[k];
                        var pobj = gvl['specialFeatures'][pid];
                        var hlp = this.createHelper('specialFeature',pid);
                        var nm = this._ce(pobj.name+' (Feature)','div','helper_purp_name');
                        nm.appendChild(hlp);
                        helper_legit.appendChild(this._ce(nm,'li','helper_purp_li'));
                    }
                }
            }

            if(type=='vendor'){
                if(helper_purpose_cnt>0){
                    wrap.appendChild(this._ce('Purposes','div','row title'));
                    wrap.appendChild(helper_legit);
                }

                wrap.appendChild(this._ce('Legal basis','div','row title'));
                wrap.appendChild(legal_basis);
            }

            wrap.appendChild(this._ce('x','div','helper_close'));

            var clonawrap = this._ce(wrap,'div','helper_clona');

            e$(document).find('.gdpr_consent_popup')[0].appendChild(clonawrap);

        }
    
    }

    this.getGlobalVendors = function(_et_gdpr_vendors, media){

        var xi = 1;

        var _et_gdpr_vendors_list = this._ce('','div','vendor_list_wrap');

        for(var i in _et_gdpr_vendors){
            var _et_gdpr_vendor = _et_gdpr_vendors[i];
            if(typeof(this.variables['allowed_vendors'])=='object'){
                if(this.variables['allowed_vendors'].indexOf(_et_gdpr_vendor.id) == -1 && media!='etarget'){
                    continue;
                }
            } 

            var _et_gdpr_vendorPurpose = _et_gdpr_vendor.purposes;
            var _et_gdpr_vendorPurposeLegit = _et_gdpr_vendor.legIntPurposes;
            var _et_gdpr_vendorFeatures = _et_gdpr_vendor.features;
            var _et_gdpr_vendorSpecialFeatures = _et_gdpr_vendor.specialFeatures;

            var vendorl = this._ce('','label','vendor_label');
            var vendors = this._ce(_et_gdpr_vendor.name,'span','stack_span');
            var vendorh = this.createHelper('vendor',parseInt(_et_gdpr_vendor.id),false,media);
            vendorl.appendChild(vendors);
            vendorl.appendChild(vendorh);
            
            var _et_gdpr_vendorwrap = this._ce('','div','vendor_wrap'); 
            _et_gdpr_vendorwrap.appendChild(vendorl);

            var consents = this._ce('','label','vendor_consents stack_right');

            var purpclasses = [];
            var legitclasses = [];
            var specclasses = [];

            for(var z in _et_gdpr_vendorPurpose){ 
                var _et_gdpr_vendorPurp = this.variables['gvl']['purposes'][_et_gdpr_vendorPurpose[z]];
                if(purpclasses.indexOf('purp_'+_et_gdpr_vendorPurp.id)==-1){
                    purpclasses.push('purp_'+_et_gdpr_vendorPurp.id);
                }
            }

            for(var x in _et_gdpr_vendorPurposeLegit){ 
                var _et_gdpr_vendorPurpLegit = this.variables['gvl']['purposes'][_et_gdpr_vendorPurposeLegit[x]];
                if(legitclasses.indexOf('legit_'+_et_gdpr_vendorPurpLegit.id)==-1){
                    legitclasses.push('legit_'+_et_gdpr_vendorPurpLegit.id);
                }
            }

            for(var y in _et_gdpr_vendorSpecialFeatures){ 
                var _et_gdpr_vendorSpecFeature = this.variables['gvl']['specialFeatures'][_et_gdpr_vendorSpecialFeatures[y]];
                if(specclasses.indexOf('specf_'+_et_gdpr_vendorSpecFeature.id)==-1){
                    specclasses.push('specf_'+_et_gdpr_vendorSpecFeature.id);
                }
            }

            var consenti = this._ce('','input','vendor_consent_input');
            if(media=='etarget'){
                consenti.className = 'etarget_consent_input';
            }
            consenti.id = _et_gdpr_vendor.id;
            consenti.type = 'checkbox';
            consents.appendChild(this._ce(consenti,'div','consent_left'));

            if(legitclasses.length>0){
                var consenti = this._ce('','input','vendor_legit_input');
                if(media=='etarget'){
                    consenti.className = 'etarget_legit_input';
                }
                consenti.id = _et_gdpr_vendor.id;
                consenti.type = 'checkbox';
                consents.appendChild(this._ce(consenti,'div','consent_right'));
            }

            _et_gdpr_vendorwrap.appendChild(consents);
             
            var _et_gdpr_vendor_row = this._ce('','div','row vendor '+legitclasses.join(' ')+' '+purpclasses.join(' ')+' '+specclasses.join(' ')); 
            _et_gdpr_vendor_row.id = xi; 
            _et_gdpr_vendor_row.appendChild(_et_gdpr_vendorwrap);                              
            
            _et_gdpr_vendors_list.appendChild(_et_gdpr_vendor_row);
            xi++;                  
        }

        return _et_gdpr_vendors_list;

    }

    this._ce = function(text,type,className){
        var _et_gdpr_obj = document.createElement(type);
        _et_gdpr_obj.className=className; 
        if(typeof(text)=='object'){
            _et_gdpr_obj.appendChild(text);   
        }else{
            var _et_gdpr_parts = '';
            if(text){
                _et_gdpr_parts = text.split('<>');
            }
            if(_et_gdpr_parts.length>1){
                _et_gdpr_obj.setAttribute('lang-local',_et_gdpr_parts[0]);
                _et_gdpr_obj.setAttribute('lang-global',_et_gdpr_parts[1]);
                text = _et_gdpr_parts[0];
            }
            _et_gdpr_obj.innerHTML = text;    
        }       
        return _et_gdpr_obj;    
    }

    this.checkVendorsCNT = 1;
    this.checkVendors = function(){
        var athis = this;
        checkVendorsCNT++;
        if(checkVendorsCNT>100){
            this.debug('nepodarilo sa nacitat Vendorov');
            return;
        }
        this.debug('checkVendors',typeof(this.variables['vendors']),typeof(e$),typeof(__tcfapi));
        
        setTimeout(function(){     
            if(athis.variables['cookiescaned']>0 || this.variables['cookies']['euconsent-v2']){
                athis.afterload();
            }else{
                if(athis.variables['cookiescaned']<1){
                    athis.variables['cookiescaned'] = 0;
                    this.debug('scan');
                    athis.findCookie();   
                }
                athis.checkVendors();      
            }  
        },(50*checkVendorsCNT)); 
    }

    this.afterload = function(){

        this.logAction(18);

        var athis = this;

        if(!!athis.variables['gcookies']['euconsent-v2'] && !this.variables['cookies']['euconsent-v2']){
            if(true){
                __tcfapi('decode',2,function(s){
                    if(typeof(s)=='object' && !!s){
                        if(!!s.isServiceSpecific){
                            this.variables['cookies']['euconsent-v2'] = this.variables['gcookies']['euconsent-v2'];
                            __tcfapi('update',2,function(r){ 
                                athis.logAction(20);   
                            },athis.variables['gcookies']['euconsent-v2'],null,false,true);   
                        }else{
                            athis.logAction(24);    
                        }
                    }
                },this.variables['gcookies']['euconsent-v2']);
            }
        }else if(!!athis.variables['gcookies']['euconsent-v2'] && !!this.variables['cookies']['euconsent-v2']){
            __tcfapi('decode',2,function(r){
                if(typeof(r)=='object' && !!r){
                    __tcfapi('decode',2,function(s){
                        if(typeof(s)=='object' && !!s){
                            if(typeof(r.lastUpdated)!='undefined' && typeof(s.lastUpdated)!='undefined'){
                                if(r.lastUpdated>s.lastUpdated && !!s.isServiceSpecific){
                                    __tcfapi('update',2,function(r){
                                        athis.logAction(21);
                                    },athis.variables['gcookies']['euconsent-v2'],null,false,true);
                                }
                            }
                        }
                    },this.variables['cookies']['euconsent-v2']);
                }
            },athis.variables['gcookies']['euconsent-v2']);
        }

        this.debug('cookies',this.variables['cookies']);

        if(typeof(this.variables['cookies']['euconsent-v2'])=='string'){
            __tcfapi('decode',2,function(r){
                athis.variables['cookie'] = r;    
            },this.variables['cookies']['euconsent-v2']);
        }

        this.applyVendors();  
        this.addEventsNew();  
        this.setSelected();

        this.debug('cookie count',athis.variables['cookiescaned'],athis.variables['cookieloaded']);

        if(athis.variables['cookieloaded']<1){
            this.showGPopup(4,false);
            this.logAction(19);
        }else{
            if(typeof(athis.variables['cookie'])=='object'){
                if(typeof(athis.variables['cookie'].lastUpdated)=='object'){
                    try{
                        var date = athis.variables['cookie'].lastUpdated;
                        var ts = parseInt(date.getTime()/1000);
                        var now = parseInt(new Date().getTime()/1000);
                        var diff = now-ts;
                        var vnds = parseInt(athis.variables['cookie'].vendorConsents.maxId);
                        var pubs = parseInt(athis.variables['cookie'].publisherConsents.maxId);
                        this.debug('vnds pubs',vnds,pubs);
                        if(vnds==0){
                            this.logAction(16);
                        }
                        if(pubs==0){
                            this.logAction(22);
                        }
                        if(vnds==0){
                            if(diff>(60*60*24*30)){
                                this.showGPopup(5);
                            }else{
                                this.logAction(23);
                            }
                        }else{
                            this.logAction(17,parseInt(athis.variables['cookie'].cmpId));
                        }
                        if(typeof(athis.variables['cookie'].outOfBand)=='object'){
                            if(typeof(athis.variables['cookie'].outOfBand.disclosedVendors)=='object'){
                                if(!!athis.variables['cookie'].outOfBand.disclosedVendors.size){
                                    this.logAction(25,parseInt(athis.variables['cookie'].cmpId));   
                                }    
                            }   
                        }
                    }catch(e){
                        console.log(e);
                    }
                    try{
                        if(this.variables['apionly']){
                            return false;
                        }
                        if(typeof(athis.variables['cookie'].publisherConsents)=='object'){
                            var vdres;
                            if(vdres = Array.from(athis.variables['cookie'].publisherConsents).find(function(i,v){if(i[0]==17) return i;})){
                                if(!!vdres[1]){
                                    var vnum = 0;
                                    var epurp = [2,3,4,8];
                                    Array.from(athis.variables['cookie'].purposeConsents).find(function(i,v){
                                        if(epurp.indexOf(i[0])>=0 && !!i[1]){
                                            vnum++;
                                        }
                                    });
                                    Array.from(athis.variables['cookie'].purposeLegitimateInterests).find(function(i,v){
                                        if(epurp.indexOf(i[0])>=0 && !!i[1]){
                                            vnum++;
                                        }
                                    });
                                    var econ = (vnum>0 ? 1 : -1);
                                    e$.ajax({
                                        type: 'get',    
                                        url: 'https://etarget.mgr.consensu.org/consent.php?ecmp=5&c=1&domain=sk&btype=0&setCookie='+econ+'&version=2&cookieName=etconsent-v2',
                                        cache: false,
                                        crossDomain: true,
                                        xhrFields: {
                                            withCredentials: true
                                        }  
                                    });
                                }
                            }
                        }
                    }catch(e){
                        console.log(e);
                    }
                }
            }
        }
        
    }

    this.setSelected = function(){

        var athis = this;
        var cdata = this.variables['cookie'];
        var edata = this.variables['ecookie'];

        if(typeof(cdata)!='object'){
            e$(document).find('.legit_input').attr('checked',true).prop('checked',true);
            e$(document).find('.vendor_legit_input').attr('checked',true).prop('checked',true);
            e$(document).find('.etarget_legit_input').attr('checked',true).prop('checked',true);
            return;
        }
        if(typeof(cdata.vendorConsents)!='object'){
            return;
        }

        var vendors = cdata.vendorConsents;

        if(typeof(vendors.set_)=='object'){
            vendors.set_.forEach(function(i,v){
                e$(document).find('.vendor_input#'+v).attr('checked',true).prop('checked',true);
            });
        }

        var purposes = cdata.purposeConsents;
        var legits = cdata.purposeLegitimateInterests;
        var sfeatures = cdata.specialFeatureOptins;
        var vconsents = cdata.vendorConsents;
        var vlegits = cdata.vendorLegitimateInterests;

        var econsents = cdata.publisherConsents;
        var elegits = cdata.publisherLegitimateInterests;

        var usedpurps = [];
        var usedstack = [];
        var usedsfeatures = [];

        if(typeof(sfeatures.set_)=='object'){
            sfeatures.set_.forEach(function(v,i){
                e$(document).find('.specf_input#'+v).attr('checked',true).prop('checked',true);
                usedsfeatures.push(v);    
            });
        }

        if(typeof(purposes.set_)=='object'){
            purposes.set_.forEach(function(v,i){
                e$(document).find('.purp_input#'+v).attr('checked',true).prop('checked',true);
                usedpurps.push(v);    
            });
        }

        if(typeof(legits.set_)=='object'){
            legits.set_.forEach(function(v,i){
                e$(document).find('.legit_input#'+v).attr('checked',true).prop('checked',true);
                if(usedpurps.indexOf(v)==-1){
                    /*usedpurps.push(v);*/    
                }
            });
        }

        if(typeof(vconsents.set_)=='object'){
            vconsents.set_.forEach(function(v,i){
                e$(document).find('.vendor_consent_input#'+v).attr('checked',true).prop('checked',true);   
            });
        }

        if(typeof(vlegits.set_)=='object'){
            vlegits.set_.forEach(function(v,i){
                e$(document).find('.vendor_legit_input#'+v).attr('checked',true).prop('checked',true);   
            });
        }

        if(typeof(econsents.set_)=='object'){
            econsents.set_.forEach(function(v,i){
                e$(document).find('.etarget_consent_input#'+v).attr('checked',true).prop('checked',true);   
            });
        }

        if(typeof(elegits.set_)=='object'){
            elegits.set_.forEach(function(v,i){
                e$(document).find('.etarget_legit_input#'+v).attr('checked',true).prop('checked',true);   
            });
        }

        this.variables['stacks'].forEach(function(v,i){
            if(v<0){
                if(v==-1){
                    if(usedpurps.indexOf(1)>-1){
                        if(typeof(usedstack[v])=='undefined'){
                            usedstack[v] = 1; 
                        }else{
                            usedstack[v]++; 
                        }
                    }
                }
                if(v==-2){
                    if(usedsfeatures.indexOf(1)>-1){
                        if(typeof(usedstack[v])=='undefined'){
                            usedstack[v] = 1; 
                        }else{
                            usedstack[v]++; 
                        }
                    }
                }
            }else{
                var stackpurps = this.variables['gvl']['stacks'][v].purposes;
                var forobj = usedpurps;
                forobj.forEach(function(j,m){
                    if(stackpurps.indexOf(j)>-1){
                        if(typeof(usedstack[v])=='undefined'){
                            usedstack[v] = 1; 
                        }else{
                            usedstack[v]++; 
                        }
                    }
                });
            }
        });

        for(var k in usedstack){
            var v = usedstack[k];
            var c = 0;
            k = parseInt(k);
            if(k===1){
                c = this.variables['gvl']['stacks'][k].specialFeatures.length;
            }else{
                if(k<0){
                    c = 1;
                }else{
                    c = this.variables['gvl']['stacks'][k].purposes.length;  
                }
            }
            if(v>0){
                if(v<c){
                    e$(document).find('.stack_input#'+k).attr('checked',false).prop('indeterminate',true);
                }else{
                    e$(document).find('.stack_input#'+k).attr('checked',true).prop('checked',true).prop('indeterminate',false);
                }
            }
        }

    }

    this.findCookie = function(pref){
        var athis = this;
        pref = pref || '';
        e$.ajax({
            type: 'get',    
            url: 'https://etarget.mgr.consensu.org/consent.php?findCookie=1&cookieName='+pref+'euconsent-v2',
            cache: false,
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }  
        }).done(function(res){
            if(typeof(res)=='string'){
                if(res.length>10){
                    athis.debug('cookie res '+pref,res);
                    athis.variables['gcookies'][pref+'euconsent-v2'] = res;
                    athis.variables['cookieloaded']++;
                }
            }
            athis.variables['cookiescaned']++;
        });
    }
    
    this.init = function(){

        console.log("%c __tcfapi %c init ","background:gray;color:white","background:#4e0060;color:white");
        
        this.debug('init');
        this.setvals();

        /*this.loadOtherScripts();*/
        
        if('5'=='5' && false){
            this.addBrandingCommon();
        }
    }  
    
    this.addBrandingCommon = function(){
        var bcexists = false;
        var scripts = document.getElementsByTagName('script');
        for(var k in scripts){
            var scriptt = scripts[k];
            if(typeof(scriptt)=='object'){
                var ssrc = scriptt.src;
                if(typeof(scriptt.src)=='string'){
                    if(ssrc.indexOf('branding-common.php')>0){
                        bcexists = true;
                        break;
                    }
                }
            }
        }
        if(!bcexists){
            var newbc = document.createElement('script');
            newbc.src = 'https://sk.search.etargetnet.com/generic/branding-common.php?flexi=1';
            document.head.appendChild(newbc);
        }
    }

    if(!window.__et_tcfapiloaded){
        this.init();  
    }
    window.__et_tcfapiloaded = 1;

})(document,window);console.log("%c __tcfapi %c load ","background:gray;color:white","background:#4e0060;color:white");