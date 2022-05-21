(() => {
    "use strict";
    var _slideUp = function _slideUp(target) {
        var duration = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 500;
        var showmore = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0;
        if (!target.classList.contains("_slide")) {
            target.classList.add("_slide");
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = duration + "ms";
            target.style.height = "".concat(target.offsetHeight, "px");
            target.offsetHeight;
            target.style.overflow = "hidden";
            target.style.height = showmore ? "".concat(showmore, "px") : "0px";
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            window.setTimeout((function() {
                target.hidden = !showmore ? true : false;
                !showmore ? target.style.removeProperty("height") : null;
                target.style.removeProperty("padding-top");
                target.style.removeProperty("padding-bottom");
                target.style.removeProperty("margin-top");
                target.style.removeProperty("margin-bottom");
                !showmore ? target.style.removeProperty("overflow") : null;
                target.style.removeProperty("transition-duration");
                target.style.removeProperty("transition-property");
                target.classList.remove("_slide");
                document.dispatchEvent(new CustomEvent("slideUpDone", {
                    detail: {
                        target
                    }
                }));
            }), duration);
        }
    };
    var _slideDown = function _slideDown(target) {
        var duration = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 500;
        var showmore = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0;
        if (!target.classList.contains("_slide")) {
            target.classList.add("_slide");
            target.hidden = target.hidden ? false : null;
            showmore ? target.style.removeProperty("height") : null;
            var height = target.offsetHeight;
            target.style.overflow = "hidden";
            target.style.height = showmore ? "".concat(showmore, "px") : "0px";
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            target.offsetHeight;
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = duration + "ms";
            target.style.height = height + "px";
            target.style.removeProperty("padding-top");
            target.style.removeProperty("padding-bottom");
            target.style.removeProperty("margin-top");
            target.style.removeProperty("margin-bottom");
            window.setTimeout((function() {
                target.style.removeProperty("height");
                target.style.removeProperty("overflow");
                target.style.removeProperty("transition-duration");
                target.style.removeProperty("transition-property");
                target.classList.remove("_slide");
                document.dispatchEvent(new CustomEvent("slideDownDone", {
                    detail: {
                        target
                    }
                }));
            }), duration);
        }
    };
    var _slideToggle = function _slideToggle(target) {
        var duration = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 500;
        if (target.hidden) return _slideDown(target, duration); else return _slideUp(target, duration);
    };
    var bodyLockStatus = true;
    var bodyLockToggle = function bodyLockToggle() {
        var delay = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500;
        if (document.documentElement.classList.contains("lock")) bodyUnlock(delay); else bodyLock(delay);
    };
    var bodyUnlock = function bodyUnlock() {
        var delay = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500;
        var body = document.querySelector("body");
        if (bodyLockStatus) {
            var lock_padding = document.querySelectorAll("[data-lp]");
            setTimeout((function() {
                for (var index = 0; index < lock_padding.length; index++) {
                    var el = lock_padding[index];
                    el.style.paddingRight = "0px";
                }
                body.style.paddingRight = "0px";
                document.documentElement.classList.remove("lock");
            }), delay);
            bodyLockStatus = false;
            setTimeout((function() {
                bodyLockStatus = true;
            }), delay);
        }
    };
    var bodyLock = function bodyLock() {
        var delay = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500;
        var body = document.querySelector("body");
        if (bodyLockStatus) {
            var lock_padding = document.querySelectorAll("[data-lp]");
            for (var index = 0; index < lock_padding.length; index++) {
                var el = lock_padding[index];
                el.style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px";
            }
            body.style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px";
            document.documentElement.classList.add("lock");
            bodyLockStatus = false;
            setTimeout((function() {
                bodyLockStatus = true;
            }), delay);
        }
    };
    function spollers() {
        var spollersArray = document.querySelectorAll("[data-spollers]");
        if (spollersArray.length > 0) {
            var initSpollers = function initSpollers(spollersArray) {
                var matchMedia = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : false;
                spollersArray.forEach((function(spollersBlock) {
                    spollersBlock = matchMedia ? spollersBlock.item : spollersBlock;
                    if (matchMedia.matches || !matchMedia) {
                        spollersBlock.classList.add("_spoller-init");
                        initSpollerBody(spollersBlock);
                        spollersBlock.addEventListener("click", setSpollerAction);
                    } else {
                        spollersBlock.classList.remove("_spoller-init");
                        initSpollerBody(spollersBlock, false);
                        spollersBlock.removeEventListener("click", setSpollerAction);
                    }
                }));
            };
            var initSpollerBody = function initSpollerBody(spollersBlock) {
                var hideSpollerBody = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : true;
                var spollerTitles = spollersBlock.querySelectorAll("[data-spoller]");
                if (spollerTitles.length) {
                    spollerTitles = Array.from(spollerTitles).filter((function(item) {
                        return item.closest("[data-spollers]") === spollersBlock;
                    }));
                    spollerTitles.forEach((function(spollerTitle) {
                        if (hideSpollerBody) {
                            spollerTitle.removeAttribute("tabindex");
                            if (!spollerTitle.classList.contains("_spoller-active")) spollerTitle.nextElementSibling.hidden = true;
                        } else {
                            spollerTitle.setAttribute("tabindex", "-1");
                            spollerTitle.nextElementSibling.hidden = false;
                        }
                    }));
                }
            };
            var setSpollerAction = function setSpollerAction(e) {
                var el = e.target;
                if (el.closest("[data-spoller]")) {
                    var spollerTitle = el.closest("[data-spoller]");
                    var spollersBlock = spollerTitle.closest("[data-spollers]");
                    var oneSpoller = spollersBlock.hasAttribute("data-one-spoller");
                    var spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
                    if (!spollersBlock.querySelectorAll("._slide").length) {
                        if (oneSpoller && !spollerTitle.classList.contains("_spoller-active")) hideSpollersBody(spollersBlock);
                        spollerTitle.classList.toggle("_spoller-active");
                        _slideToggle(spollerTitle.nextElementSibling, spollerSpeed);
                    }
                    e.preventDefault();
                }
            };
            var hideSpollersBody = function hideSpollersBody(spollersBlock) {
                var spollerActiveTitle = spollersBlock.querySelector("[data-spoller]._spoller-active");
                var spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
                if (spollerActiveTitle && !spollersBlock.querySelectorAll("._slide").length) {
                    spollerActiveTitle.classList.remove("_spoller-active");
                    _slideUp(spollerActiveTitle.nextElementSibling, spollerSpeed);
                }
            };
            var spollersRegular = Array.from(spollersArray).filter((function(item, index, self) {
                return !item.dataset.spollers.split(",")[0];
            }));
            if (spollersRegular.length) initSpollers(spollersRegular);
            var mdQueriesArray = dataMediaQueries(spollersArray, "spollers");
            if (mdQueriesArray && mdQueriesArray.length) mdQueriesArray.forEach((function(mdQueriesItem) {
                mdQueriesItem.matchMedia.addEventListener("change", (function() {
                    initSpollers(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
                }));
                initSpollers(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
            }));
        }
    }
    function menuInit() {
        var iconMenu = document.querySelector(".icon-menu");
        if (iconMenu) {
            var tagNav = document.querySelector("nav");
            var aAll = tagNav.querySelectorAll("a");
            if (iconMenu) iconMenu.addEventListener("click", (function(e) {
                if (bodyLockStatus) {
                    bodyLockToggle();
                    document.documentElement.classList.toggle("menu-open");
                    document.querySelector(".menu__body").classList.toggle("menu-open");
                    document.querySelector(".menu__toggle").classList.toggle("menu-open");
                    document.querySelector(".header__actions").classList.toggle("menu-open");
                }
            }));
            if (aAll) aAll.forEach((function(a) {
                a.addEventListener("click", (function() {
                    bodyUnlock();
                    document.documentElement.classList.remove("menu-open");
                    document.querySelector(".menu__body").classList.remove("menu-open");
                    document.querySelector(".menu__toggle").classList.remove("menu-open");
                    document.querySelector(".header__actions").classList.remove("menu-open");
                }));
            }));
        }
    }
    function uniqArray(array) {
        return array.filter((function(item, index, self) {
            return self.indexOf(item) === index;
        }));
    }
    function dataMediaQueries(array, dataSetValue) {
        var media = Array.from(array).filter((function(item, index, self) {
            if (item.dataset[dataSetValue]) return item.dataset[dataSetValue].split(",")[0];
        }));
        if (media.length) {
            var breakpointsArray = [];
            media.forEach((function(item) {
                var params = item.dataset[dataSetValue];
                var breakpoint = {};
                var paramsArray = params.split(",");
                breakpoint.value = paramsArray[0];
                breakpoint.type = paramsArray[1] ? paramsArray[1].trim() : "max";
                breakpoint.item = item;
                breakpointsArray.push(breakpoint);
            }));
            var mdQueries = breakpointsArray.map((function(item) {
                return "(" + item.type + "-width: " + item.value + "px)," + item.value + "," + item.type;
            }));
            mdQueries = uniqArray(mdQueries);
            var mdQueriesArray = [];
            if (mdQueries.length) {
                mdQueries.forEach((function(breakpoint) {
                    var paramsArray = breakpoint.split(",");
                    var mediaBreakpoint = paramsArray[1];
                    var mediaType = paramsArray[2];
                    var matchMedia = window.matchMedia(paramsArray[0]);
                    var itemsArray = breakpointsArray.filter((function(item) {
                        if (item.value === mediaBreakpoint && item.type === mediaType) return true;
                    }));
                    mdQueriesArray.push({
                        itemsArray,
                        matchMedia
                    });
                }));
                return mdQueriesArray;
            }
        }
    }
    function DynamicAdapt(type) {
        this.type = type;
    }
    DynamicAdapt.prototype.init = function() {
        var _this2 = this;
        var _this = this;
        this.оbjects = [];
        this.daClassname = "_dynamic_adapt_";
        this.nodes = document.querySelectorAll("[data-da]");
        for (var i = 0; i < this.nodes.length; i++) {
            var node = this.nodes[i];
            var data = node.dataset.da.trim();
            var dataArray = data.split(",");
            var оbject = {};
            оbject.element = node;
            оbject.parent = node.parentNode;
            оbject.destination = document.querySelector(dataArray[0].trim());
            оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
            оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
            оbject.index = this.indexInParent(оbject.parent, оbject.element);
            this.оbjects.push(оbject);
        }
        this.arraySort(this.оbjects);
        this.mediaQueries = Array.prototype.map.call(this.оbjects, (function(item) {
            return "(" + this.type + "-width: " + item.breakpoint + "px)," + item.breakpoint;
        }), this);
        this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, (function(item, index, self) {
            return Array.prototype.indexOf.call(self, item) === index;
        }));
        var _loop = function _loop(_i) {
            var media = _this2.mediaQueries[_i];
            var mediaSplit = String.prototype.split.call(media, ",");
            var matchMedia = window.matchMedia(mediaSplit[0]);
            var mediaBreakpoint = mediaSplit[1];
            var оbjectsFilter = Array.prototype.filter.call(_this2.оbjects, (function(item) {
                return item.breakpoint === mediaBreakpoint;
            }));
            matchMedia.addListener((function() {
                _this.mediaHandler(matchMedia, оbjectsFilter);
            }));
            _this2.mediaHandler(matchMedia, оbjectsFilter);
        };
        for (var _i = 0; _i < this.mediaQueries.length; _i++) _loop(_i);
    };
    DynamicAdapt.prototype.mediaHandler = function(matchMedia, оbjects) {
        if (matchMedia.matches) for (var i = 0; i < оbjects.length; i++) {
            var оbject = оbjects[i];
            оbject.index = this.indexInParent(оbject.parent, оbject.element);
            this.moveTo(оbject.place, оbject.element, оbject.destination);
        } else for (var _i2 = оbjects.length - 1; _i2 >= 0; _i2--) {
            var _оbject = оbjects[_i2];
            if (_оbject.element.classList.contains(this.daClassname)) this.moveBack(_оbject.parent, _оbject.element, _оbject.index);
        }
    };
    DynamicAdapt.prototype.moveTo = function(place, element, destination) {
        element.classList.add(this.daClassname);
        if ("last" === place || place >= destination.children.length) {
            destination.insertAdjacentElement("beforeend", element);
            return;
        }
        if ("first" === place) {
            destination.insertAdjacentElement("afterbegin", element);
            return;
        }
        destination.children[place].insertAdjacentElement("beforebegin", element);
    };
    DynamicAdapt.prototype.moveBack = function(parent, element, index) {
        element.classList.remove(this.daClassname);
        if (void 0 !== parent.children[index]) parent.children[index].insertAdjacentElement("beforebegin", element); else parent.insertAdjacentElement("beforeend", element);
    };
    DynamicAdapt.prototype.indexInParent = function(parent, element) {
        var array = Array.prototype.slice.call(parent.children);
        return Array.prototype.indexOf.call(array, element);
    };
    DynamicAdapt.prototype.arraySort = function(arr) {
        if ("min" === this.type) Array.prototype.sort.call(arr, (function(a, b) {
            if (a.breakpoint === b.breakpoint) {
                if (a.place === b.place) return 0;
                if ("first" === a.place || "last" === b.place) return -1;
                if ("last" === a.place || "first" === b.place) return 1;
                return a.place - b.place;
            }
            return a.breakpoint - b.breakpoint;
        })); else {
            Array.prototype.sort.call(arr, (function(a, b) {
                if (a.breakpoint === b.breakpoint) {
                    if (a.place === b.place) return 0;
                    if ("first" === a.place || "last" === b.place) return 1;
                    if ("last" === a.place || "first" === b.place) return -1;
                    return b.place - a.place;
                }
                return b.breakpoint - a.breakpoint;
            }));
            return;
        }
    };
    var da = new DynamicAdapt("max");
    da.init();
    var catalogParent = document.querySelector(".catalog__parent");
    if (catalogParent) catalogParent.addEventListener("click", (function() {
        document.querySelector(".menu__catalog").classList.toggle("active");
    }));
    var catalogSelect = document.querySelector(".catalog__select");
    if (catalogSelect) catalogSelect.addEventListener("click", (function() {
        document.querySelector(".catalog__select_list").classList.toggle("active");
    }));
    var inputsTel = document.querySelectorAll(".price-inputs__input");
    if (inputsTel) inputsTel.forEach((function(inputTel) {
        inputTel.onkeypress = function(event) {
            event = event || window.event;
            if (event.charCode && (event.charCode < 48 || event.charCode > 57)) return false;
        };
    }));
    menuInit();
    spollers();
})();