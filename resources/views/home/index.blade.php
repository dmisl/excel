@extends('layout.main')
@section('title', 'Головна сторінка')

@section('content')

<div class="container">
    <h1 class="text-center my-5">Список таблиць</h1>
    <div class="row">
        <div class="col-6 col-md-4 mt-3">
            <div class="card bg-primary bg-gradient text-light border" role="button" style="user-select: none;" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <div class="card-body">
                    <h2 class="text-center">Канцтовари</h2>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 mt-3">
            <div class="card bg-primary bg-gradient text-light border" role="button" style="user-select: none;" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                <div class="card-body">
                    <h2 class="text-center">Вакцини</h2>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 mt-3">
            <div class="card bg-primary bg-gradient text-light border" role="button" style="user-select: none;" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                <div class="card-body">
                    <h3 class="text-center">Замовлення одноразки B1</h3>
                </div>
            </div>
        </div>
        @for($i = 1; $i < 7; $i++)
        <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Вибір</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mb1">
                        <label for="" class="my-1">Виберіть опцію</label>
                        <select class="form-select mt-1 select{{ $i }}" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">Перегляд сторінки</option>
                            <option value="2">Завантажити дані</option>
                            @if($i !== 2)
                            <option value="3">Імпортувати дані</option>
                            @endif
                            <option value="4">Створити нову дату</option>
                            @if($i !== 2)
                            <option value="5">Завантажити дані між датами</option>
                            @endif
                        </select>
                        <form class="form{{ $i }}" method="" action="" >
                            {{-- VIEW --}}
                            <div class="view{{ $i }}" hidden>
                                <label for="" class="mt-1">Виберіть дату</label>
                                <select class="form-select mt-1 viewdate{{ $i }}" aria-label="Default select example">
                                    <option selected></option>
                                </select>
                            </div>
                            {{-- EXPORT --}}
                            <div class="export{{ $i }}" hidden>
                                <label for="" class="mt-1">Виберіть дату</label>
                                <select class="form-select mt-1 exportdate{{ $i }}" name="export" aria-label="Default select example">
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="text-center mt-3">
                                <button hidden type="submit" class="btn btn-primary exportlink{{ $i }}">Завантажити дані</button>
                            </div>
                            {{-- IMPORT --}}
                            <div class="import{{ $i }}" hidden>
                                <label for="" class="mt-1">Виберіть дату</label>
                                <select class="form-select mt-1 importdate{{ $i }}" name="import" aria-label="Default select example">
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="text-center mt-3 importfile{{ $i }}" hidden>
                                <label for="formFile" class="form-label">Виберіть файл для імпортування</label>
                                <input class="form-control file{{ $i }}" type="file" name="excel" id="formFile">
                            </div>
                            <div class="text-center mt-3">
                                <button hidden type="submit" class="btn btn-primary importlink{{ $i }}">Імпортувати дані</button>
                            </div>
                            {{-- CREATE --}}
                            @if($i == 2)
                                <div class="create{{ $i }}" hidden>
                                    <label class="mt-1">Впишіть дату (повинна бути такого типу, як вписано нище)</label>
                                    <input class="form-control createdate{{ $i }}" name="create" placeholder="YYYY-MM-DD">
                                    <div class="implement mt-1">
                                        <input type="checkbox" class="createimplement" name="implement" id="implement">
                                        <label for="implement" class="text-break">Скопіювати назви з останньої дати</label>
                                    </div>
                                    <div class="remove mt-1" hidden>
                                        <input type="checkbox" class="createremove" name="remove" id="remove">
                                        <label for="remove">Видалити поля з нульовими показниками</label>
                                    </div>
                                </div>
                                <div class="text-center mt-3 createfile{{ $i }}" hidden>
                                    <label for="formFile" class="form-label">Виберіть файл для імпортування</label>
                                    <input class="form-control cfile{{ $i }}" type="file" name="cexcel" id="formFile">
                                </div>
                                <div class="text-center mt-3">
                                    <button hidden type="submit" class="btn btn-primary createlink{{ $i }}">Створити дату</button>
                                </div>
                            @else
                                <div class="create{{ $i }}" hidden>
                                    <label class="mt1">Впишіть дату (повинна бути такого типу, як вписано нище)</label>
                                    <input class="form-control createdate{{ $i }}" name="create" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="text-center mt-3 createfile{{ $i }}" hidden>
                                    <label for="formFile" class="form-label">Виберіть файл для імпортування</label>
                                    <input class="form-control cfile{{ $i }}" type="file" name="cexcel" id="formFile">
                                </div>
                                <div class="text-center mt-3">
                                    <button hidden type="submit" class="btn btn-primary createlink{{ $i }}">Створити дату</button>
                                </div>
                            @endif
                            {{-- EXPORT BETWEEN --}}
                            <div class="export_between{{ $i }}" hidden>
                                <label class="mt-1">Виберіть дату ВІД якої ви хочете завантажити дані</label>

                                <select name="date_from" class="export_between_date_from{{ $i }} form-select mt-1" aria-label="Default select example">
                                    <option selected></option>
                                </select>

                                <div class="export_between_div{{ $i }} mt-3" hidden>

                                    <label>Виберіть дату ДО якої ви хочете завантажити дані</label>

                                    <select name="date_to" class="export_between_date_to{{ $i }} form-select mt-1" aria-label="Default select example">
                                        <option selected></option>
                                    </select>

                                </div>
                                <div class="export_between_link{{ $i }} mt-3" hidden>
                                    <button type="submit" class="btn btn-primary">Завантажити дані</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="#" class="viewlink{{ $i }}" hidden>
                                <button class="btn btn-primary">Перейти на сторінку</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor

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
    <div class="date" hidden>
        @foreach ($stationeries as $stationery)
            <i class="date_stationery">{{$stationery->date}}</i><br>
        @endforeach
        @foreach ($vaccines as $vaccine)
            <i class="date_vaccine">{{$vaccine->date}}</i><br>
        @endforeach
    </div>
    @csrf
</div>

<script>
    let dates_st = [];
    let date_st = document.querySelectorAll('.date_stationery')

    date_st.forEach(e => {
            if(dates_st.includes(e.innerText))
            {

            } else
            {
                if(e.innerText.length !== 0)
                {
                    dates_st.push(e.innerText)
                }
            }
    });

    dates_st.push('2023-01-01')

    let dates_va = [];
    let date_va = document.querySelectorAll('.date_vaccine')

    date_va.forEach(e => {
            if(dates_va.includes(e.innerText))
            {

            } else
            {
                if(e.innerText.length !== 0)
                {
                    dates_va.push(e.innerText)
                }
            }
    });


    let ci = 0

    let createimplement = document.querySelector('.createimplement')
    let createremove = document.querySelector('.remove')

    @for($i = 1; $i < 3; $i++)

        ci = {{ $i }}

        let select{{$i}} = document.querySelector('.select{{$i}}')
        let form{{$i}} = document.querySelector('.form{{$i}}')

        let view{{$i}} = document.querySelector('.view{{$i}}')
        let viewdate{{$i}} = document.querySelector('.viewdate{{$i}}')
        let viewlink{{$i}} = document.querySelector('.viewlink{{$i}}')

        let export{{$i}} = document.querySelector('.export{{$i}}')
        let exportdate{{$i}} = document.querySelector('.exportdate{{$i}}')
        let exportlink{{$i}} = document.querySelector('.exportlink{{$i}}')

        let import{{$i}} = document.querySelector('.import{{$i}}')
        let importdate{{$i}} = document.querySelector('.importdate{{$i}}')
        let importlink{{$i}} = document.querySelector('.importlink{{$i}}')
        let importfile{{$i}} = document.querySelector('.importfile{{$i}}')

        let create{{$i}} = document.querySelector('.create{{$i}}')
        let createdate{{$i}} = document.querySelector('.createdate{{$i}}')
        let createlink{{$i}} = document.querySelector('.createlink{{$i}}')
        let createfile{{$i}} = document.querySelector('.createfile{{$i}}')

        let file{{$i}} = document.querySelector('.file{{$i}}')
        let cfile{{$i}} = document.querySelector('.cfile{{$i}}')

        let export_between{{$i}} = document.querySelector('.export_between{{$i}}')
        let export_between_div{{$i}} = document.querySelector('.export_between_div{{$i}}')
        let export_between_date_from{{$i}} = document.querySelector('.export_between_date_from{{$i}}')
        let export_between_date_to{{$i}} = document.querySelector('.export_between_date_to{{$i}}')
        let export_between_link{{$i}} = document.querySelector('.export_between_link{{$i}}')

        if(ci == 1)
        {
            dates_st.forEach(e => {
                viewdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                exportdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                importdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                export_between_date_from{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
            })
        } else if(ci == 2)
        {
            dates_va.forEach(e => {
                viewdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                exportdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                importdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                export_between_date_from{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
            })
        } else if(ci == 3)
        {
            dates_st.forEach(e => {
                viewdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                exportdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                importdate{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                export_between_date_from{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
            })
        }

        select{{$i}}.addEventListener('change', function () {
            if(select{{ $i }}.value == 1)
            {
                view{{$i}}.removeAttribute('hidden')
            } else
            {
                view{{$i}}.setAttribute('hidden', '')
                viewlink{{$i}}.setAttribute('hidden', '')
            }
            if(select{{$i}}.value == 2)
            {
                let csrf = document.createElement('input')
                csrf.type = 'hidden'
                csrf.name = '_token'
                csrf.value = '{{ csrf_token() }}'
                form{{$i}}.appendChild(csrf)
                export{{$i}}.removeAttribute('hidden')
            } else
            {
                export{{$i}}.setAttribute('hidden', '')
                exportlink{{$i}}.setAttribute('hidden', '')
            }
            if(select{{$i}}.value == 3)
            {
                let csrf = document.createElement('input')
                csrf.type = 'hidden'
                csrf.name = '_token'
                csrf.value = '{{ csrf_token() }}'
                form{{$i}}.appendChild(csrf)
                import{{$i}}.removeAttribute('hidden')
            } else
            {
                importfile{{$i}}.setAttribute('hidden', '')
                importlink{{$i}}.setAttribute('hidden', '')
                import{{$i}}.setAttribute('hidden', '')
            }
            if(select{{$i}}.value == 4)
            {
                let csrf = document.createElement('input')
                csrf.type = 'hidden'
                csrf.name = '_token'
                csrf.value = '{{ csrf_token() }}'
                form{{$i}}.appendChild(csrf)
                create{{$i}}.removeAttribute('hidden')
            } else
            {
                createlink{{$i}}.setAttribute('hidden', '')
                createfile{{$i}}.setAttribute('hidden', '')
                create{{$i}}.setAttribute('hidden', '')
            }
            if(select{{$i}}.value == 5)
            {
                let csrf = document.createElement('input')
                csrf.type = 'hidden'
                csrf.name = '_token'
                csrf.value = '{{ csrf_token() }}'
                form{{$i}}.appendChild(csrf)
                export_between{{$i}}.removeAttribute('hidden')
            } else
            {
                export_between{{$i}}.setAttribute('hidden', '')
            }
        })

        export_between_date_from{{$i}}.addEventListener('change', function () {
            if(export_between_date_from{{$i}}.value.length >= 1)
            {
                export_between_div{{$i}}.removeAttribute('hidden')
                export_between_date_to{{$i}}.innerHTML = `<option></option>`
                let selected_option = export_between_date_from{{$i}}.options[export_between_date_from{{$i}}.selectedIndex].value
                dates.forEach(e => {
                    if(new Date(e).getTime() >= new Date(selected_option).getTime())
                    {
                        export_between_date_to{{$i}}.innerHTML += `<option value="${e}">${e}</option>`
                    }
                });
            } else
            {
                export_between_div{{$i}}.setAttribute('hidden', '')
            }
        })

        export_between_date_to{{$i}}.addEventListener('change', function () {
            if(export_between_date_to{{$i}}.value.length >= 1 && export_between_date_from{{$i}}.value.length >= 1)
            {
                form{{$i}}.attributes.method.value = 'POST'
                if({{ $i }} == 1)
                {
                    form{{$i}}.attributes.action.value = '{{ route("stationery.export") }}'
                } else if({{ $i }} == 2)
                {
                    form{{$i}}.attributes.action.value = '{{ route("vaccine.export") }}'
                } else if({{ $i }} == 3)
                {
                    form{{$i}}.attributes.action.value = '{{ route("orderb1.export") }}'
                }
                export_between_link{{$i}}.removeAttribute('hidden')
            } else
            {
                export_between_link{{$i}}.setAttribute('hidden', '')
            }
        })

        viewdate{{$i}}.addEventListener('change', function () {
            if(viewdate{{$i}}.length !== 0)
            {
                if({{ $i }} == 1)
                {
                    viewlink{{$i}}.href = `http://excel/stationery/`+viewdate{{$i}}.value
                } else if({{ $i }} == 2)
                {
                    viewlink{{$i}}.href = `http://excel/vaccine/`+viewdate{{$i}}.value
                } else if({{ $i }} == 3)
                {
                    viewlink{{$i}}.href = `http://excel/orderb1/`+viewdate{{$i}}.value
                }
                viewlink{{$i}}.removeAttribute('hidden')
            } else
            {
                viewlink{{$i}}.setAttribute('hidden', '')
            }

        })

        exportdate{{$i}}.addEventListener('change', function () {
            if(exportdate{{$i}}.length !== 0)
            {
                exportlink{{$i}}.removeAttribute('hidden')
                form{{$i}}.attributes.method.value = 'POST'
                if({{ $i }} == 1)
                {
                    form{{$i}}.attributes.action.value = '{{ route("stationery.export") }}'
                } else if({{ $i }} == 2)
                {
                    form{{$i}}.attributes.action.value = '{{ route("vaccine.export") }}'
                } else if({{ $i }} == 3)
                {
                    form{{$i}}.attributes.action.value = '{{ route("orderb1.export") }}'
                }
            } else
            {
                exportlink{{$i}}.setAttribute('hidden', '')
            }
        })

        importdate{{$i}}.addEventListener('change', function () {
            if(importdate{{$i}}.length !== 0)
            {
                form{{$i}}.attributes.method.value = 'POST'
                if({{ $i }} == 1)
                {
                    form{{$i}}.attributes.action.value = '{{ route("stationery.import") }}'
                } else if({{ $i }} == 2)
                {
                    form{{$i}}.attributes.action.value = '{{ route("vaccine.import") }}'
                } else if({{ $i }} == 3)
                {
                    form{{$i}}.attributes.action.value = '{{ route("orderb1.import") }}'
                }
                form{{$i}}.setAttribute('enctype', 'multipart/form-data')
                importfile{{$i}}.removeAttribute('hidden')
            } else
            {
                importfile{{$i}}.setAttribute('hidden', '')
            }
        })

        createdate{{$i}}.addEventListener('keyup', function () {
            if(createdate{{$i}}.value.length == 10){
                form{{$i}}.attributes.method.value = 'POST'
                if({{ $i }} == 1)
                {
                    form{{$i}}.attributes.action.value = '{{ route("stationery.import") }}'
                    createfile{{$i}}.removeAttribute('hidden')
                } else if({{ $i }} == 2)
                {
                    form{{$i}}.attributes.action.value = '{{ route("vaccine.import") }}'
                    createimplement.removeAttribute('hidden')
                    createlink2.removeAttribute('hidden')
                } else if({{ $i }} == 3)
                {
                    form{{$i}}.attributes.action.value = '{{ route("orderb1.import") }}'
                    createfile{{$i}}.removeAttribute('hidden')
                }
                form{{$i}}.setAttribute('enctype', 'multipart/form-data')
            } else
            {
                if({{ $i }} !== 2)
                {
                    createfile{{$i}}.setAttribute('hidden', '')
                } else
                {
                    createlink{{$i}}.setAttribute('hidden', '')
                }
            }
        })

        if({{ $i }} == 2)
        {
            createimplement.addEventListener('change', function () {
                if(createimplement.checked)
                {
                    console.log()
                    createremove.removeAttribute('hidden')
                } else
                {
                    createremove.setAttribute('hidden', '')
                }
            })
        }


        file{{$i}}.addEventListener('change', function (){
            importlink{{$i}}.removeAttribute('hidden')
        })

        cfile{{$i}}.addEventListener('change', function () {
            createlink{{$i}}.removeAttribute('hidden')
        })
    @endfor

</script>

@endsection
