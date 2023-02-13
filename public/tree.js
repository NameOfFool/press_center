$.fn.extend({
    treed: function (o) {

        var openedClass = 'fa-minus';
        var closedClass = 'fa-plus';
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this);
            branch.prepend("<i class=\"fa fa-minus\"></i>");
            branch.addClass('branch');
            branch.children().children().toggle();
            branch.children("i").on('click', function (e) {
                var branch = $(this).parent();
                if (this === e.target) {
                    var icon = $(this);
                    icon.toggleClass(closedClass);
                    icon.toggleClass(openedClass);
                    branch.children().children().toggle();
                    console.log(icon)
                }
            })
            branch.children().children().toggle();
        });
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});
$('#tree1').treed();
