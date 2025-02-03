const Ziggy = {"url":"http:\/\/localhost:8080","port":8080,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"dashboard":{"uri":"\/","methods":["GET","HEAD"]},"brands.index":{"uri":"brands","methods":["GET","HEAD"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
