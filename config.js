/*globals svgEditor*/

svgEditor.setConfig({
// extensions: [
//  'ext-eyedropper.js',
//  'ext-shapes.js',
//  'ext-polygon.js',
//  'ext-star.js'
//],
//emptyStorageOnDecline: true
    noDefaultExtensions : true,
    extensions: [
        'ext-overview_window.js',
        'ext-markers.js',
        'ext-connector.js',
        'ext-eyedropper.js',
        'ext-shapes.js',
        'ext-imagelib.js',
        'ext-grid.js',
        'ext-polygon.js',
        'ext-star.js',
        'ext-panning.js'
    ],
    noStorageOnLoad: true,
    allowedOrigins: [window.location.origin] // May be 'null' (as a string) when used as a file:// URL
});
