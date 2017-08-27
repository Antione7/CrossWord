import {Injectable} from "@angular/core";
import {Http} from "@angular/http";

import {Observable} from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';

import {BaseService} from "../../shared/base.service";

import {Word} from './word.model';

@Injectable()
export class GameService extends BaseService {
    private wordUrl = this.baseUrl + '/words';

    constructor(private http: Http) {
        super();
    }

    getWord(): Observable<Word> {
        return this.http.get(this.wordUrl)
            .map(response => response.json().data as Word)
            .catch(this.handleError);
    }
}


