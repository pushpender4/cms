pimcore.registerNS("pimcore.plugin.awsBundle");

pimcore.plugin.awsBundle = Class.create({

    initialize: function () {
        document.addEventListener(pimcore.events.pimcoreReady, this.pimcoreReady.bind(this));
    },

    pimcoreReady: function (e) {
        // alert("awsBundle ready!");
    }
});

var awsBundlePlugin = new pimcore.plugin.awsBundle();
