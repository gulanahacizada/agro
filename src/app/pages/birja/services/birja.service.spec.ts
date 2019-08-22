import { TestBed } from '@angular/core/testing';

import { BirjaService } from './birja.service';

describe('BirjaService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: BirjaService = TestBed.get(BirjaService);
    expect(service).toBeTruthy();
  });
});
