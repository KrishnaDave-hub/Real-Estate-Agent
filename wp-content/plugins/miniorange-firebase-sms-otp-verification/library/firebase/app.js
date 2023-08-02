!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).firebase=t()}(this,function(){"use strict";var r=function(e,t){return(r=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var r in t)t.hasOwnProperty(r)&&(e[r]=t[r])})(e,t)};var a=function(){return(a=Object.assign||function(e){for(var t,r=1,n=arguments.length;r<n;r++)for(var i in t=arguments[r])Object.prototype.hasOwnProperty.call(t,i)&&(e[i]=t[i]);return e}).apply(this,arguments)};function e(e,a,s,l){return new(s=s||Promise)(function(r,t){function n(e){try{o(l.next(e))}catch(e){t(e)}}function i(e){try{o(l.throw(e))}catch(e){t(e)}}function o(e){var t;e.done?r(e.value):((t=e.value)instanceof s?t:new s(function(e){e(t)})).then(n,i)}o((l=l.apply(e,a||[])).next())})}function n(r,n){var i,o,a,s={label:0,sent:function(){if(1&a[0])throw a[1];return a[1]},trys:[],ops:[]},e={next:t(0),throw:t(1),return:t(2)};return"function"==typeof Symbol&&(e[Symbol.iterator]=function(){return this}),e;function t(t){return function(e){return function(t){if(i)throw new TypeError("Generator is already executing.");for(;s;)try{if(i=1,o&&(a=2&t[0]?o.return:t[0]?o.throw||((a=o.return)&&a.call(o),0):o.next)&&!(a=a.call(o,t[1])).done)return a;switch(o=0,a&&(t=[2&t[0],a.value]),t[0]){case 0:case 1:a=t;break;case 4:return s.label++,{value:t[1],done:!1};case 5:s.label++,o=t[1],t=[0];continue;case 7:t=s.ops.pop(),s.trys.pop();continue;default:if(!(a=0<(a=s.trys).length&&a[a.length-1])&&(6===t[0]||2===t[0])){s=0;continue}if(3===t[0]&&(!a||t[1]>a[0]&&t[1]<a[3])){s.label=t[1];break}if(6===t[0]&&s.label<a[1]){s.label=a[1],a=t;break}if(a&&s.label<a[2]){s.label=a[2],s.ops.push(t);break}a[2]&&s.ops.pop(),s.trys.pop();continue}t=n.call(r,s)}catch(e){t=[6,e],o=0}finally{i=a=0}if(5&t[0])throw t[1];return{value:t[0]?t[1]:void 0,done:!0}}([t,e])}}}function d(e){var t="function"==typeof Symbol&&Symbol.iterator,r=t&&e[t],n=0;if(r)return r.call(e);if(e&&"number"==typeof e.length)return{next:function(){return e&&n>=e.length&&(e=void 0),{value:e&&e[n++],done:!e}}};throw new TypeError(t?"Object is not iterable.":"Symbol.iterator is not defined.")}function u(e,t){var r="function"==typeof Symbol&&e[Symbol.iterator];if(!r)return e;var n,i,o=r.call(e),a=[];try{for(;(void 0===t||0<t--)&&!(n=o.next()).done;)a.push(n.value)}catch(e){i={error:e}}finally{try{n&&!n.done&&(r=o.return)&&r.call(o)}finally{if(i)throw i.error}}return a}function v(e,t){if(!(t instanceof Object))return t;switch(t.constructor){case Date:return new Date(t.getTime());case Object:void 0===e&&(e={});break;case Array:e=[];break;default:return t}for(var r in t)t.hasOwnProperty(r)&&(e[r]=v(e[r],t[r]));return e}var i=(t.prototype.wrapCallback=function(r){var n=this;return function(e,t){e?n.reject(e):n.resolve(t),"function"==typeof r&&(n.promise.catch(function(){}),1===r.length?r(e):r(e,t))}},t);function t(){var r=this;this.reject=function(){},this.resolve=function(){},this.promise=new Promise(function(e,t){r.resolve=e,r.reject=t})}var o,s,l,c="FirebaseError",h=(o=Error,r(s=f,l=o),s.prototype=null===l?Object.create(l):(p.prototype=l.prototype,new p),f);function p(){this.constructor=s}function f(e,t){var r=o.call(this,t)||this;return r.code=e,r.name=c,Object.setPrototypeOf(r,f.prototype),Error.captureStackTrace&&Error.captureStackTrace(r,y.prototype.create),r}var y=(m.prototype.create=function(e){for(var t=[],r=1;r<arguments.length;r++)t[r-1]=arguments[r];for(var n,i=t[0]||{},o=this.service+"/"+e,a=this.errors[e],s=a?(n=i,a.replace(g,function(e,t){var r=n[t];return null!=r?String(r):"<"+t+"?>"})):"Error",l=this.serviceName+": "+s+" ("+o+").",c=new h(o,l),u=0,p=Object.keys(i);u<p.length;u++){var f=p[u];"_"!==f.slice(-1)&&(f in c&&console.warn('Overwriting FirebaseError base field "'+f+'" can cause unexpected behavior.'),c[f]=i[f])}return c},m);function m(e,t,r){this.service=e,this.serviceName=t,this.errors=r}var g=/\{\$([^}]+)}/g;function b(e,t){return Object.prototype.hasOwnProperty.call(e,t)}function w(e,t){var r=new E(e,t);return r.subscribe.bind(r)}var E=(O.prototype.next=function(t){this.forEachObserver(function(e){e.next(t)})},O.prototype.error=function(t){this.forEachObserver(function(e){e.error(t)}),this.close(t)},O.prototype.complete=function(){this.forEachObserver(function(e){e.complete()}),this.close()},O.prototype.subscribe=function(e,t,r){var n,i=this;if(void 0===e&&void 0===t&&void 0===r)throw new Error("Missing Observer.");void 0===(n=function(e,t){if("object"!=typeof e||null===e)return!1;for(var r=0,n=t;r<n.length;r++){var i=n[r];if(i in e&&"function"==typeof e[i])return!0}return!1}(e,["next","error","complete"])?e:{next:e,error:t,complete:r}).next&&(n.next=_),void 0===n.error&&(n.error=_),void 0===n.complete&&(n.complete=_);var o=this.unsubscribeOne.bind(this,this.observers.length);return this.finalized&&this.task.then(function(){try{i.finalError?n.error(i.finalError):n.complete()}catch(e){}}),this.observers.push(n),o},O.prototype.unsubscribeOne=function(e){void 0!==this.observers&&void 0!==this.observers[e]&&(delete this.observers[e],--this.observerCount,0===this.observerCount&&void 0!==this.onNoObservers&&this.onNoObservers(this))},O.prototype.forEachObserver=function(e){if(!this.finalized)for(var t=0;t<this.observers.length;t++)this.sendOne(t,e)},O.prototype.sendOne=function(e,t){var r=this;this.task.then(function(){if(void 0!==r.observers&&void 0!==r.observers[e])try{t(r.observers[e])}catch(e){"undefined"!=typeof console&&console.error&&console.error(e)}})},O.prototype.close=function(e){var t=this;this.finalized||(this.finalized=!0,void 0!==e&&(this.finalError=e),this.task.then(function(){t.observers=void 0,t.onNoObservers=void 0}))},O);function O(e,t){var r=this;this.observers=[],this.unsubscribes=[],this.observerCount=0,this.task=Promise.resolve(),this.finalized=!1,this.onNoObservers=t,this.task.then(function(){e(r)}).catch(function(e){r.error(e)})}function _(){}var I=(N.prototype.setInstantiationMode=function(e){return this.instantiationMode=e,this},N.prototype.setMultipleInstances=function(e){return this.multipleInstances=e,this},N.prototype.setServiceProps=function(e){return this.serviceProps=e,this},N);function N(e,t,r){this.name=e,this.instanceFactory=t,this.type=r,this.multipleInstances=!1,this.serviceProps={},this.instantiationMode="LAZY"}var L="[DEFAULT]",S=(R.prototype.get=function(e){void 0===e&&(e=L);var t=this.normalizeInstanceIdentifier(e);if(!this.instancesDeferred.has(t)){var r=new i;this.instancesDeferred.set(t,r);try{var n=this.getOrInitializeService(t);n&&r.resolve(n)}catch(e){}}return this.instancesDeferred.get(t).promise},R.prototype.getImmediate=function(e){var t=a({identifier:L,optional:!1},e),r=t.identifier,n=t.optional,i=this.normalizeInstanceIdentifier(r);try{var o=this.getOrInitializeService(i);if(o)return o;if(n)return null;throw Error("Service "+this.name+" is not available")}catch(e){if(n)return null;throw e}},R.prototype.getComponent=function(){return this.component},R.prototype.setComponent=function(e){var t,r;if(e.name!==this.name)throw Error("Mismatching Component "+e.name+" for Provider "+this.name+".");if(this.component)throw Error("Component for "+this.name+" has already been provided");if("EAGER"===(this.component=e).instantiationMode)try{this.getOrInitializeService(L)}catch(e){}try{for(var n=d(this.instancesDeferred.entries()),i=n.next();!i.done;i=n.next()){var o=u(i.value,2),a=o[0],s=o[1],l=this.normalizeInstanceIdentifier(a);try{var c=this.getOrInitializeService(l);s.resolve(c)}catch(e){}}}catch(e){t={error:e}}finally{try{i&&!i.done&&(r=n.return)&&r.call(n)}finally{if(t)throw t.error}}},R.prototype.clearInstance=function(e){void 0===e&&(e=L),this.instancesDeferred.delete(e),this.instances.delete(e)},R.prototype.delete=function(){return e(this,void 0,void 0,function(){var t;return n(this,function(e){switch(e.label){case 0:return t=Array.from(this.instances.values()),[4,Promise.all(function(){for(var e=[],t=0;t<arguments.length;t++)e=e.concat(u(arguments[t]));return e}(t.filter(function(e){return"INTERNAL"in e}).map(function(e){return e.INTERNAL.delete()}),t.filter(function(e){return"_delete"in e}).map(function(e){return e._delete()})))];case 1:return e.sent(),[2]}})})},R.prototype.isComponentSet=function(){return null!=this.component},R.prototype.getOrInitializeService=function(e){var t,r=this.instances.get(e);return!r&&this.component&&(r=this.component.instanceFactory(this.container,(t=e)===L?void 0:t),this.instances.set(e,r)),r||null},R.prototype.normalizeInstanceIdentifier=function(e){return!this.component||this.component.multipleInstances?e:L},R);function R(e,t){this.name=e,this.container=t,this.component=null,this.instances=new Map,this.instancesDeferred=new Map}var P,A=(j.prototype.addComponent=function(e){var t=this.getProvider(e.name);if(t.isComponentSet())throw new Error("Component "+e.name+" has already been registered with "+this.name);t.setComponent(e)},j.prototype.addOrOverwriteComponent=function(e){this.getProvider(e.name).isComponentSet()&&this.providers.delete(e.name),this.addComponent(e)},j.prototype.getProvider=function(e){if(this.providers.has(e))return this.providers.get(e);var t=new S(e,this);return this.providers.set(e,t),t},j.prototype.getProviders=function(){return Array.from(this.providers.values())},j);function j(e){this.name=e,this.providers=new Map}function C(){for(var e=0,t=0,r=arguments.length;t<r;t++)e+=arguments[t].length;for(var n=Array(e),i=0,t=0;t<r;t++)for(var o=arguments[t],a=0,s=o.length;a<s;a++,i++)n[i]=o[a];return n}var D,F,k=[];(F=D=D||{})[F.DEBUG=0]="DEBUG",F[F.VERBOSE=1]="VERBOSE",F[F.INFO=2]="INFO",F[F.WARN=3]="WARN",F[F.ERROR=4]="ERROR",F[F.SILENT=5]="SILENT";function T(e,t){for(var r=[],n=2;n<arguments.length;n++)r[n-2]=arguments[n];if(!(t<e.logLevel)){var i=(new Date).toISOString(),o=B[t];if(!o)throw new Error("Attempted to log a message with an invalid logType (value: "+t+")");console[o].apply(console,C(["["+i+"]  "+e.name+":"],r))}}var x,H={debug:D.DEBUG,verbose:D.VERBOSE,info:D.INFO,warn:D.WARN,error:D.ERROR,silent:D.SILENT},z=D.INFO,B=((P={})[D.DEBUG]="log",P[D.VERBOSE]="log",P[D.INFO]="info",P[D.WARN]="warn",P[D.ERROR]="error",P),V=(Object.defineProperty(U.prototype,"logLevel",{get:function(){return this._logLevel},set:function(e){if(!(e in D))throw new TypeError('Invalid value "'+e+'" assigned to `logLevel`');this._logLevel=e},enumerable:!1,configurable:!0}),U.prototype.setLogLevel=function(e){this._logLevel="string"==typeof e?H[e]:e},Object.defineProperty(U.prototype,"logHandler",{get:function(){return this._logHandler},set:function(e){if("function"!=typeof e)throw new TypeError("Value assigned to `logHandler` must be a function");this._logHandler=e},enumerable:!1,configurable:!0}),Object.defineProperty(U.prototype,"userLogHandler",{get:function(){return this._userLogHandler},set:function(e){this._userLogHandler=e},enumerable:!1,configurable:!0}),U.prototype.debug=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];this._userLogHandler&&this._userLogHandler.apply(this,C([this,D.DEBUG],e)),this._logHandler.apply(this,C([this,D.DEBUG],e))},U.prototype.log=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];this._userLogHandler&&this._userLogHandler.apply(this,C([this,D.VERBOSE],e)),this._logHandler.apply(this,C([this,D.VERBOSE],e))},U.prototype.info=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];this._userLogHandler&&this._userLogHandler.apply(this,C([this,D.INFO],e)),this._logHandler.apply(this,C([this,D.INFO],e))},U.prototype.warn=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];this._userLogHandler&&this._userLogHandler.apply(this,C([this,D.WARN],e)),this._logHandler.apply(this,C([this,D.WARN],e))},U.prototype.error=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];this._userLogHandler&&this._userLogHandler.apply(this,C([this,D.ERROR],e)),this._logHandler.apply(this,C([this,D.ERROR],e))},U);function U(e){this.name=e,this._logLevel=z,this._logHandler=T,this._userLogHandler=null,k.push(this)}function M(t){k.forEach(function(e){e.setLogLevel(t)})}var W,G=((x={})["no-app"]="No Firebase App '{$appName}' has been created - call Firebase App.initializeApp()",x["bad-app-name"]="Illegal App name: '{$appName}",x["duplicate-app"]="Firebase App named '{$appName}' already exists",x["app-deleted"]="Firebase App named '{$appName}' already deleted",x["invalid-app-argument"]="firebase.{$appName}() takes either no argument or a Firebase App instance.",x["invalid-log-argument"]="First argument to `onLog` must be null or a function.",x),$=new y("app","Firebase",G),Y="@firebase/app",K="[DEFAULT]",J=((W={})[Y]="fire-core",W["@firebase/analytics"]="fire-analytics",W["@firebase/auth"]="fire-auth",W["@firebase/database"]="fire-rtdb",W["@firebase/functions"]="fire-fn",W["@firebase/installations"]="fire-iid",W["@firebase/messaging"]="fire-fcm",W["@firebase/performance"]="fire-perf",W["@firebase/remote-config"]="fire-rc",W["@firebase/storage"]="fire-gcs",W["@firebase/firestore"]="fire-fst",W["fire-js"]="fire-js",W["firebase-wrapper"]="fire-js-all",W),Z=new V("@firebase/app"),q=(Object.defineProperty(Q.prototype,"automaticDataCollectionEnabled",{get:function(){return this.checkDestroyed_(),this.automaticDataCollectionEnabled_},set:function(e){this.checkDestroyed_(),this.automaticDataCollectionEnabled_=e},enumerable:!1,configurable:!0}),Object.defineProperty(Q.prototype,"name",{get:function(){return this.checkDestroyed_(),this.name_},enumerable:!1,configurable:!0}),Object.defineProperty(Q.prototype,"options",{get:function(){return this.checkDestroyed_(),this.options_},enumerable:!1,configurable:!0}),Q.prototype.delete=function(){var t=this;return new Promise(function(e){t.checkDestroyed_(),e()}).then(function(){return t.firebase_.INTERNAL.removeApp(t.name_),Promise.all(t.container.getProviders().map(function(e){return e.delete()}))}).then(function(){t.isDeleted_=!0})},Q.prototype._getService=function(e,t){return void 0===t&&(t=K),this.checkDestroyed_(),this.container.getProvider(e).getImmediate({identifier:t})},Q.prototype._removeServiceInstance=function(e,t){void 0===t&&(t=K),this.container.getProvider(e).clearInstance(t)},Q.prototype._addComponent=function(t){try{this.container.addComponent(t)}catch(e){Z.debug("Component "+t.name+" failed to register with FirebaseApp "+this.name,e)}},Q.prototype._addOrOverwriteComponent=function(e){this.container.addOrOverwriteComponent(e)},Q.prototype.checkDestroyed_=function(){if(this.isDeleted_)throw $.create("app-deleted",{appName:this.name_})},Q);function Q(e,t,r){var n,i,o=this;this.firebase_=r,this.isDeleted_=!1,this.name_=t.name,this.automaticDataCollectionEnabled_=t.automaticDataCollectionEnabled||!1,this.options_=v(void 0,e),this.container=new A(t.name),this._addComponent(new I("app",function(){return o},"PUBLIC"));try{for(var a=d(this.firebase_.INTERNAL.components.values()),s=a.next();!s.done;s=a.next()){var l=s.value;this._addComponent(l)}}catch(e){n={error:e}}finally{try{s&&!s.done&&(i=a.return)&&i.call(a)}finally{if(n)throw n.error}}}q.prototype.name&&q.prototype.options||q.prototype.delete||console.log("dc");var X="7.21.0";function ee(l){var c={},u=new Map,p={__esModule:!0,initializeApp:function(e,t){void 0===t&&(t={});{"object"==typeof t&&null!==t||(t={name:t})}var r=t;void 0===r.name&&(r.name=K);var n=r.name;if("string"!=typeof n||!n)throw $.create("bad-app-name",{appName:String(n)});if(b(c,n))throw $.create("duplicate-app",{appName:n});var i=new l(e,r,p);return c[n]=i},app:f,registerVersion:function(e,t,r){var n,i=null!==(n=J[e])&&void 0!==n?n:e;r&&(i+="-"+r);var o=i.match(/\s|\//),a=t.match(/\s|\//);if(o||a){var s=['Unable to register library "'+i+'" with version "'+t+'":'];return o&&s.push('library name "'+i+'" contains illegal characters (whitespace or "/")'),o&&a&&s.push("and"),a&&s.push('version name "'+t+'" contains illegal characters (whitespace or "/")'),void Z.warn(s.join(" "))}h(new I(i+"-version",function(){return{library:i,version:t}},"VERSION"))},setLogLevel:M,onLog:function(e,t){if(null!==e&&"function"!=typeof e)throw $.create("invalid-log-argument",{appName:name});!function(a,t){for(var e=0,r=k;e<r.length;e++){!function(e){var o=null;t&&t.level&&(o=H[t.level]),e.userLogHandler=null===a?null:function(e,t){for(var r=[],n=2;n<arguments.length;n++)r[n-2]=arguments[n];var i=r.map(function(e){if(null==e)return null;if("string"==typeof e)return e;if("number"==typeof e||"boolean"==typeof e)return e.toString();if(e instanceof Error)return e.message;try{return JSON.stringify(e)}catch(e){return null}}).filter(function(e){return e}).join(" ");t>=(null!=o?o:e.logLevel)&&a({level:D[t].toLowerCase(),message:i,args:r,type:e.name})}}(r[e])}}(e,t)},apps:null,SDK_VERSION:X,INTERNAL:{registerComponent:h,removeApp:function(e){delete c[e]},components:u,useAsService:function(e,t){if("serverAuth"===t)return null;return t}}};function f(e){if(!b(c,e=e||K))throw $.create("no-app",{appName:e});return c[e]}function h(r){var t,e,n,i=r.name;if(u.has(i))return Z.debug("There were multiple attempts to register component "+i+"."),"PUBLIC"===r.type?p[i]:null;u.set(i,r),"PUBLIC"===r.type&&(n=function(e){if(void 0===e&&(e=f()),"function"!=typeof e[i])throw $.create("invalid-app-argument",{appName:i});return e[i]()},void 0!==r.serviceProps&&v(n,r.serviceProps),p[i]=n,l.prototype[i]=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];return this._getService.bind(this,i).apply(this,r.multipleInstances?e:[])});try{for(var o=d(Object.keys(c)),a=o.next();!a.done;a=o.next()){var s=a.value;c[s]._addComponent(r)}}catch(e){t={error:e}}finally{try{a&&!a.done&&(e=o.return)&&e.call(o)}finally{if(t)throw t.error}}return"PUBLIC"===r.type?p[i]:null}return p.default=p,Object.defineProperty(p,"apps",{get:function(){return Object.keys(c).map(function(e){return c[e]})}}),f.App=l,p}var te,re=function e(){var t=ee(q);return t.INTERNAL=a(a({},t.INTERNAL),{createFirebaseNamespace:e,extendNamespace:function(e){v(t,e)},createSubscribe:w,ErrorFactory:y,deepExtend:v}),t}(),ne=(ie.prototype.getPlatformInfoString=function(){return this.container.getProviders().map(function(e){if("VERSION"!==(null==(t=e.getComponent())?void 0:t.type))return null;var t,r=e.getImmediate();return r.library+"/"+r.version}).filter(function(e){return e}).join(" ")},ie);function ie(e){this.container=e}"object"==typeof self&&self.self===self&&void 0!==self.firebase&&(Z.warn("\n    Warning: Firebase is already defined in the global scope. Please make sure\n    Firebase library is only loaded once.\n  "),(te=self.firebase.SDK_VERSION)&&0<=te.indexOf("LITE")&&Z.warn("\n    Warning: You are trying to load Firebase while using Firebase Performance standalone script.\n    You should load Firebase Performance with this instance of Firebase to avoid loading duplicate code.\n    "));var oe=re.initializeApp;re.initializeApp=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];return function(){try{return"[object process]"===Object.prototype.toString.call(global.process)}catch(e){return}}()&&Z.warn('\n      Warning: This is a browser-targeted Firebase bundle but it appears it is being\n      run in a Node environment.  If running in a Node environment, make sure you\n      are using the bundle specified by the "main" field in package.json.\n      \n      If you are using Webpack, you can specify "main" as the first item in\n      "resolve.mainFields":\n      https://webpack.js.org/configuration/resolve/#resolvemainfields\n      \n      If using Rollup, use the rollup-plugin-node-resolve plugin and specify "main"\n      as the first item in "mainFields", e.g. [\'main\', \'module\'].\n      https://github.com/rollup/rollup-plugin-node-resolve\n      '),oe.apply(void 0,e)};var ae,se,le=re;(ae=le).INTERNAL.registerComponent(new I("platform-logger",function(e){return new ne(e)},"PRIVATE")),ae.registerVersion(Y,"0.6.11",se),ae.registerVersion("fire-js","");return le.registerVersion("firebase","7.21.0","app"),le});
//# sourceMappingURL=firebase-app.js.map