from reviews.models import Reviews
from projects.models import Project
from django.forms import ModelForm, TextInput, Textarea, HiddenInput, Select

class ReviewForm(ModelForm):
    class Meta:
        model = Reviews
        fields = ['project', 'name', 'message', 'rate']
        widgets = {
            'project': Select(attrs={
                'class': 'form-input mb-3',
                'style': """appearance: none;
                    -webkit-appearance: none;
                    -moz-appearance: none;""",
            }),
            'message': Textarea(attrs={
                'rows': 8,
                'class': 'form-input mb-3'
            }),
            'name': TextInput(attrs={
                'class': 'form-input mb-3'
            }),
            'rate': HiddenInput(attrs={
                'class': 'form-group star-rating mb-3',
                'value': 0,
                'id': 'ratingValue'
            }),
        }
    
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields['project'].queryset = Project.objects.all()