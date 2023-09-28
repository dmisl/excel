@extends('layout.main')

@section('title', 'Канцтовари')

@section('content')
    <style>
        tr, td, th
        {
            border: 1px solid black;
            font-size: 13px;
        }

        .thead
        {
            position: sticky;
            top: 0;
            z-index: 30;
            background-color: white;
        }

        .tbody
        {
            position: sticky;
            left: 0;
            background: white;
            z-index: 29;
        }

        .header1 p
        {
            padding: 0;
            width: 400px;
            font-size: 20px;
            height: 20px;
            font-style: italic;
        }
        .header1 td
        {
            padding: 0;
        }

    </style>
    <div class="container mb-0">

        <h1 class="text-center">Вакцини</h1>

        <h1 class="text-center">{{ $date }}</h1>

        <div class="text-center my-2">
            <form action="{{ route('stationery.export') }}" method="POST">
                @csrf
                <input type="hidden" name="date" value="{{ $date }}">
                <button class="btn btn-primary" type="submit">Скачати</button>
            </form>
        </div>


        <div role="button" class="bg-success bg-gradient w-50 mx-auto rounded-top user-select-none text-center text-light mb-0 pb-0" data-bs-toggle="modal" data-bs-target="#addRowModal">
            <h4 class="py-1 mb-0 pb-0">Добавити поле</h4>
        </div>
    </div>

<div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Добавлення поля</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('vaccine.create') }}" method="POST">

                <div class="modal-body">

                    {{-- hidden --}}
                    @csrf
                    <input type="hidden" name="date" value="{{ $date }}">

                    <div class="pb-2 mt-1 w-50 mx-auto text-center">
                        <label for="">Назва вакцини</label>
                        <input name="name" type="text" class="form-control text-center">
                    </div>

                    <div class="pb-2 w-50 mx-auto text-center">
                        <label for="">Серія вакцини</label>
                        <input name="series" type="text" class="form-control text-center">
                    </div>

                    <div class="pb-2 w-50 mx-auto text-center">
                        <label for="">Термін придатності</label>
                        <input name="expiry" type="text" class="form-control text-center" placeholder="ДД.ММ.РРРР">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                    <button type="submit" class="btn btn-primary row_add">Добавити</button>
                </div>
            </form>
      </div>
    </div>
</div>

        <div style="overflow:scroll; height: 65vh;">
            <table class="table text-center small stationery" style="border: 1px solid black; border-collapse: collapse;">
                <tr class="header1">
                    <td rowspan="2"></td>
                    <td rowspan="2" style="background-color: white;">
                        № п/п
                    </td>
                    <td colspan="3" style="background-color: orange">
                        <p></p>
                    </td>
                    <td colspan="4" style="background-color: rgb(197, 162, 243);">
                        <p>
                            В1, Червоної Калини 68
                        </p>
                    </td>
                    <td colspan="4" style="background-color: rgb(228, 245, 152)">
                        <p>
                            В4, Щирецька 36
                        </p>
                    </td>
                    <td colspan="4" style="background-color: rgb(146, 190, 240)">
                        <p>
                            В5, Чорновола
                        </p>
                    </td>
                    <td colspan="4" style="background-color: rgb(210, 224, 241)">
                        <p>
                            В6, Новояворівськ
                        </p>
                    </td>
                    <td colspan="4" style="background-color: rgb(255, 154, 154)">
                        <p>
                            В8, Ковалика
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 12px; background-color:rgb(148, 192, 139); padding: 10px 0;">Назва вакцини</td>
                    <td style="font-size: 12px; background-color:rgb(148, 192, 139); padding: 10px 0;">Серія вакцини</td>
                    <td style="font-size: 10px; background-color:rgb(148, 192, 139); padding: 10px 0;">Термін придатності</td>
                    <td style="font-size: 12px; background-color: rgb(197, 162, 243); padding: 10px 0;">залишок на початок місяця</td>
                    <td style="font-size: 12px; background-color: rgb(197, 162, 243); padding: 10px 0;">використано</td>
                    <td style="font-size: 12px; background-color: rgb(197, 162, 243); padding: 10px 0;">із них дорослі</td>
                    <td style="font-size: 12px; background-color: rgb(197, 162, 243); padding: 10px 0;">діти до року</td>
                    <td style="font-size: 12px; background-color: rgb(228, 245, 152); padding: 10px 0;">залишок на початок місяця</td>
                    <td style="font-size: 12px; background-color: rgb(228, 245, 152); padding: 10px 0;">використано</td>
                    <td style="font-size: 12px; background-color: rgb(228, 245, 152); padding: 10px 0;">із них дорослі</td>
                    <td style="font-size: 12px; background-color: rgb(228, 245, 152); padding: 10px 0;">діти до року</td>
                    <td style="font-size: 12px; background-color: rgb(146, 190, 240); padding: 10px 0;">залишок на початок місяця</td>
                    <td style="font-size: 12px; background-color: rgb(146, 190, 240); padding: 10px 0;">використано</td>
                    <td style="font-size: 12px; background-color: rgb(146, 190, 240); padding: 10px 0;">із них дорослі</td>
                    <td style="font-size: 12px; background-color: rgb(146, 190, 240); padding: 10px 0;">діти до року</td>
                    <td style="font-size: 12px; background-color: rgb(210, 224, 241); padding: 10px 0;">залишок на початок місяця</td>
                    <td style="font-size: 12px; background-color: rgb(210, 224, 241); padding: 10px 0;">використано</td>
                    <td style="font-size: 12px; background-color: rgb(210, 224, 241); padding: 10px 0;">із них дорослі</td>
                    <td style="font-size: 12px; background-color: rgb(210, 224, 241); padding: 10px 0;">діти до року</td>
                    <td style="font-size: 12px; background-color: rgb(255, 154, 154); padding: 10px 0;">залишок на початок місяця</td>
                    <td style="font-size: 12px; background-color: rgb(255, 154, 154); padding: 10px 0;">використано</td>
                    <td style="font-size: 12px; background-color: rgb(255, 154, 154); padding: 10px 0;">із них дорослі</td>
                    <td style="font-size: 12px; background-color: rgb(255, 154, 154); padding: 10px 0;">діти до року</td>
                </tr>
                @php
                    $asd = 1;
                @endphp
                @foreach ($vaccines as $vaccine)
                    <tr>
                        <td class="delete m-0 bg-danger bg-gradient" role="button" nid="{{ $vaccine->id }}" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Видалити рядок">
                            <img src="https://cdn-icons-png.flaticon.com/512/3405/3405244.png" class="p-0 m-0" width="17">
                        </td>
                        <td class="number" vid="{{ $vaccine->id }}">
                            {{ $asd }}
                            @php($asd++)
                        </td>
                        <td class="name" vid="{{ $vaccine->id }}" style="font-size: 20px; padding: 0; text-align: left;">
                            {{ $vaccine->name }}
                        </td>
                        <td class="series" vid="{{ $vaccine->id }}" style="background-color: rgb(224, 164, 164); font-size: 20px; padding: 0;">
                            {{ $vaccine->series }}
                        </td>
                        <td class="expiry" vid="{{ $vaccine->id }}" style="background-color: rgb(157, 189, 238); font-size: 20px; padding: 0;">
                            {{ $vaccine->expiry }}
                        </td>
                        <td class="balance1" vid="{{ $vaccine->id }}" style="background-color: rgb(197, 162, 243); font-size: 20px; padding: 0;">
                            {{ $vaccine->balance1 }}
                        </td>
                        <td class="used1" vid="{{ $vaccine->id }}" style="background-color: rgb(197, 162, 243); font-size: 20px; padding: 0;">
                            {{ $vaccine->used1 }}
                        </td>
                        <td class="adults1" vid="{{ $vaccine->id }}" style="background-color: rgb(197, 162, 243); font-size: 20px; padding: 0;">
                            {{ $vaccine->adults1 }}
                        </td>
                        <td class="children1" vid="{{ $vaccine->id }}" style="background-color: rgb(197, 162, 243); font-size: 20px; padding: 0;">
                            {{ $vaccine->children1 }}
                        </td>
                        <td class="balance2" vid="{{ $vaccine->id }}" style="background-color: rgb(228, 245, 152); font-size: 20px; padding: 0;">
                            {{ $vaccine->balance2 }}
                        </td>
                        <td class="used2" vid="{{ $vaccine->id }}" style="background-color: rgb(228, 245, 152); font-size: 20px; padding: 0;">
                            {{ $vaccine->used2 }}
                        </td>
                        <td class="adults2" vid="{{ $vaccine->id }}" style="background-color: rgb(228, 245, 152); font-size: 20px; padding: 0;">
                            {{ $vaccine->adults2 }}
                        </td>
                        <td class="children2" vid="{{ $vaccine->id }}" style="background-color: rgb(228, 245, 152); font-size: 20px; padding: 0;">
                            {{ $vaccine->children2 }}
                        </td>
                        <td class="balance3" vid="{{ $vaccine->id }}" style="background-color: rgb(146, 190, 240); font-size: 20px; padding: 0;">
                            {{ $vaccine->balance3 }}
                        </td>
                        <td class="used3" vid="{{ $vaccine->id }}" style="background-color: rgb(146, 190, 240); font-size: 20px; padding: 0;">
                            {{ $vaccine->used3 }}
                        </td>
                        <td class="adults3" vid="{{ $vaccine->id }}" style="background-color: rgb(146, 190, 240); font-size: 20px; padding: 0;">
                            {{ $vaccine->adults3 }}
                        </td>
                        <td class="children3" vid="{{ $vaccine->id }}" style="background-color: rgb(146, 190, 240); font-size: 20px; padding: 0;">
                            {{ $vaccine->children3 }}
                        </td>
                        <td class="balance4" vid="{{ $vaccine->id }}" style="background-color: rgb(210, 224, 241); font-size: 20px; padding: 0;">
                            {{ $vaccine->balance4 }}
                        </td>
                        <td class="used4" vid="{{ $vaccine->id }}" style="background-color: rgb(210, 224, 241); font-size: 20px; padding: 0;">
                            {{ $vaccine->used4 }}
                        </td>
                        <td class="adults4" vid="{{ $vaccine->id }}" style="background-color: rgb(210, 224, 241); font-size: 20px; padding: 0;">
                            {{ $vaccine->adults4 }}
                        </td>
                        <td class="children4" vid="{{ $vaccine->id }}" style="background-color: rgb(210, 224, 241); font-size: 20px; padding: 0;">
                            {{ $vaccine->children4 }}
                        </td>
                        <td class="balance5" vid="{{ $vaccine->id }}" style="background-color: rgb(255, 154, 154); font-size: 20px; padding: 0;">
                            {{ $vaccine->balance5 }}
                        </td>
                        <td class="used5" vid="{{ $vaccine->id }}" style="background-color: rgb(255, 154, 154); font-size: 20px; padding: 0;">
                            {{ $vaccine->used5 }}
                        </td>
                        <td class="adults5" vid="{{ $vaccine->id }}" style="background-color: rgb(255, 154, 154); font-size: 20px; padding: 0;">
                            {{ $vaccine->adults5 }}
                        </td>
                        <td class="children5" vid="{{ $vaccine->id }}" style="background-color: rgb(255, 154, 154); font-size: 20px; padding: 0;">
                            {{ $vaccine->children5 }}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            {{-- HIDDEN DELETE MODALS --}}
            <div>
                @foreach($vaccines as $vaccine)
                    <button hidden type="button" class="btn btn-primary deleteModal{{ $vaccine->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $vaccine->id }}">

                    </button>

                    <div class="modal fade" id="deleteModal{{ $vaccine->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Видалення поля</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('vaccine.delete') }}" method="POST">
                                    <div class="modal-body">
                                        <h3>Ви дійсно хочете видалити поле з назвою вакцини {{ $vaccine->name }}?</h3>
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $vaccine->id }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ні</button>
                                        <button type="submit" class="btn btn-danger">Видалити</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container">
                <div class="text-center">
                    <button hidden class="save btn btn-success mt-2">ЗБЕРЕГТИ</button>
                </div>
            </div>

            <form class="update_form" action="{{ route('vaccine.update') }}" method="POST">
                @csrf
                <div class="updates" hidden></div>
            </form>

<script>

    let deletes = document.querySelectorAll('.delete')
    deletes.forEach(e => {
        e.addEventListener('click', function () {
            document.querySelector('.deleteModal'+e.attributes.nid.value).click()
        })
    });

    // Popovers
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

    let updates = document.querySelector('.updates')

    let update_form = document.querySelector('.update_form')

    let save = document.querySelector('.save')

    save.addEventListener('click', function () {
        update_form.innerHTML += `<button hidden class="update_submit" type="submit"></button>`
        document.querySelector('.update_submit').click()
    })

    function updates_check()
    {
        if(document.querySelector('.updates').children.length >= 1)
        {
            save.removeAttribute('hidden')
        } else
        {
            save.setAttribute('hidden', '')
        }
    }

    let number = document.querySelectorAll('.number')
    number.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][number]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][number]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][number]">`
                    document.querySelector(`[name='update[${vid}][number]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let name = document.querySelectorAll('.name')
    name.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function () {
            let vid = el.attributes.vid.value
            if(document.querySelector(`[name='update[${vid}][name]']`) !== null)
            {
                document.querySelector(`[name='update[${vid}][name]']`).setAttribute('value', el.innerText)
            } else
            {
                updates.innerHTML += `<input type="hidden" name="update[${vid}][name]">`
                document.querySelector(`[name='update[${vid}][name]']`).setAttribute('value', el.innerText)
            }
            updates_check()
        })
    });
    let series = document.querySelectorAll('.series')
    series.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function () {
            let vid = el.attributes.vid.value
            if(document.querySelector(`[name='update[${vid}][series]']`) !== null)
            {
                document.querySelector(`[name='update[${vid}][series]']`).setAttribute('value', el.innerText)
            } else
            {
                updates.innerHTML += `<input type="hidden" name="update[${vid}][series]">`
                document.querySelector(`[name='update[${vid}][series]']`).setAttribute('value', el.innerText)
            }
            updates_check()
        })
    });
    let expiry = document.querySelectorAll('.expiry')
    expiry.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function () {
            let vid = el.attributes.vid.value
            if(document.querySelector(`[name='update[${vid}][expiry]']`) !== null)
            {
                document.querySelector(`[name='update[${vid}][expiry]']`).setAttribute('value', el.innerText)
            } else
            {
                updates.innerHTML += `<input type="hidden" name="update[${vid}][expiry]">`
                document.querySelector(`[name='update[${vid}][expiry]']`).setAttribute('value', el.innerText)
            }
            updates_check()
        })
    });
    let balance1 = document.querySelectorAll('.balance1')
    balance1.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][balance1]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][balance1]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][balance1]">`
                    document.querySelector(`[name='update[${vid}][balance1]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let used1 = document.querySelectorAll('.used1')
    used1.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][used1]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][used1]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][used1]">`
                    document.querySelector(`[name='update[${vid}][used1]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let adults1 = document.querySelectorAll('.adults1')
    adults1.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][adults1]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][adults1]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][adults1]">`
                    document.querySelector(`[name='update[${vid}][adults1]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let children1 = document.querySelectorAll('.children1')
    children1.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][children1]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][children1]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][children1]">`
                    document.querySelector(`[name='update[${vid}][children1]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let balance2 = document.querySelectorAll('.balance2')
    balance2.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][balance2]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][balance2]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][balance2]">`
                    document.querySelector(`[name='update[${vid}][balance2]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let used2 = document.querySelectorAll('.used2')
    used2.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][used2]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][used2]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][used2]">`
                    document.querySelector(`[name='update[${vid}][used2]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let adults2 = document.querySelectorAll('.adults2')
    adults2.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][adults2]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][adults2]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][adults2]">`
                    document.querySelector(`[name='update[${vid}][adults2]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let children2 = document.querySelectorAll('.children2')
    children2.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][children2]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][children2]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][children2]">`
                    document.querySelector(`[name='update[${vid}][children2]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let balance3 = document.querySelectorAll('.balance3')
    balance3.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][balance3]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][balance3]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][balance3]">`
                    document.querySelector(`[name='update[${vid}][balance3]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let used3 = document.querySelectorAll('.used3')
    used3.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][used3]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][used3]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][used3]">`
                    document.querySelector(`[name='update[${vid}][used3]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let adults3 = document.querySelectorAll('.adults3')
    adults3.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][adults3]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][adults3]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][adults3]">`
                    document.querySelector(`[name='update[${vid}][adults3]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let children3 = document.querySelectorAll('.children3')
    children3.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][children3]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][children3]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][children3]">`
                    document.querySelector(`[name='update[${vid}][children3]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let balance4 = document.querySelectorAll('.balance4')
    balance4.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][balance4]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][balance4]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][balance4]">`
                    document.querySelector(`[name='update[${vid}][balance4]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let used4 = document.querySelectorAll('.used4')
    used4.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][used4]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][used4]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][used4]">`
                    document.querySelector(`[name='update[${vid}][used4]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let adults4 = document.querySelectorAll('.adults4')
    adults4.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][adults4]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][adults4]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][adults4]">`
                    document.querySelector(`[name='update[${vid}][adults4]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let children4 = document.querySelectorAll('.children4')
    children4.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][children4]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][children4]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][children4]">`
                    document.querySelector(`[name='update[${vid}][children4]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let balance5 = document.querySelectorAll('.balance5')
    balance5.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][balance5]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][balance5]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][balance5]">`
                    document.querySelector(`[name='update[${vid}][balance5]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let used5 = document.querySelectorAll('.used5')
    used5.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][used5]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][used5]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][used5]">`
                    document.querySelector(`[name='update[${vid}][used5]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let adults5 = document.querySelectorAll('.adults5')
    adults5.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][adults5]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][adults5]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][adults5]">`
                    document.querySelector(`[name='update[${vid}][adults5]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
    let children5 = document.querySelectorAll('.children5')
    children5.forEach(el => {
        el.setAttribute('contenteditable', 'true')
        el.addEventListener('keyup', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
                let vid = el.attributes.vid.value
                if(document.querySelector(`[name='update[${vid}][children5]']`) !== null)
                {
                    document.querySelector(`[name='update[${vid}][children5]']`).setAttribute('value', el.innerText)
                } else
                {
                    updates.innerHTML += `<input type="hidden" name="update[${vid}][children5]">`
                    document.querySelector(`[name='update[${vid}][children5]']`).setAttribute('value', el.innerText)
                }
                updates_check()
            }
            else
            {
                e.preventDefault()
            }
        })
        el.addEventListener('keydown', function (e) {
            if (e.code.includes('Digit') || e.code === 'Backspace' || e.code === 'Period')
            {
            }
            else
            {
                e.preventDefault()
            }
        })
    });
</script>

@endsection
