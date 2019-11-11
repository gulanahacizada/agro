import { Component, OnInit } from '@angular/core';
import { LoaderService } from '../loader.service';

@Component({
  selector: 'app-spiner',
  templateUrl: './spiner.component.html',
  styleUrls: ['./spiner.component.scss']
})
export class SpinerComponent implements OnInit {

  loading: boolean;
  constructor(private loaderService: LoaderService) {
    this.loaderService.isLoading.subscribe((v) => {
<<<<<<< HEAD
=======
      // console.log(v);
>>>>>>> 250eb87e9619f4566e87ebc72b159db4da5b47d0
      this.loading = v;
    });
  }

  ngOnInit() {
  }

}
