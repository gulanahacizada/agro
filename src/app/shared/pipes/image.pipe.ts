import { Pipe, PipeTransform } from '@angular/core';
/*
 * Raise the value exponentially
 * Takes an exponent argument that defaults to 1.
 * Usage:
 *   value | exponentialStrength:exponent
 * Example:
 *   {{ 2 | exponentialStrength:10 }}
 *   formats to: 1024
*/
@Pipe({ name: 'set_image' })
export class DefaultImagePipe implements PipeTransform {
  transform(url: string, type?: any): any {
    if (url) {
      return url;
    } else {
      url = (type == 1) ? 'assets/images/noLogo.jpg' : (type == 2) ? 'assets/images/imagesProf.jpeg' : 'assets/images/empty_product.svg';
      return url;
    }
  }
}
