function paginatorLimitChanged(self) {
    if (!self || self <= 0) {
        return;
    }

    var href = window.location.href;
    if (~href.indexOf("limit=")) {
        href = href.replace(/limit=\d+/, 'limit=' + self);
    }
    else {
        href += '&limit=' + self;
    }

    window.location.replace(href);
}