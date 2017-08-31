import {Injectable} from "@angular/core";
import {Http} from "@angular/http";

import {BaseService} from "../../shared/base.service";
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/map';

import {Word} from './word.model';
import {Observable} from "rxjs/Observable";

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


