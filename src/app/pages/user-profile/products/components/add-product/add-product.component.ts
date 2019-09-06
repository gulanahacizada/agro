import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ProductsService } from '../../services/products.service';
import { Response } from 'src/app/interfaces/response';
import { Packege } from 'src/app/interfaces/packege';
import { SelectList } from 'src/app/interfaces/selectList';
import { Quality } from 'src/app/interfaces/quality';
import { Unit } from 'src/app/interfaces/unit';
import { Kalibry } from 'src/app/interfaces/kalibry';
import { Category } from 'src/app/interfaces/category';
import { Kinds } from 'src/app/interfaces/kinds';


import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-add-product',
  templateUrl: './add-product.component.html',
  styleUrls: ['./add-product.component.scss']
})
export class AddProductComponent implements OnInit {

  packegeList: SelectList[];
  qualityList: SelectList[];
  unitList: SelectList[];
  kalibryList: SelectList[];
  categoryList: SelectList[];
  productList: SelectList[];
  kindList: SelectList[];
  kinds: Kinds[];
  products: any;
  category: Category[];
  kalibry: Kalibry[];
  packages: Packege[];
  units: Unit[];
  quality: Quality[];

  productForm: FormGroup;
  imgURL: any;
  file: any;
  fileRaw: string;
  url: string;


  constructor(
    private productService: ProductsService,
    private router: Router,
    private fb: FormBuilder,
  ) { }

  ngOnInit() {
    this.getAllCategory(); //
    this.getAllUnits(); //
    this.getAllKalibry(); //
    this.getAllPackege(); //
    this.getAllQuality(); //
    this.createLoginForm(); //
  }

  onSelectProduct(event) {
    this.getKindByCategory(event.value);
  }
  getKindByCategory(id) {
    const params = {
      category_id: id
    };
    this.productService.getKinByCategory(params).subscribe((response: Response) => {
      this.kinds = response.responseContent;
      this.onChangeLanguage('az');
    });
  }




  getAllUnits() {
    this.productService.getUnits().subscribe((response: Response) => {
      this.units = response.responseContent;
      this.onChangeLanguage('az');
    });
  }

  // clean(obj) {
  //   for (const propName in obj) {
  //     if (obj[propName] === null || obj[propName] === undefined || obj[propName] === "") {
  //       delete obj[propName];
  //     }
  //   }
  // }

  getAllPackege() {
    this.productService.getPackege().subscribe((response: Response) => {
      this.packages = response.responseContent;
      this.onChangeLanguage('az');
    });
  }

  getAllKalibry() {
    this.productService.getKalibry().subscribe((response: Response) => {
      this.kalibry = response.responseContent;
      this.onChangeLanguage('az');
    });
  }

  getAllQuality() {
    this.productService.getQuality().subscribe((response: Response) => {
      this.quality = response.responseContent;
      this.onChangeLanguage('az');
    });
  }

  getAllCategory() {
    this.productService.getCategory().subscribe((response: Response) => {
      this.category = response.responseContent;
      this.onChangeLanguage('az');
    });
  }

  onChangeLanguage(lang) {
    this.packegeList = (this.packages || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    })),

    this.qualityList = (this.quality || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.unitList = (this.units || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.kalibryList = (this.kalibry || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.categoryList = (this.category || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r
    }));

    this.productList = (this.products || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.kindList = (this.kinds || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

  }

  onSelectCategory(event) {
      this.products = event.value.subCategories;
      this.onChangeLanguage('az');
  }


  createLoginForm() {
    this.productForm = this.fb.group({
      category_id: [ , [Validators.required]],
      kind_id:     [ , [Validators.required]],
      quality_id:  [ , Validators.required],
      package_id:  [ , Validators.required],
      kalibry_id:  [ , Validators.required],
      unit_id:     [ , Validators.required],
      common:      [ , Validators.required],
      price:       [ , Validators.required],
      accumulated_at: [ '', Validators.required],
      expiry_time:    [ '', Validators.required],
      image:          [ ''],
      description_az: ['']
    });
   }

   onFileChange(event) {
    if (event.target.files && event.target.files[0]) {
      const reader = new FileReader();
      const file = event.target.files[0];
      this.file = file;
      reader.readAsDataURL(file);
      // reader.onload = () => {
      //   this.imgURL = reader.result;
      //   this.fileRaw = (<string>reader.result).split(',')[1];
      //   this.url = reader.result.toString();

      // };
    }
  }
  // deletePhoto() {
  //   this.fileRaw = null;
  //   this.url = null;
  //   $('#photo').val('');
  //   console.log(this.fileRaw, this.url);
  // }

  //  addProduct() {
  //    if (this.productForm.valid) {
  //     this.productForm.get('image').patchValue(this.file);
  //     this.productService.addProduct(this.productForm.value).subscribe(response => {
  //       console.log(this.productForm.value);
  //       console.log(response);
  //     });
  //    }
  //  }
  addProduct() {
    this.productService.createProduct(this.productForm.value, this.file).subscribe(response => {
      console.log(response);
    });
  }

}
