@extends('layout.main')
@section('title', 'Головна сторінка')

@section('content')

<div class="container">
    <h1 class="text-center my-5">Список таблиць</h1>
    <div class="row">
        <div class="col-6 col-md-4 mt-3">
            <div class="card bg-primary bg-gradient text-light border" role="button" style="user-select: none;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="card-body">
                    <h2 class="text-center ">Канцтовари</h2>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Замовлення</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mb1">
                        <label for="" class="my-1">Виберіть опцію</label>
                        <select class="form-select mt-1 select1" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">Перегляд сторінки</option>
                            <option value="2">Завантажити дані</option>
                            <option value="3">Імпортувати дані</option>
                            <option value="4">Створити нову дату</option>
                            <option value="5">Завантажити дані між датами</option>
                        </select>
                        <form class="form1" method="" action="" >
                            {{-- VIEW --}}
                            <div class="view1" hidden>
                                <label for="" class="mt-1">Виберіть дату</label>
                                <select class="form-select mt-1 viewdate1" aria-label="Default select example">
                                    <option selected></option>
                                </select>
                            </div>
                            {{-- EXPORT --}}
                            <div class="export1" hidden>
                                <label for="" class="mt-1">Виберіть дату</label>
                                <select class="form-select mt-1 exportdate1" name="export" aria-label="Default select example">
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="text-center mt-3">
                                <button hidden type="submit" class="btn btn-primary exportlink1">Завантажити дані</button>
                            </div>
                            {{-- IMPORT --}}
                            <div class="import1" hidden>
                                <label for="" class="mt-1">Виберіть дату</label>
                                <select class="form-select mt-1 importdate1" name="import" aria-label="Default select example">
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="text-center mt-3 importfile1" hidden>
                                <label for="formFile" class="form-label">Виберіть файл для імпортування</label>
                                <input class="form-control file1" type="file" name="excel" id="formFile">
                            </div>
                            <div class="text-center mt-3">
                                <button hidden type="submit" class="btn btn-primary importlink1">Імпортувати дані</button>
                            </div>
                            {{-- CREATE --}}
                            <div class="create1" hidden>
                                <label class="mt1">Впишіть дату (повинна бути такого типу, як вписано нище)</label>
                                <input class="form-control createdate1" name="create" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="text-center mt-3 createfile1" hidden>
                                <label for="formFile" class="form-label">Виберіть файл для імпортування</label>
                                <input class="form-control cfile1" type="file" name="cexcel" id="formFile">
                            </div>
                            <div class="text-center mt-3">
                                <button hidden type="submit" class="btn btn-primary createlink1">Створити дату</button>
                            </div>
                            {{-- EXPORT BETWEEN --}}
                            <div class="export_between1">
                                <label class="mt-1">Виберіть дату ВІД якої ви хочете завантажити дані</label>

                                <select name="date_from" class="export_between_date_from1 form-select mt-1" aria-label="Default select example">
                                    <option selected></option>
                                </select>

                                <div class="export_between_div1 mt-3">

                                    <label>Виберіть дату ДО якої ви хочете завантажити дані</label>

                                    <select name="date_to" class="export_between_date_to1 form-select mt-1" aria-label="Default select example">
                                        <option selected></option>
                                    </select>

                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="#" class="viewlink1" hidden>
                                <button class="btn btn-primary">Перейти на сторінку</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 mt-3">
            <div class="card">
                <div class="card-body"></div>
            </div>
        </div>
        <div class="col-6 col-md-4 mt-3">
            <div class="card">
                <div class="card-body"></div>
            </div>
        </div>
    </div>
    <div class="dates" hidden>
        @foreach ($stationeries as $stationery)
            <i class="date">{{$stationery->date}}</i><br>
        @endforeach
    </div>
    @csrf
</div>

<script>
    let mb1 = document.querySelector('.mb1')
    let select1 = document.querySelector('.select1')
    let dates = [];
    let form1 = document.querySelector('.form1')
    let date = document.querySelectorAll('.date')

    let view1 = document.querySelector('.view1')
    let viewdate1 = document.querySelector('.viewdate1')
    let viewlink1 = document.querySelector('.viewlink1')

    let export1 = document.querySelector('.export1')
    let exportdate1 = document.querySelector('.exportdate1')
    let exportlink1 = document.querySelector('.exportlink1')

    let import1 = document.querySelector('.import1')
    let importdate1 = document.querySelector('.importdate1')
    let importlink1 = document.querySelector('.importlink1')
    let importfile1 = document.querySelector('.importfile1')

    let create1 = document.querySelector('.create1')
    let createdate1 = document.querySelector('.createdate1')
    let createlink1 = document.querySelector('.createlink1')
    let createfile1 = document.querySelector('.importfile1')

    let file1 = document.querySelector('.file1')
    let cfile1 = document.querySelector('.cfile1')

    let export_between1 = document.querySelector('.export_between1')
    let export_between_date_from1 = document.querySelector('.export_between_date_from1')

    date.forEach(e => {
        if(dates.includes(e.innerText))
        {

        } else
        {
            if(e.innerText.length !== 0)
            {
                dates.push(e.innerText)
            }
        }
    });

    dates.forEach(e => {
        viewdate1.innerHTML += `<option value="${e}">${e}</option>`
        exportdate1.innerHTML += `<option value="${e}">${e}</option>`
        importdate1.innerHTML += `<option value="${e}">${e}</option>`
        export_between_date_from1.innerHTML += `<option value="${e}>${e}</option>"`
    })

    select1.addEventListener('change', function () {
        if(select1.value == 1)
        {
            view1.removeAttribute('hidden')
        } else
        {
            view1.setAttribute('hidden', '')
            viewlink1.setAttribute('hidden', '')
        }
        if(select1.value == 2)
        {
            let csrf = document.createElement('input')
            csrf.type = 'hidden'
            csrf.name = '_token'
            csrf.value = '{{ csrf_token() }}'
            form1.appendChild(csrf)
            export1.removeAttribute('hidden')
        } else
        {
            export1.setAttribute('hidden', '')
            exportlink1.setAttribute('hidden', '')
        }
        if(select1.value == 3)
        {
            let csrf = document.createElement('input')
            csrf.type = 'hidden'
            csrf.name = '_token'
            csrf.value = '{{ csrf_token() }}'
            form1.appendChild(csrf)
            import1.removeAttribute('hidden')
        } else
        {
            importfile1.setAttribute('hidden', '')
            importlink1.setAttribute('hidden', '')
            import1.setAttribute('hidden', '')
        }
        if(select1.value == 4)
        {
            let csrf = document.createElement('input')
            csrf.type = 'hidden'
            csrf.name = '_token'
            csrf.value = '{{ csrf_token() }}'
            form1.appendChild(csrf)
            create1.removeAttribute('hidden')
        } else
        {
            createlink1.setAttribute('hidden', '')
            create1.setAttribute('hidden', '')
        }
        if(select1.value == 5)
        {
            let csrf = document.createElement('input')
            csrf.type = 'hidden'
            csrf.name = '_token'
            csrf.value = '{{ csrf_token() }}'
            form1.appendChild(csrf)
            export_between1.removeAttribute('hidden')
        } else
        {
            export_between1.setAttribute('hidden', '')
        }
    })

    export_between_date_from1.addEventListener('change', function () {
        console.log(1)
    })

    viewdate1.addEventListener('change', function () {
        if(viewdate1.length !== 0)
        {
            viewlink1.href = `http://excel/stationery/${viewdate1.value}`
            viewlink1.removeAttribute('hidden')
        } else
        {
            viewlink.setAttribute('hidden', '')
        }

    })

    exportdate1.addEventListener('change', function () {
        if(exportdate1.length !== 0)
        {
            exportlink1.removeAttribute('hidden')
            form1.attributes.method.value = 'POST'
            form1.attributes.action.value = '{{ route("stationery.export") }}'
        } else
        {
            exportlink1.setAttribute('hidden', '')
        }
    })

    importdate1.addEventListener('change', function () {
        if(importdate1.length !== 0)
        {
            form1.attributes.method.value = 'POST'
            form1.attributes.action.value = '{{ route("stationery.import") }}'
            form1.setAttribute('enctype', 'multipart/form-data')
            importfile1.removeAttribute('hidden')
        } else
        {
            importfile1.setAttribute('hidden', '')
        }
    })

    createdate1.addEventListener('keyup', function () {
        if(createdate1.value.length == 10){
            form1.attributes.method.value = 'POST'
            form1.attributes.action.value = '{{ route("stationery.import") }}'
            form1.setAttribute('enctype', 'multipart/form-data')
            createfile1.removeAttribute('hidden')
        } else
        {
            createfile1.setAttribute('hidden', '')
        }
    })

    file1.addEventListener('change', function (){
        importlink1.removeAttribute('hidden')
    })

    cfile1.addEventListener('change', function () {
        createlink1.removeAttribute('hidden')
    })

</script>

@endsection
